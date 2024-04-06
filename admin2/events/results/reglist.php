<?php
require ("../../tools/dvoa_tools.inc.php");
require ("../../tools/db_tools.inc.php");
$title = "Personalized Results";
$bctitle = "Personalized Results";

$year = isset($_REQUEST['year']) ? $_REQUEST['year'] : date("Y") - 2000;


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


<form action="register.php" method=POST>

<?php
printf("<input type=\"hidden\" name=\"year\" value=\"%s\" />\n",$year);

$dbh = DBConnect("dvoa_db_rank");

printf("<select name=\"username\">\n");
$sql = sprintf("SELECT runner$year.runner_id, lname, fname, time FROM runner$year, result$year WHERE runner$year.runner_id=result$year.runner_id GROUP BY result$year.runner_id ORDER BY lname");
$rs = mysql_query($sql)
	or die("$sql failed");
while ($row = mysql_fetch_array($rs)) {
	printf("<option>%s, %s\n",StripSlashes($row['lname']),$row['fname']);
}
mysql_free_result($rs);
mysql_close($dbh);

printf("</select>\n");
?>

<input type=submit value="Register">
</form>

<p>Select your name from the above list and click on &quot;Register&quot;.</p>
<p>(Note, if you have not run in any events your name will not be listed. Once you have run in an event, then check back and you will be able to register.)</p>

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


