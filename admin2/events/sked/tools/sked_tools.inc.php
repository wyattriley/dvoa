<?php

function GetCourses($sked_id)
{
	$sql = "SELECT crs_id FROM sked_crs_xref WHERE sked_id=$sked_id ORDER BY crs_id";
	$rs = go_sql($sql);
	$str = "";
	while ($row = mysql_fetch_array($rs)) {
		$str .= sprintf("%s",GetCrsInfo($row['crs_id']));
	}
	return $str;
}

function GetCrsInfo($crs_id)
{
	$sql = "SELECT abbr FROM crs WHERE crs_id=$crs_id";
	$rs = go_sql($sql);
	list ($abbr) = mysql_fetch_row($rs);
	return $abbr;
}

function GetDirs($map_link)
{
	$sql = "SELECT dir FROM maplist WHERE link_name='$map_link'";
	$rs = go_sql($sql);
	list($dir) = mysql_fetch_row($rs);
	if (strlen($dir) > 2)
		return $dir;
	else
		return "";

}

function GetBGColor($id)
{
	$sql = "SELECT bgcolor FROM crs WHERE crs_id=$id";
	$rs = go_sql($sql);
	list ($bgcolor) = mysql_fetch_row($rs);
	return $bgcolor;
}
function GetFGColor($id)
{
	$sql = "SELECT fgcolor FROM crs WHERE crs_id=$id";
	$rs = go_sql($sql);
	list ($fgcolor) = mysql_fetch_row($rs);
	return $fgcolor;
}
function GetAbbr($id)
{
	$sql = "SELECT abbr FROM crs WHERE crs_id=$id";
	$rs = go_sql($sql);
	list ($abbr) = mysql_fetch_row($rs);
	return $abbr;
}


?>