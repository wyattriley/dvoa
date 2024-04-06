<?php
session_start();

include_once("../../tools/dvoa_tools.inc.php");
include_once ("../../tools/db.dvoa.class.php");
$db = new MeekroDB("dbgen"); //read-write access

$title  = "DVOA Results Deletion";

if (isset($_REQUEST['sked_id'])) {
	$sked_id = intval($_REQUEST['sked_id']);
} else {
	$sked_id = 0;
}	

if (isset($mmbr_bit)) {
	$_SESSION['page_access_code'] = $mmbr_bit;
}

if ($sked_id != 0) {
	if(isset($_POST['submit'])) {
		$sked_id = intval($_POST['sked_id']);
		$sql = sprintf("CALL rslt_jnl_crs_delete(%d)",$sked_id);
		$db->query($sql);
		
		header("location:index.php");
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $title ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="Robots" content="NOINDEX" />
<link href="results.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">
	<div id="header">
		<h1>DVOA Admin</h1>
		<h2>DVOA Results Journal - Deletion of Single Event</h2>
	</div>

	<?php
	GetUserBar();
	?>

	<div id="content">
		<div class="topic_title"><h3><?php echo $title ?></h3></div>
		<div class="frm_wrap">
			<?php
			printf("<p align=\"center\"><a href=\"index.php\">Return</a>\n\n");
			?>
			
			<div style="text-align:center;margin-left:10px;">
			<?php
				$sql = "SELECT s.ev_date,m.map,m.shortname FROM sked s,maplist m WHERE s.map_id=m.id AND s.id=%i";
				list($ev_date,$map,$shortname) = $db->queryFirstList($sql,$sked_id);
				
				printf("<p><strong>Delete results journal for [%d] %s (%s)</strong></p>\n\n",$sked_id,$shortname,FormatDate($ev_date));
			?>
			</div>
		
			<div style="height:20px;"></div>
			
			<div align="center">
				<form method="post" action="" style="padding-bottom:16px;">
					<?php
					printf("<input type=\"hidden\" name=\"sked_id\" value=\"%d\" />\n",$sked_id);
					?>
					<input class="submit_button" type="submit" name="submit" value="Delete Results" />
				</form>
			</div>
		</div>
	</div>
	<div id="footer">DVOA Results and Rankings Admin - <?php 
		if (isset($_SESSION['mmbr_access_code'])) {
			echo $_SESSION['mmbr_access_code'];
		} else {
			echo "no mmbr_access_code set";
		}
		?></div>
</div>
</body>
</html>

<?php
}

$db->Close();
session_destroy();
?>

