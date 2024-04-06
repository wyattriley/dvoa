<?php
include ("../../tools/db_tools.inc.php");
include ("../../tools/dvoa_tools.inc.php");
include ("fpdf.inc.php");

$now = getdate();
$dd_start = $dd_end = $now['mday'];
$mm_start = $now['mon'];
$yy_start = $yy_end = $now['year'];

$mm_end = $mm_start + 6;
if ($mm_end > 12) {
	$yy_end++;
	$mm_end -= 12;
}

$start_date = sprintf("%d-%02d-%02d",$yy_start,$mm_start,$dd_start);
$end_date = sprintf("%d-%02d-%02d",$yy_end,$mm_end,$dd_end);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>DVOA Event Schedule - Printer Friendly Version</title>
<link rel="shortcut icon" href="../../images/newflag.ico" />
<link href="cal_print.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="wrap">

<div id="header">
	<h1>Delaware Valley Orienteering Association</h1>
	<h2>Event Schedule (PDF)</h2>
<?php
	printf("<p>%s to %s</p>\n",FormatDate($start_date),FormatDate($end_date));
?>
</div>

<?php
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetAuthor("DVOA Web Site");
$pdf->SetTitle("DVOA Event Schedule");
$pdf->Image("logo.jpg",8,2,40,20.8);
//$pdf->Image("logo.jpg");
//$pdf->SetXY(104,10);
$pdf->SetFont("Helvetica","B",16);
$pdf->Cell(0,8,'Delaware Valley Orienteering Association',0,1,'C');
$pdf->SetFont("Helvetica","B",12);
$pdf->Cell(0,6,'Event Schedule',0,1,'C');

$dd = sprintf("%s to %s\n",FormatDate($start_date),FormatDate($end_date));
$pdf->SetFont("Helvetica","B",10);
$pdf->Cell(0,4,$dd,0,1,'C');
$pdf->Ln();
$pdf->Ln();


$pdf->SetFont("Helvetica","B",8);

//Column widths
$w=array(20,25,25,5,10,20,80);
$th = array("DATE","MAP","COURSES","EP","CONF","DIRECTOR","NOTES");

//Header
for($i=0;$i<count($th);$i++)
	$pdf->Cell($w[$i],4,$th[$i],1,0,'C');
$pdf->Ln();

$pdf->SetFont("Helvetica","",6);


$dbh = DBConnect("dvoa_db_gen");
$sql = "SELECT id,dayofwk, ev_date, map, map_link, courses,epunch,director, email_link, phone, notes, confirm FROM sked WHERE (ev_date>'$start_date' AND ev_date < '$end_date') ORDER BY ev_date";
$rs = go_sql($sql);
while($row=mysql_fetch_array($rs)) {
	$td = sprintf("%s %s",$row['dayofwk'],FormatDate($row['ev_date']));
	$pdf->Cell($w[0],4,$td,'LRB');

	$td = sprintf("%s",$row['map']);
	$pdf->Cell($w[1],4,$td,'LRB');

	$cc = GetCourses($row['id']);
	$pdf->Cell($w[2],4,$cc,'LRB');
	
	if ($row['epunch'] == "Y")
		$td = sprintf("Y");
	else
		$td = sprintf("N");
	$pdf->Cell($w[3],4,$td,'LRB',0,'C');

	if ($row['confirm'] == "Y")
		$pdf->Cell($w[4],4,"Y",'LRB',0,'C');
	else
		$pdf->Cell($w[4],4,"N",'LRB',0,'C');
		
	if (strlen($row['director']) > 1)
		$td = sprintf("%s",StripSlashes($row['director']));
	else	
		$td = sprintf(" ");
	$pdf->Cell($w[5],4,$td,'LRB');

	if (strlen($row['notes']) > 1)
		$td = sprintf("%s",StripSlashes($row['notes']));
	else	
		$td = sprintf(" ");
	$pdf->Cell($w[6],4,$td,'LRB');

	$pdf->Ln();
}

$pdf->Ln();


$pdf->SetFont("Helvetica","",8);
$pdf->Write(4,"Please visit ");
$pdf->SetFont("Helvetica","B",8);
$pdf->Write(4,"www.dvoa.org");
$pdf->SetFont("Helvetica","",8);
$pdf->Write(4," for more details, contact information, and updated information.\n");

$s = "Unless otherwise noted, all events start at 10:00am and end at 1:00pm.";
$pdf->Cell(0,4,$s,0,1,'L');
//$pdf->Ln();

$s = "Cost is $7.00/map for non-members (a group can use one map), $5.00/map for Scout/Youth Group non-members,";
$pdf->Cell(0,4,$s,0,1,'L');

$s = "and $4.00/map for members. When electronic punching is being used at an event, all competitors on a course using";
$pdf->Cell(0,4,$s,0,1,'L');
$s = "electronic punching are required to use an \"e-punch\". These can be rented at the event for $1.00. A compass";
$pdf->Cell(0,4,$s,0,1,'L');
$s = "can also be rented for $1.00 to use during the event.";
$pdf->Cell(0,4,$s,0,1,'L');
$pdf->Ln();


$pdf->SetFont("Helvetica","B",8);
$s = "Abbreviations:";
$pdf->Cell(0,3,$s,0,1,'L');

$pdf->SetFont("Helvetica","",8);
$s = "  - W: White (Beginner, easiest)";
$pdf->Cell(0,3,$s,0,1,'L');

$s = "  - Y: Yellow (Advanced Beginner)";
$pdf->Cell(0,3,$s,0,1,'L');

$s = "  - O: Orange (Intermediate)";
$pdf->Cell(0,3,$s,0,1,'L');

$s = "  - Bn: Brown (Short Advanced)";
$pdf->Cell(0,3,$s,0,1,'L');

$s = "  - G: Green (Longer Advanced)";
$pdf->Cell(0,3,$s,0,1,'L');

$s = "  - R: Red (Long Advanced)";
$pdf->Cell(0,3,$s,0,1,'L');

$s = "  - Bl: Blue (Very Long Advanced)";
$pdf->Cell(0,3,$s,0,1,'L');

$s = "  - EP: Y indicates electronic punching will be used for this event";
$pdf->Cell(0,3,$s,0,1,'L');

$s = "  - CONF: Y indicates this event has been confirmed with park officials";
$pdf->Cell(0,3,$s,0,1,'L');



$filename = sprintf("../../download/DVOA_Event_Schedule_%s.pdf",$start_date);
$pdf->Output($filename,"F");


printf("<p>&nbsp;</p>\n");
printf("<p align=\"center\"><a href=\"$filename\">Download PDF Schedule</a></p>\n");
printf("<p>&nbsp;</p>\n");
?>


</body>
</html>


<?php
function GetCourses($sked_id)
{
	$sql = "SELECT id,crs_id FROM sked_crs_xref WHERE sked_id=$sked_id ORDER BY id";
	$rs = go_sql($sql);
	$str = "";
	while ($row=mysql_fetch_array($rs)) {
		$str .= sprintf("%s",GetAbbr($row['crs_id']));
	}

	return $str;
}

function GetAbbr($id)
{
	$sql = "SELECT abbr FROM crs WHERE crs_id=$id";
	$rs = go_sql($sql);
	list ($abbr) = mysql_fetch_row($rs);
	return $abbr;
}

?>