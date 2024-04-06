<?php
require_once ("../tools/page_code.inc.php");
$page_id = $sked_code;
//require_once ("../tools/accesscontrol.php");
require_once ("../../tools/dvoa_tools.inc.php");
require_once ("../../tools/db_tools.inc.php");
require_once ("sked_tools.inc.php");

$id      = $_REQUEST['id'];

$dbh = DBConnect("dvoa_db_gen");
$sql = "SELECT ev_date, map FROM sked WHERE id=$id";
$rs = go_sql($sql);
list($ev_date,$map) = mysql_fetch_row($rs);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>DVOA Schedule Admin</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="layout.css" rel="stylesheet" type="text/css">
<link href="sked_admin.css" rel="stylesheet" type="text/css">
<meta name="robots" content="noindex" />
</head>

<body>

<div id="wrap">
  <div id="header">
		<h1>DVOA Schedule Administration<br>Schedule Deletion</h1>
  </div>

<p align="center"><strong>Delete Schedule Entry</strong></p>

<?php
	printf("<p><a href=\"%s?action=DROP&id=$id\">Yes, delete the event scheduled at $map on %s</a></p>",$_SESSION['page'],$ev_date);
	printf("<p><a href=\"%s?id=$id\">No, do not delete the $map event</a></p>",$_SESSION['page']);
?>

<?php
DBDisconnect($dbh);
?>

</body>
</html>
