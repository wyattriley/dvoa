<html>
<head>
<title>DVOA Course Table</title>
</head><body>
<h1>Creating table - course09</h1>
<?php
$dbh = mysql_connect("localhost", "dvoa_kent", "5215");
mysql_select_db("dvoa_db_rank");
$sql = "TRUNCATE course09";
$rs = mysql_query($sql)
	or die("SQL ERROR: $sql failed<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('SEE011809W','SEE011809',10,2.0,50.0,10,1054.767316,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("SEE011809W<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('SEE011809Y','SEE011809',20,2.3,70.0,12,1077.879433,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("SEE011809Y<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('SEE011809O','SEE011809',30,3.9,145.0,13,2860.804583,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("SEE011809O<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('SEE011809Bn','SEE011809',40,3.6,110.0,15,2134.936798,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("SEE011809Bn<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('SEE011809G','SEE011809',50,4.5,180.0,20,2597.719467,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("SEE011809G<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('SEE011809R','SEE011809',60,5.6,260.0,24,3771.257221,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("SEE011809R<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('NOL022809W','NOL022809',10,1.5,30.0,8,900.952422,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("NOL022809W<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('PKP030809W','PKP030809',10,2.5,8.0,12,0.0,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("PKP030809W<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('PKP030809Y','PKP030809',20,3.6,13.0,11,1583.793806,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("PKP030809Y<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('PKP030809O','PKP030809',30,4.7,25.0,12,2215.364853,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("PKP030809O<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('PKP030809Bn','PKP030809',40,3.9,20.0,11,2551.669874,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("PKP030809Bn<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('PKP030809G','PKP030809',50,5.5,35.0,15,3380.467777,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("PKP030809G<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('PKP030809R','PKP030809',60,8.4,35.0,19,5509.392892,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("PKP030809R<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('PKP030809Bl','PKP030809',70,11.4,82.0,27,6833.446923,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("PKP030809Bl<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('WCC031509W','WCC031509',10,2.8,80.0,11,1788.773949,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("WCC031509W<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('WCC031509Y','WCC031509',20,3.4,125.0,12,1893.519282,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("WCC031509Y<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('WCC031509O','WCC031509',30,4.5,180.0,14,2649.241966,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("WCC031509O<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('WCC031509Bn','WCC031509',40,3.8,170.0,13,2348.352255,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("WCC031509Bn<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('WCC031509G','WCC031509',50,6.0,220.0,17,3923.852449,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("WCC031509G<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('WCC031509R','WCC031509',60,7.8,270.0,23,5365.352257,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("WCC031509R<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('WWK032209W','WWK032209',10,1.9,45.0,11,654.966469,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("WWK032209W<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('HCK040409Bn','HCK040409',40,3.55,155.0,8,2608.474546,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("HCK040409Bn<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('HKR032209O','HKR032209',30,3.1,105.0,11,2684.541602,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("HKR032209O<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('HKR032209GY','HKR032209',52,3.7,105.0,11,3257.422477,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("HKR032209GY<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('HKR032209GX','HKR032209',51,4.25,115.0,12,3425.260237,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("HKR032209GX<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('HKR032209R','HKR032209',60,7.5,215.0,22,5624.32769,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("HKR032209R<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('HKR032209W','HKR032209',10,1.9,45.0,11,877.065176,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("HKR032209W<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('HCK040409O','HCK040409',30,4.34,140.0,8,1919.843146,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("HCK040409O<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('HCK040409W','HCK040409',10,2.3,90.0,8,1205.933103,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("HCK040409W<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('ROC040509W','ROC040509',10,2.6,80.0,7,0.0,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("ROC040509W<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('ROC040509Y','ROC040509',20,3.1,105.0,7,0.0,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("ROC040509Y<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('ROC040509O','ROC040509',30,4.3,170.0,8,0.0,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("ROC040509O<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('ROC040509G','ROC040509',50,6.1,255.0,13,0.0,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("ROC040509G<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('ROC040509R','ROC040509',60,6.7,250.0,14,0.0,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("ROC040509R<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('ROD041109R','ROD041109',60,7.8,255.0,16,5718.017947,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("ROD041109R<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('ROD041109G','ROD041109',50,6.3,185.0,14,4960.275472,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("ROD041109G<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('ROD041109Bn','ROD041109',40,4.2,140.0,10,2600.000356,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("ROD041109Bn<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('ROD041109O','ROD041109',30,4.8,150.0,12,2623.328178,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("ROD041109O<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('ROD041109Y','ROD041109',20,3.5,80.0,10,1358.732456,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("ROD041109Y<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('ROD041109W','ROD041109',10,2.5,65.0,8,826.671179,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("ROD041109W<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('RID041909W','RID041909',10,2.7,70.0,6,2717.436457,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("RID041909W<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('RID041909Y','RID041909',20,3.1,115.0,6,2028.894357,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("RID041909Y<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('RID041909O','RID041909',30,4.6,210.0,9,2353.774729,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("RID041909O<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('RID041909Bn','RID041909',40,4.3,210.0,8,2343.528075,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("RID041909Bn<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('RID041909G','RID041909',50,6.8,295.0,12,4037.253877,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("RID041909G<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('RID041909R','RID041909',60,8.2,275.0,13,4841.598047,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("RID041909R<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('FRH042609R','FRH042609',60,7.9,250.0,14,4809.735417,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("FRH042609R<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('FRH042609Bn','FRH042609',40,3.9,115.0,8,2086.917545,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("FRH042609Bn<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('FRH042609Y','FRH042609',20,3.5,110.0,8,2166.415101,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("FRH042609Y<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('FRH042609Bl','FRH042609',70,10.7,305.0,20,7019.475621,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("FRH042609Bl<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('FRH042609G','FRH042609',50,5.6,145.0,12,3141.296502,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("FRH042609G<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('FRH042609O','FRH042609',30,4.2,110.0,8,2374.562458,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("FRH042609O<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('FRH042609W','FRH042609',10,2.8,85.0,8,1242.912308,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("FRH042609W<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('FTW053109R','FTW053109',60,7.4,250.0,25,4728.362988,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("FTW053109R<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('FTW053109Y','FTW053109',20,3.5,95.0,14,1673.728985,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("FTW053109Y<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('FTW053109Bn','FTW053109',40,4.4,90.0,16,2302.718005,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("FTW053109Bn<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('FCC050309Bl','FCC050309',70,8.99,185.0,16,6259.570338,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("FCC050309Bl<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('FCC050309R','FCC050309',60,6.92,235.0,12,4324.99294,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("FCC050309R<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('FCC050309G','FCC050309',50,5.36,125.0,12,3301.007388,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("FCC050309G<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('FCC050309Bn','FCC050309',40,4.49,150.0,11,2796.58227,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("FCC050309Bn<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('FCC050309O','FCC050309',30,5.15,160.0,10,3372.412594,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("FCC050309O<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('FCC050309Y','FCC050309',20,3.77,50.0,9,2080.291107,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("FCC050309Y<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('FCC050309W','FCC050309',10,2.14,90.0,8,0.0,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("FCC050309W<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('RTG050909W','RTG050909',10,2.4,21.0,11,2411.566865,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("RTG050909W<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('RTG050909Y','RTG050909',20,2.7,18.0,11,1159.68259,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("RTG050909Y<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('RTG050909O','RTG050909',30,4.6,66.0,10,3484.737146,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("RTG050909O<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('RTG050909Bn','RTG050909',40,4.0,33.0,10,2801.96651,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("RTG050909Bn<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('RTG050909G','RTG050909',50,5.8,87.0,12,3785.650806,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("RTG050909G<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('RTG050909R','RTG050909',60,6.3,81.0,11,3511.097208,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("RTG050909R<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('STP051709W','STP051709',10,2.9,110.0,10,1069.040108,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("STP051709W<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('STP051709Y','STP051709',20,3.0,135.0,10,2106.713284,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("STP051709Y<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('STP051709O','STP051709',30,4.6,160.0,8,3513.605203,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("STP051709O<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('STP051709Bn','STP051709',40,3.5,135.0,9,2974.578245,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("STP051709Bn<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('STP051709G','STP051709',50,4.9,165.0,9,4232.824162,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("STP051709G<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('STP051709R','STP051709',60,7.6,285.0,13,6039.584269,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("STP051709R<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('STP051709Bl','STP051709',70,9.8,330.0,18,7783.199292,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("STP051709Bl<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('FTW053109G','FTW053109',50,5.8,135.0,19,3207.688736,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("FTW053109G<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('FTW053109O','FTW053109',30,4.5,105.0,15,2140.612287,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("FTW053109O<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('FTW053109W','FTW053109',10,2.8,45.0,12,1237.527403,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("FTW053109W<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('DEL062009W','DEL062009',10,2.2,55.0,11,1760.997478,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("DEL062009W<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('DEL062009Y','DEL062009',20,3.3,105.0,13,2153.864757,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("DEL062009Y<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('DEL062009O','DEL062009',30,4.1,125.0,19,3620.652909,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("DEL062009O<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('DEL062009Bn','DEL062009',40,3.6,120.0,15,2961.715243,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("DEL062009Bn<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('DEL062009G','DEL062009',50,4.6,155.0,16,4256.306361,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("DEL062009G<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('DEL062009R','DEL062009',60,6.0,185.0,23,5356.872375,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("DEL062009R<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('GRL062109W','GRL062109',10,3.2,60.0,11,0.0,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("GRL062109W<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('GRL062109O','GRL062109',30,3.1,95.0,11,0.0,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("GRL062109O<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('GRL062109G','GRL062109',50,5.1,110.0,15,0.0,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("GRL062109G<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('FCE071209Bl','FCE071209',70,10.6,190.0,17,11300.215511,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("FCE071209Bl<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('FCE071209R','FCE071209',60,7.7,180.0,13,8637.271877,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("FCE071209R<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('FCE071209G','FCE071209',50,5.2,80.0,10,5705.940023,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("FCE071209G<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('FCE071209Bn','FCE071209',40,3.5,65.0,8,3808.700828,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("FCE071209Bn<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('FCE071209O','FCE071209',30,4.2,110.0,9,3738.729407,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("FCE071209O<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('FCE071209Y','FCE071209',20,3.8,65.0,9,2172.405352,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("FCE071209Y<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('FCE071209W','FCE071209',10,2.5,25.0,10,798.583931,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("FCE071209W<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('HKR072609W','HKR072609',10,2.3,45.0,15,1181.928122,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("HKR072609W<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('HKR072609Y','HKR072609',20,2.6,60.0,14,1155.126817,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("HKR072609Y<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('HKR072609O','HKR072609',30,3.5,95.0,13,2129.569447,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("HKR072609O<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('HKR072609Bn','HKR072609',40,3.5,120.0,10,3229.967197,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("HKR072609Bn<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('HKR072609G','HKR072609',50,4.8,140.0,11,3902.364712,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("HKR072609G<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('HKR072609R','HKR072609',60,6.9,200.0,18,4911.483059,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("HKR072609R<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('HKR072609Bl','HKR072609',70,9.0,295.0,22,6826.39814,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("HKR072609Bl<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('MTP080209O','MTP080209',30,4.2,175.0,10,3704.035046,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("MTP080209O<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('MTP080209Y','MTP080209',20,2.6,95.0,11,1084.587285,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("MTP080209Y<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('MTP080209W','MTP080209',10,2.5,95.0,10,2484.242491,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("MTP080209W<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('MTP080209Bn','MTP080209',40,3.9,155.0,10,2858.746409,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("MTP080209Bn<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('MTP080209G','MTP080209',50,5.3,185.0,12,3681.107393,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("MTP080209G<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('MTP080209R','MTP080209',60,7.2,270.0,15,5605.952719,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("MTP080209R<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('VFF083009W','VFF083009',10,2.1,0.0,8,888.641128,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("VFF083009W<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('VFF083009Y','VFF083009',20,3.0,0.0,11,1436.817069,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("VFF083009Y<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('VFF083009O','VFF083009',30,4.0,0.0,16,1874.712454,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("VFF083009O<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('VFF083009Bn','VFF083009',40,3.0,0.0,11,1841.575349,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("VFF083009Bn<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('VFF083009G','VFF083009',50,5.7,0.0,15,3257.1604,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("VFF083009G<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('VFF083009R','VFF083009',60,9.1,0.0,20,5126.16301,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("VFF083009R<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('SEE090509W','SEE090509',10,2.3,70.0,12,773.376067,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("SEE090509W<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('SEE090509Y','SEE090509',20,2.3,80.0,12,1310.607056,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("SEE090509Y<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('HKR091309W','HKR091309',10,2.2,0.0,14,882.91284,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("HKR091309W<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('HKR091309Y','HKR091309',20,2.5,0.0,15,1744.697143,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("HKR091309Y<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('HKR091309O','HKR091309',30,3.7,0.0,9,2497.781174,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("HKR091309O<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('HKR091309Bn','HKR091309',40,3.6,0.0,10,3719.58287,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("HKR091309Bn<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('HKR091309G','HKR091309',50,4.9,0.0,12,4375.89065,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("HKR091309G<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('HKR091309R','HKR091309',60,6.3,0.0,15,5119.492108,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("HKR091309R<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('DBN092009W','DBN092009',10,2.3,0.0,11,824.386586,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("DBN092009W<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('BRN092709W','BRN092709',10,3.0,70.0,13,1402.349715,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("BRN092709W<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('BRN092709Y','BRN092709',20,3.3,130.0,10,1852.49314,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("BRN092709Y<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('BRN092709O','BRN092709',30,4.0,135.0,11,3671.025624,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("BRN092709O<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('BRN092709Bn','BRN092709',40,3.5,115.0,9,3384.782429,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("BRN092709Bn<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('BRN092709G','BRN092709',50,4.9,195.0,12,4401.540008,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("BRN092709G<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('BRN092709R','BRN092709',60,7.6,295.0,16,6818.504137,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("BRN092709R<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('BRN092709Bl','BRN092709',70,10.4,345.0,20,9262.133464,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("BRN092709Bl<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('FCE100409W','FCE100409',10,2.0,40.0,8,1004.36044,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("FCE100409W<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('FCE100409Y','FCE100409',20,3.4,125.0,10,1843.256887,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("FCE100409Y<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('FCE100409O','FCE100409',30,4.5,145.0,13,3302.036621,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("FCE100409O<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('FCE100409Bn','FCE100409',40,3.5,100.0,11,2605.095358,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("FCE100409Bn<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('FCE100409G','FCE100409',50,5.4,175.0,16,4195.32055,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("FCE100409G<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('FCE100409R','FCE100409',60,7.2,265.0,21,6114.547199,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("FCE100409R<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('FCE100409Bl','FCE100409',70,10.0,390.0,24,8713.275143,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("FCE100409Bl<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('WWK101109W','WWK101109',10,2.6,50.0,11,1001.218919,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("WWK101109W<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('WWK101109Y','WWK101109',20,3.3,110.0,10,1326.052759,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("WWK101109Y<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('WWK101109O','WWK101109',30,4.2,145.0,11,2349.427458,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("WWK101109O<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('WWK101109Bn','WWK101109',40,3.8,140.0,10,2520.711149,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("WWK101109Bn<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('WWK101109G','WWK101109',50,5.5,150.0,15,3622.445171,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("WWK101109G<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('WWK101109R','WWK101109',60,7.2,150.0,17,4504.606527,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("WWK101109R<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('QHL101809R','QHL101809',60,9.2,220.0,29,5638.604211,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("QHL101809R<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('QHL101809G','QHL101809',50,5.5,110.0,16,3513.655694,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("QHL101809G<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('QHL101809O','QHL101809',30,4.2,60.0,14,2850.748497,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("QHL101809O<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('QHL101809Bn','QHL101809',40,3.8,110.0,13,3042.013433,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("QHL101809Bn<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('QHL101809YY','QHL101809',22,3.6,50.0,13,0.0,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("QHL101809YY<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('QHL101809YX','QHL101809',21,3.1,40.0,10,0.0,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("QHL101809YX<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('QHL101809W','QHL101809',10,2.6,40.0,10,0.0,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("QHL101809W<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('HIB102509W','HIB102509',10,2.3,33.0,9,808.997231,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("HIB102509W<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('HIB102509Y','HIB102509',20,3.6,75.0,12,1569.441712,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("HIB102509Y<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('HIB102509O','HIB102509',30,4.8,80.0,12,2714.150613,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("HIB102509O<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('HIB102509Bn','HIB102509',40,3.1,33.0,10,2334.020971,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("HIB102509Bn<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('HIB102509G','HIB102509',50,6.5,170.0,15,3871.44168,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("HIB102509G<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('HIB102509R','HIB102509',60,8.3,200.0,17,5006.485584,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("HIB102509R<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('DEL110809W','DEL110809',10,2.2,55.0,11,1234.671959,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("DEL110809W<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('DEL110809Y','DEL110809',20,3.3,105.0,13,1467.748243,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("DEL110809Y<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('DEL110809O','DEL110809',30,4.1,125.0,19,2419.32437,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("DEL110809O<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('DEL110809Bn','DEL110809',40,3.6,120.0,15,2563.196342,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("DEL110809Bn<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('DEL110809G','DEL110809',50,4.6,155.0,16,3301.183271,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("DEL110809G<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('DEL110809R','DEL110809',60,6.0,185.0,23,4148.442923,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("DEL110809R<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('WSX103109R','WSX103109',60,6.4,150.0,19,4050.622548,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("WSX103109R<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('WSX103109G','WSX103109',50,4.4,95.0,13,2321.690504,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("WSX103109G<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('WSX103109Bn','WSX103109',40,3.4,75.0,9,2063.978421,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("WSX103109Bn<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('WSX103109O','WSX103109',30,4.2,80.0,8,2058.692564,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("WSX103109O<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('WSX103109Y','WSX103109',20,3.2,90.0,11,1655.1479,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("WSX103109Y<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('WSX103109W','WSX103109',10,2.4,45.0,12,0.0,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("WSX103109W<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('ORR111509W','ORR111509',10,1.7,0.0,9,928.535221,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("ORR111509W<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('ORR111509Y','ORR111509',20,2.8,0.0,10,1377.836126,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("ORR111509Y<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('ORR111509O','ORR111509',30,3.2,0.0,8,2034.751234,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("ORR111509O<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('ORR111509Bn','ORR111509',40,3.6,0.0,8,2566.36801,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("ORR111509Bn<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('ORR111509G','ORR111509',50,5.0,0.0,9,2980.074914,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("ORR111509G<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('ORR111509R','ORR111509',60,7.9,0.0,13,5037.80863,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("ORR111509R<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('ORR111509Bl','ORR111509',70,10.5,0.0,12,6435.796168,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("ORR111509Bl<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('RTG111509Y','RTG111509',20,3.5,24.0,11,782.265982,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("RTG111509Y<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('RTG111509O','RTG111509',30,4.6,48.0,10,2395.218269,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("RTG111509O<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('RTG111509G','RTG111509',50,5.9,52.0,13,4536.317756,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("RTG111509G<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('RTG111509W','RTG111509',10,2.5,18.0,9,2966.429472,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("RTG111509W<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('QHL112209W','QHL112209',10,1.9,55.0,13,765.774051,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("QHL112209W<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('QHL112209Y','QHL112209',20,2.8,80.0,13,992.231316,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("QHL112209Y<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('QHL112209O','QHL112209',30,4.3,130.0,13,1710.436466,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("QHL112209O<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('QHL112209Bn','QHL112209',40,3.4,90.0,10,1745.345538,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("QHL112209Bn<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('QHL112209G','QHL112209',50,5.2,152.0,14,2627.674653,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("QHL112209G<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('QHL112209R','QHL112209',60,8.0,227.0,20,4191.591497,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("QHL112209R<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('HSH120609W','HSH120609',10,1.8,35.0,9,651.130235,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("HSH120609W<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('HSH120609Y','HSH120609',20,2.5,60.0,11,1327.537355,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("HSH120609Y<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('HSH120609O','HSH120609',30,4.3,125.0,13,2561.341856,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("HSH120609O<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('HSH120609Bn','HSH120609',40,3.5,95.0,11,2336.541271,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("HSH120609Bn<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('HSH120609G','HSH120609',50,5.3,160.0,16,3687.738343,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("HSH120609G<br>");
$sql = "INSERT INTO course09 (course_id, event_id, color, dist, elev, ctrls, top3avg, diff_rating) VALUES('HSH120609R','HSH120609',60,7.0,200.0,21,4853.261316,0.0)";
$rs = mysql_query($sql)
  or die("SQL ERROR: $sql failed");
printf("HSH120609R<br>");
mysql_close($dbh);
?>
</body>
</html>
