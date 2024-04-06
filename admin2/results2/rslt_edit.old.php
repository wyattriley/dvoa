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

if (isset($_REQUEST['entry_no']))
	$entry_no = intval($_REQUEST['entry_no']);
else
	header("location:rslt_list.php?sked_id=$sked_id&cs_id=$cs_id");
	
$db = new MeekroDB("dbgen"); //Read-write access

if ($sked_id != 0) {
	$sql = "SELECT s.ev_date,YEAR(s.ev_date),m.map,m.shortname FROM sked s,maplist m WHERE s.map_id=m.id AND s.id=%i";
	list($ev_date,$ev_year,$map,$shortname) = $db->queryFirstList($sql,$sked_id);

	$title = sprintf("[%d] DVOA %s (%s) Results Ledger Validation",$sked_id,$shortname,FormatDate($ev_date));
} else {
	$title = "DVOA Results Ledger Validation";
}

if ($entry_no != 0) {
	$sql  = "SELECT l.entry_no,l.sked_id,l.cs_id,l.runner_id,l.name,l.sex,l.agecl_label,l.club_name,l.etime,l.nc,s.label,l.rank_incl,l.num_grp";
	$sql .= " FROM result_ledger l,result_status s";
	$sql .= " WHERE l.entry_no=%i";
	$sql .= " AND l.status = s.id";

	if(isset($_POST['submit'])) {
		$entry_no = intval($_POST['entry_no']);
		$sked_id = intval($_POST['sked_id']);
		$cs_id = intval($_POST['cs_id']);
		$name = $_POST['name'];
		$sex = $_POST['sex'];
		$club_name = $_POST['club_name'];
		$nc = intval($_POST['nc']);
		$rank_incl = intval($_POST['rank_incl']);
		$num_grp = intval($_POST['num_grp']);

		$oldrow = $db->queryFirstRow($sql,$entry_no);
		if ($oldrow != NULL) {
			// Only limited amount of fields can be edited. //
			if ((($sex != $oldrow['sex']) || ($sex == $oldrow['sex'])) && ($sex == "G")) {
				// Gender was changed (or not) to the Group - special handling for groups //
				$grp_lbl = sprintf("G%d",$num_grp); 
				$db->update(
					'result_ledger',
					array(
						'runner_id' => 0,
						'sex' => $sex,
						'num_grp' => $num_grp,
						'agecl_id' => 0,
						'agecl_label' => $grp_lbl,
						'ind' => 0,
						'rank_incl' => 0,
						'rank_speed' => 0,
						'rank_pos' => 0,
						'rank_score' => 0,
						'runners_num' => $num_grp,
						'name' => $name,
						'club_name' => $club_name),
					"entry_no=%i",
					$entry_no);
			} else {
				if ($nc == 1)
					$rank_incl = 0;
				
				$val = array(
					'name' => $name,
					'sex' => $sex,
					'club_name' => $club_name,
					'nc' => $nc,
					'rank_incl' => $rank_incl);
				if ($rank_incl == 0) 
					$val = array_merge($val,array('rank_speed' => 0,'rank_pos' => 0,'rank_score' => 0));
				$db->update('result_ledger',$val,"entry_no=%i",$entry_no);
				
			}
		}
		
		header("location:rslt_list.php?sked_id=$sked_id&cs_id=$cs_id");
	} else {
		list($entry_no,$sked_id,$cs_id,$runner_id,$name,$sex,$agecl_label,$club_name,$etime,$nc,$label,$rank_incl,$num_grp) = $db->queryFirstList($sql,$entry_no);
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
	<h2>Rankings Results - Ledger Validation</h2>
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
				printf("<input type=\"hidden\" name=\"entry_no\" value=\"%d\" />\n",$entry_no);
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
					<div class="titles">Runner ID:</div>
					<div class="inner_wrap">
					<?php
						if ($runner_id != 0)
							printf("%d\n",$runner_id);
						else
							printf("&nbsp;\n");
					?>
					</div>
					<?php
					if ($runner_id != 0) {
						$sql = "SELECT name,sex,yob,club_name FROM result_runner WHERE id=%i";
						list($rn_name,$rn_sex,$rn_yob,$rn_club_name) = $db->queryFirstList($sql,$runner_id);
						printf("<div class=\"exs\">Name: %s, Gender: %s, YOB: %d, Age: %d, Club: %s</div>",$rn_name,$rn_sex,$rn_yob,$ev_year-$rn_yob,$rn_club_name);
					} else {
						printf("<div class=\"exs\">&nbsp;</div>");
					}
					?>
				</div>
			
				<div class="item">
					<div class="titles">Name:</div>
					<div class="inner_wrap">
						<div class="inputs">
						<?php
						printf("<input type=\"text\" size=\"24\" maxlength=\"50\" name=\"name\" value=\"%s\">\n",stripslashes($name));
						?>
						</div>
						<?php
						printf("<div class=\"exs\">Edit this orienteer/group name.\n</div>");
						?>
					</div>
				</div>
				
				<div class="item">
					<div class="titles">Gender:</div>
					<div class="inner_wrap">
						<div class="inputs">
						<?php
						//printf("<input type=\"text\" size=\"3\" maxlength=\"3\" name=\"sex\" value=\"%s\">\n",$sex);
						if ($sex == "G") {
							printf("<input type=\"hidden\" name=\"sex\" value=\"%s\" />\n",$sex);
							printf("%s\n",$sex);
						} else {
							printf("<input type=\"radio\" name=\"sex\" value=\"M\"%s />Male\n",$sex == "M" ? " checked=\"checked\"" : "");
							printf("<input type=\"radio\" name=\"sex\" value=\"F\"%s />Female\n",$sex == "F" ? " checked=\"checked\"" : "");
							printf("<input type=\"radio\" name=\"sex\" value=\"G\"%s />Group\n",$sex == "G" ? " checked=\"checked\"" : "");
						}
						?>
						</div>
						<?php
						if ($sex == "G")
							printf("<div class=\"exs\">&nbsp;</div>");
						else
							printf("<div class=\"exs\">Edit this orineteer gender (M or F) or choose group (G).\n</div>");
						?>
					</div>
				</div>

				<div class="item">
					<div class="titles"># in group:</div>
					<div class="inner_wrap">
						<div class="inputs">
						<?php
						printf("<input type=\"text\" size=\"3\" maxlength=\"3\" name=\"num_grp\" value=\"%s\">\n",$num_grp);
						?>
						</div>
						<div class="exs">Number of runners in the group</div>
					</div>
				</div>

				<div class="item"> 
					<div class="titles">Age class:</div>
					<div class="inner_wrap">
					<?php
						printf("%s\n",$agecl_label);
					?>
					</div>
					<div class="exs">Age category</div>
				</div>
				
				<div class="item">
					<div class="titles">Club name:</div>
					<div class="inner_wrap">
						<div class="inputs">
						<?php
						printf("<input type=\"text\" size=\"12\" maxlength=\"12\" name=\"club_name\" value=\"%s\">\n",$club_name);
						?>
						</div>
						<div class="exs">Edit this entry club name</div>
					</div>
				</div>
				
				<div class="item"> 
					<div class="titles">Time:</div>
					<div class="inner_wrap">
					<?php
						printf("%s\n",$etime);
					?>
					</div>
					<div class="exs">Elapsed time</div>
				</div>

				<div class="item">
					<div class="titles">None competitive:</div>
					<div class="inner_wrap">
						<div class="inputs">
						<?php
						printf("<input type=\"radio\" name=\"nc\" value=\"1\"%s />Yes\n",$nc == 1 ? " checked=\"checked\"" : "");
						printf("<input type=\"radio\" name=\"nc\" value=\"0\"%s />No\n",$nc == 0 ? " checked=\"checked\"" : "");
						?>
						</div>
						<div class="exs">Did this orienteer/group run second course? (If Yes, it will be excluded from Rankings calculation)</div>
					</div>
				</div>
				
				<div class="item"> 
					<div class="titles">Status:</div>
					<div class="inner_wrap">
					<?php
						printf("%s\n",$label);
					?>
					</div>
					<div class="exs">OK, DNS, DNF, MP, DISQ, OT</div>
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
						<div class="exs">Is this runner included in the Rankings calculation? Groups are NOT included in the Rankings.</div>
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

