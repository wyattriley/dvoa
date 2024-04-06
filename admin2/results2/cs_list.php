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

$db = new MeekroDB("dbgen"); // Read-write access

if ($sked_id != 0) {
	$sql = "SELECT e.shortname,e.ev_date,e.ev_year FROM event_list e WHERE e.sked_id=%i";
	list($shortname,$ev_date,$ev_year) = $db->queryFirstList($sql,$sked_id);
	$title = sprintf("[%d] %s (%s) Course List",$sked_id,$shortname,FormatDate($ev_date));
} else {
	$title = "Event Course List";
}

$curr_year = date("Y");
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
		<h2>Rankings Results - Courses</h2>
	</div>

	<?php
	GetUserBar();
	?>
	<div id="content">
		<?php //<div style="height:20px;"></div> ?>
		<div class="topic_title"><h3><?php echo $title ?></h3></div>
		
		<?php
		printf("<p align=\"center\"><a href=\"index.php%s\">Return</a></p>\n",$curr_year != $ev_year ? sprintf("?ev_year=%d",$ev_year) : "");

		if ($sked_id != 0) {
			$sql  = "SELECT c.id,c.cs_name,c.cs_length,c.cs_climb,c.cs_controls,c.rank_incl,s.course,COUNT(l.entry_no) runners_cnt";
			$sql .= " FROM result_course c, result_ledger l, crs s";
			$sql .= " WHERE c.sked_id = %i";
			$sql .= " AND l.sked_id = c.sked_id";
			$sql .= " AND l.cs_id = c.id";
			$sql .= " AND s.crs_id = c.crs_id";
			$sql .= " GROUP BY c.id";
			$sql .= " ORDER BY c.crs_id";
			$rs = $db->query($sql,$sked_id);
			if ($db->count() == 0) {
				$sql  = "SELECT c.id,c.cs_name,c.cs_length,c.cs_climb,c.cs_controls,c.rank_incl,s.course,COUNT(l.entry_no) runners_cnt";
				$sql .= " FROM result_course c, result_jnl l, crs s";
				$sql .= " WHERE c.sked_id = %i";
				$sql .= " AND l.sked_id = c.sked_id";
				$sql .= " AND l.cs_id = c.cs_id";
				$sql .= " AND s.crs_id = c.crs_id";
				$sql .= " GROUP BY c.id";
				$sql .= " ORDER BY c.crs_id";
				$rs = $db->query($sql,$sked_id);
			}
			if ($db->count() > 0) {
			?>
				<p align="center">Click the course name to modify.</p>
				<table border="1" cellpadding="2" cellspacing="0" align="center">
					<tr>
						<th><strong>#</strong></th>
						<th><strong>Course (DVOA crs.)</strong></th>
						<th><strong>Length (km)</strong></th>
						<th><strong>Climb (m)</strong></th>
						<th><strong>Controls #</strong></th>
						<th><strong>Rankable?</strong></th>
					</tr>
					<?php
					$count = 1;
					foreach ($rs as $row) {
						printf("<tr bgcolor=\"%s\">\n",$count %2 ? "#f0f0f0" : "#ffffff");
						printf("<td style=\"text-align:right;\">%-2d</td>\n",$count);
						$count++;

						printf("<td><a href=\"cs_edit.php?sked_id=%d&cs_id=%d\">%s (%s)</a></td>\n",$sked_id,$row['id'],stripslashes($row['cs_name']),$row['course']);
						printf("<td style=\"text-align:right;\">%0.2f km</td>\n",$row['cs_length']);
						printf("<td style=\"text-align:right;\">%0.1f m</td>\n",$row['cs_climb']);
						printf("<td style=\"text-align:center;\">%3d</td>\n",$row['cs_controls']);
						printf("<td style=\"text-align:center;\"><a href=\"rslt_list.php?sked_id=%d&cs_id=%d\">%s (%2d)</td>\n",$sked_id,$row['id'],$row['rank_incl'] > 0 ? "Yes" : "No",$row['runners_cnt']);
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


