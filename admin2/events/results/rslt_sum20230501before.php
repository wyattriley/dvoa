<?php
include ("../../tools/db.dvoa.class.php");
include ("../../tools/dvoa_tools.inc.php");
include ("rank_tools.inc.php");
include ("ev_gr_tools.inc.php");
include ("rslt_sum_tools.inc.php");

$runner_id = intval($_REQUEST['runner_id']);
$year      = intval($_REQUEST['year']);

if (isset($_REQUEST['t'])) {
	$type = $_REQUEST['t'];
	$st   = $_REQUEST['st'];
	$find_url = "find.php?t=$type&st=$st";
}

$sortDir = ($year >= 2000 && $year <= 2004) ? "ASC" : "DESC";
$year2 = ($year >= 2000) ? substr($year,2,2) : $year;

if ($year >= 2013) {
	$db = new MeekroDB();
	//$sql = "SELECT name,rank_score_top as score,sex FROM result_runner WHERE id = %i";
	$sql  = "SELECT r.name,r.sex,(SELECT k.rank_score FROM runner_rank k WHERE k.rank_year = %i AND k.runner_id = r.id AND k.crs_id = 0) as score";
	$sql .= " FROM result_runner r";
	$sql .= " WHERE r.id = %i";
	list($name,$sex,$score) = $db->queryFirstList($sql,$year,$runner_id);
	if (($score == NULL) || ($score == ""))
		$score = 0;
} else {
	$db = new MeekroDB("dbrank");
	$sql = "SELECT CONCAT_WS(' ',fname,lname) as name,sex,score FROM runner$year2 WHERE runner_id = %i";	
	list($name,$sex,$score) = $db->queryFirstList($sql,$runner_id);
}
	
$title = sprintf("Summary: %s &nbsp;&nbsp;($year)",$name);
$overall_score = $score;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php printf("$title");?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="ev_show.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="../../images/newflag.ico" />
</head>

<body>
<div id="wrap">
	<div id="header">
		<h1>Results & Rankings Summary</h1>
		<?php
		printf("<h3>%s - %s</h3>\n",StripSlashes($name),$year);
		?>
	</div>

	<div id="content">
		<h3>Event Summary</h3>

		<?php
		if ($_SERVER['HTTP_HOST'] != "localhost")
			$root = "http://www.dvoa.org";
		else
			$root = "http://localhost/dvoa";

		if (strpos($_SERVER['HTTP_REFERER'],"rank") == true)
			printf("<p align=\"center\"><a href=\"$root/rank/index.php\">Back to Rankings Page</a></p>\n");
		if (strpos($_SERVER['HTTP_REFERER'],"results") == true)
			printf("<p align=\"center\"><a href=\"$root/events/results/index.php\">Back to Results Page</a></p>\n");

		if ($year >= 2013) {
			$sql  = "SELECT l.sked_id as event_id,l.ev_date AS event_date,l.cs_id AS course_id,";
			$sql .= "IF (s.map_id != 99999, (SELECT m.shortname FROM maplist m WHERE m.id = s.map_id),s.map) AS short_name,";
			$sql .= "l.etime AS time,l.rank_score AS this_score,l.rank_speed AS pcd,'' AS zero_code,";
			$sql .= "c.cs_name AS color,c.cs_length AS dist,c.cs_climb AS elev,c.cs_controls AS ctrls,0 AS top3avg,l.rank_incl";
			$sql .= " FROM result_ledger l,result_course c,sked s";
			$sql .= " WHERE l.runner_id = %i";
			$sql .= " AND l.ev_year = %i";
			$sql .= " AND l.cs_id = c.id";
			$sql .= " AND l.sked_id = s.id";
			$sql .= " ORDER BY l.ev_date $sortDir";
			$rs = $db->query($sql,$runner_id,$year);
		} else {
			$sql  = "SELECT r.event_id,event_date,r.course_id,e.short_name,";
			$sql .= "r.time,r.this_score,r.pcd,r.zero_code,";
			$sql .= "c.color,c.dist,c.elev,c.ctrls,c.top3avg,0 AS rank_incl";
			$sql .= " FROM result$year2 r,event$year2 e,course$year2 c";
			$sql .= " WHERE r.runner_id=%i";
			$sql .= " AND r.event_id = e.event_id";
			$sql .= " AND r.course_id = c.course_id";
			$sql .= " ORDER BY e.event_date $sortDir";
			$rs = $db->query($sql,$runner_id);
		}
		
		if ($db->count() > 0) {
			printf("<table bgcolor=\"#ffffff\" border=\"1\" cellspacing=\"0\" cellpadding=\"2\" align=\"center\">\n");
			printf("<tr bgcolor=#f0f0f0><td><b>Event Name</b></td>");
			printf("<td align=center><b>Date</b></td>");
			printf("<td><b>Course</b></td>");
			printf("<td align=center><b>Time</b></td>");
			printf("<td align=center><b>Place</b></td>");
			printf("<td><b>Length</b></td>");
			printf("<td><b>Climb</b></td>");
			printf("<td><b>Ctrls</b></td>");
			printf("<td><b>Pace</b></td>");
			printf("<td><b>Score</b></td>");
			printf("<td><b>PCD*</b></td>");
			printf("<td><b>CGV*</b></td>");
			printf("</tr>\n");

			$total_secs = 0;
			$total_dist = 0.0;
			$total_elev = 0.0;
			$total_ctrls = 0;
		
			foreach ($rs as $row) {
				$pace = calc_pace(htmlspecialchars($row['time']),htmlspecialchars($row['dist']));
				$course_id = 0;
				
				printf("<tr>\n");
				if ($year >= 2013) {
					if ($row['pcd'] != 0)
						$row['pcd'] = 1 / $row['pcd'];
					$crs_name = $row['color'];
					$top3avgsql = "SELECT crs_id,1 / AVG(rank_speed) AS top3avg FROM";
					$top3avgsql.= " (SELECT c.crs_id,l.rank_speed FROM result_ledger l,result_course c";
					//$top3avgsql.= " WHERE l.cs_id = %i AND l.rank_incl = 1 AND l.cs_id = c.id";
					$top3avgsql.= " WHERE l.cs_id = %i AND l.status = 0 AND l.nc = 0 AND l.cs_id = c.id";
					$top3avgsql.= " ORDER BY rank_speed DESC LIMIT 3) ordered";
					list($course_id,$row['top3avg']) = $db->queryFirstList($top3avgsql,$row['course_id']);

					printf("<td><a href=ev_show2.php?sked_id=%d>%s</a></td>\n",$row['event_id'],$row['short_name']);
				} else {
					if ($row['time'] != "DNF" && $row['time'] != "MP" && $row['time'] != "OT" && $row['time'] != "NC")
						$row['rank_incl'] = 1;

					switch ($row['color']) {
						case 1 : $crs_name = "White";  break;
						case 2 : $crs_name = "Yellow"; break;
						case 3 : $crs_name = "Orange"; break;
						case 4 : $crs_name = "Brown";  break;
						case 5 : $crs_name = "Green";  break;
						case 6 : $crs_name = "Red";    break;
						case 7 : $crs_name = "Blue";   break;

						case 10 : $crs_name = "White";break;
						case 11 : $crs_name = "White-X";break;
						case 12 : $crs_name = "White-Y";break;
						case 20 : $crs_name = "Yellow";break;
						case 21 : $crs_name = "Yellow-X";break;
						case 22 : $crs_name = "Yellow-Y";break;
						case 30 : $crs_name = "Orange";break;
						case 31 : $crs_name = "Orange-X";break;
						case 32 : $crs_name = "Orange-Y";break;
						case 40 : $crs_name = "Brown";break;
						case 41 : $crs_name = "Brown-X";break;
						case 42 : $crs_name = "Brown-Y";break;
						case 50 : $crs_name = "Green";break;
						case 51 : $crs_name = "Green-X";break;
						case 52 : $crs_name = "Green-Y";break;
						case 60 : $crs_name = "Red";break;
						case 61 : $crs_name = "Red-X";break;
						case 62 : $crs_name = "Red-Y";break;
						case 70 : $crs_name = "Blue";break;
						case 71 : $crs_name = "Blue-X";break;
						case 72 : $crs_name = "Blue-Y";break;
						case 80 : $crs_name = "Sprint";break;
					}

					printf("<td><a href=ev_show.php?event_id=%s>%s</a></td>\n",$row['event_id'],$row['short_name']);
				}
				printf("<td align=center>%s</td>\n",formatDate($row['event_date']));
				if ($year >= 2013)
					printf("<td align=center><a href=rslt_crs.php?crs_id=%d&year=%d>%s</a></td>\n",$course_id,$year,$crs_name);
				else
					printf("<td align=center><a href=rslt_crs.php?crs_id=%d&year=%d>%s</a></td>\n",$row['color'],$year,$crs_name);
				printf("<td align=right>%s</td>\n",htmlspecialchars($row['time']));
				printf("<td align=center>%s</td>\n",GetPlaceNum($db,$row['course_id'],$runner_id,$year));
				printf("<td align=right>%2.2f</td>\n",htmlspecialchars($row['dist']));
				printf("<td align=right>%2.1f</td>\n",htmlspecialchars($row['elev']));
				printf("<td align=right>%d</td>\n",htmlspecialchars($row['ctrls']));
		

				printf("<td align=right>%s</td>\n",$pace);
				printf("<td align=right>%4.2f</td>\n",$row['this_score']);
				printf("<td align=right>%4.2f</td>\n",$row['pcd']);
				printf("<td align=right>%4.2f</td>\n",$row['top3avg']);
				printf("</tr>\n");
				
				if ($row['rank_incl'] == 1) {
					$total_secs += time2secs(htmlspecialchars($row['time']));
					$total_dist += htmlspecialchars($row['dist']);
					$total_elev += htmlspecialchars($row['elev']);
					$total_ctrls += htmlspecialchars($row['ctrls']);
				}
			}
		
			printf("<tr><td colspan=3 align=right><b>Totals:&nbsp;</b></td>\n");
			printf("<td align=right>%s</td>\n",format_secs($total_secs));
			printf("<td>&nbsp;</td>\n");
			printf("<td align=right>%2.2f</td>\n",$total_dist);
			printf("<td align=right>%2.1f</td>\n",$total_elev);
			printf("<td align=right>%d</td>\n",$total_ctrls);

			if ($total_dist > 0.0)
				$overall_pace = $total_secs / $total_dist;
			else
				$overall_pace = 0;	
				
			printf("<td align=right>%s</td>\n",format_secs($overall_pace));
			printf("<td align=right>%.2f</td>\n",$overall_score);
			printf("<td colspan=2>&nbsp;</td>\n");
			printf("</tr>\n");

			printf("</table>\n");
			?>
			<p align="center">*<strong>PCD</strong>: Personal Course Difficulty&nbsp;&nbsp;*<strong>CGV</strong>:Course Gnarliness Value (Course Difficulty)</p>
			<br />

		<?php
		}
		
		if ($year >= 2013) {
			$sql  = "SELECT r.sex,k.agecl_id as age,a.short_label as class,k.rank_score as score";
			$sql .= " FROM result_runner r,runner_rank k,agecls a";
			$sql .= " WHERE k.rank_year = %i";
			$sql .= " AND k.runner_id = r.id";
			$sql .= " AND r.club_id != 0";
			$sql .= " AND k.crs_id = 0";
			$sql .= " AND r.id = %i";
			$sql .= " AND k.agecl_id = a.id";
			$rs = $db->queryFirstRow($sql,$year,$runner_id);
		} else {
			$sql  = "SELECT r.sex,r.age,CONCAT_WS('',r.sex,r.age) AS class,r.score";
			$sql .= " FROM runner$year2 r";
			$sql .= " WHERE r.runner_id = %i";
			$sql .= " AND UPPER(r.club) IN ('DVOA','SVO','POC')";
			$rs = $db->queryFirstRow($sql,$runner_id);
		}
		
		if ($rs != NULL) {
			$row = $rs;
			$sex = $row['sex'];
			$age = $row['age'];
			$class = $row['class'];
			$score = $row['score'];
			
			printf("<h3>Ranking Summary</h3>\n");
			printf("<table align=\"center\" border=\"0\" cellpadding=\"2\" cellspacing=\"0\">\n");
			printf("<tr><td>Class:</td><td align=\"center\">%s</td></tr>\n",$class);
			printf("<tr><td>Ranking Score:</td><td align=\"center\">%4.3f</td></tr>\n",$score);
			
			if ($year >= 2013) {
				$query  = sprintf("SELECT row_number as place");
				$query .= sprintf(" FROM (SELECT k.runner_id,k.rank_score,@num := IF(@runid != k.runner_id, @num + 1, 1) AS row_number,@runid := k.runner_id");
				$query .= sprintf(" FROM runner_rank k,result_runner r,(SELECT @num := 0) temp, (SELECT @runid := 0) temp2");
				$query .= sprintf(" WHERE k.rank_year = %d AND r.id = k.runner_id AND r.club_id != 0 AND k.crs_id = 0 AND k.sort_order = 1",$year);
				$query .= "%s";
				$query .= sprintf(" ORDER BY k.rank_year,k.sort_order DESC,k.crs_id,k.rank_score DESC,k.runner_id) ordered,result_runner r");
				$query .= sprintf(" WHERE runner_id = %d",$runner_id);

				$totquery .= sprintf("SELECT COUNT(*) AS total FROM runner_rank k,result_runner r ");
				$totquery .= sprintf(" WHERE k.rank_year = %d AND r.id = k.runner_id AND r.club_id != 0 AND k.crs_id = 0 AND k.sort_order = 1",$year);
				$totquery .= "%s";
				
				$rnkquery = sprintf($query," AND k.agecl_id != 0");
				$place = $db->queryFirstField($rnkquery);
				$rnkquery = sprintf($totquery," AND k.agecl_id != 0");
				$total = $db->queryFirstField($rnkquery);
				printf("<tr><td>Overall Rank:</td><td align=\"center\">%d of %d</td></tr>\n",$place,$total);
				
				$rnkquery = sprintf($query," AND k.sex = %s");
				$place = $db->queryFirstField($rnkquery,$sex);
				$rnkquery = sprintf($totquery," AND k.sex = %s");
				$total = $db->queryFirstField($rnkquery,$sex);
				printf("<tr><td>%s Rank:</td><td align=\"center\">%d of %d</td></tr>\n",$sex =="M" ? "Men's" : "Women's",$place,$total);
				
				$rnkquery = sprintf($query," AND k.agecl_id = %i");
				$place = $db->queryFirstField($rnkquery,$age);
				$rnkquery = sprintf($totquery," AND k.agecl_id = %i");
				$total = $db->queryFirstField($rnkquery,$age);
				printf("<tr><td>Class Rank:</td><td align=\"center\">%d of %d</td></tr>\n",$place,$total);
			} else {
				$indx     = 0;
				$thisindx = 0;
				$rnkquery  = "SELECT runner_id,score FROM runner$year2 WHERE score > 0 AND UPPER(club) IN ('DVOA','SVO','POC') ORDER BY score $sortDir";
				$rnkresult = $db->query($rnkquery);
				$total = $db->count();
				foreach ($rnkresult as $rnkrow) {
					$indx++;
					if ($rnkrow['runner_id'] == $runner_id) {
						$thisindx = $indx;
					}
				}
				printf("<tr><td>Overall Rank:</td><td align=\"center\">%d of %d</td></tr>\n",$thisindx,$total);
				
				$indx = 0;
				$thisindx = 0;
				$rnkquery  = "SELECT runner_id,score FROM runner$year2 WHERE score > 0 AND sex=%s AND UPPER(club) IN ('DVOA','SVO','POC') ORDER BY score $sortDir";
				$rnkresult = $db->query($rnkquery,$sex);
				$total = $db->count();
				foreach ($rnkresult as $rnkrow) {
					$indx++;
					if ($rnkrow['runner_id'] == $runner_id) {
						$thisindx = $indx;
					}
				}
				printf("<tr><td>%s Rank:</td><td align=\"center\">%d of %d</td></tr>\n",$sex =="M" ? "Men's" : "Women's",$thisindx,$total);
				
				$indx = 0;
				$thisindx = 0;
				$rnkquery  = "SELECT runner_id, score FROM runner$year2 WHERE score > 0 AND sex=%s AND age=%i AND UPPER(club) IN ('DVOA','SVO','POC') ORDER BY score $sortDir";
				$rnkresult = $db->query($rnkquery,$sex,$age);
				$total = $db->count();
				foreach ($rnkresult as $rnkrow) {
					$indx++;
					if ($rnkrow['runner_id'] == $runner_id) {
						$thisindx = $indx;
					}
				}
				printf("<tr><td>Class Rank:</td><td align=\"center\">%d of %d</td></tr>\n",$thisindx,$total);
			}
			printf("</table>\n");
			
		} else {
			$rank_cnt = 0;
			if ($year >= 2013) {
				$sql  = "SELECT COUNT(*) FROM runner_rank k WHERE k.rank_year = %i";
				$rank_cnt = $db->queryFirstField($sql,$year,$runner_id);
			}
			if ($rank_cnt == 0)
				printf("<p style=\"padding:0 200px 0 200px;\">According to our records, rankings are not yet available.</p>");
			else
				printf("<p style=\"padding:0 200px 0 200px;\">According to our records, you are not a DVOA member. Only members of DVOA, SVO, and POC clubs are listed in the rankings.</p>");
		}
		?>
		<br />
	
		<?php
		/*******************************************
		******** NOT SUPPORTED AS OF 2013 **********
		********************************************
		
		//VM 2012-07-16 >>
		$year_curr = 0;
		$year_curr = 2000 + $year2;
		if ($year_curr >= 2008) {
		//VM 2012-07-16 <<
			$sql = "SELECT ss_date,score FROM ss$year2 WHERE runner_id='$runner_id' ORDER BY ss_date DESC";
			$rs  = $db->DoSQL($sql);
			if ($db->NumRows($rs) > 0) {
			?>
				<h3>Rankings History</h3>
				<table cellpadding="2" cellspacing="0" border="1" align="center">
					<tr bgcolor="#f0f0f0">
					<td>Date</td>
					<td>Score</td>
					<td align="center">Overall<br />Rank</td>

			<?php
				$sql = "SELECT sex FROM ss$year2 WHERE runner_id='$runner_id'";
				list($sex) = $db->GetRow($sql);

				if ($sex == "M")
					printf("<td align=\"center\">Men's<br />Rank</td>\n");
				else
					printf("<td align=\"center\">Women's<br />Rank</td>\n");
			?>
					<td align="center">White<br />Rank</td>
					<td align="center">Yellow<br />Rank</td>
					<td align="center">Orange<br />Rank</td>
					<td align="center">Brown<br />Rank</td>
					<td align="center">Green<br />Rank</td>
					<td align="center">Red<br />Rank</td>
					<td align="center">Blue<br />Rank</td>
				</tr>
			<?php
				while ($row = $db->GetNextRow($rs)) {
					printf("<tr>\n");
					printf("<td>%s</td>\n",FormatDate($row->ss_date));
					printf("<td>%4.2f</td>\n",$row->score);
					printf("<td align=\"center\">%s</td>\n",GetRankHist($db,"overall",$runner_id,$row->ss_date));
					printf("<td align=\"center\">%s</td>\n",GetRankHist($db,$sex,$runner_id,$row->ss_date));
					printf("<td align=\"center\">%s</td>\n",GetCrsRankHist($db,"wh_sc",$runner_id,$row->ss_date));
					printf("<td align=\"center\">%s</td>\n",GetCrsRankHist($db,"ye_sc",$runner_id,$row->ss_date));
					printf("<td align=\"center\">%s</td>\n",GetCrsRankHist($db,"or_sc",$runner_id,$row->ss_date));
					printf("<td align=\"center\">%s</td>\n",GetCrsRankHist($db,"bn_sc",$runner_id,$row->ss_date));
					printf("<td align=\"center\">%s</td>\n",GetCrsRankHist($db,"gr_sc",$runner_id,$row->ss_date));
					printf("<td align=\"center\">%s</td>\n",GetCrsRankHist($db,"re_sc",$runner_id,$row->ss_date));
					printf("<td align=\"center\">%s</td>\n",GetCrsRankHist($db,"bl_sc",$runner_id,$row->ss_date));
					printf("</tr>\n");
				}
			}
			?>
			</table>
			<br />
		<?php
		} //VM 2012-07-16
		*/
		?>

		<?php
		if ($year >= 2013) {
			$sql  = "SELECT c.sked_id as event_id,l.shortname AS mapname,c.rslt_crs_id AS course_id,";
			$sql .= "c.etime AS time,c.time_secs AS yourtime,c.win_time_secs AS wintime,";
			$sql .= "(SELECT AVG(time_secs) FROM result_ledger WHERE cs_id = c.rslt_crs_id) AS avgtime,c.cs_length AS dist";
			$sql .= " FROM course_details c,event_list l";
			$sql .= " WHERE l.ev_year = %i AND l.sked_id = c.sked_id AND c.runner_id = %i";
			$sql .= " ORDER BY c.ev_date DESC";
			$rs  = $db->query($sql,$year,$runner_id);
		} else {
			$sql  = "SELECT event_id,'' AS mapname,course_id,time,secs AS yourtime,0 AS wintime,0 AS avgtime,0 AS dist";
			$sql .= " FROM result$year2 WHERE runner_id=%i";
			$rs  = $db->query($sql,$runner_id);
		}
		
		$num_events = $db->count();
		if ($num_events) {
			printf("<h3>Compare your pace (%d)</h3>\n",$num_events);
			printf("<table align=\"center\" border=\"0\" cellpadding=\"2\" cellspacing=\"0\">\n");
			printf("<tr><td width=\"100\" bgcolor=\"#808080\" align=\"center\"><span style=\"color:#ffffff;font-weight:bold;font-size:11px;\">Your Pace</span></td>");
			printf("<td width=\"100\" bgcolor=\"#408080\" align=\"center\"><span style=\"color:#ffffff;font-weight:bold;font-size:11px;\">Average Pace</span></td>");
			printf("<td width=\"100\" bgcolor=\"#800000\" align=\"center\"><span style=\"color:#ffffff;font-weight:bold;font-size:11px;\">Winning Pace</span></td>");
			printf("</tr>\n");
			printf("</table>\n");
			$indx = 0;
			foreach ($rs as $row) {
				if ($year >= 2013) {
					$mapName[$indx] = $row['mapname'];
					$winPace[$indx] = $row['dist'] > 0 ? $row['wintime'] / $row['dist'] : 0;
					$avgPace[$indx] = $row['dist'] > 0 ? $row['avgtime'] / $row['dist'] : 0;
					$yourPace[$indx]= $row['dist'] > 0 ? $row['yourtime'] / $row['dist'] : 0;
				} else {
					$mapName[$indx] = getMapName($db,$row['event_id'],$year2);
					$winPace[$indx] = getWinPace($db,$row['course_id'],$year2);
					$avgPace[$indx] = getAvgPace($db,$row['course_id'],$year2);
					$yourPace[$indx]= getYourPace($db,$runner_id,$row['course_id'],$row['secs'],$year2);
				}
				$indx++;
			}

			$im     = ImageCreate(600,16+(32*$num_events));
			$red    = ImageColorAllocate($im,128,0,0);
			$gray   = ImageColorAllocate($im,128,128,128);
			$ltgray = ImageColorAllocate($im,240,240,240);
			$teal   = ImageColorAllocate($im,64,128,128);
			$gold   = ImageColorAllocate($im,128,128,0);
			$white  = ImageColorAllocate($im,255,255,255);
			$blue   = ImageColorAllocate($im,32,40,82);
			$black  = ImageColorAllocate($im,0,0,0);

			ImageFilledRectangle($im,0,0,600,16+(48*$num_events),$ltgray);

			// draw grid
			for ($i=0;$i<15;$i++) {
				ImageLine($im,100+($i*30),10,100+($i*30),8+(32*$num_events),$gray);
			}

			//labels
			ImageString($im,0,94,2,"0:00",$gray);
			ImageString($im,0,154,2,"4:00",$gray);
			ImageString($im,0,212,2,"8:00",$gray);
			ImageString($im,0,268,2,"12:00",$gray);
			ImageString($im,0,328,2,"16:00",$gray);
			ImageString($im,0,388,2,"20:00",$gray);
			ImageString($im,0,448,2,"24:00",$gray);
			ImageString($im,0,508,2,"28:00",$gray);

			for ($i=0;$i<$num_events;$i++) {
				$startX = 96 - (strlen($mapName[$i]) * ImageFontWidth(2));
				ImageString($im,2,$startX,20+($i*32),$mapName[$i],$black);

				ImageFilledRectangle($im,100,16+($i*32),100+(floor($yourPace[$i]/4)),24+($i*32),$gray);
				ImageString($im,1,100,16+($i*32),formatSecs(floor($yourPace[$i])),$white);

				ImageFilledRectangle($im,100,24+($i*32),100+(floor($avgPace[$i]/4)),32+($i*32),$teal);
				ImageString($im,1,100,24+($i*32),formatSecs(floor($avgPace[$i])),$white);

				ImageFilledRectangle($im,100,32+($i*32),100+(floor($winPace[$i]/4)),40+($i*32),$red);
				ImageString($im,1,100,32+($i*32),formatSecs(floor($winPace[$i])),$white);
			}

			$jpgname = "jpg/pace$runner_id.jpg";
			//printf("JPG Name = $jpgname<br>\n");
			$jpegout = fopen("$jpgname", "wb");
			ImageJpeg($im,"$jpgname");
			ImageDestroy($im);
			fclose($jpegout);

			printf("<p align=\"center\"><img src=\"$jpgname\" border=0></p>\n");
		}
		$db->Close();
		?>
	</div>
</div>

</body>
</html>
