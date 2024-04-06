<?php
require ("../tools/sidebar.inc.php");
require ("../../tools/dvoa_tools.inc.php");
require ("../../tools/db_tools.inc.php");
require ("../tools/sked_tools.inc.php");

$dbh = DBConnect("dvoa_db_gen");

$title = "DVOA Kit Schedule";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>DVOA - Club Information</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../../css/dvoa2008common.css" rel="stylesheet" type="text/css" />
<link href="../../css/dvoa2008sub.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="../../images/newflag.ico" />

<style>
html {
	font-family: verdana,"luxi sans",sans-serif;
}
h1 {
	font-size:16px;
	color:#666;
	text-align:center;
}
table {
	border-collapse:collapse;
	border:1px solid #ccc;
}
td {
	font-size: 11px;
	color: #333;
	border:1px solid #ccc;
}
a {
	font-size: 11px;
	color: #333;
}
a:hover {
	color: #cc0000;
}
</style>
	
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

<h3><?php echo $title;?></h3>

<table bgcolor="#ffffff" border="1" cellspacing="0" cellpadding="2" width="640" align="center">

<tr bgcolor="#f0f0f0">
<td><strong>Date</strong></td>
<td><strong>Map</strong></td>
<td><strong>Courses</strong></td>
<td><strong>EP</strong></td>
<td><strong>Kit</strong></td>
<td><strong>Director</strong></td>
</tr>


<?php

$now = getdate();
$today = sprintf("%04s-%02s-%02s",$now["year"],$now["mon"],$now["mday"]);
$sql = "SELECT id,highlight,dayofwk,ev_date,map,map_link,foreign_link,kit,courses,epunch,contact,email_link,notes,notes_link,link_name FROM sked WHERE ev_date >= '$today' ORDER BY ev_date";
$rs = go_sql($sql);

while($row=mysql_fetch_array($rs)) {
	if ($row['highlight'] == "Y")
		printf("<tr bgcolor=\"#cfddd3\">\n");
	else	
		printf("<tr>\n");
		
	printf("<td>%s %s</td>\n",$row['dayofwk'],FormatDate($row['ev_date']));

	if (strlen($row['map']) > 1)
		if ((strlen($row['map_link']) > 1) && (strlen($row['foreign_link']) < 1))
			printf("<td>%s</td>\n",$row['map']);
	else	
		printf("<td>&nbsp;</td>\n");

	
	printf("<td valign=\"top\">%s</td>\n",GetCourses($row['id']));

	printf("<td align=\"center\">%s</td>\n",$row['epunch']);
	
	if (strlen($row['kit']) > 0)
		printf("<td align=\"center\">%s</td>\n",$row['kit']);
	else		
		printf("<td>&nbsp;</td>\n");

	if (strlen($row['contact']) > 0)
		if (strlen($row['email_link']) > 0)
			printf("<td><a href=\"mailto:%s\">%s</a></td>\n",$row['email_link'],$row['contact']);
		else
			printf("<td>%s</td>\n",$row['contact']);
	else	
		printf("<td>&nbsp;</td>\n");

	printf("</tr>\n");
}

mysql_close($dbh);
?>
</table>

</div> <!-- end of content -->

<?php
GetSubPageFooter();

GetCredits();
?>



</div> <!-- end of main -->
</div> <!-- end of wrapper -->
 
</body>
</html>


