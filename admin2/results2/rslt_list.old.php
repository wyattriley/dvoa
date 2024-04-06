<?php
session_start();
include_once("../../tools/dvoa_tools.inc.php");

//bring us back here after logging in
$_SESSION['redir_url'] = $_SERVER['PHP_SELF'];
//get the access bits
include_once("../../users/access_bits.inc.php");
//set this page's access code
$_SESSION['page_access_code'] = $results_bit;
// now check the login
include_once("../../users/validate.php");
include_once("../../tools/db.dvoa.class.php");

if (isset($_REQUEST['sked_id']))
	$sked_id = intval($_REQUEST['sked_id']);
else
	header("location:index.php");

if (isset($_REQUEST['cs_id']))
	$cs_id = intval($_REQUEST['cs_id']);
else
	header("location:cs_list.php?sked_id=$sked_id");

$db = new MeekroDB("dbgen"); //Read-write access

if ($sked_id != 0) {
	$sql  = "SELECT e.shortname,e.ev_date FROM event_list e WHERE e.sked_id = %i";
	list($shortname,$ev_date) = $db->queryFirstList($sql,$sked_id);
	$title = sprintf("[%d] %s (%s) Course Results List",$sked_id,$shortname,FormatDate($ev_date));
} else {
	$title = "Event Course Results List";
}
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
		<h2>Rankings Results - Course Results</h2>
	</div>

	<?php
	GetUserBar();
	?>
	<div id="content">
		<?php //<div style="height:20px;"></div> ?>
		<div class="topic_title"><h3><?php echo $title ?></h3></div>
		
		<?php
		printf("<p align=\"center\"><a href=\"cs_list.php?sked_id=$sked_id\">Return</a></p>\n");

		if ($sked_id != 0) {
			$sql  = "SELECT l.entry_no,l.name,l.sex,l.agecl_label,l.club_name,l.etime,l.rank_incl,l.runner_id,s.label";
			$sql .= " FROM result_ledger l,result_status s";
			$sql .= " WHERE l.sked_id = %i";
			$sql .= " AND l.cs_id = %i";
			$sql .= " AND l.status = s.id";
			$rs = $db->query($sql,$sked_id,$cs_id);
			if ($db->count() > 0) {
			?>
				<p align="center">Click the orienteer/group name to modify.</p>
				<table border="1" cellpadding="2" cellspacing="0" align="center">
					<tr>
					<th><strong>#</strong></th>
					<th><strong>Name</strong></th>
					<th><strong>Sex</strong></th>
					<th><strong>Age</strong></th>
					<th><strong>Club</strong></th>
					<th><strong>Time</strong></th>
					<th><strong>Status</strong></th>
					<th><strong>Rankable?</strong></th>
					<th><strong>Runner</strong></th>
					<th><strong>DVOA Member?</strong></th>
					</tr>
					<?php
					$count = 1;
					foreach ($rs as $row) {
						printf("<tr bgcolor=\"%s\">\n",$count %2 ? "#f0f0f0" : "#ffffff");
						printf("<td style=\"text-align:right;\">%-2d</td>\n",$count);
						$count++;

						printf("<td><a href=\"rslt_edit.php?sked_id=%d&cs_id=%d&entry_no=%d\">%s</a></td>\n",$sked_id,$cs_id,$row['entry_no'],stripslashes($row['name']));
						printf("<td style=\"text-align:center;\">%s</td>\n",$row['sex']);
						printf("<td style=\"text-align:left;\">%s</td>\n",$row['agecl_label']);
						printf("<td style=\"text-align:left;\">%s</td>\n",$row['club_name']);
						printf("<td style=\"text-align:right;\">%s</td>\n",$row['etime']);
						printf("<td style=\"text-align:center;\">%s</td>\n",$row['label']);
						printf("<td style=\"text-align:center;\">%s</td>\n",$row['rank_incl'] > 0 ? "Yes" : "&nbsp;");
						if ($row->runner_id > 0) {
							printf("<td style=\"text-align:center;\"><a href=\"runner_edit.php?sked_id=%d&cs_id=%d&runner_id=%d\">Edit</a></td>\n",$sked_id,$cs_id,$row['runner_id']);
							$sql = "SELECT mmbr_id FROM result_runner WHERE id=%i";
							$mmbr_id = $db->queryFirstField($sql,$row['runner_id']);
						} else {
							printf("<td align=\"center\">&nbsp;</td>\n");
							$mmbr_id = 0;
						}
						if ($mmbr_id != 0)
							//printf("<td style=\"text-align:center;\"><a href=\"../mmbr/mmod.php?this_mmbr_id=%d\">%-4d</a></td>\n",$mmbr_id,$mmbr_id);
							printf("<td style=\"text-align:center;\">Yes</td>\n");
						else
							printf("<td align=\"center\">&nbsp;</td>\n");
						printf("</tr>\n");
					}
					?>
				</table>
			<?php
			}
		}
		?>
		<div style="height:20px;"></div>
	</div>	<!-- end content -->
	<div id="footer">DVOA Results and Rankings Admin - <?php echo $_SESSION['mmbr_access_code'];?></div>
</div>	<!-- end wrapper -->

</body>
</html>

<?php
$db->Close();
?>