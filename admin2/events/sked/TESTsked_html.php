<?php
//include ("../../tools/db_tools.inc.php");
include ("../../tools/db.dvoa.class.php");
include ("../../tools/dvoa_tools.inc.php");
$now = getdate();
$dd_start = $dd_end = $now['mday'];
$mm_start = $now['mon'];
$yy_start = $yy_end = $now['year'];

$mm_end = $mm_start + 12;
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
		<td><b>CONF</b></td>
		<td><b>NOTES</b></td>
		</tr>

		<?php
		$db = new MeekroDB();
		
		$sql = "SELECT s.id sid, s.dayofwk, s.ev_date, s.map_id, s.courses, s.epunch, s.director, s.email_link,  s.confirm, s.notes, ml.map, ml.id FROM sked as s, maplist as ml WHERE (ev_date>'$start_date' AND ev_date < '$end_date' AND s.map_id = ml.id )
		
		ORDER BY ev_date";
		$rs = $db->query($sql);
		foreach ($rs as $row) {
			printf("<tr>\n");
			printf("<td valign=\"top\">%s %s</td>\n",$row['dayofwk'],FormatDate($row['ev_date']));
			printf("<td valign=\"top\"><b>%s</b></td>\n",$row['map']);
			printf("<td valign=\"top\">%s</td>\n",GetCourses($db,$row['sid']));
			
			if ($row['epunch'] == "Y")
				printf("<td align=\"center\" valign=\"top\">Y</td>\n");
			else
				printf("<td align=\"center\" valign=\"top\">N</td>\n");

			if ($row['confirm'] == "Y")
				printf("<td align=\"center\" valign=\"top\">Y</td>\n");
			else
				printf("<td align=\"center\" valign=\"top\">N</td>\n");

			if (strlen($row['notes']) > 1)
				printf("<td valign=\"top\">%s</td>\n",stripslashes($row['notes']));
			else	
				printf("<td>&nbsp;</td>\n");

			printf("</tr>\n");
		}

		$db->Close();
		?>
	</table>

	<p>Unless otherwise noted, all events start at 10:00am and end at 1:00pm. 
	Cost is $9.00/map for non-members (a group can use one map), $6.00/map for DVOA members, for members of other USOF or IOF clubs, and for members of Scout/Youth groups attending as an organization. 
	When electronic punching is being used at an event, all competitors on a course using 
	electronic punching are required to use an &quot;e-punch&quot;. These can be rented at the event for $1.00. A compass 
	can also be rented for $1.00 to use during the event.</p>

	<p>Course Abbreviations:
	<ul>
	<li><strong>W</strong>: White (Beginner, easiest)</li>
	<li><strong>Y</strong>: Yellow (Advanced Beginner)</li>
	<li><strong>O</strong>: Orange (Intermediate)</li>
	<li><strong>Bn</strong>: Brown (Short Advanced)</li>
	<li><strong>G</strong>: Green (Longer Advanced)</li>
	<li><strong>R</strong>: Red (Long Advanced )</li>
	<li><strong>Bl</strong>: Blue (Very Long Advanced)</li>
	<li><strong>EP</strong>: Y indicates electronic punching will be used for this event</li>
	<li><strong>CONF</strong>: Y indicates this event has been confirmed with park officials</li>
	</ul>
	<p>&nbsp;</p>
</body>
</html>

<?php
function GetCourses($db,$sked_id)
{
	$sql = "SELECT s.id,s.crs_id,c.abbr FROM sked_crs_xref s,crs c WHERE s.sked_id=%i AND s.crs_id=c.crs_id ORDER BY id";
	$rs = $db->query($sql,$sked_id);
	$str = "";
	foreach ($rs as $row) {
		$str .= sprintf("%s",$row['abbr']); //GetAbbr($row['crs_id']));
	}
	return $str;
}

function GetAbbr($db,$id)
{
	$sql = "SELECT abbr FROM crs WHERE crs_id=%i";
	$abbr = $db->queryFirstField($sql,$id);
	return $abbr;
}
?>