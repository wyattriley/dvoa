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
$db = new MeekroDB("dbgen"); //Read-write access

if (!isset($_SESSION['err_code']))
	$_SESSION['err_code'] = 0;
//if (isset($_SESSION['sked_id']))
//	$sked_id = $_SESSION['sked_id'];
if (isset($_SESSION['csvfilename']))
	$csvfilename = $_SESSION['csvfilename'];
	
if (isset($_REQUEST['sked_id']))
	$sked_id = intval($_REQUEST['sked_id']);
else
	$sked_id = 0;

$title = "DVOA E-Punch CSV Results Import";	
if ($sked_id != 0) {	
	$sql  = "SELECT e.name,e.ev_date,e.ev_year FROM event_list e WHERE e.sked_id=%i";
	list($ev_name,$ev_date,$ev_year) = $db->queryFirstList($sql,$sked_id);
	
	$title = sprintf("[%d] DVOA %s (%s) E-Punch CSV Results Import",$sked_id,$ev_name,FormatDate($ev_date));
}

$curr_year = date("Y");
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

<script language="javascript" src="../tools/cal2.js"></script>
<script language="javascript" src="../tools/cal_conf2.js"></script>

<body>

<div id="wrapper">
	<div id="header">
		<h1>DVOA Administration</h1>
		<h2>E-Punch CSV Results Import</h2>
	</div>

	<?php
	GetUserBar();
	?>

	<div id="content" style="text-align:center;">

	<div class="topic_title"><h3><?php echo $title ?></h3></div>

	<form onSubmit="return validate(this);" name="getcsvfile" method="post" action="rslt_process.php" enctype="multipart/form-data">
	<div class="frm_wrap">
		<?php
		printf("<p align=\"center\"><a href=\"index.php%s\">Return</a></p>\n",$curr_year != $ev_year ? "?ev_year=$ev_year" : "");
		
		if ($sked_id != 0) {
			printf("<input type=\"hidden\" name=\"sked_id\" value=\"%d\" />\n",$sked_id);
		} else {
		?>
		<div class="item">
			<div class="wrap2col">
				<div class="left2col">Select Event:</div>
				<div class="right2col">
					<select name="sked_id">
						<option value="0">Please select...</option>
						<?php
						$today = date("Y-m-d");
						$sql = "SELECT sked.id,dayofwk,ev_date,map_id,shortname FROM sked,maplist WHERE sked.map_id=maplist.id AND ev_date<=CURDATE() ORDER BY ev_date DESC LIMIT 20";
						$rs  = $db->query($sql);
						foreach ($rs as $row) {
							$rslt_count = $db->queryFirstField("SELECT COUNT(*) FROM result_ledger WHERE sked_id=%i",$row['id']);
							$posted = $rslt_count > 0 ? sprintf("style=\"color:#c00;font-weight:bold;\"") : "";
						
							printf("<option %s value=\"%d\"%s>%04d %s, %s %s</option>\n",$posted,$row['id'],$row['id'] == $sked_id ? " selected=\"selected\"" : "",$row['id'],$row['shortname'],$row['dayofwk'],FormatDate($row['ev_date']));
						}
						?>
					</select>
					<?php
					if ($_SESSION['err_code'] & 0x01)
						printf("<span class=\"err_code\">Please select an event</span>");
					?>
				</div>
			</div>
		</div>
		<?php
		}
		?>

		<div class="item">
			<div class="wrap2col">
				<div class="left2col">CSV Results File:</div>
				<div class="right2col">
					<input type="File" name="csvfile" maxsize="250" size="32" value="Browse...">
					<?php
					if ($_SESSION['err_code'] & 0x02)
						printf("<span class=\"err_code\">Please select a results file</span>");
					if ($_SESSION['err_code'] & 0x10 || $_SESSION['err_code'] & 0x20)
						printf("<span class=\"err_code\">Not a valid CSV results file</span>");
					?>
					<br />Select the CSV results file to import. The results filename must be a .csv file. Please do not use spaces in the filename.
				</div>
			</div>
		</div>


		<div class="item">
			<div class="wrap2col">
				<div class="left2col"></div>
				<div class="right2col">
					<input type="Submit" value="Import">
				</div>
			</div>
		</div>
		
	</div> <!-- end frm_wrap -->		
	</form>

	</div>

	<div id="footer">DVOA Results and Rankings Admin - <?php echo $_SESSION['mmbr_access_code'];?></div>
</div>
</body>
</html>

<?php
$db->Close();
?>