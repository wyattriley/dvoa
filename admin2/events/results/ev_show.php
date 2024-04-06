<?php
include_once ("../../tools/db.dvoa.class.php");
include_once ("ev_show_tools.inc.php");
include_once ("../../tools/dvoa_tools.inc.php");

$event_id = $_REQUEST['event_id'];

$db = new MeekroDB("dbrank");
$dbg = new MeekroDB();

$year = substr($event_id,7,2);

$sql = "SELECT name,short_name,event_date,director,codirector,design,codesign,red_factor,notes,label1,text1,label2,text2,html,url,rg_lnk,splt_lnk1,splt_txt1,splt_lnk2,splt_txt2,splt_lnk3,splt_txt3,x_lnk1,x_txt1,x_lnk2,x_txt2,x_lnk3,x_txt3,x_lnk4,x_txt4,x_lnk5,x_txt5 FROM event$year WHERE event_id=%s";
list($name,$short_name,$event_date,$director,$codirector,$design,$codesign,$red_factor,$notes,$label1,$text1,$label2,$text2,$html,$url,$rg_lnk,$splt_lnk1,$splt_txt1,$splt_lnk2,$splt_txt2,$splt_lnk3,$splt_txt3,$x_lnk1,$x_txt1,$x_lnk2,$x_txt2,$x_lnk3,$x_txt3,$x_lnk4,$x_txt4,$x_lnk5,$x_txt5) = $db->queryFirstList($sql,$event_id);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php printf("%s - %s",$name,FormatEvShowDate($event_date));?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="ev_show.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="../../images/newflag.ico" />
<?php
	GetHTC();
?>
</head>

<body>

<div id="wrap">
	
	<div id="header">
<?php
printf("<h1>DVOA Results<br>%s<br>%s</h1>\n",$name,FormatEvShowDate($event_date));
?>
<div id="hdr_lnks">
	<a href="../../index.php">DVOA Home</a>&nbsp;&middot;&nbsp;
	<a href="index.php">Results Home</a>
</div>
	</div>

<div id="infopane">
	<div id="leftcol">
		<?php
		printf("<div class=\"lab\">Event Director:</div><div class=\"data\">%s</div>\n",StripSlashes($director));
		if (strlen($codirector) > 4)
			printf("<div class=\"lab\">Co-Director:</div><div class=\"data\">%s</div>\n",StripSlashes($codirector));

		printf("<div class=\"lab\">Course Design:</div><div class=\"data\">%s</div>\n",StripSlashes($design));

		if (strlen($codesign) > 4)
			printf("<div class=\"lab\">Co-Design:</div><div class=\"data\">%s</div>\n",StripSlashes($codesign));
		if (strlen($label1) > 4)
			printf("<div class=\"lab\">%s:</div><div class=\"data\">%s</div>\n",StripSlashes($label1),StripSlashes($text1));
		if (strlen($label2) > 4)
			printf("<div class=\"lab\">%s:</div><div class=\"data\">%s</div>\n",StripSlashes($label2),StripSlashes($text2));
		if (strlen($notes) > 4)
			printf("<div class=\"lab\">Notes:</div><div class=\"data\">%s</div>\n",StripSlashes($notes));



?>

	</div> <!-- end of leftcol -->	
	<div id="rightcol">

		<?php
		if ((int)$year >= 8) {
			$sql = "SELECT lnk_txt,url FROM rg$year WHERE event_id=%s";
			$rs  = $db->query($sql,$event_id);
			if ($db->count() > 0) {
				foreach ($rs as $row) {
					printf("<div class=\"lnks\"><a href=\"%s\">%s</a>\n",$row['url'],$row['lnk_txt']);
					$splitalyzerurl = str_replace("act=map","act=splitalyzer",$row['url']);
					printf("&nbsp;<a href=\"$splitalyzerurl\">Splitalyzer</a>\n");
					printf("</div>\n");
				}
			}
		}
//		if (strlen($rg_lnk) > 4)
//			printf("<div class=\"lnks\"><a href=\"$rg_lnk\">RouteGadget</a></div>\n");
		if (strlen($splt_lnk1) > 4)
			printf("<div class=\"lnks\"><a href=\"$splt_lnk1\">%s</a></div>\n",StripSlashes($splt_txt1));
		if (strlen($splt_lnk2) > 4)
			printf("<div class=\"lnks\"><a href=\"$splt_lnk2\">%s</a></div>\n",StripSlashes($splt_txt2));
		if (strlen($splt_lnk3) > 4)
			printf("<div class=\"lnks\"><a href=\"$splt_lnk3\">%s</a></div>\n",StripSlashes($splt_txt3));
		if (strlen($x_lnk1) > 4)
			printf("<div class=\"lnks\"><a href=\"$x_lnk1\">%s</a></div>\n",StripSlashes($x_txt1));
		if (strlen($x_lnk2) > 4)
			printf("<div class=\"lnks\"><a href=\"$x_lnk2\">%s</a></div>\n",StripSlashes($x_txt2));
		if (strlen($x_lnk3) > 4)
			printf("<div class=\"lnks\"><a href=\"$x_lnk3\">%s</a></div>\n",StripSlashes($x_txt3));
		if (strlen($x_lnk4) > 4)
			printf("<div class=\"lnks\"><a href=\"$x_lnk4\">%s</a></div>\n",StripSlashes($x_txt4));
		if (strlen($x_lnk5) > 4)
			printf("<div class=\"lnks\"><a href=\"$x_lnk5\">%s</a></div>\n",StripSlashes($x_txt5));

		?>

	</div> <!-- end of rightcol -->	
	<br style="clear:both;" />
</div> <!-- end of infopane -->



<div id="content">
<?php

$sql = "SELECT course_id,color,dist,elev,ctrls,specialname FROM course$year WHERE event_id=%s ORDER BY color";
$rs  = $db->query($sql,$event_id);

$bgcolor = "#ffffff";
$color   = "#000000";
$crs_id=10; # default in case of bad input
foreach($rs as $row) {
	switch ($row['color']) {
		case 10: $bgcolor="#ffffff";$label="White";$sum_label="White";$color="#000000";$crs_id=10;break;
		case 11: $bgcolor="#ffffff";$label="White-X";$sum_label="White";$color="#000000";$crs_id=11;break;
		case 12: $bgcolor="#ffffff";$label="White-Y";$sum_label="White";$color="#000000";$crs_id=12;break;
		
		case 20: $bgcolor="#ffff00";$label="Yellow";$sum_label="Yellow";$color="#000000";$crs_id=20;break;
		case 21: $bgcolor="#ffff00";$label="Yellow-X";$sum_label="Yellow";$color="#000000";$crs_id=21;break;
		case 22: $bgcolor="#ffff00";$label="Yellow-Y";$sum_label="Yellow";$color="#000000";$crs_id=22;break;

		case 30: $bgcolor="#ff8000";$label="Orange";$sum_label="Orange";$color="#000000";$crs_id=30;break;
		case 31: $bgcolor="#ff8000";$label="Orange-X";$sum_label="Orange";$color="#000000";$crs_id=31;break;
		case 32: $bgcolor="#ff8000";$label="Orange-Y";$sum_label="Orange";$color="#000000";$crs_id=32;break;

		case 40: $bgcolor="#804000";$label="Brown";$sum_label="Brown";$color="#ffffff";$crs_id=40;break;
		case 41: $bgcolor="#804000";$label="Brown-X";$sum_label="Brown";$color="#ffffff";$crs_id=41;break;
		case 42: $bgcolor="#804000";$label="Brown-Y";$sum_label="Brown";$color="#ffffff";$crs_id=42;break;

		case 50: $bgcolor="#008000";$label="Green";$sum_label="Green";$color="#ffffff";$crs_id=50;break;
		case 51: $bgcolor="#008000";$label="Green-X";$sum_label="Green";$color="#ffffff";$crs_id=51;break;
		case 52: $bgcolor="#008000";$label="Green-Y";$sum_label="Green";$color="#ffffff";$crs_id=52;break;

		case 60: $bgcolor="#ff0000";$label="Red";$sum_label="Red";$color="#ffffff";$crs_id=60;break;
		case 61: $bgcolor="#ff0000";$label="Red-X";$sum_label="Red";$color="#ffffff";$crs_id=61;break;
		case 62: $bgcolor="#ff0000";$label="Red-Y";$sum_label="Red";$color="#ffffff";$crs_id=62;break;

		case 70: $bgcolor="#000080";$label="Blue";$sum_label="Blue";$color="#ffffff";$crs_id=70;break;
		case 71: $bgcolor="#000080";$label="Blue-X";$sum_label="Blue";$color="#ffffff";$crs_id=71;break;
		case 72: $bgcolor="#000080";$label="Blue-Y";$sum_label="Blue";$color="#ffffff";$crs_id=72;break;

		case 80: $bgcolor="#800080";$label="Sprint";$sum_label="Sprint";$color="#ffffff";$crs_id=80;break;
		case 81: $bgcolor="#800080";$label="Sprint-1";$sum_label="Sprint-1";$color="#ffffff";$crs_id=80;break;
		case 82: $bgcolor="#800080";$label="Sprint-2";$sum_label="Sprint-2";$color="#ffffff";$crs_id=80;break;
		case 83: $bgcolor="#800080";$label="Sprint-3";$sum_label="Sprint-3";$color="#ffffff";$crs_id=80;break;
		case 84: $bgcolor="#800080";$label="Sprint-4";$sum_label="Sprint-4";$color="#ffffff";$crs_id=80;break;
		case 85: $bgcolor="#800080";$label="Sprint-5";$sum_label="Sprint-5";$color="#ffffff";$crs_id=80;break;
		case 86: $bgcolor="#800080";$label="Sprint-6";$sum_label="Sprint-6";$color="#ffffff";$crs_id=80;break;
		case 87: $bgcolor="#800080";$label="Sprint-7";$sum_label="Sprint-7";$color="#ffffff";$crs_id=80;break;
		case 88: $bgcolor="#800080";$label="Sprint-8";$sum_label="Sprint-8";$color="#ffffff";$crs_id=80;break;
	}
	//does this course have a special name?
	if ($row['specialname'] != "") {
		$label     = stripslashes($row['specialname']);
		$sum_label = stripslashes($row['specialname']);
	}

	$runner_cnt[$row['color']]         = 0;
	$runner_cnt_for_avg[$row['color']] = 0;
	$secs_sum[$row['color']]           = 0.0;
	$secs_sum_for_avg[$row['color']]   = 0.0;
	$dist_sum[$row['color']]           = 0.0;
	$dist_sum_for_avg[$row['color']]   = 0.0;
	$elev_sum[$row['color']]           = 0.0;
	$ctrl_sum[$row['color']]           = 0.0;
	
	$subquery  = "SELECT result$year.runner_id,time, secs, this_score, name, number, sex, age, club, score, (this_score-score) AS diff,in_rank FROM result$year, runner$year WHERE course_id=%s and result$year.runner_id = runner$year.runner_id AND ((time <> 'DNF') AND (time <> 'NC') AND (time <> 'OT') AND (time <> 'MP') AND (time <> 'DSQ') AND (time <> 'SPW')) ORDER BY secs";
	$subresult = $db->query($subquery,$row['course_id']);

# use this line to count the number of runners on each course
	$map_cnt[$row['color']]            = $db->count();
	$runner_cnt_for_avg[$row['color']] = $db->count();
	
	
	printf("<h3>%s</h3>",$label);
	printf("<table border=\"0\" cellspacing=\"0\" cellpadding=\"4\" style=\"border:0;\"><tr><td valign=\"top\" style=\"border:0;\">\n");

	printf("<table border=\"0\" cellspacing=\"0\" cellpadding=\"3\">\n");

# print the course data	
	printf("<tr bgcolor=\"$bgcolor\">\n");
	printf("<th align=\"center\"><span style=\"color:$color;\">Pl</span></th>\n");
	printf("<th align=\"left\"><span style=\"color:$color;\">Name</span></th>\n");
	printf("<th align=\"center\"><span style=\"color:$color;\">Class</span></th>\n");
	printf("<th align=\"center\"><span style=\"color:$color;\">Club</span></th>\n");
	printf("<th align=\"right\"><span style=\"color:$color;\">Time</span></th>\n");
	printf("<th align=\"right\"><span style=\"color:$color;\">Pace</span></th>\n");
	printf("<th align=\"right\"><span style=\"color:$color;\">Behind</span></th>\n");
	printf("<th align=\"right\"><span style=\"color:$color;\">*Score</span></th>\n");
	printf("<th align=\"right\"><span style=\"color:$color;\">**Diff</span></th>\n");
	printf("</tr>\n");
	
	$count=1;
	foreach($subresult as $subrow) {
		if ($count == 1)
			$best_time=$subrow['secs'];

		printf("<tr bgcolor=\"%s\">\n",$count %2 ? "#f0f0f0" : "#ffffff");
		printf("<td align=\"right\">%d</td>\n",$count++);
		printf("<td align=\"left\"><a href=\"rslt_sum.php?runner_id=%d&year=%d\">%s</a></td>\n",$subrow['runner_id'],$year+2000,$subrow['name']);

		if ($subrow['number'] > 1) {
			printf("<td align=\"center\">G%d</td>\n",$subrow['number']);
		} else {
			if ($subrow['sex']=="M" || $subrow['sex']=="F") {
				$cls = GetClassName($subrow['sex'],$subrow['age']);
				printf("<td align=\"center\"><a href=\"rslt_cls.php?sex=%s&age=%d&year=%d\">%s</a></td>\n",$subrow['sex'],$subrow['age'],$year+2000,$cls);
			} else
				printf("<td align=\"center\">&nbsp;</td>\n");
		}

		if ($subrow['number'] > 1)
			$runner_cnt[$row['color']] += $subrow['number'];
		else		
			$runner_cnt[$row['color']]++;
		
		printf("<td align=\"center\">%s</td>\n",CheckMembership($dbg,$subrow['runner_id'],$subrow['club']));

		printf("<td align=\"right\">%s</td>\n",$subrow['time']);
			
		$secs_sum[$row['color']]         += $subrow['secs'] * $subrow['number'];
		$secs_sum_for_avg[$row['color']] += $subrow['secs'];
		$dist_sum_for_avg[$row['color']] += $row['dist'];

		printf("<td align=\"right\">%s</td>\n",GetPace($subrow['secs'],$row['dist']));
		printf("<td align=\"right\">%s</td>\n",TimeBehind($subrow['secs'],$best_time));

		if ($subrow['in_rank'] != 0) {
			if ($subrow['this_score'] > 0)
				printf("<td align=\"right\">%0.2f</td>\n",$subrow['this_score']);
			else	
				printf("<td align=\"right\">&nbsp;</td>\n");

			if (($subrow['this_score'] > 0) && ($subrow['score'] != 0)) {
				if ($subrow['diff'] > 0)	
					printf("<td align=\"right\">+%0.1f</td>\n",$subrow['diff']);
				else
					printf("<td align=\"right\">%0.1f</td>\n",$subrow['diff']);
			} else {
				printf("<td align=\"right\">&nbsp;</td>\n");
			}
		} else {
			printf("<td align=\"center\">NC</td>\n");
			printf("<td align=\"center\">NC</td>\n");
		}

		printf("</tr>\n");
	}

	$dist_sum[$row['color']] = $runner_cnt[$row['color']] * $row['dist'];
	$elev_sum[$row['color']] = $runner_cnt[$row['color']] * $row['elev'];
	$ctrl_sum[$row['color']] = $runner_cnt[$row['color']] * $row['ctrls'];

	$subquery = "SELECT runner$year.runner_id, name, time, number, secs, this_score, sex, age, club, score, (this_score-score) AS diff FROM result$year, runner$year WHERE course_id=%s and result$year.runner_id = runner$year.runner_id AND ((time = 'DNF') OR (time='NC') OR (time='OT') OR (time='MP') OR (time='DSQ') OR (time='SPW')) ORDER BY time";
	$subresult = $db->query($subquery,$row['course_id']);

	$map_cnt[$row['color']]            += $db->count();
	$runner_cnt_for_avg[$row['color']] += $db->count();


	foreach($subresult as $subrow) {
		printf("<tr bgcolor=\"%s\">\n",$count %2 ? "#f0f0f0" : "#ffffff");
		$count++;
		printf("<td align=\"right\">&nbsp;</td>\n");
		printf("<td align=\"left\"><a href=\"rslt_sum.php?runner_id=%d&year=%d\">%s</a></td>\n",$subrow['runner_id'],$year+2000,$subrow['name']);

		if ($subrow['number'] > 1) {
			printf("<td align=\"center\">G%d</td>\n",$subrow['number']);
		} else {
			if ($subrow['sex']=="M" || $subrow['sex']=="F") {
				$cls = GetClassName($subrow['sex'],$subrow['age']);
				printf("<td align=\"center\"><a href=\"rslt_cls.php?sex=%s&age=%d&year=%d\">%s</a></td>\n",$subrow['sex'],$subrow['age'],$year+2000,$cls);
			} else
				printf("<td align=\"center\">&nbsp;</td>\n");
		}

		if ($subrow['number'] > 1)
			$runner_cnt[$row['color']] += $subrow['number'];
		else		
			$runner_cnt[$row['color']]++;

		printf("<td align=\"center\">%s</td>\n",CheckMembership($dbg,$subrow['runner_id'],$subrow['club']));

		printf("<td align=\"right\">%s</td>\n",$subrow['time']);
		printf("<td align=\"right\">---</td>\n");
		printf("<td align=\"right\">---</td>\n");
		if ($subrow['this_score'] > 0)
			printf("<td align=\"right\">%0.2f</td>\n",$subrow['this_score']);
		else
			printf("<td align=\"right\">&nbsp;</td>\n");

		if (($subrow['this_score'] > 0) && ($subrow['score'] != 0)) {
			if ($subrow['diff'] > 0)	
				printf("<td align=\"right\">+%0.1f</td>\n",$subrow['diff']);
			else
				printf("<td align=\"right\">%0.1f</td>\n",$subrow['diff']);
		} else {
			printf("<td align=\"right\">&nbsp;</td>\n");
		}
	
		printf("</tr>\n");
	}

	printf("</table>\n");
	printf("</td><td style=\"border:0;\">&nbsp;&nbsp;&nbsp;&nbsp;</td><td valign=\"top\" style=\"border:0;\">\n");
	printf("<table border=\"1\" cellpadding=\"3\" cellspacing=\"0\" style=\"border:0;\">\n");


	printf("<tr bgcolor=\"$bgcolor\">\n");

	printf("<td colspan=\"2\" align=\"center\" class=\"smtitle\"><strong><span style=\"color:$color;\">%s Summary</span></strong></td>\n",$sum_label);

	printf("<tr><td align=\"right\">Length</td>\n");
	printf("<td align=\"right\">%0.2fkm</td>\n",$row['dist']);
	printf("</tr>\n");

	printf("<tr><td align=\"right\">Climb</td>\n");
	printf("<td align=\"right\">%0.1fm</td>\n",$row['elev']);
	printf("</tr>\n");

	printf("<tr><td align=\"right\">Num Controls</td>\n");
	printf("<td align=\"right\">%d</td>\n",$row['ctrls']);
	printf("</tr>\n");

	printf("<tr><td align=\"right\">Average Time</td>\n");
	if ($runner_cnt_for_avg[$row['color']] > 0)
		printf("<td align=\"right\">%s</td>\n",FormatSecsInMins($secs_sum_for_avg[$row['color']] / $runner_cnt_for_avg[$row['color']]));
	else
		printf("<td>0:00</td>\n");
	printf("</tr>\n");
		
	
	printf("<tr><td align=\"right\">Average Pace</td>\n");
	printf("<td align=\"right\">%s</td>\n",GetPace($secs_sum_for_avg[$row['color']],$dist_sum_for_avg[$row['color']]));
	printf("</tr>\n");

	printf("<tr><td align=\"right\">Num Maps</td>\n");
	printf("<td align=\"right\">%d</td>\n",$map_cnt[$row['color']]);
	printf("</tr>\n");
	
	printf("<tr><td align=\"right\">Num Orienteers</td>\n");
	printf("<td align=\"right\">%d</td>\n",$runner_cnt[$row['color']]);
	printf("</tr>\n");

	printf("<tr><td align=\"right\">Total Time</td>\n");
	printf("<td align=\"right\">%s</td>\n",FormatSecs($secs_sum[$row['color']]));
	printf("</tr>\n");

	printf("<tr><td align=\"right\">Total Distance</td>\n");
	printf("<td align=\"right\">%.2fkm</td>\n",$dist_sum[$row['color']]);
	printf("</tr>\n");

	printf("<tr><td align=\"right\">Total Climb</td>\n");
	printf("<td align=\"right\">%.1fm<br></td>\n",$elev_sum[$row['color']]);
	printf("</tr>\n");

	printf("<tr><td align=\"right\">Total Controls</td>\n");
	printf("<td align=\"right\">%d</td>\n",$runner_cnt[$row['color']] * $row['ctrls']);
	printf("</tr>\n");
	//----
	//printf("<tr><td align=\"right\">CGV</td>\n");
	//printf("<td align=\"right\">%.2f</td>\n",GetCGV($db,$year,$event_id,$crs_id));
	//printf("</tr>\n");
	//----
	printf("<tr><td align=\"center\" colspan=\"2\"><a href=\"rslt_crs.php?crs_id=%d&year=%d\">%s Rankings</a></td></td>\n",$crs_id,$year+2000,$sum_label);


	printf("</table>\n");
	
	printf("</td></tr></table>\n");
	
	
	printf("<p>&nbsp;</p>\n");

}

$total_maps    = 0;
$total_runners = 0;
$total_secs    = 0;
$total_dist    = 0.0;
$total_elev    = 0.0;
$total_ctrl    = 0;

for ($i = 1; $i < 88; $i++) {
	if (isset($map_cnt[$i])) {
		$total_maps    += $map_cnt[$i];
		$total_runners += $runner_cnt[$i];
		$total_secs    += $secs_sum[$i];
		$total_dist    += $dist_sum[$i];
		$total_elev    += $elev_sum[$i];
		$total_ctrl    += $ctrl_sum[$i];
	}
}

?>
<table cellpadding="0" cellspacing="0" border="0" style="border:0;">
	<tr>
		<td width="200" valign="top" 	style="border:0;">
<?php
printf("<table border=1 cellspacing=0 cellpadding=3>\n");
printf("<tr bgcolor=\"#f0f0f0\"><td align=\"center\" colspan=2><b>Event Totals</b></td></tr>\n");

printf("<tr><td align=\"right\">Maps:</td><td align=\"right\">%d</td></tr>\n",$total_maps);
printf("<tr><td align=\"right\">Orienteers:</td><td align=\"right\">%d</td></tr>\n",$total_runners);
printf("<tr><td align=\"right\">Time:</td><td align=\"right\">%s</td></tr>\n",FormatSecs($total_secs));
printf("<tr><td align=\"right\">Distance:</td><td align=\"right\">%.2f km</td></tr>\n",$total_dist);
printf("<tr><td align=\"right\">Climb:</td><td align=\"right\">%.1f m</td></tr>\n",$total_elev);
printf("<tr><td align=\"right\">Ctrls:</td><td align=\"right\">%d</td></tr>\n",$total_ctrl);
printf("</table>\n");
?>

	</td>
		<td width="400" valign="top" style="border:0;">

<table border="1" cellspacing="0" cellpadding="3" align="left">
<tr bgcolor="#f0f0f0">
	<td align="center" colspan="2"><strong>Legend</strong></td>
</tr>

<tr>
	<td>DNF</td>
	<td>Did Not Finish</td>
</tr>

<tr>
	<td>MP</td>
	<td>MisPunch</td>
</tr>

<tr>
	<td>OT</td>
	<td>OverTime</td>
</tr>

<tr>
	<td>NC</td>
	<td>Not Competing (also used for a 2nd course at same event)</td>
</tr>

<tr>
	<td>CGV</td>
	<td>Course Gnarliness Value - a measurement indicating the difficulty of a course</td>
</tr>

<tr>
	<td>Pl</td>
	<td>Place, 1st, 2nd, 3rd, etc.</td>
</tr>

<tr>
	<td>Behind</td>
	<td>How far behind the winner, in MM:SS</td>
</tr>

</table>
</div>

		</td>
	</tr>
</table>


<?php
$db->Close();
$dbg->Close();

$stop_time = microtime_float();

?>
<p>
<ul>
<?php
printf("<li><a href=\"ev_show_txt.php?event_id=%s&year=$year\">View these results in plain text</a></li>\n",$event_id);
printf("<li><a href=\"index.php\">Goto Results Home Page</a></li>\n");
printf("<li><a href=\"../../index.php\">Goto DVOA Home Page</a></li>\n");
?>
</ul>


<p style="padding:2px 20px 20px 10px;"><span style="color:#c00;font-weight:bold;">*</span>
While the "Score" value is an indication of how well you performed in this event, please understand it is partly determined by how well you performed in all other events. Not only that, it is also partly determined by how well all others performed. The "Score" value will change as the season progresses. Even if you miss an event, it is quite likely this score will change. It is not useful to compare Scores on one course to the Scores on a different course. For a full explanation of the rankings formula please see <a href="http://www.dvoa.org/rank/calcrank05.php">the rankings formula</a> page.</p>

<p style="padding:2px 20px 20px 10px;"><span style="color:#c00;font-weight:bold;">**</span>
The "Diff" column displays the difference between this event and your ranking score. A positive number indicates your result was better than your year-to-date ranking score while a negative number indicates a result that was not as good as your ranking score.</p>




<?php
//printf("<p style=\"font-size:9px;color:#c0c0c0;font-family:verdana;\">ProcTime: %f ms</p>\n",($stop_time - $start_time) * 1000);
?>


</div> <!-- end of content -->
</div> <!-- end of wrap -->

<!-- start Google Analytics -->
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-4481501-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>
<!-- end Google Analytics -->


</body>
</html>

<?php
function microtime_float()
{
  list($usec, $sec) = explode(" ", microtime());
  return ((float)$usec + (float)$sec);
}

function GetClassName($sex,$age)
{
	if ($age < 21)
		return sprintf("%s-%d",$sex,$age);
	else if ($age == 21)	
		return sprintf("%s-%d+",$sex,$age);
	else
		return sprintf("%s%d+",$sex,$age);
}

/*
 * CheckMembership
 *  check if this is a valid membership
 *  if not a member return false
 *  if a member, then check for valid payment
 *    if paid up to date return true
 *    if not paid return false
 */
function CheckMembership($dbg,$runner_id,$club)
{
	if ($club != "DVOA")
		return $club;
		
	$sql = "SELECT exp FROM mmbr WHERE runner_id=%i";
	$exp  = $dbg->queryFirstField($sql,$runner_id);
	//is this person even a member?
	if ($exp == NULL) {
		return "<!-- NAM -->";
	}

	//if they are a member are they paid up?
	$now_ts = GetTS(date("Y-m-d"));
	$exp_ts = GetTS($exp);	

	return $exp_ts > $now_ts ? "DVOA" : "<!-- NP -->";
}

/* GetTS
 * calculate and return Unix timestamp
 * parameter format: YYYY-MM-DD or YYYY-MM-DD HH:MM:SS
 */
function GetTS($datetime)
{
	$yyyy = substr($datetime,0,4);
	$mon  = substr($datetime,5,2);
	$day  = substr($datetime,8,2);
	if (strlen($datetime) > 10) {
		$hh   = substr($datetime,11,2);
		$mm   = substr($datetime,14,2);
		$ss   = substr($datetime,17,2);
	} else {
		$hh   = 0;
		$mm   = 0;
		$ss   = 0;
	}
	return mktime ($hh,$mm,$ss,$mon,$day,$yyyy);
}
?>