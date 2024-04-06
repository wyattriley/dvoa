<?php
function formatRankDate($evntDate)
{
	$yy = substr($evntDate,2,2);
	$mm = substr($evntDate,5,2);
	$dd = substr($evntDate,8,2);
	$retStr = sprintf("%s-%s-%s",$mm,$dd,$yy);	
	return $retStr;
}

function getMonDay($evntDate)
{
	$yy = substr($evntDate,2,2);
	$mm = substr($evntDate,5,2);
	$dd = substr($evntDate,8,2);
	switch($mm) {
		case 1: $mon = "Jan";break;
		case 2: $mon = "Feb";break;
		case 3: $mon = "Mar";break;
		case 4: $mon = "Apr";break;
		case 5: $mon = "May";break;
		case 6: $mon = "Jun";break;
		case 7: $mon = "Jul";break;
		case 8: $mon = "Aug";break;
		case 9: $mon = "Sep";break;
		case 10: $mon = "Oct";break;
		case 11: $mon = "Nov";break;
		case 12: $mon = "Dec";break;
	}
	$retStr = sprintf("%s %s",$mon,$dd);	
	return $retStr;
}

function calc_pace($tm,$dist)
{
	//check for zero
	if ($dist == 0)
		return "0.0";
		
	if ($tm != "DNF" && $tm != "MP" && $tm != "OT" && $tm != "NC") {
		$total_secs = time2secs($tm);
		$secs_per_k = $total_secs / $dist;
		$pace = format_secs($secs_per_k);
		return $pace;
	} else {
		return "0.0";
	}
}

function time2secs($tm)
{
	$hr=0;
	$min=0;
	$sec=0;
	
	if (strlen($tm) == 5) {
		$min = substr($tm,0,2);
		$sec = substr($tm,3,2);
	} else if (strlen($tm) == 6) {
		$min = substr($tm,0,3);
		$sec = substr($tm,4,2);
	} else if (strlen($tm) == 7) {
		$hr  = substr($tm,0,1);
		$min = substr($tm,2,2);
		$sec = substr($tm,5,2);
	} else if (strlen($tm) == 8) {
		$hr  = substr($tm,0,2);
		$min = substr($tm,3,2);
		$sec = substr($tm,5,2);
	}
	return ($hr*60*60) + ($min*60) + $sec;
}

function format_secs($secs)
{
	if ($secs >= 3600) {
		$hr = floor($secs / 3600);
		$mn = floor(($secs - ($hr * 3600)) / 60);
		$sc = $secs - ($hr * 3600) - ($mn * 60);
		$str = sprintf("%d:%02d:%02d<br>\n",$hr, $mn, $sc);
		return ($str);
	} else {
		$hr = 0;
		$mn = floor(($secs - ($hr * 3600)) / 60);
		$sc = $secs - ($hr * 3600) - ($mn * 60);
		$str = sprintf("%d:%02d<br>\n",$mn, $sc);
		return ($str);
	}
}


// this function is for the personalized results
// on the dbresults.html page
/*
function GetIndividual($db,$userid,$year)
{
	$sql = "SELECT fname, lname FROM runner$year WHERE runner_id=$userid";
	list($fname,$lname) = $db->GetRow($sql);

	printf("<p align=\"center\">Hi <strong>%s</strong>,\n", $fname);
	printf("Here's a summary of the events you ran this year: \n");

	$sql = "SELECT event_id, course_id, time, this_score FROM result$year WHERE runner_id=$userid";
	$rs  = $db->DoSQL($sql);

	if ($db->NumRows($rs) == 0) {
		printf("<table border=0><tr><td class=text>\n");
		printf("The runner name you entered is not in the database<br>\n");
		printf("Please correct the spelling and try again<br>\n");
		printf("Hint: Use the List All Runners function to find the correct spelling<br>\n");
		printf("</td></tr></table>\n");
		return;
	}

	print ("<table border=\"1\" cellspacing=\"0\" cellpadding=\"2\" align=\"center\">\n");
	print("<tr bgcolor=\"#e8e8e8\"><td><b>Event Name</b></td><td align=center><b>Date</b></td><td><b>Crs</b></td><td align=center><b>Time</b></td><td><b>Len</b></td><td><b>Elev</b></td><td><b>Ctrls</b></td><td><b>Pace</b></td><td><b>Score</b></td></tr>\n");

	$total_secs = 0;
	$total_dist=0.0;
	$total_elev = 0.0;
	$total_ctrls = 0;
	
	while ($row = $db->GetNextRow($rs)) {
		$event_query = sprintf("SELECT short_name,event_date FROM event$year WHERE event_id='%s'",$row->event_id);
		list($short_name,$event_date) = $db->GetRow($event_query);
		print("<tr>\n");
		printf("<td class=text><a class=text href=\"ev_show.php?event_id=$row->event_id\">%s</a></td>\n",$short_name);

		printf("<td class=text align=center>%s</td>\n",getMonDay($event_date));

		$sql = sprintf("SELECT color, dist, elev, ctrls FROM course$year WHERE course_id='%s'",$row->course_id);
		list($color,$dist,$elev,$ctrls) = $db->GetRow($sql);
		switch ($color) {
		case 10 : printf("<td class=text align=center><a href=\"rslt_crs.php?crs_id=10&amp;year=$year\">White</a></td>\n");break;
		case 11 : printf("<td class=text align=center><a href=\"rslt_crs.php?crs_id=11&amp;year=$year\">White-X</a></td>\n");break;
		case 12 : printf("<td class=text align=center><a href=\"rslt_crs.php?crs_id=12&amp;year=$year\">White-Y</a></td>\n");break;
		case 20 : printf("<td class=text align=center><a href=\"rslt_crs.php?crs_id=20&amp;year=$year\">Yellow</a></td>\n");break;
		case 21 : printf("<td class=text align=center><a href=\"rslt_crs.php?crs_id=21&amp;year=$year\">Yellow-X</a></td>\n");break;
		case 22 : printf("<td class=text align=center><a href=\"rslt_crs.php?crs_id=22&amp;year=$year\">Yellow-Y</a></td>\n");break;
		case 30 : printf("<td class=text align=center><a href=\"rslt_crs.php?crs_id=30&amp;year=$year\">Orange</a></td>\n");break;
		case 31 : printf("<td class=text align=center><a href=\"rslt_crs.php?crs_id=31&amp;year=$year\">Orange-X</a></td>\n");break;
		case 32 : printf("<td class=text align=center><a href=\"rslt_crs.php?crs_id=32&amp;year=$year\">Orange-Y</a></td>\n");break;
		case 40 : printf("<td class=text align=center><a href=\"rslt_crs.php?crs_id=40&amp;year=$year\">Brown</a></td>\n");break;
		case 41 : printf("<td class=text align=center><a href=\"rslt_crs.php?crs_id=41&amp;year=$year\">Brown-X</a></td>\n");break;
		case 42 : printf("<td class=text align=center><a href=\"rslt_crs.php?crs_id=42&amp;year=$year\">Brown-Y</a></td>\n");break;
		case 50 : printf("<td class=text align=center><a href=\"rslt_crs.php?crs_id=50&amp;year=$year\">Green</a></td>\n");break;
		case 51 : printf("<td class=text align=center><a href=\"rslt_crs.php?crs_id=51&amp;year=$year\">Green-X</a></td>\n");break;
		case 52 : printf("<td class=text align=center><a href=\"rslt_crs.php?crs_id=52&amp;year=$year\">Green-Y</a></td>\n");break;
		case 60 : printf("<td class=text align=center><a href=\"rslt_crs.php?crs_id=60&amp;year=$year\">Red</a></td>\n");break;
		case 61 : printf("<td class=text align=center><a href=\"rslt_crs.php?crs_id=61&amp;year=$year\">Red-X</a></td>\n");break;
		case 62 : printf("<td class=text align=center><a href=\"rslt_crs.php?crs_id=62&amp;year=$year\">Red-Y</a></td>\n");break;
		case 70 : printf("<td class=text align=center><a href=\"rslt_crs.php?crs_id=70&amp;year=$year\">Blue</a></td>\n");break;
		case 71 : printf("<td class=text align=center><a href=\"rslt_crs.php?crs_id=71&amp;year=$year\">Blue-X</a></td>\n");break;
		case 72 : printf("<td class=text align=center><a href=\"rslt_crs.php?crs_id=72&amp;year=$year\">Blue-Y</a></td>\n");break;
		case 80 : printf("<td class=text align=center><a href=\"rslt_crs.php?crs_id=80&amp;year=$year\">Sprint</a></td>\n");break;
		}

		if ($row->time != "DNF" && $row->time != "MP" && $row->time != "OT" && $row->time != "NC")
			$total_secs += time2secs($row->time);
			
		printf("<td class=text align=right>%s</td>\n",$row->time);
		printf("<td class=text align=right>%2.2f</td>\n",$dist);
		if ($row->time != "DNF" && $row->time != "MP" && $row->time != "OT" && $row->time != "NC")
			$total_dist += $dist;
		printf("<td class=text align=right>%2.1f</td>\n",$elev);
		if ($row->time != "DNF" && $row->time != "MP" && $row->time != "OT" && $row->time != "NC")
			$total_elev += $elev;

		printf("<td class=text align=right>%d</td>\n",$ctrls);

		if ($row->time != "DNF" && $row->time != "MP" && $row->time != "OT" && $row->time != "NC")
			$total_ctrls += $ctrls;
		
		$pace = calc_pace($row->time,$dist);
		printf("<td class=text align=right>%s</td>\n",$pace);

		printf("<td class=text align=right>%4.2f</td>\n",$row->this_score);
		
		print("</tr>\n");		
	}
	
//	print totals
	printf("<tr><td class=text colspan=3 align=right><b>Totals</b></td>\n");
	printf("<td class=text align=right>%s</td>\n",format_secs($total_secs));
	printf("<td class=text align=right>%2.2f</td>\n",$total_dist);
	printf("<td class=text align=right>%2.1f</td>\n",$total_elev);
	printf("<td class=text align=right>%d</td>\n",$total_ctrls);

	if ($total_dist > 0.0)
		$overall_pace = $total_secs / $total_dist;
	else
		$overall_pace = 0.0;
	
	printf("<td class=text align=right>%s</td>\n",format_secs($overall_pace));

//filler cell
	printf("<td class=text align=right>&nbsp;</td>\n");

	printf("</tr>\n");
	print("</table>\n");
	

	$sql = sprintf("SELECT sex, age, club, score FROM runner$year WHERE runner_id=%d ",$userid);
	list($sex,$age,$club,$score) = $db->GetRow($sql);
		
	printf("<br>\n");
	printf("<p align=\"center\">\n");
	printf("Club: <b>%s</b>&nbsp;&nbsp;\n",$club);
	printf("Class: <b>%s%d</b>&nbsp;&nbsp;\n",$sex,$age);

	if ($club == "DVOA" || $club == "SVO" || $club == "POC") {

		printf("Ranking Score: <b>%4.2f</b><br />\n",$score);
	
		$rnkquery = sprintf("SELECT runner_id, score FROM runner$year WHERE score > 0 AND (club='DVOA' OR club='SVO' OR club='POC') ORDER BY score DESC");
		$rnkresult = $db->DoSQL($rnkquery);
		$indx     = 0;
		$thisindx = 0;
		while ($rnkrow = $db->GetNextRow($rnkresult)) {
			$indx++;
			if ($rnkrow->runner_id == $userid) {
				$thisindx = $indx;
			}
		}
		printf("Overall Rank: <b>%d</b> of <b>%d</b>&nbsp;&nbsp;\n",$thisindx,$db->NumRows($rnkresult));
		$indx=0;
		if ($sex == "M") {
			$rnkquery = sprintf("SELECT runner_id, score FROM runner$year WHERE score > 0 AND sex='M' AND (club='DVOA' OR club='SVO' OR club='POC') ORDER BY score DESC");
			$rnkresult = $db->DoSQL($rnkquery);
			while ($rnkrow = $db->GetNextRow($rnkresult)) {
				$indx++;
				if ($rnkrow->runner_id == $userid) {
					$thisindx = $indx;
				}
			}
			printf("Men's Rank: <b>%d</b> of <b>%d</b>&nbsp;&nbsp;\n",$thisindx,$db->NumRows($rnkresult));
		} else if ($rowsex == "F") {
			$rnkquery = sprintf("SELECT runner_id, score FROM runner$year WHERE score > 0 AND sex='F' AND (club='DVOA' OR club='SVO' OR club='POC') ORDER BY score DESC");
			$rnkresult = $db->DoSQL($rnkquery);
			while ($rnkrow = $db->GetNextRow($rnkresult)) {
				$indx++;
				if ($rnkrow->runner_id == $userid) {
					$thisindx = $indx;
				}
			}
			printf("Women's Rank: <b>%d</b> of <b>%d</b>&nbsp;&nbsp;\n",$thisindx,$db->NumRows($rnkresult));
		}
		$indx=0;
		$sql = sprintf("SELECT runner_id, score FROM runner$year WHERE score > 0 AND sex='%s' AND age=%d AND (club='DVOA' OR club='SVO' OR club='POC') ORDER BY score DESC",$sex,$age);
		$rnkresult = $db->DoSQL($sql);
		while ($rnkrow = $db->GetNextRow($rnkresult)) {
			$indx++;
			if ($rnkrow->runner_id == $userid) {
				$thisindx = $indx;
			}
		}
		printf("Class Rank: <b>%d</b> of <b>%d</b></td>\n",$thisindx,$db->NumRows($rnkresult));
	} else {
		printf("<p align=\"center\">\n");
		printf("According to our records, it does not appear that you are a member of DVOA. Why don't you consider joining the club and then you will be listed in the club rankings.");
		printf("</p>\n");
	}

	printf("<p align=\"center\"><a class=text href=\"dropcookie.php\">Do not show my personal results</a></p>\n");
}
*/

function printDir($sortDir,$sortBy,$thisCol)
{
	if ($sortBy == $thisCol) {
		if ($sortDir=="ASC")
			return "<img src=\"asc.gif\">";
		else
			return "<img src=\"desc.gif\">";
	} else 
		return "";
}

/*
function getNumInRank($year)
{
	$sql = "SELECT count(*) AS total FROM runner$year WHERE score>0";
	$rs = go_sql($sql);
	list($total) = mysql_fetch_row($rs);
	return $total;
}
*/

//function getAvgAge($year)
//{
//	$sql = "SELECT avg(age) AS average FROM runner$year WHERE score>0";
//	$rs = go_sql($sql);
//	list($average) = mysql_fetch_row($rs);
//	return $average;
//}

?>
 