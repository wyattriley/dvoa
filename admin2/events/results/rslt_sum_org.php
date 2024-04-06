<?php
include ("../../tools/db_tools.inc.php");
include ("phptools.inc.php");

$dbh = DBConnect("dvoa_db_rank");

$query = sprintf("SELECT lname, fname from runner$year WHERE msid=%d",$runner_id);
$result = mysql_query($query)
	or die("$query failed");
$row = mysql_fetch_array($result);

$title=sprintf("Summary: %s %s",$row[fname],$row[lname]);

dvoa_header($title);

//printf("<h1>Summary for %s %s</h1>\n",$row[fname],$row[lname]);

$query = "SELECT result$year.event_id, course_id, time, this_score FROM result$year, event$year WHERE runner_id=$runner_id AND result$year.event_id = event$year.event_id ORDER BY event$year.event_date";
//$query = sprintf("SELECT event_id, course_id, time, this_score FROM result$year WHERE runner_id=%d",$runner_id);
$result = mysql_query($query)
	or die("$query failed");

print ("<table bgcolor=#ffffff border=1 cellspacing=0 cellpadding=2>\n");
print("<tr bgcolor=#ded7c6><td class=text><b>Event Name</b></td><td align=center class=text><b>Date</b></td><td class=text><b>Course</b></td><td align=center class=text><b>Time</b></td><td class=text><b>Length</b></td><td class=text><b>Climb</b></td><td class=text><b>Ctrls</b></td><td class=text><b>Pace</b></td><td class=text><b>Score</b></td></tr>\n");

$total_secs = 0;
$total_dist=0.0;
$total_elev = 0.0;
$total_ctrls = 0;
	
while ($row=mysql_fetch_array($result)) {
	$event_query = sprintf("SELECT name FROM event$year WHERE event_id='%s'",$row[event_id]);
	$event_result = mysql_query($event_query)
		or die("$event_query failed");
	$event_row=mysql_fetch_array($event_result);
	print("<tr>\n");
	printf("<td bordercolor=#ded7c6 class=smtext>%s</td>\n",$event_row[name]);

	$date_query = sprintf("SELECT event_date FROM event$year WHERE event_id='%s'",$row[event_id]);
	$date_result = mysql_query($date_query)
		or die("$date_ query failed");
	$date_row=mysql_fetch_array($date_result);
	printf("<td bordercolor=#c0c0c0 class=smtext>%s</td>\n",formatDate($date_row[event_date]));

	$course_query = sprintf("SELECT color, dist, elev, ctrls FROM course$year WHERE course_id='%s'",$row[course_id]);
	$course_result = mysql_query($course_query)
		or die("$course_query failed");
	$course_row=mysql_fetch_array($course_result);
	switch ($course_row[color]) {
	case 1 :
		printf("<td bordercolor=#c0c0c0 align=center class=smtext>White</td>\n");
		break;
	case 2 :
		printf("<td bordercolor=#c0c0c0 align=center class=smtext>Yellow</td>\n");
		break;
	case 3 :
		printf("<td bordercolor=#c0c0c0 align=center class=smtext>Orange</td>\n");
		break;
	case 4 :
		printf("<td bordercolor=#c0c0c0 align=center class=smtext>Brown</td>\n");
		break;
	case 5 :
		printf("<td bordercolor=#c0c0c0 align=center class=smtext>Green</td>\n");
		break;
	case 6 :
		printf("<td bordercolor=#c0c0c0 align=center class=smtext>Red</td>\n");
		break;
	case 7 :
		printf("<td bordercolor=#c0c0c0 align=center class=smtext>Blue</td>\n");
		break;
	}

	$total_secs += time2secs(htmlspecialchars($row[time]));
			
	printf("<td bordercolor=#c0c0c0 align=right class=smtext>%s</td>\n",htmlspecialchars($row[time]));
	printf("<td bordercolor=#c0c0c0 align=right class=smtext>%2.2f</td>\n",htmlspecialchars($course_row[dist]));
	if ($row[time] != "DNF")
		$total_dist += htmlspecialchars($course_row[dist]);
	printf("<td bordercolor=#c0c0c0 align=right class=smtext>%2.1f</td>\n",htmlspecialchars($course_row[elev]));
	if ($row[time] != "DNF")
		$total_elev += htmlspecialchars($course_row[elev]);

	printf("<td bordercolor=#c0c0c0 align=right class=smtext>%d</td>\n",htmlspecialchars($course_row[ctrls]));

	if ($row[time] != "DNF")
		$total_ctrls += htmlspecialchars($course_row[ctrls]);
		
	$pace = calc_pace(htmlspecialchars($row[time]),htmlspecialchars($course_row[dist]));
	printf("<td bordercolor=#c0c0c0 align=right class=smtext>%s</td>\n",$pace);
		
	printf("<td bordercolor=#c0c0c0 align=right class=smtext>%4.2f</td>\n",$row[this_score]);
	print("</tr>\n");		
	mysql_free_result($event_result);
}
	
printf("<tr><td bordercolor=#c0c0c0 colspan=3 align=right class=smtext><b>Totals</b></td>\n");
printf("<td bordercolor=#c0c0c0 align=right class=smtext>%s</td>\n",format_secs($total_secs));
printf("<td bordercolor=#c0c0c0 align=right class=smtext>%2.2f</td>\n",$total_dist);
printf("<td bordercolor=#c0c0c0 align=right class=smtext>%2.1f</td>\n",$total_elev);
printf("<td bordercolor=#c0c0c0 align=right class=smtext>%d</td>\n",$total_ctrls);

if ($total_dist > 0.0)
	$overall_pace = $total_secs / $total_dist;
else
	$overall_pace = 0;	
	
printf("<td bordercolor=#c0c0c0 align=right class=smtext>%s</td>\n",format_secs($overall_pace));

printf("</tr>\n");
	
mysql_free_result($result);

print("</table>\n");

$query = sprintf("SELECT sex, age, club, score FROM runner$year WHERE msid=%d ",$runner_id);

$result = mysql_query($query)
	or die("$query failed");
$row = mysql_fetch_array($result);
	

printf("<table bgcolor=#ffffff border=0>\n");
printf("<tr><td>&nbsp;</td></tr>\n");
printf("<tr><td class=text>\n");
printf("Club: <b>%s</b>&nbsp;&nbsp;\n",$row[club]);
printf("Class: <b>%s%d</b>&nbsp;&nbsp;\n",$row[sex],$row[age]);

if ($row[club] == "DVOA" || $row[club] == "SVO" || $row[club] == "POC") {

	printf("Ranking Score: <b>%4.3f</b></td></tr>\n",$row[score]);
	$rnkquery = sprintf("SELECT msid, score FROM runner$year WHERE score > 0 AND (club='DVOA' OR club='SVO' OR club='POC') ORDER BY score");
	$rnkresult = mysql_query($rnkquery)
		or die("$rnkquery failed");
	$indx=0;
	while ($rnkrow=mysql_fetch_array($rnkresult)) {
		$indx++;
		if ($rnkrow[msid] == $runner_id) {
			$thisindx = $indx;
		}
	}
	printf("<tr><td class=text>Overall Rank: <b>%d</b> of <b>%d</b>&nbsp;&nbsp;\n",$thisindx,mysql_num_rows($rnkresult));
	$indx=0;
	if ($row[sex] == "M") {
		$rnkquery = sprintf("SELECT msid, score FROM runner$year WHERE score > 0 AND sex='M' AND (club='DVOA' OR club='SVO' OR club='POC') ORDER BY score");
		$rnkresult = mysql_query($rnkquery)
			or die("$rnkquery failed");
		while ($rnkrow=mysql_fetch_array($rnkresult)) {
			$indx++;
			if ($rnkrow[msid] == $runner_id) {
				$thisindx = $indx;
			}
		}
		printf("Men's Rank: <b>%d</b> of <b>%d</b>&nbsp;&nbsp;\n",$thisindx,mysql_num_rows($rnkresult));
	} else if ($row[sex] == "F") {
		$rnkquery = sprintf("SELECT msid, score FROM runner$year WHERE score > 0 AND sex='F' AND (club='DVOA' OR club='SVO' OR club='POC') ORDER BY score");
		$rnkresult = mysql_query($rnkquery)
			or die("$rnkquery failed");
		while ($rnkrow=mysql_fetch_array($rnkresult)) {
			$indx++;
			if ($rnkrow[msid] == $runner_id) {
				$thisindx = $indx;
			}
		}
		printf("Women's Rank: <b>%d</b> of <b>%d</b>&nbsp;&nbsp;\n",$thisindx,mysql_num_rows($rnkresult));
	}
	$indx=0;
	$rnkquery = sprintf("SELECT msid, score FROM runner$year WHERE score > 0 AND sex='%s' AND age=%d AND (club='DVOA' OR club='SVO' OR club='POC') ORDER BY score",$row[sex],$row[age]);
	$rnkresult = mysql_query($rnkquery)
		or die("$rnkquery failed");
	while ($rnkrow=mysql_fetch_array($rnkresult)) {
		$indx++;
		if ($rnkrow[msid] == $runner_id) {
			$thisindx = $indx;
		}
	}
	printf("Class Rank: <b>%d</b> of <b>%d</b></td>\n",$thisindx,mysql_num_rows($rnkresult));
	printf("<tr><td>&nbsp;</td></tr>\n");
	
	printf("</tr></table>\n");
} else {
	printf("</td></tr>\n");
	printf("<tr><td class=text>\n");
	printf("According to our records, it does not appear that you are a member of DVOA. Why don't you consider joining the club and then you will be listed in the club rankings.");
	printf("</td></tr>\n");
	printf("<tr><td>&nbsp;</td></tr>\n");
	
	printf("</table>\n");
}
	

	
dvoa_footer();
mysql_close($dbh);
?>