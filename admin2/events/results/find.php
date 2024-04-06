<?php
require ("../../tools/dvoa_tools.inc.php");
require ("../../tools/db_tools.inc.php");
$dbh = DBConnect("dvoa_db_rank");
$title = "Find Orienteers";
$bctitle = "Find Orienteers";

if (isset($_REQUEST['t'])) {
	$show = true;
	$type = $_REQUEST['t'];
	$st   = $_REQUEST['st'];
} else {
	$show = false;
}

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


<table cellpadding="4" cellspacing="0" border="0" align="center">
	<tr>
		<td colspan="26" align="center"><strong>Alphabetical By First Name</strong></td>
	</tr>
	<tr>
		<td align="center"><a href="find.php?t=f&st=a">A</a></td>
		<td align="center"><a href="find.php?t=f&st=b">B</a></td>
		<td align="center"><a href="find.php?t=f&st=c">C</a></td>
		<td align="center"><a href="find.php?t=f&st=d">D</a></td>
		<td align="center"><a href="find.php?t=f&st=e">E</a></td>
		<td align="center"><a href="find.php?t=f&st=f">F</a></td>
		<td align="center"><a href="find.php?t=f&st=g">G</a></td>
		<td align="center"><a href="find.php?t=f&st=h">H</a></td>
		<td align="center"><a href="find.php?t=f&st=i">I</a></td>
		<td align="center"><a href="find.php?t=f&st=j">J</a></td>
		<td align="center"><a href="find.php?t=f&st=k">K</a></td>
		<td align="center"><a href="find.php?t=f&st=l">L</a></td>
		<td align="center"><a href="find.php?t=f&st=m">M</a></td>
		<td align="center"><a href="find.php?t=f&st=n">N</a></td>
		<td align="center"><a href="find.php?t=f&st=o">O</a></td>
		<td align="center"><a href="find.php?t=f&st=p">P</a></td>
		<td align="center"><a href="find.php?t=f&st=q">Q</a></td>
		<td align="center"><a href="find.php?t=f&st=r">R</a></td>
		<td align="center"><a href="find.php?t=f&st=s">S</a></td>
		<td align="center"><a href="find.php?t=f&st=t">T</a></td>
		<td align="center"><a href="find.php?t=f&st=y">U</a></td>
		<td align="center"><a href="find.php?t=f&st=v">V</a></td>
		<td align="center"><a href="find.php?t=f&st=w">W</a></td>
		<td align="center"><a href="find.php?t=f&st=x">X</a></td>
		<td align="center"><a href="find.php?t=f&st=y">Y</a></td>
		<td align="center"><a href="find.php?t=f&st=z">Z</a></td>
	</tr>
	<tr>
		<td colspan="26" align="center"><strong>Alphabetical By Last Name</strong></td>
	</tr>
	<tr>
		<td align="center"><a href="find.php?t=l&st=a">A</a></td>
		<td align="center"><a href="find.php?t=l&st=b">B</a></td>
		<td align="center"><a href="find.php?t=l&st=c">C</a></td>
		<td align="center"><a href="find.php?t=l&st=d">D</a></td>
		<td align="center"><a href="find.php?t=l&st=e">E</a></td>
		<td align="center"><a href="find.php?t=l&st=f">F</a></td>
		<td align="center"><a href="find.php?t=l&st=g">G</a></td>
		<td align="center"><a href="find.php?t=l&st=h">H</a></td>
		<td align="center"><a href="find.php?t=l&st=i">I</a></td>
		<td align="center"><a href="find.php?t=l&st=j">J</a></td>
		<td align="center"><a href="find.php?t=l&st=k">K</a></td>
		<td align="center"><a href="find.php?t=l&st=l">L</a></td>
		<td align="center"><a href="find.php?t=l&st=m">M</a></td>
		<td align="center"><a href="find.php?t=l&st=n">N</a></td>
		<td align="center"><a href="find.php?t=l&st=o">O</a></td>
		<td align="center"><a href="find.php?t=l&st=p">P</a></td>
		<td align="center"><a href="find.php?t=l&st=q">Q</a></td>
		<td align="center"><a href="find.php?t=l&st=r">R</a></td>
		<td align="center"><a href="find.php?t=l&st=s">S</a></td>
		<td align="center"><a href="find.php?t=l&st=t">T</a></td>
		<td align="center"><a href="find.php?t=l&st=u">U</a></td>
		<td align="center"><a href="find.php?t=l&st=v">V</a></td>
		<td align="center"><a href="find.php?t=l&st=w">W</a></td>
		<td align="center"><a href="find.php?t=l&st=x">X</a></td>
		<td align="center"><a href="find.php?t=l&st=y">Y</a></td>
		<td align="center"><a href="find.php?t=l&st=z">Z</a></td>
	</tr>
</table>

<p>&nbsp;</p>

<?php

if ($show) {
	$dbh = DBConnect("dvoa_db_rank");
	
	if ($type == "f")
		printf("<p><strong>Search results for first name starting with &quot;%s&quot;:</strong></p>\n",strtoupper($st));
	else
		printf("<p><strong>Search results for last name starting with &quot;%s&quot;:</strong></p>\n",strtoupper($st));
	
	for ($year=2009;$year>=2000;$year--) {
		printf("<p><strong>$year Results:</strong><br />\n");
		printf("<form name=\"form$year\">\n");
		printf("<select name=\"list$year\" onchange=\"document.location.href=document.form$year.list$year.options[document.form$year.list$year.selectedIndex].value\">\n");
		printf("<option value=\"\">Please select...</option>");
		if ($type == "f") {
			$sql = sprintf("SELECT runner_id,fname,lname FROM runner%02d WHERE fname LIKE '$st%%' ORDER BY fname, lname",$year - 2000);
		} else if ($type == "l") {
			$sql = sprintf("SELECT runner_id,fname,lname FROM runner%02d WHERE lname LIKE '$st%%' ORDER BY lname, fname",$year - 2000);
		} 
		$rs = go_sql($sql);
		while ($row = mysql_fetch_array($rs)) {
			if ($type == "f")
				printf("<option value=\"rslt_sum.php?runner_id=%d&year=%02d&t=$type&st=$st\">%s %s</option>",$row['runner_id'],$year-2000,$row['fname'],StripSlashes($row['lname']));
			else	
				printf("<option value=\"rslt_sum.php?runner_id=%d&year=%02d&t=$type&st=$st\">%s, %s</option>",$row['runner_id'],$year-2000,$row['lname'],StripSlashes($row['fname']));
		}
		printf("</select>\n");
		printf("</form>\n");
	}
	
	mysql_close($dbh);
	for ($i=0;$i<2;$i++)
		printf("<p>&nbsp;</p>\n");
} else {
	for ($i=0;$i<10;$i++)
		printf("<p>&nbsp;</p>\n");
}
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


