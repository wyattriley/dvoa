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

if (isset($_REQUEST['runner_id']))
	$runner_id = intval($_REQUEST['runner_id']);
else
	header("location:rslt_list.php?sked_id=$sked_id&cs_id=$cs_id");
	
$dbgen = new MeekroDB("dbgen"); //Read-write access
$mysqli = $db->get();

$title = "DVOA Results Runner Validation";

if ($runner_id != 0) {
	$sql  = "SELECT mmbr_id,fname,lname,sex,yob,club_id,club_name";
	$sql .= " FROM result_runner r";
	$sql .= " WHERE r.id=%i";
	
	if(isset($_POST['submit'])) {
		$runner_id = intval($_POST['runner_id']);
		$sked_id = intval($_POST['sked_id']);
		$cs_id = intval($_POST['cs_id']);
		$mmbr_id = intval($_POST['mmbr_id']);
		$fname = $mysqli->real_escape_string($_POST['fname']); //mysql_real_escape_string();
		$lname = $mysqli->real_escape_string($_POST['lname']); //mysql_real_escape_string();
		$sex = $_POST['sex'];
		$yob = $_POST['yob'];
		$club_id = $_POST['club_id'];
		$club_name = $mysqli->real_escape_string($_POST['club_name']); //mysql_real_escape_string();

		$oldrow = $db->queryFirstRow($sql,$runner_id);
		if ($oldrow != NULL) {
			if (($fname != $oldrow['fname']) ||
				($lname != $oldrow['lname']) ||
				($club_name != $oldrow['club_name']))
			{
				$db->update(
					'result_runner,
					'array('fname' => $fname,'lname' => $lname,'club_name' => $club_name),"id=%i",$runner_id);
				
				if ($club_name != $oldrow['club_name'])
					$db->update(
						'result_ledger',
						array('club_name' => $club_name),"runner_id=%i",$runner_id);
			}
			
			if (($sex != $oldrow['sex']) ||
				($yob != $oldrow['yob']))
			{
				$db->update(
					'result_runner',
					array('sex' => $sex,'yob' => $yob),"id=%i",$runner_id);
				
				$sql  = sprintf("UPDATE result_ledger SET");
				$sql .= sprintf(" sex='%s'",$sex);
				$sql .= sprintf(",agecl_id = (SELECT a.id FROM agecls a WHERE a.sex = '%s' AND (YEAR(result_ledger.ev_date) - %d) BETWEEN a.min_age AND a.max_age AND a.dflt = 'Y')",$sex,$yob);
				$sql .= sprintf(",agecl_label = (SELECT a.label FROM agecls a WHERE a.sex = '%s' AND (YEAR(result_ledger.ev_date) - %d) BETWEEN a.min_age AND a.max_age AND a.dflt = 'Y')",$sex,$yob);
				$sql .= sprintf(" WHERE runner_id=%d",$runner_id);
				$db->query($sql);
				
				if (($yob != $oldrow['yob']) && ($oldrow['mmbr_id'] != 0))
					$db->update('yb=%d",$yob',array('yb' => $yob),"id=%i",$mmbr_id);
			}
		}
		header("location:rslt_list.php?sked_id=$sked_id&cs_id=$cs_id");
	} else {
		list($mmbr_id,$fname,$lname,$sex,$yob,$club_id,$club_name) = $db->queryFirstList($sql,$runner_id);
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
	<h2>Results Runner Validation</h2>
	</div>

	<?php
	GetUserBar();
	?>

	<div id="content">
		<div class="topic_title"><h3><?php echo $title ?></h3></div>
		
		<div class="frm_wrap">
			<?php
			printf("<p align=\"center\"><a href=\"rslt_list.php?sked_id=%d&cs_id=%d\">Return</a></p>\n\n",$sked_id,$cs_id);
			?>
		
			<form method="post" action="">
				<?php
				printf("<input type=\"hidden\" name=\"runner_id\" value=\"%d\" />\n",$runner_id);
				printf("<input type=\"hidden\" name=\"sked_id\" value=\"%d\" />\n",$sked_id);
				printf("<input type=\"hidden\" name=\"cs_id\" value=\"%d\" />\n",$cs_id);
				?>
				
				<div class="item">
					<div class="titles">&nbsp;</div>
					<div class="inner_wrap">
						<div class="inputs">
						</div>
					</div>
				</div>

				<div class="item"> 
					<div class="titles">DVOA Member ID:</div>
					<div class="inner_wrap">
					<?php
						printf("<input type=\"hidden\" name=\"mmbr_id\" value=\"%d\" />\n",$mmbr_id);
						if ($mmbr_id != 0)
							printf("%s\n",$mmbr_id);
						else
							printf("&nbsp;\n");
					?>
					</div>
					<?php
					if ($mmbr_id != 0) {
						$sql = "SELECT CONCAT_WS(' ',fname,lname) as mmbr_name,sex,yb,YEAR(CURDATE())-yb as age,primeclub,YEAR(exp) as exp_year FROM mmbr WHERE id=%i";
						list($mmbr_name,$mmbr_sex,$mmbr_yob,$mmbr_age,$mmbr_club,$mmbr_exp) = $db->queryFirstList($sql,$mmbr_id);
						printf("<div class=\"exs\">Name: %s, Gender: %s, YOB: %d, Age: %d, Club: %s, Exp.: %d</div>",$mmbr_name,$mmbr_sex,$mmbr_yob,$mmbr_age,$mmbr_club,$mmbr_exp);
					} else {
						printf("<div class=\"exs\">&nbsp;</div>");
					}
					//printf("<div class=\"exs\">&nbsp;</div>");
					?>
				</div>
			
				<div class="item">
					<div class="titles">First Name:</div>
					<div class="inner_wrap">
						<div class="inputs">
						<?php
						printf("<input type=\"text\" size=\"24\" maxlength=\"50\" name=\"fname\" value=\"%s\">\n",stripslashes($fname));
						?>
						</div>
						<?php
						printf("<div class=\"exs\">Edit this runner's first (given) name.\n</div>");
						?>
					</div>
				</div>
				
				<div class="item">
					<div class="titles">Last Name:</div>
					<div class="inner_wrap">
						<div class="inputs">
						<?php
						printf("<input type=\"text\" size=\"24\" maxlength=\"50\" name=\"lname\" value=\"%s\">\n",stripslashes($lname));
						?>
						</div>
						<?php
						printf("<div class=\"exs\">Edit this runner's last (family) name.\n</div>");
						?>
					</div>
				</div>
				
				<div class="item">
					<div class="titles">Gender:</div>
					<div class="inner_wrap">
						<div class="inputs">
						<?php
						printf("<input type=\"radio\" name=\"sex\" value=\"M\"%s />Male\n",$sex == "M" ? " checked=\"checked\"" : "");
						printf("<input type=\"radio\" name=\"sex\" value=\"F\"%s />Female\n",$sex == "F" ? " checked=\"checked\"" : "");
						?>
						</div>
						<?php
						printf("<div class=\"exs\">Edit this runner's gender (M or F).\n</div>");
						?>
					</div>
				</div>

				<div class="item">
					<div class="titles">Birth Year:</div>
					<div class="inner_wrap">
						<div class="inputs">
							<select name="yob">
								<option value="0">Please select...</option>
								<?php
								for ($yy = date("Y"); $yy > date("Y") - 100; $yy--) {
									printf("<option value=\"%d\"%s>%d</option>\n",$yy,$yy == $yob ? " selected=\"selected\"" : "",$yy);
								}
								?>
							</select>
						</div>
						<?php
						printf("<div class=\"exs\">Select this runner's birth year.\n</div>");
						?>
					</div>
				</div>

				<div class="item">
					<div class="titles">Club Name:</div>
					<div class="inner_wrap">
						<div class="inputs">
						<?php
						printf("<input type=\"text\" size=\"12\" maxlength=\"12\" name=\"club_name\" value=\"%s\">\n",$club_name);
						?>
						</div>
						<div class="exs">Edit this runner's club name</div>
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