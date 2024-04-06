<?php
require ("../../tools/dvoa_tools.inc.php");
require ("../../tools/db_tools.inc.php");
require ("../tools/sidebar.inc.php");
require ("../tools/sked_tools.inc.php");
$title = "DVOA Event Schedule";
$dbh = DBConnect("dvoa_db_gen");

if (isset($_REQUEST['show']))
	$show = $_REQUEST['show'];
else
	$show = "NEW";

if ($show != "ALL")
	$show = "NEW";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>DVOA - Club Information</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../../css/dvoa2008common.css" rel="stylesheet" type="text/css" />
<link href="../../css/dvoa2008sub.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="../images/newflag.ico" />
<style type="text/css">
<!--
.sked_head {
 background-color:#f0f0f0;
 color:#333;
 font-family: verdana, sans-serif;
 font-size: 11px;
 font-weight:bold;
 padding:2px;
}
#main a {
 color:#333;
 font-family: verdana, sans-serif;
 font-size: 11px;
}
#sked_div table {
	border:0;
}
#sked_div td {
	border:0;
}
-->
</style>

<script language="JavaScript" type="text/JavaScript">
<!--

function popWin(theMap,sked_id) 
{
	var URL;
	URL = "../../tools/show_map_event.php?maplink=" + theMap + "&sked_id=" + sked_id;
	win = open(URL,"theWindow", "titlebar=0,width=560,height=420,scrollbars=yes");
	if (win) {
		win.focus();
	}
}

// -->
</script>


</head>



<body>

<div id="wrapper">

<?php
GetHeader("comm");
?>

<div id="main">

<?php
SideBarMenu();
?>


	<div id="content">
		<div id="sked_div">
<h3><?php echo $title;?></h3>

<table cellpadding="0" cellspacing="0" border="0" align="center">
			
<?php
if ($show == "NEW") {
	$now = getdate();
	$today = sprintf("%04s-%02s-%02s",$now["year"],$now["mon"],$now["mday"]);
	$sql = "SELECT id AS sked_id, highlight, dayofwk, ev_date, map, map_link, foreign_link, kit, courses, sprinto, txt_crs, epunch, contact, email_link, phone, notes, notes_link, link_name, confirm FROM sked WHERE ev_date >= '$today' ORDER BY ev_date";
} else if ($show == "ALL") {
	$sql = "SELECT id AS sked_id, highlight, dayofwk, ev_date, map, map_link, foreign_link, kit, courses, sprinto, txt_crs, epunch, contact, email_link, phone, notes, notes_link, link_name, confirm FROM sked ORDER BY ev_date";
}

$normalcolor    = "#ffffff";
$highlightcolor = "cornsilk";


$rs = go_sql($sql);
while($row=mysql_fetch_array($rs)) {
	printf("<tr><td class=\"sked_head\" colspan=\"2\">&nbsp;$row[dayofwk] %s&nbsp;&nbsp;&nbsp;<a href=\"javascript:popWin('%s','%s')\">$row[map]</a>&nbsp;&nbsp;%s</td></tr>\n",FormatDate($row['ev_date']),$row['map_link'],$row['sked_id'],GetCourses($row['sked_id'],$row['confirm']));
	if ($row['highlight'] == "N")
		printf("<tr bgcolor=\"$normalcolor\">\n");
	else	
		printf("<tr bgcolor=\"$highlightcolor\">\n");
	if ($row['epunch'] == "Y")
		printf("<td width=\"52\" rowspan=\"3\" class=\"text\" align=\"center\" valign=\"middle\"><img src=\"bolt.gif\" title=\"Event has EPunching\" alt=\"Event has EPunching\"></td>\n");
	else	
		printf("<td width=\"52\" rowspan=\"3\" class=\"text\" align=\"center\" valign=\"middle\">&nbsp;</td>\n");

	printf("<td class=\"text\"><strong>Event Director:</strong> <a class=\"text\" href=\"mailto:$row[email_link]\">$row[contact]</a>&nbsp;&nbsp;$row[phone]</td>\n");
	printf("</tr>\n");
	if ($row['highlight'] == "N")
		printf("<tr bgcolor=\"$normalcolor\">\n");
	else	
		printf("<tr bgcolor=\"$highlightcolor\">\n");
	printf("<td class=\"text\"><strong>Notes:</strong> $row[notes]\n");

	if (strlen($row['notes_link']) > 1) {
		printf(" <a href=\"%s\">%s</a>",$row['notes_link'],$row['link_name']);
	}
	printf("</td></tr>\n");



	if ($row['highlight'] == "N")
		printf("<tr bgcolor=\"$normalcolor\">\n");
	else	
		printf("<tr bgcolor=\"$highlightcolor\">\n");
	printf("<td class=\"text\"><strong>Directions:</strong> %s</td></tr>\n",GetDirs($row['map_link']));

	if ($row['highlight'] == "N")
		printf("<tr bgcolor=\"$normalcolor\">\n");
	else	
		printf("<tr bgcolor=\"$highlightcolor\">\n");
	printf("<td class=\"text\" colspan=\"2\">&nbsp;</td></tr>\n");
}
?>
</table>

	</div> <!-- end sked_div -->


</div> <!-- end of content -->

<?php
GetSubPageFooter();

GetCredits();
?>



</div> <!-- end of main -->
</div> <!-- end of wrapper -->
 
</body>
</html>


