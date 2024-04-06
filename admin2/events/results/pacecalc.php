<?php
require ("../../tools/dvoa_tools.inc.php");
require ("../../tools/db_tools.inc.php");
$title = "Orienteering Pace Calculator";
$bctitle = "Pace Calculator";
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
<script type="text/javascript" src="../../tools/pacecalc.js"></script>

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


<table width="100%" cellpadding="8" cellspacing="0" border="0">

<tr>
    <td width=220 align=center>
	<table width="80%" border="0">
    	<tr><td align="center"><strong>Time Calculator</strong></td></tr>
    </table>
	</td>
    <td width="220" align="center">
	<table cellpadding="2" cellspacing="0" width="80%" border="0">
    	<tr><td align="center"><strong>Pace Calculator</strong></td></tr>
    </table>
	</td>
</tr>
<tr>
    <td width="220" align="center"  valign="top">
	<form name="timecalc">
	Finish Time:<br>
	<input type="text" name="endTime" size="10" maxlength="16" value="hh:mm:ss">
	<br>	
	Start Time:<br>
	<input type="text" name="startTime" size="10" maxlength="16" value="hh:mm:ss">
	<br>	
	<input type="button" onClick="calcTime()" value="CalcTime">
	<br><br>
	Elapsed Time:<br>
	<input type="text" name="elapsedTime" size="10" maxlength="16" value="">
	</form>
	</td>



    <td width="220" align="center" valign="top">
	<form name="pacecalc">
	Distance (km):<br>
	<input type="text" name="dist" size="10" maxlength="16" value="">
	<br>
	Time (mm:ss):<br>
	<input type="text" name="time" size="10" maxlength="16" value="">
	<br>
	Climb (meters):<br>
	<input type="text" name="climb" size="10" maxlength="16" value="">
	<br>	
	<input type="button" onClick="calcPace()" value="CalcPace">
	<br><br>
	Pace: (min/k)<br>
	<input type="text" name="pace" size="10" maxlength="16" value="">
	</form>
	</td>
</tr>
<tr>
    <td width="220" align="center" valign="top">
	Enter your finish and start times using 24 hour notation - ex: enter 1:05:27 as 13:05:07. To 
	calculate the elapsed time, just click the Calc button. The elapsed time will be displayed 
	both below and in the time box for the pace calculator. You can then just enter the distance 
	and climb (optional) and click the CalcPace button to calculate your pace.
	</td>

    <td width="220" align="center" valign="top">
	Enter the course distance and your time, and then click the 
	Calc button.  If you want to have the amount of climb factored 
	into the calculation (100m = 1k), enter the course elevation into the climb 
	text box, otherwise just leave the climb box empty. 
	</td>
</tr>

<tr><td colspan="2">&nbsp;</td></tr>

<tr><td colspan="2">
	<b>NOTE:</b> There is no error checking on the input values, so if you enter invalid times the 
	calculator may give some strange results.
</td></tr>

<tr><td colspan="2">&nbsp;</td></tr>
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


