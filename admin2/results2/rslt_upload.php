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

if (isset($_REQUEST['sked_id']))
	$sked_id = intval($_REQUEST['sked_id']);
else
	$sked_id = 0;

if (!isset($_SESSION['err_code']))
	$_SESSION['err_code'] = 0;
//if (isset($_SESSION['sked_id']))
//	$sked_id = $_SESSION['sked_id'];
if (isset($_SESSION['rsltfilename']))
	$rsltfilename = $_SESSION['rsltfilename'];
if (isset($_SESSION['spltfilename']))
	$spltfilename = $_SESSION['spltfilename'];
if (isset($_SESSION['miscfilename']))
	$miscfilename = $_SESSION['miscfilename'];
if (isset($_SESSION['lnk_rslt_txt']))
	$lnk_rslt_txt = $_SESSION['lnk_rslt_txt'];
if (isset($_SESSION['lnk_splt_txt']))
	$lnk_splt_txt = $_SESSION['lnk_splt_txt'];
if (isset($_SESSION['lnk_misc_txt']))
	$lnk_misc_txt = $_SESSION['lnk_misc_txt'];

$title = "DVOA E-Punch Results/Splits Upload";

if ($sked_id != 0) {	
	$sql  = "SELECT e.name,e.ev_date,e.ev_year,";
	$sql .= "(SELECT COUNT(*) FROM result_lnk l WHERE l.sked_id = e.sked_id AND l.lnk_type=0) AS rs_avail,";
	$sql .= "(SELECT COUNT(*) FROM result_lnk l WHERE l.sked_id = e.sked_id AND l.lnk_type=1) AS sp_avail,";
	$sql .= "(SELECT COUNT(*) FROM result_lnk l WHERE l.sked_id = e.sked_id AND l.lnk_type=4) AS ot_avail";
	$sql .= " FROM event_list e";
	$sql .= " WHERE e.sked_id=%i";
	list($ev_name,$ev_date,$ev_year,$rs_avail,$sp_avail,$ot_avail) = $db->queryFirstList($sql,$sked_id);
	
	$title = sprintf("[%d] DVOA %s (%s) E-Punch Results/Splits Upload",$sked_id,$ev_name,FormatDate($ev_date));
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
		<h1>DVOA Admin</h1>
		<h2>E-Punch File(s) Upload</h2>
	</div>

	<?php
	GetUserBar();
	?>

	<div id="content" style="text-align:center;">

	<div class="topic_title"><h3><?php echo $title ?></h3></div>

	<form onSubmit="return validate(this);" name="getresultsfile" method="post" action="rslt_upload_process.php" enctype="multipart/form-data">
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
						$sql = "SELECT sked.id,dayofwk,ev_date,map_id,shortname FROM sked,maplist WHERE sked.map_id=maplist.id AND ev_date<=CURDATE() ORDER BY ev_date DESC LIMIT 5";
						$rs  = $db->query($sql);
						foreach ($rs as $row) {
							printf("<option value=\"%d\"%s>%s, %s %s</option>\n",$row['id'],$row['id'] == $sked_id ? " selected=\"selected\"" : "",$row['shortname'],$row['dayofwk'],FormatDate($row['ev_date']));
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
		$show_caption = false;
		?>
		
		<div class="item">
			<div class="wrap2col">
				<div class="left2col">
				<?php
				if ($rs_avail > 0) {
					printf("<span style=\"color:#c00;font-weight:bold;\">*</span>\n");
					$show_caption = true;
				}
				?>
				Results Label/File:</div>
				<div class="right2col">
				<input type="text" name="lnk_rslt_txt" value="Results" maxlength="40" size="24" />
				<input type="File" name="rsltfile" maxsize="200" size="32" value="Browse...">
				<?php
				if ($_SESSION['err_code'] & 0x02)
					printf("<span class=\"err_code\">Please select a results file (txt,html)</span>");
				if ($_SESSION['err_code'] & 0x10)
					printf("<span class=\"err_code\">Not a valid results file</span>");
				?>
				<br />Select the results file to upload. The results filename must be a *.txt or *.html file. <br><strong>Please do not use spaces in the filename</strong>.
				</div>
			</div>
		</div>


		<div class="item">
			<div class="wrap2col">
				<div class="left2col">
				<?php
				if ($sp_avail > 0) {
					printf("<span style=\"color:#c00;font-weight:bold;\">*</span>\n");
					$show_caption = true;
				}
				?>
				Splits Label/File:</div>
				<div class="right2col">
				<input type="text" name="lnk_splt_txt" value="Splits" maxlength="40" size="24" />
				<input type="File" name="spltfile" maxsize="200" size="32" value="Browse...">
				<?php
				if ($_SESSION['err_code'] & 0x02)
					printf("<span class=\"err_code\">Please select a splits file (txt,html)</span>");
				if ($_SESSION['err_code'] & 0x10)
					printf("<span class=\"err_code\">Not a valid splits file</span>");
				?>
				<br />Select the splits file to upload. The splits file must be a *.txt or *.html file. <br><strong>Please do not use spaces in the filename</strong>.
				</div>
			</div>
		</div>

		<div class="item">
			<div class="wrap2col">
				<div class="left2col">
				<?php
				if ($ot_avail > 0) {
					printf("<span style=\"color:#c00;font-weight:bold;\">*</span>\n");
					$show_caption = true;
				}
				?>
				Misc. Label/File:</div>
				<div class="right2col">
				<input type="text" name="lnk_misc_txt" value="Misc." maxlength="40" size="24" />
				<input type="File" name="miscfile" maxsize="200" size="32" value="Browse...">
				<?php
				if ($_SESSION['err_code'] & 0x02)
					printf("<span class=\"err_code\">Please select misc. results file (txt,html,pdf)</span>");
				if ($_SESSION['err_code'] & 0x10)
					printf("<span class=\"err_code\">Not a valid file</span>");
				?>
				<br />Select the file to upload. The file must be a *.txt, *.html, or *.pdf file. <br><strong>Please do not use spaces in the filename</strong>.
				</div>
			</div>
		</div>

		<div class="item">
			<div class="wrap2col">
				<div class="left2col"></div>
				<div class="right2col">
				<input type="Submit" value="Upload">
				</div>
			</div>
		</div>
		<?php
		if ($show_caption) {
			printf("<tr><td colspan=\"2\">&nbsp;</td></tr>\n");
			printf("<tr><td colspan=\"2\" align=\"center\"><span style=\"color:#c00;font-weight:bold;\">*</span>&nbsp;File already exists. By choosing a new file, the existing one will be deleted and replaced by a new one.</td></tr>\n");
		}
		?>
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