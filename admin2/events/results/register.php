<?php
require ("../../tools/db_tools.inc.php");
$year = $_POST['year'];

$dbh = DBConnect("dvoa_db_rank");
$username  = $_POST['username'];
$indx      = strpos($username,",",0);
$lastname  = substr($username,0,$indx);
$firstname = substr($username,$indx+2,strlen($username)-$indx+2);
$sql = sprintf("SELECT runner_id, lname, fname FROM runner$year WHERE lname='%s' AND fname='%s'",$lastname,$firstname);
$rs = go_sql($sql);
if (mysql_num_rows($rs) > 0) {
	$row      = mysql_fetch_array($rs);
	$lifetime = mktime(0,0,0,03,15,2012);
	setcookie("dvoadbuserid",$row['runner_id'],$lifetime,"/");
}
require ("../../tools/dvoa_tools.inc.php");
$title   = "Personalized Results";
$bctitle = "Personalized Results";
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
<?php
	GetHTC();
?>
</head>
<body>

<div id="wrapper">

<?php
GetHeader("comm",$_SERVER['PHP_SELF']);
?>

<div id="main">

	<div id="sidebar">
<?php
GetSideBar();
?>
	</div> <!-- end sidebar div -->


	<div id="content">
<h3><?php echo $title;?></h3>


<p>You have successfully registered for your personalized results!</p>
<p><a href="index.php">Results Page</a></p>
<p><a href="../../index.php">DVOA's Home Page</a></p>


<?php
$num_lines = 20;
for ($i=0;$i<$num_lines;$i++)
	printf("<p>&nbsp;</p>");
?>


	</div> <!-- end of content -->

<?php
GetSubPageFooter();

GetCredits();
?>



</div> <!-- end of main -->
</div> <!-- end of wrapper -->
 
</body>
</html>


