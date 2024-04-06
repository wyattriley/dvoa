<?php

function GetCourses($db,$sked_id,$confirm)
{
	$sql = "SELECT id,crs_id FROM sked_crs_xref WHERE sked_id=%i ORDER BY id";
	$rs  = $db->query($sql,$sked_id);
	$str = "";
	foreach ($rs as $row) {
		$str .= sprintf("<span style=\"background:%s;color:%s;\">&nbsp;%s&nbsp;</span>",GetBGColor($db,$row['crs_id']),GetFGColor($db,$row['crs_id']),GetAbbr($db,$row['crs_id']));
	}
	if ($confirm == "Y")	
		$str .= "&nbsp;<img src=\"check.gif\" alt=\"This event has been confirmed with park officials\" title=\"This event has been approved with park officials\" />";

	return $str;
}

function GetCrsInfo($db,$crs_id)
{
	$sql = "SELECT abbr FROM crs WHERE crs_id=%i";
	$abbr = $db->queryFirstField($rs,$crs_id);
	return $abbr;
}

function GetDirs($db,$map_id)
{
	if ($map_id == 0)
		return "";

	$sql = "SELECT dir FROM maplist WHERE id=%i";
	$dir = $db->queryFirstField($sql,$map_id);
	return stripslashes($dir);
}

function GetBGColor($db,$crs_id)
{
	$sql = "SELECT bgcolor FROM crs WHERE crs_id=%i";
	$bgcolor = $db->queryFirstField($sql,$crs_id);
	return $bgcolor;
}
function GetFGColor($db,$crs_id)
{
	$sql = "SELECT fgcolor FROM crs WHERE crs_id=%i";
	$fgcolor = $db->queryFirstField($sql,$crs_id);
	return $fgcolor;
}
function GetAbbr($db,$crs_id)
{
	$sql = "SELECT abbr FROM crs WHERE crs_id=%i";
	$abbr = $db->queryFirstField($sql,$crs_id);
	return $abbr;
}

function GetLegend()
{
?>
<p style="font-weight:normal;">All starts are from 10:00am until 1:00pm unless otherwise noted. Follow the text directions and look for Orienteering road signs as you near the park.</p>

<table width="180" align="center" cellpadding="2" cellspacing="0" border="1">
	<tr><td colspan="2" align="center"><strong>Legend</strong></td>
	</tr>
	<tr>
		<td><span style="background:#ffffff;color:black;">&nbsp;W&nbsp;</span></td>
		<td>White, beginner level<br />3km or less</td>
	</tr>
	<tr>
		<td><span style="background:#ffff00;color:black;">&nbsp;Y&nbsp;</span></td>
		<td>Yellow, advanced beginner<br />2.5 to 4km</td>
	</tr>
	<tr>
		<td><span style="background:#ff8000;color:black;">&nbsp;O&nbsp;</span></td>
		<td>Orange, intermediate<br />3.5 to 5.5km</td>
	</tr>
	<tr>
		<td><span style="background:brown;color:white;">&nbsp;Br&nbsp;</span></td>
		<td>Brown, Short Advanced<br />3 to 5km</td>
	</tr>
	<tr>
		<td><span style="background:#00ff00;color:black;">&nbsp;G&nbsp;</span></td>
		<td>Green, Advanced<br />4.5 - 7km</td>
	</tr>
	<tr>
		<td><span style="background:#ff0000;color:black;">&nbsp;R&nbsp;</span></td>
		<td>Red, Longer Advanced<br />6 - 10km</td>
	</tr>
	<tr>
		<td><span style="background:#0000FF;color:white;">&nbsp;Bl&nbsp;</span></td>
		<td>Blue, Long Advanced<br />8 - 14kms</td>
	</tr>
	<tr>
		<td><span style="background:teal;color:white;">&nbsp;Sc&nbsp;</span></td>
		<td>Score-O</td>
	</tr>
	<tr>
		<td><span style="background:purple;color:white;">&nbsp;Sp&nbsp;</span></td>
		<td>Sprint-O</td>
	</tr>
	<tr>
		<td><span style="background:#e8e8e8;color:black;">&nbsp;Adv&nbsp;</span></td>
		<td>Advanced</td>
	</tr>
	<tr>
		<td><img src="bolt.gif" alt="E-Punching" /></td>
		<td>E-Punching</td>
	</tr>
	<tr>
		<td><img src="check.gif" alt="Confirmed Event" /></td>
		<td>Confirmed Event</td>
	</tr>
	<tr>
		<td bgcolor="cornsilk">&nbsp;</td>
		<td>Special Event</td>
	</tr>

	<tr>
		<td colspan="2" align="center"><strong>Example O-Signs:</strong></td>
	</tr>
	<tr>
		<td colspan="2"><img src="../../images/o_arrow1.jpg" border="1" alt="Example O-Sign" title="Example O-Sign" />
	</tr>
	<tr>
		<td colspan="2"><img src="../../images/o_arrow2.jpg" border="1" alt="Example O-Sign" title="Example O-Sign" />
	</tr>
	<tr>
		<td colspan="2"><img src="../../images/o_arrow3.jpg" border="1" alt="Example O-Sign" title="Example O-Sign" />
	</tr>
	<tr>
		<td colspan="2"><img src="../../images/o_arrow4.jpg" border="1" alt="Example O-Sign" title="Example O-Sign" />
	</tr>
	<tr>
		<td colspan="2"><img src="../../images/o_arrow5.jpg" border="1" alt="Example O-Sign" title="Example O-Sign" />
	</tr>
	<tr>
		<td colspan="2"><img src="../../images/o_arrow6.jpg" border="1" alt="Example O-Sign" title="Example O-Sign" />
	</tr>
	<tr>
		<td colspan="2"><img src="../../images/o_arrow7.jpg" border="1" alt="Example O-Sign" title="Example O-Sign" />
	</tr>
	<tr>
		<td colspan="2"><img src="../../images/o_arrow8.jpg" border="1" alt="Example O-Sign" title="Example O-Sign" />
	</tr>
	
</table>
<?php
}

function GetMapName($db,$map_id)
{
	$sql = "SELECT map FROM maplist WHERE id=%i";
	$map = $db->queryFirstField($sql,$map_id);
	return $map;
}
?>