<?php
require ("../../tools/dvoa_tools.inc.php");
require ("../../tools/db.dvoa.class.php");
$db = new MeekroDB();

include ("fpdf.inc.php");

$title = "Printable Schedule";
$bctitle = "PDF Schedule";

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

		//$sql = "SELECT sked.id,dayofwk,ev_date,sked.map,shortname,map_link,courses,epunch,director,email_link,phone,hc_notes,confirm FROM sked,maplist WHERE sked.map_link=maplist.link_name AND (ev_date>'$start_date' AND ev_date < '$end_date') ORDER BY ev_date";
		//$sql = "SELECT id,dayofwk,ev_date,map_id,map,map_link,courses,epunch,ed_id,cs_id,director,email_link,phone,hc_notes,confirm FROM sked WHERE dvoa_event='Y' AND (ev_date>'$start_date' AND ev_date < '$end_date') ORDER BY ev_date";
		$sql = "SELECT s.id as sked_id,s.dayofwk,s.ev_date,s.map_id,";
		$sql.= "IF (s.map_id != 99999, (SELECT l.shortname FROM maplist l WHERE l.id = s.map_id),s.map) AS shortname,";
		$sql.= "IF (s.ed_id != 99999, (SELECT name FROM mmbrname WHERE id = s.ed_id),s.director) as director,";
		$sql.= "IF (s.cs_id != 99999, (SELECT name FROM mmbrname WHERE id = s.cs_id),s.cs) as designer,";
		$sql.= "s.hc_notes,s.confirm,s.epunch";
		$sql.= " FROM sked s";
		$sql.= " WHERE s.dvoa_event='Y' AND ev_date>'$start_date' AND ev_date < '$end_date'";
		$sql.= " ORDER BY s.ev_date";

		$rs = $db->query($sql);
		if ($db->count() > 0) {
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
			//$w=array(20,25,25,5,10,20,80);
			$w=array(20,25,32,5,107);
			$th = array("DATE","MAP","COURSES","EP","NOTES");

			//Header
			//for($i=0;$i<count($th);$i++)
			//	$pdf->Cell($w[$i],4,$th[$i],1,0,'C');
			//$pdf->Ln();

			$pdf->Cell($w[0],4,"DATE",'LRBT');
			$pdf->Cell($w[1],4,"MAP",'RBT');
			$pdf->Cell($w[2],4,"COURSES",'RBT');
			$pdf->Cell($w[3],4,"EP",'RBT');
			$pdf->Cell($w[4],4,"NOTES",'RBT');
			$pdf->Ln();
			$pdf->SetFont("Helvetica","",6);
		
			foreach ($rs as $row) {
				$td = sprintf("%s %s",$row['dayofwk'],FormatDate($row['ev_date']));
				$mp = sprintf("%s",$row['shortname']);
				$cs = sprintf("%s",GetCourses($db,$row['sked_id']));
				$ep = $row['epunch'] == "Y" ? "Y" : "N";
				if (strlen($row['hc_notes']) > 1)
					$nt = sprintf("%s",StripSlashes($row['hc_notes']));
				else	
					$nt = sprintf(" ");

				$pdf->Cell($w[0],4,$td,'LRB');
				$pdf->Cell($w[1],4,$mp,'LRB');
				$pdf->Cell($w[2],4,$cs,'LRB');
				$pdf->Cell($w[3],4,$ep,'LRB',0,'C');
				$pdf->Cell($w[4],4,$nt,'LRB');
				
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

			$s = "Cost is $12.00/map for non-members (a group can use one map), $7.00/map for DVOA members, USOF or IOF clubs, ";
			$pdf->Cell(0,4,$s,0,1,'L');

			$s = "Scout/Youth Group. When electronic punching is being used at an event, all competitors on a course using";
			$pdf->Cell(0,4,$s,0,1,'L');
			$s = "electronic punching are required to use an \"e-punch\". These will be available at the event registration. A compass";
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

			$filename = sprintf("../../download/DVOA_Event_Schedule_%s.pdf",$start_date);
			$pdf->Output($filename,"F");

			printf("<p align=\"center\"><a href=\"$filename\">PDF Schedule</a></p>\n");
			
		} // end of $db->count()
		printf("<p align=\"center\"><a href=\"sked_html.php\">HTML Schedule</a></p>\n");

		?>

		<div style="height:400px;">&nbsp;</div>
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
	$sql = "SELECT s.id,s.crs_id,c.abbr FROM sked_crs_xref s, crs c WHERE s.sked_id=%i AND s.crs_id=c.crs_id ORDER BY s.id";
	$rs = $db->query($sql,$sked_id);
	$str = "";
	foreach ($rs as $row) {
		$str .= sprintf("%s",$row['abbr']); //GetAbbr($row['crs_id']));
	}
	return $str;
}

function GetAbbr($db,$id)
{
	$sql = "SELECT abbr FROM crs WHERE crs_id=%i";
	$abbr = $db->queryFirstField($sql,$id);
	return $abbr;
}
?>
