<?php
require ("../../tools/dvoa_tools.inc.php");
require ("../../tools/db.dvoa.class.php");
$db = new MeekroDB();
include ("fpdf.inc.php");

$title   = "Printable Schedules";
$bctitle = "Printable Schedules";

$now      = getdate();
$dd_start = $dd_end = $now['mday'];
$mm_start = $now['mon'];
$yy_start = $yy_end = $now['year'];

$mm_end = $mm_start + 6;
if ($mm_end > 12) {
	$yy_end++;
	$mm_end -= 12;
}

$start_date = sprintf("%d-%02d-%02d",$yy_start,$mm_start,$dd_start);
$end_date   = sprintf("%d-%02d-%02d",$yy_end,$mm_end,$dd_end);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $title ?></title>
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
		<?php
		$sql = "SELECT id,dayofwk,ev_date,map_id,map,map_link,courses,epunch,ed_id,cs_id,director,email_link, phone, hc_notes, confirm FROM sked WHERE dvoa_event='Y' AND (ev_date>'$start_date' AND ev_date < '$end_date') ORDER BY ev_date";
		$rs  = $db->query($sql);
		if ($db->count() > 0) {
			$cell_height = 5;
			$text_size   = 9;
			$pdf = new FPDF();
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
			$pdf->Cell(0,$cell_height,$dd,0,1,'C');
			$pdf->Ln();
			$pdf->SetFont("Helvetica","B",$text_size);

			//Column widths
			$w=array(28,35,30,100);
			$th = array("Date","Map/Park","Courses","Notes");

			//Header
			for($i=0;$i<count($th);$i++)
				$pdf->Cell($w[$i],$cell_height,$th[$i],1,0,'C');
			$pdf->Ln();

			$pdf->SetFont("Helvetica","",$text_size);
			foreach ($rs as $row ) {
				$td = sprintf("%s %s",$row['dayofwk'],FormatDate($row['ev_date']));
				$pdf->Cell($w[0],$cell_height,$td,'LRB');

				$td = sprintf("%s",GetMapShortName($db,$row['map_id']));
				$pdf->Cell($w[1],$cell_height,$td,'LRB');

				$cc        = GetCourses($db,$row['id']);
				$crs_width = $pdf->GetStringWidth($cc);
				$crsX      = $pdf->GetX();
				$crsY      = $pdf->GetY();
				$pdf->Cell($w[2],$cell_height,$cc,'LRB');

				if (strlen($row['hc_notes']) > 1)
					$td = sprintf("%s",StripSlashes($row['hc_notes']));
				else	
					$td = sprintf(" ");
				$pdf->Cell($w[3],$cell_height,$td,'LTRB');

				if ($row['epunch'] == "Y") {
					$saveX = $pdf->GetX();
					$saveY = $pdf->GetY();
					$pdf->Image("bolt.gif",$crsX + $crs_width + 1,$crsY+0.5,4,4);

					$pdf->SetXY($saveX,$saveY);
				}

				$pdf->Ln();
			}
			$pdf->Ln();

			$pdf->SetFont("Helvetica","",$text_size);
			$pdf->Write($cell_height,"Orienteering is a sport in which orienteers use an accurate, detailed map and a compass to find points in the landscape. It can be enjoyed as a walk in the woods or as a competitive sport. Everyone is welcome!");
			$pdf->Ln();

			$s = "Unless otherwise noted, all events start at 10:00am and end at 1:00pm. ";
			$pdf->Cell(0,$cell_height,$s,0,1,'L');
			//$pdf->Ln();

			$s = "Cost is $9.00/map for non-members (a group can use one map), $6.00/map for DVOA members, USOF or IOF clubs, ";
			$pdf->Cell(0,$cell_height,$s,0,1,'L');

			$s = "and Scout/Youth Groups. When electronic punching is being used at an event, all competitors on a course using";
			$pdf->Cell(0,$cell_height,$s,0,1,'L');
			$s = "electronic punching are required to use an \"e-punch\". These can be rented at the event for $1.00. A compass";
			$pdf->Cell(0,$cell_height,$s,0,1,'L');
			$s = "can also be rented for $1.00 to use during the event.";
			$pdf->Cell(0,$cell_height,$s,0,1,'L');
			$pdf->Ln();

			$pdf->SetFont("Helvetica","B",$text_size);
			$s = "Abbreviations:";
			$pdf->Cell(0,$cell_height,$s,0,1,'L');

			$pdf->SetFont("Helvetica","",$text_size);

			$y = $pdf->GetY();

			$s  = "  - W: White (Beginner, easiest)\n";
			$s .= "  - Y: Yellow (Advanced Beginner)\n";
			$s .= "  - O: Orange (Intermediate)\n";
			$s .= "  - Bn: Brown (Short Advanced)\n";
			$s .= "  - G: Green (Longer Advanced)\n";
			$s .= "  - R: Red (Long Advanced)\n";
			$s .= "  - Bl: Blue (Very Long Advanced)";
			$pdf->MultiCell(80,$cell_height,$s,'LTB','L');
			//float w, float h, string txt [, mixed border [, string align

			$s  = "  - Beg: Beginner's event\n";
			$s .= "  - Int: Intermdiate level course\n";
			$s .= "  - Adv: Advanced level course\n";
			$s .= "  - Spr: Sprint-O\n";
			$s .= "  - Sc: Score -O\n";
			$s .= "  - Spr: Special Course - see web for more details\n";
			$s .= "           Indicates electronic punching will be used\n";

			$pdf->SetXY(80,$y);
			$pdf->MultiCell(80,$cell_height,$s,'RTB','L');

			//drop the bolt into the legend...
			//figure out where to put it...
			$boltY = $pdf->GetY();

			$pdf->Image("bolt.gif",85,$boltY-5,4,4);

			$pdf->Ln();
			$pdf->SetFont("Helvetica","B",$text_size);
			$pdf->Write($cell_height,"All information on the schedule is subject to change. Check www.DVOA.org for updates as well as general information about DVOA and orienteering.");

			$filename = sprintf("../../download/DVOA_Event_Schedule_%s.pdf",$start_date);
			$pdf->Output($filename,"F");

			printf("<p align=\"center\"><a href=\"$filename\">PDF Schedule</a> - Use this version for the kit and any display purposes.</p>\n");
		} // end of $db->count()
		printf("<p align=\"center\"><a href=\"sked_html.php\">HTML Schedule</a> - Very plain formatting. Do not use this version for display.</p>\n");
		?>

		<div style="height:300px;">&nbsp;</div>
	</div>

	<?php
	GetSubPageFooter();
	GetCredits();
	$db->Close();
	?>
	</div> <!-- end of main -->
</div> <!-- end of wrapper -->
 
</body>
</html>

<?php
function GetCourses($db,$sked_id)
{
	//$sql = "SELECT id,crs_id FROM sked_crs_xref WHERE sked_id=%i ORDER BY id";
	$sql = "SELECT s.id,s.crs_id,c.abbr FROM sked_crs_xref s, crs c WHERE s.sked_id=%i AND s.crs_id=c.crs_id ORDER BY s.id";
	$rs  = $db->query($sql,$sked_id);
	$str = "";
	foreach ($rs as $row) {
		$abbr = $row['abbr'];
		if ($abbr == "Beginner")
			$abbr = "Beg";
		if ($abbr == "Special")
			$abbr = "Spec";
		if ($abbr == "Sprint-O")
			$abbr = "Spr";
		if ($abbr == "Score-O")
			$abbr = "Sc";
		$str .= sprintf("%s",$abbr); //GetAbbr($row['crs_id']));
	}
	return $str;
}

function GetAbbr($db,$id)
{
	$sql = "SELECT abbr FROM crs WHERE crs_id=%i";
	$abbr = $db->queryFirstField($sql,$id);
	if ($abbr == "Beginner")
		$abbr = "Beg";
	if ($abbr == "Special")
		$abbr = "Spec";
	if ($abbr == "Sprint-O")
		$abbr = "Spr";
	if ($abbr == "Score-O")
		$abbr = "Sc";
	return $abbr;
}
?>
