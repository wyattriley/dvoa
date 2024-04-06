<?php
session_start();
include_once("../../tools/dvoa_tools.inc.php");

//bring us back here after logging in
$_SESSION['redir_url'] = $_SERVER['PHP_SELF'];
//get the access bits
include_once("../../users/access_bits.inc.php");
//set this page's access code
$_SESSION['page_access_code'] = $results_bit + $rg_bit;
// now check the login
include_once("../../users/validate.php");
include_once("../../tools/db.dvoa.class.php");

if (isset($_REQUEST['ev_year']))
	$ev_year = intval($_REQUEST['ev_year']);
else
	$ev_year = date("Y");
$curr_year = date("Y");
$db = new MeekroDB("dbgen"); //read-write access
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Rankings Results Admin</title>
<link rel="stylesheet" type="text/css" href="results.css" />
<meta name="robots" content="noindex,nofollow">
</head>
<body>
<div id="wrapper">
	<div id="header">
		<h1>DVOA Administration</h1>
		<h2>Rankings Results</h2>
	</div>

	<?php
	GetUserBar();
	?>
	<div id="content">
		<?php //<div style="height:20px;"></div> ?>

		<div class="topic_title"><h3 align="center">DVOA <?php echo $ev_year ?> Events List</h3></div>
		
		<?php
		$sql  = "SELECT e.sked_id,e.name,e.ev_date,";
		$sql .= "(SELECT COUNT(*) FROM result_course c WHERE c.sked_id = e.sked_id) AS rslt_avail,";
		$sql .= "(SELECT COUNT(*) FROM result_course c WHERE c.sked_id = e.sked_id AND c.rank_incl = 1) AS rank_avail,";
		$sql .= "(SELECT COUNT(*) FROM result_lnk l WHERE l.sked_id = e.sked_id AND l.lnk_type=0) AS rs_avail,";
		$sql .= "(SELECT COUNT(*) FROM result_lnk l WHERE l.sked_id = e.sked_id AND l.lnk_type=1) AS sp_avail,";
		$sql .= "(SELECT COUNT(*) FROM result_lnk l WHERE l.sked_id = e.sked_id AND l.lnk_type=2) AS rg_avail,";
		$sql .= "(SELECT COUNT(*) FROM result_lnk l WHERE l.sked_id = e.sked_id AND l.lnk_type=3) AS ap_avail,";
		$sql .= "(SELECT COUNT(*) FROM result_lnk l WHERE l.sked_id = e.sked_id AND l.lnk_type=4) AS ot_avail,";
		$sql .= "(SELECT COUNT(*) FROM result_jnl j WHERE j.sked_id = e.sked_id) AS jnl_avail,";
		$sql .= "(SELECT COUNT(*) FROM ev_data d WHERE d.sked_id = e.sked_id) AS rpt_avail";
		$sql .= " FROM event_list e";
		$sql .= " WHERE e.ev_year=%i";
		$sql .= " AND e.ev_date <= CURDATE()";
		$sql .= " ORDER BY e.ev_date DESC";
		$rs = $db->query($sql,$ev_year);
		if ($db->count() > 0) {
		?>
			<p align="center">
			Click one of the available options to perform the following administrative tasks:<br>
			<ul>
				<li><strong>Event Name</strong> to modify results courses, entries, runners, etc.<br>
				<li><strong>Prelim->Upload</strong> to upload preliminary results (txt) and splits (html) files.<br>
				<li><strong>Journal->(Re)Import</strong> to import or re-import official results (CSV file) into journal for validation and posting.<br>
				<li><strong>RG->Add (or Edit)</strong> to add/modify RouteGadget link(s).<br>
				<li><strong>AP->Add (or Edit)</strong> to add/modify AttackPoint.org link(s).<br>
				<li><strong>Other->Upload</strong> to upload other results (txt, html, pdf), for ex. Scouts results.<br>
			</ul>
			</p>
			<table border="1" cellpadding="2" cellspacing="0" align="center">
				<tr>
				<th><strong>#</strong></th>
				<th><strong>Event</strong></th>
				<th><strong>Date</strong></th>
				<th><strong>Report</strong></th>
				<th><strong>Prelim</strong></th>
				<th><strong>Rslt</strong></th>
				<th><strong>Splt</strong></th>
				<th><strong>Misc</strong></th>
				<th><strong>Journal</strong></th>
				<th><strong>Results</strong></th>
				<th><strong>RG</strong></th>
				<th><strong>AP</strong></th>
				</tr>
				<?php
				$count = 1;
				foreach ($rs as $row) {
					// # //
					printf("<tr bgcolor=\"%s\">\n",$count %2 ? "#f0f0f0" : "#ffffff");
					printf("<td style=\"text-align:right;\">%-2d</td>\n",$count++);
					// Event //
					if ($row['rslt_avail'] > 0) {
						printf("<td style=\"text-align:left;\"><strong><a href=\"cs_list.php?sked_id=%d\">%s</a></strong></td>\n",$row['sked_id'],stripslashes($row['name']));
					} else {
						printf("<td style=\"text-align:left;\">%s</td>\n",stripslashes($row['name']));
					}
					// Date //
					printf("<td>%s</td>\n",FormatDate($row['ev_date']));
					// ED Report //
					printf("<td style=\"text-align:center;\">%s</td>\n",$row['rpt_avail'] > 0 ? "Yes" : "&nbsp;");
					// Preliminary results //
					printf("<td align=\"center\"><a href='rslt_upload.php?sked_id=%d'>%s</a></td>\n",$row['sked_id'],$row['rs_avail'] + $row['sp_avail'] + $row['ot_avail'] == 0 ? "Upload" : "Re-Upload");
					// Links - results, splits, and misc., for ex. scouts results //
					printf("<td style=\"text-align:center;\">%s</td>\n",$row['rs_avail'] > 0 ? "Yes" : "&nbsp;");
					printf("<td style=\"text-align:center;\">%s</td>\n",$row['sp_avail'] > 0 ? "Yes" : "&nbsp;");
					printf("<td style=\"text-align:center;\">%s</td>\n",$row['ot_avail'] > 0 ? "Yes" : "&nbsp;");
					// Journal //
					if ($row['jnl_avail'] > 0)
						printf("<td align=\"center\"><a href='rslt_jnl_list.php?sked_id=%d&list=all'>Edit</a></td>\n",$row['sked_id']);
					else
						printf("<td align=\"center\"><a href='rslt_import.php?sked_id=%d'>%s</a></td>\n",$row['sked_id'],$row['rslt_avail'] > 0 ? "Re-Import" : "Import");
					// Official //
					if ($row['rslt_avail'] > 0) {
						printf("<td style=\"text-align:center;\">%s / %s</td>\n",$row['rslt_avail'] > 0 ? sprintf("%d",$row['rslt_avail']) : "--",$row['rank_avail'] > 0 ? sprintf("%d",$row['rank_avail']) : "--");
					} else {
						printf("<td align=\"center\">&nbsp;</td>\n");
					}
					// RG Links //
					if (($row['rslt_avail'] > 0) || ($row['rg_avail'] > 0))
						printf("<td style=\"text-align:center;\"><a href='lnk_edit_rg.php?sked_id=%d'>%s</a></td>\n",$row['sked_id'],$row['rg_avail'] > 0 ? sprintf("Edit (%d)",$row['rg_avail']) : "Add");
					else
						printf("<td align=\"center\">&nbsp;</td>\n");
					// AttackPoint Links //
					if (($row['rslt_avail'] > 0) || ($row['ap_avail'] > 0))
						printf("<td style=\"text-align:center;\"><a href='lnk_edit_ap.php?sked_id=%d'>%s</a></td>\n",$row['sked_id'],$row['ap_avail'] > 0 ? sprintf("Edit (%d)",$row['ap_avail']) : "Add");
					else
						printf("<td align=\"center\">&nbsp;</td>\n");
					
					printf("</tr>\n");
				}
				?>
			</table>
		<?php
		}
		
		?>
		<div style="height:20px;"></div>
		<div align="center">
		<form action="rank_process.php" method="post" style="padding-bottom:16px;">
			<?php
			printf("<input type=\"hidden\" name=\"ev_year\" value=\"%d\" />\n",$ev_year); 
			if ($curr_year == $ev_year) {
			?>
				<input type="submit" value="Calculate <?php echo $ev_year ?> Rankings" />
			<?php
			}
			?>
		</form>
		</div>

	</div>	<!-- end content -->
	<div id="footer">DVOA Results and Rankings Admin - <?php echo $_SESSION['mmbr_access_code'];?></div>
</div>	<!-- end wrapper -->

</body>
</html>

<?php
$db->Close();
?>