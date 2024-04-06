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

$db = new MeekroDB("dbgen"); // Read-Write access

if ($sked_id != 0) {
	$sql = "SELECT s.ev_date,m.map,m.shortname FROM sked s,maplist m WHERE s.map_id=m.id AND s.id=%i";
	list($ev_date,$map,$shortname) = $db->queryFirstList($sql,$sked_id);

	$title = sprintf("[%d] DVOA %s (%s) Results Course Validation",$sked_id,$shortname,FormatDate($ev_date));
} else {
	$title = "DVOA Results Course Validation";
}

if ($cs_id != 0) {
	$sql  = "SELECT c.crs_id,c.cs_name,c.cs_length,c.cs_climb,c.cs_controls,c.rank_incl";
	$sql .= " FROM result_course c";
	$sql .= " WHERE c.id=%i";

	if(isset($_POST['submit'])) {
		$cs_id = intval($_POST['cs_id']);
		$crs_id = intval($_POST['crs_id']);
		$cs_name = $_POST['cs_name'];
		$cs_length = floatval($_POST['cs_length']);
		$cs_climb = intval($_POST['cs_climb']);
		$cs_controls = intval($_POST['cs_controls']);
		$rank_incl = intval($_POST['rank_incl']);
		
		$oldrow = $db->queryFirstRow($sql,$cs_id);
		if ($oldrow != NULL) {
			if ((($crs_id != 0) && ($crs_id != $oldrow['crs_id'])) ||
				(($cs_name != "") && ($cs_name != $oldrow['cs_name'])) ||
				(($cs_length != 0) && ($cs_length != $oldrow['cs_length'])) ||
				(($cs_climb != 0) && ($cs_climb != $oldrow['cs_climb'])) ||
				(($cs_controls != 0) && ($cs_controls != $oldrow['cs_controls'])) ||
				(($rank_incl != -1) && ($rank_incl != $oldrow['rank_incl'])))
			{
				/* A member/runner id was assigned */
				$db->update(
					'result_course',
					array(
						'crs_id' => $crs_id,
						'cs_name' => $cs_name,
						'cs_length' => $cs_length,
						'cs_climb' => $cs_climb,
						'cs_controls' => $cs_controls,
						'rank_incl' => $rank_incl),
					"id=%i",$cs_id);

				if (($rank_incl != -1) && ($rank_incl != $oldrow['rank_incl'])) {
					$val = array('rank_incl' => $rank_incl);
					if ($rank_incl == 0)
						$val = array_merge ($val, array('rank_speed' => 0,'rank_pos' => 0,'rank_score' => 0));
					$db->update('result_ledger',$val,"cs_id=%i",$cs_id);
				}
			}
		}
		header("location:cs_list.php?sked_id=$sked_id");

	} else {
		list($crs_id,$cs_name,$cs_length,$cs_climb,$cs_controls,$rank_incl) = $db->queryFirstList($sql,$cs_id);
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $title ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="Robots" content="NOINDEX" />
<link rel="stylesheet" type="text/css" href="results.css" />
</head>
<body>
<div id="wrapper">
	<div id="header">
	<h1>DVOA Administration</h1>
	<h2>Rankings Results - Course Validation</h2>
	</div>

	<?php
	GetUserBar();
	?>

	<div id="content">
		<div class="topic_title"><h3><?php echo $title ?></h3></div>
		
		<div class="frm_wrap">
			<?php
			printf("<p align=\"center\"><a href=\"cs_list.php?sked_id=%s\">Return</a></p>\n\n",$sked_id);
			?>
		
			<form method="post" action="">
				<?php
				printf("<input type=\"hidden\" name=\"cs_id\" value=\"%d\" />\n",$cs_id);
				?>
				<div class="item">
					<div class="titles">&nbsp;</div>
					<div class="inner_wrap">
						<div class="inputs">
						</div>
					</div>
				</div>

				<?php
				
				//printf("<td>");
				
				$sql = "SELECT crs_id,abbr,course,rank_incl FROM crs";
				$rscrs = $db->query($sql);
				if ($db->count() > 0) {
				?>
					<div class="item"> 
						<div class="titles">DVOA Course ID:</div>
						<div class="inner_wrap">
						<select name="crs_id">
							<option value="">Choose course ...</option>
							<?php
							foreach ($rscrs as $rowcrs) {
								$display = sprintf(" %12s | %s",$rowcrs['course'],$rowcrs['rank_incl'] == 1 ? "Rankable" : "None");
								printf("<option value=\"%s\"%s>%s</option>\n",$rowcrs['crs_id'],$crs_id == $rowcrs['crs_id'] ? " selected=\"selected\"" : "",$display);
							}
							?>
						</select>
						</div>
						<div class="exs">Choose course from existing DVOA course list.</div>
					</div>
				<?php
				} else {
				?>
					<div class="item"> 
						<div class="titles">DVOA Course ID:</div>
						<div class="inner_wrap">
						<?php
							printf("%s\n",$crs_id);
						?>
						</div>
						<div class="exs">DVOA Course ID.</div>
					</div>
				<?php
				}
				//printf("</td>\n");
				?>
			
				<div class="item">
					<div class="titles">Course Name:</div>
					<div class="inner_wrap">
						<div class="inputs">
						<?php
						printf("<input type=\"text\" size=\"24\" maxlength=\"50\" name=\"cs_name\" value=\"%s\">\n",stripslashes($cs_name));
						?>
						</div>
						<div class="exs">Edit this course name.</div>
					</div>
				</div>
				
				<div class="item">
					<div class="titles">Course Length (km):</div>
					<div class="inner_wrap">
						<div class="inputs">
						<?php
						printf("<input type=\"text\" size=\"12\" maxlength=\"12\" name=\"cs_length\" value=\"%0.2f\">\n",$cs_length);
						?>
						</div>
						<div class="exs">Edit this course length (km).</div>
					</div>
				</div>
				
				<div class="item">
					<div class="titles">Course Climb (m):</div>
					<div class="inner_wrap">
						<div class="inputs">
						<?php
						printf("<input type=\"text\" size=\"12\" maxlength=\"12\" name=\"cs_climb\" value=\"%0.1f\">\n",$cs_climb);
						?>
						</div>
						<div class="exs">Edit this course climb (m).</div>
					</div>
				</div>

				<div class="item">
					<div class="titles">Course # of Controls:</div>
					<div class="inner_wrap">
						<div class="inputs">
						<?php
						printf("<input type=\"text\" size=\"12\" maxlength=\"12\" name=\"cs_controls\" value=\"%d\">\n",$cs_controls);
						?>
						</div>
						<div class="exs">Edit this course number of controls.</div>
					</div>
				</div>
				
				<div class="item">
					<div class="titles">Include in Rankings:</div>
					<div class="inner_wrap">
						<div class="inputs">
						<?php
						printf("<input type=\"radio\" name=\"rank_incl\" value=\"1\"%s />Yes\n",$rank_incl == 1 ? " checked=\"checked\"" : "");
						printf("<input type=\"radio\" name=\"rank_incl\" value=\"0\"%s />No\n",$rank_incl == 0 ? " checked=\"checked\"" : "");
						?>
						</div>
						<div class="exs">Is this course included in the Rankings calculation?</div>
					</div>
				</div>

				<div class="item">
					<div class="titles">&nbsp;</div>
					<div class="inner_wrap">
						<div class="inputs">
						<input class="submit_button" type="submit" name="submit" value="Update">
						</div>
					</div>
				</div>
			</form>
		</div>
		<div style="height:20px;"></div>
	</div>
	<div id="footer">DVOA Results and Rankings Admin - <?php echo $_SESSION['mmbr_access_code'];?></div>
</div>
</body>
</html>

<?php
}

$db->Close();
session_destroy();
?>

