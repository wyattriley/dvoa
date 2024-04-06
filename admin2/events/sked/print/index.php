<?php
include ("../../tools/db_tools.inc.php");
include ("../../tools/dvoa_tools.inc.php");
$now = getdate();
$dd_start = $dd_end = $now['mday'];
$mm_start = $now['mon'];
$yy_start = $yy_end = $now['year'];

$mm_end = $mm_start + 6;
if ($mm_end > 12) {
	$yy_end++;
	$mm_end -= 12;
}

$start_date = sprintf("%d-%02d-%02d",$yy_start,$mm_start,$dd_start);
$end_date = sprintf("%d-%02d-%02d",$yy_end,$mm_end,$dd_end);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>DVOA Event Schedule - Printer Friendly Version</title>
<link rel="shortcut icon" href="../../images/newflag.ico" />
<link href="cal_print.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="wrap">

<div id="header">
	<h1>Delaware Valley Orienteering Association</h1>
	<h2>Event Schedule</h2>
<?php
	printf("<p>%s to %s</p>\n",FormatDate($start_date),FormatDate($end_date));
?>
</div>

<table border="1" cellspacing="0" cellpadding="2" width="640" align="center">
<tr><td width="92"><strong>DATE</strong></td>
<td><b>MAP</b></td>
<td><b>COURSES</b></td>
<td><b>EP</b></td>
<td><b>DIRECTOR</b></td>
<!-- <td width="76"><b>PHONE</b></td> -->
<td><b>NOTES</b></td>
</tr>

<?php
$dbh = DBConnect("dvoa_db_gen");
$sql = "SELECT id,dayofwk, ev_date, map, map_link, courses,epunch,contact, email_link, phone, notes FROM sked WHERE (ev_date>'$start_date' AND ev_date < '$end_date') ORDER BY ev_date";
$rs = go_sql($sql);
while($row=mysql_fetch_array($rs)) {
	printf("<tr>\n");
	printf("<td valign=\"top\">%s %s</td>\n",$row['dayofwk'],FormatDate($row['ev_date']));
	printf("<td valign=\"top\"><strong>%s</b></td>\n",$row['map']);
//	if (strlen($row['courses']) > 0)
		printf("<td valign=\"top\">%s</td>\n",GetCourses($row['id']));
//	else
//		printf("<td>&nbsp;</td>\n");
	
	if ($row['epunch'] == "Y")
		printf("<td align=\"center\" valign=\"top\">Y</td>\n");
	else
		printf("<td align=\"center\" valign=\"top\">N</td>\n");

	if (strlen($row['contact']) > 1)
		printf("<td valign=\"top\">%s</td>\n",$row['contact']);
	else	
		printf("<td>&nbsp;</td>\n");

//	if (strlen($row['phone']) > 1)
//		printf("<td valign=\"top\">%s</td>\n",$row['phone']);
//	else	
//		printf("<td>&nbsp;</td>\n");

	if (strlen($row['notes']) > 1)
		printf("<td valign=\"top\">%s</td>\n",$row['notes']);
	else	
		printf("<td>&nbsp;</td>\n");

	printf("</tr>\n");
}

mysql_close($dbh);

?>

</table>

<p>Unless otherwise noted, all events start at 10:00am and end at 1:00pm</p>
<p>Course Abbreviations:
	<ul>
		<li><strong>W</strong>: White (Beginner, easiest)</li>
		<li><strong>Y</strong>: Yellow (Advanced Beginner)</li>
		<li><strong>O</strong>: Orange (Intermediate)</li>
		<li><strong>Bn</strong>: Brown (Short Advanced)</li>
		<li><strong>G</strong>: Green (Longer Advanced)</li>
		<li><strong>R</strong>: Red (Long Advanced )</li>
		<li><strong>Bl</strong>: Blue (Very Long Advanced)</li>
	</ul>
<p>&nbsp;</p>
</body>
</html>


<?php
function GetCourses($sked_id)
{
	$sql = "SELECT id,crs_id FROM sked_crs_xref WHERE sked_id=$sked_id ORDER BY id";
	$rs = go_sql($sql);
	$str = "";
	while ($row=mysql_fetch_array($rs)) {
		$str .= sprintf("%s",GetAbbr($row['crs_id']));
	}

	return $str;
}

function GetAbbr($id)
{
	$sql = "SELECT abbr FROM crs WHERE crs_id=$id";
	$rs = go_sql($sql);
	list ($abbr) = mysql_fetch_row($rs);
	return $abbr;
}

?>