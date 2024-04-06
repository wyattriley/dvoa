<html>
<head>
<title>DVOA Event Table</title>
</head><body>
<h1>Creating table - event</h1>
<?php
$dbh = mysql_connect("localhost", "dvoa_kent", "5215");
mysql_select_db("dvoa_db_rank");
$sql = "TRUNCATE event09";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
$sql = "INSERT INTO event09 SET event_id='SEE011809',name='Schuylkill Environmental Center',short_name='SchuylkillCenter',event_date='2009-01-18',director='Dave Urban',codirector='null',design='Sandy Fillebrown',codesign='null',red_factor='1',notes='',label1='',text1='',label2='',text2='',html='',url='null',rg_lnk='http://www.dvoa.org/cgi-bin/gadget/reitti.cgi?act=map&id=76&kieli=',splt_lnk1='http://www.dvoa.org/events/results/html/rslt09/see0118splits.html',splt_txt1='Split Times',splt_lnk2='',splt_txt2='',splt_lnk3='',splt_txt3='',x_lnk1='http://www.dvoa.org/events/results/html/rslt09/see0118sprint.html',x_txt1='Sprint Results',x_lnk2='',x_txt2='',x_lnk3='',x_txt3='',x_lnk4='',x_txt4='',x_lnk5='',x_txt5=''";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("Schuylkill Environmental Center, 2009-01-18<br>");
$sql = "INSERT INTO event09 SET event_id='',name='The Willows',short_name='The Willows Scor',event_date='2009-01-25',director='Tim Walsh',codirector='null',design='Tim Walsh',codesign='null',red_factor='null',notes='',label1='',text1='',label2='',text2='',html='Y',url='http://www.dvoa.org/events/results/html/rslt09/wil0125.html',rg_lnk='',splt_lnk1='',splt_txt1='',splt_lnk2='',splt_txt2='',splt_lnk3='',splt_txt3='',x_lnk1='',x_txt1='',x_lnk2='',x_txt2='',x_lnk3='',x_txt3='',x_lnk4='',x_txt4='',x_lnk5='',x_txt5=''";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("The Willows, 2009-01-25<br>");
$sql = "INSERT INTO event09 SET event_id='NOL022809',name='Nolde Environmental Center',short_name='Nolde',event_date='2009-02-28',director='Mark Fank',codirector='null',design='Mark Frank',codesign='null',red_factor='null',notes='',label1='',text1='',label2='',text2='',html='',url='null',rg_lnk='',splt_lnk1='',splt_txt1='',splt_lnk2='',splt_txt2='',splt_lnk3='',splt_txt3='',x_lnk1='',x_txt1='',x_lnk2='',x_txt2='',x_lnk3='',x_txt3='',x_lnk4='',x_txt4='',x_lnk5='',x_txt5=''";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("Nolde Environmental Center, 2009-02-28<br>");
$sql = "INSERT INTO event09 SET event_id='PKP030809',name='Pakim Pond',short_name='Pakim Pond',event_date='2009-03-08',director='Bob Burg',codirector='null',design='Bob Burg',codesign='null',red_factor='1',notes='',label1='',text1='',label2='',text2='',html='',url='null',rg_lnk='',splt_lnk1='http://www.dvoa.org/events/results/html/rslt09/pkp0308splits.html',splt_txt1='Pakim Pond Splits',splt_lnk2='http://www.dvoa.org/events/results/html/rslt09/pkp0308sprint.html',splt_txt2='Sprint-O Results',splt_lnk3='',splt_txt3='',x_lnk1='',x_txt1='',x_lnk2='',x_txt2='',x_lnk3='',x_txt3='',x_lnk4='',x_txt4='',x_lnk5='',x_txt5=''";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("Pakim Pond, 2009-03-08<br>");
$sql = "INSERT INTO event09 SET event_id='WCC031509',name='White Clay Creek',short_name='White Clay Creek',event_date='2009-03-15',director='Billy Allaband',codirector='null',design='Billy Allaband',codesign='null',red_factor='null',notes='',label1='',text1='',label2='',text2='',html='',url='null',rg_lnk='http://www.dvoa.org/cgi-bin/gadget/reitti.cgi?act=map&id=78&kieli=',splt_lnk1='http://www.dvoa.org/events/results/html/rslt09/wcc0315splits.html',splt_txt1='White Clay Creek Splits',splt_lnk2='',splt_txt2='',splt_lnk3='',splt_txt3='',x_lnk1='',x_txt1='',x_lnk2='',x_txt2='',x_lnk3='',x_txt3='',x_lnk4='',x_txt4='',x_lnk5='',x_txt5=''";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("White Clay Creek, 2009-03-15<br>");
$sql = "INSERT INTO event09 SET event_id='HKR032209',name='Hickory Run State Park',short_name='Hickory Run',event_date='2009-03-22',director='Rob Wilkison',codirector='null',design='Rob Wilkison',codesign='null',red_factor='1',notes='White was White-Yellow, Green-X was MidEast, Green-Y was MidWest, and Red was Advanced Long',label1='',text1='',label2='',text2='',html='',url='null',rg_lnk='http://www.dvoa.org/cgi-bin/gadget/reitti.cgi?act=map&id=79&kieli=',splt_lnk1='http://www.dvoa.org/events/results/html/rslt09/hkr0322splits.html',splt_txt1='Hickory Run Splits',splt_lnk2='',splt_txt2='',splt_lnk3='',splt_txt3='',x_lnk1='',x_txt1='',x_lnk2='',x_txt2='',x_lnk3='',x_txt3='',x_lnk4='',x_txt4='',x_lnk5='',x_txt5=''";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("Hickory Run State Park, 2009-03-22<br>");
$sql = "INSERT INTO event09 SET event_id='WWK032209',name='Warwick County Park',short_name='Warwick',event_date='2009-03-22',director='The Frank Family',codirector='null',design='The Frank Family',codesign='null',red_factor='null',notes='',label1='',text1='',label2='',text2='',html='',url='null',rg_lnk='',splt_lnk1='',splt_txt1='',splt_lnk2='',splt_txt2='',splt_lnk3='',splt_txt3='',x_lnk1='http://www.dvoa.org/events/results/html/rslt09/wwk0322score.html',x_txt1='Score-O Results',x_lnk2='',x_txt2='',x_lnk3='',x_txt3='',x_lnk4='',x_txt4='',x_lnk5='',x_txt5=''";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("Warwick County Park, 2009-03-22<br>");
$sql = "INSERT INTO event09 SET event_id='HCK040409',name='Hay Creek',short_name='Hay Creek',event_date='2009-04-04',director='Ed Scott',codirector='null',design='Ed Scott',codesign='null',red_factor='1',notes='',label1='',text1='',label2='',text2='',html='',url='null',rg_lnk='',splt_lnk1='',splt_txt1='',splt_lnk2='',splt_txt2='',splt_lnk3='',splt_txt3='',x_lnk1='',x_txt1='',x_lnk2='',x_txt2='',x_lnk3='',x_txt3='',x_lnk4='',x_txt4='',x_lnk5='',x_txt5=''";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("Hay Creek, 2009-04-04<br>");
$sql = "INSERT INTO event09 SET event_id='ROC040509',name='Rocky Ridge',short_name='Rocky Ridge',event_date='2009-04-05',director='Mary Ann Schlegel',codirector='null',design='Jay Zech',codesign='null',red_factor='1',notes='SVO event - not included in rankings',label1='',text1='',label2='',text2='',html='',url='null',rg_lnk='',splt_lnk1='',splt_txt1='',splt_lnk2='',splt_txt2='',splt_lnk3='',splt_txt3='',x_lnk1='',x_txt1='',x_lnk2='',x_txt2='',x_lnk3='',x_txt3='',x_lnk4='',x_txt4='',x_lnk5='',x_txt5=''";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("Rocky Ridge, 2009-04-05<br>");
$sql = "INSERT INTO event09 SET event_id='ROD041109',name='Rodney Scout Reservation',short_name='Rodney',event_date='2009-04-11',director='Tracy Acuff',codirector='null',design='Tracy Acuff',codesign='null',red_factor='1',notes='',label1='',text1='',label2='',text2='',html='',url='null',rg_lnk='http://www.dvoa.org/cgi-bin/gadget/reitti.cgi?act=map&id=80&kieli=',splt_lnk1='http://www.dvoa.org/events/results/html/rslt09/rodneysplits_2009-04-11.html',splt_txt1='Splits',splt_lnk2='',splt_txt2='',splt_lnk3='',splt_txt3='',x_lnk1='',x_txt1='',x_lnk2='',x_txt2='',x_lnk3='',x_txt3='',x_lnk4='',x_txt4='',x_lnk5='',x_txt5=''";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("Rodney Scout Reservation, 2009-04-11<br>");
$sql = "INSERT INTO event09 SET event_id='RID041909',name='Ridley Creek State Park',short_name='Ridley Creek',event_date='2009-04-19',director='Deb Samans',codirector='null',design='Tim Walsh',codesign='null',red_factor='1',notes='',label1='',text1='',label2='',text2='',html='',url='null',rg_lnk='',splt_lnk1='',splt_txt1='',splt_lnk2='',splt_txt2='',splt_lnk3='',splt_txt3='',x_lnk1='',x_txt1='',x_lnk2='',x_txt2='',x_lnk3='',x_txt3='',x_lnk4='',x_txt4='',x_lnk5='',x_txt5=''";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("Ridley Creek State Park, 2009-04-19<br>");
$sql = "INSERT INTO event09 SET event_id='FCC050309',name='French Creek Central',short_name='FC Central',event_date='2009-05-03',director='Ed Scott',codirector='',design='Ed Scott',codesign='',red_factor='1',notes='',label1='',text1='',label2='',text2='',html='null',url='null',rg_lnk='null',splt_lnk1='null',splt_txt1='null',splt_lnk2='null',splt_txt2='null',splt_lnk3='null',splt_txt3='null',x_lnk1='null',x_txt1='null',x_lnk2='null',x_txt2='null',x_lnk3='null',x_txt3='null',x_lnk4='null',x_txt4='null',x_lnk5='null',x_txt5='null'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("French Creek Central, 2009-05-03<br>");
$sql = "INSERT INTO event09 SET event_id='RTG050909',name='Rutgers Preserve',short_name='Rutgers',event_date='2009-05-09',director='Bob Rycharski',codirector='null',design='Jerry Smith',codesign='null',red_factor='1',notes='',label1='Course Consultant',text1='Bob Rycharski',label2='null',text2='null',html='null',url='null',rg_lnk='null',splt_lnk1='http://www.dvoa.org/events/results/html/rslt09/rutgerssplits_2009-05-09.html',splt_txt1='Rutgers Splits',splt_lnk2='null',splt_txt2='null',splt_lnk3='null',splt_txt3='null',x_lnk1='null',x_txt1='null',x_lnk2='null',x_txt2='null',x_lnk3='null',x_txt3='null',x_lnk4='null',x_txt4='null',x_lnk5='null',x_txt5='null'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("Rutgers Preserve, 2009-05-09<br>");
$sql = "INSERT INTO event09 SET event_id='FRH042609',name='Fair Hill',short_name='Fair Hill',event_date='2009-04-26',director='Tom Overbaugh',codirector='null',design='Tom Overbaugh',codesign='null',red_factor='1',notes='',label1='null',text1='null',label2='null',text2='null',html='null',url='null',rg_lnk='null',splt_lnk1='null',splt_txt1='null',splt_lnk2='null',splt_txt2='null',splt_lnk3='null',splt_txt3='null',x_lnk1='null',x_txt1='null',x_lnk2='null',x_txt2='null',x_lnk3='null',x_txt3='null',x_lnk4='null',x_txt4='null',x_lnk5='null',x_txt5='null'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("Fair Hill, 2009-04-26<br>");
$sql = "INSERT INTO event09 SET event_id='STP051709',name='Stucky Pond',short_name='Stucky Pond',event_date='2009-05-17',director='Bob Huebner',codirector='null',design='Bob Huebner',codesign='null',red_factor='1',notes='',label1='null',text1='null',label2='null',text2='null',html='null',url='null',rg_lnk='null',splt_lnk1='http://www.dvoa.org/events/results/html/rslt09/stp0517splits.html',splt_txt1='Stucky Pond Splits',splt_lnk2='null',splt_txt2='null',splt_lnk3='null',splt_txt3='null',x_lnk1='null',x_txt1='null',x_lnk2='null',x_txt2='null',x_lnk3='null',x_txt3='null',x_lnk4='null',x_txt4='null',x_lnk5='null',x_txt5='null'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("Stucky Pond, 2009-05-17<br>");
$sql = "INSERT INTO event09 SET event_id='FTW053109',name='Ft. Washington',short_name='Ft. Washington',event_date='2009-05-31',director='Mike Forbes',codirector='null',design='Mike Forbes',codesign='null',red_factor='1',notes='',label1='null',text1='null',label2='null',text2='null',html='null',url='null',rg_lnk='http://www.dvoa.org/cgi-bin/gadget/reitti.cgi?act=map&id=82&kieli=',splt_lnk1='http://www.dvoa.org/events/results/html/rslt09/ft.wash.splits_2009-05-31.html',splt_txt1='Ft. Washington Splits',splt_lnk2='null',splt_txt2='null',splt_lnk3='null',splt_txt3='null',x_lnk1='null',x_txt1='null',x_lnk2='null',x_txt2='null',x_lnk3='null',x_txt3='null',x_lnk4='null',x_txt4='null',x_lnk5='null',x_txt5='null'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("Ft. Washington, 2009-05-31<br>");
$sql = "INSERT INTO event09 SET event_id='DEL062009',name='Delmont Scout Camp',short_name='Delmont',event_date='2009-06-20',director='Janet Porter',codirector='null',design='Vadim Masalkov',codesign='null',red_factor='1',notes='',label1='null',text1='null',label2='null',text2='null',html='null',url='null',rg_lnk='http://www.dvoa.org/cgi-bin/gadget/reitti.cgi?act=map&id=83&kieli=',splt_lnk1='http://www.dvoa.org/events/results/html/rslt09/delmontsplits_2009-06-20.html',splt_txt1='Delmont Splits',splt_lnk2='null',splt_txt2='null',splt_lnk3='null',splt_txt3='null',x_lnk1='http://www.dvoa.org/events/results/html/rslt09/del0620sprint.html',x_txt1='Delmont Sprint-O',x_lnk2='null',x_txt2='null',x_lnk3='null',x_txt3='null',x_lnk4='null',x_txt4='null',x_lnk5='null',x_txt5='null'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("Delmont Scout Camp, 2009-06-20<br>");
$sql = "INSERT INTO event09 SET event_id='GRL062109',name='Green Lane',short_name='Green Lane',event_date='2009-06-21',director='Janet Porter',codirector='null',design='Vadim Masalkov',codesign='null',red_factor='1',notes='',label1='null',text1='null',label2='null',text2='null',html='null',url='null',rg_lnk='http://www.dvoa.org/cgi-bin/gadget/reitti.cgi?act=map&id=84&kieli=',splt_lnk1='http://www.dvoa.org/events/results/html/rslt09/greenlanesplts_2009-06-21.html',splt_txt1='Green Lane Splits',splt_lnk2='null',splt_txt2='null',splt_lnk3='null',splt_txt3='null',x_lnk1='http://www.dvoa.org/events/results/html/rslt09/grl0621relay.html',x_txt1='Green Lane Relay',x_lnk2='null',x_txt2='null',x_lnk3='null',x_txt3='null',x_lnk4='null',x_txt4='null',x_lnk5='null',x_txt5='null'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("Green Lane, 2009-06-21<br>");
$sql = "INSERT INTO event09 SET event_id='FCE071209',name='French Creek East',short_name='FC East',event_date='2009-07-12',director='Ron Bortz',codirector='null',design='Ron Bortz',codesign='null',red_factor='1',notes='',label1='null',text1='null',label2='null',text2='null',html='null',url='null',rg_lnk='http://www.dvoa.org/cgi-bin/gadget/reitti.cgi?act=map&id=85&kieli=',splt_lnk1='http://www.dvoa.org/events/results/html/rslt09/fcesplits_2009-07-12.html',splt_txt1='FC East Splits',splt_lnk2='null',splt_txt2='null',splt_lnk3='null',splt_txt3='null',x_lnk1='null',x_txt1='null',x_lnk2='null',x_txt2='null',x_lnk3='null',x_txt3='null',x_lnk4='null',x_txt4='null',x_lnk5='null',x_txt5='null'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("French Creek East, 2009-07-12<br>");
$sql = "INSERT INTO event09 SET event_id='HKR072609',name='Hickory Run',short_name='Hickory Run',event_date='2009-07-26',director='Bob Fink',codirector='null',design='Sandy Fillebrown',codesign='null',red_factor='1',notes='',label1='null',text1='null',label2='null',text2='null',html='null',url='null',rg_lnk='http://www.dvoa.org/cgi-bin/gadget/reitti.cgi?act=map&id=86&kieli=',splt_lnk1='http://www.dvoa.org/events/results/html/rslt09/hrsplits_2009-07-26.html',splt_txt1='Hickory Run Splits',splt_lnk2='null',splt_txt2='null',splt_lnk3='null',splt_txt3='null',x_lnk1='null',x_txt1='null',x_lnk2='null',x_txt2='null',x_lnk3='null',x_txt3='null',x_lnk4='null',x_txt4='null',x_lnk5='null',x_txt5='null'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("Hickory Run, 2009-07-26<br>");
$sql = "INSERT INTO event09 SET event_id='MTP080209',name='Mt Penn',short_name='Pt Penn',event_date='2009-08-02',director='Mary Frank',codirector='null',design='Ed Scott',codesign='null',red_factor='1',notes='',label1='null',text1='null',label2='null',text2='null',html='null',url='null',rg_lnk='null',splt_lnk1='http://www.dvoa.org/events/results/html/rslt09/mtp0802splits.html',splt_txt1='Mt Penn Splits',splt_lnk2='null',splt_txt2='null',splt_lnk3='null',splt_txt3='null',x_lnk1='null',x_txt1='null',x_lnk2='null',x_txt2='null',x_lnk3='null',x_txt3='null',x_lnk4='null',x_txt4='null',x_lnk5='null',x_txt5='null'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("Mt Penn, 2009-08-02<br>");
$sql = "INSERT INTO event09 SET event_id='VFF083009',name='Valley Forge Fatlands',short_name='VF Fatlands',event_date='2009-08-30',director='Mary Frank',codirector='null',design='Wyatt Riley',codesign='null',red_factor='1',notes='',label1='null',text1='null',label2='null',text2='null',html='null',url='null',rg_lnk='http://www.dvoa.org/cgi-bin/gadget/reitti.cgi?act=map&id=87&kieli=',splt_lnk1='http://www.dvoa.org/events/results/html/rslt09/fatlandssplts_2009-08-30.html',splt_txt1='VF Fatland Splits',splt_lnk2='null',splt_txt2='null',splt_lnk3='null',splt_txt3='null',x_lnk1='null',x_txt1='null',x_lnk2='null',x_txt2='null',x_lnk3='null',x_txt3='null',x_lnk4='null',x_txt4='null',x_lnk5='null',x_txt5='null'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("Valley Forge Fatlands, 2009-08-30<br>");
$sql = "INSERT INTO event09 SET event_id='SEE090509',name='Schuylkill Center for Environmental Educ',short_name='SCEE',event_date='2009-09-05',director='Sandy Fillebrown',codirector='null',design='Sandy Fillebrown',codesign='null',red_factor='1',notes='null',label1='null',text1='null',label2='null',text2='null',html='null',url='null',rg_lnk='http://www.dvoa.org/cgi-bin/gadget/reitti.cgi?act=map&id=88&kieli=',splt_lnk1='http://www.dvoa.org/events/results/html/rslt09/sceesplits_2009-09-05.html',splt_txt1='SCEE Splits',splt_lnk2='null',splt_txt2='null',splt_lnk3='null',splt_txt3='null',x_lnk1='http://www.dvoa.org/events/results/html/rslt09/scee0905sprint.html',x_txt1='SCEE Sprint Results',x_lnk2='null',x_txt2='null',x_lnk3='null',x_txt3='null',x_lnk4='null',x_txt4='null',x_lnk5='null',x_txt5='null'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("Schuylkill Center for Environmental Educ, 2009-09-05<br>");
$sql = "INSERT INTO event09 SET event_id='HKR091309',name='Hickory Run Training Weekend',short_name='Hickory Run',event_date='2009-09-13',director='Janet Porter',codirector='null',design='Clem McGrath, Janet Porter, Chuck Cornish',codesign='null',red_factor='1',notes='',label1='null',text1='null',label2='null',text2='null',html='null',url='null',rg_lnk='null',splt_lnk1='http://www.dvoa.org/events/results/html/rslt09/hrsundaysplts_2009-09-13.html',splt_txt1='Sunday Splits',splt_lnk2='http://www.dvoa.org/events/results/html/rslt09/hrsprintsplits_2009-09-12.html',splt_txt2='Hickory Run Sprint Splits',splt_lnk3='http://www.dvoa.org/events/results/html/rslt09/hrnight-osplts_2009-09-12.html',splt_txt3='Hickory Run Night-O Splits',x_lnk1='http://www.dvoa.org/events/results/html/rslt09/hrsprintrslts_2009-09-12.txt',x_txt1='Hickory Run Sprint Results',x_lnk2='http://www.dvoa.org/events/results/html/rslt09/hrnight-orslts_2009-09-12.txt',x_txt2='Hickory Run Night-O Results',x_lnk3='null',x_txt3='null',x_lnk4='null',x_txt4='null',x_lnk5='null',x_txt5='null'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("Hickory Run Training Weekend, 2009-09-13<br>");
$sql = "INSERT INTO event09 SET event_id='DBN092009',name='Daniel Boone Homestead',short_name='Daniel Boone',event_date='2009-09-20',director='Bob Gross',codirector='null',design='Ed Scott',codesign='null',red_factor='1',notes='',label1='null',text1='null',label2='null',text2='null',html='null',url='null',rg_lnk='null',splt_lnk1='http://www.dvoa.org/events/results/html/rslt09/boonesplites_2009-09-21.html',splt_txt1='Daniel Boone Splits',splt_lnk2='null',splt_txt2='null',splt_lnk3='null',splt_txt3='null',x_lnk1='http://www.dvoa.org/events/results/html/rslt09/dbn0920sprints.html',x_txt1='Daniel Boone Sprint Results',x_lnk2='null',x_txt2='null',x_lnk3='null',x_txt3='null',x_lnk4='null',x_txt4='null',x_lnk5='null',x_txt5='null'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("Daniel Boone Homestead, 2009-09-20<br>");
$sql = "INSERT INTO event09 SET event_id='BRN092709',name='Brandywine State Park',short_name='Brandywine',event_date='2009-09-27',director='Vadim Masalkov',codirector='null',design='Bob Burg',codesign='null',red_factor='1',notes='',label1='null',text1='null',label2='null',text2='null',html='null',url='null',rg_lnk='http://www.dvoa.org/cgi-bin/gadget/reitti.cgi?act=map&id=95&kieli=',splt_lnk1='http://www.dvoa.org/events/results/html/rslt09/brandywinesplts_2009-09-27.html',splt_txt1='Brandywine Splits',splt_lnk2='null',splt_txt2='null',splt_lnk3='null',splt_txt3='null',x_lnk1='null',x_txt1='null',x_lnk2='null',x_txt2='null',x_lnk3='null',x_txt3='null',x_lnk4='null',x_txt4='null',x_lnk5='null',x_txt5='null'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("Brandywine State Park, 2009-09-27<br>");
$sql = "INSERT INTO event09 SET event_id='FCE100409',name='French Creek East',short_name='FC East',event_date='2009-10-04',director='Ed Scott',codirector='null',design='Sam Reed',codesign='null',red_factor='1',notes='',label1='null',text1='null',label2='null',text2='null',html='null',url='null',rg_lnk='http://www.dvoa.org/cgi-bin/gadget/reitti.cgi?act=map&id=96&kieli=',splt_lnk1='http://www.dvoa.org/events/results/html/rslt09/fcesplits_2009-10-04.html',splt_txt1='FCE Splits',splt_lnk2='null',splt_txt2='null',splt_lnk3='null',splt_txt3='null',x_lnk1='null',x_txt1='null',x_lnk2='null',x_txt2='null',x_lnk3='null',x_txt3='null',x_lnk4='null',x_txt4='null',x_lnk5='null',x_txt5='null'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("French Creek East, 2009-10-04<br>");
$sql = "INSERT INTO event09 SET event_id='WWK101109',name='Warwick County Park',short_name='Warwick',event_date='2009-10-11',director='Tom Overbaugh',codirector='null',design='Tom Overbaugh',codesign='null',red_factor='1',notes='',label1='null',text1='null',label2='null',text2='null',html='null',url='null',rg_lnk='null',splt_lnk1='http://www.dvoa.org/events/results/html/rslt09/warwicksplits_2009-10-11.html',splt_txt1='Warwick Splits',splt_lnk2='null',splt_txt2='null',splt_lnk3='null',splt_txt3='null',x_lnk1='null',x_txt1='null',x_lnk2='null',x_txt2='null',x_lnk3='null',x_txt3='null',x_lnk4='null',x_txt4='null',x_lnk5='null',x_txt5='null'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("Warwick County Park, 2009-10-11<br>");
$sql = "INSERT INTO event09 SET event_id='QHL101809',name='Quail Hill',short_name='Quail Hill',event_date='2009-10-18',director='Bob Rycharski, Jerry Smith',codirector='',design='Bob Rycharski',codesign='',red_factor='1',notes='',label1='',text1='',label2='',text2='',html='null',url='null',rg_lnk='null',splt_lnk1='null',splt_txt1='null',splt_lnk2='null',splt_txt2='null',splt_lnk3='null',splt_txt3='null',x_lnk1='null',x_txt1='null',x_lnk2='null',x_txt2='null',x_lnk3='null',x_txt3='null',x_lnk4='null',x_txt4='null',x_lnk5='null',x_txt5='null'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("Quail Hill, 2009-10-18<br>");
$sql = "INSERT INTO event09 SET event_id='HIB102509',name='Hibernia County Park',short_name='Hibernia',event_date='2009-10-25',director='DVOA Junior Team',codirector='null',design='DVOA Junior Team',codesign='null',red_factor='1',notes='',label1='null',text1='null',label2='null',text2='null',html='null',url='null',rg_lnk='null',splt_lnk1='http://www.dvoa.org/events/results/html/rslt09/hib1025splits.html',splt_txt1='Hibernia Splits',splt_lnk2='null',splt_txt2='null',splt_lnk3='null',splt_txt3='null',x_lnk1='null',x_txt1='null',x_lnk2='null',x_txt2='null',x_lnk3='null',x_txt3='null',x_lnk4='null',x_txt4='null',x_lnk5='null',x_txt5='null'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("Hibernia County Park, 2009-10-25<br>");
$sql = "INSERT INTO event09 SET event_id='DEL110809',name='Camp Delmont',short_name='Delmont',event_date='2009-11-08',director='Janet Porter',codirector='null',design='Vadim Masalkov',codesign='null',red_factor='1',notes='',label1='null',text1='null',label2='null',text2='null',html='null',url='null',rg_lnk='null',splt_lnk1='http://www.dvoa.org/events/results/html/rslt09/delmontsplits_2009-11-08.html',splt_txt1='Delmont Splits',splt_lnk2='null',splt_txt2='null',splt_lnk3='null',splt_txt3='null',x_lnk1='null',x_txt1='null',x_lnk2='null',x_txt2='null',x_lnk3='null',x_txt3='null',x_lnk4='null',x_txt4='null',x_lnk5='null',x_txt5='null'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("Camp Delmont, 2009-11-08<br>");
$sql = "INSERT INTO event09 SET event_id='WSX103109',name='Washington Crossing',short_name='Washington Xing',event_date='2009-10-31',director='Jerry Smith',codirector='',design='Rick Slater',codesign='',red_factor='1',notes='',label1='',text1='',label2='',text2='',html='null',url='null',rg_lnk='null',splt_lnk1='null',splt_txt1='null',splt_lnk2='null',splt_txt2='null',splt_lnk3='null',splt_txt3='null',x_lnk1='null',x_txt1='null',x_lnk2='null',x_txt2='null',x_lnk3='null',x_txt3='null',x_lnk4='null',x_txt4='null',x_lnk5='null',x_txt5='null'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("Washington Crossing, 2009-10-31<br>");
$sql = "INSERT INTO event09 SET event_id='ORR111509',name='Oregon Ridge',short_name='Oregon Ridge',event_date='2009-11-15',director='Kirsten & Dwight Johnson',codirector='null',design='Franics Hogle',codesign='null',red_factor='1',notes='Mid-Atlantic Champs',label1='null',text1='null',label2='null',text2='null',html='null',url='null',rg_lnk='http://s91276857.onlinehome.us/gadget/cgi-bin/reitti.pl?act=map&id=107&kieli=',splt_lnk1='http://www.dvoa.org/events/results/html/rslt09/oregonrdgsplts_2009-11-15.html',splt_txt1='Oregon Ridge Splits',splt_lnk2='null',splt_txt2='null',splt_lnk3='null',splt_txt3='null',x_lnk1='http://www.dvoa.org/events/results/html/rslt09/orr1115_relay_results.txt',x_txt1='Relay Results',x_lnk2='http://www.dvoa.org/events/results/html/rslt09/orr1115_relay_splits.html',x_txt2='Relay Splits',x_lnk3='null',x_txt3='null',x_lnk4='null',x_txt4='null',x_lnk5='null',x_txt5='null'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("Oregon Ridge, 2009-11-15<br>");
$sql = "INSERT INTO event09 SET event_id='RTG111509',name='Rutgers',short_name='Rutgers',event_date='2009-11-15',director='Bob Rycharski',codirector='',design='Bob Rycharski',codesign='',red_factor='1',notes='',label1='',text1='',label2='',text2='',html='null',url='null',rg_lnk='null',splt_lnk1='null',splt_txt1='null',splt_lnk2='null',splt_txt2='null',splt_lnk3='null',splt_txt3='null',x_lnk1='null',x_txt1='null',x_lnk2='null',x_txt2='null',x_lnk3='null',x_txt3='null',x_lnk4='null',x_txt4='null',x_lnk5='null',x_txt5='null'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("Rutgers, 2009-11-15<br>");
$sql = "INSERT INTO event09 SET event_id='QHL112209',name='Quail Hill',short_name='Quail Hill',event_date='2009-11-22',director='Bob Burg',codirector='null',design='Bob Burg',codesign='null',red_factor='1',notes='',label1='null',text1='null',label2='null',text2='null',html='null',url='null',rg_lnk='null',splt_lnk1='http://www.dvoa.org/events/results/html/rslt09/quailhillsplts_2009-11-22.html',splt_txt1='Quail Hill Splits',splt_lnk2='null',splt_txt2='null',splt_lnk3='null',splt_txt3='null',x_lnk1='null',x_txt1='null',x_lnk2='null',x_txt2='null',x_lnk3='null',x_txt3='null',x_lnk4='null',x_txt4='null',x_lnk5='null',x_txt5='null'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("Quail Hill, 2009-11-22<br>");
$sql = "INSERT INTO event09 SET event_id='HSH120609',name='Camp Horseshoe',short_name='Camp Horseshoe',event_date='2009-12-06',director='Ralph Tolbert',codirector='null',design='Ralph Tolbert',codesign='null',red_factor='1',notes='',label1='null',text1='null',label2='null',text2='null',html='null',url='null',rg_lnk='null',splt_lnk1='http://www.dvoa.org/events/results/html/rslt09/horseshoesplits_2009-12-06.html',splt_txt1='Camp Horseshoe Splits',splt_lnk2='null',splt_txt2='null',splt_lnk3='null',splt_txt3='null',x_lnk1='null',x_txt1='null',x_lnk2='null',x_txt2='null',x_lnk3='null',x_txt3='null',x_lnk4='null',x_txt4='null',x_lnk5='null',x_txt5='null'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("Camp Horseshoe, 2009-12-06<br>");
$sql = "INSERT INTO event09 SET event_id='',name='Fair Hill Marathon',short_name='Fair Hill',event_date='2009-12-12',director='Tom Overbaugh',codirector='null',design='Tom Overbaugh',codesign='null',red_factor='null',notes='null',label1='null',text1='null',label2='null',text2='null',html='Y',url='http://www.dvoa.org/events/results/html/rslt09/fhmarathon.html',rg_lnk='null',splt_lnk1='http://www.dvoa.org/events/results/html/rslt09/FHMarathonSplts.html',splt_txt1='Fair Hill Splits',splt_lnk2='null',splt_txt2='null',splt_lnk3='null',splt_txt3='null',x_lnk1='http://www.dvoa.org/events/results/html/rslt09/FHMarathonRslts.txt',x_txt1='Overall Results',x_lnk2='http://www.dvoa.org/events/results/html/rslt09/FHMarathonRsltsClass.txt',x_txt2='Results by Class',x_lnk3='null',x_txt3='null',x_lnk4='null',x_txt4='null',x_lnk5='null',x_txt5='null'";
$rs = mysql_query($sql)
  or die("$sql failed because " . mysql_error());
printf("Fair Hill Marathon, 2009-12-12<br>");
mysql_close($dbh);
?>
</body>
</html>
