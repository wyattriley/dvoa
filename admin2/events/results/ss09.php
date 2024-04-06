<html>
<head>
<title>DVOA Snapshot Table</title>
</head><body>
<h1>Creating table - ss09</h1>
<?php
$dbh = mysql_connect("localhost", "dvoa_kent", "5215");
mysql_select_db("dvoa_db_rank");
$sql = "TRUNCATE ss09";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
$sql = "INSERT INTO ss09 SET runner_id='48',ss_date='2009-04-19',sex='M',age='50',score='47.597363',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("48 M50 47.597363<br>");
$sql = "INSERT INTO ss09 SET runner_id='87',ss_date='2009-04-19',sex='M',age='16',score='85.327372',wh_sc='0',ye_sc='0',or_sc='141.377966',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("87 M16 85.327372<br>");
$sql = "INSERT INTO ss09 SET runner_id='162',ss_date='2009-04-19',sex='M',age='35',score='62.985221',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("162 M35 62.985221<br>");
$sql = "INSERT INTO ss09 SET runner_id='176',ss_date='2009-04-19',sex='M',age='55',score='94.523099',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("176 M55 94.523099<br>");
$sql = "INSERT INTO ss09 SET runner_id='248',ss_date='2009-04-19',sex='M',age='60',score='62.137334',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='134.369633',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("248 M60 62.137334<br>");
$sql = "INSERT INTO ss09 SET runner_id='428',ss_date='2009-04-19',sex='M',age='50',score='47.073067',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("428 M50 47.073067<br>");
$sql = "INSERT INTO ss09 SET runner_id='463',ss_date='2009-04-19',sex='M',age='45',score='39.813451',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("463 M45 39.813451<br>");
$sql = "INSERT INTO ss09 SET runner_id='567',ss_date='2009-04-19',sex='M',age='55',score='72.522841',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='110.124572',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("567 M55 72.522841<br>");
$sql = "INSERT INTO ss09 SET runner_id='568',ss_date='2009-04-19',sex='F',age='55',score='26.793899',wh_sc='0',ye_sc='0',or_sc='50.005095',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("568 F55 26.793899<br>");
$sql = "INSERT INTO ss09 SET runner_id='601',ss_date='2009-04-19',sex='M',age='60',score='36.398679',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("601 M60 36.398679<br>");
$sql = "INSERT INTO ss09 SET runner_id='666',ss_date='2009-04-19',sex='F',age='55',score='37.689667',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("666 F55 37.689667<br>");
$sql = "INSERT INTO ss09 SET runner_id='667',ss_date='2009-04-19',sex='M',age='55',score='35.466277',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("667 M55 35.466277<br>");
$sql = "INSERT INTO ss09 SET runner_id='797',ss_date='2009-04-19',sex='F',age='55',score='52.671425',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='81.150455',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("797 F55 52.671425<br>");
$sql = "INSERT INTO ss09 SET runner_id='798',ss_date='2009-04-19',sex='M',age='60',score='39.433893',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='85.345307',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("798 M60 39.433893<br>");
$sql = "INSERT INTO ss09 SET runner_id='799',ss_date='2009-04-19',sex='M',age='45',score='96.603824',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("799 M45 96.603824<br>");
$sql = "INSERT INTO ss09 SET runner_id='970',ss_date='2009-04-19',sex='F',age='55',score='24.128358',wh_sc='0',ye_sc='0',or_sc='46.471615',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("970 F55 24.128358<br>");
$sql = "INSERT INTO ss09 SET runner_id='1198',ss_date='2009-04-19',sex='M',age='65',score='55.327813',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1198 M65 55.327813<br>");
$sql = "INSERT INTO ss09 SET runner_id='1238',ss_date='2009-04-19',sex='M',age='55',score='31.342848',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='50.526793',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1238 M55 31.342848<br>");
$sql = "INSERT INTO ss09 SET runner_id='1318',ss_date='2009-04-19',sex='M',age='50',score='30.955496',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1318 M50 30.955496<br>");
$sql = "INSERT INTO ss09 SET runner_id='1432',ss_date='2009-04-19',sex='M',age='45',score='108.873078',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1432 M45 108.873078<br>");
$sql = "INSERT INTO ss09 SET runner_id='1503',ss_date='2009-04-19',sex='F',age='55',score='26.210412',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='56.739518',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1503 F55 26.210412<br>");
$sql = "INSERT INTO ss09 SET runner_id='1504',ss_date='2009-04-19',sex='M',age='60',score='52.425893',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='84.602588',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1504 M60 52.425893<br>");
$sql = "INSERT INTO ss09 SET runner_id='1548',ss_date='2009-04-19',sex='F',age='40',score='35.05087',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1548 F40 35.05087<br>");
$sql = "INSERT INTO ss09 SET runner_id='1718',ss_date='2009-04-19',sex='M',age='60',score='57.672207',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1718 M60 57.672207<br>");
$sql = "INSERT INTO ss09 SET runner_id='1746',ss_date='2009-04-19',sex='F',age='50',score='48.365221',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1746 F50 48.365221<br>");
$sql = "INSERT INTO ss09 SET runner_id='1771',ss_date='2009-04-19',sex='F',age='60',score='34.171482',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1771 F60 34.171482<br>");
$sql = "INSERT INTO ss09 SET runner_id='1878',ss_date='2009-04-19',sex='F',age='50',score='32.175229',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1878 F50 32.175229<br>");
$sql = "INSERT INTO ss09 SET runner_id='1879',ss_date='2009-04-19',sex='M',age='50',score='65.134031',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='105.27284',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1879 M50 65.134031<br>");
$sql = "INSERT INTO ss09 SET runner_id='1925',ss_date='2009-04-19',sex='M',age='16',score='58.590628',wh_sc='0',ye_sc='0',or_sc='108.616938',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1925 M16 58.590628<br>");
$sql = "INSERT INTO ss09 SET runner_id='1926',ss_date='2009-04-19',sex='M',age='18',score='67.674728',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1926 M18 67.674728<br>");
$sql = "INSERT INTO ss09 SET runner_id='1928',ss_date='2009-04-19',sex='M',age='50',score='84.323211',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1928 M50 84.323211<br>");
$sql = "INSERT INTO ss09 SET runner_id='1953',ss_date='2009-04-19',sex='M',age='55',score='69.840618',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1953 M55 69.840618<br>");
$sql = "INSERT INTO ss09 SET runner_id='1991',ss_date='2009-04-19',sex='M',age='60',score='37.058504',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='80.28506',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1991 M60 37.058504<br>");
$sql = "INSERT INTO ss09 SET runner_id='1992',ss_date='2009-04-19',sex='F',age='60',score='27.881974',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='65.415057',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1992 F60 27.881974<br>");
$sql = "INSERT INTO ss09 SET runner_id='2108',ss_date='2009-04-19',sex='M',age='60',score='46.70948',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='100',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2108 M60 46.70948<br>");
$sql = "INSERT INTO ss09 SET runner_id='2122',ss_date='2009-04-19',sex='M',age='55',score='61.528253',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2122 M55 61.528253<br>");
$sql = "INSERT INTO ss09 SET runner_id='2254',ss_date='2009-04-19',sex='F',age='16',score='26.617726',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2254 F16 26.617726<br>");
$sql = "INSERT INTO ss09 SET runner_id='2257',ss_date='2009-04-19',sex='M',age='50',score='16.850716',wh_sc='0',ye_sc='100',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2257 M50 16.850716<br>");
$sql = "INSERT INTO ss09 SET runner_id='2275',ss_date='2009-04-19',sex='M',age='21',score='48.562092',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2275 M21 48.562092<br>");
$sql = "INSERT INTO ss09 SET runner_id='2303',ss_date='2009-04-19',sex='G',age='2',score='33.858634',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='60.044314',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2303 G2 33.858634<br>");
$sql = "INSERT INTO ss09 SET runner_id='2',ss_date='2009-04-26',sex='F',age='40',score='46.045266',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='69.961225',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2 F40 46.045266<br>");
$sql = "INSERT INTO ss09 SET runner_id='48',ss_date='2009-04-26',sex='M',age='50',score='48.325853',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("48 M50 48.325853<br>");
$sql = "INSERT INTO ss09 SET runner_id='87',ss_date='2009-04-26',sex='M',age='16',score='89.367016',wh_sc='0',ye_sc='0',or_sc='140.874485',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("87 M16 89.367016<br>");
$sql = "INSERT INTO ss09 SET runner_id='96',ss_date='2009-04-26',sex='M',age='55',score='56.221848',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='86.119135',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("96 M55 56.221848<br>");
$sql = "INSERT INTO ss09 SET runner_id='162',ss_date='2009-04-26',sex='M',age='35',score='66.970536',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("162 M35 66.970536<br>");
$sql = "INSERT INTO ss09 SET runner_id='176',ss_date='2009-04-26',sex='M',age='55',score='96.281938',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("176 M55 96.281938<br>");
$sql = "INSERT INTO ss09 SET runner_id='248',ss_date='2009-04-26',sex='M',age='60',score='60.561117',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='127.752618',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("248 M60 60.561117<br>");
$sql = "INSERT INTO ss09 SET runner_id='428',ss_date='2009-04-26',sex='M',age='50',score='48.960966',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='91.255578',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("428 M50 48.960966<br>");
$sql = "INSERT INTO ss09 SET runner_id='463',ss_date='2009-04-26',sex='M',age='45',score='40.200326',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("463 M45 40.200326<br>");
$sql = "INSERT INTO ss09 SET runner_id='567',ss_date='2009-04-26',sex='M',age='55',score='72.127095',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='107.370893',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("567 M55 72.127095<br>");
$sql = "INSERT INTO ss09 SET runner_id='568',ss_date='2009-04-26',sex='F',age='55',score='27.775956',wh_sc='0',ye_sc='0',or_sc='49.476467',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("568 F55 27.775956<br>");
$sql = "INSERT INTO ss09 SET runner_id='601',ss_date='2009-04-26',sex='M',age='60',score='37.894879',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("601 M60 37.894879<br>");
$sql = "INSERT INTO ss09 SET runner_id='666',ss_date='2009-04-26',sex='F',age='55',score='39.846837',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("666 F55 39.846837<br>");
$sql = "INSERT INTO ss09 SET runner_id='667',ss_date='2009-04-26',sex='M',age='55',score='38.219689',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='57.303531',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("667 M55 38.219689<br>");
$sql = "INSERT INTO ss09 SET runner_id='797',ss_date='2009-04-26',sex='F',age='55',score='54.118672',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='78.771597',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("797 F55 54.118672<br>");
$sql = "INSERT INTO ss09 SET runner_id='798',ss_date='2009-04-26',sex='M',age='60',score='40.313897',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='80.991804',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("798 M60 40.313897<br>");
$sql = "INSERT INTO ss09 SET runner_id='799',ss_date='2009-04-26',sex='M',age='45',score='93.680364',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("799 M45 93.680364<br>");
$sql = "INSERT INTO ss09 SET runner_id='970',ss_date='2009-04-26',sex='F',age='55',score='27.339928',wh_sc='0',ye_sc='0',or_sc='48.854601',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("970 F55 27.339928<br>");
$sql = "INSERT INTO ss09 SET runner_id='1198',ss_date='2009-04-26',sex='M',age='65',score='55.827605',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1198 M65 55.827605<br>");
$sql = "INSERT INTO ss09 SET runner_id='1238',ss_date='2009-04-26',sex='M',age='55',score='37.325868',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='57.026223',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1238 M55 37.325868<br>");
$sql = "INSERT INTO ss09 SET runner_id='1318',ss_date='2009-04-26',sex='M',age='50',score='32.641891',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='62.367615',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1318 M50 32.641891<br>");
$sql = "INSERT INTO ss09 SET runner_id='1432',ss_date='2009-04-26',sex='M',age='45',score='110.037698',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1432 M45 110.037698<br>");
$sql = "INSERT INTO ss09 SET runner_id='1503',ss_date='2009-04-26',sex='F',age='55',score='26.25958',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='53.929543',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1503 F55 26.25958<br>");
$sql = "INSERT INTO ss09 SET runner_id='1504',ss_date='2009-04-26',sex='M',age='60',score='54.944678',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='86.555519',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1504 M60 54.944678<br>");
$sql = "INSERT INTO ss09 SET runner_id='1548',ss_date='2009-04-26',sex='F',age='40',score='36.276495',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1548 F40 36.276495<br>");
$sql = "INSERT INTO ss09 SET runner_id='1567',ss_date='2009-04-26',sex='M',age='50',score='77.439087',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1567 M50 77.439087<br>");
$sql = "INSERT INTO ss09 SET runner_id='1570',ss_date='2009-04-26',sex='M',age='18',score='64.877313',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1570 M18 64.877313<br>");
$sql = "INSERT INTO ss09 SET runner_id='1718',ss_date='2009-04-26',sex='M',age='60',score='58.740771',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1718 M60 58.740771<br>");
$sql = "INSERT INTO ss09 SET runner_id='1746',ss_date='2009-04-26',sex='F',age='50',score='48.654064',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1746 F50 48.654064<br>");
$sql = "INSERT INTO ss09 SET runner_id='1771',ss_date='2009-04-26',sex='F',age='60',score='34.523504',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1771 F60 34.523504<br>");
$sql = "INSERT INTO ss09 SET runner_id='1878',ss_date='2009-04-26',sex='F',age='50',score='35.632968',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1878 F50 35.632968<br>");
$sql = "INSERT INTO ss09 SET runner_id='1879',ss_date='2009-04-26',sex='M',age='50',score='67.061332',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='106.073589',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1879 M50 67.061332<br>");
$sql = "INSERT INTO ss09 SET runner_id='1923',ss_date='2009-04-26',sex='M',age='14',score='57.23082',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1923 M14 57.23082<br>");
$sql = "INSERT INTO ss09 SET runner_id='1925',ss_date='2009-04-26',sex='M',age='16',score='62.758188',wh_sc='0',ye_sc='0',or_sc='106.690156',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1925 M16 62.758188<br>");
$sql = "INSERT INTO ss09 SET runner_id='1926',ss_date='2009-04-26',sex='M',age='18',score='68.273678',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1926 M18 68.273678<br>");
$sql = "INSERT INTO ss09 SET runner_id='1928',ss_date='2009-04-26',sex='M',age='50',score='88.495892',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1928 M50 88.495892<br>");
$sql = "INSERT INTO ss09 SET runner_id='1953',ss_date='2009-04-26',sex='M',age='55',score='70.437789',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1953 M55 70.437789<br>");
$sql = "INSERT INTO ss09 SET runner_id='1991',ss_date='2009-04-26',sex='M',age='60',score='39.135265',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='76.276686',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1991 M60 39.135265<br>");
$sql = "INSERT INTO ss09 SET runner_id='1992',ss_date='2009-04-26',sex='F',age='60',score='29.298992',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='62.638299',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1992 F60 29.298992<br>");
$sql = "INSERT INTO ss09 SET runner_id='2108',ss_date='2009-04-26',sex='M',age='60',score='47.428639',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='100',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2108 M60 47.428639<br>");
$sql = "INSERT INTO ss09 SET runner_id='2122',ss_date='2009-04-26',sex='M',age='55',score='62.860327',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2122 M55 62.860327<br>");
$sql = "INSERT INTO ss09 SET runner_id='2254',ss_date='2009-04-26',sex='F',age='16',score='28.605649',wh_sc='0',ye_sc='0',or_sc='52.435359',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2254 F16 28.605649<br>");
$sql = "INSERT INTO ss09 SET runner_id='2255',ss_date='2009-04-26',sex='G',age='2',score='31.979082',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2255 G2 31.979082<br>");
$sql = "INSERT INTO ss09 SET runner_id='2257',ss_date='2009-04-26',sex='M',age='50',score='16.643151',wh_sc='0',ye_sc='100',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2257 M50 16.643151<br>");
$sql = "INSERT INTO ss09 SET runner_id='2275',ss_date='2009-04-26',sex='M',age='21',score='50.952445',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2275 M21 50.952445<br>");
$sql = "INSERT INTO ss09 SET runner_id='2303',ss_date='2009-04-26',sex='G',age='2',score='34.5081',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='57.070476',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2303 G2 34.5081<br>");
$sql = "INSERT INTO ss09 SET runner_id='2303',ss_date='2009-05-03',sex='G',age='2',score='33.827058',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='55.70395',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2303 G2 33.827058<br>");
$sql = "INSERT INTO ss09 SET runner_id='2275',ss_date='2009-05-03',sex='M',age='21',score='50.065852',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2275 M21 50.065852<br>");
$sql = "INSERT INTO ss09 SET runner_id='2267',ss_date='2009-05-03',sex='M',age='45',score='37.168927',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2267 M45 37.168927<br>");
$sql = "INSERT INTO ss09 SET runner_id='2257',ss_date='2009-05-03',sex='M',age='50',score='16.849607',wh_sc='0',ye_sc='100',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2257 M50 16.849607<br>");
$sql = "INSERT INTO ss09 SET runner_id='2254',ss_date='2009-05-03',sex='F',age='16',score='31.266887',wh_sc='0',ye_sc='0',or_sc='53.940695',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2254 F16 31.266887<br>");
$sql = "INSERT INTO ss09 SET runner_id='2122',ss_date='2009-05-03',sex='M',age='55',score='61.920465',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='91.003422',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2122 M55 61.920465<br>");
$sql = "INSERT INTO ss09 SET runner_id='2108',ss_date='2009-05-03',sex='M',age='60',score='45.38548',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='67.429136',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2108 M60 45.38548<br>");
$sql = "INSERT INTO ss09 SET runner_id='1992',ss_date='2009-05-03',sex='F',age='60',score='29.770476',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='59.07663',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1992 F60 29.770476<br>");
$sql = "INSERT INTO ss09 SET runner_id='1991',ss_date='2009-05-03',sex='M',age='60',score='38.239102',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='72.177934',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1991 M60 38.239102<br>");
$sql = "INSERT INTO ss09 SET runner_id='1953',ss_date='2009-05-03',sex='M',age='55',score='69.776727',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1953 M55 69.776727<br>");
$sql = "INSERT INTO ss09 SET runner_id='1928',ss_date='2009-05-03',sex='M',age='50',score='89.322578',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1928 M50 89.322578<br>");
$sql = "INSERT INTO ss09 SET runner_id='1926',ss_date='2009-05-03',sex='M',age='18',score='66.351409',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1926 M18 66.351409<br>");
$sql = "INSERT INTO ss09 SET runner_id='1925',ss_date='2009-05-03',sex='M',age='16',score='61.139232',wh_sc='0',ye_sc='0',or_sc='106.468103',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1925 M16 61.139232<br>");
$sql = "INSERT INTO ss09 SET runner_id='1923',ss_date='2009-05-03',sex='M',age='14',score='55.920124',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1923 M14 55.920124<br>");
$sql = "INSERT INTO ss09 SET runner_id='1916',ss_date='2009-05-03',sex='F',age='55',score='29.905462',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1916 F55 29.905462<br>");
$sql = "INSERT INTO ss09 SET runner_id='1879',ss_date='2009-05-03',sex='M',age='50',score='66.592153',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='103.995172',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1879 M50 66.592153<br>");
$sql = "INSERT INTO ss09 SET runner_id='1878',ss_date='2009-05-03',sex='F',age='50',score='35.662605',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1878 F50 35.662605<br>");
$sql = "INSERT INTO ss09 SET runner_id='1771',ss_date='2009-05-03',sex='F',age='60',score='35.946132',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1771 F60 35.946132<br>");
$sql = "INSERT INTO ss09 SET runner_id='1746',ss_date='2009-05-03',sex='F',age='50',score='47.516211',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1746 F50 47.516211<br>");
$sql = "INSERT INTO ss09 SET runner_id='1739',ss_date='2009-05-03',sex='M',age='70',score='49.329779',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='92.728007',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1739 M70 49.329779<br>");
$sql = "INSERT INTO ss09 SET runner_id='1718',ss_date='2009-05-03',sex='M',age='60',score='58.255378',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1718 M60 58.255378<br>");
$sql = "INSERT INTO ss09 SET runner_id='1570',ss_date='2009-05-03',sex='M',age='18',score='67.063443',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1570 M18 67.063443<br>");
$sql = "INSERT INTO ss09 SET runner_id='1567',ss_date='2009-05-03',sex='M',age='50',score='76.645032',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='126.368859',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1567 M50 76.645032<br>");
$sql = "INSERT INTO ss09 SET runner_id='1548',ss_date='2009-05-03',sex='F',age='40',score='35.493321',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1548 F40 35.493321<br>");
$sql = "INSERT INTO ss09 SET runner_id='1504',ss_date='2009-05-03',sex='M',age='60',score='53.21865',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='84.560102',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1504 M60 53.21865<br>");
$sql = "INSERT INTO ss09 SET runner_id='1503',ss_date='2009-05-03',sex='F',age='55',score='26.213202',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='50.118741',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1503 F55 26.213202<br>");
$sql = "INSERT INTO ss09 SET runner_id='1432',ss_date='2009-05-03',sex='M',age='45',score='108.756888',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1432 M45 108.756888<br>");
$sql = "INSERT INTO ss09 SET runner_id='1397',ss_date='2009-05-03',sex='M',age='16',score='54.354712',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1397 M16 54.354712<br>");
$sql = "INSERT INTO ss09 SET runner_id='1318',ss_date='2009-05-03',sex='M',age='50',score='31.401343',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='61.52252',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1318 M50 31.401343<br>");
$sql = "INSERT INTO ss09 SET runner_id='1238',ss_date='2009-05-03',sex='M',age='55',score='35.024702',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='55.568003',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1238 M55 35.024702<br>");
$sql = "INSERT INTO ss09 SET runner_id='1198',ss_date='2009-05-03',sex='M',age='65',score='54.668407',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1198 M65 54.668407<br>");
$sql = "INSERT INTO ss09 SET runner_id='1189',ss_date='2009-05-03',sex='M',age='70',score='58.199312',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1189 M70 58.199312<br>");
$sql = "INSERT INTO ss09 SET runner_id='970',ss_date='2009-05-03',sex='F',age='55',score='27.677843',wh_sc='0',ye_sc='0',or_sc='49.508459',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("970 F55 27.677843<br>");
$sql = "INSERT INTO ss09 SET runner_id='799',ss_date='2009-05-03',sex='M',age='45',score='93.257605',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("799 M45 93.257605<br>");
$sql = "INSERT INTO ss09 SET runner_id='798',ss_date='2009-05-03',sex='M',age='60',score='40.788965',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='76.854112',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("798 M60 40.788965<br>");
$sql = "INSERT INTO ss09 SET runner_id='797',ss_date='2009-05-03',sex='F',age='55',score='52.151113',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='76.819379',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("797 F55 52.151113<br>");
$sql = "INSERT INTO ss09 SET runner_id='767',ss_date='2009-05-03',sex='M',age='40',score='80.515655',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("767 M40 80.515655<br>");
$sql = "INSERT INTO ss09 SET runner_id='667',ss_date='2009-05-03',sex='M',age='55',score='37.699441',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='55.754546',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("667 M55 37.699441<br>");
$sql = "INSERT INTO ss09 SET runner_id='666',ss_date='2009-05-03',sex='F',age='55',score='39.203232',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("666 F55 39.203232<br>");
$sql = "INSERT INTO ss09 SET runner_id='616',ss_date='2009-05-03',sex='M',age='16',score='29.640575',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("616 M16 29.640575<br>");
$sql = "INSERT INTO ss09 SET runner_id='613',ss_date='2009-05-03',sex='M',age='50',score='72.606939',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("613 M50 72.606939<br>");
$sql = "INSERT INTO ss09 SET runner_id='601',ss_date='2009-05-03',sex='M',age='60',score='37.451395',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("601 M60 37.451395<br>");
$sql = "INSERT INTO ss09 SET runner_id='568',ss_date='2009-05-03',sex='F',age='55',score='28.154939',wh_sc='0',ye_sc='0',or_sc='50.370867',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("568 F55 28.154939<br>");
$sql = "INSERT INTO ss09 SET runner_id='567',ss_date='2009-05-03',sex='M',age='55',score='71.467304',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='105.001406',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("567 M55 71.467304<br>");
$sql = "INSERT INTO ss09 SET runner_id='463',ss_date='2009-05-03',sex='M',age='45',score='38.579271',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='51.715856',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("463 M45 38.579271<br>");
$sql = "INSERT INTO ss09 SET runner_id='428',ss_date='2009-05-03',sex='M',age='50',score='48.019874',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='86.074941',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("428 M50 48.019874<br>");
$sql = "INSERT INTO ss09 SET runner_id='253',ss_date='2009-05-03',sex='M',age='40',score='33.994306',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("253 M40 33.994306<br>");
$sql = "INSERT INTO ss09 SET runner_id='248',ss_date='2009-05-03',sex='M',age='60',score='59.653966',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='121.197052',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("248 M60 59.653966<br>");
$sql = "INSERT INTO ss09 SET runner_id='176',ss_date='2009-05-03',sex='M',age='55',score='97.985507',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("176 M55 97.985507<br>");
$sql = "INSERT INTO ss09 SET runner_id='162',ss_date='2009-05-03',sex='M',age='35',score='65.780202',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='106.202005',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("162 M35 65.780202<br>");
$sql = "INSERT INTO ss09 SET runner_id='96',ss_date='2009-05-03',sex='M',age='55',score='53.941751',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='81.547591',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("96 M55 53.941751<br>");
$sql = "INSERT INTO ss09 SET runner_id='87',ss_date='2009-05-03',sex='M',age='16',score='81.628956',wh_sc='0',ye_sc='0',or_sc='139.591202',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("87 M16 81.628956<br>");
$sql = "INSERT INTO ss09 SET runner_id='48',ss_date='2009-05-03',sex='M',age='50',score='47.792782',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("48 M50 47.792782<br>");
$sql = "INSERT INTO ss09 SET runner_id='2',ss_date='2009-05-03',sex='F',age='45',score='52.108551',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='78.075691',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2 F45 52.108551<br>");
$sql = "INSERT INTO ss09 SET runner_id='2',ss_date='2009-05-09',sex='F',age='45',score='50.911194',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='78.157243',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2 F45 50.911194<br>");
$sql = "INSERT INTO ss09 SET runner_id='48',ss_date='2009-05-09',sex='M',age='50',score='46.787872',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("48 M50 46.787872<br>");
$sql = "INSERT INTO ss09 SET runner_id='86',ss_date='2009-05-09',sex='M',age='50',score='52.608053',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("86 M50 52.608053<br>");
$sql = "INSERT INTO ss09 SET runner_id='87',ss_date='2009-05-09',sex='M',age='16',score='75.03764',wh_sc='0',ye_sc='0',or_sc='138.107925',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("87 M16 75.03764<br>");
$sql = "INSERT INTO ss09 SET runner_id='96',ss_date='2009-05-09',sex='M',age='55',score='52.550157',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='81.375555',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("96 M55 52.550157<br>");
$sql = "INSERT INTO ss09 SET runner_id='162',ss_date='2009-05-09',sex='M',age='35',score='64.086253',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='80.268374',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("162 M35 64.086253<br>");
$sql = "INSERT INTO ss09 SET runner_id='176',ss_date='2009-05-09',sex='M',age='55',score='95.454432',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("176 M55 95.454432<br>");
$sql = "INSERT INTO ss09 SET runner_id='248',ss_date='2009-05-09',sex='M',age='60',score='59.353612',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='118.897675',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("248 M60 59.353612<br>");
$sql = "INSERT INTO ss09 SET runner_id='253',ss_date='2009-05-09',sex='M',age='40',score='33.288331',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("253 M40 33.288331<br>");
$sql = "INSERT INTO ss09 SET runner_id='428',ss_date='2009-05-09',sex='M',age='50',score='46.9998',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='84.367044',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("428 M50 46.9998<br>");
$sql = "INSERT INTO ss09 SET runner_id='463',ss_date='2009-05-09',sex='M',age='45',score='36.29445',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='52.004437',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("463 M45 36.29445<br>");
$sql = "INSERT INTO ss09 SET runner_id='545',ss_date='2009-05-09',sex='M',age='21',score='98.243895',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("545 M21 98.243895<br>");
$sql = "INSERT INTO ss09 SET runner_id='567',ss_date='2009-05-09',sex='M',age='55',score='69.659104',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='104.619442',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("567 M55 69.659104<br>");
$sql = "INSERT INTO ss09 SET runner_id='568',ss_date='2009-05-09',sex='F',age='55',score='27.205439',wh_sc='0',ye_sc='0',or_sc='51.043858',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("568 F55 27.205439<br>");
$sql = "INSERT INTO ss09 SET runner_id='601',ss_date='2009-05-09',sex='M',age='60',score='36.949122',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("601 M60 36.949122<br>");
$sql = "INSERT INTO ss09 SET runner_id='613',ss_date='2009-05-09',sex='M',age='50',score='70.946437',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("613 M50 70.946437<br>");
$sql = "INSERT INTO ss09 SET runner_id='616',ss_date='2009-05-09',sex='M',age='16',score='29.000384',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("616 M16 29.000384<br>");
$sql = "INSERT INTO ss09 SET runner_id='666',ss_date='2009-05-09',sex='F',age='55',score='38.324941',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("666 F55 38.324941<br>");
$sql = "INSERT INTO ss09 SET runner_id='667',ss_date='2009-05-09',sex='M',age='55',score='36.796407',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='55.587938',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("667 M55 36.796407<br>");
$sql = "INSERT INTO ss09 SET runner_id='767',ss_date='2009-05-09',sex='M',age='40',score='78.271119',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("767 M40 78.271119<br>");
$sql = "INSERT INTO ss09 SET runner_id='797',ss_date='2009-05-09',sex='F',age='55',score='50.86469',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='76.632377',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("797 F55 50.86469<br>");
$sql = "INSERT INTO ss09 SET runner_id='798',ss_date='2009-05-09',sex='M',age='60',score='40.00782',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='75.363792',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("798 M60 40.00782<br>");
$sql = "INSERT INTO ss09 SET runner_id='799',ss_date='2009-05-09',sex='M',age='45',score='90.680638',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='110.762056',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("799 M45 90.680638<br>");
$sql = "INSERT INTO ss09 SET runner_id='970',ss_date='2009-05-09',sex='F',age='55',score='26.747581',wh_sc='0',ye_sc='0',or_sc='50.741822',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("970 F55 26.747581<br>");
$sql = "INSERT INTO ss09 SET runner_id='1189',ss_date='2009-05-09',sex='M',age='70',score='57.030535',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1189 M70 57.030535<br>");
$sql = "INSERT INTO ss09 SET runner_id='1198',ss_date='2009-05-09',sex='M',age='65',score='53.48889',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1198 M65 53.48889<br>");
$sql = "INSERT INTO ss09 SET runner_id='1238',ss_date='2009-05-09',sex='M',age='55',score='34.128618',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='55.380551',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1238 M55 34.128618<br>");
$sql = "INSERT INTO ss09 SET runner_id='1318',ss_date='2009-05-09',sex='M',age='50',score='30.777177',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='60.325894',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1318 M50 30.777177<br>");
$sql = "INSERT INTO ss09 SET runner_id='1364',ss_date='2009-05-09',sex='M',age='40',score='74.306233',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='95.570002',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1364 M40 74.306233<br>");
$sql = "INSERT INTO ss09 SET runner_id='1397',ss_date='2009-05-09',sex='M',age='16',score='52.70082',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1397 M16 52.70082<br>");
$sql = "INSERT INTO ss09 SET runner_id='1432',ss_date='2009-05-09',sex='M',age='45',score='106.301673',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1432 M45 106.301673<br>");
$sql = "INSERT INTO ss09 SET runner_id='1503',ss_date='2009-05-09',sex='F',age='55',score='27.005736',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='49.172129',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1503 F55 27.005736<br>");
$sql = "INSERT INTO ss09 SET runner_id='1504',ss_date='2009-05-09',sex='M',age='60',score='50.887863',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='84.477031',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1504 M60 50.887863<br>");
$sql = "INSERT INTO ss09 SET runner_id='1548',ss_date='2009-05-09',sex='F',age='40',score='34.265859',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1548 F40 34.265859<br>");
$sql = "INSERT INTO ss09 SET runner_id='1567',ss_date='2009-05-09',sex='M',age='50',score='74.762515',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='93.667942',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1567 M50 74.762515<br>");
$sql = "INSERT INTO ss09 SET runner_id='1570',ss_date='2009-05-09',sex='M',age='18',score='65.394617',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1570 M18 65.394617<br>");
$sql = "INSERT INTO ss09 SET runner_id='1718',ss_date='2009-05-09',sex='M',age='60',score='57.042479',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1718 M60 57.042479<br>");
$sql = "INSERT INTO ss09 SET runner_id='1739',ss_date='2009-05-09',sex='M',age='70',score='50.452407',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='96.735282',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1739 M70 50.452407<br>");
$sql = "INSERT INTO ss09 SET runner_id='1746',ss_date='2009-05-09',sex='F',age='50',score='46.610377',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1746 F50 46.610377<br>");
$sql = "INSERT INTO ss09 SET runner_id='1771',ss_date='2009-05-09',sex='F',age='60',score='35.236219',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1771 F60 35.236219<br>");
$sql = "INSERT INTO ss09 SET runner_id='1878',ss_date='2009-05-09',sex='F',age='50',score='34.731561',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1878 F50 34.731561<br>");
$sql = "INSERT INTO ss09 SET runner_id='1879',ss_date='2009-05-09',sex='M',age='50',score='65.331538',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='104.31497',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1879 M50 65.331538<br>");
$sql = "INSERT INTO ss09 SET runner_id='1916',ss_date='2009-05-09',sex='F',age='55',score='29.332129',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1916 F55 29.332129<br>");
$sql = "INSERT INTO ss09 SET runner_id='1923',ss_date='2009-05-09',sex='M',age='14',score='54.255061',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1923 M14 54.255061<br>");
$sql = "INSERT INTO ss09 SET runner_id='1925',ss_date='2009-05-09',sex='M',age='16',score='59.052035',wh_sc='0',ye_sc='0',or_sc='108.120053',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1925 M16 59.052035<br>");
$sql = "INSERT INTO ss09 SET runner_id='1926',ss_date='2009-05-09',sex='M',age='18',score='64.73138',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1926 M18 64.73138<br>");
$sql = "INSERT INTO ss09 SET runner_id='1928',ss_date='2009-05-09',sex='M',age='50',score='87.287787',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1928 M50 87.287787<br>");
$sql = "INSERT INTO ss09 SET runner_id='1953',ss_date='2009-05-09',sex='M',age='55',score='68.239572',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1953 M55 68.239572<br>");
$sql = "INSERT INTO ss09 SET runner_id='1991',ss_date='2009-05-09',sex='M',age='60',score='37.212744',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='70.796642',gr_sc='58.215934',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1991 M60 37.212744<br>");
$sql = "INSERT INTO ss09 SET runner_id='1992',ss_date='2009-05-09',sex='F',age='60',score='29.353236',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='57.908832',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1992 F60 29.353236<br>");
$sql = "INSERT INTO ss09 SET runner_id='2108',ss_date='2009-05-09',sex='M',age='60',score='44.577945',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='59.202541',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2108 M60 44.577945<br>");
$sql = "INSERT INTO ss09 SET runner_id='2122',ss_date='2009-05-09',sex='M',age='55',score='60.51824',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='91.065588',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2122 M55 60.51824<br>");
$sql = "INSERT INTO ss09 SET runner_id='2254',ss_date='2009-05-09',sex='F',age='16',score='29.86364',wh_sc='0',ye_sc='0',or_sc='53.772022',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2254 F16 29.86364<br>");
$sql = "INSERT INTO ss09 SET runner_id='2257',ss_date='2009-05-09',sex='M',age='50',score='18.777855',wh_sc='0',ye_sc='100',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2257 M50 18.777855<br>");
$sql = "INSERT INTO ss09 SET runner_id='2267',ss_date='2009-05-09',sex='M',age='45',score='36.114734',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2267 M45 36.114734<br>");
$sql = "INSERT INTO ss09 SET runner_id='2275',ss_date='2009-05-09',sex='M',age='21',score='48.590933',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2275 M21 48.590933<br>");
$sql = "INSERT INTO ss09 SET runner_id='2303',ss_date='2009-05-09',sex='G',age='2',score='32.055841',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='56.00802',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2303 G2 32.055841<br>");
$sql = "INSERT INTO ss09 SET runner_id='2412',ss_date='2009-05-09',sex='M',age='21',score='63.494255',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2412 M21 63.494255<br>");
$sql = "INSERT INTO ss09 SET runner_id='2',ss_date='2009-05-17',sex='F',age='45',score='45.858525',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='77.737933',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2 F45 45.858525<br>");
$sql = "INSERT INTO ss09 SET runner_id='48',ss_date='2009-05-17',sex='M',age='50',score='42.32406',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("48 M50 42.32406<br>");
$sql = "INSERT INTO ss09 SET runner_id='69',ss_date='2009-05-17',sex='M',age='45',score='60.925487',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='75.553701',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("69 M45 60.925487<br>");
$sql = "INSERT INTO ss09 SET runner_id='86',ss_date='2009-05-17',sex='M',age='50',score='47.33475',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("86 M50 47.33475<br>");
$sql = "INSERT INTO ss09 SET runner_id='87',ss_date='2009-05-17',sex='M',age='16',score='67.290735',wh_sc='0',ye_sc='0',or_sc='125.806062',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("87 M16 67.290735<br>");
$sql = "INSERT INTO ss09 SET runner_id='96',ss_date='2009-05-17',sex='M',age='55',score='47.576587',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='81.361787',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("96 M55 47.576587<br>");
$sql = "INSERT INTO ss09 SET runner_id='162',ss_date='2009-05-17',sex='M',age='35',score='56.902338',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='70.909492',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("162 M35 56.902338<br>");
$sql = "INSERT INTO ss09 SET runner_id='169',ss_date='2009-05-17',sex='M',age='60',score='28.867963',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("169 M60 28.867963<br>");
$sql = "INSERT INTO ss09 SET runner_id='176',ss_date='2009-05-17',sex='M',age='55',score='86.550125',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("176 M55 86.550125<br>");
$sql = "INSERT INTO ss09 SET runner_id='248',ss_date='2009-05-17',sex='M',age='60',score='53.45862',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='121.325211',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("248 M60 53.45862<br>");
$sql = "INSERT INTO ss09 SET runner_id='253',ss_date='2009-05-17',sex='M',age='40',score='29.970871',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("253 M40 29.970871<br>");
$sql = "INSERT INTO ss09 SET runner_id='428',ss_date='2009-05-17',sex='M',age='50',score='42.32803',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='85.905207',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("428 M50 42.32803<br>");
$sql = "INSERT INTO ss09 SET runner_id='463',ss_date='2009-05-17',sex='M',age='45',score='32.745373',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='51.70201',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("463 M45 32.745373<br>");
$sql = "INSERT INTO ss09 SET runner_id='545',ss_date='2009-05-17',sex='M',age='21',score='89.753822',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("545 M21 89.753822<br>");
$sql = "INSERT INTO ss09 SET runner_id='567',ss_date='2009-05-17',sex='M',age='55',score='66.105474',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='105.196632',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("567 M55 66.105474<br>");
$sql = "INSERT INTO ss09 SET runner_id='568',ss_date='2009-05-17',sex='F',age='55',score='23.951409',wh_sc='0',ye_sc='0',or_sc='45.834333',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("568 F55 23.951409<br>");
$sql = "INSERT INTO ss09 SET runner_id='601',ss_date='2009-05-17',sex='M',age='60',score='33.194644',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("601 M60 33.194644<br>");
$sql = "INSERT INTO ss09 SET runner_id='613',ss_date='2009-05-17',sex='M',age='50',score='64.276066',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("613 M50 64.276066<br>");
$sql = "INSERT INTO ss09 SET runner_id='614',ss_date='2009-05-17',sex='F',age='50',score='49.748119',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("614 F50 49.748119<br>");
$sql = "INSERT INTO ss09 SET runner_id='616',ss_date='2009-05-17',sex='M',age='16',score='27.733504',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("616 M16 27.733504<br>");
$sql = "INSERT INTO ss09 SET runner_id='666',ss_date='2009-05-17',sex='F',age='55',score='33.576895',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("666 F55 33.576895<br>");
$sql = "INSERT INTO ss09 SET runner_id='667',ss_date='2009-05-17',sex='M',age='55',score='33.875515',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='58.680341',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("667 M55 33.875515<br>");
$sql = "INSERT INTO ss09 SET runner_id='767',ss_date='2009-05-17',sex='M',age='40',score='70.708255',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("767 M40 70.708255<br>");
$sql = "INSERT INTO ss09 SET runner_id='797',ss_date='2009-05-17',sex='F',age='55',score='45.939871',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='76.564954',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("797 F55 45.939871<br>");
$sql = "INSERT INTO ss09 SET runner_id='798',ss_date='2009-05-17',sex='M',age='60',score='35.932353',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='76.791989',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("798 M60 35.932353<br>");
$sql = "INSERT INTO ss09 SET runner_id='799',ss_date='2009-05-17',sex='M',age='45',score='81.906499',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='100.44838',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("799 M45 81.906499<br>");
$sql = "INSERT INTO ss09 SET runner_id='970',ss_date='2009-05-17',sex='F',age='55',score='24.064736',wh_sc='0',ye_sc='0',or_sc='46.661804',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("970 F55 24.064736<br>");
$sql = "INSERT INTO ss09 SET runner_id='1189',ss_date='2009-05-17',sex='M',age='70',score='51.575597',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1189 M70 51.575597<br>");
$sql = "INSERT INTO ss09 SET runner_id='1198',ss_date='2009-05-17',sex='M',age='65',score='48.343523',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1198 M65 48.343523<br>");
$sql = "INSERT INTO ss09 SET runner_id='1218',ss_date='2009-05-17',sex='M',age='40',score='93.548775',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='115.924404',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1218 M40 93.548775<br>");
$sql = "INSERT INTO ss09 SET runner_id='1238',ss_date='2009-05-17',sex='M',age='55',score='30.881096',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='55.392721',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1238 M55 30.881096<br>");
$sql = "INSERT INTO ss09 SET runner_id='1318',ss_date='2009-05-17',sex='M',age='50',score='26.572888',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='57.523906',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1318 M50 26.572888<br>");
$sql = "INSERT INTO ss09 SET runner_id='1364',ss_date='2009-05-17',sex='M',age='40',score='66.980515',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='83.627216',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1364 M40 66.980515<br>");
$sql = "INSERT INTO ss09 SET runner_id='1397',ss_date='2009-05-17',sex='M',age='16',score='47.643048',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1397 M16 47.643048<br>");
$sql = "INSERT INTO ss09 SET runner_id='1432',ss_date='2009-05-17',sex='M',age='45',score='96.172362',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1432 M45 96.172362<br>");
$sql = "INSERT INTO ss09 SET runner_id='1503',ss_date='2009-05-17',sex='F',age='55',score='24.316778',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='50.295148',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1503 F55 24.316778<br>");
$sql = "INSERT INTO ss09 SET runner_id='1504',ss_date='2009-05-17',sex='M',age='60',score='45.921095',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='84.375189',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1504 M60 45.921095<br>");
$sql = "INSERT INTO ss09 SET runner_id='1548',ss_date='2009-05-17',sex='F',age='40',score='30.793504',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1548 F40 30.793504<br>");
$sql = "INSERT INTO ss09 SET runner_id='1567',ss_date='2009-05-17',sex='M',age='50',score='67.280313',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='82.744986',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1567 M50 67.280313<br>");
$sql = "INSERT INTO ss09 SET runner_id='1570',ss_date='2009-05-17',sex='M',age='18',score='58.935022',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1570 M18 58.935022<br>");
$sql = "INSERT INTO ss09 SET runner_id='1606',ss_date='2009-05-17',sex='M',age='35',score='110.278863',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1606 M35 110.278863<br>");
$sql = "INSERT INTO ss09 SET runner_id='1667',ss_date='2009-05-17',sex='M',age='50',score='44.449555',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1667 M50 44.449555<br>");
$sql = "INSERT INTO ss09 SET runner_id='1718',ss_date='2009-05-17',sex='M',age='60',score='51.755458',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1718 M60 51.755458<br>");
$sql = "INSERT INTO ss09 SET runner_id='1739',ss_date='2009-05-17',sex='M',age='70',score='42.750601',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='92.769581',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1739 M70 42.750601<br>");
$sql = "INSERT INTO ss09 SET runner_id='1746',ss_date='2009-05-17',sex='F',age='50',score='42.122987',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1746 F50 42.122987<br>");
$sql = "INSERT INTO ss09 SET runner_id='1771',ss_date='2009-05-17',sex='F',age='60',score='31.891486',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1771 F60 31.891486<br>");
$sql = "INSERT INTO ss09 SET runner_id='1878',ss_date='2009-05-17',sex='F',age='50',score='31.18136',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1878 F50 31.18136<br>");
$sql = "INSERT INTO ss09 SET runner_id='1879',ss_date='2009-05-17',sex='M',age='50',score='58.99017',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='103.851458',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1879 M50 58.99017<br>");
$sql = "INSERT INTO ss09 SET runner_id='1916',ss_date='2009-05-17',sex='F',age='55',score='26.470698',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1916 F55 26.470698<br>");
$sql = "INSERT INTO ss09 SET runner_id='1923',ss_date='2009-05-17',sex='M',age='14',score='48.752508',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1923 M14 48.752508<br>");
$sql = "INSERT INTO ss09 SET runner_id='1925',ss_date='2009-05-17',sex='M',age='16',score='53.237613',wh_sc='0',ye_sc='0',or_sc='99.348541',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1925 M16 53.237613<br>");
$sql = "INSERT INTO ss09 SET runner_id='1926',ss_date='2009-05-17',sex='M',age='18',score='58.536535',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1926 M18 58.536535<br>");
$sql = "INSERT INTO ss09 SET runner_id='1928',ss_date='2009-05-17',sex='M',age='50',score='79.059395',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1928 M50 79.059395<br>");
$sql = "INSERT INTO ss09 SET runner_id='1953',ss_date='2009-05-17',sex='M',age='55',score='61.770709',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1953 M55 61.770709<br>");
$sql = "INSERT INTO ss09 SET runner_id='1991',ss_date='2009-05-17',sex='M',age='60',score='33.311044',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='72.069809',gr_sc='56.902952',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1991 M60 33.311044<br>");
$sql = "INSERT INTO ss09 SET runner_id='1992',ss_date='2009-05-17',sex='F',age='60',score='27.497247',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='58.392043',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1992 F60 27.497247<br>");
$sql = "INSERT INTO ss09 SET runner_id='2108',ss_date='2009-05-17',sex='M',age='60',score='40.892573',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='51.306384',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2108 M60 40.892573<br>");
$sql = "INSERT INTO ss09 SET runner_id='2122',ss_date='2009-05-17',sex='M',age='55',score='54.638329',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='90.951909',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2122 M55 54.638329<br>");
$sql = "INSERT INTO ss09 SET runner_id='2254',ss_date='2009-05-17',sex='F',age='16',score='26.992696',wh_sc='0',ye_sc='0',or_sc='49.158693',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2254 F16 26.992696<br>");
$sql = "INSERT INTO ss09 SET runner_id='2257',ss_date='2009-05-17',sex='M',age='50',score='16.810709',wh_sc='0',ye_sc='95.686895',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2257 M50 16.810709<br>");
$sql = "INSERT INTO ss09 SET runner_id='2267',ss_date='2009-05-17',sex='M',age='45',score='32.578586',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2267 M45 32.578586<br>");
$sql = "INSERT INTO ss09 SET runner_id='2275',ss_date='2009-05-17',sex='M',age='21',score='43.640121',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2275 M21 43.640121<br>");
$sql = "INSERT INTO ss09 SET runner_id='2303',ss_date='2009-05-17',sex='G',age='2',score='28.857595',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='55.716591',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2303 G2 28.857595<br>");
$sql = "INSERT INTO ss09 SET runner_id='2412',ss_date='2009-05-17',sex='M',age='21',score='57.008518',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2412 M21 57.008518<br>");
$sql = "INSERT INTO ss09 SET runner_id='2473',ss_date='2009-05-17',sex='F',age='16',score='19.091195',wh_sc='0',ye_sc='104.313105',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2473 F16 19.091195<br>");
$sql = "INSERT INTO ss09 SET runner_id='2481',ss_date='2009-05-17',sex='M',age='45',score='37.75655',wh_sc='0',ye_sc='0',or_sc='74.845397',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2481 M45 37.75655<br>");
$sql = "INSERT INTO ss09 SET runner_id='2481',ss_date='2009-05-31',sex='M',age='45',score='40.029308',wh_sc='0',ye_sc='0',or_sc='80.890901',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2481 M45 40.029308<br>");
$sql = "INSERT INTO ss09 SET runner_id='2473',ss_date='2009-05-31',sex='F',age='16',score='21.445423',wh_sc='0',ye_sc='117.810641',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2473 F16 21.445423<br>");
$sql = "INSERT INTO ss09 SET runner_id='2414',ss_date='2009-05-31',sex='M',age='60',score='27.742391',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2414 M60 27.742391<br>");
$sql = "INSERT INTO ss09 SET runner_id='2412',ss_date='2009-05-31',sex='M',age='21',score='55.271786',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2412 M21 55.271786<br>");
$sql = "INSERT INTO ss09 SET runner_id='2303',ss_date='2009-05-31',sex='G',age='2',score='27.752483',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='43.466281',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2303 G2 27.752483<br>");
$sql = "INSERT INTO ss09 SET runner_id='2275',ss_date='2009-05-31',sex='M',age='21',score='42.007656',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2275 M21 42.007656<br>");
$sql = "INSERT INTO ss09 SET runner_id='2267',ss_date='2009-05-31',sex='M',age='45',score='30.89327',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2267 M45 30.89327<br>");
$sql = "INSERT INTO ss09 SET runner_id='2257',ss_date='2009-05-31',sex='M',age='50',score='16.652096',wh_sc='0',ye_sc='94.277816',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2257 M50 16.652096<br>");
$sql = "INSERT INTO ss09 SET runner_id='2254',ss_date='2009-05-31',sex='F',age='16',score='25.993677',wh_sc='0',ye_sc='0',or_sc='47.579077',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2254 F16 25.993677<br>");
$sql = "INSERT INTO ss09 SET runner_id='2122',ss_date='2009-05-31',sex='M',age='55',score='52.17582',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='71.131032',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2122 M55 52.17582<br>");
$sql = "INSERT INTO ss09 SET runner_id='2108',ss_date='2009-05-31',sex='M',age='60',score='39.22644',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='47.240296',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2108 M60 39.22644<br>");
$sql = "INSERT INTO ss09 SET runner_id='1992',ss_date='2009-05-31',sex='F',age='60',score='25.465205',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='52.868379',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1992 F60 25.465205<br>");
$sql = "INSERT INTO ss09 SET runner_id='1991',ss_date='2009-05-31',sex='M',age='60',score='32.630824',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='68.198866',gr_sc='44.449202',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1991 M60 32.630824<br>");
$sql = "INSERT INTO ss09 SET runner_id='1953',ss_date='2009-05-31',sex='M',age='55',score='59.130094',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1953 M55 59.130094<br>");
$sql = "INSERT INTO ss09 SET runner_id='1928',ss_date='2009-05-31',sex='M',age='50',score='72.993556',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='84.52279',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1928 M50 72.993556<br>");
$sql = "INSERT INTO ss09 SET runner_id='1926',ss_date='2009-05-31',sex='M',age='18',score='56.069698',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1926 M18 56.069698<br>");
$sql = "INSERT INTO ss09 SET runner_id='1925',ss_date='2009-05-31',sex='M',age='16',score='53.115376',wh_sc='0',ye_sc='0',or_sc='98.977607',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1925 M16 53.115376<br>");
$sql = "INSERT INTO ss09 SET runner_id='1923',ss_date='2009-05-31',sex='M',age='14',score='45.523811',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1923 M14 45.523811<br>");
$sql = "INSERT INTO ss09 SET runner_id='1916',ss_date='2009-05-31',sex='F',age='55',score='29.359126',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='59.013499',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1916 F55 29.359126<br>");
$sql = "INSERT INTO ss09 SET runner_id='1879',ss_date='2009-05-31',sex='M',age='50',score='58.648194',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='82.128344',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1879 M50 58.648194<br>");
$sql = "INSERT INTO ss09 SET runner_id='1878',ss_date='2009-05-31',sex='F',age='50',score='32.306529',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1878 F50 32.306529<br>");
$sql = "INSERT INTO ss09 SET runner_id='1771',ss_date='2009-05-31',sex='F',age='60',score='30.402373',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1771 F60 30.402373<br>");
$sql = "INSERT INTO ss09 SET runner_id='1746',ss_date='2009-05-31',sex='F',age='50',score='40.386711',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='86.3239',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1746 F50 40.386711<br>");
$sql = "INSERT INTO ss09 SET runner_id='1739',ss_date='2009-05-31',sex='M',age='70',score='40.876961',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='87.604458',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1739 M70 40.876961<br>");
$sql = "INSERT INTO ss09 SET runner_id='1718',ss_date='2009-05-31',sex='M',age='60',score='49.340378',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='68.362012',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1718 M60 49.340378<br>");
$sql = "INSERT INTO ss09 SET runner_id='1676',ss_date='2009-05-31',sex='F',age='55',score='25.537408',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='35.37715',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1676 F55 25.537408<br>");
$sql = "INSERT INTO ss09 SET runner_id='1667',ss_date='2009-05-31',sex='M',age='50',score='43.349218',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1667 M50 43.349218<br>");
$sql = "INSERT INTO ss09 SET runner_id='1606',ss_date='2009-05-31',sex='M',age='35',score='106.107377',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1606 M35 106.107377<br>");
$sql = "INSERT INTO ss09 SET runner_id='1570',ss_date='2009-05-31',sex='M',age='18',score='57.741736',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1570 M18 57.741736<br>");
$sql = "INSERT INTO ss09 SET runner_id='1567',ss_date='2009-05-31',sex='M',age='50',score='63.448323',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='75.886',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1567 M50 63.448323<br>");
$sql = "INSERT INTO ss09 SET runner_id='1548',ss_date='2009-05-31',sex='F',age='40',score='29.807528',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1548 F40 29.807528<br>");
$sql = "INSERT INTO ss09 SET runner_id='1504',ss_date='2009-05-31',sex='M',age='60',score='44.136747',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='65.9988',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1504 M60 44.136747<br>");
$sql = "INSERT INTO ss09 SET runner_id='1503',ss_date='2009-05-31',sex='F',age='55',score='23.847511',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='49.121259',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1503 F55 23.847511<br>");
$sql = "INSERT INTO ss09 SET runner_id='1480',ss_date='2009-05-31',sex='F',age='21',score='21.338866',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='45.547584',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1480 F21 21.338866<br>");
$sql = "INSERT INTO ss09 SET runner_id='1432',ss_date='2009-05-31',sex='M',age='45',score='89.233956',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='99.66034',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1432 M45 89.233956<br>");
$sql = "INSERT INTO ss09 SET runner_id='1397',ss_date='2009-05-31',sex='M',age='16',score='45.753389',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1397 M16 45.753389<br>");
$sql = "INSERT INTO ss09 SET runner_id='1364',ss_date='2009-05-31',sex='M',age='40',score='64.110344',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='77.648393',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1364 M40 64.110344<br>");
$sql = "INSERT INTO ss09 SET runner_id='1318',ss_date='2009-05-31',sex='M',age='50',score='25.636165',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='54.956536',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1318 M50 25.636165<br>");
$sql = "INSERT INTO ss09 SET runner_id='1250',ss_date='2009-05-31',sex='M',age='35',score='103.433176',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1250 M35 103.433176<br>");
$sql = "INSERT INTO ss09 SET runner_id='1238',ss_date='2009-05-31',sex='M',age='55',score='30.917823',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='44.7635',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1238 M55 30.917823<br>");
$sql = "INSERT INTO ss09 SET runner_id='1218',ss_date='2009-05-31',sex='M',age='40',score='90.459447',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='108.04005',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1218 M40 90.459447<br>");
$sql = "INSERT INTO ss09 SET runner_id='1198',ss_date='2009-05-31',sex='M',age='65',score='46.459877',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1198 M65 46.459877<br>");
$sql = "INSERT INTO ss09 SET runner_id='1189',ss_date='2009-05-31',sex='M',age='70',score='49.693162',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1189 M70 49.693162<br>");
$sql = "INSERT INTO ss09 SET runner_id='970',ss_date='2009-05-31',sex='F',age='55',score='22.808599',wh_sc='0',ye_sc='0',or_sc='45.396933',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("970 F55 22.808599<br>");
$sql = "INSERT INTO ss09 SET runner_id='958',ss_date='2009-05-31',sex='M',age='45',score='15.824133',wh_sc='0',ye_sc='87.911543',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("958 M45 15.824133<br>");
$sql = "INSERT INTO ss09 SET runner_id='799',ss_date='2009-05-31',sex='M',age='45',score='77.280464',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='91.489331',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("799 M45 77.280464<br>");
$sql = "INSERT INTO ss09 SET runner_id='798',ss_date='2009-05-31',sex='M',age='60',score='34.247855',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='72.325365',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("798 M60 34.247855<br>");
$sql = "INSERT INTO ss09 SET runner_id='797',ss_date='2009-05-31',sex='F',age='55',score='44.859248',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='61.13402',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("797 F55 44.859248<br>");
$sql = "INSERT INTO ss09 SET runner_id='783',ss_date='2009-05-31',sex='F',age='70',score='22.441537',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("783 F70 22.441537<br>");
$sql = "INSERT INTO ss09 SET runner_id='767',ss_date='2009-05-31',sex='M',age='40',score='66.905365',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("767 M40 66.905365<br>");
$sql = "INSERT INTO ss09 SET runner_id='673',ss_date='2009-05-31',sex='M',age='45',score='38.219785',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("673 M45 38.219785<br>");
$sql = "INSERT INTO ss09 SET runner_id='667',ss_date='2009-05-31',sex='M',age='55',score='31.949441',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='44.618858',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("667 M55 31.949441<br>");
$sql = "INSERT INTO ss09 SET runner_id='666',ss_date='2009-05-31',sex='F',age='55',score='32.151993',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='45.433969',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("666 F55 32.151993<br>");
$sql = "INSERT INTO ss09 SET runner_id='636',ss_date='2009-05-31',sex='F',age='35',score='48.284071',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='66.687643',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("636 F35 48.284071<br>");
$sql = "INSERT INTO ss09 SET runner_id='634',ss_date='2009-05-31',sex='M',age='40',score='46.155386',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='96.948456',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("634 M40 46.155386<br>");
$sql = "INSERT INTO ss09 SET runner_id='630',ss_date='2009-05-31',sex='M',age='40',score='29.691492',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("630 M40 29.691492<br>");
$sql = "INSERT INTO ss09 SET runner_id='626',ss_date='2009-05-31',sex='M',age='21',score='77.105815',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='92.299609',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("626 M21 77.105815<br>");
$sql = "INSERT INTO ss09 SET runner_id='616',ss_date='2009-05-31',sex='M',age='16',score='26.687334',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("616 M16 26.687334<br>");
$sql = "INSERT INTO ss09 SET runner_id='614',ss_date='2009-05-31',sex='F',age='50',score='47.679915',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("614 F50 47.679915<br>");
$sql = "INSERT INTO ss09 SET runner_id='613',ss_date='2009-05-31',sex='M',age='50',score='61.599802',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("613 M50 61.599802<br>");
$sql = "INSERT INTO ss09 SET runner_id='601',ss_date='2009-05-31',sex='M',age='60',score='32.078663',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("601 M60 32.078663<br>");
$sql = "INSERT INTO ss09 SET runner_id='568',ss_date='2009-05-31',sex='F',age='55',score='22.053282',wh_sc='0',ye_sc='0',or_sc='43.516163',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("568 F55 22.053282<br>");
$sql = "INSERT INTO ss09 SET runner_id='567',ss_date='2009-05-31',sex='M',age='55',score='62.532908',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='81.172634',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("567 M55 62.532908<br>");
$sql = "INSERT INTO ss09 SET runner_id='545',ss_date='2009-05-31',sex='M',age='21',score='83.968185',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("545 M21 83.968185<br>");
$sql = "INSERT INTO ss09 SET runner_id='463',ss_date='2009-05-31',sex='M',age='45',score='31.950232',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='41.88971',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("463 M45 31.950232<br>");
$sql = "INSERT INTO ss09 SET runner_id='428',ss_date='2009-05-31',sex='M',age='50',score='41.000119',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='81.784375',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("428 M50 41.000119<br>");
$sql = "INSERT INTO ss09 SET runner_id='376',ss_date='2009-05-31',sex='M',age='50',score='55.261326',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("376 M50 55.261326<br>");
$sql = "INSERT INTO ss09 SET runner_id='270',ss_date='2009-05-31',sex='M',age='50',score='79.745925',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='109.649784',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("270 M50 79.745925<br>");
$sql = "INSERT INTO ss09 SET runner_id='253',ss_date='2009-05-31',sex='M',age='40',score='28.838449',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("253 M40 28.838449<br>");
$sql = "INSERT INTO ss09 SET runner_id='248',ss_date='2009-05-31',sex='M',age='60',score='52.116735',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='115.447086',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("248 M60 52.116735<br>");
$sql = "INSERT INTO ss09 SET runner_id='226',ss_date='2009-05-31',sex='M',age='80',score='24.414275',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("226 M80 24.414275<br>");
$sql = "INSERT INTO ss09 SET runner_id='176',ss_date='2009-05-31',sex='M',age='55',score='78.199116',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='105.827426',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("176 M55 78.199116<br>");
$sql = "INSERT INTO ss09 SET runner_id='169',ss_date='2009-05-31',sex='M',age='60',score='32.466223',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='39.485829',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("169 M60 32.466223<br>");
$sql = "INSERT INTO ss09 SET runner_id='162',ss_date='2009-05-31',sex='M',age='35',score='53.399562',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='64.339374',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("162 M35 53.399562<br>");
$sql = "INSERT INTO ss09 SET runner_id='96',ss_date='2009-05-31',sex='M',age='55',score='45.842824',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='63.660512',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("96 M55 45.842824<br>");
$sql = "INSERT INTO ss09 SET runner_id='87',ss_date='2009-05-31',sex='M',age='16',score='62.883329',wh_sc='0',ye_sc='0',or_sc='120.131492',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("87 M16 62.883329<br>");
$sql = "INSERT INTO ss09 SET runner_id='86',ss_date='2009-05-31',sex='M',age='50',score='45.555856',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("86 M50 45.555856<br>");
$sql = "INSERT INTO ss09 SET runner_id='69',ss_date='2009-05-31',sex='M',age='45',score='57.636491',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='69.184087',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("69 M45 57.636491<br>");
$sql = "INSERT INTO ss09 SET runner_id='48',ss_date='2009-05-31',sex='M',age='50',score='40.601246',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("48 M50 40.601246<br>");
$sql = "INSERT INTO ss09 SET runner_id='13',ss_date='2009-05-31',sex='M',age='45',score='74.863472',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("13 M45 74.863472<br>");
$sql = "INSERT INTO ss09 SET runner_id='2',ss_date='2009-05-31',sex='F',age='45',score='44.529982',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='61.256959',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2 F45 44.529982<br>");
$sql = "INSERT INTO ss09 SET runner_id='2',ss_date='2009-06-20',sex='F',age='45',score='43.779662',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='61.416595',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2 F45 43.779662<br>");
$sql = "INSERT INTO ss09 SET runner_id='13',ss_date='2009-06-20',sex='M',age='45',score='76.560366',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='78.678274',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("13 M45 76.560366<br>");
$sql = "INSERT INTO ss09 SET runner_id='48',ss_date='2009-06-20',sex='M',age='50',score='40.130152',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("48 M50 40.130152<br>");
$sql = "INSERT INTO ss09 SET runner_id='69',ss_date='2009-06-20',sex='M',age='45',score='58.04006',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='61.93068',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("69 M45 58.04006<br>");
$sql = "INSERT INTO ss09 SET runner_id='86',ss_date='2009-06-20',sex='M',age='50',score='45.673137',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("86 M50 45.673137<br>");
$sql = "INSERT INTO ss09 SET runner_id='87',ss_date='2009-06-20',sex='M',age='16',score='63.496411',wh_sc='0',ye_sc='0',or_sc='121.08964',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("87 M16 63.496411<br>");
$sql = "INSERT INTO ss09 SET runner_id='96',ss_date='2009-06-20',sex='M',age='55',score='45.371604',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='64.302889',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("96 M55 45.371604<br>");
$sql = "INSERT INTO ss09 SET runner_id='131',ss_date='2009-06-20',sex='M',age='40',score='86.4669',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='91.243157',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("131 M40 86.4669<br>");
$sql = "INSERT INTO ss09 SET runner_id='162',ss_date='2009-06-20',sex='M',age='35',score='53.282689',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='50.964541',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("162 M35 53.282689<br>");
$sql = "INSERT INTO ss09 SET runner_id='169',ss_date='2009-06-20',sex='M',age='60',score='32.216877',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='40.023327',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("169 M60 32.216877<br>");
$sql = "INSERT INTO ss09 SET runner_id='176',ss_date='2009-06-20',sex='M',age='55',score='76.137033',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='103.499027',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("176 M55 76.137033<br>");
$sql = "INSERT INTO ss09 SET runner_id='226',ss_date='2009-06-20',sex='M',age='80',score='24.084628',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("226 M80 24.084628<br>");
$sql = "INSERT INTO ss09 SET runner_id='248',ss_date='2009-06-20',sex='M',age='60',score='51.522303',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='109.406462',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("248 M60 51.522303<br>");
$sql = "INSERT INTO ss09 SET runner_id='253',ss_date='2009-06-20',sex='M',age='40',score='28.599128',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("253 M40 28.599128<br>");
$sql = "INSERT INTO ss09 SET runner_id='270',ss_date='2009-06-20',sex='M',age='50',score='79.164009',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='111.069599',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("270 M50 79.164009<br>");
$sql = "INSERT INTO ss09 SET runner_id='376',ss_date='2009-06-20',sex='M',age='50',score='54.849537',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("376 M50 54.849537<br>");
$sql = "INSERT INTO ss09 SET runner_id='428',ss_date='2009-06-20',sex='M',age='50',score='40.524286',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='77.333882',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("428 M50 40.524286<br>");
$sql = "INSERT INTO ss09 SET runner_id='463',ss_date='2009-06-20',sex='M',age='45',score='31.653873',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='42.347024',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("463 M45 31.653873<br>");
$sql = "INSERT INTO ss09 SET runner_id='499',ss_date='2009-06-20',sex='M',age='50',score='39.596194',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='55.683669',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("499 M50 39.596194<br>");
$sql = "INSERT INTO ss09 SET runner_id='545',ss_date='2009-06-20',sex='M',age='21',score='82.996567',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='87.345992',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("545 M21 82.996567<br>");
$sql = "INSERT INTO ss09 SET runner_id='567',ss_date='2009-06-20',sex='M',age='55',score='61.242752',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='81.204138',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("567 M55 61.242752<br>");
$sql = "INSERT INTO ss09 SET runner_id='568',ss_date='2009-06-20',sex='F',age='55',score='22.018375',wh_sc='0',ye_sc='0',or_sc='44.184368',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("568 F55 22.018375<br>");
$sql = "INSERT INTO ss09 SET runner_id='601',ss_date='2009-06-20',sex='M',age='60',score='33.744572',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("601 M60 33.744572<br>");
$sql = "INSERT INTO ss09 SET runner_id='613',ss_date='2009-06-20',sex='M',age='50',score='60.469796',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='81.802141',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("613 M50 60.469796<br>");
$sql = "INSERT INTO ss09 SET runner_id='614',ss_date='2009-06-20',sex='F',age='50',score='47.237961',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("614 F50 47.237961<br>");
$sql = "INSERT INTO ss09 SET runner_id='616',ss_date='2009-06-20',sex='M',age='16',score='28.001887',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='56.817519',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("616 M16 28.001887<br>");
$sql = "INSERT INTO ss09 SET runner_id='626',ss_date='2009-06-20',sex='M',age='21',score='77.031461',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='82.311671',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("626 M21 77.031461<br>");
$sql = "INSERT INTO ss09 SET runner_id='630',ss_date='2009-06-20',sex='M',age='40',score='29.450717',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("630 M40 29.450717<br>");
$sql = "INSERT INTO ss09 SET runner_id='634',ss_date='2009-06-20',sex='M',age='40',score='45.573707',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='91.484076',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("634 M40 45.573707<br>");
$sql = "INSERT INTO ss09 SET runner_id='636',ss_date='2009-06-20',sex='F',age='35',score='47.89323',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='67.468236',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("636 F35 47.89323<br>");
$sql = "INSERT INTO ss09 SET runner_id='666',ss_date='2009-06-20',sex='F',age='55',score='31.861982',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='58.548943',gr_sc='45.984722',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("666 F55 31.861982<br>");
$sql = "INSERT INTO ss09 SET runner_id='667',ss_date='2009-06-20',sex='M',age='55',score='31.701895',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='45.157945',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("667 M55 31.701895<br>");
$sql = "INSERT INTO ss09 SET runner_id='673',ss_date='2009-06-20',sex='M',age='45',score='37.880925',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("673 M45 37.880925<br>");
$sql = "INSERT INTO ss09 SET runner_id='767',ss_date='2009-06-20',sex='M',age='40',score='67.009322',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("767 M40 67.009322<br>");
$sql = "INSERT INTO ss09 SET runner_id='783',ss_date='2009-06-20',sex='F',age='70',score='22.171204',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("783 F70 22.171204<br>");
$sql = "INSERT INTO ss09 SET runner_id='797',ss_date='2009-06-20',sex='F',age='55',score='45.255809',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='63.14984',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("797 F55 45.255809<br>");
$sql = "INSERT INTO ss09 SET runner_id='798',ss_date='2009-06-20',sex='M',age='60',score='34.26585',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='69.107713',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("798 M60 34.26585<br>");
$sql = "INSERT INTO ss09 SET runner_id='799',ss_date='2009-06-20',sex='M',age='45',score='76.741725',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='81.09119',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("799 M45 76.741725<br>");
$sql = "INSERT INTO ss09 SET runner_id='958',ss_date='2009-06-20',sex='M',age='45',score='15.949235',wh_sc='0',ye_sc='80.00848',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("958 M45 15.949235<br>");
$sql = "INSERT INTO ss09 SET runner_id='969',ss_date='2009-06-20',sex='F',age='21',score='47.103367',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("969 F21 47.103367<br>");
$sql = "INSERT INTO ss09 SET runner_id='970',ss_date='2009-06-20',sex='F',age='55',score='22.092244',wh_sc='0',ye_sc='0',or_sc='44.402004',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("970 F55 22.092244<br>");
$sql = "INSERT INTO ss09 SET runner_id='1022',ss_date='2009-06-20',sex='M',age='14',score='50.854273',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1022 M14 50.854273<br>");
$sql = "INSERT INTO ss09 SET runner_id='1189',ss_date='2009-06-20',sex='M',age='70',score='49.566992',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1189 M70 49.566992<br>");
$sql = "INSERT INTO ss09 SET runner_id='1198',ss_date='2009-06-20',sex='M',age='65',score='45.947239',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1198 M65 45.947239<br>");
$sql = "INSERT INTO ss09 SET runner_id='1218',ss_date='2009-06-20',sex='M',age='40',score='89.961488',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='95.838172',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1218 M40 89.961488<br>");
$sql = "INSERT INTO ss09 SET runner_id='1238',ss_date='2009-06-20',sex='M',age='55',score='30.664223',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='45.305709',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1238 M55 30.664223<br>");
$sql = "INSERT INTO ss09 SET runner_id='1250',ss_date='2009-06-20',sex='M',age='35',score='103.352305',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1250 M35 103.352305<br>");
$sql = "INSERT INTO ss09 SET runner_id='1318',ss_date='2009-06-20',sex='M',age='50',score='25.425171',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='51.939167',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1318 M50 25.425171<br>");
$sql = "INSERT INTO ss09 SET runner_id='1364',ss_date='2009-06-20',sex='M',age='40',score='63.771432',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='68.849483',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1364 M40 63.771432<br>");
$sql = "INSERT INTO ss09 SET runner_id='1397',ss_date='2009-06-20',sex='M',age='16',score='44.90286',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1397 M16 44.90286<br>");
$sql = "INSERT INTO ss09 SET runner_id='1432',ss_date='2009-06-20',sex='M',age='45',score='88.857373',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='88.757969',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1432 M45 88.857373<br>");
$sql = "INSERT INTO ss09 SET runner_id='1480',ss_date='2009-06-20',sex='F',age='21',score='21.163755',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='43.11535',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1480 F21 21.163755<br>");
$sql = "INSERT INTO ss09 SET runner_id='1503',ss_date='2009-06-20',sex='F',age='55',score='23.555446',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='44.420992',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1503 F55 23.555446<br>");
$sql = "INSERT INTO ss09 SET runner_id='1504',ss_date='2009-06-20',sex='M',age='60',score='43.030811',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='66.768077',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1504 M60 43.030811<br>");
$sql = "INSERT INTO ss09 SET runner_id='1548',ss_date='2009-06-20',sex='F',age='40',score='31.326799',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1548 F40 31.326799<br>");
$sql = "INSERT INTO ss09 SET runner_id='1567',ss_date='2009-06-20',sex='M',age='50',score='63.14926',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='67.503059',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1567 M50 63.14926<br>");
$sql = "INSERT INTO ss09 SET runner_id='1570',ss_date='2009-06-20',sex='M',age='18',score='57.466112',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1570 M18 57.466112<br>");
$sql = "INSERT INTO ss09 SET runner_id='1606',ss_date='2009-06-20',sex='M',age='35',score='106.686206',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='112.918671',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1606 M35 106.686206<br>");
$sql = "INSERT INTO ss09 SET runner_id='1667',ss_date='2009-06-20',sex='M',age='50',score='42.437266',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='83.353271',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1667 M50 42.437266<br>");
$sql = "INSERT INTO ss09 SET runner_id='1676',ss_date='2009-06-20',sex='F',age='55',score='25.338695',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='35.811352',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1676 F55 25.338695<br>");
$sql = "INSERT INTO ss09 SET runner_id='1718',ss_date='2009-06-20',sex='M',age='60',score='49.439443',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='99.109461',gr_sc='69.179457',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1718 M60 49.439443<br>");
$sql = "INSERT INTO ss09 SET runner_id='1739',ss_date='2009-06-20',sex='M',age='70',score='38.991791',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='79.816',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1739 M70 38.991791<br>");
$sql = "INSERT INTO ss09 SET runner_id='1746',ss_date='2009-06-20',sex='F',age='50',score='39.985818',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='81.722613',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1746 F50 39.985818<br>");
$sql = "INSERT INTO ss09 SET runner_id='1771',ss_date='2009-06-20',sex='F',age='60',score='29.002751',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='48.240813',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1771 F60 29.002751<br>");
$sql = "INSERT INTO ss09 SET runner_id='1878',ss_date='2009-06-20',sex='F',age='50',score='32.348699',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1878 F50 32.348699<br>");
$sql = "INSERT INTO ss09 SET runner_id='1879',ss_date='2009-06-20',sex='M',age='50',score='58.083532',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='82.932218',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1879 M50 58.083532<br>");
$sql = "INSERT INTO ss09 SET runner_id='1916',ss_date='2009-06-20',sex='F',age='55',score='29.057211',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='55.759611',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1916 F55 29.057211<br>");
$sql = "INSERT INTO ss09 SET runner_id='1923',ss_date='2009-06-20',sex='M',age='14',score='45.860543',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1923 M14 45.860543<br>");
$sql = "INSERT INTO ss09 SET runner_id='1925',ss_date='2009-06-20',sex='M',age='16',score='53.094525',wh_sc='0',ye_sc='0',or_sc='100.818877',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1925 M16 53.094525<br>");
$sql = "INSERT INTO ss09 SET runner_id='1926',ss_date='2009-06-20',sex='M',age='18',score='55.300613',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1926 M18 55.300613<br>");
$sql = "INSERT INTO ss09 SET runner_id='1928',ss_date='2009-06-20',sex='M',age='50',score='72.392872',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='85.431374',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1928 M50 72.392872<br>");
$sql = "INSERT INTO ss09 SET runner_id='1953',ss_date='2009-06-20',sex='M',age='55',score='58.715551',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1953 M55 58.715551<br>");
$sql = "INSERT INTO ss09 SET runner_id='1991',ss_date='2009-06-20',sex='M',age='60',score='32.339995',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='64.8376',gr_sc='44.823483',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1991 M60 32.339995<br>");
$sql = "INSERT INTO ss09 SET runner_id='1992',ss_date='2009-06-20',sex='F',age='60',score='24.84431',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='49.469454',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1992 F60 24.84431<br>");
$sql = "INSERT INTO ss09 SET runner_id='2108',ss_date='2009-06-20',sex='M',age='60',score='38.355903',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='40.885701',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2108 M60 38.355903<br>");
$sql = "INSERT INTO ss09 SET runner_id='2122',ss_date='2009-06-20',sex='M',age='55',score='52.377097',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='73.069482',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2122 M55 52.377097<br>");
$sql = "INSERT INTO ss09 SET runner_id='2160',ss_date='2009-06-20',sex='M',age='65',score='45.956014',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='64.792965',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2160 M65 45.956014<br>");
$sql = "INSERT INTO ss09 SET runner_id='2198',ss_date='2009-06-20',sex='F',age='40',score='55.594356',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='78.036897',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2198 F40 55.594356<br>");
$sql = "INSERT INTO ss09 SET runner_id='2200',ss_date='2009-06-20',sex='M',age='10',score='20.169581',wh_sc='0',ye_sc='106.76698',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2200 M10 20.169581<br>");
$sql = "INSERT INTO ss09 SET runner_id='2201',ss_date='2009-06-20',sex='M',age='18',score='29.291811',wh_sc='0',ye_sc='0',or_sc='56.295684',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2201 M18 29.291811<br>");
$sql = "INSERT INTO ss09 SET runner_id='2254',ss_date='2009-06-20',sex='F',age='16',score='26.074085',wh_sc='0',ye_sc='0',or_sc='47.020752',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2254 F16 26.074085<br>");
$sql = "INSERT INTO ss09 SET runner_id='2255',ss_date='2009-06-20',sex='G',age='2',score='40.526925',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2255 G2 40.526925<br>");
$sql = "INSERT INTO ss09 SET runner_id='2257',ss_date='2009-06-20',sex='M',age='50',score='16.868021',wh_sc='0',ye_sc='85.823919',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2257 M50 16.868021<br>");
$sql = "INSERT INTO ss09 SET runner_id='2267',ss_date='2009-06-20',sex='M',age='45',score='27.83479',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2267 M45 27.83479<br>");
$sql = "INSERT INTO ss09 SET runner_id='2275',ss_date='2009-06-20',sex='M',age='21',score='42.594521',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2275 M21 42.594521<br>");
$sql = "INSERT INTO ss09 SET runner_id='2303',ss_date='2009-06-20',sex='G',age='2',score='27.39301',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='44.088376',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2303 G2 27.39301<br>");
$sql = "INSERT INTO ss09 SET runner_id='2412',ss_date='2009-06-20',sex='M',age='21',score='55.03889',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2412 M21 55.03889<br>");
$sql = "INSERT INTO ss09 SET runner_id='2414',ss_date='2009-06-20',sex='M',age='60',score='27.69652',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2414 M60 27.69652<br>");
$sql = "INSERT INTO ss09 SET runner_id='2473',ss_date='2009-06-20',sex='F',age='16',score='21.573947',wh_sc='0',ye_sc='107.409101',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2473 F16 21.573947<br>");
$sql = "INSERT INTO ss09 SET runner_id='2481',ss_date='2009-06-20',sex='M',age='45',score='37.00778',wh_sc='0',ye_sc='0',or_sc='78.091482',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2481 M45 37.00778<br>");
$sql = "INSERT INTO ss09 SET runner_id='2',ss_date='2009-07-12',sex='F',age='45',score='42.113181',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='63.283078',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2 F45 42.113181<br>");
$sql = "INSERT INTO ss09 SET runner_id='12',ss_date='2009-07-12',sex='M',age='20',score='83.000638',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("12 M20 83.000638<br>");
$sql = "INSERT INTO ss09 SET runner_id='13',ss_date='2009-07-12',sex='M',age='45',score='70.658583',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='78.797212',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("13 M45 70.658583<br>");
$sql = "INSERT INTO ss09 SET runner_id='48',ss_date='2009-07-12',sex='M',age='50',score='37.940279',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='56.684793',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("48 M50 37.940279<br>");
$sql = "INSERT INTO ss09 SET runner_id='69',ss_date='2009-07-12',sex='M',age='45',score='52.940464',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='61.968637',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("69 M45 52.940464<br>");
$sql = "INSERT INTO ss09 SET runner_id='86',ss_date='2009-07-12',sex='M',age='50',score='42.38328',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("86 M50 42.38328<br>");
$sql = "INSERT INTO ss09 SET runner_id='87',ss_date='2009-07-12',sex='M',age='16',score='61.3045',wh_sc='0',ye_sc='0',or_sc='121.430362',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("87 M16 61.3045<br>");
$sql = "INSERT INTO ss09 SET runner_id='96',ss_date='2009-07-12',sex='M',age='55',score='42.346082',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='64.32534',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("96 M55 42.346082<br>");
$sql = "INSERT INTO ss09 SET runner_id='131',ss_date='2009-07-12',sex='M',age='40',score='100.132325',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='90.956478',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("131 M40 100.132325<br>");
$sql = "INSERT INTO ss09 SET runner_id='162',ss_date='2009-07-12',sex='M',age='35',score='50.681302',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='50.987439',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("162 M35 50.681302<br>");
$sql = "INSERT INTO ss09 SET runner_id='169',ss_date='2009-07-12',sex='M',age='60',score='26.942931',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='40.124144',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("169 M60 26.942931<br>");
$sql = "INSERT INTO ss09 SET runner_id='176',ss_date='2009-07-12',sex='M',age='55',score='70.948197',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='103.419302',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("176 M55 70.948197<br>");
$sql = "INSERT INTO ss09 SET runner_id='226',ss_date='2009-07-12',sex='M',age='80',score='22.674875',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='39.387808',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("226 M80 22.674875<br>");
$sql = "INSERT INTO ss09 SET runner_id='248',ss_date='2009-07-12',sex='M',age='60',score='48.27726',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='109.14183',gr_sc='67.259754',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("248 M60 48.27726<br>");
$sql = "INSERT INTO ss09 SET runner_id='253',ss_date='2009-07-12',sex='M',age='40',score='30.658196',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("253 M40 30.658196<br>");
$sql = "INSERT INTO ss09 SET runner_id='254',ss_date='2009-07-12',sex='F',age='55',score='20.650546',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("254 F55 20.650546<br>");
$sql = "INSERT INTO ss09 SET runner_id='267',ss_date='2009-07-12',sex='F',age='18',score='55.346386',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("267 F18 55.346386<br>");
$sql = "INSERT INTO ss09 SET runner_id='270',ss_date='2009-07-12',sex='M',age='50',score='73.930402',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='111.404236',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("270 M50 73.930402<br>");
$sql = "INSERT INTO ss09 SET runner_id='376',ss_date='2009-07-12',sex='M',age='50',score='64.667319',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='59.361542',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("376 M50 64.667319<br>");
$sql = "INSERT INTO ss09 SET runner_id='428',ss_date='2009-07-12',sex='M',age='50',score='38.174178',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='77.653569',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("428 M50 38.174178<br>");
$sql = "INSERT INTO ss09 SET runner_id='463',ss_date='2009-07-12',sex='M',age='45',score='28.733758',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='42.406984',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("463 M45 28.733758<br>");
$sql = "INSERT INTO ss09 SET runner_id='499',ss_date='2009-07-12',sex='M',age='50',score='36.978355',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='55.470612',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("499 M50 36.978355<br>");
$sql = "INSERT INTO ss09 SET runner_id='522',ss_date='2009-07-12',sex='F',age='50',score='25.899653',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("522 F50 25.899653<br>");
$sql = "INSERT INTO ss09 SET runner_id='545',ss_date='2009-07-12',sex='M',age='21',score='77.404563',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='87.540174',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("545 M21 77.404563<br>");
$sql = "INSERT INTO ss09 SET runner_id='567',ss_date='2009-07-12',sex='M',age='55',score='57.425401',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='83.470923',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("567 M55 57.425401<br>");
$sql = "INSERT INTO ss09 SET runner_id='568',ss_date='2009-07-12',sex='F',age='55',score='19.736458',wh_sc='0',ye_sc='0',or_sc='41.821868',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("568 F55 19.736458<br>");
$sql = "INSERT INTO ss09 SET runner_id='601',ss_date='2009-07-12',sex='M',age='60',score='31.456267',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("601 M60 31.456267<br>");
$sql = "INSERT INTO ss09 SET runner_id='606',ss_date='2009-07-12',sex='M',age='21',score='41.897557',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("606 M21 41.897557<br>");
$sql = "INSERT INTO ss09 SET runner_id='613',ss_date='2009-07-12',sex='M',age='50',score='56.427138',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='82.206999',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("613 M50 56.427138<br>");
$sql = "INSERT INTO ss09 SET runner_id='614',ss_date='2009-07-12',sex='F',age='50',score='47.70709',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='68.539918',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("614 F50 47.70709<br>");
$sql = "INSERT INTO ss09 SET runner_id='616',ss_date='2009-07-12',sex='M',age='16',score='24.732791',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='55.941782',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("616 M16 24.732791<br>");
$sql = "INSERT INTO ss09 SET runner_id='626',ss_date='2009-07-12',sex='M',age='21',score='71.553166',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='82.358408',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("626 M21 71.553166<br>");
$sql = "INSERT INTO ss09 SET runner_id='630',ss_date='2009-07-12',sex='M',age='40',score='27.667705',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("630 M40 27.667705<br>");
$sql = "INSERT INTO ss09 SET runner_id='634',ss_date='2009-07-12',sex='M',age='40',score='42.973474',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='92.292389',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("634 M40 42.973474<br>");
$sql = "INSERT INTO ss09 SET runner_id='636',ss_date='2009-07-12',sex='F',age='35',score='44.732456',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='67.532554',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("636 F35 44.732456<br>");
$sql = "INSERT INTO ss09 SET runner_id='666',ss_date='2009-07-12',sex='F',age='55',score='30.282675',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='63.991935',gr_sc='45.972723',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("666 F55 30.282675<br>");
$sql = "INSERT INTO ss09 SET runner_id='667',ss_date='2009-07-12',sex='M',age='55',score='29.131066',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='45.402095',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("667 M55 29.131066<br>");
$sql = "INSERT INTO ss09 SET runner_id='673',ss_date='2009-07-12',sex='M',age='45',score='35.224012',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("673 M45 35.224012<br>");
$sql = "INSERT INTO ss09 SET runner_id='767',ss_date='2009-07-12',sex='M',age='40',score='62.215982',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("767 M40 62.215982<br>");
$sql = "INSERT INTO ss09 SET runner_id='783',ss_date='2009-07-12',sex='F',age='70',score='20.905546',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("783 F70 20.905546<br>");
$sql = "INSERT INTO ss09 SET runner_id='784',ss_date='2009-07-12',sex='F',age='50',score='18.464895',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("784 F50 18.464895<br>");
$sql = "INSERT INTO ss09 SET runner_id='797',ss_date='2009-07-12',sex='F',age='55',score='42.29971',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='63.152291',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("797 F55 42.29971<br>");
$sql = "INSERT INTO ss09 SET runner_id='798',ss_date='2009-07-12',sex='M',age='60',score='32.215893',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='69.116059',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("798 M60 32.215893<br>");
$sql = "INSERT INTO ss09 SET runner_id='799',ss_date='2009-07-12',sex='M',age='45',score='71.340455',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='81.102075',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("799 M45 71.340455<br>");
$sql = "INSERT INTO ss09 SET runner_id='862',ss_date='2009-07-12',sex='M',age='21',score='36.182243',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("862 M21 36.182243<br>");
$sql = "INSERT INTO ss09 SET runner_id='899',ss_date='2009-07-12',sex='M',age='60',score='40.504965',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("899 M60 40.504965<br>");
$sql = "INSERT INTO ss09 SET runner_id='958',ss_date='2009-07-12',sex='M',age='45',score='15.16978',wh_sc='0',ye_sc='52.386104',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("958 M45 15.16978<br>");
$sql = "INSERT INTO ss09 SET runner_id='969',ss_date='2009-07-12',sex='F',age='21',score='44.403028',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='65.963681',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("969 F21 44.403028<br>");
$sql = "INSERT INTO ss09 SET runner_id='970',ss_date='2009-07-12',sex='F',age='55',score='19.322516',wh_sc='0',ye_sc='0',or_sc='41.02957',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("970 F55 19.322516<br>");
$sql = "INSERT INTO ss09 SET runner_id='1022',ss_date='2009-07-12',sex='M',age='14',score='47.613241',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1022 M14 47.613241<br>");
$sql = "INSERT INTO ss09 SET runner_id='1088',ss_date='2009-07-12',sex='M',age='60',score='36.557286',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='54.797843',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1088 M60 36.557286<br>");
$sql = "INSERT INTO ss09 SET runner_id='1189',ss_date='2009-07-12',sex='M',age='70',score='46.344218',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1189 M70 46.344218<br>");
$sql = "INSERT INTO ss09 SET runner_id='1198',ss_date='2009-07-12',sex='M',age='65',score='45.681501',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1198 M65 45.681501<br>");
$sql = "INSERT INTO ss09 SET runner_id='1218',ss_date='2009-07-12',sex='M',age='40',score='81.588111',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='95.811281',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1218 M40 81.588111<br>");
$sql = "INSERT INTO ss09 SET runner_id='1238',ss_date='2009-07-12',sex='M',age='55',score='28.248301',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='45.270364',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1238 M55 28.248301<br>");
$sql = "INSERT INTO ss09 SET runner_id='1250',ss_date='2009-07-12',sex='M',age='35',score='100.760651',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1250 M35 100.760651<br>");
$sql = "INSERT INTO ss09 SET runner_id='1282',ss_date='2009-07-12',sex='F',age='50',score='46.784789',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1282 F50 46.784789<br>");
$sql = "INSERT INTO ss09 SET runner_id='1318',ss_date='2009-07-12',sex='M',age='50',score='22.512818',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='52.210813',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1318 M50 22.512818<br>");
$sql = "INSERT INTO ss09 SET runner_id='1364',ss_date='2009-07-12',sex='M',age='40',score='59.721796',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='69.292236',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1364 M40 59.721796<br>");
$sql = "INSERT INTO ss09 SET runner_id='1397',ss_date='2009-07-12',sex='M',age='16',score='42.027509',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1397 M16 42.027509<br>");
$sql = "INSERT INTO ss09 SET runner_id='1398',ss_date='2009-07-12',sex='M',age='45',score='34.201071',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1398 M45 34.201071<br>");
$sql = "INSERT INTO ss09 SET runner_id='1432',ss_date='2009-07-12',sex='M',age='45',score='82.666766',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='88.670032',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1432 M45 82.666766<br>");
$sql = "INSERT INTO ss09 SET runner_id='1480',ss_date='2009-07-12',sex='F',age='21',score='19.950342',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='43.183804',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1480 F21 19.950342<br>");
$sql = "INSERT INTO ss09 SET runner_id='1503',ss_date='2009-07-12',sex='F',age='55',score='22.227902',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='44.464829',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1503 F55 22.227902<br>");
$sql = "INSERT INTO ss09 SET runner_id='1504',ss_date='2009-07-12',sex='M',age='60',score='39.998864',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='66.818831',re_sc='35.912496',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1504 M60 39.998864<br>");
$sql = "INSERT INTO ss09 SET runner_id='1518',ss_date='2009-07-12',sex='F',age='21',score='77.656318',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1518 F21 77.656318<br>");
$sql = "INSERT INTO ss09 SET runner_id='1548',ss_date='2009-07-12',sex='F',age='40',score='29.352049',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1548 F40 29.352049<br>");
$sql = "INSERT INTO ss09 SET runner_id='1567',ss_date='2009-07-12',sex='M',age='50',score='58.554712',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='67.545815',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1567 M50 58.554712<br>");
$sql = "INSERT INTO ss09 SET runner_id='1570',ss_date='2009-07-12',sex='M',age='18',score='54.060368',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='82.753935',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1570 M18 54.060368<br>");
$sql = "INSERT INTO ss09 SET runner_id='1603',ss_date='2009-07-12',sex='F',age='35',score='63.294883',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1603 F35 63.294883<br>");
$sql = "INSERT INTO ss09 SET runner_id='1606',ss_date='2009-07-12',sex='M',age='35',score='99.107025',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='113.232241',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1606 M35 99.107025<br>");
$sql = "INSERT INTO ss09 SET runner_id='1667',ss_date='2009-07-12',sex='M',age='50',score='39.687143',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='82.553737',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1667 M50 39.687143<br>");
$sql = "INSERT INTO ss09 SET runner_id='1676',ss_date='2009-07-12',sex='F',age='55',score='24.209939',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='35.783386',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1676 F55 24.209939<br>");
$sql = "INSERT INTO ss09 SET runner_id='1718',ss_date='2009-07-12',sex='M',age='60',score='48.797142',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='98.565781',gr_sc='76.737639',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1718 M60 48.797142<br>");
$sql = "INSERT INTO ss09 SET runner_id='1739',ss_date='2009-07-12',sex='M',age='70',score='37.654527',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='81.532194',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1739 M70 37.654527<br>");
$sql = "INSERT INTO ss09 SET runner_id='1746',ss_date='2009-07-12',sex='F',age='50',score='37.483262',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='81.476644',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1746 F50 37.483262<br>");
$sql = "INSERT INTO ss09 SET runner_id='1771',ss_date='2009-07-12',sex='F',age='60',score='25.06722',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='47.82817',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1771 F60 25.06722<br>");
$sql = "INSERT INTO ss09 SET runner_id='1878',ss_date='2009-07-12',sex='F',age='50',score='29.509025',wh_sc='0',ye_sc='89.724208',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1878 F50 29.509025<br>");
$sql = "INSERT INTO ss09 SET runner_id='1879',ss_date='2009-07-12',sex='M',age='50',score='52.916488',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='80.671754',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1879 M50 52.916488<br>");
$sql = "INSERT INTO ss09 SET runner_id='1916',ss_date='2009-07-12',sex='F',age='55',score='28.736692',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='63.868132',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1916 F55 28.736692<br>");
$sql = "INSERT INTO ss09 SET runner_id='1923',ss_date='2009-07-12',sex='M',age='14',score='39.433811',wh_sc='0',ye_sc='133.417484',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1923 M14 39.433811<br>");
$sql = "INSERT INTO ss09 SET runner_id='1925',ss_date='2009-07-12',sex='M',age='16',score='49.755034',wh_sc='0',ye_sc='0',or_sc='101.78045',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1925 M16 49.755034<br>");
$sql = "INSERT INTO ss09 SET runner_id='1926',ss_date='2009-07-12',sex='M',age='18',score='51.698619',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1926 M18 51.698619<br>");
$sql = "INSERT INTO ss09 SET runner_id='1928',ss_date='2009-07-12',sex='M',age='50',score='66.168104',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='85.176462',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1928 M50 66.168104<br>");
$sql = "INSERT INTO ss09 SET runner_id='1953',ss_date='2009-07-12',sex='M',age='55',score='54.784774',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1953 M55 54.784774<br>");
$sql = "INSERT INTO ss09 SET runner_id='1991',ss_date='2009-07-12',sex='M',age='60',score='29.550267',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='64.547208',gr_sc='44.36286',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1991 M60 29.550267<br>");
$sql = "INSERT INTO ss09 SET runner_id='1992',ss_date='2009-07-12',sex='F',age='60',score='22.954367',wh_sc='0',ye_sc='0',or_sc='48.223045',bn_sc='49.242832',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1992 F60 22.954367<br>");
$sql = "INSERT INTO ss09 SET runner_id='2108',ss_date='2009-07-12',sex='M',age='60',score='35.711483',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='40.952144',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2108 M60 35.711483<br>");
$sql = "INSERT INTO ss09 SET runner_id='2122',ss_date='2009-07-12',sex='M',age='55',score='48.792764',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='72.580235',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2122 M55 48.792764<br>");
$sql = "INSERT INTO ss09 SET runner_id='2160',ss_date='2009-07-12',sex='M',age='65',score='44.554397',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='66.880906',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2160 M65 44.554397<br>");
$sql = "INSERT INTO ss09 SET runner_id='2198',ss_date='2009-07-12',sex='F',age='40',score='51.976236',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='78.476865',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2198 F40 51.976236<br>");
$sql = "INSERT INTO ss09 SET runner_id='2200',ss_date='2009-07-12',sex='M',age='10',score='19.118573',wh_sc='0',ye_sc='67.31332',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2200 M10 19.118573<br>");
$sql = "INSERT INTO ss09 SET runner_id='2201',ss_date='2009-07-12',sex='M',age='18',score='27.586064',wh_sc='0',ye_sc='0',or_sc='56.007216',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2201 M18 27.586064<br>");
$sql = "INSERT INTO ss09 SET runner_id='2254',ss_date='2009-07-12',sex='F',age='16',score='25.260616',wh_sc='0',ye_sc='0',or_sc='47.091821',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2254 F16 25.260616<br>");
$sql = "INSERT INTO ss09 SET runner_id='2255',ss_date='2009-07-12',sex='G',age='2',score='38.039146',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2255 G2 38.039146<br>");
$sql = "INSERT INTO ss09 SET runner_id='2257',ss_date='2009-07-12',sex='M',age='50',score='16.025764',wh_sc='0',ye_sc='55.692061',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2257 M50 16.025764<br>");
$sql = "INSERT INTO ss09 SET runner_id='2267',ss_date='2009-07-12',sex='M',age='45',score='26.032199',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2267 M45 26.032199<br>");
$sql = "INSERT INTO ss09 SET runner_id='2275',ss_date='2009-07-12',sex='M',age='21',score='40.276715',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2275 M21 40.276715<br>");
$sql = "INSERT INTO ss09 SET runner_id='2303',ss_date='2009-07-12',sex='G',age='2',score='25.621269',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='44.347144',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2303 G2 25.621269<br>");
$sql = "INSERT INTO ss09 SET runner_id='2412',ss_date='2009-07-12',sex='M',age='21',score='51.290225',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2412 M21 51.290225<br>");
$sql = "INSERT INTO ss09 SET runner_id='2414',ss_date='2009-07-12',sex='M',age='60',score='26.035432',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2414 M60 26.035432<br>");
$sql = "INSERT INTO ss09 SET runner_id='2473',ss_date='2009-07-12',sex='F',age='16',score='22.049129',wh_sc='0',ye_sc='76.858307',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2473 F16 22.049129<br>");
$sql = "INSERT INTO ss09 SET runner_id='2481',ss_date='2009-07-12',sex='M',age='45',score='31.497218',wh_sc='0',ye_sc='0',or_sc='76.789188',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2481 M45 31.497218<br>");
$sql = "INSERT INTO ss09 SET runner_id='2',ss_date='2009-07-26',sex='F',age='45',score='41.943706',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='60.278314',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2 F45 41.943706<br>");
$sql = "INSERT INTO ss09 SET runner_id='12',ss_date='2009-07-26',sex='M',age='20',score='83.88955',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("12 M20 83.88955<br>");
$sql = "INSERT INTO ss09 SET runner_id='13',ss_date='2009-07-26',sex='M',age='45',score='71.336365',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='81.561273',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("13 M45 71.336365<br>");
$sql = "INSERT INTO ss09 SET runner_id='48',ss_date='2009-07-26',sex='M',age='50',score='37.589038',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='53.882485',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("48 M50 37.589038<br>");
$sql = "INSERT INTO ss09 SET runner_id='69',ss_date='2009-07-26',sex='M',age='45',score='53.571211',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='62.418952',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("69 M45 53.571211<br>");
$sql = "INSERT INTO ss09 SET runner_id='86',ss_date='2009-07-26',sex='M',age='50',score='42.65677',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("86 M50 42.65677<br>");
$sql = "INSERT INTO ss09 SET runner_id='87',ss_date='2009-07-26',sex='M',age='16',score='60.261609',wh_sc='0',ye_sc='0',or_sc='118.282688',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("87 M16 60.261609<br>");
$sql = "INSERT INTO ss09 SET runner_id='96',ss_date='2009-07-26',sex='M',age='55',score='42.685069',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='61.130338',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("96 M55 42.685069<br>");
$sql = "INSERT INTO ss09 SET runner_id='100',ss_date='2009-07-26',sex='F',age='16',score='24.512084',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("100 F16 24.512084<br>");
$sql = "INSERT INTO ss09 SET runner_id='131',ss_date='2009-07-26',sex='M',age='40',score='100.990872',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='90.811837',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("131 M40 100.990872<br>");
$sql = "INSERT INTO ss09 SET runner_id='162',ss_date='2009-07-26',sex='M',age='35',score='51.737505',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='51.528506',bl_sc='69.602767'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("162 M35 51.737505<br>");
$sql = "INSERT INTO ss09 SET runner_id='169',ss_date='2009-07-26',sex='M',age='60',score='27.135826',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='38.176031',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("169 M60 27.135826<br>");
$sql = "INSERT INTO ss09 SET runner_id='176',ss_date='2009-07-26',sex='M',age='55',score='71.35776',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='98.32654',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("176 M55 71.35776<br>");
$sql = "INSERT INTO ss09 SET runner_id='226',ss_date='2009-07-26',sex='M',age='80',score='24.47473',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='38.758799',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("226 M80 24.47473<br>");
$sql = "INSERT INTO ss09 SET runner_id='248',ss_date='2009-07-26',sex='M',age='60',score='49.118709',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='107.213528',gr_sc='63.983201',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("248 M60 49.118709<br>");
$sql = "INSERT INTO ss09 SET runner_id='253',ss_date='2009-07-26',sex='M',age='40',score='30.916801',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("253 M40 30.916801<br>");
$sql = "INSERT INTO ss09 SET runner_id='254',ss_date='2009-07-26',sex='F',age='55',score='20.48049',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("254 F55 20.48049<br>");
$sql = "INSERT INTO ss09 SET runner_id='267',ss_date='2009-07-26',sex='F',age='18',score='55.476787',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("267 F18 55.476787<br>");
$sql = "INSERT INTO ss09 SET runner_id='270',ss_date='2009-07-26',sex='M',age='50',score='77.988222',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='110.687758',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("270 M50 77.988222<br>");
$sql = "INSERT INTO ss09 SET runner_id='376',ss_date='2009-07-26',sex='M',age='50',score='65.002227',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='59.292342',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("376 M50 65.002227<br>");
$sql = "INSERT INTO ss09 SET runner_id='428',ss_date='2009-07-26',sex='M',age='50',score='38.344119',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='76.436794',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("428 M50 38.344119<br>");
$sql = "INSERT INTO ss09 SET runner_id='463',ss_date='2009-07-26',sex='M',age='45',score='28.883804',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='40.337644',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("463 M45 28.883804<br>");
$sql = "INSERT INTO ss09 SET runner_id='499',ss_date='2009-07-26',sex='M',age='50',score='37.289347',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='52.863971',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("499 M50 37.289347<br>");
$sql = "INSERT INTO ss09 SET runner_id='522',ss_date='2009-07-26',sex='F',age='50',score='25.875981',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("522 F50 25.875981<br>");
$sql = "INSERT INTO ss09 SET runner_id='545',ss_date='2009-07-26',sex='M',age='21',score='77.653433',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='87.607061',bl_sc='102.577022'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("545 M21 77.653433<br>");
$sql = "INSERT INTO ss09 SET runner_id='567',ss_date='2009-07-26',sex='M',age='55',score='57.691631',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='79.481217',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("567 M55 57.691631<br>");
$sql = "INSERT INTO ss09 SET runner_id='568',ss_date='2009-07-26',sex='F',age='55',score='19.550306',wh_sc='0',ye_sc='0',or_sc='41.081363',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("568 F55 19.550306<br>");
$sql = "INSERT INTO ss09 SET runner_id='601',ss_date='2009-07-26',sex='M',age='60',score='31.311834',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("601 M60 31.311834<br>");
$sql = "INSERT INTO ss09 SET runner_id='606',ss_date='2009-07-26',sex='M',age='21',score='44.578358',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("606 M21 44.578358<br>");
$sql = "INSERT INTO ss09 SET runner_id='613',ss_date='2009-07-26',sex='M',age='50',score='56.724693',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='78.066337',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("613 M50 56.724693<br>");
$sql = "INSERT INTO ss09 SET runner_id='614',ss_date='2009-07-26',sex='F',age='50',score='47.993646',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='65.281772',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("614 F50 47.993646<br>");
$sql = "INSERT INTO ss09 SET runner_id='616',ss_date='2009-07-26',sex='M',age='16',score='24.847219',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='55.010001',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("616 M16 24.847219<br>");
$sql = "INSERT INTO ss09 SET runner_id='626',ss_date='2009-07-26',sex='M',age='21',score='71.875967',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='82.233304',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("626 M21 71.875967<br>");
$sql = "INSERT INTO ss09 SET runner_id='630',ss_date='2009-07-26',sex='M',age='40',score='27.871996',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("630 M40 27.871996<br>");
$sql = "INSERT INTO ss09 SET runner_id='633',ss_date='2009-07-26',sex='M',age='16',score='32.239114',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("633 M16 32.239114<br>");
$sql = "INSERT INTO ss09 SET runner_id='634',ss_date='2009-07-26',sex='M',age='40',score='45.570187',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='95.517495',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("634 M40 45.570187<br>");
$sql = "INSERT INTO ss09 SET runner_id='636',ss_date='2009-07-26',sex='F',age='35',score='45.321036',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='64.495256',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("636 F35 45.321036<br>");
$sql = "INSERT INTO ss09 SET runner_id='666',ss_date='2009-07-26',sex='F',age='55',score='30.529312',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='63.109417',gr_sc='43.88357',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("666 F55 30.529312<br>");
$sql = "INSERT INTO ss09 SET runner_id='667',ss_date='2009-07-26',sex='M',age='55',score='29.389555',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='43.287954',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("667 M55 29.389555<br>");
$sql = "INSERT INTO ss09 SET runner_id='673',ss_date='2009-07-26',sex='M',age='45',score='35.390303',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("673 M45 35.390303<br>");
$sql = "INSERT INTO ss09 SET runner_id='767',ss_date='2009-07-26',sex='M',age='40',score='63.380274',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("767 M40 63.380274<br>");
$sql = "INSERT INTO ss09 SET runner_id='783',ss_date='2009-07-26',sex='F',age='70',score='20.967296',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("783 F70 20.967296<br>");
$sql = "INSERT INTO ss09 SET runner_id='784',ss_date='2009-07-26',sex='F',age='50',score='18.367647',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("784 F50 18.367647<br>");
$sql = "INSERT INTO ss09 SET runner_id='797',ss_date='2009-07-26',sex='F',age='55',score='42.642822',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='60.108332',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("797 F55 42.642822<br>");
$sql = "INSERT INTO ss09 SET runner_id='798',ss_date='2009-07-26',sex='M',age='60',score='32.41285',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='68.143974',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("798 M60 32.41285<br>");
$sql = "INSERT INTO ss09 SET runner_id='799',ss_date='2009-07-26',sex='M',age='45',score='71.93304',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='80.162837',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("799 M45 71.93304<br>");
$sql = "INSERT INTO ss09 SET runner_id='862',ss_date='2009-07-26',sex='M',age='21',score='36.342602',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("862 M21 36.342602<br>");
$sql = "INSERT INTO ss09 SET runner_id='899',ss_date='2009-07-26',sex='M',age='60',score='40.662206',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("899 M60 40.662206<br>");
$sql = "INSERT INTO ss09 SET runner_id='958',ss_date='2009-07-26',sex='M',age='45',score='15.123131',wh_sc='0',ye_sc='49.465808',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("958 M45 15.123131<br>");
$sql = "INSERT INTO ss09 SET runner_id='969',ss_date='2009-07-26',sex='F',age='21',score='44.76608',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='63.01943',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("969 F21 44.76608<br>");
$sql = "INSERT INTO ss09 SET runner_id='970',ss_date='2009-07-26',sex='F',age='55',score='19.006683',wh_sc='0',ye_sc='0',or_sc='40.255648',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("970 F55 19.006683<br>");
$sql = "INSERT INTO ss09 SET runner_id='1022',ss_date='2009-07-26',sex='M',age='14',score='47.352344',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1022 M14 47.352344<br>");
$sql = "INSERT INTO ss09 SET runner_id='1088',ss_date='2009-07-26',sex='M',age='60',score='36.953836',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='52.455764',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1088 M60 36.953836<br>");
$sql = "INSERT INTO ss09 SET runner_id='1189',ss_date='2009-07-26',sex='M',age='70',score='46.572435',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1189 M70 46.572435<br>");
$sql = "INSERT INTO ss09 SET runner_id='1198',ss_date='2009-07-26',sex='M',age='65',score='45.982131',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1198 M65 45.982131<br>");
$sql = "INSERT INTO ss09 SET runner_id='1218',ss_date='2009-07-26',sex='M',age='40',score='82.188949',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='95.888431',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1218 M40 82.188949<br>");
$sql = "INSERT INTO ss09 SET runner_id='1238',ss_date='2009-07-26',sex='M',age='55',score='28.495173',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='43.139115',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1238 M55 28.495173<br>");
$sql = "INSERT INTO ss09 SET runner_id='1250',ss_date='2009-07-26',sex='M',age='35',score='100.162763',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1250 M35 100.162763<br>");
$sql = "INSERT INTO ss09 SET runner_id='1282',ss_date='2009-07-26',sex='F',age='50',score='47.237287',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1282 F50 47.237287<br>");
$sql = "INSERT INTO ss09 SET runner_id='1318',ss_date='2009-07-26',sex='M',age='50',score='23.10571',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='48.671684',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1318 M50 23.10571<br>");
$sql = "INSERT INTO ss09 SET runner_id='1364',ss_date='2009-07-26',sex='M',age='40',score='59.998746',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='69.227599',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1364 M40 59.998746<br>");
$sql = "INSERT INTO ss09 SET runner_id='1397',ss_date='2009-07-26',sex='M',age='16',score='51.226365',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1397 M16 51.226365<br>");
$sql = "INSERT INTO ss09 SET runner_id='1398',ss_date='2009-07-26',sex='M',age='45',score='29.663578',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1398 M45 29.663578<br>");
$sql = "INSERT INTO ss09 SET runner_id='1432',ss_date='2009-07-26',sex='M',age='45',score='80.636969',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='88.202824',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1432 M45 80.636969<br>");
$sql = "INSERT INTO ss09 SET runner_id='1480',ss_date='2009-07-26',sex='F',age='21',score='19.930064',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='42.368067',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1480 F21 19.930064<br>");
$sql = "INSERT INTO ss09 SET runner_id='1503',ss_date='2009-07-26',sex='F',age='55',score='22.027927',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='43.653418',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1503 F55 22.027927<br>");
$sql = "INSERT INTO ss09 SET runner_id='1504',ss_date='2009-07-26',sex='M',age='60',score='40.431107',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='63.545076',re_sc='36.15878',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1504 M60 40.431107<br>");
$sql = "INSERT INTO ss09 SET runner_id='1518',ss_date='2009-07-26',sex='F',age='21',score='78.673673',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1518 F21 78.673673<br>");
$sql = "INSERT INTO ss09 SET runner_id='1519',ss_date='2009-07-26',sex='M',age='50',score='34.768252',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1519 M50 34.768252<br>");
$sql = "INSERT INTO ss09 SET runner_id='1548',ss_date='2009-07-26',sex='F',age='40',score='29.851575',wh_sc='0',ye_sc='0',or_sc='51.694984',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1548 F40 29.851575<br>");
$sql = "INSERT INTO ss09 SET runner_id='1567',ss_date='2009-07-26',sex='M',age='50',score='59.200137',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='68.226464',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1567 M50 59.200137<br>");
$sql = "INSERT INTO ss09 SET runner_id='1570',ss_date='2009-07-26',sex='M',age='18',score='54.277883',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='79.194532',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1570 M18 54.277883<br>");
$sql = "INSERT INTO ss09 SET runner_id='1603',ss_date='2009-07-26',sex='F',age='35',score='65.942953',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='90.985702',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1603 F35 65.942953<br>");
$sql = "INSERT INTO ss09 SET runner_id='1606',ss_date='2009-07-26',sex='M',age='35',score='98.846365',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='113.299731',bl_sc='127.820211'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1606 M35 98.846365<br>");
$sql = "INSERT INTO ss09 SET runner_id='1667',ss_date='2009-07-26',sex='M',age='50',score='39.861012',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='81.184583',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1667 M50 39.861012<br>");
$sql = "INSERT INTO ss09 SET runner_id='1676',ss_date='2009-07-26',sex='F',age='55',score='24.471412',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='34.082409',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1676 F55 24.471412<br>");
$sql = "INSERT INTO ss09 SET runner_id='1718',ss_date='2009-07-26',sex='M',age='60',score='49.160502',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='97.268978',gr_sc='73.196376',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1718 M60 49.160502<br>");
$sql = "INSERT INTO ss09 SET runner_id='1739',ss_date='2009-07-26',sex='M',age='70',score='38.480865',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='81.290552',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1739 M70 38.480865<br>");
$sql = "INSERT INTO ss09 SET runner_id='1746',ss_date='2009-07-26',sex='F',age='50',score='37.592662',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='80.075575',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1746 F50 37.592662<br>");
$sql = "INSERT INTO ss09 SET runner_id='1771',ss_date='2009-07-26',sex='F',age='60',score='24.714506',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='46.945689',gr_sc='31.931033',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1771 F60 24.714506<br>");
$sql = "INSERT INTO ss09 SET runner_id='1878',ss_date='2009-07-26',sex='F',age='50',score='28.888125',wh_sc='0',ye_sc='84.665266',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1878 F50 28.888125<br>");
$sql = "INSERT INTO ss09 SET runner_id='1879',ss_date='2009-07-26',sex='M',age='50',score='53.644041',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='78.737893',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1879 M50 53.644041<br>");
$sql = "INSERT INTO ss09 SET runner_id='1916',ss_date='2009-07-26',sex='F',age='55',score='28.861808',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='62.85666',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1916 F55 28.861808<br>");
$sql = "INSERT INTO ss09 SET runner_id='1923',ss_date='2009-07-26',sex='M',age='14',score='43.138574',wh_sc='0',ye_sc='127.57365',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1923 M14 43.138574<br>");
$sql = "INSERT INTO ss09 SET runner_id='1925',ss_date='2009-07-26',sex='M',age='16',score='50.513543',wh_sc='0',ye_sc='0',or_sc='108.22544',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1925 M16 50.513543<br>");
$sql = "INSERT INTO ss09 SET runner_id='1926',ss_date='2009-07-26',sex='M',age='18',score='51.652265',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1926 M18 51.652265<br>");
$sql = "INSERT INTO ss09 SET runner_id='1928',ss_date='2009-07-26',sex='M',age='50',score='65.867713',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='81.468905',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1928 M50 65.867713<br>");
$sql = "INSERT INTO ss09 SET runner_id='1953',ss_date='2009-07-26',sex='M',age='55',score='54.984075',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1953 M55 54.984075<br>");
$sql = "INSERT INTO ss09 SET runner_id='1991',ss_date='2009-07-26',sex='M',age='60',score='30.376334',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='69.91391',gr_sc='42.15709',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1991 M60 30.376334<br>");
$sql = "INSERT INTO ss09 SET runner_id='1992',ss_date='2009-07-26',sex='F',age='60',score='22.646821',wh_sc='0',ye_sc='0',or_sc='47.070638',bn_sc='49.342515',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1992 F60 22.646821<br>");
$sql = "INSERT INTO ss09 SET runner_id='2108',ss_date='2009-07-26',sex='M',age='60',score='35.73307',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='41.383917',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2108 M60 35.73307<br>");
$sql = "INSERT INTO ss09 SET runner_id='2122',ss_date='2009-07-26',sex='M',age='55',score='49.571929',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='69.851598',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2122 M55 49.571929<br>");
$sql = "INSERT INTO ss09 SET runner_id='2160',ss_date='2009-07-26',sex='M',age='65',score='44.948287',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='63.798912',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2160 M65 44.948287<br>");
$sql = "INSERT INTO ss09 SET runner_id='2198',ss_date='2009-07-26',sex='F',age='40',score='52.849223',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='75.224648',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2198 F40 52.849223<br>");
$sql = "INSERT INTO ss09 SET runner_id='2200',ss_date='2009-07-26',sex='M',age='10',score='18.908819',wh_sc='0',ye_sc='63.144761',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2200 M10 18.908819<br>");
$sql = "INSERT INTO ss09 SET runner_id='2201',ss_date='2009-07-26',sex='M',age='18',score='25.810589',wh_sc='0',ye_sc='0',or_sc='51.779449',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2201 M18 25.810589<br>");
$sql = "INSERT INTO ss09 SET runner_id='2227',ss_date='2009-07-26',sex='M',age='40',score='59.899879',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='69.171581',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2227 M40 59.899879<br>");
$sql = "INSERT INTO ss09 SET runner_id='2254',ss_date='2009-07-26',sex='F',age='16',score='25.287726',wh_sc='0',ye_sc='87.761084',or_sc='45.683069',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2254 F16 25.287726<br>");
$sql = "INSERT INTO ss09 SET runner_id='2255',ss_date='2009-07-26',sex='G',age='2',score='38.152039',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2255 G2 38.152039<br>");
$sql = "INSERT INTO ss09 SET runner_id='2257',ss_date='2009-07-26',sex='M',age='50',score='15.55658',wh_sc='0',ye_sc='52.405721',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2257 M50 15.55658<br>");
$sql = "INSERT INTO ss09 SET runner_id='2267',ss_date='2009-07-26',sex='M',age='45',score='26.206056',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2267 M45 26.206056<br>");
$sql = "INSERT INTO ss09 SET runner_id='2275',ss_date='2009-07-26',sex='M',age='21',score='39.805509',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2275 M21 39.805509<br>");
$sql = "INSERT INTO ss09 SET runner_id='2303',ss_date='2009-07-26',sex='G',age='2',score='25.356887',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='42.034853',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2303 G2 25.356887<br>");
$sql = "INSERT INTO ss09 SET runner_id='2312',ss_date='2009-07-26',sex='G',age='2',score='23.452241',wh_sc='100',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2312 G2 23.452241<br>");
$sql = "INSERT INTO ss09 SET runner_id='2412',ss_date='2009-07-26',sex='M',age='21',score='51.71872',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2412 M21 51.71872<br>");
$sql = "INSERT INTO ss09 SET runner_id='2414',ss_date='2009-07-26',sex='M',age='60',score='24.704574',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2414 M60 24.704574<br>");
$sql = "INSERT INTO ss09 SET runner_id='2473',ss_date='2009-07-26',sex='F',age='16',score='22.022249',wh_sc='0',ye_sc='72.427895',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2473 F16 22.022249<br>");
$sql = "INSERT INTO ss09 SET runner_id='2481',ss_date='2009-07-26',sex='M',age='45',score='32.734958',wh_sc='0',ye_sc='0',or_sc='73.491872',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2481 M45 32.734958<br>");
$sql = "INSERT INTO ss09 SET runner_id='2',ss_date='2009-08-02',sex='F',age='45',score='39.575843',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='55.735703',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2 F45 39.575843<br>");
$sql = "INSERT INTO ss09 SET runner_id='12',ss_date='2009-08-02',sex='M',age='20',score='84.231775',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("12 M20 84.231775<br>");
$sql = "INSERT INTO ss09 SET runner_id='13',ss_date='2009-08-02',sex='M',age='45',score='71.603908',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='76.259436',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("13 M45 71.603908<br>");
$sql = "INSERT INTO ss09 SET runner_id='48',ss_date='2009-08-02',sex='M',age='50',score='37.761169',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='53.605591',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("48 M50 37.761169<br>");
$sql = "INSERT INTO ss09 SET runner_id='69',ss_date='2009-08-02',sex='M',age='45',score='53.816228',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='58.481342',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("69 M45 53.816228<br>");
$sql = "INSERT INTO ss09 SET runner_id='86',ss_date='2009-08-02',sex='M',age='50',score='42.78708',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("86 M50 42.78708<br>");
$sql = "INSERT INTO ss09 SET runner_id='87',ss_date='2009-08-02',sex='M',age='16',score='61.076888',wh_sc='0',ye_sc='0',or_sc='118.470092',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("87 M16 61.076888<br>");
$sql = "INSERT INTO ss09 SET runner_id='96',ss_date='2009-08-02',sex='M',age='55',score='42.89587',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='60.816565',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("96 M55 42.89587<br>");
$sql = "INSERT INTO ss09 SET runner_id='100',ss_date='2009-08-02',sex='F',age='16',score='24.899389',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("100 F16 24.899389<br>");
$sql = "INSERT INTO ss09 SET runner_id='131',ss_date='2009-08-02',sex='M',age='40',score='101.132167',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='84.700135',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("131 M40 101.132167<br>");
$sql = "INSERT INTO ss09 SET runner_id='162',ss_date='2009-08-02',sex='M',age='35',score='51.867076',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='49.33181',bl_sc='69.602767'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("162 M35 51.867076<br>");
$sql = "INSERT INTO ss09 SET runner_id='169',ss_date='2009-08-02',sex='M',age='60',score='27.250752',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='37.931147',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("169 M60 27.250752<br>");
$sql = "INSERT INTO ss09 SET runner_id='176',ss_date='2009-08-02',sex='M',age='55',score='72.256889',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='99.99968',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("176 M55 72.256889<br>");
$sql = "INSERT INTO ss09 SET runner_id='226',ss_date='2009-08-02',sex='M',age='80',score='24.542875',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='38.496653',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("226 M80 24.542875<br>");
$sql = "INSERT INTO ss09 SET runner_id='248',ss_date='2009-08-02',sex='M',age='60',score='49.360561',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='106.661085',gr_sc='63.660852',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("248 M60 49.360561<br>");
$sql = "INSERT INTO ss09 SET runner_id='253',ss_date='2009-08-02',sex='M',age='40',score='30.88482',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("253 M40 30.88482<br>");
$sql = "INSERT INTO ss09 SET runner_id='254',ss_date='2009-08-02',sex='F',age='55',score='20.791036',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("254 F55 20.791036<br>");
$sql = "INSERT INTO ss09 SET runner_id='267',ss_date='2009-08-02',sex='F',age='18',score='55.723124',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("267 F18 55.723124<br>");
$sql = "INSERT INTO ss09 SET runner_id='270',ss_date='2009-08-02',sex='M',age='50',score='78.386739',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='109.774058',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("270 M50 78.386739<br>");
$sql = "INSERT INTO ss09 SET runner_id='376',ss_date='2009-08-02',sex='M',age='50',score='65.460328',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='55.518893',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("376 M50 65.460328<br>");
$sql = "INSERT INTO ss09 SET runner_id='428',ss_date='2009-08-02',sex='M',age='50',score='38.478992',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='76.265691',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("428 M50 38.478992<br>");
$sql = "INSERT INTO ss09 SET runner_id='463',ss_date='2009-08-02',sex='M',age='45',score='29.050534',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='40.019737',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("463 M45 29.050534<br>");
$sql = "INSERT INTO ss09 SET runner_id='499',ss_date='2009-08-02',sex='M',age='50',score='37.44165',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='52.420961',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("499 M50 37.44165<br>");
$sql = "INSERT INTO ss09 SET runner_id='522',ss_date='2009-08-02',sex='F',age='50',score='25.924154',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("522 F50 25.924154<br>");
$sql = "INSERT INTO ss09 SET runner_id='545',ss_date='2009-08-02',sex='M',age='21',score='77.888742',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='81.820622',bl_sc='102.577022'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("545 M21 77.888742<br>");
$sql = "INSERT INTO ss09 SET runner_id='567',ss_date='2009-08-02',sex='M',age='55',score='57.929909',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='78.85789',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("567 M55 57.929909<br>");
$sql = "INSERT INTO ss09 SET runner_id='568',ss_date='2009-08-02',sex='F',age='55',score='19.892303',wh_sc='0',ye_sc='0',or_sc='41.147045',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("568 F55 19.892303<br>");
$sql = "INSERT INTO ss09 SET runner_id='601',ss_date='2009-08-02',sex='M',age='60',score='32.121492',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("601 M60 32.121492<br>");
$sql = "INSERT INTO ss09 SET runner_id='606',ss_date='2009-08-02',sex='M',age='21',score='44.790668',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("606 M21 44.790668<br>");
$sql = "INSERT INTO ss09 SET runner_id='613',ss_date='2009-08-02',sex='M',age='50',score='56.248808',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='77.520759',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("613 M50 56.248808<br>");
$sql = "INSERT INTO ss09 SET runner_id='614',ss_date='2009-08-02',sex='F',age='50',score='48.282353',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='64.810307',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("614 F50 48.282353<br>");
$sql = "INSERT INTO ss09 SET runner_id='616',ss_date='2009-08-02',sex='M',age='16',score='24.184037',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='54.740349',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("616 M16 24.184037<br>");
$sql = "INSERT INTO ss09 SET runner_id='626',ss_date='2009-08-02',sex='M',age='21',score='72.068066',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='76.799735',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("626 M21 72.068066<br>");
$sql = "INSERT INTO ss09 SET runner_id='630',ss_date='2009-08-02',sex='M',age='40',score='28.013609',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("630 M40 28.013609<br>");
$sql = "INSERT INTO ss09 SET runner_id='633',ss_date='2009-08-02',sex='M',age='16',score='32.882283',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("633 M16 32.882283<br>");
$sql = "INSERT INTO ss09 SET runner_id='634',ss_date='2009-08-02',sex='M',age='40',score='45.642406',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='95.965736',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("634 M40 45.642406<br>");
$sql = "INSERT INTO ss09 SET runner_id='636',ss_date='2009-08-02',sex='F',age='35',score='45.885451',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='63.956291',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("636 F35 45.885451<br>");
$sql = "INSERT INTO ss09 SET runner_id='666',ss_date='2009-08-02',sex='F',age='55',score='30.613084',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='62.839927',gr_sc='43.465371',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("666 F55 30.613084<br>");
$sql = "INSERT INTO ss09 SET runner_id='667',ss_date='2009-08-02',sex='M',age='55',score='29.522804',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='42.892447',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("667 M55 29.522804<br>");
$sql = "INSERT INTO ss09 SET runner_id='673',ss_date='2009-08-02',sex='M',age='45',score='35.585501',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("673 M45 35.585501<br>");
$sql = "INSERT INTO ss09 SET runner_id='767',ss_date='2009-08-02',sex='M',age='40',score='63.505691',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("767 M40 63.505691<br>");
$sql = "INSERT INTO ss09 SET runner_id='783',ss_date='2009-08-02',sex='F',age='70',score='21.051322',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("783 F70 21.051322<br>");
$sql = "INSERT INTO ss09 SET runner_id='784',ss_date='2009-08-02',sex='F',age='50',score='18.608165',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("784 F50 18.608165<br>");
$sql = "INSERT INTO ss09 SET runner_id='797',ss_date='2009-08-02',sex='F',age='55',score='42.81709',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='59.626492',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("797 F55 42.81709<br>");
$sql = "INSERT INTO ss09 SET runner_id='798',ss_date='2009-08-02',sex='M',age='60',score='32.464581',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='67.885715',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("798 M60 32.464581<br>");
$sql = "INSERT INTO ss09 SET runner_id='799',ss_date='2009-08-02',sex='M',age='45',score='72.302275',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='74.909776',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("799 M45 72.302275<br>");
$sql = "INSERT INTO ss09 SET runner_id='862',ss_date='2009-08-02',sex='M',age='21',score='36.829929',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("862 M21 36.829929<br>");
$sql = "INSERT INTO ss09 SET runner_id='873',ss_date='2009-08-02',sex='M',age='65',score='47.414027',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='51.216474',bl_sc='60.904509'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("873 M65 47.414027<br>");
$sql = "INSERT INTO ss09 SET runner_id='899',ss_date='2009-08-02',sex='M',age='60',score='40.924861',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("899 M60 40.924861<br>");
$sql = "INSERT INTO ss09 SET runner_id='958',ss_date='2009-08-02',sex='M',age='45',score='15.383941',wh_sc='0',ye_sc='47.83817',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("958 M45 15.383941<br>");
$sql = "INSERT INTO ss09 SET runner_id='969',ss_date='2009-08-02',sex='F',age='21',score='44.335116',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='62.943513',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("969 F21 44.335116<br>");
$sql = "INSERT INTO ss09 SET runner_id='970',ss_date='2009-08-02',sex='F',age='55',score='18.178486',wh_sc='0',ye_sc='0',or_sc='37.542272',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("970 F55 18.178486<br>");
$sql = "INSERT INTO ss09 SET runner_id='1022',ss_date='2009-08-02',sex='M',age='14',score='48.414902',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1022 M14 48.414902<br>");
$sql = "INSERT INTO ss09 SET runner_id='1088',ss_date='2009-08-02',sex='M',age='60',score='35.901775',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='50.738879',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1088 M60 35.901775<br>");
$sql = "INSERT INTO ss09 SET runner_id='1189',ss_date='2009-08-02',sex='M',age='70',score='46.624884',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1189 M70 46.624884<br>");
$sql = "INSERT INTO ss09 SET runner_id='1198',ss_date='2009-08-02',sex='M',age='65',score='46.064251',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1198 M65 46.064251<br>");
$sql = "INSERT INTO ss09 SET runner_id='1218',ss_date='2009-08-02',sex='M',age='40',score='81.630831',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='88.216835',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1218 M40 81.630831<br>");
$sql = "INSERT INTO ss09 SET runner_id='1238',ss_date='2009-08-02',sex='M',age='55',score='26.917787',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='42.819831',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1238 M55 26.917787<br>");
$sql = "INSERT INTO ss09 SET runner_id='1250',ss_date='2009-08-02',sex='M',age='35',score='100.093826',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='105.165955',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1250 M35 100.093826<br>");
$sql = "INSERT INTO ss09 SET runner_id='1282',ss_date='2009-08-02',sex='F',age='50',score='47.344239',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1282 F50 47.344239<br>");
$sql = "INSERT INTO ss09 SET runner_id='1318',ss_date='2009-08-02',sex='M',age='50',score='22.054948',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='44.771449',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1318 M50 22.054948<br>");
$sql = "INSERT INTO ss09 SET runner_id='1364',ss_date='2009-08-02',sex='M',age='40',score='60.339367',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='64.736578',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1364 M40 60.339367<br>");
$sql = "INSERT INTO ss09 SET runner_id='1397',ss_date='2009-08-02',sex='M',age='16',score='51.792329',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1397 M16 51.792329<br>");
$sql = "INSERT INTO ss09 SET runner_id='1398',ss_date='2009-08-02',sex='M',age='45',score='30.197659',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1398 M45 30.197659<br>");
$sql = "INSERT INTO ss09 SET runner_id='1432',ss_date='2009-08-02',sex='M',age='45',score='80.900436',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='82.312345',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1432 M45 80.900436<br>");
$sql = "INSERT INTO ss09 SET runner_id='1480',ss_date='2009-08-02',sex='F',age='21',score='19.953901',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='42.109128',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1480 F21 19.953901<br>");
$sql = "INSERT INTO ss09 SET runner_id='1503',ss_date='2009-08-02',sex='F',age='55',score='22.186035',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='43.393291',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1503 F55 22.186035<br>");
$sql = "INSERT INTO ss09 SET runner_id='1504',ss_date='2009-08-02',sex='M',age='60',score='40.625615',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='63.134437',re_sc='33.941351',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1504 M60 40.625615<br>");
$sql = "INSERT INTO ss09 SET runner_id='1518',ss_date='2009-08-02',sex='F',age='21',score='79.064929',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1518 F21 79.064929<br>");
$sql = "INSERT INTO ss09 SET runner_id='1519',ss_date='2009-08-02',sex='M',age='50',score='34.99283',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1519 M50 34.99283<br>");
$sql = "INSERT INTO ss09 SET runner_id='1548',ss_date='2009-08-02',sex='F',age='40',score='30.383569',wh_sc='0',ye_sc='0',or_sc='51.775745',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1548 F40 30.383569<br>");
$sql = "INSERT INTO ss09 SET runner_id='1567',ss_date='2009-08-02',sex='M',age='50',score='60.051944',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='64.976999',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1567 M50 60.051944<br>");
$sql = "INSERT INTO ss09 SET runner_id='1570',ss_date='2009-08-02',sex='M',age='18',score='55.553721',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='78.402545',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1570 M18 55.553721<br>");
$sql = "INSERT INTO ss09 SET runner_id='1603',ss_date='2009-08-02',sex='F',age='35',score='66.542842',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='90.226262',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1603 F35 66.542842<br>");
$sql = "INSERT INTO ss09 SET runner_id='1606',ss_date='2009-08-02',sex='M',age='35',score='98.774006',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='106.617209',bl_sc='127.820211'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1606 M35 98.774006<br>");
$sql = "INSERT INTO ss09 SET runner_id='1667',ss_date='2009-08-02',sex='M',age='50',score='39.37234',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='80.582923',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1667 M50 39.37234<br>");
$sql = "INSERT INTO ss09 SET runner_id='1676',ss_date='2009-08-02',sex='F',age='55',score='24.497657',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='33.808801',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1676 F55 24.497657<br>");
$sql = "INSERT INTO ss09 SET runner_id='1718',ss_date='2009-08-02',sex='M',age='60',score='49.418355',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='97.373179',gr_sc='72.551162',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1718 M60 49.418355<br>");
$sql = "INSERT INTO ss09 SET runner_id='1739',ss_date='2009-08-02',sex='M',age='70',score='38.54839',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='80.908785',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1739 M70 38.54839<br>");
$sql = "INSERT INTO ss09 SET runner_id='1746',ss_date='2009-08-02',sex='F',age='50',score='37.72442',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='79.536958',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1746 F50 37.72442<br>");
$sql = "INSERT INTO ss09 SET runner_id='1771',ss_date='2009-08-02',sex='F',age='60',score='24.853587',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='46.803335',gr_sc='31.75344',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1771 F60 24.853587<br>");
$sql = "INSERT INTO ss09 SET runner_id='1878',ss_date='2009-08-02',sex='F',age='50',score='29.402193',wh_sc='0',ye_sc='81.753208',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1878 F50 29.402193<br>");
$sql = "INSERT INTO ss09 SET runner_id='1879',ss_date='2009-08-02',sex='M',age='50',score='54.486126',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='79.185636',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1879 M50 54.486126<br>");
$sql = "INSERT INTO ss09 SET runner_id='1916',ss_date='2009-08-02',sex='F',age='55',score='26.961077',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='57.243211',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1916 F55 26.961077<br>");
$sql = "INSERT INTO ss09 SET runner_id='1923',ss_date='2009-08-02',sex='M',age='14',score='43.393575',wh_sc='0',ye_sc='133.287678',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1923 M14 43.393575<br>");
$sql = "INSERT INTO ss09 SET runner_id='1925',ss_date='2009-08-02',sex='M',age='16',score='50.342618',wh_sc='0',ye_sc='0',or_sc='108.398403',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1925 M16 50.342618<br>");
$sql = "INSERT INTO ss09 SET runner_id='1926',ss_date='2009-08-02',sex='M',age='18',score='54.922358',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1926 M18 54.922358<br>");
$sql = "INSERT INTO ss09 SET runner_id='1928',ss_date='2009-08-02',sex='M',age='50',score='66.054443',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='80.684685',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1928 M50 66.054443<br>");
$sql = "INSERT INTO ss09 SET runner_id='1953',ss_date='2009-08-02',sex='M',age='55',score='55.2807',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1953 M55 55.2807<br>");
$sql = "INSERT INTO ss09 SET runner_id='1991',ss_date='2009-08-02',sex='M',age='60',score='31.150619',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='72.241661',gr_sc='41.876928',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1991 M60 31.150619<br>");
$sql = "INSERT INTO ss09 SET runner_id='1992',ss_date='2009-08-02',sex='F',age='60',score='23.543765',wh_sc='0',ye_sc='0',or_sc='47.143234',bn_sc='49.734925',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1992 F60 23.543765<br>");
$sql = "INSERT INTO ss09 SET runner_id='2108',ss_date='2009-08-02',sex='M',age='60',score='36.612011',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='38.721438',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2108 M60 36.612011<br>");
$sql = "INSERT INTO ss09 SET runner_id='2122',ss_date='2009-08-02',sex='M',age='55',score='49.787789',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='69.282082',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2122 M55 49.787789<br>");
$sql = "INSERT INTO ss09 SET runner_id='2160',ss_date='2009-08-02',sex='M',age='65',score='45.14182',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='63.307817',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2160 M65 45.14182<br>");
$sql = "INSERT INTO ss09 SET runner_id='2198',ss_date='2009-08-02',sex='F',age='40',score='53.139119',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='74.674362',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2198 F40 53.139119<br>");
$sql = "INSERT INTO ss09 SET runner_id='2200',ss_date='2009-08-02',sex='M',age='10',score='19.269372',wh_sc='0',ye_sc='61.003468',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2200 M10 19.269372<br>");
$sql = "INSERT INTO ss09 SET runner_id='2201',ss_date='2009-08-02',sex='M',age='18',score='26.381649',wh_sc='0',ye_sc='0',or_sc='51.856246',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2201 M18 26.381649<br>");
$sql = "INSERT INTO ss09 SET runner_id='2227',ss_date='2009-08-02',sex='M',age='40',score='60.345278',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='65.061598',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2227 M40 60.345278<br>");
$sql = "INSERT INTO ss09 SET runner_id='2254',ss_date='2009-08-02',sex='F',age='16',score='25.690429',wh_sc='0',ye_sc='84.959114',or_sc='45.757788',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2254 F16 25.690429<br>");
$sql = "INSERT INTO ss09 SET runner_id='2255',ss_date='2009-08-02',sex='G',age='2',score='38.62694',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2255 G2 38.62694<br>");
$sql = "INSERT INTO ss09 SET runner_id='2257',ss_date='2009-08-02',sex='M',age='50',score='15.8277',wh_sc='0',ye_sc='50.681295',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2257 M50 15.8277<br>");
$sql = "INSERT INTO ss09 SET runner_id='2267',ss_date='2009-08-02',sex='M',age='45',score='26.281315',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2267 M45 26.281315<br>");
$sql = "INSERT INTO ss09 SET runner_id='2275',ss_date='2009-08-02',sex='M',age='21',score='40.374368',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2275 M21 40.374368<br>");
$sql = "INSERT INTO ss09 SET runner_id='2303',ss_date='2009-08-02',sex='G',age='2',score='25.532506',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='41.702932',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2303 G2 25.532506<br>");
$sql = "INSERT INTO ss09 SET runner_id='2312',ss_date='2009-08-02',sex='G',age='2',score='23.852997',wh_sc='100',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2312 G2 23.852997<br>");
$sql = "INSERT INTO ss09 SET runner_id='2412',ss_date='2009-08-02',sex='M',age='21',score='51.971113',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2412 M21 51.971113<br>");
$sql = "INSERT INTO ss09 SET runner_id='2414',ss_date='2009-08-02',sex='M',age='60',score='25.201363',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2414 M60 25.201363<br>");
$sql = "INSERT INTO ss09 SET runner_id='2473',ss_date='2009-08-02',sex='F',age='16',score='22.378698',wh_sc='0',ye_sc='69.911405',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2473 F16 22.378698<br>");
$sql = "INSERT INTO ss09 SET runner_id='2481',ss_date='2009-08-02',sex='M',age='45',score='37.295112',wh_sc='0',ye_sc='0',or_sc='73.131505',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2481 M45 37.295112<br>");
$sql = "INSERT INTO ss09 SET runner_id='2481',ss_date='2009-08-30',sex='M',age='45',score='39.568611',wh_sc='0',ye_sc='0',or_sc='73.804097',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2481 M45 39.568611<br>");
$sql = "INSERT INTO ss09 SET runner_id='2473',ss_date='2009-08-30',sex='F',age='16',score='23.432209',wh_sc='0',ye_sc='63.41793',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2473 F16 23.432209<br>");
$sql = "INSERT INTO ss09 SET runner_id='2414',ss_date='2009-08-30',sex='M',age='60',score='26.250801',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2414 M60 26.250801<br>");
$sql = "INSERT INTO ss09 SET runner_id='2412',ss_date='2009-08-30',sex='M',age='21',score='52.149182',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2412 M21 52.149182<br>");
$sql = "INSERT INTO ss09 SET runner_id='2312',ss_date='2009-08-30',sex='G',age='2',score='24.864101',wh_sc='100',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2312 G2 24.864101<br>");
$sql = "INSERT INTO ss09 SET runner_id='2303',ss_date='2009-08-30',sex='G',age='2',score='25.868038',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='42.279076',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2303 G2 25.868038<br>");
$sql = "INSERT INTO ss09 SET runner_id='2275',ss_date='2009-08-30',sex='M',age='21',score='42.052074',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2275 M21 42.052074<br>");
$sql = "INSERT INTO ss09 SET runner_id='2267',ss_date='2009-08-30',sex='M',age='45',score='26.396116',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2267 M45 26.396116<br>");
$sql = "INSERT INTO ss09 SET runner_id='2257',ss_date='2009-08-30',sex='M',age='50',score='17.925466',wh_sc='0',ye_sc='42.593628',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2257 M50 17.925466<br>");
$sql = "INSERT INTO ss09 SET runner_id='2255',ss_date='2009-08-30',sex='G',age='2',score='38.481341',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2255 G2 38.481341<br>");
$sql = "INSERT INTO ss09 SET runner_id='2254',ss_date='2009-08-30',sex='F',age='16',score='26.829191',wh_sc='0',ye_sc='76.321818',or_sc='45.145178',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2254 F16 26.829191<br>");
$sql = "INSERT INTO ss09 SET runner_id='2227',ss_date='2009-08-30',sex='M',age='40',score='60.364764',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='64.752305',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2227 M40 60.364764<br>");
$sql = "INSERT INTO ss09 SET runner_id='2201',ss_date='2009-08-30',sex='M',age='18',score='27.299581',wh_sc='0',ye_sc='0',or_sc='51.020655',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2201 M18 27.299581<br>");
$sql = "INSERT INTO ss09 SET runner_id='2200',ss_date='2009-08-30',sex='M',age='10',score='20.375028',wh_sc='0',ye_sc='54.869534',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2200 M10 20.375028<br>");
$sql = "INSERT INTO ss09 SET runner_id='2198',ss_date='2009-08-30',sex='F',age='40',score='53.44658',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='75.010692',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2198 F40 53.44658<br>");
$sql = "INSERT INTO ss09 SET runner_id='2160',ss_date='2009-08-30',sex='M',age='65',score='45.424396',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='63.699373',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2160 M65 45.424396<br>");
$sql = "INSERT INTO ss09 SET runner_id='2122',ss_date='2009-08-30',sex='M',age='55',score='50.356994',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='69.639158',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2122 M55 50.356994<br>");
$sql = "INSERT INTO ss09 SET runner_id='2108',ss_date='2009-08-30',sex='M',age='60',score='36.664619',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='38.565103',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2108 M60 36.664619<br>");
$sql = "INSERT INTO ss09 SET runner_id='1992',ss_date='2009-08-30',sex='F',age='60',score='23.717701',wh_sc='0',ye_sc='0',or_sc='44.886344',bn_sc='49.503098',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1992 F60 23.717701<br>");
$sql = "INSERT INTO ss09 SET runner_id='1991',ss_date='2009-08-30',sex='M',age='60',score='31.662152',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='72.437888',gr_sc='43.251015',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1991 M60 31.662152<br>");
$sql = "INSERT INTO ss09 SET runner_id='1953',ss_date='2009-08-30',sex='M',age='55',score='55.617621',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1953 M55 55.617621<br>");
$sql = "INSERT INTO ss09 SET runner_id='1928',ss_date='2009-08-30',sex='M',age='50',score='65.280613',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='81.060277',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1928 M50 65.280613<br>");
$sql = "INSERT INTO ss09 SET runner_id='1926',ss_date='2009-08-30',sex='M',age='18',score='57.448416',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='69.679491',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1926 M18 57.448416<br>");
$sql = "INSERT INTO ss09 SET runner_id='1925',ss_date='2009-08-30',sex='M',age='16',score='50.302675',wh_sc='0',ye_sc='0',or_sc='106.723219',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1925 M16 50.302675<br>");
$sql = "INSERT INTO ss09 SET runner_id='1923',ss_date='2009-08-30',sex='M',age='14',score='45.249316',wh_sc='0',ye_sc='119.800802',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1923 M14 45.249316<br>");
$sql = "INSERT INTO ss09 SET runner_id='1916',ss_date='2009-08-30',sex='F',age='55',score='27.206871',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='56.869155',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1916 F55 27.206871<br>");
$sql = "INSERT INTO ss09 SET runner_id='1879',ss_date='2009-08-30',sex='M',age='50',score='54.47233',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='78.786998',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1879 M50 54.47233<br>");
$sql = "INSERT INTO ss09 SET runner_id='1878',ss_date='2009-08-30',sex='F',age='50',score='30.550746',wh_sc='0',ye_sc='73.466107',or_sc='64.733411',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1878 F50 30.550746<br>");
$sql = "INSERT INTO ss09 SET runner_id='1812',ss_date='2009-08-30',sex='F',age='45',score='27.497174',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1812 F45 27.497174<br>");
$sql = "INSERT INTO ss09 SET runner_id='1771',ss_date='2009-08-30',sex='F',age='60',score='26.355858',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='46.398088',gr_sc='35.809029',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1771 F60 26.355858<br>");
$sql = "INSERT INTO ss09 SET runner_id='1746',ss_date='2009-08-30',sex='F',age='50',score='38.106878',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='79.065972',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1746 F50 38.106878<br>");
$sql = "INSERT INTO ss09 SET runner_id='1739',ss_date='2009-08-30',sex='M',age='70',score='38.936053',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='80.595564',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1739 M70 38.936053<br>");
$sql = "INSERT INTO ss09 SET runner_id='1718',ss_date='2009-08-30',sex='M',age='60',score='49.73134',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='96.488201',gr_sc='73.25981',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1718 M60 49.73134<br>");
$sql = "INSERT INTO ss09 SET runner_id='1676',ss_date='2009-08-30',sex='F',age='55',score='24.358198',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='34.493333',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1676 F55 24.358198<br>");
$sql = "INSERT INTO ss09 SET runner_id='1667',ss_date='2009-08-30',sex='M',age='50',score='39.707211',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='79.907616',gr_sc='56.358995',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1667 M50 39.707211<br>");
$sql = "INSERT INTO ss09 SET runner_id='1606',ss_date='2009-08-30',sex='M',age='35',score='98.784493',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='106.446616',bl_sc='127.820211'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1606 M35 98.784493<br>");
$sql = "INSERT INTO ss09 SET runner_id='1603',ss_date='2009-08-30',sex='F',age='35',score='67.545231',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='90.600793',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1603 F35 67.545231<br>");
$sql = "INSERT INTO ss09 SET runner_id='1602',ss_date='2009-08-30',sex='M',age='10',score='38.055212',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1602 M10 38.055212<br>");
$sql = "INSERT INTO ss09 SET runner_id='1570',ss_date='2009-08-30',sex='M',age='18',score='57.663541',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='81.702515',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1570 M18 57.663541<br>");
$sql = "INSERT INTO ss09 SET runner_id='1567',ss_date='2009-08-30',sex='M',age='50',score='60.55241',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='64.911166',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1567 M50 60.55241<br>");
$sql = "INSERT INTO ss09 SET runner_id='1548',ss_date='2009-08-30',sex='F',age='40',score='33.079428',wh_sc='0',ye_sc='0',or_sc='50.927714',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1548 F40 33.079428<br>");
$sql = "INSERT INTO ss09 SET runner_id='1540',ss_date='2009-08-30',sex='M',age='45',score='28.307158',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1540 M45 28.307158<br>");
$sql = "INSERT INTO ss09 SET runner_id='1519',ss_date='2009-08-30',sex='M',age='50',score='35.151899',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1519 M50 35.151899<br>");
$sql = "INSERT INTO ss09 SET runner_id='1518',ss_date='2009-08-30',sex='F',age='21',score='78.869602',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1518 F21 78.869602<br>");
$sql = "INSERT INTO ss09 SET runner_id='1504',ss_date='2009-08-30',sex='M',age='60',score='40.780611',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='63.681948',re_sc='33.769283',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1504 M60 40.780611<br>");
$sql = "INSERT INTO ss09 SET runner_id='1503',ss_date='2009-08-30',sex='F',age='55',score='21.659861',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='40.39303',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1503 F55 21.659861<br>");
$sql = "INSERT INTO ss09 SET runner_id='1480',ss_date='2009-08-30',sex='F',age='21',score='28.950718',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='41.841431',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1480 F21 28.950718<br>");
$sql = "INSERT INTO ss09 SET runner_id='1432',ss_date='2009-08-30',sex='M',age='45',score='81.318706',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='82.870702',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1432 M45 81.318706<br>");
$sql = "INSERT INTO ss09 SET runner_id='1398',ss_date='2009-08-30',sex='M',age='45',score='34.969523',wh_sc='0',ye_sc='103.87738',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1398 M45 34.969523<br>");
$sql = "INSERT INTO ss09 SET runner_id='1397',ss_date='2009-08-30',sex='M',age='16',score='54.279292',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='57.140507',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1397 M16 54.279292<br>");
$sql = "INSERT INTO ss09 SET runner_id='1364',ss_date='2009-08-30',sex='M',age='40',score='60.59108',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='64.576073',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1364 M40 60.59108<br>");
$sql = "INSERT INTO ss09 SET runner_id='1318',ss_date='2009-08-30',sex='M',age='50',score='22.090002',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='44.471911',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1318 M50 22.090002<br>");
$sql = "INSERT INTO ss09 SET runner_id='1282',ss_date='2009-08-30',sex='F',age='50',score='47.25234',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1282 F50 47.25234<br>");
$sql = "INSERT INTO ss09 SET runner_id='1250',ss_date='2009-08-30',sex='M',age='35',score='100.159215',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='105.209804',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1250 M35 100.159215<br>");
$sql = "INSERT INTO ss09 SET runner_id='1238',ss_date='2009-08-30',sex='M',age='55',score='29.002505',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='43.260418',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1238 M55 29.002505<br>");
$sql = "INSERT INTO ss09 SET runner_id='1218',ss_date='2009-08-30',sex='M',age='40',score='82.093388',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='88.34358',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1218 M40 82.093388<br>");
$sql = "INSERT INTO ss09 SET runner_id='1198',ss_date='2009-08-30',sex='M',age='65',score='45.596305',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='63.142768',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1198 M65 45.596305<br>");
$sql = "INSERT INTO ss09 SET runner_id='1190',ss_date='2009-08-30',sex='M',age='40',score='63.840987',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1190 M40 63.840987<br>");
$sql = "INSERT INTO ss09 SET runner_id='1189',ss_date='2009-08-30',sex='M',age='70',score='47.043446',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1189 M70 47.043446<br>");
$sql = "INSERT INTO ss09 SET runner_id='1151',ss_date='2009-08-30',sex='F',age='65',score='19.318329',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='40.578804',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1151 F65 19.318329<br>");
$sql = "INSERT INTO ss09 SET runner_id='1088',ss_date='2009-08-30',sex='M',age='60',score='37.993718',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='53.458241',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1088 M60 37.993718<br>");
$sql = "INSERT INTO ss09 SET runner_id='1022',ss_date='2009-08-30',sex='M',age='14',score='46.354332',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1022 M14 46.354332<br>");
$sql = "INSERT INTO ss09 SET runner_id='970',ss_date='2009-08-30',sex='F',age='55',score='19.695703',wh_sc='0',ye_sc='0',or_sc='39.824868',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("970 F55 19.695703<br>");
$sql = "INSERT INTO ss09 SET runner_id='969',ss_date='2009-08-30',sex='F',age='21',score='44.301621',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='62.422252',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("969 F21 44.301621<br>");
$sql = "INSERT INTO ss09 SET runner_id='958',ss_date='2009-08-30',sex='M',age='45',score='16.370566',wh_sc='0',ye_sc='43.004063',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("958 M45 16.370566<br>");
$sql = "INSERT INTO ss09 SET runner_id='899',ss_date='2009-08-30',sex='M',age='60',score='41.012337',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("899 M60 41.012337<br>");
$sql = "INSERT INTO ss09 SET runner_id='862',ss_date='2009-08-30',sex='M',age='21',score='38.385851',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("862 M21 38.385851<br>");
$sql = "INSERT INTO ss09 SET runner_id='799',ss_date='2009-08-30',sex='M',age='45',score='72.521812',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='74.973955',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("799 M45 72.521812<br>");
$sql = "INSERT INTO ss09 SET runner_id='798',ss_date='2009-08-30',sex='M',age='60',score='32.325597',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='66.840439',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("798 M60 32.325597<br>");
$sql = "INSERT INTO ss09 SET runner_id='797',ss_date='2009-08-30',sex='F',age='55',score='44.05839',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='60.074965',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("797 F55 44.05839<br>");
$sql = "INSERT INTO ss09 SET runner_id='796',ss_date='2009-08-30',sex='M',age='60',score='27.979793',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("796 M60 27.979793<br>");
$sql = "INSERT INTO ss09 SET runner_id='784',ss_date='2009-08-30',sex='F',age='50',score='18.961435',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("784 F50 18.961435<br>");
$sql = "INSERT INTO ss09 SET runner_id='783',ss_date='2009-08-30',sex='F',age='70',score='20.80488',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("783 F70 20.80488<br>");
$sql = "INSERT INTO ss09 SET runner_id='767',ss_date='2009-08-30',sex='M',age='40',score='64.170155',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='55.165148',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("767 M40 64.170155<br>");
$sql = "INSERT INTO ss09 SET runner_id='673',ss_date='2009-08-30',sex='M',age='45',score='35.72661',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("673 M45 35.72661<br>");
$sql = "INSERT INTO ss09 SET runner_id='667',ss_date='2009-08-30',sex='M',age='55',score='29.666429',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='54.903263',gr_sc='43.215287',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("667 M55 29.666429<br>");
$sql = "INSERT INTO ss09 SET runner_id='666',ss_date='2009-08-30',sex='F',age='55',score='30.708988',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='62.246814',gr_sc='43.743937',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("666 F55 30.708988<br>");
$sql = "INSERT INTO ss09 SET runner_id='636',ss_date='2009-08-30',sex='F',age='35',score='46.292328',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='64.507915',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("636 F35 46.292328<br>");
$sql = "INSERT INTO ss09 SET runner_id='634',ss_date='2009-08-30',sex='M',age='40',score='46.619198',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='97.669067',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("634 M40 46.619198<br>");
$sql = "INSERT INTO ss09 SET runner_id='633',ss_date='2009-08-30',sex='M',age='16',score='33.860339',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("633 M16 33.860339<br>");
$sql = "INSERT INTO ss09 SET runner_id='630',ss_date='2009-08-30',sex='M',age='40',score='28.24788',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("630 M40 28.24788<br>");
$sql = "INSERT INTO ss09 SET runner_id='626',ss_date='2009-08-30',sex='M',age='21',score='72.633165',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='76.909828',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("626 M21 72.633165<br>");
$sql = "INSERT INTO ss09 SET runner_id='616',ss_date='2009-08-30',sex='M',age='16',score='24.254796',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='53.066203',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("616 M16 24.254796<br>");
$sql = "INSERT INTO ss09 SET runner_id='614',ss_date='2009-08-30',sex='F',age='50',score='48.518507',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='65.307327',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("614 F50 48.518507<br>");
$sql = "INSERT INTO ss09 SET runner_id='613',ss_date='2009-08-30',sex='M',age='50',score='56.587286',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='77.754281',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("613 M50 56.587286<br>");
$sql = "INSERT INTO ss09 SET runner_id='606',ss_date='2009-08-30',sex='M',age='21',score='44.988893',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("606 M21 44.988893<br>");
$sql = "INSERT INTO ss09 SET runner_id='601',ss_date='2009-08-30',sex='M',age='60',score='33.970406',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("601 M60 33.970406<br>");
$sql = "INSERT INTO ss09 SET runner_id='568',ss_date='2009-08-30',sex='F',age='55',score='20.662757',wh_sc='0',ye_sc='0',or_sc='41.560998',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("568 F55 20.662757<br>");
$sql = "INSERT INTO ss09 SET runner_id='567',ss_date='2009-08-30',sex='M',age='55',score='58.746534',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='79.633875',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("567 M55 58.746534<br>");
$sql = "INSERT INTO ss09 SET runner_id='545',ss_date='2009-08-30',sex='M',age='21',score='76.951649',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='81.901673',bl_sc='102.577022'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("545 M21 76.951649<br>");
$sql = "INSERT INTO ss09 SET runner_id='522',ss_date='2009-08-30',sex='F',age='50',score='31.480964',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='65.179932',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("522 F50 31.480964<br>");
$sql = "INSERT INTO ss09 SET runner_id='499',ss_date='2009-08-30',sex='M',age='50',score='37.131974',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='52.196025',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("499 M50 37.131974<br>");
$sql = "INSERT INTO ss09 SET runner_id='463',ss_date='2009-08-30',sex='M',age='45',score='30.044831',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='54.480052',gr_sc='40.328189',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("463 M45 30.044831<br>");
$sql = "INSERT INTO ss09 SET runner_id='428',ss_date='2009-08-30',sex='M',age='50',score='38.172485',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='75.898097',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("428 M50 38.172485<br>");
$sql = "INSERT INTO ss09 SET runner_id='418',ss_date='2009-08-30',sex='M',age='60',score='44.270496',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("418 M60 44.270496<br>");
$sql = "INSERT INTO ss09 SET runner_id='376',ss_date='2009-08-30',sex='M',age='50',score='65.743874',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='55.336839',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("376 M50 65.743874<br>");
$sql = "INSERT INTO ss09 SET runner_id='270',ss_date='2009-08-30',sex='M',age='50',score='79.004662',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='110.790101',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("270 M50 79.004662<br>");
$sql = "INSERT INTO ss09 SET runner_id='269',ss_date='2009-08-30',sex='F',age='14',score='38.446871',wh_sc='0',ye_sc='0',or_sc='78.042989',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("269 F14 38.446871<br>");
$sql = "INSERT INTO ss09 SET runner_id='267',ss_date='2009-08-30',sex='F',age='18',score='59.143062',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("267 F18 59.143062<br>");
$sql = "INSERT INTO ss09 SET runner_id='254',ss_date='2009-08-30',sex='F',age='55',score='21.717166',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("254 F55 21.717166<br>");
$sql = "INSERT INTO ss09 SET runner_id='253',ss_date='2009-08-30',sex='M',age='40',score='31.052343',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("253 M40 31.052343<br>");
$sql = "INSERT INTO ss09 SET runner_id='248',ss_date='2009-08-30',sex='M',age='60',score='49.513444',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='105.842731',gr_sc='66.829639',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("248 M60 49.513444<br>");
$sql = "INSERT INTO ss09 SET runner_id='226',ss_date='2009-08-30',sex='M',age='80',score='23.74252',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='38.22508',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("226 M80 23.74252<br>");
$sql = "INSERT INTO ss09 SET runner_id='176',ss_date='2009-08-30',sex='M',age='55',score='71.713202',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='98.609106',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("176 M55 71.713202<br>");
$sql = "INSERT INTO ss09 SET runner_id='169',ss_date='2009-08-30',sex='M',age='60',score='28.3218',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='39.897103',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("169 M60 28.3218<br>");
$sql = "INSERT INTO ss09 SET runner_id='162',ss_date='2009-08-30',sex='M',age='35',score='51.913668',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='50.069843',bl_sc='69.602767'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("162 M35 51.913668<br>");
$sql = "INSERT INTO ss09 SET runner_id='131',ss_date='2009-08-30',sex='M',age='40',score='101.056292',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='84.666694',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("131 M40 101.056292<br>");
$sql = "INSERT INTO ss09 SET runner_id='100',ss_date='2009-08-30',sex='F',age='16',score='25.710217',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("100 F16 25.710217<br>");
$sql = "INSERT INTO ss09 SET runner_id='96',ss_date='2009-08-30',sex='M',age='55',score='43.180293',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='61.207471',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("96 M55 43.180293<br>");
$sql = "INSERT INTO ss09 SET runner_id='87',ss_date='2009-08-30',sex='M',age='16',score='61.919925',wh_sc='0',ye_sc='0',or_sc='115.233792',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("87 M16 61.919925<br>");
$sql = "INSERT INTO ss09 SET runner_id='86',ss_date='2009-08-30',sex='M',age='50',score='43.168656',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='45.858741',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("86 M50 43.168656<br>");
$sql = "INSERT INTO ss09 SET runner_id='69',ss_date='2009-08-30',sex='M',age='45',score='53.921493',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='58.384335',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("69 M45 53.921493<br>");
$sql = "INSERT INTO ss09 SET runner_id='48',ss_date='2009-08-30',sex='M',age='50',score='38.783789',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='54.676643',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("48 M50 38.783789<br>");
$sql = "INSERT INTO ss09 SET runner_id='13',ss_date='2009-08-30',sex='M',age='45',score='70.362858',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='74.470292',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("13 M45 70.362858<br>");
$sql = "INSERT INTO ss09 SET runner_id='12',ss_date='2009-08-30',sex='M',age='20',score='84.294006',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("12 M20 84.294006<br>");
$sql = "INSERT INTO ss09 SET runner_id='2',ss_date='2009-08-30',sex='F',age='45',score='39.953378',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='56.151874',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2 F45 39.953378<br>");
$sql = "INSERT INTO ss09 SET runner_id='2',ss_date='2009-09-05',sex='F',age='45',score='40.118284',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='56.151874',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2 F45 40.118284<br>");
$sql = "INSERT INTO ss09 SET runner_id='12',ss_date='2009-09-05',sex='M',age='20',score='84.264243',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("12 M20 84.264243<br>");
$sql = "INSERT INTO ss09 SET runner_id='13',ss_date='2009-09-05',sex='M',age='45',score='70.360375',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='74.470292',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("13 M45 70.360375<br>");
$sql = "INSERT INTO ss09 SET runner_id='48',ss_date='2009-09-05',sex='M',age='50',score='38.969253',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='54.676643',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("48 M50 38.969253<br>");
$sql = "INSERT INTO ss09 SET runner_id='69',ss_date='2009-09-05',sex='M',age='45',score='53.919648',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='58.384335',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("69 M45 53.919648<br>");
$sql = "INSERT INTO ss09 SET runner_id='86',ss_date='2009-09-05',sex='M',age='50',score='43.217715',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='45.858741',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("86 M50 43.217715<br>");
$sql = "INSERT INTO ss09 SET runner_id='87',ss_date='2009-09-05',sex='M',age='16',score='62.120563',wh_sc='0',ye_sc='0',or_sc='115.23482',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("87 M16 62.120563<br>");
$sql = "INSERT INTO ss09 SET runner_id='96',ss_date='2009-09-05',sex='M',age='55',score='43.348483',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='61.207471',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("96 M55 43.348483<br>");
$sql = "INSERT INTO ss09 SET runner_id='100',ss_date='2009-09-05',sex='F',age='16',score='25.92378',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("100 F16 25.92378<br>");
$sql = "INSERT INTO ss09 SET runner_id='131',ss_date='2009-09-05',sex='M',age='40',score='101.052189',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='84.666694',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("131 M40 101.052189<br>");
$sql = "INSERT INTO ss09 SET runner_id='162',ss_date='2009-09-05',sex='M',age='35',score='51.946492',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='50.069843',bl_sc='69.602767'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("162 M35 51.946492<br>");
$sql = "INSERT INTO ss09 SET runner_id='169',ss_date='2009-09-05',sex='M',age='60',score='28.449179',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='39.897103',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("169 M60 28.449179<br>");
$sql = "INSERT INTO ss09 SET runner_id='176',ss_date='2009-09-05',sex='M',age='55',score='71.928469',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='98.609106',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("176 M55 71.928469<br>");
$sql = "INSERT INTO ss09 SET runner_id='226',ss_date='2009-09-05',sex='M',age='80',score='24.140069',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='38.22508',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("226 M80 24.140069<br>");
$sql = "INSERT INTO ss09 SET runner_id='248',ss_date='2009-09-05',sex='M',age='60',score='49.806093',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='105.842731',gr_sc='66.829639',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("248 M60 49.806093<br>");
$sql = "INSERT INTO ss09 SET runner_id='253',ss_date='2009-09-05',sex='M',age='40',score='31.277707',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("253 M40 31.277707<br>");
$sql = "INSERT INTO ss09 SET runner_id='254',ss_date='2009-09-05',sex='F',age='55',score='21.872302',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("254 F55 21.872302<br>");
$sql = "INSERT INTO ss09 SET runner_id='267',ss_date='2009-09-05',sex='F',age='18',score='59.161417',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("267 F18 59.161417<br>");
$sql = "INSERT INTO ss09 SET runner_id='269',ss_date='2009-09-05',sex='F',age='14',score='37.931481',wh_sc='0',ye_sc='0',or_sc='78.042034',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("269 F14 37.931481<br>");
$sql = "INSERT INTO ss09 SET runner_id='270',ss_date='2009-09-05',sex='M',age='50',score='79.368785',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='110.790101',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("270 M50 79.368785<br>");
$sql = "INSERT INTO ss09 SET runner_id='376',ss_date='2009-09-05',sex='M',age='50',score='65.718652',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='55.336839',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("376 M50 65.718652<br>");
$sql = "INSERT INTO ss09 SET runner_id='418',ss_date='2009-09-05',sex='M',age='60',score='44.442014',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("418 M60 44.442014<br>");
$sql = "INSERT INTO ss09 SET runner_id='428',ss_date='2009-09-05',sex='M',age='50',score='38.997765',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='75.898097',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("428 M50 38.997765<br>");
$sql = "INSERT INTO ss09 SET runner_id='463',ss_date='2009-09-05',sex='M',age='45',score='30.204218',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='54.480052',gr_sc='40.328189',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("463 M45 30.204218<br>");
$sql = "INSERT INTO ss09 SET runner_id='499',ss_date='2009-09-05',sex='M',age='50',score='37.281278',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='52.196025',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("499 M50 37.281278<br>");
$sql = "INSERT INTO ss09 SET runner_id='522',ss_date='2009-09-05',sex='F',age='50',score='31.679717',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='65.179932',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("522 F50 31.679717<br>");
$sql = "INSERT INTO ss09 SET runner_id='545',ss_date='2009-09-05',sex='M',age='21',score='76.939157',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='81.901673',bl_sc='102.577022'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("545 M21 76.939157<br>");
$sql = "INSERT INTO ss09 SET runner_id='567',ss_date='2009-09-05',sex='M',age='55',score='59.020495',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='79.633875',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("567 M55 59.020495<br>");
$sql = "INSERT INTO ss09 SET runner_id='568',ss_date='2009-09-05',sex='F',age='55',score='20.594464',wh_sc='0',ye_sc='0',or_sc='41.560641',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("568 F55 20.594464<br>");
$sql = "INSERT INTO ss09 SET runner_id='600',ss_date='2009-09-05',sex='M',age='35',score='23.572722',wh_sc='101.287705',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("600 M35 23.572722<br>");
$sql = "INSERT INTO ss09 SET runner_id='601',ss_date='2009-09-05',sex='M',age='60',score='35.47215',wh_sc='0',ye_sc='97.108489',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("601 M60 35.47215<br>");
$sql = "INSERT INTO ss09 SET runner_id='606',ss_date='2009-09-05',sex='M',age='21',score='45.118148',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("606 M21 45.118148<br>");
$sql = "INSERT INTO ss09 SET runner_id='613',ss_date='2009-09-05',sex='M',age='50',score='56.797764',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='77.754281',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("613 M50 56.797764<br>");
$sql = "INSERT INTO ss09 SET runner_id='614',ss_date='2009-09-05',sex='F',age='50',score='48.729837',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='65.307327',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("614 F50 48.729837<br>");
$sql = "INSERT INTO ss09 SET runner_id='616',ss_date='2009-09-05',sex='M',age='16',score='24.369506',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='53.066203',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("616 M16 24.369506<br>");
$sql = "INSERT INTO ss09 SET runner_id='626',ss_date='2009-09-05',sex='M',age='21',score='72.699083',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='76.909828',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("626 M21 72.699083<br>");
$sql = "INSERT INTO ss09 SET runner_id='630',ss_date='2009-09-05',sex='M',age='40',score='28.446543',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("630 M40 28.446543<br>");
$sql = "INSERT INTO ss09 SET runner_id='633',ss_date='2009-09-05',sex='M',age='16',score='33.53945',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("633 M16 33.53945<br>");
$sql = "INSERT INTO ss09 SET runner_id='634',ss_date='2009-09-05',sex='M',age='40',score='47.356345',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='97.669067',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("634 M40 47.356345<br>");
$sql = "INSERT INTO ss09 SET runner_id='636',ss_date='2009-09-05',sex='F',age='35',score='46.523147',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='64.507915',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("636 F35 46.523147<br>");
$sql = "INSERT INTO ss09 SET runner_id='666',ss_date='2009-09-05',sex='F',age='55',score='30.895203',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='62.246814',gr_sc='43.743937',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("666 F55 30.895203<br>");
$sql = "INSERT INTO ss09 SET runner_id='667',ss_date='2009-09-05',sex='M',age='55',score='29.814263',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='54.903263',gr_sc='43.215287',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("667 M55 29.814263<br>");
$sql = "INSERT INTO ss09 SET runner_id='673',ss_date='2009-09-05',sex='M',age='45',score='35.821944',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("673 M45 35.821944<br>");
$sql = "INSERT INTO ss09 SET runner_id='767',ss_date='2009-09-05',sex='M',age='40',score='64.167136',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='55.165148',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("767 M40 64.167136<br>");
$sql = "INSERT INTO ss09 SET runner_id='783',ss_date='2009-09-05',sex='F',age='70',score='21.340692',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("783 F70 21.340692<br>");
$sql = "INSERT INTO ss09 SET runner_id='784',ss_date='2009-09-05',sex='F',age='50',score='18.980781',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("784 F50 18.980781<br>");
$sql = "INSERT INTO ss09 SET runner_id='796',ss_date='2009-09-05',sex='M',age='60',score='28.181313',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("796 M60 28.181313<br>");
$sql = "INSERT INTO ss09 SET runner_id='797',ss_date='2009-09-05',sex='F',age='55',score='44.265824',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='60.074965',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("797 F55 44.265824<br>");
$sql = "INSERT INTO ss09 SET runner_id='798',ss_date='2009-09-05',sex='M',age='60',score='32.574092',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='66.840439',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("798 M60 32.574092<br>");
$sql = "INSERT INTO ss09 SET runner_id='799',ss_date='2009-09-05',sex='M',age='45',score='72.583512',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='74.973955',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("799 M45 72.583512<br>");
$sql = "INSERT INTO ss09 SET runner_id='862',ss_date='2009-09-05',sex='M',age='21',score='38.176961',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("862 M21 38.176961<br>");
$sql = "INSERT INTO ss09 SET runner_id='899',ss_date='2009-09-05',sex='M',age='60',score='41.025807',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("899 M60 41.025807<br>");
$sql = "INSERT INTO ss09 SET runner_id='958',ss_date='2009-09-05',sex='M',age='45',score='16.295199',wh_sc='0',ye_sc='39.012983',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("958 M45 16.295199<br>");
$sql = "INSERT INTO ss09 SET runner_id='969',ss_date='2009-09-05',sex='F',age='21',score='44.474235',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='62.422252',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("969 F21 44.474235<br>");
$sql = "INSERT INTO ss09 SET runner_id='970',ss_date='2009-09-05',sex='F',age='55',score='19.621083',wh_sc='0',ye_sc='0',or_sc='39.823994',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("970 F55 19.621083<br>");
$sql = "INSERT INTO ss09 SET runner_id='1022',ss_date='2009-09-05',sex='M',age='14',score='45.6735',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1022 M14 45.6735<br>");
$sql = "INSERT INTO ss09 SET runner_id='1088',ss_date='2009-09-05',sex='M',age='60',score='38.164149',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='53.458241',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1088 M60 38.164149<br>");
$sql = "INSERT INTO ss09 SET runner_id='1151',ss_date='2009-09-05',sex='F',age='65',score='19.639237',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='40.578804',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1151 F65 19.639237<br>");
$sql = "INSERT INTO ss09 SET runner_id='1189',ss_date='2009-09-05',sex='M',age='70',score='47.224144',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1189 M70 47.224144<br>");
$sql = "INSERT INTO ss09 SET runner_id='1190',ss_date='2009-09-05',sex='M',age='40',score='63.815406',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1190 M40 63.815406<br>");
$sql = "INSERT INTO ss09 SET runner_id='1198',ss_date='2009-09-05',sex='M',age='65',score='46.48646',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='63.142768',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1198 M65 46.48646<br>");
$sql = "INSERT INTO ss09 SET runner_id='1218',ss_date='2009-09-05',sex='M',age='40',score='82.065954',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='88.34358',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1218 M40 82.065954<br>");
$sql = "INSERT INTO ss09 SET runner_id='1238',ss_date='2009-09-05',sex='M',age='55',score='29.14046',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='43.260418',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1238 M55 29.14046<br>");
$sql = "INSERT INTO ss09 SET runner_id='1250',ss_date='2009-09-05',sex='M',age='35',score='100.169603',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='105.209804',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1250 M35 100.169603<br>");
$sql = "INSERT INTO ss09 SET runner_id='1282',ss_date='2009-09-05',sex='F',age='50',score='47.243421',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1282 F50 47.243421<br>");
$sql = "INSERT INTO ss09 SET runner_id='1318',ss_date='2009-09-05',sex='M',age='50',score='22.411533',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='44.471911',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1318 M50 22.411533<br>");
$sql = "INSERT INTO ss09 SET runner_id='1364',ss_date='2009-09-05',sex='M',age='40',score='60.511474',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='64.576073',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1364 M40 60.511474<br>");
$sql = "INSERT INTO ss09 SET runner_id='1397',ss_date='2009-09-05',sex='M',age='16',score='54.468466',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='57.140507',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1397 M16 54.468466<br>");
$sql = "INSERT INTO ss09 SET runner_id='1398',ss_date='2009-09-05',sex='M',age='45',score='35.47563',wh_sc='0',ye_sc='93.299248',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1398 M45 35.47563<br>");
$sql = "INSERT INTO ss09 SET runner_id='1432',ss_date='2009-09-05',sex='M',age='45',score='81.448212',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='82.870702',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1432 M45 81.448212<br>");
$sql = "INSERT INTO ss09 SET runner_id='1480',ss_date='2009-09-05',sex='F',age='21',score='28.561598',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='41.841431',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1480 F21 28.561598<br>");
$sql = "INSERT INTO ss09 SET runner_id='1503',ss_date='2009-09-05',sex='F',age='55',score='21.764629',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='40.39303',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1503 F55 21.764629<br>");
$sql = "INSERT INTO ss09 SET runner_id='1504',ss_date='2009-09-05',sex='M',age='60',score='40.916512',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='63.681948',re_sc='33.769283',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1504 M60 40.916512<br>");
$sql = "INSERT INTO ss09 SET runner_id='1518',ss_date='2009-09-05',sex='F',age='21',score='78.803993',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1518 F21 78.803993<br>");
$sql = "INSERT INTO ss09 SET runner_id='1519',ss_date='2009-09-05',sex='M',age='50',score='35.308736',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1519 M50 35.308736<br>");
$sql = "INSERT INTO ss09 SET runner_id='1540',ss_date='2009-09-05',sex='M',age='45',score='28.388492',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1540 M45 28.388492<br>");
$sql = "INSERT INTO ss09 SET runner_id='1548',ss_date='2009-09-05',sex='F',age='40',score='32.807545',wh_sc='0',ye_sc='0',or_sc='50.928613',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1548 F40 32.807545<br>");
$sql = "INSERT INTO ss09 SET runner_id='1567',ss_date='2009-09-05',sex='M',age='50',score='60.650377',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='64.911166',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1567 M50 60.650377<br>");
$sql = "INSERT INTO ss09 SET runner_id='1570',ss_date='2009-09-05',sex='M',age='18',score='57.802208',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='81.702515',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1570 M18 57.802208<br>");
$sql = "INSERT INTO ss09 SET runner_id='1602',ss_date='2009-09-05',sex='M',age='10',score='39.249543',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1602 M10 39.249543<br>");
$sql = "INSERT INTO ss09 SET runner_id='1603',ss_date='2009-09-05',sex='F',age='35',score='67.688262',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='90.600793',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1603 F35 67.688262<br>");
$sql = "INSERT INTO ss09 SET runner_id='1604',ss_date='2009-09-05',sex='M',age='12',score='30.401034',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1604 M12 30.401034<br>");
$sql = "INSERT INTO ss09 SET runner_id='1606',ss_date='2009-09-05',sex='M',age='35',score='98.778208',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='106.446616',bl_sc='127.820211'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1606 M35 98.778208<br>");
$sql = "INSERT INTO ss09 SET runner_id='1667',ss_date='2009-09-05',sex='M',age='50',score='39.910566',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='79.907616',gr_sc='56.358995',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1667 M50 39.910566<br>");
$sql = "INSERT INTO ss09 SET runner_id='1676',ss_date='2009-09-05',sex='F',age='55',score='24.482623',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='34.493333',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1676 F55 24.482623<br>");
$sql = "INSERT INTO ss09 SET runner_id='1718',ss_date='2009-09-05',sex='M',age='60',score='49.9817',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='96.488201',gr_sc='73.25981',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1718 M60 49.9817<br>");
$sql = "INSERT INTO ss09 SET runner_id='1739',ss_date='2009-09-05',sex='M',age='70',score='39.231968',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='80.595564',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1739 M70 39.231968<br>");
$sql = "INSERT INTO ss09 SET runner_id='1746',ss_date='2009-09-05',sex='F',age='50',score='38.312175',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='79.065972',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1746 F50 38.312175<br>");
$sql = "INSERT INTO ss09 SET runner_id='1771',ss_date='2009-09-05',sex='F',age='60',score='26.487359',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='46.398088',gr_sc='35.809029',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1771 F60 26.487359<br>");
$sql = "INSERT INTO ss09 SET runner_id='1812',ss_date='2009-09-05',sex='F',age='45',score='26.965741',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1812 F45 26.965741<br>");
$sql = "INSERT INTO ss09 SET runner_id='1878',ss_date='2009-09-05',sex='F',age='50',score='30.234734',wh_sc='0',ye_sc='66.648154',or_sc='64.731275',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1878 F50 30.234734<br>");
$sql = "INSERT INTO ss09 SET runner_id='1879',ss_date='2009-09-05',sex='M',age='50',score='54.679794',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='78.786998',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1879 M50 54.679794<br>");
$sql = "INSERT INTO ss09 SET runner_id='1916',ss_date='2009-09-05',sex='F',age='55',score='27.394342',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='56.869155',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1916 F55 27.394342<br>");
$sql = "INSERT INTO ss09 SET runner_id='1923',ss_date='2009-09-05',sex='M',age='14',score='44.802818',wh_sc='0',ye_sc='109.592263',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1923 M14 44.802818<br>");
$sql = "INSERT INTO ss09 SET runner_id='1925',ss_date='2009-09-05',sex='M',age='16',score='50.529563',wh_sc='0',ye_sc='0',or_sc='106.723146',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1925 M16 50.529563<br>");
$sql = "INSERT INTO ss09 SET runner_id='1926',ss_date='2009-09-05',sex='M',age='18',score='57.677839',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='69.679491',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1926 M18 57.677839<br>");
$sql = "INSERT INTO ss09 SET runner_id='1928',ss_date='2009-09-05',sex='M',age='50',score='65.574658',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='81.060277',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1928 M50 65.574658<br>");
$sql = "INSERT INTO ss09 SET runner_id='1953',ss_date='2009-09-05',sex='M',age='55',score='55.868505',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1953 M55 55.868505<br>");
$sql = "INSERT INTO ss09 SET runner_id='1991',ss_date='2009-09-05',sex='M',age='60',score='31.848339',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='72.437888',gr_sc='43.251015',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1991 M60 31.848339<br>");
$sql = "INSERT INTO ss09 SET runner_id='1992',ss_date='2009-09-05',sex='F',age='60',score='23.973843',wh_sc='0',ye_sc='0',or_sc='44.886358',bn_sc='49.503098',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1992 F60 23.973843<br>");
$sql = "INSERT INTO ss09 SET runner_id='2108',ss_date='2009-09-05',sex='M',age='60',score='36.256515',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='38.565103',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2108 M60 36.256515<br>");
$sql = "INSERT INTO ss09 SET runner_id='2122',ss_date='2009-09-05',sex='M',age='55',score='50.590426',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='69.639158',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2122 M55 50.590426<br>");
$sql = "INSERT INTO ss09 SET runner_id='2160',ss_date='2009-09-05',sex='M',age='65',score='45.614409',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='63.699373',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2160 M65 45.614409<br>");
$sql = "INSERT INTO ss09 SET runner_id='2198',ss_date='2009-09-05',sex='F',age='40',score='53.698771',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='75.010692',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2198 F40 53.698771<br>");
$sql = "INSERT INTO ss09 SET runner_id='2200',ss_date='2009-09-05',sex='M',age='10',score='20.318672',wh_sc='0',ye_sc='49.856006',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2200 M10 20.318672<br>");
$sql = "INSERT INTO ss09 SET runner_id='2201',ss_date='2009-09-05',sex='M',age='18',score='27.275377',wh_sc='0',ye_sc='0',or_sc='51.022024',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2201 M18 27.275377<br>");
$sql = "INSERT INTO ss09 SET runner_id='2227',ss_date='2009-09-05',sex='M',age='40',score='60.406331',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='64.752305',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2227 M40 60.406331<br>");
$sql = "INSERT INTO ss09 SET runner_id='2254',ss_date='2009-09-05',sex='F',age='16',score='26.945829',wh_sc='0',ye_sc='69.826076',or_sc='45.144892',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2254 F16 26.945829<br>");
$sql = "INSERT INTO ss09 SET runner_id='2255',ss_date='2009-09-05',sex='G',age='2',score='38.406522',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2255 G2 38.406522<br>");
$sql = "INSERT INTO ss09 SET runner_id='2257',ss_date='2009-09-05',sex='M',age='50',score='17.696156',wh_sc='0',ye_sc='38.551804',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2257 M50 17.696156<br>");
$sql = "INSERT INTO ss09 SET runner_id='2267',ss_date='2009-09-05',sex='M',age='45',score='26.409919',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2267 M45 26.409919<br>");
$sql = "INSERT INTO ss09 SET runner_id='2275',ss_date='2009-09-05',sex='M',age='21',score='42.329407',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2275 M21 42.329407<br>");
$sql = "INSERT INTO ss09 SET runner_id='2303',ss_date='2009-09-05',sex='G',age='2',score='25.960486',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='42.279076',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2303 G2 25.960486<br>");
$sql = "INSERT INTO ss09 SET runner_id='2312',ss_date='2009-09-05',sex='F',age='8',score='23.186038',wh_sc='98.712295',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2312 F8 23.186038<br>");
$sql = "INSERT INTO ss09 SET runner_id='2412',ss_date='2009-09-05',sex='M',age='21',score='52.149234',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2412 M21 52.149234<br>");
$sql = "INSERT INTO ss09 SET runner_id='2414',ss_date='2009-09-05',sex='M',age='60',score='26.264602',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2414 M60 26.264602<br>");
$sql = "INSERT INTO ss09 SET runner_id='2473',ss_date='2009-09-05',sex='F',age='16',score='23.654928',wh_sc='0',ye_sc='57.221645',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2473 F16 23.654928<br>");
$sql = "INSERT INTO ss09 SET runner_id='2481',ss_date='2009-09-05',sex='M',age='45',score='39.611787',wh_sc='0',ye_sc='0',or_sc='73.804398',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2481 M45 39.611787<br>");
$sql = "INSERT INTO ss09 SET runner_id='2',ss_date='2009-09-13',sex='F',age='45',score='39.806747',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='55.886038',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2 F45 39.806747<br>");
$sql = "INSERT INTO ss09 SET runner_id='12',ss_date='2009-09-13',sex='M',age='20',score='84.076182',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("12 M20 84.076182<br>");
$sql = "INSERT INTO ss09 SET runner_id='13',ss_date='2009-09-13',sex='M',age='45',score='69.838496',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='69.932696',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("13 M45 69.838496<br>");
$sql = "INSERT INTO ss09 SET runner_id='48',ss_date='2009-09-13',sex='M',age='50',score='38.715817',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='54.482686',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("48 M50 38.715817<br>");
$sql = "INSERT INTO ss09 SET runner_id='69',ss_date='2009-09-13',sex='M',age='45',score='53.727508',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='55.017481',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("69 M45 53.727508<br>");
$sql = "INSERT INTO ss09 SET runner_id='86',ss_date='2009-09-13',sex='M',age='50',score='42.915592',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='43.376427',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("86 M50 42.915592<br>");
$sql = "INSERT INTO ss09 SET runner_id='87',ss_date='2009-09-13',sex='M',age='16',score='60.464814',wh_sc='0',ye_sc='0',or_sc='116.209277',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("87 M16 60.464814<br>");
$sql = "INSERT INTO ss09 SET runner_id='96',ss_date='2009-09-13',sex='M',age='55',score='42.986212',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='61.027671',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("96 M55 42.986212<br>");
$sql = "INSERT INTO ss09 SET runner_id='100',ss_date='2009-09-13',sex='F',age='16',score='25.85063',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("100 F16 25.85063<br>");
$sql = "INSERT INTO ss09 SET runner_id='131',ss_date='2009-09-13',sex='M',age='40',score='100.588083',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='101.238703',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("131 M40 100.588083<br>");
$sql = "INSERT INTO ss09 SET runner_id='162',ss_date='2009-09-13',sex='M',age='35',score='51.782074',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='47.10591',bl_sc='69.602767'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("162 M35 51.782074<br>");
$sql = "INSERT INTO ss09 SET runner_id='169',ss_date='2009-09-13',sex='M',age='60',score='28.287806',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='39.74292',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("169 M60 28.287806<br>");
$sql = "INSERT INTO ss09 SET runner_id='176',ss_date='2009-09-13',sex='M',age='55',score='69.99951',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='98.389428',re_sc='65.708793',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("176 M55 69.99951<br>");
$sql = "INSERT INTO ss09 SET runner_id='226',ss_date='2009-09-13',sex='M',age='80',score='24.148212',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='37.874056',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("226 M80 24.148212<br>");
$sql = "INSERT INTO ss09 SET runner_id='248',ss_date='2009-09-13',sex='M',age='60',score='49.548915',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='103.202449',gr_sc='67.067737',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("248 M60 49.548915<br>");
$sql = "INSERT INTO ss09 SET runner_id='253',ss_date='2009-09-13',sex='M',age='40',score='36.494282',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("253 M40 36.494282<br>");
$sql = "INSERT INTO ss09 SET runner_id='254',ss_date='2009-09-13',sex='F',age='55',score='25.909484',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("254 F55 25.909484<br>");
$sql = "INSERT INTO ss09 SET runner_id='255',ss_date='2009-09-13',sex='M',age='20',score='38.834366',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("255 M20 38.834366<br>");
$sql = "INSERT INTO ss09 SET runner_id='267',ss_date='2009-09-13',sex='F',age='18',score='64.924876',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='61.295708',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("267 F18 64.924876<br>");
$sql = "INSERT INTO ss09 SET runner_id='269',ss_date='2009-09-13',sex='F',age='14',score='37.711154',wh_sc='0',ye_sc='0',or_sc='77.259283',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("269 F14 37.711154<br>");
$sql = "INSERT INTO ss09 SET runner_id='270',ss_date='2009-09-13',sex='M',age='50',score='79.882986',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='111.419252',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("270 M50 79.882986<br>");
$sql = "INSERT INTO ss09 SET runner_id='376',ss_date='2009-09-13',sex='M',age='50',score='64.742881',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='51.575495',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("376 M50 64.742881<br>");
$sql = "INSERT INTO ss09 SET runner_id='418',ss_date='2009-09-13',sex='M',age='60',score='44.236684',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("418 M60 44.236684<br>");
$sql = "INSERT INTO ss09 SET runner_id='428',ss_date='2009-09-13',sex='M',age='50',score='39.030743',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='74.676821',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("428 M50 39.030743<br>");
$sql = "INSERT INTO ss09 SET runner_id='463',ss_date='2009-09-13',sex='M',age='45',score='29.999703',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='52.697309',gr_sc='40.17529',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("463 M45 29.999703<br>");
$sql = "INSERT INTO ss09 SET runner_id='499',ss_date='2009-09-13',sex='M',age='50',score='38.387109',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='53.857925',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("499 M50 38.387109<br>");
$sql = "INSERT INTO ss09 SET runner_id='522',ss_date='2009-09-13',sex='F',age='50',score='31.504519',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='63.272581',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("522 F50 31.504519<br>");
$sql = "INSERT INTO ss09 SET runner_id='545',ss_date='2009-09-13',sex='M',age='21',score='77.29297',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='76.925425',bl_sc='102.577022'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("545 M21 77.29297<br>");
$sql = "INSERT INTO ss09 SET runner_id='567',ss_date='2009-09-13',sex='M',age='55',score='58.02773',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='78.27581',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("567 M55 58.02773<br>");
$sql = "INSERT INTO ss09 SET runner_id='568',ss_date='2009-09-13',sex='F',age='55',score='20.762616',wh_sc='0',ye_sc='0',or_sc='42.307924',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("568 F55 20.762616<br>");
$sql = "INSERT INTO ss09 SET runner_id='600',ss_date='2009-09-13',sex='M',age='35',score='23.251403',wh_sc='100.578997',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("600 M35 23.251403<br>");
$sql = "INSERT INTO ss09 SET runner_id='601',ss_date='2009-09-13',sex='M',age='60',score='35.438187',wh_sc='0',ye_sc='99.138851',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("601 M60 35.438187<br>");
$sql = "INSERT INTO ss09 SET runner_id='606',ss_date='2009-09-13',sex='M',age='21',score='44.873197',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("606 M21 44.873197<br>");
$sql = "INSERT INTO ss09 SET runner_id='613',ss_date='2009-09-13',sex='M',age='50',score='54.068906',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='77.48821',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("613 M50 54.068906<br>");
$sql = "INSERT INTO ss09 SET runner_id='614',ss_date='2009-09-13',sex='F',age='50',score='48.348458',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='65.054107',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("614 F50 48.348458<br>");
$sql = "INSERT INTO ss09 SET runner_id='616',ss_date='2009-09-13',sex='M',age='16',score='24.056687',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='51.495842',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("616 M16 24.056687<br>");
$sql = "INSERT INTO ss09 SET runner_id='626',ss_date='2009-09-13',sex='M',age='21',score='72.298214',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='72.193896',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("626 M21 72.298214<br>");
$sql = "INSERT INTO ss09 SET runner_id='630',ss_date='2009-09-13',sex='M',age='40',score='28.384533',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("630 M40 28.384533<br>");
$sql = "INSERT INTO ss09 SET runner_id='633',ss_date='2009-09-13',sex='M',age='16',score='33.583655',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("633 M16 33.583655<br>");
$sql = "INSERT INTO ss09 SET runner_id='634',ss_date='2009-09-13',sex='M',age='40',score='49.739443',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='101.630091',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("634 M40 49.739443<br>");
$sql = "INSERT INTO ss09 SET runner_id='636',ss_date='2009-09-13',sex='F',age='35',score='45.832231',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='63.403026',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("636 F35 45.832231<br>");
$sql = "INSERT INTO ss09 SET runner_id='666',ss_date='2009-09-13',sex='F',age='55',score='30.669477',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='60.648711',gr_sc='43.550231',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("666 F55 30.669477<br>");
$sql = "INSERT INTO ss09 SET runner_id='667',ss_date='2009-09-13',sex='M',age='55',score='29.573119',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='53.270739',gr_sc='42.998851',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("667 M55 29.573119<br>");
$sql = "INSERT INTO ss09 SET runner_id='673',ss_date='2009-09-13',sex='M',age='45',score='35.556577',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("673 M45 35.556577<br>");
$sql = "INSERT INTO ss09 SET runner_id='748',ss_date='2009-09-13',sex='M',age='10',score='22.089338',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("748 M10 22.089338<br>");
$sql = "INSERT INTO ss09 SET runner_id='767',ss_date='2009-09-13',sex='M',age='40',score='63.962698',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='51.969383',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("767 M40 63.962698<br>");
$sql = "INSERT INTO ss09 SET runner_id='783',ss_date='2009-09-13',sex='F',age='70',score='21.37213',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("783 F70 21.37213<br>");
$sql = "INSERT INTO ss09 SET runner_id='784',ss_date='2009-09-13',sex='F',age='50',score='18.834413',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("784 F50 18.834413<br>");
$sql = "INSERT INTO ss09 SET runner_id='796',ss_date='2009-09-13',sex='M',age='60',score='28.055537',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("796 M60 28.055537<br>");
$sql = "INSERT INTO ss09 SET runner_id='797',ss_date='2009-09-13',sex='F',age='55',score='44.421498',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='59.47834',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("797 F55 44.421498<br>");
$sql = "INSERT INTO ss09 SET runner_id='798',ss_date='2009-09-13',sex='M',age='60',score='32.011338',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='65.074595',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("798 M60 32.011338<br>");
$sql = "INSERT INTO ss09 SET runner_id='799',ss_date='2009-09-13',sex='M',age='45',score='72.253906',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='70.636065',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("799 M45 72.253906<br>");
$sql = "INSERT INTO ss09 SET runner_id='862',ss_date='2009-09-13',sex='M',age='21',score='37.876989',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("862 M21 37.876989<br>");
$sql = "INSERT INTO ss09 SET runner_id='899',ss_date='2009-09-13',sex='M',age='60',score='46.506623',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='40.815342',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("899 M60 46.506623<br>");
$sql = "INSERT INTO ss09 SET runner_id='958',ss_date='2009-09-13',sex='M',age='45',score='16.25268',wh_sc='0',ye_sc='39.428344',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("958 M45 16.25268<br>");
$sql = "INSERT INTO ss09 SET runner_id='969',ss_date='2009-09-13',sex='F',age='21',score='44.146597',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='62.138202',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("969 F21 44.146597<br>");
$sql = "INSERT INTO ss09 SET runner_id='970',ss_date='2009-09-13',sex='F',age='55',score='19.417733',wh_sc='0',ye_sc='0',or_sc='39.226062',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("970 F55 19.417733<br>");
$sql = "INSERT INTO ss09 SET runner_id='1022',ss_date='2009-09-13',sex='M',age='14',score='45.617259',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1022 M14 45.617259<br>");
$sql = "INSERT INTO ss09 SET runner_id='1088',ss_date='2009-09-13',sex='M',age='60',score='37.945768',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='53.218299',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1088 M60 37.945768<br>");
$sql = "INSERT INTO ss09 SET runner_id='1151',ss_date='2009-09-13',sex='F',age='65',score='19.639065',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='39.885352',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1151 F65 19.639065<br>");
$sql = "INSERT INTO ss09 SET runner_id='1189',ss_date='2009-09-13',sex='M',age='70',score='46.914458',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1189 M70 46.914458<br>");
$sql = "INSERT INTO ss09 SET runner_id='1190',ss_date='2009-09-13',sex='M',age='40',score='66.695809',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='67.787899',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1190 M40 66.695809<br>");
$sql = "INSERT INTO ss09 SET runner_id='1198',ss_date='2009-09-13',sex='M',age='65',score='46.406972',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='62.814519',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1198 M65 46.406972<br>");
$sql = "INSERT INTO ss09 SET runner_id='1218',ss_date='2009-09-13',sex='M',age='40',score='82.100501',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='82.656299',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1218 M40 82.100501<br>");
$sql = "INSERT INTO ss09 SET runner_id='1238',ss_date='2009-09-13',sex='M',age='55',score='28.951562',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='43.117222',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1238 M55 28.951562<br>");
$sql = "INSERT INTO ss09 SET runner_id='1250',ss_date='2009-09-13',sex='M',age='35',score='99.509997',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='99.468934',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1250 M35 99.509997<br>");
$sql = "INSERT INTO ss09 SET runner_id='1282',ss_date='2009-09-13',sex='F',age='50',score='46.963402',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1282 F50 46.963402<br>");
$sql = "INSERT INTO ss09 SET runner_id='1318',ss_date='2009-09-13',sex='M',age='50',score='22.564482',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='44.697696',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1318 M50 22.564482<br>");
$sql = "INSERT INTO ss09 SET runner_id='1364',ss_date='2009-09-13',sex='M',age='40',score='60.180345',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='60.691862',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1364 M40 60.180345<br>");
$sql = "INSERT INTO ss09 SET runner_id='1397',ss_date='2009-09-13',sex='M',age='16',score='54.310233',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='57.124686',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1397 M16 54.310233<br>");
$sql = "INSERT INTO ss09 SET runner_id='1398',ss_date='2009-09-13',sex='M',age='45',score='35.043272',wh_sc='0',ye_sc='91.006025',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1398 M45 35.043272<br>");
$sql = "INSERT INTO ss09 SET runner_id='1417',ss_date='2009-09-13',sex='M',age='60',score='31.521731',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1417 M60 31.521731<br>");
$sql = "INSERT INTO ss09 SET runner_id='1432',ss_date='2009-09-13',sex='M',age='45',score='81.029747',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='78.139092',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1432 M45 81.029747<br>");
$sql = "INSERT INTO ss09 SET runner_id='1480',ss_date='2009-09-13',sex='F',age='21',score='28.330412',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='41.17999',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1480 F21 28.330412<br>");
$sql = "INSERT INTO ss09 SET runner_id='1503',ss_date='2009-09-13',sex='F',age='55',score='21.665525',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='39.530603',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1503 F55 21.665525<br>");
$sql = "INSERT INTO ss09 SET runner_id='1504',ss_date='2009-09-13',sex='M',age='60',score='40.678296',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='63.410937',re_sc='31.743622',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1504 M60 40.678296<br>");
$sql = "INSERT INTO ss09 SET runner_id='1518',ss_date='2009-09-13',sex='F',age='21',score='73.700537',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1518 F21 73.700537<br>");
$sql = "INSERT INTO ss09 SET runner_id='1519',ss_date='2009-09-13',sex='M',age='50',score='35.179225',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1519 M50 35.179225<br>");
$sql = "INSERT INTO ss09 SET runner_id='1540',ss_date='2009-09-13',sex='M',age='45',score='28.304563',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1540 M45 28.304563<br>");
$sql = "INSERT INTO ss09 SET runner_id='1548',ss_date='2009-09-13',sex='F',age='40',score='32.833487',wh_sc='0',ye_sc='0',or_sc='52.078938',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1548 F40 32.833487<br>");
$sql = "INSERT INTO ss09 SET runner_id='1566',ss_date='2009-09-13',sex='F',age='14',score='31.594676',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1566 F14 31.594676<br>");
$sql = "INSERT INTO ss09 SET runner_id='1567',ss_date='2009-09-13',sex='M',age='50',score='59.885568',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='60.006964',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1567 M50 59.885568<br>");
$sql = "INSERT INTO ss09 SET runner_id='1570',ss_date='2009-09-13',sex='M',age='18',score='58.328174',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='85.821338',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1570 M18 58.328174<br>");
$sql = "INSERT INTO ss09 SET runner_id='1602',ss_date='2009-09-13',sex='M',age='10',score='36.247308',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1602 M10 36.247308<br>");
$sql = "INSERT INTO ss09 SET runner_id='1603',ss_date='2009-09-13',sex='F',age='35',score='66.66271',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='90.191321',re_sc='56.187435',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1603 F35 66.66271<br>");
$sql = "INSERT INTO ss09 SET runner_id='1604',ss_date='2009-09-13',sex='M',age='12',score='30.159841',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1604 M12 30.159841<br>");
$sql = "INSERT INTO ss09 SET runner_id='1606',ss_date='2009-09-13',sex='M',age='35',score='98.299251',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='99.292362',bl_sc='127.820211'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1606 M35 98.299251<br>");
$sql = "INSERT INTO ss09 SET runner_id='1667',ss_date='2009-09-13',sex='M',age='50',score='39.086582',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='78.198462',gr_sc='53.389757',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1667 M50 39.086582<br>");
$sql = "INSERT INTO ss09 SET runner_id='1676',ss_date='2009-09-13',sex='F',age='55',score='24.3415',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='34.340248',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1676 F55 24.3415<br>");
$sql = "INSERT INTO ss09 SET runner_id='1718',ss_date='2009-09-13',sex='M',age='60',score='49.411767',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='95.167461',gr_sc='71.484314',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1718 M60 49.411767<br>");
$sql = "INSERT INTO ss09 SET runner_id='1746',ss_date='2009-09-13',sex='F',age='50',score='38.064371',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='77.014049',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1746 F50 38.064371<br>");
$sql = "INSERT INTO ss09 SET runner_id='1771',ss_date='2009-09-13',sex='F',age='60',score='26.325257',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='44.961859',gr_sc='35.685748',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1771 F60 26.325257<br>");
$sql = "INSERT INTO ss09 SET runner_id='1812',ss_date='2009-09-13',sex='F',age='45',score='26.620826',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1812 F45 26.620826<br>");
$sql = "INSERT INTO ss09 SET runner_id='1878',ss_date='2009-09-13',sex='F',age='50',score='30.016848',wh_sc='0',ye_sc='66.854282',or_sc='63.464128',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1878 F50 30.016848<br>");
$sql = "INSERT INTO ss09 SET runner_id='1879',ss_date='2009-09-13',sex='M',age='50',score='55.872052',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='79.297889',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1879 M50 55.872052<br>");
$sql = "INSERT INTO ss09 SET runner_id='1916',ss_date='2009-09-13',sex='F',age='55',score='25.61993',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='52.170924',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1916 F55 25.61993<br>");
$sql = "INSERT INTO ss09 SET runner_id='1923',ss_date='2009-09-13',sex='M',age='14',score='43.851166',wh_sc='0',ye_sc='109.855124',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1923 M14 43.851166<br>");
$sql = "INSERT INTO ss09 SET runner_id='1925',ss_date='2009-09-13',sex='M',age='16',score='52.851921',wh_sc='0',ye_sc='0',or_sc='106.53144',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1925 M16 52.851921<br>");
$sql = "INSERT INTO ss09 SET runner_id='1926',ss_date='2009-09-13',sex='M',age='18',score='58.513688',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='69.394954',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1926 M18 58.513688<br>");
$sql = "INSERT INTO ss09 SET runner_id='1928',ss_date='2009-09-13',sex='M',age='50',score='64.821959',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='80.84186',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1928 M50 64.821959<br>");
$sql = "INSERT INTO ss09 SET runner_id='1953',ss_date='2009-09-13',sex='M',age='55',score='55.419742',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1953 M55 55.419742<br>");
$sql = "INSERT INTO ss09 SET runner_id='1991',ss_date='2009-09-13',sex='M',age='60',score='31.748892',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='71.586947',gr_sc='43.171947',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1991 M60 31.748892<br>");
$sql = "INSERT INTO ss09 SET runner_id='1992',ss_date='2009-09-13',sex='F',age='60',score='23.912465',wh_sc='0',ye_sc='0',or_sc='44.57079',bn_sc='49.008513',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1992 F60 23.912465<br>");
$sql = "INSERT INTO ss09 SET runner_id='2108',ss_date='2009-09-13',sex='M',age='60',score='36.342467',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='36.775987',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2108 M60 36.342467<br>");
$sql = "INSERT INTO ss09 SET runner_id='2122',ss_date='2009-09-13',sex='M',age='55',score='52.328623',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='69.352604',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2122 M55 52.328623<br>");
$sql = "INSERT INTO ss09 SET runner_id='2160',ss_date='2009-09-13',sex='M',age='65',score='45.25143',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='63.496883',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2160 M65 45.25143<br>");
$sql = "INSERT INTO ss09 SET runner_id='2198',ss_date='2009-09-13',sex='F',age='40',score='53.125968',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='74.284764',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2198 F40 53.125968<br>");
$sql = "INSERT INTO ss09 SET runner_id='2200',ss_date='2009-09-13',sex='M',age='10',score='26.215467',wh_sc='0',ye_sc='65.339602',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2200 M10 26.215467<br>");
$sql = "INSERT INTO ss09 SET runner_id='2201',ss_date='2009-09-13',sex='M',age='18',score='28.443338',wh_sc='0',ye_sc='0',or_sc='56.12475',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2201 M18 28.443338<br>");
$sql = "INSERT INTO ss09 SET runner_id='2207',ss_date='2009-09-13',sex='M',age='21',score='99.90192',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2207 M21 99.90192<br>");
$sql = "INSERT INTO ss09 SET runner_id='2227',ss_date='2009-09-13',sex='M',age='40',score='64.080265',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='64.672815',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2227 M40 64.080265<br>");
$sql = "INSERT INTO ss09 SET runner_id='2254',ss_date='2009-09-13',sex='F',age='16',score='26.814035',wh_sc='0',ye_sc='69.794899',or_sc='45.138004',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2254 F16 26.814035<br>");
$sql = "INSERT INTO ss09 SET runner_id='2255',ss_date='2009-09-13',sex='G',age='2',score='38.540874',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2255 G2 38.540874<br>");
$sql = "INSERT INTO ss09 SET runner_id='2257',ss_date='2009-09-13',sex='M',age='50',score='17.879957',wh_sc='0',ye_sc='38.464029',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2257 M50 17.879957<br>");
$sql = "INSERT INTO ss09 SET runner_id='2267',ss_date='2009-09-13',sex='M',age='45',score='26.224901',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2267 M45 26.224901<br>");
$sql = "INSERT INTO ss09 SET runner_id='2275',ss_date='2009-09-13',sex='M',age='21',score='42.188213',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2275 M21 42.188213<br>");
$sql = "INSERT INTO ss09 SET runner_id='2303',ss_date='2009-09-13',sex='G',age='2',score='25.885811',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='41.942127',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2303 G2 25.885811<br>");
$sql = "INSERT INTO ss09 SET runner_id='2312',ss_date='2009-09-13',sex='F',age='8',score='24.018885',wh_sc='99.421003',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2312 F8 24.018885<br>");
$sql = "INSERT INTO ss09 SET runner_id='2341',ss_date='2009-09-13',sex='M',age='60',score='18.932599',wh_sc='0',ye_sc='0',or_sc='38.44791',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2341 M60 18.932599<br>");
$sql = "INSERT INTO ss09 SET runner_id='2412',ss_date='2009-09-13',sex='M',age='21',score='51.978357',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='49.948238',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2412 M21 51.978357<br>");
$sql = "INSERT INTO ss09 SET runner_id='2414',ss_date='2009-09-13',sex='M',age='60',score='26.039602',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2414 M60 26.039602<br>");
$sql = "INSERT INTO ss09 SET runner_id='2444',ss_date='2009-09-13',sex='F',age='10',score='20.346696',wh_sc='0',ye_sc='49.8006',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2444 F10 20.346696<br>");
$sql = "INSERT INTO ss09 SET runner_id='2473',ss_date='2009-09-13',sex='F',age='16',score='23.470248',wh_sc='0',ye_sc='56.492234',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2473 F16 23.470248<br>");
$sql = "INSERT INTO ss09 SET runner_id='2481',ss_date='2009-09-13',sex='M',age='45',score='39.499489',wh_sc='0',ye_sc='0',or_sc='74.661661',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2481 M45 39.499489<br>");
$sql = "INSERT INTO ss09 SET runner_id='2',ss_date='2009-09-20',sex='F',age='45',score='39.796087',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='55.886038',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2 F45 39.796087<br>");
$sql = "INSERT INTO ss09 SET runner_id='12',ss_date='2009-09-20',sex='M',age='20',score='84.023958',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("12 M20 84.023958<br>");
$sql = "INSERT INTO ss09 SET runner_id='13',ss_date='2009-09-20',sex='M',age='45',score='69.816152',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='69.932696',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("13 M45 69.816152<br>");
$sql = "INSERT INTO ss09 SET runner_id='48',ss_date='2009-09-20',sex='M',age='50',score='38.636509',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='54.482686',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("48 M50 38.636509<br>");
$sql = "INSERT INTO ss09 SET runner_id='69',ss_date='2009-09-20',sex='M',age='45',score='53.692012',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='55.017481',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("69 M45 53.692012<br>");
$sql = "INSERT INTO ss09 SET runner_id='86',ss_date='2009-09-20',sex='M',age='50',score='42.908757',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='43.376427',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("86 M50 42.908757<br>");
$sql = "INSERT INTO ss09 SET runner_id='87',ss_date='2009-09-20',sex='M',age='16',score='59.887262',wh_sc='0',ye_sc='0',or_sc='116.259377',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("87 M16 59.887262<br>");
$sql = "INSERT INTO ss09 SET runner_id='96',ss_date='2009-09-20',sex='M',age='55',score='43.020372',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='61.027671',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("96 M55 43.020372<br>");
$sql = "INSERT INTO ss09 SET runner_id='100',ss_date='2009-09-20',sex='F',age='16',score='25.5951',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("100 F16 25.5951<br>");
$sql = "INSERT INTO ss09 SET runner_id='131',ss_date='2009-09-20',sex='M',age='40',score='100.603342',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='101.238703',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("131 M40 100.603342<br>");
$sql = "INSERT INTO ss09 SET runner_id='162',ss_date='2009-09-20',sex='M',age='35',score='51.752243',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='47.10591',bl_sc='69.602767'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("162 M35 51.752243<br>");
$sql = "INSERT INTO ss09 SET runner_id='169',ss_date='2009-09-20',sex='M',age='60',score='28.223872',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='39.74292',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("169 M60 28.223872<br>");
$sql = "INSERT INTO ss09 SET runner_id='176',ss_date='2009-09-20',sex='M',age='55',score='70.112451',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='98.389428',re_sc='65.708793',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("176 M55 70.112451<br>");
$sql = "INSERT INTO ss09 SET runner_id='226',ss_date='2009-09-20',sex='M',age='80',score='23.995427',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='37.885247',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("226 M80 23.995427<br>");
$sql = "INSERT INTO ss09 SET runner_id='248',ss_date='2009-09-20',sex='M',age='60',score='49.388811',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='104.301971',gr_sc='67.067737',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("248 M60 49.388811<br>");
$sql = "INSERT INTO ss09 SET runner_id='253',ss_date='2009-09-20',sex='M',age='40',score='36.269583',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("253 M40 36.269583<br>");
$sql = "INSERT INTO ss09 SET runner_id='254',ss_date='2009-09-20',sex='F',age='55',score='25.650074',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("254 F55 25.650074<br>");
$sql = "INSERT INTO ss09 SET runner_id='255',ss_date='2009-09-20',sex='M',age='20',score='38.491366',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("255 M20 38.491366<br>");
$sql = "INSERT INTO ss09 SET runner_id='267',ss_date='2009-09-20',sex='F',age='18',score='64.908365',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='61.295708',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("267 F18 64.908365<br>");
$sql = "INSERT INTO ss09 SET runner_id='269',ss_date='2009-09-20',sex='F',age='14',score='37.288051',wh_sc='0',ye_sc='0',or_sc='77.255224',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("269 F14 37.288051<br>");
$sql = "INSERT INTO ss09 SET runner_id='270',ss_date='2009-09-20',sex='M',age='50',score='79.705285',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='111.419252',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("270 M50 79.705285<br>");
$sql = "INSERT INTO ss09 SET runner_id='376',ss_date='2009-09-20',sex='M',age='50',score='65.019946',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='51.575495',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("376 M50 65.019946<br>");
$sql = "INSERT INTO ss09 SET runner_id='418',ss_date='2009-09-20',sex='M',age='60',score='44.122876',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("418 M60 44.122876<br>");
$sql = "INSERT INTO ss09 SET runner_id='428',ss_date='2009-09-20',sex='M',age='50',score='38.661245',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='75.151439',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("428 M50 38.661245<br>");
$sql = "INSERT INTO ss09 SET runner_id='463',ss_date='2009-09-20',sex='M',age='45',score='29.942035',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='53.437777',gr_sc='40.17529',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("463 M45 29.942035<br>");
$sql = "INSERT INTO ss09 SET runner_id='499',ss_date='2009-09-20',sex='M',age='50',score='38.37159',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='53.857925',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("499 M50 38.37159<br>");
$sql = "INSERT INTO ss09 SET runner_id='522',ss_date='2009-09-20',sex='F',age='50',score='31.34027',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='63.981504',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("522 F50 31.34027<br>");
$sql = "INSERT INTO ss09 SET runner_id='545',ss_date='2009-09-20',sex='M',age='21',score='77.272191',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='76.925425',bl_sc='102.577022'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("545 M21 77.272191<br>");
$sql = "INSERT INTO ss09 SET runner_id='567',ss_date='2009-09-20',sex='M',age='55',score='57.965479',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='78.27581',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("567 M55 57.965479<br>");
$sql = "INSERT INTO ss09 SET runner_id='568',ss_date='2009-09-20',sex='F',age='55',score='20.563838',wh_sc='0',ye_sc='0',or_sc='42.420993',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("568 F55 20.563838<br>");
$sql = "INSERT INTO ss09 SET runner_id='600',ss_date='2009-09-20',sex='M',age='35',score='23.057577',wh_sc='103.914651',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("600 M35 23.057577<br>");
$sql = "INSERT INTO ss09 SET runner_id='601',ss_date='2009-09-20',sex='M',age='60',score='35.23084',wh_sc='0',ye_sc='99.138851',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("601 M60 35.23084<br>");
$sql = "INSERT INTO ss09 SET runner_id='606',ss_date='2009-09-20',sex='M',age='21',score='44.825762',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("606 M21 44.825762<br>");
$sql = "INSERT INTO ss09 SET runner_id='613',ss_date='2009-09-20',sex='M',age='50',score='56.416967',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='77.48821',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("613 M50 56.416967<br>");
$sql = "INSERT INTO ss09 SET runner_id='614',ss_date='2009-09-20',sex='F',age='50',score='48.381905',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='65.054107',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("614 F50 48.381905<br>");
$sql = "INSERT INTO ss09 SET runner_id='615',ss_date='2009-09-20',sex='F',age='10',score='20.181945',wh_sc='87.589691',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("615 F10 20.181945<br>");
$sql = "INSERT INTO ss09 SET runner_id='616',ss_date='2009-09-20',sex='M',age='16',score='23.672911',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='50.885799',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("616 M16 23.672911<br>");
$sql = "INSERT INTO ss09 SET runner_id='626',ss_date='2009-09-20',sex='M',age='21',score='72.269002',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='72.193896',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("626 M21 72.269002<br>");
$sql = "INSERT INTO ss09 SET runner_id='630',ss_date='2009-09-20',sex='M',age='40',score='28.206776',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("630 M40 28.206776<br>");
$sql = "INSERT INTO ss09 SET runner_id='633',ss_date='2009-09-20',sex='M',age='16',score='33.130267',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("633 M16 33.130267<br>");
$sql = "INSERT INTO ss09 SET runner_id='634',ss_date='2009-09-20',sex='M',age='40',score='48.737566',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='100.423901',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("634 M40 48.737566<br>");
$sql = "INSERT INTO ss09 SET runner_id='636',ss_date='2009-09-20',sex='F',age='35',score='45.729956',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='63.403026',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("636 F35 45.729956<br>");
$sql = "INSERT INTO ss09 SET runner_id='637',ss_date='2009-09-20',sex='M',age='10',score='21.538623',wh_sc='94.715884',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("637 M10 21.538623<br>");
$sql = "INSERT INTO ss09 SET runner_id='666',ss_date='2009-09-20',sex='F',age='55',score='30.576447',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='61.237723',gr_sc='43.550231',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("666 F55 30.576447<br>");
$sql = "INSERT INTO ss09 SET runner_id='667',ss_date='2009-09-20',sex='M',age='55',score='29.524955',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='53.819953',gr_sc='42.998851',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("667 M55 29.524955<br>");
$sql = "INSERT INTO ss09 SET runner_id='673',ss_date='2009-09-20',sex='M',age='45',score='35.598669',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("673 M45 35.598669<br>");
$sql = "INSERT INTO ss09 SET runner_id='748',ss_date='2009-09-20',sex='M',age='10',score='21.921753',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("748 M10 21.921753<br>");
$sql = "INSERT INTO ss09 SET runner_id='767',ss_date='2009-09-20',sex='M',age='40',score='63.961938',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='51.969383',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("767 M40 63.961938<br>");
$sql = "INSERT INTO ss09 SET runner_id='783',ss_date='2009-09-20',sex='F',age='70',score='21.178545',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("783 F70 21.178545<br>");
$sql = "INSERT INTO ss09 SET runner_id='784',ss_date='2009-09-20',sex='F',age='50',score='18.647255',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("784 F50 18.647255<br>");
$sql = "INSERT INTO ss09 SET runner_id='796',ss_date='2009-09-20',sex='M',age='60',score='27.859478',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("796 M60 27.859478<br>");
$sql = "INSERT INTO ss09 SET runner_id='797',ss_date='2009-09-20',sex='F',age='55',score='44.329728',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='59.47834',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("797 F55 44.329728<br>");
$sql = "INSERT INTO ss09 SET runner_id='798',ss_date='2009-09-20',sex='M',age='60',score='31.537589',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='64.663946',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("798 M60 31.537589<br>");
$sql = "INSERT INTO ss09 SET runner_id='799',ss_date='2009-09-20',sex='M',age='45',score='72.22214',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='70.636065',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("799 M45 72.22214<br>");
$sql = "INSERT INTO ss09 SET runner_id='862',ss_date='2009-09-20',sex='M',age='21',score='37.587046',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("862 M21 37.587046<br>");
$sql = "INSERT INTO ss09 SET runner_id='899',ss_date='2009-09-20',sex='M',age='60',score='46.65836',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='40.815342',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("899 M60 46.65836<br>");
$sql = "INSERT INTO ss09 SET runner_id='958',ss_date='2009-09-20',sex='M',age='45',score='16.086943',wh_sc='0',ye_sc='39.428344',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("958 M45 16.086943<br>");
$sql = "INSERT INTO ss09 SET runner_id='969',ss_date='2009-09-20',sex='F',age='21',score='44.185544',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='62.138202',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("969 F21 44.185544<br>");
$sql = "INSERT INTO ss09 SET runner_id='970',ss_date='2009-09-20',sex='F',age='55',score='19.221911',wh_sc='0',ye_sc='0',or_sc='39.334016',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("970 F55 19.221911<br>");
$sql = "INSERT INTO ss09 SET runner_id='1022',ss_date='2009-09-20',sex='M',age='14',score='45.30508',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1022 M14 45.30508<br>");
$sql = "INSERT INTO ss09 SET runner_id='1088',ss_date='2009-09-20',sex='M',age='60',score='37.877125',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='53.218299',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1088 M60 37.877125<br>");
$sql = "INSERT INTO ss09 SET runner_id='1151',ss_date='2009-09-20',sex='F',age='65',score='19.481799',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='39.962736',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1151 F65 19.481799<br>");
$sql = "INSERT INTO ss09 SET runner_id='1189',ss_date='2009-09-20',sex='M',age='70',score='46.754554',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1189 M70 46.754554<br>");
$sql = "INSERT INTO ss09 SET runner_id='1190',ss_date='2009-09-20',sex='M',age='40',score='66.689578',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='67.787899',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1190 M40 66.689578<br>");
$sql = "INSERT INTO ss09 SET runner_id='1198',ss_date='2009-09-20',sex='M',age='65',score='46.137503',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='62.814519',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1198 M65 46.137503<br>");
$sql = "INSERT INTO ss09 SET runner_id='1218',ss_date='2009-09-20',sex='M',age='40',score='82.053167',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='82.656299',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1218 M40 82.053167<br>");
$sql = "INSERT INTO ss09 SET runner_id='1238',ss_date='2009-09-20',sex='M',age='55',score='28.885317',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='43.117222',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1238 M55 28.885317<br>");
$sql = "INSERT INTO ss09 SET runner_id='1250',ss_date='2009-09-20',sex='M',age='35',score='99.504882',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='99.468934',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1250 M35 99.504882<br>");
$sql = "INSERT INTO ss09 SET runner_id='1282',ss_date='2009-09-20',sex='F',age='50',score='46.983586',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1282 F50 46.983586<br>");
$sql = "INSERT INTO ss09 SET runner_id='1318',ss_date='2009-09-20',sex='M',age='50',score='22.220627',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='44.331789',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1318 M50 22.220627<br>");
$sql = "INSERT INTO ss09 SET runner_id='1364',ss_date='2009-09-20',sex='M',age='40',score='60.154761',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='60.691862',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1364 M40 60.154761<br>");
$sql = "INSERT INTO ss09 SET runner_id='1397',ss_date='2009-09-20',sex='M',age='16',score='54.107033',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='57.124686',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1397 M16 54.107033<br>");
$sql = "INSERT INTO ss09 SET runner_id='1398',ss_date='2009-09-20',sex='M',age='45',score='34.648625',wh_sc='0',ye_sc='91.006025',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1398 M45 34.648625<br>");
$sql = "INSERT INTO ss09 SET runner_id='1417',ss_date='2009-09-20',sex='M',age='60',score='30.302569',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1417 M60 30.302569<br>");
$sql = "INSERT INTO ss09 SET runner_id='1432',ss_date='2009-09-20',sex='M',age='45',score='80.940374',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='78.139092',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1432 M45 80.940374<br>");
$sql = "INSERT INTO ss09 SET runner_id='1480',ss_date='2009-09-20',sex='F',age='21',score='28.112138',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='41.311909',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1480 F21 28.112138<br>");
$sql = "INSERT INTO ss09 SET runner_id='1503',ss_date='2009-09-20',sex='F',age='55',score='21.492595',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='39.79067',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1503 F55 21.492595<br>");
$sql = "INSERT INTO ss09 SET runner_id='1504',ss_date='2009-09-20',sex='M',age='60',score='40.614741',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='63.410937',re_sc='31.743622',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1504 M60 40.614741<br>");
$sql = "INSERT INTO ss09 SET runner_id='1518',ss_date='2009-09-20',sex='F',age='21',score='73.993562',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1518 F21 73.993562<br>");
$sql = "INSERT INTO ss09 SET runner_id='1519',ss_date='2009-09-20',sex='M',age='50',score='35.126046',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1519 M50 35.126046<br>");
$sql = "INSERT INTO ss09 SET runner_id='1540',ss_date='2009-09-20',sex='M',age='45',score='28.281248',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1540 M45 28.281248<br>");
$sql = "INSERT INTO ss09 SET runner_id='1548',ss_date='2009-09-20',sex='F',age='40',score='32.696049',wh_sc='0',ye_sc='0',or_sc='51.841758',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1548 F40 32.696049<br>");
$sql = "INSERT INTO ss09 SET runner_id='1566',ss_date='2009-09-20',sex='F',age='14',score='31.327476',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1566 F14 31.327476<br>");
$sql = "INSERT INTO ss09 SET runner_id='1567',ss_date='2009-09-20',sex='M',age='50',score='59.92109',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='60.006964',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1567 M50 59.92109<br>");
$sql = "INSERT INTO ss09 SET runner_id='1570',ss_date='2009-09-20',sex='M',age='18',score='58.259695',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='85.821338',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1570 M18 58.259695<br>");
$sql = "INSERT INTO ss09 SET runner_id='1602',ss_date='2009-09-20',sex='M',age='10',score='35.855955',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1602 M10 35.855955<br>");
$sql = "INSERT INTO ss09 SET runner_id='1603',ss_date='2009-09-20',sex='F',age='35',score='66.564574',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='90.191321',re_sc='56.187435',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1603 F35 66.564574<br>");
$sql = "INSERT INTO ss09 SET runner_id='1604',ss_date='2009-09-20',sex='M',age='12',score='29.815351',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1604 M12 29.815351<br>");
$sql = "INSERT INTO ss09 SET runner_id='1606',ss_date='2009-09-20',sex='M',age='35',score='98.310899',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='99.292362',bl_sc='127.820211'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1606 M35 98.310899<br>");
$sql = "INSERT INTO ss09 SET runner_id='1667',ss_date='2009-09-20',sex='M',age='50',score='38.965625',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='78.480305',gr_sc='53.389757',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1667 M50 38.965625<br>");
$sql = "INSERT INTO ss09 SET runner_id='1676',ss_date='2009-09-20',sex='F',age='55',score='24.271773',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='34.340248',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1676 F55 24.271773<br>");
$sql = "INSERT INTO ss09 SET runner_id='1718',ss_date='2009-09-20',sex='M',age='60',score='49.270075',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='95.274128',gr_sc='71.484314',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1718 M60 49.270075<br>");
$sql = "INSERT INTO ss09 SET runner_id='1746',ss_date='2009-09-20',sex='F',age='50',score='37.970339',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='77.910693',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1746 F50 37.970339<br>");
$sql = "INSERT INTO ss09 SET runner_id='1771',ss_date='2009-09-20',sex='F',age='60',score='26.285144',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='45.636458',gr_sc='35.685748',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1771 F60 26.285144<br>");
$sql = "INSERT INTO ss09 SET runner_id='1812',ss_date='2009-09-20',sex='F',age='45',score='26.361405',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1812 F45 26.361405<br>");
$sql = "INSERT INTO ss09 SET runner_id='1878',ss_date='2009-09-20',sex='F',age='50',score='29.707652',wh_sc='0',ye_sc='66.854282',or_sc='63.61753',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1878 F50 29.707652<br>");
$sql = "INSERT INTO ss09 SET runner_id='1879',ss_date='2009-09-20',sex='M',age='50',score='55.864069',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='79.297889',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1879 M50 55.864069<br>");
$sql = "INSERT INTO ss09 SET runner_id='1916',ss_date='2009-09-20',sex='F',age='55',score='25.443589',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='52.342921',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1916 F55 25.443589<br>");
$sql = "INSERT INTO ss09 SET runner_id='1923',ss_date='2009-09-20',sex='M',age='14',score='43.451848',wh_sc='0',ye_sc='109.855124',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1923 M14 43.451848<br>");
$sql = "INSERT INTO ss09 SET runner_id='1925',ss_date='2009-09-20',sex='M',age='16',score='52.460956',wh_sc='0',ye_sc='0',or_sc='106.485399',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1925 M16 52.460956<br>");
$sql = "INSERT INTO ss09 SET runner_id='1926',ss_date='2009-09-20',sex='M',age='18',score='58.46409',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='69.394954',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1926 M18 58.46409<br>");
$sql = "INSERT INTO ss09 SET runner_id='1928',ss_date='2009-09-20',sex='M',age='50',score='64.712772',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='80.84186',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1928 M50 64.712772<br>");
$sql = "INSERT INTO ss09 SET runner_id='1953',ss_date='2009-09-20',sex='M',age='55',score='55.371362',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1953 M55 55.371362<br>");
$sql = "INSERT INTO ss09 SET runner_id='1991',ss_date='2009-09-20',sex='M',age='60',score='31.620466',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='71.853004',gr_sc='43.171947',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1991 M60 31.620466<br>");
$sql = "INSERT INTO ss09 SET runner_id='1992',ss_date='2009-09-20',sex='F',age='60',score='23.730418',wh_sc='0',ye_sc='0',or_sc='44.660297',bn_sc='49.000519',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1992 F60 23.730418<br>");
$sql = "INSERT INTO ss09 SET runner_id='2108',ss_date='2009-09-20',sex='M',age='60',score='36.373298',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='36.775987',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2108 M60 36.373298<br>");
$sql = "INSERT INTO ss09 SET runner_id='2122',ss_date='2009-09-20',sex='M',age='55',score='51.75715',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='69.352604',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2122 M55 51.75715<br>");
$sql = "INSERT INTO ss09 SET runner_id='2160',ss_date='2009-09-20',sex='M',age='65',score='45.286297',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='63.496883',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2160 M65 45.286297<br>");
$sql = "INSERT INTO ss09 SET runner_id='2198',ss_date='2009-09-20',sex='F',age='40',score='53.111459',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='74.284764',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2198 F40 53.111459<br>");
$sql = "INSERT INTO ss09 SET runner_id='2200',ss_date='2009-09-20',sex='M',age='10',score='25.971718',wh_sc='0',ye_sc='65.339602',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2200 M10 25.971718<br>");
$sql = "INSERT INTO ss09 SET runner_id='2201',ss_date='2009-09-20',sex='M',age='18',score='28.143109',wh_sc='0',ye_sc='0',or_sc='56.410363',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2201 M18 28.143109<br>");
$sql = "INSERT INTO ss09 SET runner_id='2207',ss_date='2009-09-20',sex='M',age='21',score='99.891776',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2207 M21 99.891776<br>");
$sql = "INSERT INTO ss09 SET runner_id='2227',ss_date='2009-09-20',sex='M',age='40',score='64.042084',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='64.672815',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2227 M40 64.042084<br>");
$sql = "INSERT INTO ss09 SET runner_id='2254',ss_date='2009-09-20',sex='F',age='16',score='26.54008',wh_sc='0',ye_sc='69.794899',or_sc='45.250425',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2254 F16 26.54008<br>");
$sql = "INSERT INTO ss09 SET runner_id='2255',ss_date='2009-09-20',sex='G',age='2',score='38.213039',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2255 G2 38.213039<br>");
$sql = "INSERT INTO ss09 SET runner_id='2257',ss_date='2009-09-20',sex='M',age='50',score='17.708812',wh_sc='0',ye_sc='38.464029',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2257 M50 17.708812<br>");
$sql = "INSERT INTO ss09 SET runner_id='2267',ss_date='2009-09-20',sex='M',age='45',score='26.26014',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2267 M45 26.26014<br>");
$sql = "INSERT INTO ss09 SET runner_id='2275',ss_date='2009-09-20',sex='M',age='21',score='41.789071',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2275 M21 41.789071<br>");
$sql = "INSERT INTO ss09 SET runner_id='2303',ss_date='2009-09-20',sex='G',age='2',score='25.795372',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='41.942127',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2303 G2 25.795372<br>");
$sql = "INSERT INTO ss09 SET runner_id='2312',ss_date='2009-09-20',sex='F',age='8',score='23.017878',wh_sc='101.369465',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2312 F8 23.017878<br>");
$sql = "INSERT INTO ss09 SET runner_id='2341',ss_date='2009-09-20',sex='M',age='60',score='18.754753',wh_sc='0',ye_sc='0',or_sc='38.578559',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2341 M60 18.754753<br>");
$sql = "INSERT INTO ss09 SET runner_id='2412',ss_date='2009-09-20',sex='M',age='21',score='51.951049',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='49.948238',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2412 M21 51.951049<br>");
$sql = "INSERT INTO ss09 SET runner_id='2414',ss_date='2009-09-20',sex='M',age='60',score='25.72093',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2414 M60 25.72093<br>");
$sql = "INSERT INTO ss09 SET runner_id='2444',ss_date='2009-09-20',sex='F',age='10',score='20.136855',wh_sc='0',ye_sc='49.8006',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2444 F10 20.136855<br>");
$sql = "INSERT INTO ss09 SET runner_id='2473',ss_date='2009-09-20',sex='F',age='16',score='23.230894',wh_sc='0',ye_sc='56.492234',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2473 F16 23.230894<br>");
$sql = "INSERT INTO ss09 SET runner_id='2481',ss_date='2009-09-20',sex='M',age='45',score='39.069487',wh_sc='0',ye_sc='0',or_sc='74.716782',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2481 M45 39.069487<br>");
$sql = "INSERT INTO ss09 SET runner_id='2481',ss_date='2009-09-27',sex='M',age='45',score='39.107909',wh_sc='0',ye_sc='0',or_sc='73.416611',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2481 M45 39.107909<br>");
$sql = "INSERT INTO ss09 SET runner_id='2560',ss_date='2009-09-27',sex='M',age='50',score='17.362747',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2560 M50 17.362747<br>");
$sql = "INSERT INTO ss09 SET runner_id='2473',ss_date='2009-09-27',sex='F',age='16',score='23.181045',wh_sc='0',ye_sc='56.128017',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2473 F16 23.181045<br>");
$sql = "INSERT INTO ss09 SET runner_id='2491',ss_date='2009-09-27',sex='F',age='20',score='23.215876',wh_sc='0',ye_sc='57.33419',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2491 F20 23.215876<br>");
$sql = "INSERT INTO ss09 SET runner_id='2444',ss_date='2009-09-27',sex='F',age='10',score='20.03743',wh_sc='0',ye_sc='49.459553',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2444 F10 20.03743<br>");
$sql = "INSERT INTO ss09 SET runner_id='2414',ss_date='2009-09-27',sex='M',age='60',score='22.55044',wh_sc='0',ye_sc='0',or_sc='32.590079',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2414 M60 22.55044<br>");
$sql = "INSERT INTO ss09 SET runner_id='2412',ss_date='2009-09-27',sex='M',age='21',score='52.007142',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='49.961621',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2412 M21 52.007142<br>");
$sql = "INSERT INTO ss09 SET runner_id='2341',ss_date='2009-09-27',sex='M',age='60',score='18.836955',wh_sc='0',ye_sc='0',or_sc='38.009888',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2341 M60 18.836955<br>");
$sql = "INSERT INTO ss09 SET runner_id='2312',ss_date='2009-09-27',sex='F',age='8',score='22.934012',wh_sc='104.232262',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2312 F8 22.934012<br>");
$sql = "INSERT INTO ss09 SET runner_id='2303',ss_date='2009-09-27',sex='G',age='2',score='25.934067',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='41.861963',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2303 G2 25.934067<br>");
$sql = "INSERT INTO ss09 SET runner_id='2300',ss_date='2009-09-27',sex='G',age='2',score='27.038664',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2300 G2 27.038664<br>");
$sql = "INSERT INTO ss09 SET runner_id='2275',ss_date='2009-09-27',sex='M',age='21',score='41.647717',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2275 M21 41.647717<br>");
$sql = "INSERT INTO ss09 SET runner_id='2267',ss_date='2009-09-27',sex='M',age='45',score='26.280678',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2267 M45 26.280678<br>");
$sql = "INSERT INTO ss09 SET runner_id='2257',ss_date='2009-09-27',sex='M',age='50',score='17.751144',wh_sc='0',ye_sc='38.416457',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2257 M50 17.751144<br>");
$sql = "INSERT INTO ss09 SET runner_id='2255',ss_date='2009-09-27',sex='G',age='2',score='38.232497',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2255 G2 38.232497<br>");
$sql = "INSERT INTO ss09 SET runner_id='2254',ss_date='2009-09-27',sex='F',age='16',score='27.585304',wh_sc='0',ye_sc='76.157444',or_sc='44.562546',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2254 F16 27.585304<br>");
$sql = "INSERT INTO ss09 SET runner_id='2227',ss_date='2009-09-27',sex='M',age='40',score='64.057535',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='64.726607',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2227 M40 64.057535<br>");
$sql = "INSERT INTO ss09 SET runner_id='2207',ss_date='2009-09-27',sex='M',age='21',score='99.864068',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2207 M21 99.864068<br>");
$sql = "INSERT INTO ss09 SET runner_id='2201',ss_date='2009-09-27',sex='M',age='18',score='28.190901',wh_sc='0',ye_sc='0',or_sc='55.600787',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2201 M18 28.190901<br>");
$sql = "INSERT INTO ss09 SET runner_id='2200',ss_date='2009-09-27',sex='M',age='10',score='25.763425',wh_sc='0',ye_sc='64.212072',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2200 M10 25.763425<br>");
$sql = "INSERT INTO ss09 SET runner_id='2198',ss_date='2009-09-27',sex='F',age='40',score='53.387425',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='74.38121',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2198 F40 53.387425<br>");
$sql = "INSERT INTO ss09 SET runner_id='2160',ss_date='2009-09-27',sex='M',age='65',score='44.375304',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='61.923964',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2160 M65 44.375304<br>");
$sql = "INSERT INTO ss09 SET runner_id='2122',ss_date='2009-09-27',sex='M',age='55',score='51.583491',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='69.709086',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2122 M55 51.583491<br>");
$sql = "INSERT INTO ss09 SET runner_id='2108',ss_date='2009-09-27',sex='M',age='60',score='36.258748',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='36.575235',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2108 M60 36.258748<br>");
$sql = "INSERT INTO ss09 SET runner_id='2056',ss_date='2009-09-27',sex='M',age='60',score='28.948387',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2056 M60 28.948387<br>");
$sql = "INSERT INTO ss09 SET runner_id='1992',ss_date='2009-09-27',sex='F',age='60',score='23.167254',wh_sc='0',ye_sc='0',or_sc='44.118984',bn_sc='45.534489',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1992 F60 23.167254<br>");
$sql = "INSERT INTO ss09 SET runner_id='1991',ss_date='2009-09-27',sex='M',age='60',score='32.556573',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='69.360721',gr_sc='43.889926',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1991 M60 32.556573<br>");
$sql = "INSERT INTO ss09 SET runner_id='1953',ss_date='2009-09-27',sex='M',age='55',score='55.612094',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1953 M55 55.612094<br>");
$sql = "INSERT INTO ss09 SET runner_id='1928',ss_date='2009-09-27',sex='M',age='50',score='64.914671',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='80.791702',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1928 M50 64.914671<br>");
$sql = "INSERT INTO ss09 SET runner_id='1926',ss_date='2009-09-27',sex='M',age='18',score='58.685474',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='69.529078',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1926 M18 58.685474<br>");
$sql = "INSERT INTO ss09 SET runner_id='1925',ss_date='2009-09-27',sex='M',age='16',score='52.616465',wh_sc='0',ye_sc='0',or_sc='104.557728',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1925 M16 52.616465<br>");
$sql = "INSERT INTO ss09 SET runner_id='1923',ss_date='2009-09-27',sex='M',age='14',score='43.742845',wh_sc='0',ye_sc='110.760051',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1923 M14 43.742845<br>");
$sql = "INSERT INTO ss09 SET runner_id='1916',ss_date='2009-09-27',sex='F',age='55',score='25.49853',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='50.331868',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1916 F55 25.49853<br>");
$sql = "INSERT INTO ss09 SET runner_id='1879',ss_date='2009-09-27',sex='M',age='50',score='56.650396',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='80.234887',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1879 M50 56.650396<br>");
$sql = "INSERT INTO ss09 SET runner_id='1878',ss_date='2009-09-27',sex='F',age='50',score='29.332399',wh_sc='0',ye_sc='66.617687',or_sc='62.840189',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1878 F50 29.332399<br>");
$sql = "INSERT INTO ss09 SET runner_id='1812',ss_date='2009-09-27',sex='F',age='45',score='26.761606',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1812 F45 26.761606<br>");
$sql = "INSERT INTO ss09 SET runner_id='1771',ss_date='2009-09-27',sex='F',age='60',score='26.373122',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='44.064407',gr_sc='35.729136',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1771 F60 26.373122<br>");
$sql = "INSERT INTO ss09 SET runner_id='1746',ss_date='2009-09-27',sex='F',age='50',score='38.10603',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='74.999826',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1746 F50 38.10603<br>");
$sql = "INSERT INTO ss09 SET runner_id='1718',ss_date='2009-09-27',sex='M',age='60',score='50.827284',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='101.96524',gr_sc='71.540182',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1718 M60 50.827284<br>");
$sql = "INSERT INTO ss09 SET runner_id='1676',ss_date='2009-09-27',sex='F',age='55',score='24.235405',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='34.186938',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1676 F55 24.235405<br>");
$sql = "INSERT INTO ss09 SET runner_id='1667',ss_date='2009-09-27',sex='M',age='50',score='39.034018',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='75.463974',gr_sc='53.40581',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1667 M50 39.034018<br>");
$sql = "INSERT INTO ss09 SET runner_id='1606',ss_date='2009-09-27',sex='M',age='35',score='98.257196',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='99.297327',bl_sc='127.849534'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1606 M35 98.257196<br>");
$sql = "INSERT INTO ss09 SET runner_id='1604',ss_date='2009-09-27',sex='M',age='12',score='31.424403',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1604 M12 31.424403<br>");
$sql = "INSERT INTO ss09 SET runner_id='1603',ss_date='2009-09-27',sex='F',age='35',score='68.163314',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='90.10504',re_sc='72.380328',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1603 F35 68.163314<br>");
$sql = "INSERT INTO ss09 SET runner_id='1602',ss_date='2009-09-27',sex='M',age='10',score='35.595474',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1602 M10 35.595474<br>");
$sql = "INSERT INTO ss09 SET runner_id='1570',ss_date='2009-09-27',sex='M',age='18',score='58.425551',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='85.822149',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1570 M18 58.425551<br>");
$sql = "INSERT INTO ss09 SET runner_id='1567',ss_date='2009-09-27',sex='M',age='50',score='59.678376',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='59.70327',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1567 M50 59.678376<br>");
$sql = "INSERT INTO ss09 SET runner_id='1566',ss_date='2009-09-27',sex='F',age='14',score='31.405323',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1566 F14 31.405323<br>");
$sql = "INSERT INTO ss09 SET runner_id='1548',ss_date='2009-09-27',sex='F',age='40',score='31.299036',wh_sc='0',ye_sc='0',or_sc='50.481553',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1548 F40 31.299036<br>");
$sql = "INSERT INTO ss09 SET runner_id='1540',ss_date='2009-09-27',sex='M',age='45',score='28.36164',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1540 M45 28.36164<br>");
$sql = "INSERT INTO ss09 SET runner_id='1519',ss_date='2009-09-27',sex='M',age='50',score='35.309753',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1519 M50 35.309753<br>");
$sql = "INSERT INTO ss09 SET runner_id='1518',ss_date='2009-09-27',sex='F',age='21',score='73.946505',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1518 F21 73.946505<br>");
$sql = "INSERT INTO ss09 SET runner_id='1504',ss_date='2009-09-27',sex='M',age='60',score='39.417372',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='61.162567',re_sc='31.737075',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1504 M60 39.417372<br>");
$sql = "INSERT INTO ss09 SET runner_id='1503',ss_date='2009-09-27',sex='F',age='55',score='20.549232',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='38.296803',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1503 F55 20.549232<br>");
$sql = "INSERT INTO ss09 SET runner_id='1480',ss_date='2009-09-27',sex='F',age='21',score='28.160349',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='39.793021',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1480 F21 28.160349<br>");
$sql = "INSERT INTO ss09 SET runner_id='1432',ss_date='2009-09-27',sex='M',age='45',score='80.79818',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='78.537491',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1432 M45 80.79818<br>");
$sql = "INSERT INTO ss09 SET runner_id='1417',ss_date='2009-09-27',sex='M',age='60',score='30.148519',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1417 M60 30.148519<br>");
$sql = "INSERT INTO ss09 SET runner_id='1398',ss_date='2009-09-27',sex='M',age='45',score='34.904663',wh_sc='0',ye_sc='91.586785',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1398 M45 34.904663<br>");
$sql = "INSERT INTO ss09 SET runner_id='1397',ss_date='2009-09-27',sex='M',age='16',score='54.328215',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='57.246674',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1397 M16 54.328215<br>");
$sql = "INSERT INTO ss09 SET runner_id='1364',ss_date='2009-09-27',sex='M',age='40',score='60.186124',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='60.665667',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1364 M40 60.186124<br>");
$sql = "INSERT INTO ss09 SET runner_id='1318',ss_date='2009-09-27',sex='M',age='50',score='21.114407',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='42.481076',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1318 M50 21.114407<br>");
$sql = "INSERT INTO ss09 SET runner_id='1282',ss_date='2009-09-27',sex='F',age='50',score='47.021226',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1282 F50 47.021226<br>");
$sql = "INSERT INTO ss09 SET runner_id='1250',ss_date='2009-09-27',sex='M',age='35',score='99.530541',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='99.490997',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1250 M35 99.530541<br>");
$sql = "INSERT INTO ss09 SET runner_id='1238',ss_date='2009-09-27',sex='M',age='55',score='29.501243',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='43.757836',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1238 M55 29.501243<br>");
$sql = "INSERT INTO ss09 SET runner_id='1218',ss_date='2009-09-27',sex='M',age='40',score='82.166095',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='82.787011',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1218 M40 82.166095<br>");
$sql = "INSERT INTO ss09 SET runner_id='1198',ss_date='2009-09-27',sex='M',age='65',score='46.158407',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='62.595735',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1198 M65 46.158407<br>");
$sql = "INSERT INTO ss09 SET runner_id='1190',ss_date='2009-09-27',sex='M',age='40',score='66.96249',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='67.865841',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1190 M40 66.96249<br>");
$sql = "INSERT INTO ss09 SET runner_id='1189',ss_date='2009-09-27',sex='M',age='70',score='46.878828',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1189 M70 46.878828<br>");
$sql = "INSERT INTO ss09 SET runner_id='1151',ss_date='2009-09-27',sex='F',age='65',score='19.48576',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='38.45185',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1151 F65 19.48576<br>");
$sql = "INSERT INTO ss09 SET runner_id='1088',ss_date='2009-09-27',sex='M',age='60',score='38.031135',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='53.156606',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1088 M60 38.031135<br>");
$sql = "INSERT INTO ss09 SET runner_id='1022',ss_date='2009-09-27',sex='M',age='14',score='45.282304',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1022 M14 45.282304<br>");
$sql = "INSERT INTO ss09 SET runner_id='970',ss_date='2009-09-27',sex='F',age='55',score='18.404057',wh_sc='0',ye_sc='0',or_sc='36.579133',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("970 F55 18.404057<br>");
$sql = "INSERT INTO ss09 SET runner_id='969',ss_date='2009-09-27',sex='F',age='21',score='44.365999',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='62.140231',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("969 F21 44.365999<br>");
$sql = "INSERT INTO ss09 SET runner_id='958',ss_date='2009-09-27',sex='M',age='45',score='16.033131',wh_sc='0',ye_sc='39.360778',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("958 M45 16.033131<br>");
$sql = "INSERT INTO ss09 SET runner_id='899',ss_date='2009-09-27',sex='M',age='60',score='46.736788',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='40.792296',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("899 M60 46.736788<br>");
$sql = "INSERT INTO ss09 SET runner_id='862',ss_date='2009-09-27',sex='M',age='21',score='37.932406',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("862 M21 37.932406<br>");
$sql = "INSERT INTO ss09 SET runner_id='799',ss_date='2009-09-27',sex='M',age='45',score='72.240775',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='70.605862',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("799 M45 72.240775<br>");
$sql = "INSERT INTO ss09 SET runner_id='798',ss_date='2009-09-27',sex='M',age='60',score='32.522388',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='64.175877',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("798 M60 32.522388<br>");
$sql = "INSERT INTO ss09 SET runner_id='797',ss_date='2009-09-27',sex='F',age='55',score='43.775189',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='58.352656',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("797 F55 43.775189<br>");
$sql = "INSERT INTO ss09 SET runner_id='796',ss_date='2009-09-27',sex='M',age='60',score='27.816603',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("796 M60 27.816603<br>");
$sql = "INSERT INTO ss09 SET runner_id='784',ss_date='2009-09-27',sex='F',age='50',score='18.725439',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("784 F50 18.725439<br>");
$sql = "INSERT INTO ss09 SET runner_id='783',ss_date='2009-09-27',sex='F',age='70',score='22.951838',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='45.230346',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("783 F70 22.951838<br>");
$sql = "INSERT INTO ss09 SET runner_id='767',ss_date='2009-09-27',sex='M',age='40',score='57.330747',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='52.068014',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("767 M40 57.330747<br>");
$sql = "INSERT INTO ss09 SET runner_id='748',ss_date='2009-09-27',sex='M',age='10',score='22.61042',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("748 M10 22.61042<br>");
$sql = "INSERT INTO ss09 SET runner_id='673',ss_date='2009-09-27',sex='M',age='45',score='35.678169',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("673 M45 35.678169<br>");
$sql = "INSERT INTO ss09 SET runner_id='667',ss_date='2009-09-27',sex='M',age='55',score='30.548935',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='59.345399',gr_sc='42.998997',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("667 M55 30.548935<br>");
$sql = "INSERT INTO ss09 SET runner_id='666',ss_date='2009-09-27',sex='F',age='55',score='30.679028',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='59.257551',gr_sc='43.470403',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("666 F55 30.679028<br>");
$sql = "INSERT INTO ss09 SET runner_id='636',ss_date='2009-09-27',sex='F',age='35',score='46.517805',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='63.851685',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("636 F35 46.517805<br>");
$sql = "INSERT INTO ss09 SET runner_id='634',ss_date='2009-09-27',sex='M',age='40',score='49.302748',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='97.67066',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("634 M40 49.302748<br>");
$sql = "INSERT INTO ss09 SET runner_id='633',ss_date='2009-09-27',sex='M',age='16',score='33.298678',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("633 M16 33.298678<br>");
$sql = "INSERT INTO ss09 SET runner_id='630',ss_date='2009-09-27',sex='M',age='40',score='27.539102',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("630 M40 27.539102<br>");
$sql = "INSERT INTO ss09 SET runner_id='626',ss_date='2009-09-27',sex='M',age='21',score='72.298833',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='72.1581',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("626 M21 72.298833<br>");
$sql = "INSERT INTO ss09 SET runner_id='616',ss_date='2009-09-27',sex='M',age='16',score='23.68938',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='47.260342',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("616 M16 23.68938<br>");
$sql = "INSERT INTO ss09 SET runner_id='615',ss_date='2009-09-27',sex='F',age='10',score='18.862551',wh_sc='88.779892',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("615 F10 18.862551<br>");
$sql = "INSERT INTO ss09 SET runner_id='614',ss_date='2009-09-27',sex='F',age='50',score='47.955035',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='67.911516',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("614 F50 47.955035<br>");
$sql = "INSERT INTO ss09 SET runner_id='613',ss_date='2009-09-27',sex='M',age='50',score='56.633184',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='77.578584',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("613 M50 56.633184<br>");
$sql = "INSERT INTO ss09 SET runner_id='606',ss_date='2009-09-27',sex='M',age='21',score='44.957846',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("606 M21 44.957846<br>");
$sql = "INSERT INTO ss09 SET runner_id='601',ss_date='2009-09-27',sex='M',age='60',score='35.176903',wh_sc='0',ye_sc='97.653164',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("601 M60 35.176903<br>");
$sql = "INSERT INTO ss09 SET runner_id='600',ss_date='2009-09-27',sex='M',age='35',score='23.546512',wh_sc='106.987847',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("600 M35 23.546512<br>");
$sql = "INSERT INTO ss09 SET runner_id='568',ss_date='2009-09-27',sex='F',age='55',score='20.73864',wh_sc='0',ye_sc='0',or_sc='41.597229',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("568 F55 20.73864<br>");
$sql = "INSERT INTO ss09 SET runner_id='567',ss_date='2009-09-27',sex='M',age='55',score='57.810025',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='78.061941',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("567 M55 57.810025<br>");
$sql = "INSERT INTO ss09 SET runner_id='563',ss_date='2009-09-27',sex='F',age='55',score='55.996785',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("563 F55 55.996785<br>");
$sql = "INSERT INTO ss09 SET runner_id='545',ss_date='2009-09-27',sex='M',age='21',score='77.257975',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='76.917169',bl_sc='100.77945'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("545 M21 77.257975<br>");
$sql = "INSERT INTO ss09 SET runner_id='522',ss_date='2009-09-27',sex='F',age='50',score='31.324244',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='61.591136',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("522 F50 31.324244<br>");
$sql = "INSERT INTO ss09 SET runner_id='499',ss_date='2009-09-27',sex='M',age='50',score='38.545536',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='53.931239',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("499 M50 38.545536<br>");
$sql = "INSERT INTO ss09 SET runner_id='463',ss_date='2009-09-27',sex='M',age='45',score='30.019625',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='51.560981',gr_sc='40.160408',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("463 M45 30.019625<br>");
$sql = "INSERT INTO ss09 SET runner_id='428',ss_date='2009-09-27',sex='M',age='50',score='38.666043',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='72.182031',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("428 M50 38.666043<br>");
$sql = "INSERT INTO ss09 SET runner_id='418',ss_date='2009-09-27',sex='M',age='60',score='44.251685',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("418 M60 44.251685<br>");
$sql = "INSERT INTO ss09 SET runner_id='376',ss_date='2009-09-27',sex='M',age='50',score='65.130367',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='51.529785',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("376 M50 65.130367<br>");
$sql = "INSERT INTO ss09 SET runner_id='270',ss_date='2009-09-27',sex='M',age='50',score='80.11141',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='111.405295',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("270 M50 80.11141<br>");
$sql = "INSERT INTO ss09 SET runner_id='269',ss_date='2009-09-27',sex='F',age='14',score='37.40503',wh_sc='0',ye_sc='0',or_sc='75.632951',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("269 F14 37.40503<br>");
$sql = "INSERT INTO ss09 SET runner_id='267',ss_date='2009-09-27',sex='F',age='18',score='64.975787',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='61.194621',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("267 F18 64.975787<br>");
$sql = "INSERT INTO ss09 SET runner_id='255',ss_date='2009-09-27',sex='M',age='20',score='36.6838',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("255 M20 36.6838<br>");
$sql = "INSERT INTO ss09 SET runner_id='254',ss_date='2009-09-27',sex='F',age='55',score='23.982793',wh_sc='0',ye_sc='57.785584',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("254 F55 23.982793<br>");
$sql = "INSERT INTO ss09 SET runner_id='253',ss_date='2009-09-27',sex='M',age='40',score='36.353588',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("253 M40 36.353588<br>");
$sql = "INSERT INTO ss09 SET runner_id='248',ss_date='2009-09-27',sex='M',age='60',score='49.54823',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='100.3641',gr_sc='67.226569',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("248 M60 49.54823<br>");
$sql = "INSERT INTO ss09 SET runner_id='226',ss_date='2009-09-27',sex='M',age='80',score='23.995668',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='36.190828',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("226 M80 23.995668<br>");
$sql = "INSERT INTO ss09 SET runner_id='176',ss_date='2009-09-27',sex='M',age='55',score='70.306539',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='98.489665',re_sc='65.648714',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("176 M55 70.306539<br>");
$sql = "INSERT INTO ss09 SET runner_id='169',ss_date='2009-09-27',sex='M',age='60',score='28.367094',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='39.702157',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("169 M60 28.367094<br>");
$sql = "INSERT INTO ss09 SET runner_id='162',ss_date='2009-09-27',sex='M',age='35',score='52.504201',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='47.122891',bl_sc='71.371016'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("162 M35 52.504201<br>");
$sql = "INSERT INTO ss09 SET runner_id='131',ss_date='2009-09-27',sex='M',age='40',score='100.605391',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='101.211676',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("131 M40 100.605391<br>");
$sql = "INSERT INTO ss09 SET runner_id='100',ss_date='2009-09-27',sex='F',age='16',score='25.85614',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("100 F16 25.85614<br>");
$sql = "INSERT INTO ss09 SET runner_id='96',ss_date='2009-09-27',sex='M',age='55',score='44.02159',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='62.39619',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("96 M55 44.02159<br>");
$sql = "INSERT INTO ss09 SET runner_id='87',ss_date='2009-09-27',sex='M',age='16',score='60.846229',wh_sc='0',ye_sc='0',or_sc='119.809321',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("87 M16 60.846229<br>");
$sql = "INSERT INTO ss09 SET runner_id='86',ss_date='2009-09-27',sex='M',age='50',score='43.454359',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='43.376117',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("86 M50 43.454359<br>");
$sql = "INSERT INTO ss09 SET runner_id='69',ss_date='2009-09-27',sex='M',age='45',score='53.614653',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='55.019805',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("69 M45 53.614653<br>");
$sql = "INSERT INTO ss09 SET runner_id='48',ss_date='2009-09-27',sex='M',age='50',score='38.786985',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='54.433895',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("48 M50 38.786985<br>");
$sql = "INSERT INTO ss09 SET runner_id='13',ss_date='2009-09-27',sex='M',age='45',score='68.538226',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='69.988535',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("13 M45 68.538226<br>");
$sql = "INSERT INTO ss09 SET runner_id='12',ss_date='2009-09-27',sex='M',age='20',score='84.013991',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("12 M20 84.013991<br>");
$sql = "INSERT INTO ss09 SET runner_id='2',ss_date='2009-09-27',sex='F',age='45',score='41.268304',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='57.910495',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2 F45 41.268304<br>");
$sql = "INSERT INTO ss09 SET runner_id='2',ss_date='2009-10-04',sex='F',age='45',score='42.249657',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='59.139591',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2 F45 42.249657<br>");
$sql = "INSERT INTO ss09 SET runner_id='12',ss_date='2009-10-04',sex='M',age='20',score='83.811399',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("12 M20 83.811399<br>");
$sql = "INSERT INTO ss09 SET runner_id='13',ss_date='2009-10-04',sex='M',age='45',score='68.370276',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='69.803093',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("13 M45 68.370276<br>");
$sql = "INSERT INTO ss09 SET runner_id='28',ss_date='2009-10-04',sex='M',age='45',score='44.369551',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("28 M45 44.369551<br>");
$sql = "INSERT INTO ss09 SET runner_id='48',ss_date='2009-10-04',sex='M',age='50',score='38.246854',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='53.334805',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("48 M50 38.246854<br>");
$sql = "INSERT INTO ss09 SET runner_id='69',ss_date='2009-10-04',sex='M',age='45',score='52.959145',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='54.898873',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("69 M45 52.959145<br>");
$sql = "INSERT INTO ss09 SET runner_id='86',ss_date='2009-10-04',sex='M',age='50',score='43.17391',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='43.088886',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("86 M50 43.17391<br>");
$sql = "INSERT INTO ss09 SET runner_id='87',ss_date='2009-10-04',sex='M',age='16',score='59.707399',wh_sc='0',ye_sc='0',or_sc='115.209653',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("87 M16 59.707399<br>");
$sql = "INSERT INTO ss09 SET runner_id='96',ss_date='2009-10-04',sex='M',age='55',score='43.955623',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='62.158976',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("96 M55 43.955623<br>");
$sql = "INSERT INTO ss09 SET runner_id='100',ss_date='2009-10-04',sex='F',age='16',score='25.662467',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("100 F16 25.662467<br>");
$sql = "INSERT INTO ss09 SET runner_id='131',ss_date='2009-10-04',sex='M',age='40',score='100.673568',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='101.246462',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("131 M40 100.673568<br>");
$sql = "INSERT INTO ss09 SET runner_id='162',ss_date='2009-10-04',sex='M',age='35',score='52.615736',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='47.038974',bl_sc='70.776726'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("162 M35 52.615736<br>");
$sql = "INSERT INTO ss09 SET runner_id='169',ss_date='2009-10-04',sex='M',age='60',score='28.249201',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='39.492732',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("169 M60 28.249201<br>");
$sql = "INSERT INTO ss09 SET runner_id='176',ss_date='2009-10-04',sex='M',age='55',score='70.221891',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='98.372188',re_sc='65.598412',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("176 M55 70.221891<br>");
$sql = "INSERT INTO ss09 SET runner_id='226',ss_date='2009-10-04',sex='M',age='80',score='23.743445',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='35.971217',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("226 M80 23.743445<br>");
$sql = "INSERT INTO ss09 SET runner_id='248',ss_date='2009-10-04',sex='M',age='60',score='49.105635',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='99.504616',gr_sc='66.993274',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("248 M60 49.105635<br>");
$sql = "INSERT INTO ss09 SET runner_id='253',ss_date='2009-10-04',sex='M',age='40',score='36.212979',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("253 M40 36.212979<br>");
$sql = "INSERT INTO ss09 SET runner_id='254',ss_date='2009-10-04',sex='F',age='55',score='23.41503',wh_sc='0',ye_sc='55.362729',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("254 F55 23.41503<br>");
$sql = "INSERT INTO ss09 SET runner_id='255',ss_date='2009-10-04',sex='M',age='20',score='35.430939',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("255 M20 35.430939<br>");
$sql = "INSERT INTO ss09 SET runner_id='267',ss_date='2009-10-04',sex='F',age='18',score='67.593654',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='68.839647',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("267 F18 67.593654<br>");
$sql = "INSERT INTO ss09 SET runner_id='269',ss_date='2009-10-04',sex='F',age='14',score='36.989163',wh_sc='0',ye_sc='0',or_sc='73.096438',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("269 F14 36.989163<br>");
$sql = "INSERT INTO ss09 SET runner_id='270',ss_date='2009-10-04',sex='M',age='50',score='78.95803',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='110.645492',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("270 M50 78.95803<br>");
$sql = "INSERT INTO ss09 SET runner_id='376',ss_date='2009-10-04',sex='M',age='50',score='66.276707',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='64.408575',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("376 M50 66.276707<br>");
$sql = "INSERT INTO ss09 SET runner_id='418',ss_date='2009-10-04',sex='M',age='60',score='44.222421',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("418 M60 44.222421<br>");
$sql = "INSERT INTO ss09 SET runner_id='428',ss_date='2009-10-04',sex='M',age='50',score='38.026445',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='71.443918',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("428 M50 38.026445<br>");
$sql = "INSERT INTO ss09 SET runner_id='463',ss_date='2009-10-04',sex='M',age='45',score='29.868244',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='51.85195',gr_sc='40.009579',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("463 M45 29.868244<br>");
$sql = "INSERT INTO ss09 SET runner_id='499',ss_date='2009-10-04',sex='M',age='50',score='38.486901',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='53.779352',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("499 M50 38.486901<br>");
$sql = "INSERT INTO ss09 SET runner_id='522',ss_date='2009-10-04',sex='F',age='50',score='31.015977',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='61.525232',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("522 F50 31.015977<br>");
$sql = "INSERT INTO ss09 SET runner_id='545',ss_date='2009-10-04',sex='M',age='21',score='77.280868',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='76.831196',bl_sc='100.610724'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("545 M21 77.280868<br>");
$sql = "INSERT INTO ss09 SET runner_id='563',ss_date='2009-10-04',sex='F',age='55',score='55.827232',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("563 F55 55.827232<br>");
$sql = "INSERT INTO ss09 SET runner_id='567',ss_date='2009-10-04',sex='M',age='55',score='57.650963',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='77.892455',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("567 M55 57.650963<br>");
$sql = "INSERT INTO ss09 SET runner_id='568',ss_date='2009-10-04',sex='F',age='55',score='20.547363',wh_sc='0',ye_sc='0',or_sc='40.189591',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("568 F55 20.547363<br>");
$sql = "INSERT INTO ss09 SET runner_id='600',ss_date='2009-10-04',sex='M',age='35',score='23.164845',wh_sc='96.333885',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("600 M35 23.164845<br>");
$sql = "INSERT INTO ss09 SET runner_id='601',ss_date='2009-10-04',sex='M',age='60',score='34.946676',wh_sc='0',ye_sc='96.346488',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("601 M60 34.946676<br>");
$sql = "INSERT INTO ss09 SET runner_id='606',ss_date='2009-10-04',sex='M',age='21',score='44.759244',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("606 M21 44.759244<br>");
$sql = "INSERT INTO ss09 SET runner_id='613',ss_date='2009-10-04',sex='M',age='50',score='57.301721',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='79.608127',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("613 M50 57.301721<br>");
$sql = "INSERT INTO ss09 SET runner_id='614',ss_date='2009-10-04',sex='F',age='50',score='48.772955',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='68.865515',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("614 F50 48.772955<br>");
$sql = "INSERT INTO ss09 SET runner_id='615',ss_date='2009-10-04',sex='F',age='10',score='25.318921',wh_sc='110.20138',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("615 F10 25.318921<br>");
$sql = "INSERT INTO ss09 SET runner_id='616',ss_date='2009-10-04',sex='M',age='16',score='23.912435',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='48.106748',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("616 M16 23.912435<br>");
$sql = "INSERT INTO ss09 SET runner_id='626',ss_date='2009-10-04',sex='M',age='21',score='72.290975',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='72.19133',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("626 M21 72.290975<br>");
$sql = "INSERT INTO ss09 SET runner_id='630',ss_date='2009-10-04',sex='M',age='40',score='27.222337',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("630 M40 27.222337<br>");
$sql = "INSERT INTO ss09 SET runner_id='633',ss_date='2009-10-04',sex='M',age='16',score='32.586572',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("633 M16 32.586572<br>");
$sql = "INSERT INTO ss09 SET runner_id='634',ss_date='2009-10-04',sex='M',age='40',score='49.377263',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='99.018617',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("634 M40 49.377263<br>");
$sql = "INSERT INTO ss09 SET runner_id='636',ss_date='2009-10-04',sex='F',age='35',score='46.042417',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='63.790243',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("636 F35 46.042417<br>");
$sql = "INSERT INTO ss09 SET runner_id='637',ss_date='2009-10-04',sex='M',age='10',score='21.785143',wh_sc='93.464735',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("637 M10 21.785143<br>");
$sql = "INSERT INTO ss09 SET runner_id='666',ss_date='2009-10-04',sex='F',age='55',score='30.038938',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='56.602937',gr_sc='43.265008',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("666 F55 30.038938<br>");
$sql = "INSERT INTO ss09 SET runner_id='667',ss_date='2009-10-04',sex='M',age='55',score='30.497759',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='60.046676',gr_sc='42.872629',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("667 M55 30.497759<br>");
$sql = "INSERT INTO ss09 SET runner_id='673',ss_date='2009-10-04',sex='M',age='45',score='35.593226',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("673 M45 35.593226<br>");
$sql = "INSERT INTO ss09 SET runner_id='748',ss_date='2009-10-04',sex='M',age='10',score='21.857443',wh_sc='0',ye_sc='50.943672',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("748 M10 21.857443<br>");
$sql = "INSERT INTO ss09 SET runner_id='767',ss_date='2009-10-04',sex='M',age='40',score='57.306414',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='52.151805',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("767 M40 57.306414<br>");
$sql = "INSERT INTO ss09 SET runner_id='783',ss_date='2009-10-04',sex='F',age='70',score='22.631751',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='47.884414',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("783 F70 22.631751<br>");
$sql = "INSERT INTO ss09 SET runner_id='784',ss_date='2009-10-04',sex='F',age='50',score='18.497213',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("784 F50 18.497213<br>");
$sql = "INSERT INTO ss09 SET runner_id='796',ss_date='2009-10-04',sex='M',age='60',score='27.632792',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("796 M60 27.632792<br>");
$sql = "INSERT INTO ss09 SET runner_id='797',ss_date='2009-10-04',sex='F',age='55',score='43.000748',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='58.051842',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("797 F55 43.000748<br>");
$sql = "INSERT INTO ss09 SET runner_id='798',ss_date='2009-10-04',sex='M',age='60',score='31.496251',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='62.706035',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("798 M60 31.496251<br>");
$sql = "INSERT INTO ss09 SET runner_id='799',ss_date='2009-10-04',sex='M',age='45',score='71.642937',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='69.909099',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("799 M45 71.642937<br>");
$sql = "INSERT INTO ss09 SET runner_id='862',ss_date='2009-10-04',sex='M',age='21',score='38.101674',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("862 M21 38.101674<br>");
$sql = "INSERT INTO ss09 SET runner_id='899',ss_date='2009-10-04',sex='M',age='60',score='46.760245',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='40.857664',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("899 M60 46.760245<br>");
$sql = "INSERT INTO ss09 SET runner_id='958',ss_date='2009-10-04',sex='M',age='45',score='15.859324',wh_sc='0',ye_sc='38.826529',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("958 M45 15.859324<br>");
$sql = "INSERT INTO ss09 SET runner_id='969',ss_date='2009-10-04',sex='F',age='21',score='44.750929',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='62.672769',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("969 F21 44.750929<br>");
$sql = "INSERT INTO ss09 SET runner_id='970',ss_date='2009-10-04',sex='F',age='55',score='17.526441',wh_sc='0',ye_sc='0',or_sc='33.93856',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("970 F55 17.526441<br>");
$sql = "INSERT INTO ss09 SET runner_id='1022',ss_date='2009-10-04',sex='M',age='14',score='44.939735',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1022 M14 44.939735<br>");
$sql = "INSERT INTO ss09 SET runner_id='1088',ss_date='2009-10-04',sex='M',age='60',score='38.272165',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='53.239224',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1088 M60 38.272165<br>");
$sql = "INSERT INTO ss09 SET runner_id='1151',ss_date='2009-10-04',sex='F',age='65',score='19.277083',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='38.375448',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1151 F65 19.277083<br>");
$sql = "INSERT INTO ss09 SET runner_id='1189',ss_date='2009-10-04',sex='M',age='70',score='46.664881',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1189 M70 46.664881<br>");
$sql = "INSERT INTO ss09 SET runner_id='1190',ss_date='2009-10-04',sex='M',age='40',score='66.95428',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='67.907615',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1190 M40 66.95428<br>");
$sql = "INSERT INTO ss09 SET runner_id='1198',ss_date='2009-10-04',sex='M',age='65',score='47.463762',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='62.375395',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1198 M65 47.463762<br>");
$sql = "INSERT INTO ss09 SET runner_id='1218',ss_date='2009-10-04',sex='M',age='40',score='82.091133',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='82.691645',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1218 M40 82.091133<br>");
$sql = "INSERT INTO ss09 SET runner_id='1238',ss_date='2009-10-04',sex='M',age='55',score='29.446832',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='43.559048',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1238 M55 29.446832<br>");
$sql = "INSERT INTO ss09 SET runner_id='1250',ss_date='2009-10-04',sex='M',age='35',score='99.567763',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='99.449417',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1250 M35 99.567763<br>");
$sql = "INSERT INTO ss09 SET runner_id='1279',ss_date='2009-10-04',sex='M',age='55',score='40.200595',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1279 M55 40.200595<br>");
$sql = "INSERT INTO ss09 SET runner_id='1282',ss_date='2009-10-04',sex='F',age='50',score='47.008362',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1282 F50 47.008362<br>");
$sql = "INSERT INTO ss09 SET runner_id='1318',ss_date='2009-10-04',sex='M',age='50',score='20.883477',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='42.169434',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1318 M50 20.883477<br>");
$sql = "INSERT INTO ss09 SET runner_id='1364',ss_date='2009-10-04',sex='M',age='40',score='60.218547',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='60.670764',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1364 M40 60.218547<br>");
$sql = "INSERT INTO ss09 SET runner_id='1397',ss_date='2009-10-04',sex='M',age='16',score='53.099373',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='57.055208',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1397 M16 53.099373<br>");
$sql = "INSERT INTO ss09 SET runner_id='1398',ss_date='2009-10-04',sex='M',age='45',score='34.411904',wh_sc='0',ye_sc='90.444543',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1398 M45 34.411904<br>");
$sql = "INSERT INTO ss09 SET runner_id='1417',ss_date='2009-10-04',sex='M',age='60',score='30.238853',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='60.391969',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1417 M60 30.238853<br>");
$sql = "INSERT INTO ss09 SET runner_id='1432',ss_date='2009-10-04',sex='M',age='45',score='81.236178',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='79.158903',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1432 M45 81.236178<br>");
$sql = "INSERT INTO ss09 SET runner_id='1480',ss_date='2009-10-04',sex='F',age='21',score='27.86938',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='39.345178',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1480 F21 27.86938<br>");
$sql = "INSERT INTO ss09 SET runner_id='1503',ss_date='2009-10-04',sex='F',age='55',score='19.650858',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='36.798156',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1503 F55 19.650858<br>");
$sql = "INSERT INTO ss09 SET runner_id='1504',ss_date='2009-10-04',sex='M',age='60',score='39.114413',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='59.047928',re_sc='31.669467',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1504 M60 39.114413<br>");
$sql = "INSERT INTO ss09 SET runner_id='1518',ss_date='2009-10-04',sex='F',age='21',score='74.019168',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1518 F21 74.019168<br>");
$sql = "INSERT INTO ss09 SET runner_id='1519',ss_date='2009-10-04',sex='M',age='50',score='35.178815',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1519 M50 35.178815<br>");
$sql = "INSERT INTO ss09 SET runner_id='1540',ss_date='2009-10-04',sex='M',age='45',score='28.246705',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1540 M45 28.246705<br>");
$sql = "INSERT INTO ss09 SET runner_id='1548',ss_date='2009-10-04',sex='F',age='40',score='30.883042',wh_sc='0',ye_sc='0',or_sc='48.74933',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1548 F40 30.883042<br>");
$sql = "INSERT INTO ss09 SET runner_id='1566',ss_date='2009-10-04',sex='F',age='14',score='30.972112',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1566 F14 30.972112<br>");
$sql = "INSERT INTO ss09 SET runner_id='1567',ss_date='2009-10-04',sex='M',age='50',score='59.687886',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='59.693907',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1567 M50 59.687886<br>");
$sql = "INSERT INTO ss09 SET runner_id='1570',ss_date='2009-10-04',sex='M',age='18',score='58.29304',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='85.64049',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1570 M18 58.29304<br>");
$sql = "INSERT INTO ss09 SET runner_id='1602',ss_date='2009-10-04',sex='M',age='10',score='34.924648',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1602 M10 34.924648<br>");
$sql = "INSERT INTO ss09 SET runner_id='1603',ss_date='2009-10-04',sex='F',age='35',score='70.019776',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='89.796324',re_sc='72.728365',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1603 F35 70.019776<br>");
$sql = "INSERT INTO ss09 SET runner_id='1604',ss_date='2009-10-04',sex='M',age='12',score='33.429808',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1604 M12 33.429808<br>");
$sql = "INSERT INTO ss09 SET runner_id='1606',ss_date='2009-10-04',sex='M',age='35',score='98.937315',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='99.304121',bl_sc='128.61255'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1606 M35 98.937315<br>");
$sql = "INSERT INTO ss09 SET runner_id='1667',ss_date='2009-10-04',sex='M',age='50',score='38.759292',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='75.048368',gr_sc='53.135463',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1667 M50 38.759292<br>");
$sql = "INSERT INTO ss09 SET runner_id='1676',ss_date='2009-10-04',sex='F',age='55',score='24.212173',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='33.85256',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1676 F55 24.212173<br>");
$sql = "INSERT INTO ss09 SET runner_id='1718',ss_date='2009-10-04',sex='M',age='60',score='50.540138',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='101.476767',gr_sc='71.422749',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1718 M60 50.540138<br>");
$sql = "INSERT INTO ss09 SET runner_id='1746',ss_date='2009-10-04',sex='F',age='50',score='37.184035',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='74.382049',gr_sc='50.852353',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1746 F50 37.184035<br>");
$sql = "INSERT INTO ss09 SET runner_id='1771',ss_date='2009-10-04',sex='F',age='60',score='24.717488',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='43.770221',gr_sc='32.012537',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1771 F60 24.717488<br>");
$sql = "INSERT INTO ss09 SET runner_id='1777',ss_date='2009-10-04',sex='M',age='18',score='65.880617',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='90.98232',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1777 M18 65.880617<br>");
$sql = "INSERT INTO ss09 SET runner_id='1812',ss_date='2009-10-04',sex='F',age='45',score='29.991579',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1812 F45 29.991579<br>");
$sql = "INSERT INTO ss09 SET runner_id='1878',ss_date='2009-10-04',sex='F',age='50',score='29.221207',wh_sc='0',ye_sc='65.945945',or_sc='60.74112',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1878 F50 29.221207<br>");
$sql = "INSERT INTO ss09 SET runner_id='1879',ss_date='2009-10-04',sex='M',age='50',score='56.06578',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='79.891977',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1879 M50 56.06578<br>");
$sql = "INSERT INTO ss09 SET runner_id='1916',ss_date='2009-10-04',sex='F',age='55',score='25.613681',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='51.195435',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1916 F55 25.613681<br>");
$sql = "INSERT INTO ss09 SET runner_id='1923',ss_date='2009-10-04',sex='M',age='14',score='43.559931',wh_sc='0',ye_sc='113.208969',or_sc='83.751469',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1923 M14 43.559931<br>");
$sql = "INSERT INTO ss09 SET runner_id='1925',ss_date='2009-10-04',sex='M',age='16',score='53.194884',wh_sc='0',ye_sc='0',or_sc='101.038877',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1925 M16 53.194884<br>");
$sql = "INSERT INTO ss09 SET runner_id='1926',ss_date='2009-10-04',sex='M',age='18',score='58.31301',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='69.499185',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1926 M18 58.31301<br>");
$sql = "INSERT INTO ss09 SET runner_id='1928',ss_date='2009-10-04',sex='M',age='50',score='64.957133',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='82.745008',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1928 M50 64.957133<br>");
$sql = "INSERT INTO ss09 SET runner_id='1953',ss_date='2009-10-04',sex='M',age='55',score='53.309828',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='64.990007',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1953 M55 53.309828<br>");
$sql = "INSERT INTO ss09 SET runner_id='1991',ss_date='2009-10-04',sex='M',age='60',score='32.361173',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='69.544346',gr_sc='43.799361',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1991 M60 32.361173<br>");
$sql = "INSERT INTO ss09 SET runner_id='1992',ss_date='2009-10-04',sex='F',age='60',score='22.867386',wh_sc='0',ye_sc='0',or_sc='42.638473',bn_sc='45.387309',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1992 F60 22.867386<br>");
$sql = "INSERT INTO ss09 SET runner_id='2056',ss_date='2009-10-04',sex='M',age='60',score='31.739661',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='60.666531',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2056 M60 31.739661<br>");
$sql = "INSERT INTO ss09 SET runner_id='2108',ss_date='2009-10-04',sex='M',age='60',score='36.787776',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='36.68087',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2108 M60 36.787776<br>");
$sql = "INSERT INTO ss09 SET runner_id='2122',ss_date='2009-10-04',sex='M',age='55',score='51.294516',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='69.493391',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2122 M55 51.294516<br>");
$sql = "INSERT INTO ss09 SET runner_id='2160',ss_date='2009-10-04',sex='M',age='65',score='45.97846',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='63.872239',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2160 M65 45.97846<br>");
$sql = "INSERT INTO ss09 SET runner_id='2198',ss_date='2009-10-04',sex='F',age='40',score='53.201441',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='74.08399',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2198 F40 53.201441<br>");
$sql = "INSERT INTO ss09 SET runner_id='2200',ss_date='2009-10-04',sex='M',age='10',score='25.379928',wh_sc='0',ye_sc='62.443548',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2200 M10 25.379928<br>");
$sql = "INSERT INTO ss09 SET runner_id='2201',ss_date='2009-10-04',sex='M',age='18',score='27.664521',wh_sc='0',ye_sc='0',or_sc='53.739361',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2201 M18 27.664521<br>");
$sql = "INSERT INTO ss09 SET runner_id='2207',ss_date='2009-10-04',sex='M',age='21',score='99.758669',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2207 M21 99.758669<br>");
$sql = "INSERT INTO ss09 SET runner_id='2227',ss_date='2009-10-04',sex='M',age='40',score='62.457094',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='62.687516',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2227 M40 62.457094<br>");
$sql = "INSERT INTO ss09 SET runner_id='2254',ss_date='2009-10-04',sex='F',age='16',score='27.658944',wh_sc='0',ye_sc='71.948963',or_sc='43.069845',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2254 F16 27.658944<br>");
$sql = "INSERT INTO ss09 SET runner_id='2255',ss_date='2009-10-04',sex='G',age='2',score='37.973006',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2255 G2 37.973006<br>");
$sql = "INSERT INTO ss09 SET runner_id='2257',ss_date='2009-10-04',sex='M',age='50',score='16.697006',wh_sc='0',ye_sc='37.643266',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2257 M50 16.697006<br>");
$sql = "INSERT INTO ss09 SET runner_id='2267',ss_date='2009-10-04',sex='M',age='45',score='26.293539',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2267 M45 26.293539<br>");
$sql = "INSERT INTO ss09 SET runner_id='2275',ss_date='2009-10-04',sex='M',age='21',score='36.474272',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2275 M21 36.474272<br>");
$sql = "INSERT INTO ss09 SET runner_id='2300',ss_date='2009-10-04',sex='G',age='2',score='26.54134',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2300 G2 26.54134<br>");
$sql = "INSERT INTO ss09 SET runner_id='2303',ss_date='2009-10-04',sex='G',age='2',score='25.688356',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='41.280445',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2303 G2 25.688356<br>");
$sql = "INSERT INTO ss09 SET runner_id='2312',ss_date='2009-10-04',sex='F',age='8',score='21.857135',wh_sc='91.145779',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2312 F8 21.857135<br>");
$sql = "INSERT INTO ss09 SET runner_id='2338',ss_date='2009-10-04',sex='M',age='16',score='26.237455',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2338 M16 26.237455<br>");
$sql = "INSERT INTO ss09 SET runner_id='2341',ss_date='2009-10-04',sex='M',age='60',score='18.577142',wh_sc='0',ye_sc='0',or_sc='36.708019',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2341 M60 18.577142<br>");
$sql = "INSERT INTO ss09 SET runner_id='2412',ss_date='2009-10-04',sex='M',age='21',score='51.825453',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='49.792428',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2412 M21 51.825453<br>");
$sql = "INSERT INTO ss09 SET runner_id='2414',ss_date='2009-10-04',sex='M',age='60',score='22.209678',wh_sc='0',ye_sc='0',or_sc='31.496537',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2414 M60 22.209678<br>");
$sql = "INSERT INTO ss09 SET runner_id='2444',ss_date='2009-10-04',sex='F',age='10',score='19.899885',wh_sc='0',ye_sc='49.188946',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2444 F10 19.899885<br>");
$sql = "INSERT INTO ss09 SET runner_id='2491',ss_date='2009-10-04',sex='F',age='20',score='22.825246',wh_sc='0',ye_sc='56.018438',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2491 F20 22.825246<br>");
$sql = "INSERT INTO ss09 SET runner_id='2473',ss_date='2009-10-04',sex='F',age='16',score='22.473619',wh_sc='0',ye_sc='54.338173',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2473 F16 22.473619<br>");
$sql = "INSERT INTO ss09 SET runner_id='2560',ss_date='2009-10-04',sex='M',age='50',score='17.171466',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2560 M50 17.171466<br>");
$sql = "INSERT INTO ss09 SET runner_id='2481',ss_date='2009-10-04',sex='M',age='45',score='37.44514',wh_sc='0',ye_sc='0',or_sc='70.951099',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2481 M45 37.44514<br>");
$sql = "INSERT INTO ss09 SET runner_id='2637',ss_date='2009-10-04',sex='F',age='45',score='22.111499',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2637 F45 22.111499<br>");
$sql = "INSERT INTO ss09 SET runner_id='2688',ss_date='2009-10-04',sex='F',age='21',score='16.462097',wh_sc='0',ye_sc='0',or_sc='30.687248',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2688 F21 16.462097<br>");
$sql = "INSERT INTO ss09 SET runner_id='2',ss_date='2009-10-11',sex='F',age='45',score='44.940407',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='59.761656',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2 F45 44.940407<br>");
$sql = "INSERT INTO ss09 SET runner_id='12',ss_date='2009-10-11',sex='M',age='20',score='83.757718',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("12 M20 83.757718<br>");
$sql = "INSERT INTO ss09 SET runner_id='13',ss_date='2009-10-11',sex='M',age='45',score='68.271307',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='69.697265',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("13 M45 68.271307<br>");
$sql = "INSERT INTO ss09 SET runner_id='28',ss_date='2009-10-11',sex='M',age='45',score='44.292929',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("28 M45 44.292929<br>");
$sql = "INSERT INTO ss09 SET runner_id='48',ss_date='2009-10-11',sex='M',age='50',score='38.424541',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='53.636262',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("48 M50 38.424541<br>");
$sql = "INSERT INTO ss09 SET runner_id='69',ss_date='2009-10-11',sex='M',age='45',score='52.075217',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='54.043308',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("69 M45 52.075217<br>");
$sql = "INSERT INTO ss09 SET runner_id='86',ss_date='2009-10-11',sex='M',age='50',score='43.168228',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='43.094051',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("86 M50 43.168228<br>");
$sql = "INSERT INTO ss09 SET runner_id='87',ss_date='2009-10-11',sex='M',age='16',score='59.502809',wh_sc='0',ye_sc='0',or_sc='115.493033',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("87 M16 59.502809<br>");
$sql = "INSERT INTO ss09 SET runner_id='96',ss_date='2009-10-11',sex='M',age='55',score='42.878979',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='60.159434',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("96 M55 42.878979<br>");
$sql = "INSERT INTO ss09 SET runner_id='100',ss_date='2009-10-11',sex='F',age='16',score='25.477803',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("100 F16 25.477803<br>");
$sql = "INSERT INTO ss09 SET runner_id='131',ss_date='2009-10-11',sex='M',age='40',score='100.509914',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='101.195963',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("131 M40 100.509914<br>");
$sql = "INSERT INTO ss09 SET runner_id='162',ss_date='2009-10-11',sex='M',age='35',score='52.766564',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='51.760433',bl_sc='70.776726'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("162 M35 52.766564<br>");
$sql = "INSERT INTO ss09 SET runner_id='169',ss_date='2009-10-11',sex='M',age='60',score='27.294608',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='37.820313',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("169 M60 27.294608<br>");
$sql = "INSERT INTO ss09 SET runner_id='176',ss_date='2009-10-11',sex='M',age='55',score='70.264495',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='98.528614',re_sc='65.477028',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("176 M55 70.264495<br>");
$sql = "INSERT INTO ss09 SET runner_id='226',ss_date='2009-10-11',sex='M',age='80',score='23.910255',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='44.2578',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("226 M80 23.910255<br>");
$sql = "INSERT INTO ss09 SET runner_id='248',ss_date='2009-10-11',sex='M',age='60',score='49.735403',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='99.657548',gr_sc='68.61662',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("248 M60 49.735403<br>");
$sql = "INSERT INTO ss09 SET runner_id='253',ss_date='2009-10-11',sex='M',age='40',score='36.081146',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("253 M40 36.081146<br>");
$sql = "INSERT INTO ss09 SET runner_id='254',ss_date='2009-10-11',sex='F',age='55',score='23.23598',wh_sc='0',ye_sc='55.265',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("254 F55 23.23598<br>");
$sql = "INSERT INTO ss09 SET runner_id='255',ss_date='2009-10-11',sex='M',age='20',score='35.322059',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("255 M20 35.322059<br>");
$sql = "INSERT INTO ss09 SET runner_id='267',ss_date='2009-10-11',sex='F',age='18',score='67.748372',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='69.306302',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("267 F18 67.748372<br>");
$sql = "INSERT INTO ss09 SET runner_id='269',ss_date='2009-10-11',sex='F',age='14',score='36.609207',wh_sc='0',ye_sc='0',or_sc='72.835256',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("269 F14 36.609207<br>");
$sql = "INSERT INTO ss09 SET runner_id='270',ss_date='2009-10-11',sex='M',age='50',score='78.98439',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='110.47765',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("270 M50 78.98439<br>");
$sql = "INSERT INTO ss09 SET runner_id='376',ss_date='2009-10-11',sex='M',age='50',score='66.648783',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='65.491503',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("376 M50 66.648783<br>");
$sql = "INSERT INTO ss09 SET runner_id='418',ss_date='2009-10-11',sex='M',age='60',score='44.228487',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("418 M60 44.228487<br>");
$sql = "INSERT INTO ss09 SET runner_id='428',ss_date='2009-10-11',sex='M',age='50',score='37.977543',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='71.402641',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("428 M50 37.977543<br>");
$sql = "INSERT INTO ss09 SET runner_id='463',ss_date='2009-10-11',sex='M',age='45',score='30.232843',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='51.995616',gr_sc='40.918429',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("463 M45 30.232843<br>");
$sql = "INSERT INTO ss09 SET runner_id='499',ss_date='2009-10-11',sex='M',age='50',score='38.483666',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='53.688574',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("499 M50 38.483666<br>");
$sql = "INSERT INTO ss09 SET runner_id='522',ss_date='2009-10-11',sex='F',age='50',score='31.102573',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='61.692331',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("522 F50 31.102573<br>");
$sql = "INSERT INTO ss09 SET runner_id='545',ss_date='2009-10-11',sex='M',age='21',score='77.641049',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='77.383846',bl_sc='100.610724'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("545 M21 77.641049<br>");
$sql = "INSERT INTO ss09 SET runner_id='563',ss_date='2009-10-11',sex='F',age='55',score='53.188947',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("563 F55 53.188947<br>");
$sql = "INSERT INTO ss09 SET runner_id='567',ss_date='2009-10-11',sex='M',age='55',score='57.401705',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='77.492204',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("567 M55 57.401705<br>");
$sql = "INSERT INTO ss09 SET runner_id='568',ss_date='2009-10-11',sex='F',age='55',score='20.790128',wh_sc='0',ye_sc='0',or_sc='40.742508',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("568 F55 20.790128<br>");
$sql = "INSERT INTO ss09 SET runner_id='600',ss_date='2009-10-11',sex='M',age='35',score='23.028935',wh_sc='93.81792',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("600 M35 23.028935<br>");
$sql = "INSERT INTO ss09 SET runner_id='601',ss_date='2009-10-11',sex='M',age='60',score='34.814675',wh_sc='0',ye_sc='96.139775',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("601 M60 34.814675<br>");
$sql = "INSERT INTO ss09 SET runner_id='606',ss_date='2009-10-11',sex='M',age='21',score='44.455413',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("606 M21 44.455413<br>");
$sql = "INSERT INTO ss09 SET runner_id='613',ss_date='2009-10-11',sex='M',age='50',score='56.763359',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='78.819561',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("613 M50 56.763359<br>");
$sql = "INSERT INTO ss09 SET runner_id='614',ss_date='2009-10-11',sex='F',age='50',score='47.815367',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='67.000747',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("614 F50 47.815367<br>");
$sql = "INSERT INTO ss09 SET runner_id='615',ss_date='2009-10-11',sex='F',age='10',score='25.895843',wh_sc='109.296394',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("615 F10 25.895843<br>");
$sql = "INSERT INTO ss09 SET runner_id='616',ss_date='2009-10-11',sex='M',age='16',score='23.89659',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='49.491843',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("616 M16 23.89659<br>");
$sql = "INSERT INTO ss09 SET runner_id='626',ss_date='2009-10-11',sex='M',age='21',score='72.247635',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='72.214724',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("626 M21 72.247635<br>");
$sql = "INSERT INTO ss09 SET runner_id='630',ss_date='2009-10-11',sex='M',age='40',score='27.228703',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("630 M40 27.228703<br>");
$sql = "INSERT INTO ss09 SET runner_id='633',ss_date='2009-10-11',sex='M',age='16',score='29.202793',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("633 M16 29.202793<br>");
$sql = "INSERT INTO ss09 SET runner_id='634',ss_date='2009-10-11',sex='M',age='40',score='49.410268',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='98.701536',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("634 M40 49.410268<br>");
$sql = "INSERT INTO ss09 SET runner_id='636',ss_date='2009-10-11',sex='F',age='35',score='46.318196',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='63.58449',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("636 F35 46.318196<br>");
$sql = "INSERT INTO ss09 SET runner_id='637',ss_date='2009-10-11',sex='M',age='10',score='23.221613',wh_sc='96.885685',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("637 M10 23.221613<br>");
$sql = "INSERT INTO ss09 SET runner_id='666',ss_date='2009-10-11',sex='F',age='55',score='29.999331',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='56.694634',gr_sc='42.979999',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("666 F55 29.999331<br>");
$sql = "INSERT INTO ss09 SET runner_id='667',ss_date='2009-10-11',sex='M',age='55',score='29.927076',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='60.179818',gr_sc='41.470308',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("667 M55 29.927076<br>");
$sql = "INSERT INTO ss09 SET runner_id='673',ss_date='2009-10-11',sex='M',age='45',score='35.538237',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("673 M45 35.538237<br>");
$sql = "INSERT INTO ss09 SET runner_id='748',ss_date='2009-10-11',sex='M',age='10',score='21.554029',wh_sc='0',ye_sc='50.920063',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("748 M10 21.554029<br>");
$sql = "INSERT INTO ss09 SET runner_id='767',ss_date='2009-10-11',sex='M',age='40',score='57.306422',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='52.213187',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("767 M40 57.306422<br>");
$sql = "INSERT INTO ss09 SET runner_id='783',ss_date='2009-10-11',sex='F',age='70',score='22.24084',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='46.128582',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("783 F70 22.24084<br>");
$sql = "INSERT INTO ss09 SET runner_id='784',ss_date='2009-10-11',sex='F',age='50',score='18.524942',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("784 F50 18.524942<br>");
$sql = "INSERT INTO ss09 SET runner_id='796',ss_date='2009-10-11',sex='M',age='60',score='27.624675',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("796 M60 27.624675<br>");
$sql = "INSERT INTO ss09 SET runner_id='797',ss_date='2009-10-11',sex='F',age='55',score='42.800257',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='57.802201',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("797 F55 42.800257<br>");
$sql = "INSERT INTO ss09 SET runner_id='798',ss_date='2009-10-11',sex='M',age='60',score='31.718725',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='63.04271',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("798 M60 31.718725<br>");
$sql = "INSERT INTO ss09 SET runner_id='799',ss_date='2009-10-11',sex='M',age='45',score='70.884257',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='69.450735',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("799 M45 70.884257<br>");
$sql = "INSERT INTO ss09 SET runner_id='862',ss_date='2009-10-11',sex='M',age='21',score='37.947542',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("862 M21 37.947542<br>");
$sql = "INSERT INTO ss09 SET runner_id='899',ss_date='2009-10-11',sex='M',age='60',score='46.709373',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='40.896393',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("899 M60 46.709373<br>");
$sql = "INSERT INTO ss09 SET runner_id='958',ss_date='2009-10-11',sex='M',age='45',score='16.266293',wh_sc='0',ye_sc='40.384772',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("958 M45 16.266293<br>");
$sql = "INSERT INTO ss09 SET runner_id='969',ss_date='2009-10-11',sex='F',age='21',score='44.65239',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='62.638438',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("969 F21 44.65239<br>");
$sql = "INSERT INTO ss09 SET runner_id='970',ss_date='2009-10-11',sex='F',age='55',score='17.927763',wh_sc='0',ye_sc='0',or_sc='34.896097',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("970 F55 17.927763<br>");
$sql = "INSERT INTO ss09 SET runner_id='1017',ss_date='2009-10-11',sex='F',age='45',score='21.321907',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1017 F45 21.321907<br>");
$sql = "INSERT INTO ss09 SET runner_id='1022',ss_date='2009-10-11',sex='M',age='14',score='44.8579',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1022 M14 44.8579<br>");
$sql = "INSERT INTO ss09 SET runner_id='1032',ss_date='2009-10-11',sex='M',age='65',score='20.72443',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='40.715275',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1032 M65 20.72443<br>");
$sql = "INSERT INTO ss09 SET runner_id='1088',ss_date='2009-10-11',sex='M',age='60',score='37.562237',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='52.313461',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1088 M60 37.562237<br>");
$sql = "INSERT INTO ss09 SET runner_id='1151',ss_date='2009-10-11',sex='F',age='65',score='19.311557',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='38.370476',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1151 F65 19.311557<br>");
$sql = "INSERT INTO ss09 SET runner_id='1189',ss_date='2009-10-11',sex='M',age='70',score='46.833778',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1189 M70 46.833778<br>");
$sql = "INSERT INTO ss09 SET runner_id='1190',ss_date='2009-10-11',sex='M',age='40',score='67.342045',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='68.971044',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1190 M40 67.342045<br>");
$sql = "INSERT INTO ss09 SET runner_id='1198',ss_date='2009-10-11',sex='M',age='65',score='46.573719',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='90.999341',gr_sc='61.926279',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1198 M65 46.573719<br>");
$sql = "INSERT INTO ss09 SET runner_id='1218',ss_date='2009-10-11',sex='M',age='40',score='82.00665',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='82.683266',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1218 M40 82.00665<br>");
$sql = "INSERT INTO ss09 SET runner_id='1238',ss_date='2009-10-11',sex='M',age='55',score='28.01505',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='40.567949',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1238 M55 28.01505<br>");
$sql = "INSERT INTO ss09 SET runner_id='1250',ss_date='2009-10-11',sex='M',age='35',score='99.641804',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='99.470524',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1250 M35 99.641804<br>");
$sql = "INSERT INTO ss09 SET runner_id='1279',ss_date='2009-10-11',sex='M',age='55',score='40.079181',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1279 M55 40.079181<br>");
$sql = "INSERT INTO ss09 SET runner_id='1282',ss_date='2009-10-11',sex='F',age='50',score='46.820669',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1282 F50 46.820669<br>");
$sql = "INSERT INTO ss09 SET runner_id='1318',ss_date='2009-10-11',sex='M',age='50',score='21.964759',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='42.436801',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1318 M50 21.964759<br>");
$sql = "INSERT INTO ss09 SET runner_id='1364',ss_date='2009-10-11',sex='M',age='40',score='60.130271',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='60.703604',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1364 M40 60.130271<br>");
$sql = "INSERT INTO ss09 SET runner_id='1397',ss_date='2009-10-11',sex='M',age='16',score='55.215315',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='66.100066',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1397 M16 55.215315<br>");
$sql = "INSERT INTO ss09 SET runner_id='1398',ss_date='2009-10-11',sex='M',age='45',score='34.098268',wh_sc='0',ye_sc='90.885489',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1398 M45 34.098268<br>");
$sql = "INSERT INTO ss09 SET runner_id='1417',ss_date='2009-10-11',sex='M',age='60',score='36.4876',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='72.336342',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1417 M60 36.4876<br>");
$sql = "INSERT INTO ss09 SET runner_id='1418',ss_date='2009-10-11',sex='F',age='55',score='21.960565',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='43.677432',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1418 F55 21.960565<br>");
$sql = "INSERT INTO ss09 SET runner_id='1432',ss_date='2009-10-11',sex='M',age='45',score='81.050356',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='79.485348',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1432 M45 81.050356<br>");
$sql = "INSERT INTO ss09 SET runner_id='1480',ss_date='2009-10-11',sex='F',age='21',score='27.847608',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='39.40452',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1480 F21 27.847608<br>");
$sql = "INSERT INTO ss09 SET runner_id='1503',ss_date='2009-10-11',sex='F',age='55',score='19.630788',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='36.840642',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1503 F55 19.630788<br>");
$sql = "INSERT INTO ss09 SET runner_id='1504',ss_date='2009-10-11',sex='M',age='60',score='39.008514',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='58.754634',re_sc='31.636946',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1504 M60 39.008514<br>");
$sql = "INSERT INTO ss09 SET runner_id='1518',ss_date='2009-10-11',sex='F',age='21',score='73.953599',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1518 F21 73.953599<br>");
$sql = "INSERT INTO ss09 SET runner_id='1519',ss_date='2009-10-11',sex='M',age='50',score='35.119',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1519 M50 35.119<br>");
$sql = "INSERT INTO ss09 SET runner_id='1540',ss_date='2009-10-11',sex='M',age='45',score='26.869831',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='38.135506',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1540 M45 26.869831<br>");
$sql = "INSERT INTO ss09 SET runner_id='1548',ss_date='2009-10-11',sex='F',age='40',score='31.177996',wh_sc='0',ye_sc='0',or_sc='55.845201',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1548 F40 31.177996<br>");
$sql = "INSERT INTO ss09 SET runner_id='1566',ss_date='2009-10-11',sex='F',age='14',score='30.688852',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1566 F14 30.688852<br>");
$sql = "INSERT INTO ss09 SET runner_id='1567',ss_date='2009-10-11',sex='M',age='50',score='59.584871',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='59.718677',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1567 M50 59.584871<br>");
$sql = "INSERT INTO ss09 SET runner_id='1570',ss_date='2009-10-11',sex='M',age='18',score='58.243833',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='85.408394',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1570 M18 58.243833<br>");
$sql = "INSERT INTO ss09 SET runner_id='1602',ss_date='2009-10-11',sex='M',age='10',score='34.649823',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1602 M10 34.649823<br>");
$sql = "INSERT INTO ss09 SET runner_id='1603',ss_date='2009-10-11',sex='F',age='35',score='69.994279',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='89.686938',re_sc='73.11047',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1603 F35 69.994279<br>");
$sql = "INSERT INTO ss09 SET runner_id='1604',ss_date='2009-10-11',sex='M',age='12',score='33.037401',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1604 M12 33.037401<br>");
$sql = "INSERT INTO ss09 SET runner_id='1606',ss_date='2009-10-11',sex='M',age='35',score='99.032945',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='99.333513',bl_sc='128.61255'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1606 M35 99.032945<br>");
$sql = "INSERT INTO ss09 SET runner_id='1667',ss_date='2009-10-11',sex='M',age='50',score='38.736304',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='75.12188',gr_sc='53.046501',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1667 M50 38.736304<br>");
$sql = "INSERT INTO ss09 SET runner_id='1676',ss_date='2009-10-11',sex='F',age='55',score='24.162673',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='33.677069',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1676 F55 24.162673<br>");
$sql = "INSERT INTO ss09 SET runner_id='1718',ss_date='2009-10-11',sex='M',age='60',score='50.298471',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='101.640917',gr_sc='70.569145',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1718 M60 50.298471<br>");
$sql = "INSERT INTO ss09 SET runner_id='1720',ss_date='2009-10-11',sex='F',age='60',score='24.692498',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1720 F60 24.692498<br>");
$sql = "INSERT INTO ss09 SET runner_id='1746',ss_date='2009-10-11',sex='F',age='50',score='37.24437',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='74.533847',gr_sc='50.989518',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1746 F50 37.24437<br>");
$sql = "INSERT INTO ss09 SET runner_id='1771',ss_date='2009-10-11',sex='F',age='60',score='25.371742',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='43.862398',gr_sc='33.908648',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1771 F60 25.371742<br>");
$sql = "INSERT INTO ss09 SET runner_id='1777',ss_date='2009-10-11',sex='M',age='18',score='65.717476',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='90.993737',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1777 M18 65.717476<br>");
$sql = "INSERT INTO ss09 SET runner_id='1812',ss_date='2009-10-11',sex='F',age='45',score='29.819972',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1812 F45 29.819972<br>");
$sql = "INSERT INTO ss09 SET runner_id='1861',ss_date='2009-10-11',sex='M',age='45',score='25.83703',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1861 M45 25.83703<br>");
$sql = "INSERT INTO ss09 SET runner_id='1878',ss_date='2009-10-11',sex='F',age='50',score='29.219373',wh_sc='0',ye_sc='65.728748',or_sc='60.725119',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1878 F50 29.219373<br>");
$sql = "INSERT INTO ss09 SET runner_id='1879',ss_date='2009-10-11',sex='M',age='50',score='55.983698',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='79.370801',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1879 M50 55.983698<br>");
$sql = "INSERT INTO ss09 SET runner_id='1916',ss_date='2009-10-11',sex='F',age='55',score='25.632141',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='51.217083',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1916 F55 25.632141<br>");
$sql = "INSERT INTO ss09 SET runner_id='1923',ss_date='2009-10-11',sex='M',age='14',score='43.702756',wh_sc='0',ye_sc='112.974736',or_sc='83.03441',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1923 M14 43.702756<br>");
$sql = "INSERT INTO ss09 SET runner_id='1925',ss_date='2009-10-11',sex='M',age='16',score='53.148723',wh_sc='0',ye_sc='0',or_sc='101.472557',bn_sc='0',gr_sc='73.454645',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1925 M16 53.148723<br>");
$sql = "INSERT INTO ss09 SET runner_id='1926',ss_date='2009-10-11',sex='M',age='18',score='58.334807',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='69.379231',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1926 M18 58.334807<br>");
$sql = "INSERT INTO ss09 SET runner_id='1928',ss_date='2009-10-11',sex='M',age='50',score='64.144795',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='82.596413',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1928 M50 64.144795<br>");
$sql = "INSERT INTO ss09 SET runner_id='1953',ss_date='2009-10-11',sex='M',age='55',score='53.237318',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='64.896059',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1953 M55 53.237318<br>");
$sql = "INSERT INTO ss09 SET runner_id='1991',ss_date='2009-10-11',sex='M',age='60',score='31.739107',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='69.56711',gr_sc='42.319594',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1991 M60 31.739107<br>");
$sql = "INSERT INTO ss09 SET runner_id='1992',ss_date='2009-10-11',sex='F',age='60',score='22.128696',wh_sc='0',ye_sc='0',or_sc='42.352589',bn_sc='45.355886',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1992 F60 22.128696<br>");
$sql = "INSERT INTO ss09 SET runner_id='2056',ss_date='2009-10-11',sex='M',age='60',score='33.027161',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='67.213683',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2056 M60 33.027161<br>");
$sql = "INSERT INTO ss09 SET runner_id='2108',ss_date='2009-10-11',sex='M',age='60',score='36.54876',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='36.751943',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2108 M60 36.54876<br>");
$sql = "INSERT INTO ss09 SET runner_id='2122',ss_date='2009-10-11',sex='M',age='55',score='50.916525',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='68.92837',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2122 M55 50.916525<br>");
$sql = "INSERT INTO ss09 SET runner_id='2160',ss_date='2009-10-11',sex='M',age='65',score='45.913326',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='63.884678',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2160 M65 45.913326<br>");
$sql = "INSERT INTO ss09 SET runner_id='2198',ss_date='2009-10-11',sex='F',age='40',score='53.185591',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='73.9608',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2198 F40 53.185591<br>");
$sql = "INSERT INTO ss09 SET runner_id='2200',ss_date='2009-10-11',sex='M',age='10',score='25.204901',wh_sc='0',ye_sc='62.305168',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2200 M10 25.204901<br>");
$sql = "INSERT INTO ss09 SET runner_id='2201',ss_date='2009-10-11',sex='M',age='18',score='27.239706',wh_sc='0',ye_sc='0',or_sc='53.442033',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2201 M18 27.239706<br>");
$sql = "INSERT INTO ss09 SET runner_id='2207',ss_date='2009-10-11',sex='M',age='21',score='99.848282',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2207 M21 99.848282<br>");
$sql = "INSERT INTO ss09 SET runner_id='2227',ss_date='2009-10-11',sex='M',age='40',score='62.380012',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='62.859585',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2227 M40 62.380012<br>");
$sql = "INSERT INTO ss09 SET runner_id='2254',ss_date='2009-10-11',sex='F',age='16',score='27.476108',wh_sc='0',ye_sc='71.918025',or_sc='43.322391',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2254 F16 27.476108<br>");
$sql = "INSERT INTO ss09 SET runner_id='2255',ss_date='2009-10-11',sex='G',age='2',score='37.628414',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2255 G2 37.628414<br>");
$sql = "INSERT INTO ss09 SET runner_id='2257',ss_date='2009-10-11',sex='M',age='50',score='17.176537',wh_sc='0',ye_sc='37.439123',or_sc='35.512667',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2257 M50 17.176537<br>");
$sql = "INSERT INTO ss09 SET runner_id='2267',ss_date='2009-10-11',sex='M',age='45',score='26.288082',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2267 M45 26.288082<br>");
$sql = "INSERT INTO ss09 SET runner_id='2275',ss_date='2009-10-11',sex='M',age='21',score='36.45109',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2275 M21 36.45109<br>");
$sql = "INSERT INTO ss09 SET runner_id='2300',ss_date='2009-10-11',sex='G',age='2',score='25.456522',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2300 G2 25.456522<br>");
$sql = "INSERT INTO ss09 SET runner_id='2303',ss_date='2009-10-11',sex='G',age='2',score='25.594243',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='41.332498',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2303 G2 25.594243<br>");
$sql = "INSERT INTO ss09 SET runner_id='2312',ss_date='2009-10-11',sex='F',age='8',score='21.550191',wh_sc='88.790706',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2312 F8 21.550191<br>");
$sql = "INSERT INTO ss09 SET runner_id='2338',ss_date='2009-10-11',sex='M',age='16',score='26.029373',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2338 M16 26.029373<br>");
$sql = "INSERT INTO ss09 SET runner_id='2412',ss_date='2009-10-11',sex='M',age='21',score='51.817827',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='49.74761',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2412 M21 51.817827<br>");
$sql = "INSERT INTO ss09 SET runner_id='2414',ss_date='2009-10-11',sex='M',age='60',score='21.949635',wh_sc='0',ye_sc='0',or_sc='31.626818',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2414 M60 21.949635<br>");
$sql = "INSERT INTO ss09 SET runner_id='2444',ss_date='2009-10-11',sex='F',age='10',score='19.809646',wh_sc='0',ye_sc='49.381167',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2444 F10 19.809646<br>");
$sql = "INSERT INTO ss09 SET runner_id='2491',ss_date='2009-10-11',sex='F',age='20',score='22.672393',wh_sc='0',ye_sc='55.991817',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2491 F20 22.672393<br>");
$sql = "INSERT INTO ss09 SET runner_id='2473',ss_date='2009-10-11',sex='F',age='16',score='22.24824',wh_sc='0',ye_sc='54.279101',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2473 F16 22.24824<br>");
$sql = "INSERT INTO ss09 SET runner_id='2560',ss_date='2009-10-11',sex='M',age='50',score='17.098355',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2560 M50 17.098355<br>");
$sql = "INSERT INTO ss09 SET runner_id='2481',ss_date='2009-10-11',sex='M',age='45',score='37.621869',wh_sc='0',ye_sc='0',or_sc='70.479138',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2481 M45 37.621869<br>");
$sql = "INSERT INTO ss09 SET runner_id='2601',ss_date='2009-10-11',sex='M',age='60',score='37.074739',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2601 M60 37.074739<br>");
$sql = "INSERT INTO ss09 SET runner_id='2597',ss_date='2009-10-11',sex='M',age='45',score='27.852557',wh_sc='0',ye_sc='0',or_sc='54.015983',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2597 M45 27.852557<br>");
$sql = "INSERT INTO ss09 SET runner_id='2637',ss_date='2009-10-11',sex='F',age='45',score='21.903726',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2637 F45 21.903726<br>");
$sql = "INSERT INTO ss09 SET runner_id='2688',ss_date='2009-10-11',sex='F',age='21',score='16.486404',wh_sc='0',ye_sc='0',or_sc='31.145724',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2688 F21 16.486404<br>");
$sql = "INSERT INTO ss09 SET runner_id='2',ss_date='2009-10-25',sex='F',age='45',score='44.946718',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='59.725185',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2 F45 44.946718<br>");
$sql = "INSERT INTO ss09 SET runner_id='2688',ss_date='2009-10-18',sex='F',age='21',score='16.427284',wh_sc='0',ye_sc='0',or_sc='31.299494',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2688 F21 16.427284<br>");
$sql = "INSERT INTO ss09 SET runner_id='2637',ss_date='2009-10-18',sex='F',age='45',score='21.953496',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2637 F45 21.953496<br>");
$sql = "INSERT INTO ss09 SET runner_id='2597',ss_date='2009-10-18',sex='M',age='45',score='35.690395',wh_sc='0',ye_sc='0',or_sc='53.667082',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2597 M45 35.690395<br>");
$sql = "INSERT INTO ss09 SET runner_id='2601',ss_date='2009-10-18',sex='M',age='60',score='37.082337',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2601 M60 37.082337<br>");
$sql = "INSERT INTO ss09 SET runner_id='2481',ss_date='2009-10-18',sex='M',age='45',score='37.602086',wh_sc='0',ye_sc='0',or_sc='70.3915',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2481 M45 37.602086<br>");
$sql = "INSERT INTO ss09 SET runner_id='2473',ss_date='2009-10-18',sex='F',age='16',score='22.326971',wh_sc='0',ye_sc='53.904363',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2473 F16 22.326971<br>");
$sql = "INSERT INTO ss09 SET runner_id='2491',ss_date='2009-10-18',sex='F',age='20',score='22.718246',wh_sc='0',ye_sc='55.679221',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2491 F20 22.718246<br>");
$sql = "INSERT INTO ss09 SET runner_id='2444',ss_date='2009-10-18',sex='F',age='10',score='19.800949',wh_sc='0',ye_sc='48.398214',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2444 F10 19.800949<br>");
$sql = "INSERT INTO ss09 SET runner_id='2414',ss_date='2009-10-18',sex='M',age='60',score='21.948138',wh_sc='0',ye_sc='0',or_sc='31.663924',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2414 M60 21.948138<br>");
$sql = "INSERT INTO ss09 SET runner_id='2412',ss_date='2009-10-18',sex='M',age='21',score='51.830038',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='49.758517',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2412 M21 51.830038<br>");
$sql = "INSERT INTO ss09 SET runner_id='2338',ss_date='2009-10-18',sex='M',age='16',score='26.013434',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2338 M16 26.013434<br>");
$sql = "INSERT INTO ss09 SET runner_id='2312',ss_date='2009-10-18',sex='F',age='8',score='21.581996',wh_sc='88.790706',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2312 F8 21.581996<br>");
$sql = "INSERT INTO ss09 SET runner_id='2303',ss_date='2009-10-18',sex='G',age='2',score='25.619444',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='41.29988',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2303 G2 25.619444<br>");
$sql = "INSERT INTO ss09 SET runner_id='2300',ss_date='2009-10-18',sex='G',age='2',score='25.429514',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2300 G2 25.429514<br>");
$sql = "INSERT INTO ss09 SET runner_id='2275',ss_date='2009-10-18',sex='M',age='21',score='36.474086',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2275 M21 36.474086<br>");
$sql = "INSERT INTO ss09 SET runner_id='2267',ss_date='2009-10-18',sex='M',age='45',score='26.327966',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2267 M45 26.327966<br>");
$sql = "INSERT INTO ss09 SET runner_id='2257',ss_date='2009-10-18',sex='M',age='50',score='18.269589',wh_sc='0',ye_sc='40.806018',or_sc='35.442548',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2257 M50 18.269589<br>");
$sql = "INSERT INTO ss09 SET runner_id='2255',ss_date='2009-10-18',sex='G',age='2',score='37.655479',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2255 G2 37.655479<br>");
$sql = "INSERT INTO ss09 SET runner_id='2254',ss_date='2009-10-18',sex='F',age='16',score='27.505595',wh_sc='0',ye_sc='71.798855',or_sc='43.272964',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2254 F16 27.505595<br>");
$sql = "INSERT INTO ss09 SET runner_id='2227',ss_date='2009-10-18',sex='M',age='40',score='62.485437',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='62.914894',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2227 M40 62.485437<br>");
$sql = "INSERT INTO ss09 SET runner_id='2207',ss_date='2009-10-18',sex='M',age='21',score='99.824274',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2207 M21 99.824274<br>");
$sql = "INSERT INTO ss09 SET runner_id='2201',ss_date='2009-10-18',sex='M',age='20',score='25.408301',wh_sc='0',ye_sc='0',or_sc='53.58201',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2201 M20 25.408301<br>");
$sql = "INSERT INTO ss09 SET runner_id='2200',ss_date='2009-10-18',sex='M',age='10',score='25.304999',wh_sc='0',ye_sc='62.702125',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2200 M10 25.304999<br>");
$sql = "INSERT INTO ss09 SET runner_id='2198',ss_date='2009-10-18',sex='F',age='40',score='53.992753',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='74.682931',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2198 F40 53.992753<br>");
$sql = "INSERT INTO ss09 SET runner_id='2160',ss_date='2009-10-18',sex='M',age='65',score='46.001569',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='63.851261',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2160 M65 46.001569<br>");
$sql = "INSERT INTO ss09 SET runner_id='2122',ss_date='2009-10-18',sex='M',age='55',score='50.947947',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='68.893064',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2122 M55 50.947947<br>");
$sql = "INSERT INTO ss09 SET runner_id='2108',ss_date='2009-10-18',sex='M',age='60',score='36.795457',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='37.051401',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2108 M60 36.795457<br>");
$sql = "INSERT INTO ss09 SET runner_id='2056',ss_date='2009-10-18',sex='M',age='60',score='32.982263',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='65.913736',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2056 M60 32.982263<br>");
$sql = "INSERT INTO ss09 SET runner_id='1992',ss_date='2009-10-18',sex='F',age='60',score='22.125109',wh_sc='0',ye_sc='0',or_sc='42.281155',bn_sc='44.530025',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1992 F60 22.125109<br>");
$sql = "INSERT INTO ss09 SET runner_id='1991',ss_date='2009-10-18',sex='M',age='60',score='31.520631',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='68.229587',gr_sc='42.320037',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1991 M60 31.520631<br>");
$sql = "INSERT INTO ss09 SET runner_id='1953',ss_date='2009-10-18',sex='M',age='55',score='53.311531',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='64.851044',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1953 M55 53.311531<br>");
$sql = "INSERT INTO ss09 SET runner_id='1928',ss_date='2009-10-18',sex='M',age='50',score='64.189259',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='82.519575',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1928 M50 64.189259<br>");
$sql = "INSERT INTO ss09 SET runner_id='1926',ss_date='2009-10-18',sex='M',age='18',score='58.395103',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='69.353264',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1926 M18 58.395103<br>");
$sql = "INSERT INTO ss09 SET runner_id='1925',ss_date='2009-10-18',sex='M',age='16',score='53.14843',wh_sc='0',ye_sc='0',or_sc='101.316096',bn_sc='0',gr_sc='73.440207',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1925 M16 53.14843<br>");
$sql = "INSERT INTO ss09 SET runner_id='1923',ss_date='2009-10-18',sex='M',age='14',score='43.792201',wh_sc='0',ye_sc='111.416245',or_sc='82.591589',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1923 M14 43.792201<br>");
$sql = "INSERT INTO ss09 SET runner_id='1916',ss_date='2009-10-18',sex='F',age='55',score='25.600074',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='50.288045',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1916 F55 25.600074<br>");
$sql = "INSERT INTO ss09 SET runner_id='1879',ss_date='2009-10-18',sex='M',age='50',score='56.129958',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='79.346135',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1879 M50 56.129958<br>");
$sql = "INSERT INTO ss09 SET runner_id='1878',ss_date='2009-10-18',sex='F',age='50',score='29.316122',wh_sc='0',ye_sc='66.041203',or_sc='60.497093',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1878 F50 29.316122<br>");
$sql = "INSERT INTO ss09 SET runner_id='1861',ss_date='2009-10-18',sex='M',age='45',score='25.87756',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1861 M45 25.87756<br>");
$sql = "INSERT INTO ss09 SET runner_id='1812',ss_date='2009-10-18',sex='F',age='45',score='29.902847',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1812 F45 29.902847<br>");
$sql = "INSERT INTO ss09 SET runner_id='1777',ss_date='2009-10-18',sex='M',age='18',score='65.851404',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='90.981438',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1777 M18 65.851404<br>");
$sql = "INSERT INTO ss09 SET runner_id='1771',ss_date='2009-10-18',sex='F',age='60',score='25.432013',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='43.273756',gr_sc='33.890679',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1771 F60 25.432013<br>");
$sql = "INSERT INTO ss09 SET runner_id='1746',ss_date='2009-10-18',sex='F',age='50',score='37.300757',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='73.561683',gr_sc='50.945503',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1746 F50 37.300757<br>");
$sql = "INSERT INTO ss09 SET runner_id='1720',ss_date='2009-10-18',sex='F',age='60',score='24.748089',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1720 F60 24.748089<br>");
$sql = "INSERT INTO ss09 SET runner_id='1718',ss_date='2009-10-18',sex='M',age='60',score='50.325057',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='99.721091',gr_sc='70.559247',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1718 M60 50.325057<br>");
$sql = "INSERT INTO ss09 SET runner_id='1676',ss_date='2009-10-18',sex='F',age='55',score='24.172108',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='33.643819',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1676 F55 24.172108<br>");
$sql = "INSERT INTO ss09 SET runner_id='1667',ss_date='2009-10-18',sex='M',age='50',score='38.710353',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='73.624518',gr_sc='53.025002',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1667 M50 38.710353<br>");
$sql = "INSERT INTO ss09 SET runner_id='1606',ss_date='2009-10-18',sex='M',age='35',score='99.007825',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='99.344158',bl_sc='128.61255'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1606 M35 99.007825<br>");
$sql = "INSERT INTO ss09 SET runner_id='1604',ss_date='2009-10-18',sex='M',age='12',score='33.122472',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1604 M12 33.122472<br>");
$sql = "INSERT INTO ss09 SET runner_id='1603',ss_date='2009-10-18',sex='F',age='35',score='70.112711',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='89.596542',re_sc='73.194707',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1603 F35 70.112711<br>");
$sql = "INSERT INTO ss09 SET runner_id='1602',ss_date='2009-10-18',sex='M',age='10',score='34.745198',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1602 M10 34.745198<br>");
$sql = "INSERT INTO ss09 SET runner_id='1570',ss_date='2009-10-18',sex='M',age='18',score='58.336334',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='85.392367',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1570 M18 58.336334<br>");
$sql = "INSERT INTO ss09 SET runner_id='1567',ss_date='2009-10-18',sex='M',age='50',score='59.668964',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='59.755817',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1567 M50 59.668964<br>");
$sql = "INSERT INTO ss09 SET runner_id='1566',ss_date='2009-10-18',sex='F',age='14',score='30.823041',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1566 F14 30.823041<br>");
$sql = "INSERT INTO ss09 SET runner_id='1548',ss_date='2009-10-18',sex='F',age='40',score='31.131624',wh_sc='0',ye_sc='0',or_sc='56.376486',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1548 F40 31.131624<br>");
$sql = "INSERT INTO ss09 SET runner_id='1540',ss_date='2009-10-18',sex='M',age='45',score='28.102024',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='38.171005',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1540 M45 28.102024<br>");
$sql = "INSERT INTO ss09 SET runner_id='1519',ss_date='2009-10-18',sex='M',age='50',score='35.196219',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1519 M50 35.196219<br>");
$sql = "INSERT INTO ss09 SET runner_id='1518',ss_date='2009-10-18',sex='F',age='21',score='73.955542',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1518 F21 73.955542<br>");
$sql = "INSERT INTO ss09 SET runner_id='1504',ss_date='2009-10-18',sex='M',age='60',score='39.040385',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='58.700284',re_sc='31.632444',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1504 M60 39.040385<br>");
$sql = "INSERT INTO ss09 SET runner_id='1503',ss_date='2009-10-18',sex='F',age='55',score='19.622427',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='36.246961',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1503 F55 19.622427<br>");
$sql = "INSERT INTO ss09 SET runner_id='1480',ss_date='2009-10-18',sex='F',age='21',score='27.947678',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='38.908104',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1480 F21 27.947678<br>");
$sql = "INSERT INTO ss09 SET runner_id='1432',ss_date='2009-10-18',sex='M',age='45',score='81.159432',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='79.581537',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1432 M45 81.159432<br>");
$sql = "INSERT INTO ss09 SET runner_id='1418',ss_date='2009-10-18',sex='F',age='55',score='21.886292',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='42.752267',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1418 F55 21.886292<br>");
$sql = "INSERT INTO ss09 SET runner_id='1417',ss_date='2009-10-18',sex='M',age='60',score='36.308812',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='70.657292',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1417 M60 36.308812<br>");
$sql = "INSERT INTO ss09 SET runner_id='1398',ss_date='2009-10-18',sex='M',age='45',score='34.312044',wh_sc='0',ye_sc='91.92622',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1398 M45 34.312044<br>");
$sql = "INSERT INTO ss09 SET runner_id='1397',ss_date='2009-10-18',sex='M',age='16',score='55.287984',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='66.124556',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1397 M16 55.287984<br>");
$sql = "INSERT INTO ss09 SET runner_id='1364',ss_date='2009-10-18',sex='M',age='40',score='60.206492',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='60.767146',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1364 M40 60.206492<br>");
$sql = "INSERT INTO ss09 SET runner_id='1318',ss_date='2009-10-18',sex='M',age='50',score='21.868435',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='41.635066',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1318 M50 21.868435<br>");
$sql = "INSERT INTO ss09 SET runner_id='1282',ss_date='2009-10-18',sex='F',age='50',score='46.839362',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1282 F50 46.839362<br>");
$sql = "INSERT INTO ss09 SET runner_id='1279',ss_date='2009-10-18',sex='M',age='55',score='40.118114',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1279 M55 40.118114<br>");
$sql = "INSERT INTO ss09 SET runner_id='1250',ss_date='2009-10-18',sex='M',age='35',score='99.632883',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='99.473572',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1250 M35 99.632883<br>");
$sql = "INSERT INTO ss09 SET runner_id='1238',ss_date='2009-10-18',sex='M',age='55',score='28.035791',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='40.541245',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1238 M55 28.035791<br>");
$sql = "INSERT INTO ss09 SET runner_id='1218',ss_date='2009-10-18',sex='M',age='40',score='82.241792',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='82.830323',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1218 M40 82.241792<br>");
$sql = "INSERT INTO ss09 SET runner_id='1198',ss_date='2009-10-18',sex='M',age='65',score='46.508114',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='89.05468',gr_sc='61.829502',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1198 M65 46.508114<br>");
$sql = "INSERT INTO ss09 SET runner_id='1190',ss_date='2009-10-18',sex='M',age='40',score='67.352178',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='68.946472',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1190 M40 67.352178<br>");
$sql = "INSERT INTO ss09 SET runner_id='1189',ss_date='2009-10-18',sex='M',age='70',score='46.799772',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1189 M70 46.799772<br>");
$sql = "INSERT INTO ss09 SET runner_id='1151',ss_date='2009-10-18',sex='F',age='65',score='19.301404',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='37.749268',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1151 F65 19.301404<br>");
$sql = "INSERT INTO ss09 SET runner_id='1088',ss_date='2009-10-18',sex='M',age='60',score='37.620314',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='52.272329',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1088 M60 37.620314<br>");
$sql = "INSERT INTO ss09 SET runner_id='1032',ss_date='2009-10-18',sex='M',age='65',score='20.716059',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='40.118421',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1032 M65 20.716059<br>");
$sql = "INSERT INTO ss09 SET runner_id='1022',ss_date='2009-10-18',sex='M',age='14',score='45.001309',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1022 M14 45.001309<br>");
$sql = "INSERT INTO ss09 SET runner_id='1017',ss_date='2009-10-18',sex='F',age='45',score='21.380569',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1017 F45 21.380569<br>");
$sql = "INSERT INTO ss09 SET runner_id='970',ss_date='2009-10-18',sex='F',age='55',score='17.936673',wh_sc='0',ye_sc='0',or_sc='34.84409',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("970 F55 17.936673<br>");
$sql = "INSERT INTO ss09 SET runner_id='969',ss_date='2009-10-18',sex='F',age='21',score='44.735203',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='62.632112',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("969 F21 44.735203<br>");
$sql = "INSERT INTO ss09 SET runner_id='958',ss_date='2009-10-18',sex='M',age='45',score='16.301817',wh_sc='0',ye_sc='39.964224',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("958 M45 16.301817<br>");
$sql = "INSERT INTO ss09 SET runner_id='899',ss_date='2009-10-18',sex='M',age='60',score='46.745361',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='40.888682',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("899 M60 46.745361<br>");
$sql = "INSERT INTO ss09 SET runner_id='862',ss_date='2009-10-18',sex='M',age='21',score='37.921568',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("862 M21 37.921568<br>");
$sql = "INSERT INTO ss09 SET runner_id='799',ss_date='2009-10-18',sex='M',age='45',score='70.978387',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='69.508838',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("799 M45 70.978387<br>");
$sql = "INSERT INTO ss09 SET runner_id='798',ss_date='2009-10-18',sex='M',age='60',score='31.622468',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='61.778661',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("798 M60 31.622468<br>");
$sql = "INSERT INTO ss09 SET runner_id='797',ss_date='2009-10-18',sex='F',age='55',score='42.878461',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='57.791218',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("797 F55 42.878461<br>");
$sql = "INSERT INTO ss09 SET runner_id='796',ss_date='2009-10-18',sex='M',age='60',score='27.614584',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("796 M60 27.614584<br>");
$sql = "INSERT INTO ss09 SET runner_id='784',ss_date='2009-10-18',sex='F',age='50',score='18.50074',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("784 F50 18.50074<br>");
$sql = "INSERT INTO ss09 SET runner_id='783',ss_date='2009-10-18',sex='F',age='70',score='22.203702',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='45.309535',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("783 F70 22.203702<br>");
$sql = "INSERT INTO ss09 SET runner_id='767',ss_date='2009-10-18',sex='M',age='40',score='57.308749',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='52.226161',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("767 M40 57.308749<br>");
$sql = "INSERT INTO ss09 SET runner_id='748',ss_date='2009-10-18',sex='M',age='10',score='21.589835',wh_sc='0',ye_sc='50.211367',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("748 M10 21.589835<br>");
$sql = "INSERT INTO ss09 SET runner_id='673',ss_date='2009-10-18',sex='M',age='45',score='35.613809',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("673 M45 35.613809<br>");
$sql = "INSERT INTO ss09 SET runner_id='667',ss_date='2009-10-18',sex='M',age='55',score='29.927554',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='58.978046',gr_sc='41.453045',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("667 M55 29.927554<br>");
$sql = "INSERT INTO ss09 SET runner_id='666',ss_date='2009-10-18',sex='F',age='55',score='30.001938',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='55.644127',gr_sc='42.941313',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("666 F55 30.001938<br>");
$sql = "INSERT INTO ss09 SET runner_id='637',ss_date='2009-10-18',sex='M',age='10',score='23.288924',wh_sc='96.885685',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("637 M10 23.288924<br>");
$sql = "INSERT INTO ss09 SET runner_id='636',ss_date='2009-10-18',sex='F',age='35',score='45.951387',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='62.927537',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("636 F35 45.951387<br>");
$sql = "INSERT INTO ss09 SET runner_id='634',ss_date='2009-10-18',sex='M',age='40',score='48.653811',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='95.507791',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("634 M40 48.653811<br>");
$sql = "INSERT INTO ss09 SET runner_id='633',ss_date='2009-10-18',sex='M',age='16',score='29.194013',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("633 M16 29.194013<br>");
$sql = "INSERT INTO ss09 SET runner_id='630',ss_date='2009-10-18',sex='M',age='40',score='27.206154',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("630 M40 27.206154<br>");
$sql = "INSERT INTO ss09 SET runner_id='626',ss_date='2009-10-18',sex='M',age='21',score='72.326864',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='72.242982',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("626 M21 72.326864<br>");
$sql = "INSERT INTO ss09 SET runner_id='616',ss_date='2009-10-18',sex='M',age='16',score='23.861333',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='48.458384',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("616 M16 23.861333<br>");
$sql = "INSERT INTO ss09 SET runner_id='615',ss_date='2009-10-18',sex='F',age='10',score='25.966714',wh_sc='109.296394',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("615 F10 25.966714<br>");
$sql = "INSERT INTO ss09 SET runner_id='614',ss_date='2009-10-18',sex='F',age='50',score='47.903806',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='66.967298',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("614 F50 47.903806<br>");
$sql = "INSERT INTO ss09 SET runner_id='613',ss_date='2009-10-18',sex='M',age='50',score='56.906263',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='78.820028',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("613 M50 56.906263<br>");
$sql = "INSERT INTO ss09 SET runner_id='606',ss_date='2009-10-18',sex='M',age='21',score='44.550908',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("606 M21 44.550908<br>");
$sql = "INSERT INTO ss09 SET runner_id='601',ss_date='2009-10-18',sex='M',age='60',score='34.896433',wh_sc='0',ye_sc='96.657534',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("601 M60 34.896433<br>");
$sql = "INSERT INTO ss09 SET runner_id='600',ss_date='2009-10-18',sex='M',age='35',score='23.06334',wh_sc='93.81792',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("600 M35 23.06334<br>");
$sql = "INSERT INTO ss09 SET runner_id='568',ss_date='2009-10-18',sex='F',age='55',score='20.496565',wh_sc='0',ye_sc='0',or_sc='40.680482',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("568 F55 20.496565<br>");
$sql = "INSERT INTO ss09 SET runner_id='567',ss_date='2009-10-18',sex='M',age='55',score='57.368119',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='78.173159',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("567 M55 57.368119<br>");
$sql = "INSERT INTO ss09 SET runner_id='563',ss_date='2009-10-18',sex='F',age='55',score='53.253496',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("563 F55 53.253496<br>");
$sql = "INSERT INTO ss09 SET runner_id='545',ss_date='2009-10-18',sex='M',age='21',score='77.183357',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='76.799903',bl_sc='100.610724'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("545 M21 77.183357<br>");
$sql = "INSERT INTO ss09 SET runner_id='522',ss_date='2009-10-18',sex='F',age='50',score='31.134824',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='60.811933',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("522 F50 31.134824<br>");
$sql = "INSERT INTO ss09 SET runner_id='499',ss_date='2009-10-18',sex='M',age='50',score='39.178316',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='54.420883',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("499 M50 39.178316<br>");
$sql = "INSERT INTO ss09 SET runner_id='463',ss_date='2009-10-18',sex='M',age='45',score='30.284187',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='51.192392',gr_sc='40.914267',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("463 M45 30.284187<br>");
$sql = "INSERT INTO ss09 SET runner_id='428',ss_date='2009-10-18',sex='M',age='50',score='37.880305',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='70.104223',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("428 M50 37.880305<br>");
$sql = "INSERT INTO ss09 SET runner_id='418',ss_date='2009-10-18',sex='M',age='60',score='44.246537',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("418 M60 44.246537<br>");
$sql = "INSERT INTO ss09 SET runner_id='376',ss_date='2009-10-18',sex='M',age='50',score='66.723766',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='65.512785',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("376 M50 66.723766<br>");
$sql = "INSERT INTO ss09 SET runner_id='270',ss_date='2009-10-18',sex='M',age='50',score='79.181264',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='110.434654',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("270 M50 79.181264<br>");
$sql = "INSERT INTO ss09 SET runner_id='269',ss_date='2009-10-18',sex='F',age='14',score='36.675277',wh_sc='0',ye_sc='0',or_sc='72.580457',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("269 F14 36.675277<br>");
$sql = "INSERT INTO ss09 SET runner_id='267',ss_date='2009-10-18',sex='F',age='18',score='67.851286',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='69.322798',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("267 F18 67.851286<br>");
$sql = "INSERT INTO ss09 SET runner_id='255',ss_date='2009-10-18',sex='M',age='20',score='35.35139',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("255 M20 35.35139<br>");
$sql = "INSERT INTO ss09 SET runner_id='254',ss_date='2009-10-18',sex='F',age='55',score='23.31182',wh_sc='0',ye_sc='55.471645',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("254 F55 23.31182<br>");
$sql = "INSERT INTO ss09 SET runner_id='253',ss_date='2009-10-18',sex='M',age='40',score='36.082177',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("253 M40 36.082177<br>");
$sql = "INSERT INTO ss09 SET runner_id='248',ss_date='2009-10-18',sex='M',age='60',score='51.510372',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='104.771117',gr_sc='68.646041',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("248 M60 51.510372<br>");
$sql = "INSERT INTO ss09 SET runner_id='226',ss_date='2009-10-18',sex='M',age='80',score='23.912185',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='43.454396',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("226 M80 23.912185<br>");
$sql = "INSERT INTO ss09 SET runner_id='176',ss_date='2009-10-18',sex='M',age='55',score='70.433737',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='98.583908',re_sc='65.507028',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("176 M55 70.433737<br>");
$sql = "INSERT INTO ss09 SET runner_id='169',ss_date='2009-10-18',sex='M',age='60',score='27.343163',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='37.811185',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("169 M60 27.343163<br>");
$sql = "INSERT INTO ss09 SET runner_id='162',ss_date='2009-10-18',sex='M',age='35',score='52.768073',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='51.761073',bl_sc='70.776726'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("162 M35 52.768073<br>");
$sql = "INSERT INTO ss09 SET runner_id='131',ss_date='2009-10-18',sex='M',age='40',score='100.542842',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='101.18227',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("131 M40 100.542842<br>");
$sql = "INSERT INTO ss09 SET runner_id='100',ss_date='2009-10-18',sex='F',age='16',score='25.50151',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("100 F16 25.50151<br>");
$sql = "INSERT INTO ss09 SET runner_id='96',ss_date='2009-10-18',sex='M',age='55',score='42.9426',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='60.097587',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("96 M55 42.9426<br>");
$sql = "INSERT INTO ss09 SET runner_id='87',ss_date='2009-10-18',sex='M',age='16',score='59.328072',wh_sc='0',ye_sc='0',or_sc='116.092315',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("87 M16 59.328072<br>");
$sql = "INSERT INTO ss09 SET runner_id='86',ss_date='2009-10-18',sex='M',age='50',score='43.209051',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='43.092133',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("86 M50 43.209051<br>");
$sql = "INSERT INTO ss09 SET runner_id='69',ss_date='2009-10-18',sex='M',age='45',score='52.097306',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='54.057418',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("69 M45 52.097306<br>");
$sql = "INSERT INTO ss09 SET runner_id='48',ss_date='2009-10-18',sex='M',age='50',score='38.483658',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='53.604986',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("48 M50 38.483658<br>");
$sql = "INSERT INTO ss09 SET runner_id='28',ss_date='2009-10-18',sex='M',age='45',score='44.369649',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("28 M45 44.369649<br>");
$sql = "INSERT INTO ss09 SET runner_id='13',ss_date='2009-10-18',sex='M',age='45',score='68.3126',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='69.721219',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("13 M45 68.3126<br>");
$sql = "INSERT INTO ss09 SET runner_id='12',ss_date='2009-10-18',sex='M',age='20',score='83.780314',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("12 M20 83.780314<br>");
$sql = "INSERT INTO ss09 SET runner_id='2',ss_date='2009-10-18',sex='F',age='45',score='45.021625',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='59.738274',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2 F45 45.021625<br>");
$sql = "INSERT INTO ss09 SET runner_id='12',ss_date='2009-10-25',sex='M',age='20',score='83.782826',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("12 M20 83.782826<br>");
$sql = "INSERT INTO ss09 SET runner_id='13',ss_date='2009-10-25',sex='M',age='45',score='69.005614',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='70.637819',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("13 M45 69.005614<br>");
$sql = "INSERT INTO ss09 SET runner_id='14',ss_date='2009-10-25',sex='F',age='35',score='39.011244',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("14 F35 39.011244<br>");
$sql = "INSERT INTO ss09 SET runner_id='28',ss_date='2009-10-25',sex='M',age='45',score='44.191751',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("28 M45 44.191751<br>");
$sql = "INSERT INTO ss09 SET runner_id='48',ss_date='2009-10-25',sex='M',age='50',score='38.096609',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='52.895253',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("48 M50 38.096609<br>");
$sql = "INSERT INTO ss09 SET runner_id='69',ss_date='2009-10-25',sex='M',age='45',score='52.403406',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='65.677756',re_sc='54.129374',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("69 M45 52.403406<br>");
$sql = "INSERT INTO ss09 SET runner_id='86',ss_date='2009-10-25',sex='M',age='50',score='43.230611',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='43.079407',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("86 M50 43.230611<br>");
$sql = "INSERT INTO ss09 SET runner_id='87',ss_date='2009-10-25',sex='M',age='16',score='59.488469',wh_sc='0',ye_sc='0',or_sc='116.256197',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("87 M16 59.488469<br>");
$sql = "INSERT INTO ss09 SET runner_id='96',ss_date='2009-10-25',sex='M',age='55',score='42.877436',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='59.92171',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("96 M55 42.877436<br>");
$sql = "INSERT INTO ss09 SET runner_id='100',ss_date='2009-10-25',sex='F',age='16',score='25.274108',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("100 F16 25.274108<br>");
$sql = "INSERT INTO ss09 SET runner_id='131',ss_date='2009-10-25',sex='M',age='40',score='100.452777',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='101.089037',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("131 M40 100.452777<br>");
$sql = "INSERT INTO ss09 SET runner_id='162',ss_date='2009-10-25',sex='M',age='35',score='53.20559',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='52.828804',bl_sc='70.776726'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("162 M35 53.20559<br>");
$sql = "INSERT INTO ss09 SET runner_id='169',ss_date='2009-10-25',sex='M',age='60',score='27.465162',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='38.102005',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("169 M60 27.465162<br>");
$sql = "INSERT INTO ss09 SET runner_id='176',ss_date='2009-10-25',sex='M',age='55',score='70.414783',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='98.6709',re_sc='65.476243',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("176 M55 70.414783<br>");
$sql = "INSERT INTO ss09 SET runner_id='226',ss_date='2009-10-25',sex='M',age='80',score='23.936676',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='43.815579',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("226 M80 23.936676<br>");
$sql = "INSERT INTO ss09 SET runner_id='248',ss_date='2009-10-25',sex='M',age='60',score='52.244123',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='104.51673',gr_sc='68.988188',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("248 M60 52.244123<br>");
$sql = "INSERT INTO ss09 SET runner_id='253',ss_date='2009-10-25',sex='M',age='40',score='36.579798',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("253 M40 36.579798<br>");
$sql = "INSERT INTO ss09 SET runner_id='254',ss_date='2009-10-25',sex='F',age='55',score='21.950303',wh_sc='0',ye_sc='55.492055',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("254 F55 21.950303<br>");
$sql = "INSERT INTO ss09 SET runner_id='255',ss_date='2009-10-25',sex='M',age='20',score='35.071763',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("255 M20 35.071763<br>");
$sql = "INSERT INTO ss09 SET runner_id='267',ss_date='2009-10-25',sex='F',age='18',score='67.748991',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='69.130915',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("267 F18 67.748991<br>");
$sql = "INSERT INTO ss09 SET runner_id='269',ss_date='2009-10-25',sex='F',age='14',score='36.502316',wh_sc='0',ye_sc='0',or_sc='72.468322',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("269 F14 36.502316<br>");
$sql = "INSERT INTO ss09 SET runner_id='270',ss_date='2009-10-25',sex='M',age='50',score='79.003205',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='110.323383',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("270 M50 79.003205<br>");
$sql = "INSERT INTO ss09 SET runner_id='376',ss_date='2009-10-25',sex='M',age='50',score='65.213016',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='64.079417',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("376 M50 65.213016<br>");
$sql = "INSERT INTO ss09 SET runner_id='418',ss_date='2009-10-25',sex='M',age='60',score='46.392148',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("418 M60 46.392148<br>");
$sql = "INSERT INTO ss09 SET runner_id='428',ss_date='2009-10-25',sex='M',age='50',score='38.140842',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='69.874288',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("428 M50 38.140842<br>");
$sql = "INSERT INTO ss09 SET runner_id='463',ss_date='2009-10-25',sex='M',age='45',score='30.412872',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='51.2004',gr_sc='41.35021',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("463 M45 30.412872<br>");
$sql = "INSERT INTO ss09 SET runner_id='499',ss_date='2009-10-25',sex='M',age='50',score='38.943818',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='54.146366',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("499 M50 38.943818<br>");
$sql = "INSERT INTO ss09 SET runner_id='522',ss_date='2009-10-25',sex='F',age='50',score='31.55639',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='61.658507',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("522 F50 31.55639<br>");
$sql = "INSERT INTO ss09 SET runner_id='545',ss_date='2009-10-25',sex='M',age='21',score='76.953687',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='76.552908',bl_sc='100.610724'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("545 M21 76.953687<br>");
$sql = "INSERT INTO ss09 SET runner_id='563',ss_date='2009-10-25',sex='F',age='55',score='53.185319',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("563 F55 53.185319<br>");
$sql = "INSERT INTO ss09 SET runner_id='567',ss_date='2009-10-25',sex='M',age='55',score='57.66085',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='78.27503',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("567 M55 57.66085<br>");
$sql = "INSERT INTO ss09 SET runner_id='568',ss_date='2009-10-25',sex='F',age='55',score='20.513571',wh_sc='0',ye_sc='0',or_sc='40.001812',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("568 F55 20.513571<br>");
$sql = "INSERT INTO ss09 SET runner_id='600',ss_date='2009-10-25',sex='M',age='35',score='23.311924',wh_sc='81.918875',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("600 M35 23.311924<br>");
$sql = "INSERT INTO ss09 SET runner_id='601',ss_date='2009-10-25',sex='M',age='60',score='34.663089',wh_sc='0',ye_sc='96.438467',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("601 M60 34.663089<br>");
$sql = "INSERT INTO ss09 SET runner_id='606',ss_date='2009-10-25',sex='M',age='21',score='44.417267',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("606 M21 44.417267<br>");
$sql = "INSERT INTO ss09 SET runner_id='613',ss_date='2009-10-25',sex='M',age='50',score='57.349593',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='80.000347',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("613 M50 57.349593<br>");
$sql = "INSERT INTO ss09 SET runner_id='614',ss_date='2009-10-25',sex='F',age='50',score='47.550702',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='66.526548',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("614 F50 47.550702<br>");
$sql = "INSERT INTO ss09 SET runner_id='615',ss_date='2009-10-25',sex='F',age='10',score='27.991029',wh_sc='93.850515',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("615 F10 27.991029<br>");
$sql = "INSERT INTO ss09 SET runner_id='616',ss_date='2009-10-25',sex='M',age='16',score='24.006432',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='48.16864',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("616 M16 24.006432<br>");
$sql = "INSERT INTO ss09 SET runner_id='626',ss_date='2009-10-25',sex='M',age='21',score='72.246528',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='72.162068',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("626 M21 72.246528<br>");
$sql = "INSERT INTO ss09 SET runner_id='630',ss_date='2009-10-25',sex='M',age='40',score='27.311468',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("630 M40 27.311468<br>");
$sql = "INSERT INTO ss09 SET runner_id='633',ss_date='2009-10-25',sex='M',age='16',score='29.100582',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("633 M16 29.100582<br>");
$sql = "INSERT INTO ss09 SET runner_id='634',ss_date='2009-10-25',sex='M',age='40',score='48.937632',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='95.167138',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("634 M40 48.937632<br>");
$sql = "INSERT INTO ss09 SET runner_id='636',ss_date='2009-10-25',sex='F',age='35',score='45.903009',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='62.835919',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("636 F35 45.903009<br>");
$sql = "INSERT INTO ss09 SET runner_id='637',ss_date='2009-10-25',sex='M',age='10',score='24.292342',wh_sc='79.98807',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("637 M10 24.292342<br>");
$sql = "INSERT INTO ss09 SET runner_id='666',ss_date='2009-10-25',sex='F',age='55',score='29.578115',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='55.41797',gr_sc='41.507853',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("666 F55 29.578115<br>");
$sql = "INSERT INTO ss09 SET runner_id='667',ss_date='2009-10-25',sex='M',age='55',score='29.60761',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='58.695138',gr_sc='40.70753',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("667 M55 29.60761<br>");
$sql = "INSERT INTO ss09 SET runner_id='673',ss_date='2009-10-25',sex='M',age='45',score='35.593634',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("673 M45 35.593634<br>");
$sql = "INSERT INTO ss09 SET runner_id='743',ss_date='2009-10-25',sex='M',age='50',score='39.48122',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("743 M50 39.48122<br>");
$sql = "INSERT INTO ss09 SET runner_id='748',ss_date='2009-10-25',sex='M',age='10',score='21.454558',wh_sc='0',ye_sc='50.30319',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("748 M10 21.454558<br>");
$sql = "INSERT INTO ss09 SET runner_id='767',ss_date='2009-10-25',sex='M',age='40',score='57.270623',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='52.123919',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("767 M40 57.270623<br>");
$sql = "INSERT INTO ss09 SET runner_id='783',ss_date='2009-10-25',sex='F',age='70',score='22.253842',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='44.950123',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("783 F70 22.253842<br>");
$sql = "INSERT INTO ss09 SET runner_id='784',ss_date='2009-10-25',sex='F',age='50',score='18.503335',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("784 F50 18.503335<br>");
$sql = "INSERT INTO ss09 SET runner_id='796',ss_date='2009-10-25',sex='M',age='60',score='27.664808',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("796 M60 27.664808<br>");
$sql = "INSERT INTO ss09 SET runner_id='797',ss_date='2009-10-25',sex='F',age='55',score='42.47966',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='57.312943',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("797 F55 42.47966<br>");
$sql = "INSERT INTO ss09 SET runner_id='798',ss_date='2009-10-25',sex='M',age='60',score='32.014882',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='61.572657',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("798 M60 32.014882<br>");
$sql = "INSERT INTO ss09 SET runner_id='799',ss_date='2009-10-25',sex='M',age='45',score='70.840401',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='69.308568',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("799 M45 70.840401<br>");
$sql = "INSERT INTO ss09 SET runner_id='862',ss_date='2009-10-25',sex='M',age='21',score='37.691717',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("862 M21 37.691717<br>");
$sql = "INSERT INTO ss09 SET runner_id='899',ss_date='2009-10-25',sex='M',age='60',score='46.653527',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='40.81279',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("899 M60 46.653527<br>");
$sql = "INSERT INTO ss09 SET runner_id='958',ss_date='2009-10-25',sex='M',age='45',score='16.13751',wh_sc='0',ye_sc='39.508277',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("958 M45 16.13751<br>");
$sql = "INSERT INTO ss09 SET runner_id='969',ss_date='2009-10-25',sex='F',age='21',score='44.501435',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='62.35886',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("969 F21 44.501435<br>");
$sql = "INSERT INTO ss09 SET runner_id='970',ss_date='2009-10-25',sex='F',age='55',score='18.276072',wh_sc='0',ye_sc='0',or_sc='35.26425',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("970 F55 18.276072<br>");
$sql = "INSERT INTO ss09 SET runner_id='1017',ss_date='2009-10-25',sex='F',age='45',score='21.405541',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1017 F45 21.405541<br>");
$sql = "INSERT INTO ss09 SET runner_id='1022',ss_date='2009-10-25',sex='M',age='14',score='44.904044',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1022 M14 44.904044<br>");
$sql = "INSERT INTO ss09 SET runner_id='1032',ss_date='2009-10-25',sex='M',age='65',score='20.876643',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='40.058647',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1032 M65 20.876643<br>");
$sql = "INSERT INTO ss09 SET runner_id='1034',ss_date='2009-10-25',sex='M',age='70',score='17.27535',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='33.57286',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1034 M70 17.27535<br>");
$sql = "INSERT INTO ss09 SET runner_id='1088',ss_date='2009-10-25',sex='M',age='60',score='37.548651',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='52.19624',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1088 M60 37.548651<br>");
$sql = "INSERT INTO ss09 SET runner_id='1151',ss_date='2009-10-25',sex='F',age='65',score='22.133997',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='37.751601',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1151 F65 22.133997<br>");
$sql = "INSERT INTO ss09 SET runner_id='1189',ss_date='2009-10-25',sex='M',age='70',score='45.262802',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1189 M70 45.262802<br>");
$sql = "INSERT INTO ss09 SET runner_id='1190',ss_date='2009-10-25',sex='M',age='40',score='67.321541',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='68.901528',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1190 M40 67.321541<br>");
$sql = "INSERT INTO ss09 SET runner_id='1198',ss_date='2009-10-25',sex='M',age='65',score='46.116706',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='88.326331',gr_sc='62.205919',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1198 M65 46.116706<br>");
$sql = "INSERT INTO ss09 SET runner_id='1214',ss_date='2009-10-25',sex='M',age='60',score='18.758148',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='35.94821',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1214 M60 18.758148<br>");
$sql = "INSERT INTO ss09 SET runner_id='1218',ss_date='2009-10-25',sex='M',age='40',score='81.961216',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='83.158032',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1218 M40 81.961216<br>");
$sql = "INSERT INTO ss09 SET runner_id='1238',ss_date='2009-10-25',sex='M',age='55',score='27.828482',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='42.242493',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1238 M55 27.828482<br>");
$sql = "INSERT INTO ss09 SET runner_id='1246',ss_date='2009-10-25',sex='F',age='50',score='28.611717',wh_sc='0',ye_sc='0',or_sc='54.879627',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1246 F50 28.611717<br>");
$sql = "INSERT INTO ss09 SET runner_id='1250',ss_date='2009-10-25',sex='M',age='35',score='99.670772',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='99.518631',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1250 M35 99.670772<br>");
$sql = "INSERT INTO ss09 SET runner_id='1279',ss_date='2009-10-25',sex='M',age='55',score='40.0591',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1279 M55 40.0591<br>");
$sql = "INSERT INTO ss09 SET runner_id='1282',ss_date='2009-10-25',sex='F',age='50',score='46.749349',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1282 F50 46.749349<br>");
$sql = "INSERT INTO ss09 SET runner_id='1318',ss_date='2009-10-25',sex='M',age='50',score='22.574612',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='41.435968',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1318 M50 22.574612<br>");
$sql = "INSERT INTO ss09 SET runner_id='1364',ss_date='2009-10-25',sex='M',age='40',score='60.033805',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='60.635652',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1364 M40 60.033805<br>");
$sql = "INSERT INTO ss09 SET runner_id='1397',ss_date='2009-10-25',sex='M',age='16',score='56.042694',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='83.820004',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1397 M16 56.042694<br>");
$sql = "INSERT INTO ss09 SET runner_id='1398',ss_date='2009-10-25',sex='M',age='45',score='32.515893',wh_sc='0',ye_sc='92.016208',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1398 M45 32.515893<br>");
$sql = "INSERT INTO ss09 SET runner_id='1417',ss_date='2009-10-25',sex='M',age='60',score='36.415564',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='70.130898',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1417 M60 36.415564<br>");
$sql = "INSERT INTO ss09 SET runner_id='1418',ss_date='2009-10-25',sex='F',age='55',score='22.005987',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='42.631534',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1418 F55 22.005987<br>");
$sql = "INSERT INTO ss09 SET runner_id='1432',ss_date='2009-10-25',sex='M',age='45',score='80.922675',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='78.003852',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1432 M45 80.922675<br>");
$sql = "INSERT INTO ss09 SET runner_id='1480',ss_date='2009-10-25',sex='F',age='21',score='28.01377',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='38.745971',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1480 F21 28.01377<br>");
$sql = "INSERT INTO ss09 SET runner_id='1486',ss_date='2009-10-25',sex='M',age='65',score='26.754434',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1486 M65 26.754434<br>");
$sql = "INSERT INTO ss09 SET runner_id='1503',ss_date='2009-10-25',sex='F',age='55',score='19.66305',wh_sc='0',ye_sc='0',or_sc='37.999811',bn_sc='36.021215',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1503 F55 19.66305<br>");
$sql = "INSERT INTO ss09 SET runner_id='1504',ss_date='2009-10-25',sex='M',age='60',score='38.800436',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='57.576171',re_sc='31.715219',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1504 M60 38.800436<br>");
$sql = "INSERT INTO ss09 SET runner_id='1518',ss_date='2009-10-25',sex='F',age='21',score='73.843073',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1518 F21 73.843073<br>");
$sql = "INSERT INTO ss09 SET runner_id='1519',ss_date='2009-10-25',sex='M',age='50',score='35.166225',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1519 M50 35.166225<br>");
$sql = "INSERT INTO ss09 SET runner_id='1540',ss_date='2009-10-25',sex='M',age='45',score='27.924955',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='38.135737',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1540 M45 27.924955<br>");
$sql = "INSERT INTO ss09 SET runner_id='1548',ss_date='2009-10-25',sex='F',age='40',score='30.553817',wh_sc='0',ye_sc='0',or_sc='55.390787',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1548 F40 30.553817<br>");
$sql = "INSERT INTO ss09 SET runner_id='1566',ss_date='2009-10-25',sex='F',age='14',score='31.370187',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1566 F14 31.370187<br>");
$sql = "INSERT INTO ss09 SET runner_id='1567',ss_date='2009-10-25',sex='M',age='50',score='59.338405',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='81.899363',re_sc='59.803622',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1567 M50 59.338405<br>");
$sql = "INSERT INTO ss09 SET runner_id='1570',ss_date='2009-10-25',sex='M',age='18',score='59.023921',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='85.303258',re_sc='61.231414',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1570 M18 59.023921<br>");
$sql = "INSERT INTO ss09 SET runner_id='1602',ss_date='2009-10-25',sex='M',age='10',score='37.689769',wh_sc='124.23061',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1602 M10 37.689769<br>");
$sql = "INSERT INTO ss09 SET runner_id='1603',ss_date='2009-10-25',sex='F',age='35',score='69.172958',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='89.4269',re_sc='71.444586',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1603 F35 69.172958<br>");
$sql = "INSERT INTO ss09 SET runner_id='1604',ss_date='2009-10-25',sex='M',age='12',score='33.746552',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1604 M12 33.746552<br>");
$sql = "INSERT INTO ss09 SET runner_id='1606',ss_date='2009-10-25',sex='M',age='35',score='99.095747',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='99.392332',bl_sc='128.61255'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1606 M35 99.095747<br>");
$sql = "INSERT INTO ss09 SET runner_id='1620',ss_date='2009-10-25',sex='M',age='50',score='27.426053',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1620 M50 27.426053<br>");
$sql = "INSERT INTO ss09 SET runner_id='1667',ss_date='2009-10-25',sex='M',age='50',score='38.649672',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='73.007677',gr_sc='53.013999',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1667 M50 38.649672<br>");
$sql = "INSERT INTO ss09 SET runner_id='1676',ss_date='2009-10-25',sex='F',age='55',score='24.173597',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='33.559762',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1676 F55 24.173597<br>");
$sql = "INSERT INTO ss09 SET runner_id='1718',ss_date='2009-10-25',sex='M',age='60',score='50.356916',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='99.633953',gr_sc='70.457668',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1718 M60 50.356916<br>");
$sql = "INSERT INTO ss09 SET runner_id='1720',ss_date='2009-10-25',sex='F',age='60',score='24.387964',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1720 F60 24.387964<br>");
$sql = "INSERT INTO ss09 SET runner_id='1746',ss_date='2009-10-25',sex='F',age='50',score='38.324363',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='73.219406',gr_sc='53.973914',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1746 F50 38.324363<br>");
$sql = "INSERT INTO ss09 SET runner_id='1771',ss_date='2009-10-25',sex='F',age='60',score='25.74716',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='43.181623',gr_sc='34.811571',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1771 F60 25.74716<br>");
$sql = "INSERT INTO ss09 SET runner_id='1777',ss_date='2009-10-25',sex='M',age='18',score='65.712157',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='91.005717',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1777 M18 65.712157<br>");
$sql = "INSERT INTO ss09 SET runner_id='1812',ss_date='2009-10-25',sex='F',age='45',score='29.822317',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1812 F45 29.822317<br>");
$sql = "INSERT INTO ss09 SET runner_id='1861',ss_date='2009-10-25',sex='M',age='45',score='26.162421',wh_sc='0',ye_sc='0',or_sc='50.696779',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1861 M45 26.162421<br>");
$sql = "INSERT INTO ss09 SET runner_id='1878',ss_date='2009-10-25',sex='F',age='50',score='29.198531',wh_sc='0',ye_sc='64.407123',or_sc='60.574279',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1878 F50 29.198531<br>");
$sql = "INSERT INTO ss09 SET runner_id='1879',ss_date='2009-10-25',sex='M',age='50',score='56.027897',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='79.130248',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1879 M50 56.027897<br>");
$sql = "INSERT INTO ss09 SET runner_id='1916',ss_date='2009-10-25',sex='F',age='55',score='25.56067',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='46.186095',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1916 F55 25.56067<br>");
$sql = "INSERT INTO ss09 SET runner_id='1923',ss_date='2009-10-25',sex='M',age='14',score='43.98614',wh_sc='0',ye_sc='111.545325',or_sc='83.602611',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1923 M14 43.98614<br>");
$sql = "INSERT INTO ss09 SET runner_id='1925',ss_date='2009-10-25',sex='M',age='16',score='52.047433',wh_sc='0',ye_sc='0',or_sc='100.141192',bn_sc='95.849317',gr_sc='73.415478',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1925 M16 52.047433<br>");
$sql = "INSERT INTO ss09 SET runner_id='1926',ss_date='2009-10-25',sex='M',age='18',score='58.481104',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='69.326613',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1926 M18 58.481104<br>");
$sql = "INSERT INTO ss09 SET runner_id='1928',ss_date='2009-10-25',sex='M',age='50',score='64.097939',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='82.386594',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1928 M50 64.097939<br>");
$sql = "INSERT INTO ss09 SET runner_id='1953',ss_date='2009-10-25',sex='M',age='55',score='52.940995',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='71.905016',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1953 M55 52.940995<br>");
$sql = "INSERT INTO ss09 SET runner_id='1991',ss_date='2009-10-25',sex='M',age='60',score='31.571904',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='68.028537',gr_sc='43.517054',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1991 M60 31.571904<br>");
$sql = "INSERT INTO ss09 SET runner_id='1992',ss_date='2009-10-25',sex='F',age='60',score='23.200294',wh_sc='0',ye_sc='0',or_sc='44.815737',bn_sc='44.40715',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1992 F60 23.200294<br>");
$sql = "INSERT INTO ss09 SET runner_id='2056',ss_date='2009-10-25',sex='M',age='60',score='32.928727',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='65.405539',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2056 M60 32.928727<br>");
$sql = "INSERT INTO ss09 SET runner_id='2108',ss_date='2009-10-25',sex='M',age='60',score='36.570615',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='36.767203',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2108 M60 36.570615<br>");
$sql = "INSERT INTO ss09 SET runner_id='2122',ss_date='2009-10-25',sex='M',age='55',score='50.943613',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='68.808096',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2122 M55 50.943613<br>");
$sql = "INSERT INTO ss09 SET runner_id='2160',ss_date='2009-10-25',sex='M',age='65',score='45.961492',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='63.826842',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2160 M65 45.961492<br>");
$sql = "INSERT INTO ss09 SET runner_id='2198',ss_date='2009-10-25',sex='F',age='40',score='53.977943',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='74.717626',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2198 F40 53.977943<br>");
$sql = "INSERT INTO ss09 SET runner_id='2200',ss_date='2009-10-25',sex='M',age='10',score='24.816636',wh_sc='0',ye_sc='62.635295',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2200 M10 24.816636<br>");
$sql = "INSERT INTO ss09 SET runner_id='2201',ss_date='2009-10-25',sex='M',age='20',score='25.406171',wh_sc='0',ye_sc='0',or_sc='49.978461',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2201 M20 25.406171<br>");
$sql = "INSERT INTO ss09 SET runner_id='2207',ss_date='2009-10-25',sex='M',age='21',score='99.876451',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2207 M21 99.876451<br>");
$sql = "INSERT INTO ss09 SET runner_id='2227',ss_date='2009-10-25',sex='M',age='40',score='62.435616',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='62.890597',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2227 M40 62.435616<br>");
$sql = "INSERT INTO ss09 SET runner_id='2254',ss_date='2009-10-25',sex='F',age='16',score='26.950328',wh_sc='0',ye_sc='71.937246',or_sc='42.673624',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2254 F16 26.950328<br>");
$sql = "INSERT INTO ss09 SET runner_id='2255',ss_date='2009-10-25',sex='G',age='2',score='37.494934',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2255 G2 37.494934<br>");
$sql = "INSERT INTO ss09 SET runner_id='2257',ss_date='2009-10-25',sex='M',age='50',score='18.234518',wh_sc='0',ye_sc='40.828894',or_sc='36.550979',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2257 M50 18.234518<br>");
$sql = "INSERT INTO ss09 SET runner_id='2267',ss_date='2009-10-25',sex='M',age='45',score='26.292087',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2267 M45 26.292087<br>");
$sql = "INSERT INTO ss09 SET runner_id='2275',ss_date='2009-10-25',sex='M',age='21',score='36.176214',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2275 M21 36.176214<br>");
$sql = "INSERT INTO ss09 SET runner_id='2300',ss_date='2009-10-25',sex='G',age='2',score='25.423844',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2300 G2 25.423844<br>");
$sql = "INSERT INTO ss09 SET runner_id='2303',ss_date='2009-10-25',sex='G',age='2',score='25.495946',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='41.285801',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2303 G2 25.495946<br>");
$sql = "INSERT INTO ss09 SET runner_id='2312',ss_date='2009-10-25',sex='F',age='8',score='21.355818',wh_sc='73.649851',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2312 F8 21.355818<br>");
$sql = "INSERT INTO ss09 SET runner_id='2338',ss_date='2009-10-25',sex='M',age='16',score='26.259661',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2338 M16 26.259661<br>");
$sql = "INSERT INTO ss09 SET runner_id='2412',ss_date='2009-10-25',sex='M',age='21',score='51.882857',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='49.746419',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2412 M21 51.882857<br>");
$sql = "INSERT INTO ss09 SET runner_id='2414',ss_date='2009-10-25',sex='M',age='60',score='21.690473',wh_sc='0',ye_sc='0',or_sc='31.591296',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2414 M60 21.690473<br>");
$sql = "INSERT INTO ss09 SET runner_id='2444',ss_date='2009-10-25',sex='F',age='10',score='19.750645',wh_sc='0',ye_sc='48.403261',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2444 F10 19.750645<br>");
$sql = "INSERT INTO ss09 SET runner_id='2491',ss_date='2009-10-25',sex='F',age='20',score='22.066682',wh_sc='0',ye_sc='55.725702',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2491 F20 22.066682<br>");
$sql = "INSERT INTO ss09 SET runner_id='2473',ss_date='2009-10-25',sex='F',age='16',score='22.051472',wh_sc='0',ye_sc='54.488275',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2473 F16 22.051472<br>");
$sql = "INSERT INTO ss09 SET runner_id='2481',ss_date='2009-10-25',sex='M',age='45',score='37.654501',wh_sc='0',ye_sc='0',or_sc='70.789137',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2481 M45 37.654501<br>");
$sql = "INSERT INTO ss09 SET runner_id='2601',ss_date='2009-10-25',sex='M',age='60',score='37.002667',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2601 M60 37.002667<br>");
$sql = "INSERT INTO ss09 SET runner_id='2597',ss_date='2009-10-25',sex='M',age='45',score='36.900536',wh_sc='0',ye_sc='0',or_sc='68.995442',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2597 M45 36.900536<br>");
$sql = "INSERT INTO ss09 SET runner_id='2637',ss_date='2009-10-25',sex='F',age='45',score='22.022489',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2637 F45 22.022489<br>");
$sql = "INSERT INTO ss09 SET runner_id='2688',ss_date='2009-10-25',sex='F',age='21',score='16.34012',wh_sc='0',ye_sc='0',or_sc='31.224601',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2688 F21 16.34012<br>");
$sql = "INSERT INTO ss09 SET runner_id='2688',ss_date='2009-11-08',sex='F',age='21',score='15.876409',wh_sc='0',ye_sc='0',or_sc='31.280858',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2688 F21 15.876409<br>");
$sql = "INSERT INTO ss09 SET runner_id='2687',ss_date='2009-11-08',sex='M',age='21',score='27.665815',wh_sc='0',ye_sc='0',or_sc='55.01247',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2687 M21 27.665815<br>");
$sql = "INSERT INTO ss09 SET runner_id='2637',ss_date='2009-11-08',sex='F',age='45',score='23.495377',wh_sc='0',ye_sc='53.219939',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2637 F45 23.495377<br>");
$sql = "INSERT INTO ss09 SET runner_id='2597',ss_date='2009-11-08',sex='M',age='45',score='38.279569',wh_sc='0',ye_sc='0',or_sc='69.801158',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2597 M45 38.279569<br>");
$sql = "INSERT INTO ss09 SET runner_id='2601',ss_date='2009-11-08',sex='M',age='60',score='36.941118',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2601 M60 36.941118<br>");
$sql = "INSERT INTO ss09 SET runner_id='2481',ss_date='2009-11-08',sex='M',age='45',score='37.580993',wh_sc='0',ye_sc='0',or_sc='70.709528',bn_sc='0',gr_sc='38.811875',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2481 M45 37.580993<br>");
$sql = "INSERT INTO ss09 SET runner_id='2473',ss_date='2009-11-08',sex='F',age='16',score='21.31791',wh_sc='0',ye_sc='53.978881',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2473 F16 21.31791<br>");
$sql = "INSERT INTO ss09 SET runner_id='2491',ss_date='2009-11-08',sex='F',age='20',score='21.45159',wh_sc='0',ye_sc='55.434094',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2491 F20 21.45159<br>");
$sql = "INSERT INTO ss09 SET runner_id='2444',ss_date='2009-11-08',sex='F',age='10',score='21.594763',wh_sc='0',ye_sc='48.351084',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2444 F10 21.594763<br>");
$sql = "INSERT INTO ss09 SET runner_id='2414',ss_date='2009-11-08',sex='M',age='60',score='21.13945',wh_sc='0',ye_sc='0',or_sc='31.485052',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2414 M60 21.13945<br>");
$sql = "INSERT INTO ss09 SET runner_id='2412',ss_date='2009-11-08',sex='M',age='21',score='51.802968',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='49.493884',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2412 M21 51.802968<br>");
$sql = "INSERT INTO ss09 SET runner_id='2341',ss_date='2009-11-08',sex='M',age='60',score='18.268794',wh_sc='0',ye_sc='0',or_sc='38.719312',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2341 M60 18.268794<br>");
$sql = "INSERT INTO ss09 SET runner_id='2338',ss_date='2009-11-08',sex='M',age='16',score='25.728562',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2338 M16 25.728562<br>");
$sql = "INSERT INTO ss09 SET runner_id='2312',ss_date='2009-11-08',sex='F',age='8',score='20.259959',wh_sc='68.372919',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2312 F8 20.259959<br>");
$sql = "INSERT INTO ss09 SET runner_id='2303',ss_date='2009-11-08',sex='G',age='2',score='25.444429',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='41.303615',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2303 G2 25.444429<br>");
$sql = "INSERT INTO ss09 SET runner_id='2300',ss_date='2009-11-08',sex='G',age='2',score='24.769649',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2300 G2 24.769649<br>");
$sql = "INSERT INTO ss09 SET runner_id='2275',ss_date='2009-11-08',sex='M',age='21',score='35.137467',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2275 M21 35.137467<br>");
$sql = "INSERT INTO ss09 SET runner_id='2267',ss_date='2009-11-08',sex='M',age='40',score='30.242892',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2267 M40 30.242892<br>");
$sql = "INSERT INTO ss09 SET runner_id='2257',ss_date='2009-11-08',sex='M',age='50',score='17.818865',wh_sc='0',ye_sc='40.772206',or_sc='36.975819',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2257 M50 17.818865<br>");
$sql = "INSERT INTO ss09 SET runner_id='2255',ss_date='2009-11-08',sex='G',age='2',score='36.963249',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2255 G2 36.963249<br>");
$sql = "INSERT INTO ss09 SET runner_id='2254',ss_date='2009-11-08',sex='F',age='16',score='25.751598',wh_sc='0',ye_sc='68.753707',or_sc='42.480273',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2254 F16 25.751598<br>");
$sql = "INSERT INTO ss09 SET runner_id='2227',ss_date='2009-11-08',sex='M',age='40',score='61.46383',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='61.936717',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2227 M40 61.46383<br>");
$sql = "INSERT INTO ss09 SET runner_id='2226',ss_date='2009-11-08',sex='M',age='60',score='25.673953',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2226 M60 25.673953<br>");
$sql = "INSERT INTO ss09 SET runner_id='2207',ss_date='2009-11-08',sex='M',age='21',score='99.750841',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2207 M21 99.750841<br>");
$sql = "INSERT INTO ss09 SET runner_id='2201',ss_date='2009-11-08',sex='M',age='20',score='24.764094',wh_sc='0',ye_sc='0',or_sc='49.758877',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2201 M20 24.764094<br>");
$sql = "INSERT INTO ss09 SET runner_id='2200',ss_date='2009-11-08',sex='M',age='10',score='24.281795',wh_sc='0',ye_sc='62.174542',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2200 M10 24.281795<br>");
$sql = "INSERT INTO ss09 SET runner_id='2198',ss_date='2009-11-08',sex='F',age='40',score='53.956276',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='74.829556',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2198 F40 53.956276<br>");
$sql = "INSERT INTO ss09 SET runner_id='2160',ss_date='2009-11-08',sex='M',age='65',score='45.996534',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='63.904723',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2160 M65 45.996534<br>");
$sql = "INSERT INTO ss09 SET runner_id='2139',ss_date='2009-11-08',sex='M',age='45',score='31.976968',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='61.323539',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2139 M45 31.976968<br>");
$sql = "INSERT INTO ss09 SET runner_id='2122',ss_date='2009-11-08',sex='M',age='55',score='51.064602',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='68.681732',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2122 M55 51.064602<br>");
$sql = "INSERT INTO ss09 SET runner_id='2108',ss_date='2009-11-08',sex='M',age='60',score='36.643299',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='36.684853',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2108 M60 36.643299<br>");
$sql = "INSERT INTO ss09 SET runner_id='2056',ss_date='2009-11-08',sex='M',age='60',score='32.747255',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='65.215298',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2056 M60 32.747255<br>");
$sql = "INSERT INTO ss09 SET runner_id='1992',ss_date='2009-11-08',sex='F',age='60',score='22.116207',wh_sc='0',ye_sc='0',or_sc='44.949734',bn_sc='43.532594',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1992 F60 22.116207<br>");
$sql = "INSERT INTO ss09 SET runner_id='1991',ss_date='2009-11-08',sex='M',age='60',score='31.44505',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='67.96976',gr_sc='42.557203',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1991 M60 31.44505<br>");
$sql = "INSERT INTO ss09 SET runner_id='1953',ss_date='2009-11-08',sex='M',age='55',score='52.349042',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='71.394781',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1953 M55 52.349042<br>");
$sql = "INSERT INTO ss09 SET runner_id='1928',ss_date='2009-11-08',sex='M',age='50',score='64.005494',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='82.422037',re_sc='48.926597',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1928 M50 64.005494<br>");
$sql = "INSERT INTO ss09 SET runner_id='1926',ss_date='2009-11-08',sex='M',age='18',score='58.23977',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='69.276165',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1926 M18 58.23977<br>");
$sql = "INSERT INTO ss09 SET runner_id='1925',ss_date='2009-11-08',sex='M',age='16',score='51.254609',wh_sc='0',ye_sc='0',or_sc='100.425304',bn_sc='95.322762',gr_sc='76.466007',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1925 M16 51.254609<br>");
$sql = "INSERT INTO ss09 SET runner_id='1923',ss_date='2009-11-08',sex='M',age='14',score='43.205243',wh_sc='0',ye_sc='111.225408',or_sc='86.065736',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1923 M14 43.205243<br>");
$sql = "INSERT INTO ss09 SET runner_id='1916',ss_date='2009-11-08',sex='F',age='55',score='25.455389',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='46.137801',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1916 F55 25.455389<br>");
$sql = "INSERT INTO ss09 SET runner_id='1879',ss_date='2009-11-08',sex='M',age='50',score='55.867705',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='78.937717',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1879 M50 55.867705<br>");
$sql = "INSERT INTO ss09 SET runner_id='1878',ss_date='2009-11-08',sex='F',age='50',score='28.435329',wh_sc='0',ye_sc='64.586487',or_sc='61.020346',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1878 F50 28.435329<br>");
$sql = "INSERT INTO ss09 SET runner_id='1861',ss_date='2009-11-08',sex='M',age='45',score='25.453055',wh_sc='0',ye_sc='0',or_sc='52.556966',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1861 M45 25.453055<br>");
$sql = "INSERT INTO ss09 SET runner_id='1812',ss_date='2009-11-08',sex='F',age='45',score='29.031448',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1812 F45 29.031448<br>");
$sql = "INSERT INTO ss09 SET runner_id='1777',ss_date='2009-11-08',sex='M',age='18',score='65.966436',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='91.331065',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1777 M18 65.966436<br>");
$sql = "INSERT INTO ss09 SET runner_id='1771',ss_date='2009-11-08',sex='F',age='60',score='26.7849',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='43.299855',gr_sc='37.32076',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1771 F60 26.7849<br>");
$sql = "INSERT INTO ss09 SET runner_id='1746',ss_date='2009-11-08',sex='F',age='50',score='38.256295',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='73.450677',gr_sc='53.904636',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1746 F50 38.256295<br>");
$sql = "INSERT INTO ss09 SET runner_id='1739',ss_date='2009-11-08',sex='M',age='70',score='38.262541',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='74.174932',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1739 M70 38.262541<br>");
$sql = "INSERT INTO ss09 SET runner_id='1720',ss_date='2009-11-08',sex='F',age='60',score='24.105558',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1720 F60 24.105558<br>");
$sql = "INSERT INTO ss09 SET runner_id='1718',ss_date='2009-11-08',sex='M',age='60',score='51.007677',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='99.870207',gr_sc='71.010492',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1718 M60 51.007677<br>");
$sql = "INSERT INTO ss09 SET runner_id='1676',ss_date='2009-11-08',sex='F',age='55',score='24.115823',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='33.499966',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1676 F55 24.115823<br>");
$sql = "INSERT INTO ss09 SET runner_id='1667',ss_date='2009-11-08',sex='M',age='50',score='38.868479',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='73.13536',gr_sc='55.714645',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1667 M50 38.868479<br>");
$sql = "INSERT INTO ss09 SET runner_id='1620',ss_date='2009-11-08',sex='M',age='50',score='30.314056',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1620 M50 30.314056<br>");
$sql = "INSERT INTO ss09 SET runner_id='1606',ss_date='2009-11-08',sex='M',age='35',score='99.035421',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='99.000907',bl_sc='128.61255'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1606 M35 99.035421<br>");
$sql = "INSERT INTO ss09 SET runner_id='1604',ss_date='2009-11-08',sex='M',age='12',score='33.666239',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1604 M12 33.666239<br>");
$sql = "INSERT INTO ss09 SET runner_id='1603',ss_date='2009-11-08',sex='F',age='35',score='68.577732',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='89.378217',re_sc='70.349607',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1603 F35 68.577732<br>");
$sql = "INSERT INTO ss09 SET runner_id='1602',ss_date='2009-11-08',sex='M',age='10',score='37.640287',wh_sc='121.986814',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1602 M10 37.640287<br>");
$sql = "INSERT INTO ss09 SET runner_id='1570',ss_date='2009-11-08',sex='M',age='18',score='58.881308',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='85.272179',re_sc='60.860998',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1570 M18 58.881308<br>");
$sql = "INSERT INTO ss09 SET runner_id='1567',ss_date='2009-11-08',sex='M',age='50',score='58.821046',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='81.565184',re_sc='59.570085',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1567 M50 58.821046<br>");
$sql = "INSERT INTO ss09 SET runner_id='1566',ss_date='2009-11-08',sex='F',age='14',score='31.424476',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1566 F14 31.424476<br>");
$sql = "INSERT INTO ss09 SET runner_id='1548',ss_date='2009-11-08',sex='F',age='40',score='29.790437',wh_sc='0',ye_sc='0',or_sc='53.219132',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1548 F40 29.790437<br>");
$sql = "INSERT INTO ss09 SET runner_id='1540',ss_date='2009-11-08',sex='M',age='45',score='27.679306',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='38.007456',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1540 M45 27.679306<br>");
$sql = "INSERT INTO ss09 SET runner_id='1519',ss_date='2009-11-08',sex='M',age='50',score='35.113225',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1519 M50 35.113225<br>");
$sql = "INSERT INTO ss09 SET runner_id='1518',ss_date='2009-11-08',sex='F',age='21',score='73.694157',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1518 F21 73.694157<br>");
$sql = "INSERT INTO ss09 SET runner_id='1504',ss_date='2009-11-08',sex='M',age='60',score='37.836215',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='55.110061',re_sc='34.13868',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1504 M60 37.836215<br>");
$sql = "INSERT INTO ss09 SET runner_id='1503',ss_date='2009-11-08',sex='F',age='55',score='19.662355',wh_sc='0',ye_sc='0',or_sc='42.253046',bn_sc='36.108103',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1503 F55 19.662355<br>");
$sql = "INSERT INTO ss09 SET runner_id='1486',ss_date='2009-11-08',sex='M',age='65',score='32.059699',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='61.497363',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1486 M65 32.059699<br>");
$sql = "INSERT INTO ss09 SET runner_id='1480',ss_date='2009-11-08',sex='F',age='21',score='27.937862',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='38.788173',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1480 F21 27.937862<br>");
$sql = "INSERT INTO ss09 SET runner_id='1432',ss_date='2009-11-08',sex='M',age='45',score='79.376669',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='76.514923',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1432 M45 79.376669<br>");
$sql = "INSERT INTO ss09 SET runner_id='1418',ss_date='2009-11-08',sex='F',age='55',score='21.950682',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='42.687566',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1418 F55 21.950682<br>");
$sql = "INSERT INTO ss09 SET runner_id='1417',ss_date='2009-11-08',sex='M',age='60',score='37.089556',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='69.98396',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1417 M60 37.089556<br>");
$sql = "INSERT INTO ss09 SET runner_id='1398',ss_date='2009-11-08',sex='M',age='45',score='31.633228',wh_sc='0',ye_sc='92.742127',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1398 M45 31.633228<br>");
$sql = "INSERT INTO ss09 SET runner_id='1397',ss_date='2009-11-08',sex='M',age='16',score='55.750132',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='83.471373',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1397 M16 55.750132<br>");
$sql = "INSERT INTO ss09 SET runner_id='1364',ss_date='2009-11-08',sex='M',age='40',score='59.097463',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='59.554085',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1364 M40 59.097463<br>");
$sql = "INSERT INTO ss09 SET runner_id='1318',ss_date='2009-11-08',sex='M',age='50',score='22.644455',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='44.197449',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1318 M50 22.644455<br>");
$sql = "INSERT INTO ss09 SET runner_id='1309',ss_date='2009-11-08',sex='M',age='55',score='27.749163',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='52.607458',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1309 M55 27.749163<br>");
$sql = "INSERT INTO ss09 SET runner_id='1282',ss_date='2009-11-08',sex='F',age='50',score='46.552051',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1282 F50 46.552051<br>");
$sql = "INSERT INTO ss09 SET runner_id='1279',ss_date='2009-11-08',sex='M',age='55',score='42.994367',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='59.922263',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1279 M55 42.994367<br>");
$sql = "INSERT INTO ss09 SET runner_id='1250',ss_date='2009-11-08',sex='M',age='35',score='100.044245',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='100.33289',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1250 M35 100.044245<br>");
$sql = "INSERT INTO ss09 SET runner_id='1246',ss_date='2009-11-08',sex='F',age='50',score='28.060786',wh_sc='0',ye_sc='0',or_sc='55.373593',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1246 F50 28.060786<br>");
$sql = "INSERT INTO ss09 SET runner_id='1238',ss_date='2009-11-08',sex='M',age='55',score='27.314672',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='41.012182',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1238 M55 27.314672<br>");
$sql = "INSERT INTO ss09 SET runner_id='1218',ss_date='2009-11-08',sex='M',age='40',score='82.767062',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='83.939231',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1218 M40 82.767062<br>");
$sql = "INSERT INTO ss09 SET runner_id='1214',ss_date='2009-11-08',sex='M',age='60',score='18.684636',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='35.928494',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1214 M60 18.684636<br>");
$sql = "INSERT INTO ss09 SET runner_id='1198',ss_date='2009-11-08',sex='M',age='65',score='44.699488',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='88.06665',gr_sc='58.572893',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1198 M65 44.699488<br>");
$sql = "INSERT INTO ss09 SET runner_id='1190',ss_date='2009-11-08',sex='M',age='40',score='67.285434',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='68.823044',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1190 M40 67.285434<br>");
$sql = "INSERT INTO ss09 SET runner_id='1189',ss_date='2009-11-08',sex='M',age='70',score='45.285695',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1189 M70 45.285695<br>");
$sql = "INSERT INTO ss09 SET runner_id='1151',ss_date='2009-11-08',sex='F',age='65',score='21.620457',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='37.807188',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1151 F65 21.620457<br>");
$sql = "INSERT INTO ss09 SET runner_id='1088',ss_date='2009-11-08',sex='M',age='60',score='36.859267',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='51.431205',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1088 M60 36.859267<br>");
$sql = "INSERT INTO ss09 SET runner_id='1034',ss_date='2009-11-08',sex='M',age='70',score='17.189193',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='33.519592',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1034 M70 17.189193<br>");
$sql = "INSERT INTO ss09 SET runner_id='1032',ss_date='2009-11-08',sex='M',age='65',score='20.854232',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='40.281989',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1032 M65 20.854232<br>");
$sql = "INSERT INTO ss09 SET runner_id='1022',ss_date='2009-11-08',sex='M',age='14',score='44.404209',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1022 M14 44.404209<br>");
$sql = "INSERT INTO ss09 SET runner_id='1017',ss_date='2009-11-08',sex='F',age='45',score='25.622222',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1017 F45 25.622222<br>");
$sql = "INSERT INTO ss09 SET runner_id='970',ss_date='2009-11-08',sex='F',age='55',score='18.406849',wh_sc='0',ye_sc='0',or_sc='36.564079',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("970 F55 18.406849<br>");
$sql = "INSERT INTO ss09 SET runner_id='969',ss_date='2009-11-08',sex='F',age='21',score='45.352439',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='62.39854',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("969 F21 45.352439<br>");
$sql = "INSERT INTO ss09 SET runner_id='958',ss_date='2009-11-08',sex='M',age='45',score='15.398171',wh_sc='0',ye_sc='39.71079',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("958 M45 15.398171<br>");
$sql = "INSERT INTO ss09 SET runner_id='949',ss_date='2009-11-08',sex='F',age='45',score='14.997091',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("949 F45 14.997091<br>");
$sql = "INSERT INTO ss09 SET runner_id='899',ss_date='2009-11-08',sex='M',age='60',score='46.557529',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='40.957726',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("899 M60 46.557529<br>");
$sql = "INSERT INTO ss09 SET runner_id='862',ss_date='2009-11-08',sex='M',age='21',score='36.743264',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("862 M21 36.743264<br>");
$sql = "INSERT INTO ss09 SET runner_id='799',ss_date='2009-11-08',sex='M',age='45',score='69.870224',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='68.964339',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("799 M45 69.870224<br>");
$sql = "INSERT INTO ss09 SET runner_id='798',ss_date='2009-11-08',sex='M',age='60',score='32.652273',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='62.700374',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("798 M60 32.652273<br>");
$sql = "INSERT INTO ss09 SET runner_id='797',ss_date='2009-11-08',sex='F',age='55',score='42.743243',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='57.460924',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("797 F55 42.743243<br>");
$sql = "INSERT INTO ss09 SET runner_id='796',ss_date='2009-11-08',sex='M',age='60',score='27.538794',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("796 M60 27.538794<br>");
$sql = "INSERT INTO ss09 SET runner_id='784',ss_date='2009-11-08',sex='F',age='50',score='17.767124',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("784 F50 17.767124<br>");
$sql = "INSERT INTO ss09 SET runner_id='783',ss_date='2009-11-08',sex='F',age='70',score='22.217428',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='44.878293',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("783 F70 22.217428<br>");
$sql = "INSERT INTO ss09 SET runner_id='767',ss_date='2009-11-08',sex='M',age='40',score='57.333383',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='53.416411',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("767 M40 57.333383<br>");
$sql = "INSERT INTO ss09 SET runner_id='748',ss_date='2009-11-08',sex='M',age='10',score='20.937531',wh_sc='0',ye_sc='50.29529',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("748 M10 20.937531<br>");
$sql = "INSERT INTO ss09 SET runner_id='743',ss_date='2009-11-08',sex='M',age='50',score='40.545318',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("743 M50 40.545318<br>");
$sql = "INSERT INTO ss09 SET runner_id='673',ss_date='2009-11-08',sex='M',age='45',score='35.895527',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("673 M45 35.895527<br>");
$sql = "INSERT INTO ss09 SET runner_id='667',ss_date='2009-11-08',sex='M',age='55',score='29.758615',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='58.714825',gr_sc='40.498337',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("667 M55 29.758615<br>");
$sql = "INSERT INTO ss09 SET runner_id='666',ss_date='2009-11-08',sex='F',age='55',score='29.610492',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='55.377519',gr_sc='41.826602',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("666 F55 29.610492<br>");
$sql = "INSERT INTO ss09 SET runner_id='637',ss_date='2009-11-08',sex='M',age='10',score='24.451711',wh_sc='80.189693',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("637 M10 24.451711<br>");
$sql = "INSERT INTO ss09 SET runner_id='636',ss_date='2009-11-08',sex='F',age='35',score='45.910897',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='63.21633',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("636 F35 45.910897<br>");
$sql = "INSERT INTO ss09 SET runner_id='634',ss_date='2009-11-08',sex='M',age='40',score='48.770585',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='94.700787',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("634 M40 48.770585<br>");
$sql = "INSERT INTO ss09 SET runner_id='633',ss_date='2009-11-08',sex='M',age='16',score='28.420194',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("633 M16 28.420194<br>");
$sql = "INSERT INTO ss09 SET runner_id='630',ss_date='2009-11-08',sex='M',age='40',score='27.266783',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("630 M40 27.266783<br>");
$sql = "INSERT INTO ss09 SET runner_id='626',ss_date='2009-11-08',sex='M',age='21',score='71.15004',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='72.900378',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("626 M21 71.15004<br>");
$sql = "INSERT INTO ss09 SET runner_id='616',ss_date='2009-11-08',sex='M',age='16',score='24.47644',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='48.85551',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("616 M16 24.47644<br>");
$sql = "INSERT INTO ss09 SET runner_id='615',ss_date='2009-11-08',sex='F',age='10',score='29.598247',wh_sc='97.823493',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("615 F10 29.598247<br>");
$sql = "INSERT INTO ss09 SET runner_id='614',ss_date='2009-11-08',sex='F',age='50',score='47.501641',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='64.817607',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("614 F50 47.501641<br>");
$sql = "INSERT INTO ss09 SET runner_id='613',ss_date='2009-11-08',sex='M',age='50',score='57.163326',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='79.757403',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("613 M50 57.163326<br>");
$sql = "INSERT INTO ss09 SET runner_id='606',ss_date='2009-11-08',sex='M',age='21',score='44.184353',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("606 M21 44.184353<br>");
$sql = "INSERT INTO ss09 SET runner_id='601',ss_date='2009-11-08',sex='M',age='60',score='34.198623',wh_sc='0',ye_sc='96.032465',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("601 M60 34.198623<br>");
$sql = "INSERT INTO ss09 SET runner_id='600',ss_date='2009-11-08',sex='M',age='35',score='22.972427',wh_sc='78.656979',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("600 M35 22.972427<br>");
$sql = "INSERT INTO ss09 SET runner_id='568',ss_date='2009-11-08',sex='F',age='55',score='20.187725',wh_sc='0',ye_sc='0',or_sc='40.729128',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("568 F55 20.187725<br>");
$sql = "INSERT INTO ss09 SET runner_id='567',ss_date='2009-11-08',sex='M',age='55',score='57.509239',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='78.107786',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("567 M55 57.509239<br>");
$sql = "INSERT INTO ss09 SET runner_id='563',ss_date='2009-11-08',sex='F',age='55',score='52.916426',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("563 F55 52.916426<br>");
$sql = "INSERT INTO ss09 SET runner_id='545',ss_date='2009-11-08',sex='M',age='21',score='78.054537',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='78.299675',bl_sc='100.610724'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("545 M21 78.054537<br>");
$sql = "INSERT INTO ss09 SET runner_id='522',ss_date='2009-11-08',sex='F',age='50',score='27.495767',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='61.197109',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("522 F50 27.495767<br>");
$sql = "INSERT INTO ss09 SET runner_id='499',ss_date='2009-11-08',sex='M',age='50',score='38.878737',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='54.096166',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("499 M50 38.878737<br>");
$sql = "INSERT INTO ss09 SET runner_id='463',ss_date='2009-11-08',sex='M',age='45',score='30.020015',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='51.225567',gr_sc='41.881096',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("463 M45 30.020015<br>");
$sql = "INSERT INTO ss09 SET runner_id='428',ss_date='2009-11-08',sex='M',age='50',score='40.217617',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='76.672507',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("428 M50 40.217617<br>");
$sql = "INSERT INTO ss09 SET runner_id='418',ss_date='2009-11-08',sex='M',age='60',score='46.747808',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("418 M60 46.747808<br>");
$sql = "INSERT INTO ss09 SET runner_id='376',ss_date='2009-11-08',sex='M',age='50',score='64.99944',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='64.078372',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("376 M50 64.99944<br>");
$sql = "INSERT INTO ss09 SET runner_id='270',ss_date='2009-11-08',sex='M',age='50',score='78.790035',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='110.173275',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("270 M50 78.790035<br>");
$sql = "INSERT INTO ss09 SET runner_id='269',ss_date='2009-11-08',sex='F',age='14',score='35.735649',wh_sc='0',ye_sc='0',or_sc='72.84942',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("269 F14 35.735649<br>");
$sql = "INSERT INTO ss09 SET runner_id='267',ss_date='2009-11-08',sex='F',age='18',score='67.139992',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='68.322271',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("267 F18 67.139992<br>");
$sql = "INSERT INTO ss09 SET runner_id='255',ss_date='2009-11-08',sex='M',age='20',score='34.353692',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("255 M20 34.353692<br>");
$sql = "INSERT INTO ss09 SET runner_id='254',ss_date='2009-11-08',sex='F',age='55',score='21.24333',wh_sc='0',ye_sc='55.195183',or_sc='34.944832',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("254 F55 21.24333<br>");
$sql = "INSERT INTO ss09 SET runner_id='253',ss_date='2009-11-08',sex='M',age='40',score='35.328195',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='50.960357',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("253 M40 35.328195<br>");
$sql = "INSERT INTO ss09 SET runner_id='248',ss_date='2009-11-08',sex='M',age='60',score='52.133059',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='104.807031',gr_sc='68.881086',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("248 M60 52.133059<br>");
$sql = "INSERT INTO ss09 SET runner_id='226',ss_date='2009-11-08',sex='M',age='80',score='23.907594',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='43.826438',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("226 M80 23.907594<br>");
$sql = "INSERT INTO ss09 SET runner_id='176',ss_date='2009-11-08',sex='M',age='55',score='70.203051',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='98.49566',re_sc='65.258236',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("176 M55 70.203051<br>");
$sql = "INSERT INTO ss09 SET runner_id='169',ss_date='2009-11-08',sex='M',age='60',score='28.505971',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='37.380356',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("169 M60 28.505971<br>");
$sql = "INSERT INTO ss09 SET runner_id='162',ss_date='2009-11-08',sex='M',age='35',score='53.218651',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='52.449825',bl_sc='70.776726'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("162 M35 53.218651<br>");
$sql = "INSERT INTO ss09 SET runner_id='131',ss_date='2009-11-08',sex='M',age='40',score='100.204913',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='100.666203',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("131 M40 100.204913<br>");
$sql = "INSERT INTO ss09 SET runner_id='100',ss_date='2009-11-08',sex='F',age='16',score='24.662047',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("100 F16 24.662047<br>");
$sql = "INSERT INTO ss09 SET runner_id='96',ss_date='2009-11-08',sex='M',age='55',score='43.124167',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='60.451322',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("96 M55 43.124167<br>");
$sql = "INSERT INTO ss09 SET runner_id='87',ss_date='2009-11-08',sex='M',age='16',score='58.171171',wh_sc='0',ye_sc='0',or_sc='113.50896',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("87 M16 58.171171<br>");
$sql = "INSERT INTO ss09 SET runner_id='86',ss_date='2009-11-08',sex='M',age='50',score='43.470762',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='43.567997',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("86 M50 43.470762<br>");
$sql = "INSERT INTO ss09 SET runner_id='69',ss_date='2009-11-08',sex='M',age='45',score='52.62606',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='65.87816',re_sc='54.038882',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("69 M45 52.62606<br>");
$sql = "INSERT INTO ss09 SET runner_id='48',ss_date='2009-11-08',sex='M',age='50',score='38.237842',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='53.338372',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("48 M50 38.237842<br>");
$sql = "INSERT INTO ss09 SET runner_id='30',ss_date='2009-11-08',sex='F',age='35',score='35.081468',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='49.183111',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("30 F35 35.081468<br>");
$sql = "INSERT INTO ss09 SET runner_id='29',ss_date='2009-11-08',sex='M',age='35',score='50.34682',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='70.477518',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("29 M35 50.34682<br>");
$sql = "INSERT INTO ss09 SET runner_id='28',ss_date='2009-11-08',sex='M',age='45',score='44.194334',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("28 M45 44.194334<br>");
$sql = "INSERT INTO ss09 SET runner_id='14',ss_date='2009-11-08',sex='F',age='35',score='42.559462',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("14 F35 42.559462<br>");
$sql = "INSERT INTO ss09 SET runner_id='13',ss_date='2009-11-08',sex='M',age='45',score='68.98444',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='70.430147',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("13 M45 68.98444<br>");
$sql = "INSERT INTO ss09 SET runner_id='12',ss_date='2009-11-08',sex='M',age='20',score='83.656844',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("12 M20 83.656844<br>");
$sql = "INSERT INTO ss09 SET runner_id='2',ss_date='2009-11-08',sex='F',age='45',score='45.131176',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='63.474793',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2 F45 45.131176<br>");
$sql = "INSERT INTO ss09 SET runner_id='2688',ss_date='2009-11-15',sex='F',age='21',score='15.789034',wh_sc='0',ye_sc='0',or_sc='31.263347',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2688 F21 15.789034<br>");
$sql = "INSERT INTO ss09 SET runner_id='2687',ss_date='2009-11-15',sex='M',age='21',score='27.518804',wh_sc='0',ye_sc='0',or_sc='55.099538',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2687 M21 27.518804<br>");
$sql = "INSERT INTO ss09 SET runner_id='2681',ss_date='2009-11-15',sex='M',age='16',score='19.622964',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2681 M16 19.622964<br>");
$sql = "INSERT INTO ss09 SET runner_id='2637',ss_date='2009-11-15',sex='F',age='45',score='23.331937',wh_sc='0',ye_sc='53.100903',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2637 F45 23.331937<br>");
$sql = "INSERT INTO ss09 SET runner_id='2597',ss_date='2009-11-15',sex='M',age='45',score='37.818587',wh_sc='0',ye_sc='0',or_sc='70.425742',bn_sc='0',gr_sc='57.787093',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2597 M45 37.818587<br>");
$sql = "INSERT INTO ss09 SET runner_id='2601',ss_date='2009-11-15',sex='M',age='60',score='36.628073',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2601 M60 36.628073<br>");
$sql = "INSERT INTO ss09 SET runner_id='2481',ss_date='2009-11-15',sex='M',age='45',score='37.147178',wh_sc='0',ye_sc='0',or_sc='70.517989',bn_sc='0',gr_sc='38.990473',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2481 M45 37.147178<br>");
$sql = "INSERT INTO ss09 SET runner_id='2473',ss_date='2009-11-15',sex='F',age='16',score='21.095472',wh_sc='0',ye_sc='53.807677',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2473 F16 21.095472<br>");
$sql = "INSERT INTO ss09 SET runner_id='2491',ss_date='2009-11-15',sex='F',age='20',score='21.160872',wh_sc='0',ye_sc='55.330175',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2491 F20 21.160872<br>");
$sql = "INSERT INTO ss09 SET runner_id='2444',ss_date='2009-11-15',sex='F',age='10',score='21.462073',wh_sc='0',ye_sc='48.142145',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2444 F10 21.462073<br>");
$sql = "INSERT INTO ss09 SET runner_id='2414',ss_date='2009-11-15',sex='M',age='60',score='20.019196',wh_sc='0',ye_sc='0',or_sc='35.919642',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2414 M60 20.019196<br>");
$sql = "INSERT INTO ss09 SET runner_id='2412',ss_date='2009-11-15',sex='M',age='21',score='51.59371',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='49.214284',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2412 M21 51.59371<br>");
$sql = "INSERT INTO ss09 SET runner_id='2341',ss_date='2009-11-15',sex='M',age='60',score='18.054875',wh_sc='0',ye_sc='0',or_sc='38.843234',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2341 M60 18.054875<br>");
$sql = "INSERT INTO ss09 SET runner_id='2338',ss_date='2009-11-15',sex='M',age='16',score='25.482054',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2338 M16 25.482054<br>");
$sql = "INSERT INTO ss09 SET runner_id='2312',ss_date='2009-11-15',sex='F',age='8',score='19.353017',wh_sc='61.587699',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2312 F8 19.353017<br>");
$sql = "INSERT INTO ss09 SET runner_id='2303',ss_date='2009-11-15',sex='G',age='2',score='25.07144',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='41.53466',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2303 G2 25.07144<br>");
$sql = "INSERT INTO ss09 SET runner_id='2300',ss_date='2009-11-15',sex='G',age='2',score='24.321685',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2300 G2 24.321685<br>");
$sql = "INSERT INTO ss09 SET runner_id='2275',ss_date='2009-11-15',sex='M',age='21',score='35.042113',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2275 M21 35.042113<br>");
$sql = "INSERT INTO ss09 SET runner_id='2267',ss_date='2009-11-15',sex='M',age='40',score='30.135225',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2267 M40 30.135225<br>");
$sql = "INSERT INTO ss09 SET runner_id='2257',ss_date='2009-11-15',sex='M',age='50',score='17.643964',wh_sc='0',ye_sc='40.783635',or_sc='37.209495',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2257 M50 17.643964<br>");
$sql = "INSERT INTO ss09 SET runner_id='2255',ss_date='2009-11-15',sex='G',age='2',score='36.85231',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2255 G2 36.85231<br>");
$sql = "INSERT INTO ss09 SET runner_id='2254',ss_date='2009-11-15',sex='F',age='16',score='25.934011',wh_sc='0',ye_sc='70.056053',or_sc='42.193683',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2254 F16 25.934011<br>");
$sql = "INSERT INTO ss09 SET runner_id='2227',ss_date='2009-11-15',sex='M',age='40',score='61.248608',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='61.995728',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2227 M40 61.248608<br>");
$sql = "INSERT INTO ss09 SET runner_id='2226',ss_date='2009-11-15',sex='M',age='60',score='25.455514',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2226 M60 25.455514<br>");
$sql = "INSERT INTO ss09 SET runner_id='2207',ss_date='2009-11-15',sex='M',age='21',score='99.518097',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2207 M21 99.518097<br>");
$sql = "INSERT INTO ss09 SET runner_id='2201',ss_date='2009-11-15',sex='M',age='20',score='24.127707',wh_sc='0',ye_sc='0',or_sc='48.889793',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2201 M20 24.127707<br>");
$sql = "INSERT INTO ss09 SET runner_id='2200',ss_date='2009-11-15',sex='M',age='10',score='24.0662',wh_sc='0',ye_sc='62.995623',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2200 M10 24.0662<br>");
$sql = "INSERT INTO ss09 SET runner_id='2198',ss_date='2009-11-15',sex='F',age='40',score='52.794389',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='74.609842',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2198 F40 52.794389<br>");
$sql = "INSERT INTO ss09 SET runner_id='2160',ss_date='2009-11-15',sex='M',age='65',score='45.525737',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='64.171993',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2160 M65 45.525737<br>");
$sql = "INSERT INTO ss09 SET runner_id='2139',ss_date='2009-11-15',sex='M',age='45',score='31.58704',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='61.322908',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2139 M45 31.58704<br>");
$sql = "INSERT INTO ss09 SET runner_id='2122',ss_date='2009-11-15',sex='M',age='55',score='50.485538',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='68.935645',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2122 M55 50.485538<br>");
$sql = "INSERT INTO ss09 SET runner_id='2108',ss_date='2009-11-15',sex='M',age='60',score='36.349329',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='36.670115',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2108 M60 36.349329<br>");
$sql = "INSERT INTO ss09 SET runner_id='2056',ss_date='2009-11-15',sex='M',age='60',score='32.185227',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='65.482296',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2056 M60 32.185227<br>");
$sql = "INSERT INTO ss09 SET runner_id='1992',ss_date='2009-11-15',sex='F',age='60',score='22.275204',wh_sc='0',ye_sc='0',or_sc='47.117401',bn_sc='43.533629',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1992 F60 22.275204<br>");
$sql = "INSERT INTO ss09 SET runner_id='1991',ss_date='2009-11-15',sex='M',age='60',score='31.455905',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='67.928479',gr_sc='43.665735',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1991 M60 31.455905<br>");
$sql = "INSERT INTO ss09 SET runner_id='1953',ss_date='2009-11-15',sex='M',age='55',score='51.614652',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='72.087027',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1953 M55 51.614652<br>");
$sql = "INSERT INTO ss09 SET runner_id='1928',ss_date='2009-11-15',sex='M',age='50',score='63.439403',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='82.866888',re_sc='48.941037',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1928 M50 63.439403<br>");
$sql = "INSERT INTO ss09 SET runner_id='1926',ss_date='2009-11-15',sex='M',age='18',score='57.875836',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='69.996671',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1926 M18 57.875836<br>");
$sql = "INSERT INTO ss09 SET runner_id='1925',ss_date='2009-11-15',sex='M',age='16',score='50.667079',wh_sc='0',ye_sc='0',or_sc='100.075018',bn_sc='95.255928',gr_sc='76.886361',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1925 M16 50.667079<br>");
$sql = "INSERT INTO ss09 SET runner_id='1923',ss_date='2009-11-15',sex='M',age='14',score='42.583443',wh_sc='0',ye_sc='112.105639',or_sc='86.400988',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1923 M14 42.583443<br>");
$sql = "INSERT INTO ss09 SET runner_id='1916',ss_date='2009-11-15',sex='F',age='55',score='24.762321',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='49.23935',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1916 F55 24.762321<br>");
$sql = "INSERT INTO ss09 SET runner_id='1879',ss_date='2009-11-15',sex='M',age='50',score='55.292177',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='79.431199',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1879 M50 55.292177<br>");
$sql = "INSERT INTO ss09 SET runner_id='1878',ss_date='2009-11-15',sex='F',age='50',score='28.063643',wh_sc='0',ye_sc='65.059798',or_sc='60.704237',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1878 F50 28.063643<br>");
$sql = "INSERT INTO ss09 SET runner_id='1861',ss_date='2009-11-15',sex='M',age='45',score='24.997118',wh_sc='0',ye_sc='0',or_sc='52.84281',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1861 M45 24.997118<br>");
$sql = "INSERT INTO ss09 SET runner_id='1812',ss_date='2009-11-15',sex='F',age='45',score='28.597947',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1812 F45 28.597947<br>");
$sql = "INSERT INTO ss09 SET runner_id='1777',ss_date='2009-11-15',sex='M',age='18',score='64.999438',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='91.543937',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1777 M18 64.999438<br>");
$sql = "INSERT INTO ss09 SET runner_id='1771',ss_date='2009-11-15',sex='F',age='60',score='25.521188',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='43.36538',gr_sc='35.510836',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1771 F60 25.521188<br>");
$sql = "INSERT INTO ss09 SET runner_id='1746',ss_date='2009-11-15',sex='F',age='50',score='37.705998',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='76.230931',gr_sc='54.21761',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1746 F50 37.705998<br>");
$sql = "INSERT INTO ss09 SET runner_id='1739',ss_date='2009-11-15',sex='M',age='70',score='37.821881',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='74.606054',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1739 M70 37.821881<br>");
$sql = "INSERT INTO ss09 SET runner_id='1720',ss_date='2009-11-15',sex='F',age='60',score='24.976885',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1720 F60 24.976885<br>");
$sql = "INSERT INTO ss09 SET runner_id='1718',ss_date='2009-11-15',sex='M',age='60',score='50.168061',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='99.909244',gr_sc='71.891203',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1718 M60 50.168061<br>");
$sql = "INSERT INTO ss09 SET runner_id='1676',ss_date='2009-11-15',sex='F',age='55',score='23.838901',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='33.691475',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1676 F55 23.838901<br>");
$sql = "INSERT INTO ss09 SET runner_id='1667',ss_date='2009-11-15',sex='M',age='50',score='38.493257',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='73.239095',gr_sc='56.177165',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1667 M50 38.493257<br>");
$sql = "INSERT INTO ss09 SET runner_id='1620',ss_date='2009-11-15',sex='M',age='50',score='29.983756',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1620 M50 29.983756<br>");
$sql = "INSERT INTO ss09 SET runner_id='1606',ss_date='2009-11-15',sex='M',age='35',score='98.778755',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='98.899322',bl_sc='129.114083'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1606 M35 98.778755<br>");
$sql = "INSERT INTO ss09 SET runner_id='1604',ss_date='2009-11-15',sex='M',age='12',score='33.42228',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1604 M12 33.42228<br>");
$sql = "INSERT INTO ss09 SET runner_id='1603',ss_date='2009-11-15',sex='F',age='35',score='68.43431',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='89.780828',re_sc='70.771971',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1603 F35 68.43431<br>");
$sql = "INSERT INTO ss09 SET runner_id='1602',ss_date='2009-11-15',sex='M',age='10',score='34.540742',wh_sc='114.700072',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1602 M10 34.540742<br>");
$sql = "INSERT INTO ss09 SET runner_id='1570',ss_date='2009-11-15',sex='M',age='18',score='57.808605',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='83.596582',re_sc='60.850193',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1570 M18 57.808605<br>");
$sql = "INSERT INTO ss09 SET runner_id='1567',ss_date='2009-11-15',sex='M',age='50',score='59.700706',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='87.293316',re_sc='59.570477',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1567 M50 59.700706<br>");
$sql = "INSERT INTO ss09 SET runner_id='1566',ss_date='2009-11-15',sex='F',age='14',score='31.848708',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1566 F14 31.848708<br>");
$sql = "INSERT INTO ss09 SET runner_id='1548',ss_date='2009-11-15',sex='F',age='40',score='29.424821',wh_sc='0',ye_sc='0',or_sc='53.436174',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1548 F40 29.424821<br>");
$sql = "INSERT INTO ss09 SET runner_id='1540',ss_date='2009-11-15',sex='M',age='45',score='27.76748',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='38.162927',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1540 M45 27.76748<br>");
$sql = "INSERT INTO ss09 SET runner_id='1519',ss_date='2009-11-15',sex='M',age='50',score='34.711789',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1519 M50 34.711789<br>");
$sql = "INSERT INTO ss09 SET runner_id='1518',ss_date='2009-11-15',sex='F',age='21',score='74.553853',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1518 F21 74.553853<br>");
$sql = "INSERT INTO ss09 SET runner_id='1504',ss_date='2009-11-15',sex='M',age='60',score='37.464382',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='55.414001',re_sc='34.081273',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1504 M60 37.464382<br>");
$sql = "INSERT INTO ss09 SET runner_id='1503',ss_date='2009-11-15',sex='F',age='55',score='19.40029',wh_sc='0',ye_sc='0',or_sc='42.129602',bn_sc='36.127542',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1503 F55 19.40029<br>");
$sql = "INSERT INTO ss09 SET runner_id='1486',ss_date='2009-11-15',sex='M',age='65',score='31.721289',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='61.530621',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1486 M65 31.721289<br>");
$sql = "INSERT INTO ss09 SET runner_id='1480',ss_date='2009-11-15',sex='F',age='21',score='27.681196',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='38.813495',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1480 F21 27.681196<br>");
$sql = "INSERT INTO ss09 SET runner_id='1432',ss_date='2009-11-15',sex='M',age='45',score='78.87006',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='77.900325',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1432 M45 78.87006<br>");
$sql = "INSERT INTO ss09 SET runner_id='1418',ss_date='2009-11-15',sex='F',age='55',score='21.752808',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='42.682518',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1418 F55 21.752808<br>");
$sql = "INSERT INTO ss09 SET runner_id='1417',ss_date='2009-11-15',sex='M',age='60',score='36.729202',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='69.930025',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1417 M60 36.729202<br>");
$sql = "INSERT INTO ss09 SET runner_id='1398',ss_date='2009-11-15',sex='M',age='45',score='30.74995',wh_sc='0',ye_sc='90.843017',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1398 M45 30.74995<br>");
$sql = "INSERT INTO ss09 SET runner_id='1397',ss_date='2009-11-15',sex='M',age='16',score='55.053384',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='84.011725',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1397 M16 55.053384<br>");
$sql = "INSERT INTO ss09 SET runner_id='1364',ss_date='2009-11-15',sex='M',age='40',score='58.922258',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='59.552605',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1364 M40 58.922258<br>");
$sql = "INSERT INTO ss09 SET runner_id='1318',ss_date='2009-11-15',sex='M',age='50',score='23.580503',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='44.181847',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1318 M50 23.580503<br>");
$sql = "INSERT INTO ss09 SET runner_id='1309',ss_date='2009-11-15',sex='M',age='55',score='27.522597',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='52.59441',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1309 M55 27.522597<br>");
$sql = "INSERT INTO ss09 SET runner_id='1282',ss_date='2009-11-15',sex='F',age='50',score='46.493871',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1282 F50 46.493871<br>");
$sql = "INSERT INTO ss09 SET runner_id='1279',ss_date='2009-11-15',sex='M',age='55',score='42.451031',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='60.164627',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1279 M55 42.451031<br>");
$sql = "INSERT INTO ss09 SET runner_id='1250',ss_date='2009-11-15',sex='M',age='35',score='99.760369',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='100.31315',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1250 M35 99.760369<br>");
$sql = "INSERT INTO ss09 SET runner_id='1246',ss_date='2009-11-15',sex='F',age='50',score='27.669586',wh_sc='0',ye_sc='0',or_sc='55.893101',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1246 F50 27.669586<br>");
$sql = "INSERT INTO ss09 SET runner_id='1238',ss_date='2009-11-15',sex='M',age='55',score='26.956369',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='41.256924',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1238 M55 26.956369<br>");
$sql = "INSERT INTO ss09 SET runner_id='1218',ss_date='2009-11-15',sex='M',age='40',score='82.794038',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='83.849439',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1218 M40 82.794038<br>");
$sql = "INSERT INTO ss09 SET runner_id='1214',ss_date='2009-11-15',sex='M',age='60',score='18.464412',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='35.954929',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1214 M60 18.464412<br>");
$sql = "INSERT INTO ss09 SET runner_id='1198',ss_date='2009-11-15',sex='M',age='65',score='44.241682',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='88.037334',gr_sc='58.881732',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1198 M65 44.241682<br>");
$sql = "INSERT INTO ss09 SET runner_id='1190',ss_date='2009-11-15',sex='M',age='40',score='67.071367',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='68.837707',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1190 M40 67.071367<br>");
$sql = "INSERT INTO ss09 SET runner_id='1189',ss_date='2009-11-15',sex='M',age='70',score='44.809097',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1189 M70 44.809097<br>");
$sql = "INSERT INTO ss09 SET runner_id='1151',ss_date='2009-11-15',sex='F',age='65',score='21.467539',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='37.802247',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1151 F65 21.467539<br>");
$sql = "INSERT INTO ss09 SET runner_id='1088',ss_date='2009-11-15',sex='M',age='60',score='36.478029',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='51.762175',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1088 M60 36.478029<br>");
$sql = "INSERT INTO ss09 SET runner_id='1034',ss_date='2009-11-15',sex='M',age='70',score='17.034994',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='33.542737',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1034 M70 17.034994<br>");
$sql = "INSERT INTO ss09 SET runner_id='1032',ss_date='2009-11-15',sex='M',age='65',score='20.631374',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='40.274279',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1032 M65 20.631374<br>");
$sql = "INSERT INTO ss09 SET runner_id='1022',ss_date='2009-11-15',sex='M',age='14',score='44.021552',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1022 M14 44.021552<br>");
$sql = "INSERT INTO ss09 SET runner_id='1017',ss_date='2009-11-15',sex='F',age='45',score='25.364311',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1017 F45 25.364311<br>");
$sql = "INSERT INTO ss09 SET runner_id='970',ss_date='2009-11-15',sex='F',age='55',score='18.329763',wh_sc='0',ye_sc='0',or_sc='36.519681',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("970 F55 18.329763<br>");
$sql = "INSERT INTO ss09 SET runner_id='969',ss_date='2009-11-15',sex='F',age='21',score='44.444844',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='62.150954',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("969 F21 44.444844<br>");
$sql = "INSERT INTO ss09 SET runner_id='958',ss_date='2009-11-15',sex='M',age='45',score='15.172073',wh_sc='0',ye_sc='39.54263',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("958 M45 15.172073<br>");
$sql = "INSERT INTO ss09 SET runner_id='949',ss_date='2009-11-15',sex='F',age='45',score='14.820205',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("949 F45 14.820205<br>");
$sql = "INSERT INTO ss09 SET runner_id='899',ss_date='2009-11-15',sex='M',age='60',score='46.883955',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='40.912802',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("899 M60 46.883955<br>");
$sql = "INSERT INTO ss09 SET runner_id='862',ss_date='2009-11-15',sex='M',age='21',score='36.521225',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("862 M21 36.521225<br>");
$sql = "INSERT INTO ss09 SET runner_id='799',ss_date='2009-11-15',sex='M',age='45',score='69.346368',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='68.927736',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("799 M45 69.346368<br>");
$sql = "INSERT INTO ss09 SET runner_id='798',ss_date='2009-11-15',sex='M',age='60',score='32.313665',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='62.710689',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("798 M60 32.313665<br>");
$sql = "INSERT INTO ss09 SET runner_id='797',ss_date='2009-11-15',sex='F',age='55',score='42.233583',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='57.714399',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("797 F55 42.233583<br>");
$sql = "INSERT INTO ss09 SET runner_id='796',ss_date='2009-11-15',sex='M',age='60',score='27.262837',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("796 M60 27.262837<br>");
$sql = "INSERT INTO ss09 SET runner_id='784',ss_date='2009-11-15',sex='F',age='50',score='17.639992',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("784 F50 17.639992<br>");
$sql = "INSERT INTO ss09 SET runner_id='783',ss_date='2009-11-15',sex='F',age='70',score='22.016257',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='44.866326',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("783 F70 22.016257<br>");
$sql = "INSERT INTO ss09 SET runner_id='767',ss_date='2009-11-15',sex='M',age='40',score='57.194532',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='53.531074',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("767 M40 57.194532<br>");
$sql = "INSERT INTO ss09 SET runner_id='748',ss_date='2009-11-15',sex='M',age='10',score='20.671222',wh_sc='0',ye_sc='50.181126',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("748 M10 20.671222<br>");
$sql = "INSERT INTO ss09 SET runner_id='743',ss_date='2009-11-15',sex='M',age='50',score='40.076537',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("743 M50 40.076537<br>");
$sql = "INSERT INTO ss09 SET runner_id='673',ss_date='2009-11-15',sex='M',age='45',score='35.627447',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("673 M45 35.627447<br>");
$sql = "INSERT INTO ss09 SET runner_id='667',ss_date='2009-11-15',sex='M',age='55',score='29.434587',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='58.751407',gr_sc='40.745378',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("667 M55 29.434587<br>");
$sql = "INSERT INTO ss09 SET runner_id='666',ss_date='2009-11-15',sex='F',age='55',score='29.2891',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='55.423766',gr_sc='42.058077',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("666 F55 29.2891<br>");
$sql = "INSERT INTO ss09 SET runner_id='637',ss_date='2009-11-15',sex='M',age='10',score='27.078187',wh_sc='85.914964',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("637 M10 27.078187<br>");
$sql = "INSERT INTO ss09 SET runner_id='636',ss_date='2009-11-15',sex='F',age='35',score='45.383903',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='62.927353',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("636 F35 45.383903<br>");
$sql = "INSERT INTO ss09 SET runner_id='634',ss_date='2009-11-15',sex='M',age='40',score='48.271538',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='94.61209',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("634 M40 48.271538<br>");
$sql = "INSERT INTO ss09 SET runner_id='633',ss_date='2009-11-15',sex='M',age='16',score='27.987892',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("633 M16 27.987892<br>");
$sql = "INSERT INTO ss09 SET runner_id='630',ss_date='2009-11-15',sex='M',age='40',score='26.966461',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("630 M40 26.966461<br>");
$sql = "INSERT INTO ss09 SET runner_id='626',ss_date='2009-11-15',sex='M',age='21',score='70.853973',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='72.807649',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("626 M21 70.853973<br>");
$sql = "INSERT INTO ss09 SET runner_id='616',ss_date='2009-11-15',sex='M',age='16',score='24.565346',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='48.996505',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("616 M16 24.565346<br>");
$sql = "INSERT INTO ss09 SET runner_id='615',ss_date='2009-11-15',sex='F',age='10',score='31.222884',wh_sc='99.384964',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("615 F10 31.222884<br>");
$sql = "INSERT INTO ss09 SET runner_id='614',ss_date='2009-11-15',sex='F',age='50',score='46.464884',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='66.265909',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("614 F50 46.464884<br>");
$sql = "INSERT INTO ss09 SET runner_id='613',ss_date='2009-11-15',sex='M',age='50',score='56.767621',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='80.848628',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("613 M50 56.767621<br>");
$sql = "INSERT INTO ss09 SET runner_id='606',ss_date='2009-11-15',sex='M',age='21',score='43.772719',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("606 M21 43.772719<br>");
$sql = "INSERT INTO ss09 SET runner_id='601',ss_date='2009-11-15',sex='M',age='60',score='33.480166',wh_sc='0',ye_sc='97.051344',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("601 M60 33.480166<br>");
$sql = "INSERT INTO ss09 SET runner_id='600',ss_date='2009-11-15',sex='M',age='35',score='21.986325',wh_sc='68.879368',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("600 M35 21.986325<br>");
$sql = "INSERT INTO ss09 SET runner_id='568',ss_date='2009-11-15',sex='F',age='55',score='20.863904',wh_sc='0',ye_sc='0',or_sc='42.14392',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("568 F55 20.863904<br>");
$sql = "INSERT INTO ss09 SET runner_id='567',ss_date='2009-11-15',sex='M',age='55',score='56.617926',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='78.624013',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("567 M55 56.617926<br>");
$sql = "INSERT INTO ss09 SET runner_id='563',ss_date='2009-11-15',sex='F',age='55',score='54.466291',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("563 F55 54.466291<br>");
$sql = "INSERT INTO ss09 SET runner_id='545',ss_date='2009-11-15',sex='M',age='21',score='77.711238',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='78.210198',bl_sc='100.352213'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("545 M21 77.711238<br>");
$sql = "INSERT INTO ss09 SET runner_id='522',ss_date='2009-11-15',sex='F',age='50',score='27.227351',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='61.267519',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("522 F50 27.227351<br>");
$sql = "INSERT INTO ss09 SET runner_id='499',ss_date='2009-11-15',sex='M',age='50',score='39.197602',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='55.818563',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("499 M50 39.197602<br>");
$sql = "INSERT INTO ss09 SET runner_id='494',ss_date='2009-11-15',sex='M',age='55',score='36.064709',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("494 M55 36.064709<br>");
$sql = "INSERT INTO ss09 SET runner_id='463',ss_date='2009-11-15',sex='M',age='45',score='29.679623',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='51.283484',gr_sc='42.102871',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("463 M45 29.679623<br>");
$sql = "INSERT INTO ss09 SET runner_id='428',ss_date='2009-11-15',sex='M',age='50',score='39.826117',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='76.628695',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("428 M50 39.826117<br>");
$sql = "INSERT INTO ss09 SET runner_id='418',ss_date='2009-11-15',sex='M',age='60',score='44.807853',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("418 M60 44.807853<br>");
$sql = "INSERT INTO ss09 SET runner_id='376',ss_date='2009-11-15',sex='M',age='50',score='65.152275',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='64.224438',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("376 M50 65.152275<br>");
$sql = "INSERT INTO ss09 SET runner_id='270',ss_date='2009-11-15',sex='M',age='50',score='77.272231',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='109.983059',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("270 M50 77.272231<br>");
$sql = "INSERT INTO ss09 SET runner_id='269',ss_date='2009-11-15',sex='F',age='14',score='35.246105',wh_sc='0',ye_sc='0',or_sc='72.398999',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("269 F14 35.246105<br>");
$sql = "INSERT INTO ss09 SET runner_id='267',ss_date='2009-11-15',sex='F',age='18',score='67.171948',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='69.329621',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("267 F18 67.171948<br>");
$sql = "INSERT INTO ss09 SET runner_id='255',ss_date='2009-11-15',sex='M',age='20',score='33.956837',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("255 M20 33.956837<br>");
$sql = "INSERT INTO ss09 SET runner_id='254',ss_date='2009-11-15',sex='F',age='55',score='20.947293',wh_sc='0',ye_sc='55.368927',or_sc='35.16659',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("254 F55 20.947293<br>");
$sql = "INSERT INTO ss09 SET runner_id='253',ss_date='2009-11-15',sex='M',age='40',score='34.924647',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='51.239586',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("253 M40 34.924647<br>");
$sql = "INSERT INTO ss09 SET runner_id='248',ss_date='2009-11-15',sex='M',age='60',score='51.593404',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='104.834828',gr_sc='69.227733',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("248 M60 51.593404<br>");
$sql = "INSERT INTO ss09 SET runner_id='226',ss_date='2009-11-15',sex='M',age='80',score='23.692336',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='39.006136',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("226 M80 23.692336<br>");
$sql = "INSERT INTO ss09 SET runner_id='176',ss_date='2009-11-15',sex='M',age='55',score='68.983505',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='98.473004',re_sc='65.40426',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("176 M55 68.983505<br>");
$sql = "INSERT INTO ss09 SET runner_id='169',ss_date='2009-11-15',sex='M',age='60',score='26.704608',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='37.593253',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("169 M60 26.704608<br>");
$sql = "INSERT INTO ss09 SET runner_id='162',ss_date='2009-11-15',sex='M',age='35',score='52.996804',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='52.466384',bl_sc='70.533704'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("162 M35 52.996804<br>");
$sql = "INSERT INTO ss09 SET runner_id='131',ss_date='2009-11-15',sex='M',age='40',score='100.721534',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='100.787528',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("131 M40 100.721534<br>");
$sql = "INSERT INTO ss09 SET runner_id='100',ss_date='2009-11-15',sex='F',age='16',score='29.887399',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("100 F16 29.887399<br>");
$sql = "INSERT INTO ss09 SET runner_id='96',ss_date='2009-11-15',sex='M',age='55',score='42.642269',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='60.813029',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("96 M55 42.642269<br>");
$sql = "INSERT INTO ss09 SET runner_id='87',ss_date='2009-11-15',sex='M',age='16',score='57.529164',wh_sc='0',ye_sc='0',or_sc='113.523994',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("87 M16 57.529164<br>");
$sql = "INSERT INTO ss09 SET runner_id='86',ss_date='2009-11-15',sex='M',age='50',score='43.647941',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='43.556253',bl_sc='51.583601'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("86 M50 43.647941<br>");
$sql = "INSERT INTO ss09 SET runner_id='69',ss_date='2009-11-15',sex='M',age='45',score='51.906083',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='66.174548',re_sc='53.402499',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("69 M45 51.906083<br>");
$sql = "INSERT INTO ss09 SET runner_id='48',ss_date='2009-11-15',sex='M',age='50',score='37.493788',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='52.881574',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("48 M50 37.493788<br>");
$sql = "INSERT INTO ss09 SET runner_id='30',ss_date='2009-11-15',sex='F',age='35',score='34.672595',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='49.408868',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("30 F35 34.672595<br>");
$sql = "INSERT INTO ss09 SET runner_id='29',ss_date='2009-11-15',sex='M',age='35',score='49.744974',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='70.802874',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("29 M35 49.744974<br>");
$sql = "INSERT INTO ss09 SET runner_id='28',ss_date='2009-11-15',sex='M',age='45',score='43.850062',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='42.282649',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("28 M45 43.850062<br>");
$sql = "INSERT INTO ss09 SET runner_id='14',ss_date='2009-11-15',sex='F',age='35',score='41.385281',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("14 F35 41.385281<br>");
$sql = "INSERT INTO ss09 SET runner_id='13',ss_date='2009-11-15',sex='M',age='45',score='68.608904',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='70.899939',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("13 M45 68.608904<br>");
$sql = "INSERT INTO ss09 SET runner_id='12',ss_date='2009-11-15',sex='M',age='20',score='86.205575',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("12 M20 86.205575<br>");
$sql = "INSERT INTO ss09 SET runner_id='2',ss_date='2009-11-15',sex='F',age='45',score='44.494149',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='63.715885',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2 F45 44.494149<br>");
$sql = "INSERT INTO ss09 SET runner_id='2688',ss_date='2009-12-06',sex='F',age='21',score='16.219289',wh_sc='0',ye_sc='0',or_sc='31.513669',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2688 F21 16.219289<br>");
$sql = "INSERT INTO ss09 SET runner_id='2688',ss_date='2009-11-22',sex='F',age='21',score='16.129641',wh_sc='0',ye_sc='0',or_sc='31.350339',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2688 F21 16.129641<br>");
$sql = "INSERT INTO ss09 SET runner_id='2687',ss_date='2009-11-22',sex='M',age='21',score='28.141595',wh_sc='0',ye_sc='0',or_sc='55.316104',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2687 M21 28.141595<br>");
$sql = "INSERT INTO ss09 SET runner_id='2681',ss_date='2009-11-22',sex='M',age='16',score='27.674309',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2681 M16 27.674309<br>");
$sql = "INSERT INTO ss09 SET runner_id='2637',ss_date='2009-11-22',sex='F',age='45',score='23.831282',wh_sc='0',ye_sc='53.978604',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2637 F45 23.831282<br>");
$sql = "INSERT INTO ss09 SET runner_id='2597',ss_date='2009-11-22',sex='M',age='45',score='40.449392',wh_sc='0',ye_sc='0',or_sc='71.163447',bn_sc='0',gr_sc='61.221686',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2597 M45 40.449392<br>");
$sql = "INSERT INTO ss09 SET runner_id='2601',ss_date='2009-11-22',sex='M',age='60',score='36.794207',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2601 M60 36.794207<br>");
$sql = "INSERT INTO ss09 SET runner_id='2481',ss_date='2009-11-22',sex='M',age='45',score='37.602076',wh_sc='0',ye_sc='0',or_sc='71.125696',bn_sc='0',gr_sc='39.39862',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2481 M45 37.602076<br>");
$sql = "INSERT INTO ss09 SET runner_id='2473',ss_date='2009-11-22',sex='F',age='16',score='21.42105',wh_sc='0',ye_sc='54.083181',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2473 F16 21.42105<br>");
$sql = "INSERT INTO ss09 SET runner_id='2491',ss_date='2009-11-22',sex='F',age='20',score='22.006546',wh_sc='0',ye_sc='56.399599',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2491 F20 22.006546<br>");
$sql = "INSERT INTO ss09 SET runner_id='2444',ss_date='2009-11-22',sex='F',age='10',score='21.923699',wh_sc='0',ye_sc='49.015837',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2444 F10 21.923699<br>");
$sql = "INSERT INTO ss09 SET runner_id='2414',ss_date='2009-11-22',sex='M',age='60',score='20.381187',wh_sc='0',ye_sc='0',or_sc='35.866137',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2414 M60 20.381187<br>");
$sql = "INSERT INTO ss09 SET runner_id='2412',ss_date='2009-11-22',sex='M',age='21',score='51.673526',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='49.159518',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2412 M21 51.673526<br>");
$sql = "INSERT INTO ss09 SET runner_id='2341',ss_date='2009-11-22',sex='M',age='60',score='18.456508',wh_sc='0',ye_sc='0',or_sc='39.041316',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2341 M60 18.456508<br>");
$sql = "INSERT INTO ss09 SET runner_id='2338',ss_date='2009-11-22',sex='M',age='16',score='25.793304',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2338 M16 25.793304<br>");
$sql = "INSERT INTO ss09 SET runner_id='2312',ss_date='2009-11-22',sex='F',age='8',score='19.84828',wh_sc='60.546933',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2312 F8 19.84828<br>");
$sql = "INSERT INTO ss09 SET runner_id='2303',ss_date='2009-11-22',sex='G',age='2',score='25.034611',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='41.849117',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2303 G2 25.034611<br>");
$sql = "INSERT INTO ss09 SET runner_id='2300',ss_date='2009-11-22',sex='G',age='2',score='17.507531',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2300 G2 17.507531<br>");
$sql = "INSERT INTO ss09 SET runner_id='2275',ss_date='2009-11-22',sex='M',age='21',score='35.540978',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2275 M21 35.540978<br>");
$sql = "INSERT INTO ss09 SET runner_id='2267',ss_date='2009-11-22',sex='M',age='40',score='30.099017',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2267 M40 30.099017<br>");
$sql = "INSERT INTO ss09 SET runner_id='2257',ss_date='2009-11-22',sex='M',age='50',score='18.958503',wh_sc='0',ye_sc='43.638863',or_sc='38.506211',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2257 M50 18.958503<br>");
$sql = "INSERT INTO ss09 SET runner_id='2255',ss_date='2009-11-22',sex='G',age='2',score='36.917322',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2255 G2 36.917322<br>");
$sql = "INSERT INTO ss09 SET runner_id='2254',ss_date='2009-11-22',sex='F',age='16',score='26.496003',wh_sc='0',ye_sc='68.912929',or_sc='42.272541',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2254 F16 26.496003<br>");
$sql = "INSERT INTO ss09 SET runner_id='2227',ss_date='2009-11-22',sex='M',age='40',score='61.343149',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='61.994256',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2227 M40 61.343149<br>");
$sql = "INSERT INTO ss09 SET runner_id='2226',ss_date='2009-11-22',sex='M',age='60',score='25.781841',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2226 M60 25.781841<br>");
$sql = "INSERT INTO ss09 SET runner_id='2207',ss_date='2009-11-22',sex='M',age='21',score='99.374094',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2207 M21 99.374094<br>");
$sql = "INSERT INTO ss09 SET runner_id='2201',ss_date='2009-11-22',sex='M',age='20',score='25.894719',wh_sc='0',ye_sc='0',or_sc='53.228474',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2201 M20 25.894719<br>");
$sql = "INSERT INTO ss09 SET runner_id='2200',ss_date='2009-11-22',sex='M',age='10',score='26.219259',wh_sc='0',ye_sc='63.334781',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2200 M10 26.219259<br>");
$sql = "INSERT INTO ss09 SET runner_id='2198',ss_date='2009-11-22',sex='F',age='40',score='53.054522',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='75.212829',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2198 F40 53.054522<br>");
$sql = "INSERT INTO ss09 SET runner_id='2160',ss_date='2009-11-22',sex='M',age='65',score='45.897249',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='64.679845',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2160 M65 45.897249<br>");
$sql = "INSERT INTO ss09 SET runner_id='2139',ss_date='2009-11-22',sex='M',age='45',score='31.939503',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='59.657385',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2139 M45 31.939503<br>");
$sql = "INSERT INTO ss09 SET runner_id='2122',ss_date='2009-11-22',sex='M',age='55',score='50.6901',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='101.100859',gr_sc='69.379195',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2122 M55 50.6901<br>");
$sql = "INSERT INTO ss09 SET runner_id='2108',ss_date='2009-11-22',sex='M',age='60',score='36.387925',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='36.521022',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2108 M60 36.387925<br>");
$sql = "INSERT INTO ss09 SET runner_id='2056',ss_date='2009-11-22',sex='M',age='60',score='32.543888',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='64.203302',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2056 M60 32.543888<br>");
$sql = "INSERT INTO ss09 SET runner_id='1992',ss_date='2009-11-22',sex='F',age='60',score='22.691048',wh_sc='0',ye_sc='0',or_sc='47.133069',bn_sc='42.643058',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1992 F60 22.691048<br>");
$sql = "INSERT INTO ss09 SET runner_id='1991',ss_date='2009-11-22',sex='M',age='60',score='31.504763',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='66.068166',gr_sc='43.590542',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1991 M60 31.504763<br>");
$sql = "INSERT INTO ss09 SET runner_id='1953',ss_date='2009-11-22',sex='M',age='55',score='51.984284',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='72.672997',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1953 M55 51.984284<br>");
$sql = "INSERT INTO ss09 SET runner_id='1928',ss_date='2009-11-22',sex='M',age='50',score='63.820945',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='83.44013',re_sc='48.903132',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1928 M50 63.820945<br>");
$sql = "INSERT INTO ss09 SET runner_id='1926',ss_date='2009-11-22',sex='M',age='18',score='58.143841',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='70.472425',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1926 M18 58.143841<br>");
$sql = "INSERT INTO ss09 SET runner_id='1925',ss_date='2009-11-22',sex='M',age='16',score='51.105222',wh_sc='0',ye_sc='0',or_sc='99.061615',bn_sc='92.965244',gr_sc='77.606874',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1925 M16 51.105222<br>");
$sql = "INSERT INTO ss09 SET runner_id='1923',ss_date='2009-11-22',sex='M',age='14',score='43.633637',wh_sc='0',ye_sc='114.119268',or_sc='86.874311',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1923 M14 43.633637<br>");
$sql = "INSERT INTO ss09 SET runner_id='1916',ss_date='2009-11-22',sex='F',age='55',score='25.452833',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='48.471488',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1916 F55 25.452833<br>");
$sql = "INSERT INTO ss09 SET runner_id='1879',ss_date='2009-11-22',sex='M',age='50',score='55.750901',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='79.657747',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1879 M50 55.750901<br>");
$sql = "INSERT INTO ss09 SET runner_id='1878',ss_date='2009-11-22',sex='F',age='50',score='28.676682',wh_sc='0',ye_sc='65.283626',or_sc='60.916657',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1878 F50 28.676682<br>");
$sql = "INSERT INTO ss09 SET runner_id='1861',ss_date='2009-11-22',sex='M',age='45',score='25.664103',wh_sc='0',ye_sc='0',or_sc='53.203715',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1861 M45 25.664103<br>");
$sql = "INSERT INTO ss09 SET runner_id='1826',ss_date='2009-11-22',sex='M',age='55',score='35.083143',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='50.157983',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1826 M55 35.083143<br>");
$sql = "INSERT INTO ss09 SET runner_id='1812',ss_date='2009-11-22',sex='F',age='45',score='29.319243',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1812 F45 29.319243<br>");
$sql = "INSERT INTO ss09 SET runner_id='1777',ss_date='2009-11-22',sex='M',age='18',score='65.482984',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='92.282965',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1777 M18 65.482984<br>");
$sql = "INSERT INTO ss09 SET runner_id='1771',ss_date='2009-11-22',sex='F',age='60',score='25.755416',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='42.198329',gr_sc='35.84926',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1771 F60 25.755416<br>");
$sql = "INSERT INTO ss09 SET runner_id='1746',ss_date='2009-11-22',sex='F',age='50',score='38.089988',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='74.191801',gr_sc='54.713537',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1746 F50 38.089988<br>");
$sql = "INSERT INTO ss09 SET runner_id='1739',ss_date='2009-11-22',sex='M',age='70',score='38.315905',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='72.285177',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1739 M70 38.315905<br>");
$sql = "INSERT INTO ss09 SET runner_id='1720',ss_date='2009-11-22',sex='F',age='60',score='25.427184',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='42.520571',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1720 F60 25.427184<br>");
$sql = "INSERT INTO ss09 SET runner_id='1718',ss_date='2009-11-22',sex='M',age='60',score='50.112753',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='96.949891',gr_sc='71.671768',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1718 M60 50.112753<br>");
$sql = "INSERT INTO ss09 SET runner_id='1676',ss_date='2009-11-22',sex='F',age='55',score='24.025156',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='33.93443',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1676 F55 24.025156<br>");
$sql = "INSERT INTO ss09 SET runner_id='1667',ss_date='2009-11-22',sex='M',age='50',score='38.892451',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='71.159657',gr_sc='55.731351',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1667 M50 38.892451<br>");
$sql = "INSERT INTO ss09 SET runner_id='1620',ss_date='2009-11-22',sex='M',age='50',score='30.344452',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1620 M50 30.344452<br>");
$sql = "INSERT INTO ss09 SET runner_id='1606',ss_date='2009-11-22',sex='M',age='35',score='98.795324',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='98.860611',bl_sc='129.114083'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1606 M35 98.795324<br>");
$sql = "INSERT INTO ss09 SET runner_id='1603',ss_date='2009-11-22',sex='F',age='35',score='68.693319',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='90.136303',re_sc='70.826741',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1603 F35 68.693319<br>");
$sql = "INSERT INTO ss09 SET runner_id='1602',ss_date='2009-11-22',sex='M',age='10',score='35.0754',wh_sc='118.649736',ye_sc='81.804586',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1602 M10 35.0754<br>");
$sql = "INSERT INTO ss09 SET runner_id='1570',ss_date='2009-11-22',sex='M',age='18',score='58.01308',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='84.21956',re_sc='60.776517',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1570 M18 58.01308<br>");
$sql = "INSERT INTO ss09 SET runner_id='1567',ss_date='2009-11-22',sex='M',age='50',score='60.270795',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='89.046033',re_sc='59.569406',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1567 M50 60.270795<br>");
$sql = "INSERT INTO ss09 SET runner_id='1566',ss_date='2009-11-22',sex='F',age='14',score='31.405282',wh_sc='0',ye_sc='0',or_sc='61.158331',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1566 F14 31.405282<br>");
$sql = "INSERT INTO ss09 SET runner_id='1548',ss_date='2009-11-22',sex='F',age='40',score='30.096583',wh_sc='0',ye_sc='0',or_sc='53.680841',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1548 F40 30.096583<br>");
$sql = "INSERT INTO ss09 SET runner_id='1540',ss_date='2009-11-22',sex='M',age='45',score='29.798975',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='42.558224',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1540 M45 29.798975<br>");
$sql = "INSERT INTO ss09 SET runner_id='1519',ss_date='2009-11-22',sex='M',age='50',score='34.811059',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1519 M50 34.811059<br>");
$sql = "INSERT INTO ss09 SET runner_id='1518',ss_date='2009-11-22',sex='F',age='21',score='74.4913',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1518 F21 74.4913<br>");
$sql = "INSERT INTO ss09 SET runner_id='1504',ss_date='2009-11-22',sex='M',age='60',score='37.650382',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='55.958825',re_sc='34.030201',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1504 M60 37.650382<br>");
$sql = "INSERT INTO ss09 SET runner_id='1503',ss_date='2009-11-22',sex='F',age='55',score='19.721714',wh_sc='0',ye_sc='0',or_sc='42.692739',bn_sc='35.145209',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1503 F55 19.721714<br>");
$sql = "INSERT INTO ss09 SET runner_id='1486',ss_date='2009-11-22',sex='M',age='65',score='32.071212',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='59.787713',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1486 M65 32.071212<br>");
$sql = "INSERT INTO ss09 SET runner_id='1480',ss_date='2009-11-22',sex='F',age='21',score='28.014009',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='37.728274',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1480 F21 28.014009<br>");
$sql = "INSERT INTO ss09 SET runner_id='1432',ss_date='2009-11-22',sex='M',age='45',score='79.28832',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='77.994308',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1432 M45 79.28832<br>");
$sql = "INSERT INTO ss09 SET runner_id='1418',ss_date='2009-11-22',sex='F',age='55',score='25.443202',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='47.735169',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1418 F55 25.443202<br>");
$sql = "INSERT INTO ss09 SET runner_id='1417',ss_date='2009-11-22',sex='M',age='60',score='37.675776',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='69.317759',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1417 M60 37.675776<br>");
$sql = "INSERT INTO ss09 SET runner_id='1408',ss_date='2009-11-22',sex='M',age='50',score='53.024318',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1408 M50 53.024318<br>");
$sql = "INSERT INTO ss09 SET runner_id='1398',ss_date='2009-11-22',sex='M',age='45',score='31.445074',wh_sc='0',ye_sc='92.209488',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1398 M45 31.445074<br>");
$sql = "INSERT INTO ss09 SET runner_id='1397',ss_date='2009-11-22',sex='M',age='16',score='55.381933',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='84.722644',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1397 M16 55.381933<br>");
$sql = "INSERT INTO ss09 SET runner_id='1364',ss_date='2009-11-22',sex='M',age='40',score='59.033808',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='59.474754',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1364 M40 59.033808<br>");
$sql = "INSERT INTO ss09 SET runner_id='1318',ss_date='2009-11-22',sex='M',age='50',score='23.965731',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='43.072106',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1318 M50 23.965731<br>");
$sql = "INSERT INTO ss09 SET runner_id='1309',ss_date='2009-11-22',sex='M',age='55',score='27.865863',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='51.114532',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1309 M55 27.865863<br>");
$sql = "INSERT INTO ss09 SET runner_id='1282',ss_date='2009-11-22',sex='F',age='50',score='46.458938',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1282 F50 46.458938<br>");
$sql = "INSERT INTO ss09 SET runner_id='1279',ss_date='2009-11-22',sex='M',age='55',score='42.843412',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='60.717401',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1279 M55 42.843412<br>");
$sql = "INSERT INTO ss09 SET runner_id='1250',ss_date='2009-11-22',sex='M',age='35',score='99.907786',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='100.381806',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1250 M35 99.907786<br>");
$sql = "INSERT INTO ss09 SET runner_id='1246',ss_date='2009-11-22',sex='F',age='50',score='28.332338',wh_sc='0',ye_sc='0',or_sc='56.163403',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1246 F50 28.332338<br>");
$sql = "INSERT INTO ss09 SET runner_id='1238',ss_date='2009-11-22',sex='M',age='55',score='27.175593',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='41.627775',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1238 M55 27.175593<br>");
$sql = "INSERT INTO ss09 SET runner_id='1218',ss_date='2009-11-22',sex='M',age='40',score='83.096036',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='83.294749',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1218 M40 83.096036<br>");
$sql = "INSERT INTO ss09 SET runner_id='1214',ss_date='2009-11-22',sex='M',age='60',score='16.173945',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='30.205465',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1214 M60 16.173945<br>");
$sql = "INSERT INTO ss09 SET runner_id='1198',ss_date='2009-11-22',sex='M',age='65',score='44.838889',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='86.325799',gr_sc='61.265216',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1198 M65 44.838889<br>");
$sql = "INSERT INTO ss09 SET runner_id='1190',ss_date='2009-11-22',sex='M',age='40',score='67.106829',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='68.759523',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1190 M40 67.106829<br>");
$sql = "INSERT INTO ss09 SET runner_id='1189',ss_date='2009-11-22',sex='M',age='70',score='45.032908',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='85.644255',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1189 M70 45.032908<br>");
$sql = "INSERT INTO ss09 SET runner_id='1151',ss_date='2009-11-22',sex='F',age='65',score='21.699129',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='36.74399',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1151 F65 21.699129<br>");
$sql = "INSERT INTO ss09 SET runner_id='1088',ss_date='2009-11-22',sex='M',age='60',score='36.719428',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='52.173144',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1088 M60 36.719428<br>");
$sql = "INSERT INTO ss09 SET runner_id='1034',ss_date='2009-11-22',sex='M',age='70',score='17.228991',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='32.632014',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1034 M70 17.228991<br>");
$sql = "INSERT INTO ss09 SET runner_id='1032',ss_date='2009-11-22',sex='M',age='65',score='20.870599',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='39.198415',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1032 M65 20.870599<br>");
$sql = "INSERT INTO ss09 SET runner_id='1022',ss_date='2009-11-22',sex='M',age='14',score='43.666454',wh_sc='0',ye_sc='79.72762',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1022 M14 43.666454<br>");
$sql = "INSERT INTO ss09 SET runner_id='1017',ss_date='2009-11-22',sex='F',age='45',score='25.608822',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1017 F45 25.608822<br>");
$sql = "INSERT INTO ss09 SET runner_id='970',ss_date='2009-11-22',sex='F',age='55',score='18.646659',wh_sc='0',ye_sc='0',or_sc='36.536249',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("970 F55 18.646659<br>");
$sql = "INSERT INTO ss09 SET runner_id='969',ss_date='2009-11-22',sex='F',age='21',score='44.779019',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='62.611137',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("969 F21 44.779019<br>");
$sql = "INSERT INTO ss09 SET runner_id='958',ss_date='2009-11-22',sex='M',age='45',score='15.450391',wh_sc='0',ye_sc='39.859174',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("958 M45 15.450391<br>");
$sql = "INSERT INTO ss09 SET runner_id='949',ss_date='2009-11-22',sex='F',age='45',score='14.986262',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("949 F45 14.986262<br>");
$sql = "INSERT INTO ss09 SET runner_id='899',ss_date='2009-11-22',sex='M',age='60',score='46.947389',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='40.884138',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("899 M60 46.947389<br>");
$sql = "INSERT INTO ss09 SET runner_id='862',ss_date='2009-11-22',sex='M',age='21',score='37.153628',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("862 M21 37.153628<br>");
$sql = "INSERT INTO ss09 SET runner_id='799',ss_date='2009-11-22',sex='M',age='45',score='69.590568',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='68.927386',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("799 M45 69.590568<br>");
$sql = "INSERT INTO ss09 SET runner_id='798',ss_date='2009-11-22',sex='M',age='60',score='32.646875',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='61.030804',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("798 M60 32.646875<br>");
$sql = "INSERT INTO ss09 SET runner_id='797',ss_date='2009-11-22',sex='F',age='55',score='42.577596',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='58.256954',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("797 F55 42.577596<br>");
$sql = "INSERT INTO ss09 SET runner_id='796',ss_date='2009-11-22',sex='M',age='60',score='27.575962',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("796 M60 27.575962<br>");
$sql = "INSERT INTO ss09 SET runner_id='784',ss_date='2009-11-22',sex='F',age='50',score='17.931791',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("784 F50 17.931791<br>");
$sql = "INSERT INTO ss09 SET runner_id='783',ss_date='2009-11-22',sex='F',age='70',score='22.260307',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='43.861508',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("783 F70 22.260307<br>");
$sql = "INSERT INTO ss09 SET runner_id='767',ss_date='2009-11-22',sex='M',age='40',score='57.325451',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='53.594169',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("767 M40 57.325451<br>");
$sql = "INSERT INTO ss09 SET runner_id='748',ss_date='2009-11-22',sex='M',age='10',score='21.52095',wh_sc='0',ye_sc='51.545497',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("748 M10 21.52095<br>");
$sql = "INSERT INTO ss09 SET runner_id='743',ss_date='2009-11-22',sex='M',age='50',score='40.458138',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("743 M50 40.458138<br>");
$sql = "INSERT INTO ss09 SET runner_id='673',ss_date='2009-11-22',sex='M',age='45',score='35.869052',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("673 M45 35.869052<br>");
$sql = "INSERT INTO ss09 SET runner_id='667',ss_date='2009-11-22',sex='M',age='55',score='29.440524',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='57.089906',gr_sc='40.759245',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("667 M55 29.440524<br>");
$sql = "INSERT INTO ss09 SET runner_id='666',ss_date='2009-11-22',sex='F',age='55',score='29.468799',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='53.940134',gr_sc='42.232956',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("666 F55 29.468799<br>");
$sql = "INSERT INTO ss09 SET runner_id='637',ss_date='2009-11-22',sex='M',age='10',score='27.139524',wh_sc='83.673794',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("637 M10 27.139524<br>");
$sql = "INSERT INTO ss09 SET runner_id='636',ss_date='2009-11-22',sex='F',age='35',score='45.363481',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='62.97541',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("636 F35 45.363481<br>");
$sql = "INSERT INTO ss09 SET runner_id='634',ss_date='2009-11-22',sex='M',age='40',score='48.316094',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='90.809495',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("634 M40 48.316094<br>");
$sql = "INSERT INTO ss09 SET runner_id='633',ss_date='2009-11-22',sex='M',age='16',score='29.748977',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("633 M16 29.748977<br>");
$sql = "INSERT INTO ss09 SET runner_id='630',ss_date='2009-11-22',sex='M',age='40',score='27.198929',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("630 M40 27.198929<br>");
$sql = "INSERT INTO ss09 SET runner_id='626',ss_date='2009-11-22',sex='M',age='21',score='70.994671',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='72.764919',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("626 M21 70.994671<br>");
$sql = "INSERT INTO ss09 SET runner_id='616',ss_date='2009-11-22',sex='M',age='16',score='24.846303',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='47.763107',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("616 M16 24.846303<br>");
$sql = "INSERT INTO ss09 SET runner_id='615',ss_date='2009-11-22',sex='F',age='10',score='31.849431',wh_sc='97.67647',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("615 F10 31.849431<br>");
$sql = "INSERT INTO ss09 SET runner_id='614',ss_date='2009-11-22',sex='F',age='50',score='46.820262',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='66.784505',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("614 F50 46.820262<br>");
$sql = "INSERT INTO ss09 SET runner_id='613',ss_date='2009-11-22',sex='M',age='50',score='57.258295',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='81.625592',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("613 M50 57.258295<br>");
$sql = "INSERT INTO ss09 SET runner_id='606',ss_date='2009-11-22',sex='M',age='21',score='43.995073',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("606 M21 43.995073<br>");
$sql = "INSERT INTO ss09 SET runner_id='601',ss_date='2009-11-22',sex='M',age='60',score='33.823076',wh_sc='0',ye_sc='93.671244',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("601 M60 33.823076<br>");
$sql = "INSERT INTO ss09 SET runner_id='600',ss_date='2009-11-22',sex='M',age='35',score='22.404303',wh_sc='67.80046',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("600 M35 22.404303<br>");
$sql = "INSERT INTO ss09 SET runner_id='568',ss_date='2009-11-22',sex='F',age='55',score='20.898515',wh_sc='0',ye_sc='0',or_sc='41.547312',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("568 F55 20.898515<br>");
$sql = "INSERT INTO ss09 SET runner_id='567',ss_date='2009-11-22',sex='M',age='55',score='56.692234',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='78.703071',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("567 M55 56.692234<br>");
$sql = "INSERT INTO ss09 SET runner_id='563',ss_date='2009-11-22',sex='F',age='55',score='54.713036',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("563 F55 54.713036<br>");
$sql = "INSERT INTO ss09 SET runner_id='545',ss_date='2009-11-22',sex='M',age='21',score='77.50928',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='77.690266',bl_sc='100.352213'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("545 M21 77.50928<br>");
$sql = "INSERT INTO ss09 SET runner_id='522',ss_date='2009-11-22',sex='F',age='50',score='27.537836',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='59.596524',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("522 F50 27.537836<br>");
$sql = "INSERT INTO ss09 SET runner_id='499',ss_date='2009-11-22',sex='M',age='50',score='39.34357',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='56.209636',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("499 M50 39.34357<br>");
$sql = "INSERT INTO ss09 SET runner_id='494',ss_date='2009-11-22',sex='M',age='55',score='42.953464',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("494 M55 42.953464<br>");
$sql = "INSERT INTO ss09 SET runner_id='463',ss_date='2009-11-22',sex='M',age='45',score='30.773172',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='61.44206',gr_sc='42.462933',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("463 M45 30.773172<br>");
$sql = "INSERT INTO ss09 SET runner_id='428',ss_date='2009-11-22',sex='M',age='50',score='40.51102',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='74.459931',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("428 M50 40.51102<br>");
$sql = "INSERT INTO ss09 SET runner_id='418',ss_date='2009-11-22',sex='M',age='60',score='45.619626',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='66.755843',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("418 M60 45.619626<br>");
$sql = "INSERT INTO ss09 SET runner_id='376',ss_date='2009-11-22',sex='M',age='50',score='65.373532',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='64.15654',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("376 M50 65.373532<br>");
$sql = "INSERT INTO ss09 SET runner_id='366',ss_date='2009-11-22',sex='M',age='50',score='29.930856',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("366 M50 29.930856<br>");
$sql = "INSERT INTO ss09 SET runner_id='270',ss_date='2009-11-22',sex='M',age='50',score='77.562674',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='110.546027',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("270 M50 77.562674<br>");
$sql = "INSERT INTO ss09 SET runner_id='269',ss_date='2009-11-22',sex='F',age='14',score='35.600317',wh_sc='0',ye_sc='0',or_sc='72.1888',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("269 F14 35.600317<br>");
$sql = "INSERT INTO ss09 SET runner_id='267',ss_date='2009-11-22',sex='F',age='18',score='67.373876',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='69.392723',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("267 F18 67.373876<br>");
$sql = "INSERT INTO ss09 SET runner_id='255',ss_date='2009-11-22',sex='M',age='20',score='35.206086',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("255 M20 35.206086<br>");
$sql = "INSERT INTO ss09 SET runner_id='254',ss_date='2009-11-22',sex='F',age='55',score='20.924666',wh_sc='0',ye_sc='56.007388',or_sc='39.454772',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("254 F55 20.924666<br>");
$sql = "INSERT INTO ss09 SET runner_id='253',ss_date='2009-11-22',sex='M',age='40',score='35.387027',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='51.750482',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("253 M40 35.387027<br>");
$sql = "INSERT INTO ss09 SET runner_id='248',ss_date='2009-11-22',sex='M',age='60',score='52.25549',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='101.94925',gr_sc='69.893826',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("248 M60 52.25549<br>");
$sql = "INSERT INTO ss09 SET runner_id='226',ss_date='2009-11-22',sex='M',age='80',score='23.918757',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='38.174156',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("226 M80 23.918757<br>");
$sql = "INSERT INTO ss09 SET runner_id='176',ss_date='2009-11-22',sex='M',age='55',score='69.399054',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='97.171008',re_sc='65.398025',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("176 M55 69.399054<br>");
$sql = "INSERT INTO ss09 SET runner_id='169',ss_date='2009-11-22',sex='M',age='60',score='27.08777',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='38.271198',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("169 M60 27.08777<br>");
$sql = "INSERT INTO ss09 SET runner_id='162',ss_date='2009-11-22',sex='M',age='35',score='52.914785',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='52.290716',bl_sc='70.533704'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("162 M35 52.914785<br>");
$sql = "INSERT INTO ss09 SET runner_id='131',ss_date='2009-11-22',sex='M',age='40',score='100.718121',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='100.757584',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("131 M40 100.718121<br>");
$sql = "INSERT INTO ss09 SET runner_id='100',ss_date='2009-11-22',sex='F',age='16',score='30.641696',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("100 F16 30.641696<br>");
$sql = "INSERT INTO ss09 SET runner_id='96',ss_date='2009-11-22',sex='M',age='55',score='43.068994',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='61.529707',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("96 M55 43.068994<br>");
$sql = "INSERT INTO ss09 SET runner_id='87',ss_date='2009-11-22',sex='M',age='16',score='58.335727',wh_sc='0',ye_sc='0',or_sc='114.064074',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("87 M16 58.335727<br>");
$sql = "INSERT INTO ss09 SET runner_id='86',ss_date='2009-11-22',sex='M',age='50',score='43.000369',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='42.217298',bl_sc='51.583601'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("86 M50 43.000369<br>");
$sql = "INSERT INTO ss09 SET runner_id='69',ss_date='2009-11-22',sex='M',age='45',score='52.023752',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='66.724149',re_sc='53.419252',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("69 M45 52.023752<br>");
$sql = "INSERT INTO ss09 SET runner_id='48',ss_date='2009-11-22',sex='M',age='50',score='37.809949',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='53.445224',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("48 M50 37.809949<br>");
$sql = "INSERT INTO ss09 SET runner_id='30',ss_date='2009-11-22',sex='F',age='35',score='35.116069',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='50.02719',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("30 F35 35.116069<br>");
$sql = "INSERT INTO ss09 SET runner_id='29',ss_date='2009-11-22',sex='M',age='35',score='50.345767',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='71.641194',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("29 M35 50.345767<br>");
$sql = "INSERT INTO ss09 SET runner_id='28',ss_date='2009-11-22',sex='M',age='45',score='44.745669',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='44.664145',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("28 M45 44.745669<br>");
$sql = "INSERT INTO ss09 SET runner_id='14',ss_date='2009-11-22',sex='F',age='35',score='41.668228',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("14 F35 41.668228<br>");
$sql = "INSERT INTO ss09 SET runner_id='13',ss_date='2009-11-22',sex='M',age='45',score='67.90327',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='70.90365',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("13 M45 67.90327<br>");
$sql = "INSERT INTO ss09 SET runner_id='12',ss_date='2009-11-22',sex='M',age='20',score='86.323448',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("12 M20 86.323448<br>");
$sql = "INSERT INTO ss09 SET runner_id='2',ss_date='2009-11-22',sex='F',age='45',score='45.108207',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='64.580198',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2 F45 45.108207<br>");
$sql = "INSERT INTO ss09 SET runner_id='2687',ss_date='2009-12-06',sex='M',age='21',score='28.299258',wh_sc='0',ye_sc='0',or_sc='55.594295',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2687 M21 28.299258<br>");
$sql = "INSERT INTO ss09 SET runner_id='2681',ss_date='2009-12-06',sex='M',age='16',score='27.776156',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2681 M16 27.776156<br>");
$sql = "INSERT INTO ss09 SET runner_id='2637',ss_date='2009-12-06',sex='F',age='45',score='26.107261',wh_sc='0',ye_sc='65.661522',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2637 F45 26.107261<br>");
$sql = "INSERT INTO ss09 SET runner_id='2597',ss_date='2009-12-06',sex='M',age='45',score='40.531626',wh_sc='0',ye_sc='0',or_sc='71.549419',bn_sc='0',gr_sc='60.693119',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2597 M45 40.531626<br>");
$sql = "INSERT INTO ss09 SET runner_id='2601',ss_date='2009-12-06',sex='M',age='60',score='39.511484',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2601 M60 39.511484<br>");
$sql = "INSERT INTO ss09 SET runner_id='2481',ss_date='2009-12-06',sex='M',age='45',score='37.679154',wh_sc='0',ye_sc='0',or_sc='71.440886',bn_sc='0',gr_sc='39.078111',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2481 M45 37.679154<br>");
$sql = "INSERT INTO ss09 SET runner_id='2473',ss_date='2009-12-06',sex='F',age='16',score='21.638379',wh_sc='0',ye_sc='54.652011',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2473 F16 21.638379<br>");
$sql = "INSERT INTO ss09 SET runner_id='2491',ss_date='2009-12-06',sex='F',age='20',score='22.20055',wh_sc='0',ye_sc='56.790783',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2491 F20 22.20055<br>");
$sql = "INSERT INTO ss09 SET runner_id='2444',ss_date='2009-12-06',sex='F',age='10',score='22.052751',wh_sc='0',ye_sc='49.267508',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2444 F10 22.052751<br>");
$sql = "INSERT INTO ss09 SET runner_id='2414',ss_date='2009-12-06',sex='M',age='60',score='20.417724',wh_sc='0',ye_sc='0',or_sc='36.067788',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2414 M60 20.417724<br>");
$sql = "INSERT INTO ss09 SET runner_id='2412',ss_date='2009-12-06',sex='M',age='21',score='51.773094',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='49.384786',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2412 M21 51.773094<br>");
$sql = "INSERT INTO ss09 SET runner_id='2341',ss_date='2009-12-06',sex='M',age='60',score='18.536405',wh_sc='0',ye_sc='0',or_sc='39.250481',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2341 M60 18.536405<br>");
$sql = "INSERT INTO ss09 SET runner_id='2338',ss_date='2009-12-06',sex='M',age='16',score='25.876725',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2338 M16 25.876725<br>");
$sql = "INSERT INTO ss09 SET runner_id='2312',ss_date='2009-12-06',sex='F',age='8',score='20.154093',wh_sc='60.666488',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2312 F8 20.154093<br>");
$sql = "INSERT INTO ss09 SET runner_id='2303',ss_date='2009-12-06',sex='G',age='2',score='25.107364',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='41.572232',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2303 G2 25.107364<br>");
$sql = "INSERT INTO ss09 SET runner_id='2300',ss_date='2009-12-06',sex='G',age='2',score='17.529807',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2300 G2 17.529807<br>");
$sql = "INSERT INTO ss09 SET runner_id='2275',ss_date='2009-12-06',sex='M',age='21',score='35.614068',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2275 M21 35.614068<br>");
$sql = "INSERT INTO ss09 SET runner_id='2267',ss_date='2009-12-06',sex='M',age='40',score='30.150762',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2267 M40 30.150762<br>");
$sql = "INSERT INTO ss09 SET runner_id='2257',ss_date='2009-12-06',sex='M',age='50',score='19.051001',wh_sc='0',ye_sc='43.728149',or_sc='38.686446',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2257 M50 19.051001<br>");
$sql = "INSERT INTO ss09 SET runner_id='2255',ss_date='2009-12-06',sex='G',age='2',score='37.045934',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2255 G2 37.045934<br>");
$sql = "INSERT INTO ss09 SET runner_id='2254',ss_date='2009-12-06',sex='F',age='16',score='26.205718',wh_sc='0',ye_sc='68.463715',or_sc='42.50962',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2254 F16 26.205718<br>");
$sql = "INSERT INTO ss09 SET runner_id='2227',ss_date='2009-12-06',sex='M',age='40',score='61.513014',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='62.302808',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2227 M40 61.513014<br>");
$sql = "INSERT INTO ss09 SET runner_id='2226',ss_date='2009-12-06',sex='M',age='60',score='25.831412',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2226 M60 25.831412<br>");
$sql = "INSERT INTO ss09 SET runner_id='2207',ss_date='2009-12-06',sex='M',age='21',score='99.471786',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2207 M21 99.471786<br>");
$sql = "INSERT INTO ss09 SET runner_id='2201',ss_date='2009-12-06',sex='M',age='20',score='25.970594',wh_sc='0',ye_sc='0',or_sc='53.412517',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2201 M20 25.970594<br>");
$sql = "INSERT INTO ss09 SET runner_id='2200',ss_date='2009-12-06',sex='M',age='10',score='26.307368',wh_sc='0',ye_sc='63.149294',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2200 M10 26.307368<br>");
$sql = "INSERT INTO ss09 SET runner_id='2198',ss_date='2009-12-06',sex='F',age='40',score='53.182513',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='74.709109',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2198 F40 53.182513<br>");
$sql = "INSERT INTO ss09 SET runner_id='2160',ss_date='2009-12-06',sex='M',age='65',score='45.948866',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='64.161028',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2160 M65 45.948866<br>");
$sql = "INSERT INTO ss09 SET runner_id='2139',ss_date='2009-12-06',sex='M',age='45',score='31.976119',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='59.588273',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2139 M45 31.976119<br>");
$sql = "INSERT INTO ss09 SET runner_id='2122',ss_date='2009-12-06',sex='M',age='55',score='50.976198',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='101.11558',gr_sc='69.462838',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2122 M55 50.976198<br>");
$sql = "INSERT INTO ss09 SET runner_id='2108',ss_date='2009-12-06',sex='M',age='60',score='36.531523',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='36.743889',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2108 M60 36.531523<br>");
$sql = "INSERT INTO ss09 SET runner_id='2056',ss_date='2009-12-06',sex='M',age='60',score='32.584279',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='64.185416',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2056 M60 32.584279<br>");
$sql = "INSERT INTO ss09 SET runner_id='1992',ss_date='2009-12-06',sex='F',age='60',score='23.373625',wh_sc='0',ye_sc='0',or_sc='47.23131',bn_sc='43.931809',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1992 F60 23.373625<br>");
$sql = "INSERT INTO ss09 SET runner_id='1991',ss_date='2009-12-06',sex='M',age='60',score='31.581281',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='66.10117',gr_sc='44.139876',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1991 M60 31.581281<br>");
$sql = "INSERT INTO ss09 SET runner_id='1953',ss_date='2009-12-06',sex='M',age='55',score='52.080094',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='72.132954',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1953 M55 52.080094<br>");
$sql = "INSERT INTO ss09 SET runner_id='1928',ss_date='2009-12-06',sex='M',age='50',score='63.948136',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='82.784576',re_sc='49.11098',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1928 M50 63.948136<br>");
$sql = "INSERT INTO ss09 SET runner_id='1926',ss_date='2009-12-06',sex='M',age='18',score='58.292153',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='69.961325',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1926 M18 58.292153<br>");
$sql = "INSERT INTO ss09 SET runner_id='1925',ss_date='2009-12-06',sex='M',age='16',score='51.167274',wh_sc='0',ye_sc='0',or_sc='99.594925',bn_sc='92.849929',gr_sc='76.937681',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1925 M16 51.167274<br>");
$sql = "INSERT INTO ss09 SET runner_id='1923',ss_date='2009-12-06',sex='M',age='14',score='43.821903',wh_sc='0',ye_sc='113.547667',or_sc='87.265595',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1923 M14 43.821903<br>");
$sql = "INSERT INTO ss09 SET runner_id='1916',ss_date='2009-12-06',sex='F',age='55',score='25.559513',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='48.505171',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1916 F55 25.559513<br>");
$sql = "INSERT INTO ss09 SET runner_id='1879',ss_date='2009-12-06',sex='M',age='50',score='55.475098',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='78.512145',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1879 M50 55.475098<br>");
$sql = "INSERT INTO ss09 SET runner_id='1878',ss_date='2009-12-06',sex='F',age='50',score='28.820201',wh_sc='0',ye_sc='65.659324',or_sc='61.235345',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1878 F50 28.820201<br>");
$sql = "INSERT INTO ss09 SET runner_id='1861',ss_date='2009-12-06',sex='M',age='45',score='25.616758',wh_sc='0',ye_sc='0',or_sc='53.444373',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1861 M45 25.616758<br>");
$sql = "INSERT INTO ss09 SET runner_id='1826',ss_date='2009-12-06',sex='M',age='55',score='35.109601',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='49.739833',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1826 M55 35.109601<br>");
$sql = "INSERT INTO ss09 SET runner_id='1812',ss_date='2009-12-06',sex='F',age='45',score='29.546848',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1812 F45 29.546848<br>");
$sql = "INSERT INTO ss09 SET runner_id='1777',ss_date='2009-12-06',sex='M',age='18',score='65.648089',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='91.689157',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1777 M18 65.648089<br>");
$sql = "INSERT INTO ss09 SET runner_id='1771',ss_date='2009-12-06',sex='F',age='60',score='25.795853',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='42.202794',gr_sc='35.565766',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1771 F60 25.795853<br>");
$sql = "INSERT INTO ss09 SET runner_id='1746',ss_date='2009-12-06',sex='F',age='50',score='38.140824',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='74.213717',gr_sc='54.24501',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1746 F50 38.140824<br>");
$sql = "INSERT INTO ss09 SET runner_id='1720',ss_date='2009-12-06',sex='F',age='60',score='25.397706',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='42.491864',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1720 F60 25.397706<br>");
$sql = "INSERT INTO ss09 SET runner_id='1718',ss_date='2009-12-06',sex='M',age='60',score='50.156757',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='96.894467',gr_sc='71.052384',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1718 M60 50.156757<br>");
$sql = "INSERT INTO ss09 SET runner_id='1676',ss_date='2009-12-06',sex='F',age='55',score='24.282489',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='33.658067',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1676 F55 24.282489<br>");
$sql = "INSERT INTO ss09 SET runner_id='1667',ss_date='2009-12-06',sex='M',age='50',score='38.957322',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='71.16967',gr_sc='55.283905',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1667 M50 38.957322<br>");
$sql = "INSERT INTO ss09 SET runner_id='1620',ss_date='2009-12-06',sex='M',age='50',score='30.381929',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1620 M50 30.381929<br>");
$sql = "INSERT INTO ss09 SET runner_id='1606',ss_date='2009-12-06',sex='M',age='35',score='98.747076',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='98.836128',bl_sc='129.114083'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1606 M35 98.747076<br>");
$sql = "INSERT INTO ss09 SET runner_id='1603',ss_date='2009-12-06',sex='F',age='35',score='69.211935',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='89.498839',re_sc='72.219014',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1603 F35 69.211935<br>");
$sql = "INSERT INTO ss09 SET runner_id='1602',ss_date='2009-12-06',sex='M',age='10',score='35.529163',wh_sc='118.88214',ye_sc='82.629539',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1602 M10 35.529163<br>");
$sql = "INSERT INTO ss09 SET runner_id='1570',ss_date='2009-12-06',sex='M',age='18',score='58.105184',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='83.631217',re_sc='60.991758',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1570 M18 58.105184<br>");
$sql = "INSERT INTO ss09 SET runner_id='1567',ss_date='2009-12-06',sex='M',age='50',score='60.363553',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='88.339755',re_sc='59.806613',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1567 M50 60.363553<br>");
$sql = "INSERT INTO ss09 SET runner_id='1566',ss_date='2009-12-06',sex='F',age='14',score='31.655653',wh_sc='0',ye_sc='0',or_sc='61.542812',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1566 F14 31.655653<br>");
$sql = "INSERT INTO ss09 SET runner_id='1548',ss_date='2009-12-06',sex='F',age='40',score='30.365731',wh_sc='0',ye_sc='0',or_sc='53.772929',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1548 F40 30.365731<br>");
$sql = "INSERT INTO ss09 SET runner_id='1540',ss_date='2009-12-06',sex='M',age='45',score='29.842441',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='42.15287',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1540 M45 29.842441<br>");
$sql = "INSERT INTO ss09 SET runner_id='1519',ss_date='2009-12-06',sex='M',age='50',score='34.896904',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1519 M50 34.896904<br>");
$sql = "INSERT INTO ss09 SET runner_id='1518',ss_date='2009-12-06',sex='F',age='21',score='74.618313',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1518 F21 74.618313<br>");
$sql = "INSERT INTO ss09 SET runner_id='1504',ss_date='2009-12-06',sex='M',age='60',score='37.742953',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='57.360944',re_sc='34.174747',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1504 M60 37.742953<br>");
$sql = "INSERT INTO ss09 SET runner_id='1503',ss_date='2009-12-06',sex='F',age='55',score='19.807134',wh_sc='0',ye_sc='0',or_sc='42.841249',bn_sc='35.465946',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1503 F55 19.807134<br>");
$sql = "INSERT INTO ss09 SET runner_id='1486',ss_date='2009-12-06',sex='M',age='65',score='32.103328',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='59.684027',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1486 M65 32.103328<br>");
$sql = "INSERT INTO ss09 SET runner_id='1480',ss_date='2009-12-06',sex='F',age='21',score='28.104799',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='37.749356',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1480 F21 28.104799<br>");
$sql = "INSERT INTO ss09 SET runner_id='1432',ss_date='2009-12-06',sex='M',age='45',score='78.743985',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='77.528992',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1432 M45 78.743985<br>");
$sql = "INSERT INTO ss09 SET runner_id='1418',ss_date='2009-12-06',sex='F',age='55',score='24.743223',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='46.272367',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1418 F55 24.743223<br>");
$sql = "INSERT INTO ss09 SET runner_id='1417',ss_date='2009-12-06',sex='M',age='60',score='37.663716',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='69.332358',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1417 M60 37.663716<br>");
$sql = "INSERT INTO ss09 SET runner_id='1408',ss_date='2009-12-06',sex='M',age='50',score='53.124611',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1408 M50 53.124611<br>");
$sql = "INSERT INTO ss09 SET runner_id='1398',ss_date='2009-12-06',sex='M',age='45',score='31.613835',wh_sc='0',ye_sc='92.681636',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1398 M45 31.613835<br>");
$sql = "INSERT INTO ss09 SET runner_id='1397',ss_date='2009-12-06',sex='M',age='16',score='55.522471',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='84.069245',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1397 M16 55.522471<br>");
$sql = "INSERT INTO ss09 SET runner_id='1364',ss_date='2009-12-06',sex='M',age='40',score='59.139632',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='59.720321',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1364 M40 59.139632<br>");
$sql = "INSERT INTO ss09 SET runner_id='1318',ss_date='2009-12-06',sex='M',age='50',score='23.986577',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='43.076531',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1318 M50 23.986577<br>");
$sql = "INSERT INTO ss09 SET runner_id='1309',ss_date='2009-12-06',sex='M',age='55',score='27.922129',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='51.131739',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1309 M55 27.922129<br>");
$sql = "INSERT INTO ss09 SET runner_id='1282',ss_date='2009-12-06',sex='F',age='50',score='46.493202',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1282 F50 46.493202<br>");
$sql = "INSERT INTO ss09 SET runner_id='1279',ss_date='2009-12-06',sex='M',age='55',score='42.877028',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='60.206879',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1279 M55 42.877028<br>");
$sql = "INSERT INTO ss09 SET runner_id='1250',ss_date='2009-12-06',sex='M',age='35',score='99.993224',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='100.03588',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1250 M35 99.993224<br>");
$sql = "INSERT INTO ss09 SET runner_id='1246',ss_date='2009-12-06',sex='F',age='50',score='28.414609',wh_sc='0',ye_sc='0',or_sc='56.024103',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1246 F50 28.414609<br>");
$sql = "INSERT INTO ss09 SET runner_id='1238',ss_date='2009-12-06',sex='M',age='55',score='27.934204',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='40.557162',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1238 M55 27.934204<br>");
$sql = "INSERT INTO ss09 SET runner_id='1218',ss_date='2009-12-06',sex='M',age='40',score='83.130035',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='83.645165',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1218 M40 83.130035<br>");
$sql = "INSERT INTO ss09 SET runner_id='1214',ss_date='2009-12-06',sex='M',age='60',score='20.238341',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='37.697748',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1214 M60 20.238341<br>");
$sql = "INSERT INTO ss09 SET runner_id='1198',ss_date='2009-12-06',sex='M',age='65',score='44.88866',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='86.203517',gr_sc='60.722665',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1198 M65 44.88866<br>");
$sql = "INSERT INTO ss09 SET runner_id='1190',ss_date='2009-12-06',sex='M',age='40',score='67.283735',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='69.058266',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1190 M40 67.283735<br>");
$sql = "INSERT INTO ss09 SET runner_id='1189',ss_date='2009-12-06',sex='M',age='70',score='46.811547',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='90.030925',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1189 M70 46.811547<br>");
$sql = "INSERT INTO ss09 SET runner_id='1151',ss_date='2009-12-06',sex='F',age='65',score='21.747144',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='36.711701',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1151 F65 21.747144<br>");
$sql = "INSERT INTO ss09 SET runner_id='1088',ss_date='2009-12-06',sex='M',age='60',score='36.777296',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='51.771405',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1088 M60 36.777296<br>");
$sql = "INSERT INTO ss09 SET runner_id='1034',ss_date='2009-12-06',sex='M',age='70',score='17.243899',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='32.571626',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1034 M70 17.243899<br>");
$sql = "INSERT INTO ss09 SET runner_id='1032',ss_date='2009-12-06',sex='M',age='65',score='20.921056',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='39.231938',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1032 M65 20.921056<br>");
$sql = "INSERT INTO ss09 SET runner_id='1022',ss_date='2009-12-06',sex='M',age='14',score='43.877696',wh_sc='0',ye_sc='79.493783',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1022 M14 43.877696<br>");
$sql = "INSERT INTO ss09 SET runner_id='1017',ss_date='2009-12-06',sex='F',age='45',score='25.677713',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("1017 F45 25.677713<br>");
$sql = "INSERT INTO ss09 SET runner_id='970',ss_date='2009-12-06',sex='F',age='55',score='18.69097',wh_sc='0',ye_sc='0',or_sc='36.678211',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("970 F55 18.69097<br>");
$sql = "INSERT INTO ss09 SET runner_id='969',ss_date='2009-12-06',sex='F',age='21',score='44.893328',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='62.177162',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("969 F21 44.893328<br>");
$sql = "INSERT INTO ss09 SET runner_id='958',ss_date='2009-12-06',sex='M',age='45',score='15.552164',wh_sc='0',ye_sc='40.072507',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("958 M45 15.552164<br>");
$sql = "INSERT INTO ss09 SET runner_id='949',ss_date='2009-12-06',sex='F',age='45',score='15.017849',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("949 F45 15.017849<br>");
$sql = "INSERT INTO ss09 SET runner_id='899',ss_date='2009-12-06',sex='M',age='60',score='47.029227',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='41.049315',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("899 M60 47.029227<br>");
$sql = "INSERT INTO ss09 SET runner_id='862',ss_date='2009-12-06',sex='M',age='21',score='37.352312',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("862 M21 37.352312<br>");
$sql = "INSERT INTO ss09 SET runner_id='799',ss_date='2009-12-06',sex='M',age='45',score='69.772638',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='69.237047',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("799 M45 69.772638<br>");
$sql = "INSERT INTO ss09 SET runner_id='798',ss_date='2009-12-06',sex='M',age='60',score='32.708198',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='61.018586',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("798 M60 32.708198<br>");
$sql = "INSERT INTO ss09 SET runner_id='797',ss_date='2009-12-06',sex='F',age='55',score='42.627445',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='57.770803',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("797 F55 42.627445<br>");
$sql = "INSERT INTO ss09 SET runner_id='796',ss_date='2009-12-06',sex='M',age='60',score='27.603508',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("796 M60 27.603508<br>");
$sql = "INSERT INTO ss09 SET runner_id='784',ss_date='2009-12-06',sex='F',age='50',score='18.002915',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("784 F50 18.002915<br>");
$sql = "INSERT INTO ss09 SET runner_id='783',ss_date='2009-12-06',sex='F',age='70',score='22.289049',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='43.834067',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("783 F70 22.289049<br>");
$sql = "INSERT INTO ss09 SET runner_id='767',ss_date='2009-12-06',sex='M',age='40',score='63.083283',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='55.217181',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("767 M40 63.083283<br>");
$sql = "INSERT INTO ss09 SET runner_id='748',ss_date='2009-12-06',sex='M',age='10',score='21.943194',wh_sc='0',ye_sc='52.47701',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("748 M10 21.943194<br>");
$sql = "INSERT INTO ss09 SET runner_id='743',ss_date='2009-12-06',sex='M',age='50',score='39.485811',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='69.99531',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("743 M50 39.485811<br>");
$sql = "INSERT INTO ss09 SET runner_id='673',ss_date='2009-12-06',sex='M',age='45',score='35.878395',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("673 M45 35.878395<br>");
$sql = "INSERT INTO ss09 SET runner_id='667',ss_date='2009-12-06',sex='M',age='55',score='29.54171',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='57.019292',gr_sc='41.292713',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("667 M55 29.54171<br>");
$sql = "INSERT INTO ss09 SET runner_id='666',ss_date='2009-12-06',sex='F',age='55',score='29.489229',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='53.88692',gr_sc='41.149573',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("666 F55 29.489229<br>");
$sql = "INSERT INTO ss09 SET runner_id='637',ss_date='2009-12-06',sex='M',age='10',score='27.306526',wh_sc='83.245301',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("637 M10 27.306526<br>");
$sql = "INSERT INTO ss09 SET runner_id='636',ss_date='2009-12-06',sex='F',age='35',score='45.629954',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='63.451661',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("636 F35 45.629954<br>");
$sql = "INSERT INTO ss09 SET runner_id='634',ss_date='2009-12-06',sex='M',age='40',score='47.677633',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='89.360059',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("634 M40 47.677633<br>");
$sql = "INSERT INTO ss09 SET runner_id='633',ss_date='2009-12-06',sex='M',age='16',score='29.797026',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("633 M16 29.797026<br>");
$sql = "INSERT INTO ss09 SET runner_id='630',ss_date='2009-12-06',sex='M',age='40',score='27.24361',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("630 M40 27.24361<br>");
$sql = "INSERT INTO ss09 SET runner_id='626',ss_date='2009-12-06',sex='M',age='21',score='71.083528',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='73.024666',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("626 M21 71.083528<br>");
$sql = "INSERT INTO ss09 SET runner_id='616',ss_date='2009-12-06',sex='M',age='16',score='24.880775',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='47.736864',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("616 M16 24.880775<br>");
$sql = "INSERT INTO ss09 SET runner_id='615',ss_date='2009-12-06',sex='F',age='10',score='32.261118',wh_sc='97.872559',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("615 F10 32.261118<br>");
$sql = "INSERT INTO ss09 SET runner_id='614',ss_date='2009-12-06',sex='F',age='50',score='46.898024',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='66.29727',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("614 F50 46.898024<br>");
$sql = "INSERT INTO ss09 SET runner_id='613',ss_date='2009-12-06',sex='M',age='50',score='57.371926',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='81.012047',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("613 M50 57.371926<br>");
$sql = "INSERT INTO ss09 SET runner_id='606',ss_date='2009-12-06',sex='M',age='21',score='44.036038',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("606 M21 44.036038<br>");
$sql = "INSERT INTO ss09 SET runner_id='601',ss_date='2009-12-06',sex='M',age='60',score='33.976875',wh_sc='0',ye_sc='93.770696',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("601 M60 33.976875<br>");
$sql = "INSERT INTO ss09 SET runner_id='600',ss_date='2009-12-06',sex='M',age='35',score='22.721459',wh_sc='67.933389',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("600 M35 22.721459<br>");
$sql = "INSERT INTO ss09 SET runner_id='568',ss_date='2009-12-06',sex='F',age='55',score='21.208894',wh_sc='0',ye_sc='0',or_sc='42.265816',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("568 F55 21.208894<br>");
$sql = "INSERT INTO ss09 SET runner_id='567',ss_date='2009-12-06',sex='M',age='55',score='56.451682',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='77.521477',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("567 M55 56.451682<br>");
$sql = "INSERT INTO ss09 SET runner_id='563',ss_date='2009-12-06',sex='F',age='55',score='54.777924',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("563 F55 54.777924<br>");
$sql = "INSERT INTO ss09 SET runner_id='545',ss_date='2009-12-06',sex='M',age='21',score='77.217766',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='77.412641',bl_sc='100.352213'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("545 M21 77.217766<br>");
$sql = "INSERT INTO ss09 SET runner_id='522',ss_date='2009-12-06',sex='F',age='50',score='27.573074',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='59.527751',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("522 F50 27.573074<br>");
$sql = "INSERT INTO ss09 SET runner_id='499',ss_date='2009-12-06',sex='M',age='50',score='39.432363',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='55.817014',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("499 M50 39.432363<br>");
$sql = "INSERT INTO ss09 SET runner_id='494',ss_date='2009-12-06',sex='M',age='55',score='43.024168',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("494 M55 43.024168<br>");
$sql = "INSERT INTO ss09 SET runner_id='463',ss_date='2009-12-06',sex='M',age='45',score='30.826536',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='61.417752',gr_sc='42.310231',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("463 M45 30.826536<br>");
$sql = "INSERT INTO ss09 SET runner_id='428',ss_date='2009-12-06',sex='M',age='50',score='40.550248',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='74.422256',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("428 M50 40.550248<br>");
$sql = "INSERT INTO ss09 SET runner_id='418',ss_date='2009-12-06',sex='M',age='60',score='45.121914',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='66.204599',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("418 M60 45.121914<br>");
$sql = "INSERT INTO ss09 SET runner_id='376',ss_date='2009-12-06',sex='M',age='50',score='65.550824',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='64.441303',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("376 M50 65.550824<br>");
$sql = "INSERT INTO ss09 SET runner_id='366',ss_date='2009-12-06',sex='M',age='50',score='29.975019',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("366 M50 29.975019<br>");
$sql = "INSERT INTO ss09 SET runner_id='303',ss_date='2009-12-06',sex='M',age='55',score='25.299351',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("303 M55 25.299351<br>");
$sql = "INSERT INTO ss09 SET runner_id='270',ss_date='2009-12-06',sex='M',age='50',score='78.342679',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='109.771679',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("270 M50 78.342679<br>");
$sql = "INSERT INTO ss09 SET runner_id='269',ss_date='2009-12-06',sex='F',age='14',score='35.682568',wh_sc='0',ye_sc='0',or_sc='72.589424',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("269 F14 35.682568<br>");
$sql = "INSERT INTO ss09 SET runner_id='267',ss_date='2009-12-06',sex='F',age='18',score='67.616005',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='69.426599',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("267 F18 67.616005<br>");
$sql = "INSERT INTO ss09 SET runner_id='255',ss_date='2009-12-06',sex='M',age='20',score='35.776582',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("255 M20 35.776582<br>");
$sql = "INSERT INTO ss09 SET runner_id='254',ss_date='2009-12-06',sex='F',age='55',score='21.073572',wh_sc='0',ye_sc='56.498931',or_sc='39.547023',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("254 F55 21.073572<br>");
$sql = "INSERT INTO ss09 SET runner_id='253',ss_date='2009-12-06',sex='M',age='40',score='35.427908',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='51.255136',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("253 M40 35.427908<br>");
$sql = "INSERT INTO ss09 SET runner_id='248',ss_date='2009-12-06',sex='M',age='60',score='52.349767',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='101.989953',gr_sc='69.365249',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("248 M60 52.349767<br>");
$sql = "INSERT INTO ss09 SET runner_id='226',ss_date='2009-12-06',sex='M',age='80',score='23.946866',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='38.11569',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("226 M80 23.946866<br>");
$sql = "INSERT INTO ss09 SET runner_id='176',ss_date='2009-12-06',sex='M',age='55',score='69.581477',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='98.539164',re_sc='65.663552',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("176 M55 69.581477<br>");
$sql = "INSERT INTO ss09 SET runner_id='169',ss_date='2009-12-06',sex='M',age='60',score='27.113755',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='37.952235',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("169 M60 27.113755<br>");
$sql = "INSERT INTO ss09 SET runner_id='162',ss_date='2009-12-06',sex='M',age='35',score='53.015616',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='52.833483',bl_sc='70.533704'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("162 M35 53.015616<br>");
$sql = "INSERT INTO ss09 SET runner_id='131',ss_date='2009-12-06',sex='M',age='40',score='100.53499',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='101.127992',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("131 M40 100.53499<br>");
$sql = "INSERT INTO ss09 SET runner_id='100',ss_date='2009-12-06',sex='F',age='16',score='28.864572',wh_sc='0',ye_sc='61.27039',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("100 F16 28.864572<br>");
$sql = "INSERT INTO ss09 SET runner_id='96',ss_date='2009-12-06',sex='M',age='55',score='42.331373',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='59.854952',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("96 M55 42.331373<br>");
$sql = "INSERT INTO ss09 SET runner_id='87',ss_date='2009-12-06',sex='M',age='16',score='57.896699',wh_sc='0',ye_sc='0',or_sc='113.13948',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("87 M16 57.896699<br>");
$sql = "INSERT INTO ss09 SET runner_id='86',ss_date='2009-12-06',sex='M',age='50',score='44.235284',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='43.204963',bl_sc='51.583601'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("86 M50 44.235284<br>");
$sql = "INSERT INTO ss09 SET runner_id='69',ss_date='2009-12-06',sex='M',age='45',score='52.128785',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='66.26657',re_sc='53.656824',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("69 M45 52.128785<br>");
$sql = "INSERT INTO ss09 SET runner_id='48',ss_date='2009-12-06',sex='M',age='50',score='37.851218',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='53.004847',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("48 M50 37.851218<br>");
$sql = "INSERT INTO ss09 SET runner_id='30',ss_date='2009-12-06',sex='F',age='35',score='35.154296',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='49.611709',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("30 F35 35.154296<br>");
$sql = "INSERT INTO ss09 SET runner_id='29',ss_date='2009-12-06',sex='M',age='35',score='50.410519',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='71.057547',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("29 M35 50.410519<br>");
$sql = "INSERT INTO ss09 SET runner_id='28',ss_date='2009-12-06',sex='M',age='45',score='44.686573',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='44.605745',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("28 M45 44.686573<br>");
$sql = "INSERT INTO ss09 SET runner_id='14',ss_date='2009-12-06',sex='F',age='35',score='41.799241',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("14 F35 41.799241<br>");
$sql = "INSERT INTO ss09 SET runner_id='13',ss_date='2009-12-06',sex='M',age='45',score='68.015284',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='71.205679',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("13 M45 68.015284<br>");
$sql = "INSERT INTO ss09 SET runner_id='12',ss_date='2009-12-06',sex='M',age='20',score='86.07347',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='0',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("12 M20 86.07347<br>");
$sql = "INSERT INTO ss09 SET runner_id='2',ss_date='2009-12-06',sex='F',age='45',score='45.115632',wh_sc='0',ye_sc='0',or_sc='0',bn_sc='0',gr_sc='64.057202',re_sc='0',bl_sc='0'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("2 F45 45.115632<br>");
mysql_close($dbh);
?>
</body>
</html>
