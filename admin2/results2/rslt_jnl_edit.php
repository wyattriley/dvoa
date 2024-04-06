<?php
session_start();

include_once("../../tools/dvoa_tools.inc.php");
include_once ("../../tools/db.dvoa.class.php");

if (isset($_REQUEST['sked_id']))
	$sked_id = intval($_REQUEST['sked_id']);
else
	$sked_id = 0;

if (isset($_REQUEST['list']))
	$list = $_REQUEST['list'];
else
	$list = "";

if (isset($_REQUEST['entry_no'])) {
	$_SESSION['entry_no'] = intval($_REQUEST['entry_no']);
	$entry_no = intval($_REQUEST['entry_no']);
} else {
	header("location:rslt_jnl_list.php?sked_id$sked_id&list=$list");
}

//bring us back here after logging in
//$_SESSION['redir_url'] = $_SERVER['PHP_SELF'];
//get the access bits
//include_once("../../users/access_bits.inc.php");
//set this page's access code
//$_SESSION['page_access_code'] = $mmbr_bit;

$db = new MeekroDB("dbgen"); //Read-write access
if ($sked_id != 0) {
	$sql = "SELECT s.ev_date,m.map,m.shortname FROM sked s,maplist m WHERE s.map_id=m.id AND s.id=%i";
	list($ev_date,$map,$shortname) = $db->queryFirstList($sql,$sked_id);

	$title = sprintf("[%d] DVOA %s (%s) Results Journal Validation",$sked_id,$shortname,FormatDate($ev_date));
} else {
	$title = "DVOA Results Journal Validation";
}

if ($entry_no != 0) {
	$fname_old = "";
	$lname_old = "";
	$yob_old = 0;
	$sex_old = "";
	$club_name_old = "";
	$runner_id_old = 0;
	$mmbr_id_old = 0;

	if(isset($_POST['submit'])) {
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$yob = intval($_POST['yob']);
		$sex = $_POST['sex'];
		$club_name = $_POST['club_name'];
		$runner_id = intval($_POST['runner_id']);
		$mmbr_id = intval($_POST['mmbr_id']);
		$alias = intval($_POST['alias']);

		$fname_old = $_POST['fname_old'];
		$lname_old = $_POST['lname_old'];
		$yob_old = intval($_POST['yob_old']);
		$sex_old = $_POST['sex_old'];
		$club_name_old = $_POST['club_name_old'];
		$runner_id_old = intval($_POST['runner_id_old']);
		$mmbr_id_old = intval($_POST['mmbr_id_old']);

		$temp = sprintf("runner_id=$runner_id [$runner_id_old] mmbr_id=$mmbr_id [$mmbr_id_old]\n");
			
		if ((($runner_id != 0) && ($runner_id != $runner_id_old)) ||
			(($mmbr_id != 0) && ($mmbr_id != $mmbr_id_old)))
		{
			/* A member/runner id was assigned */
			//$sql = "UPDATE result_jnl SET ";
			if ($runner_id != 0) {
				// Runner selected, update name, age, club in the jnl
				$sql = array('runner_id' => $runner_id);
				if ($mmbr_id != 0)
					$sql = array_merge($sql,array('mmbr_id' => $mmbr_id));
				$db->update('result_jnl',$sql,"entry_no=%i",$entry_no);
				
				if ($mmbr_id != 0) {
					$sql = array('mmbr_id' => $mmbr_id);
					if (($yob != $yob_old) && ($yob_old == 0))
						$sql = array_merge($sql,array('yob' => $yob));
					if (($club_name != $club_name_old) && ($club_name_old == ""))
						$sql = array_merge($sql,array('club_name' => $club_name));
					$db->update('result_runner',$sql,"id=%i",$runner_id);
				}
				
				$sql = "CALL rslt_jnl_upd_from_runner($entry_no)";
				$db->query($sql);
			} else if ($mmbr_id != 0) {
				$sql = array('mmbr_id' => $mmbr_id);
				if ($alias == 1) {
					// Member selected, but alias (alt. name) needs to be created as runner
					if ($fname != $fname_old)
						$sql = array_merge($sql,array('fname' => $fname));
					if ($lname != $lname_old)	
						$sql = array_merge($sql,array('lname' => $lname));
					if ($yob != $yob_old)
						$sql = array_merge($sql,array('yob' => $yob));
					if ($sex != $sex_old)
						$sql = array_merge($sql,array('sex' => $sex));
					$sql = array_merge($sql,array('runner_alias' => $alias));
					$db->update('result_jnl',$sql,"entry_no=%i",$entry_no);
					
					$sql = "CALL rslt_runner_add_alias($entry_no)";
					$db->query($sql);
				} else {
					// Member selected, update name, age, club in the jnl
					$db->update('result_jnl',$sql,"entry_no=%i",$entry_no);
					
					$sql = "CALL rslt_runner_add_mmbr($entry_no)";
					$db->query($sql);
				}
			}
		} else {
			// Non-member, create a new runner using jnl data
			if (($fname != $fname_old) ||
				($lname != $lname_old) ||
				($yob != $yob_old) ||
				($sex != $sex_old) ||
				($club_name != $club_name_old))
			{
				$sql = array(
					'fname' => $fname,
					'lname' => $lname,
					'yob' => $yob,
					'sex' => $sex,
					'club_name' => $club_name);
				$db->update('result_jnl',$sql,"entry_no=%i",$entry_no);
				
				if (($runner_id != 0) && ($yob != $yob_old) && ($yob_old == 0))
					$db->update('result_runner',array('yob' => $yob),"id=%i",$runner_id);
				if (($runner_id != 0) && ($club_name != $club_name_old) && ($club_name_old == "")) 
					$db->update('result_runner',array('club_name' => $club_name),"id=%i",$runner_id);

				$sql = "CALL rslt_jnl_upd_agecl_one($entry_no);";
				$db->query($sql);
			} else {
				$sql = "CALL rslt_runner_add_one($entry_no)";
				$db->query($sql);
			}
		}

		header("location:rslt_jnl_list.php?sked_id=$sked_id&list=$list");

	} else {
		$sql  = "SELECT j.entry_no,j.fname,j.lname,j.yob,j.age,j.sex,j.club_name,j.runner_id,j.mmbr_id,j.ind,j.orig_fname,j.orig_lname,j.orig_yob,j.orig_club_name";
		$sql .= " FROM result_jnl j";
		$sql .= " WHERE j.entry_no=%i";
		list($entry_no,$fname,$lname,$yob,$age,$sex,$club_name,$runner_id,$mmbr_id,$ind,$orig_fname,$orig_lname,$orig_yob,$orig_club_name) = $db->queryFirstList($sql,$entry_no);

		$fname_old = $fname;
		$lname_old = $lname;
		$yob_old = $yob;
		$sex_old = $sex;
		$club_name_old = $club_name;
		$runner_id_old = $runner_id;
		$mmbr_id_old = $mmbr_id;
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
		<h2>DVOA Results Journal Validation</h2>
	</div>

	<?php
	GetUserBar();
	?>

	<div id="content">
		<div class="topic_title"><h3><?php echo $title ?></h3></div>
		
		<div class="frm_wrap">
			<?php
			printf("<p align=\"center\"><a href=\"rslt_jnl_list.php?sked_id=%s&list=%s\">Return</a></p>\n",$sked_id,$list);
			if ($rslt != "")
				printf("%s\n",$rslt);
			?>
		
			<form method="post" action="">
				<?php
				printf("<input type=\"hidden\" name=\"entry_no\" value=\"%d\" />\n",$entry_no);
				printf("<input type=\"hidden\" name=\"runner_id\" value=\"%d\" />\n",$runner_id);
				printf("<input type=\"hidden\" name=\"mmbr_id\" value=\"%d\" />\n",$mmbr_id);
				printf("<input type=\"hidden\" name=\"fname_old\" value=\"%s\" />\n",$fname_old);
				printf("<input type=\"hidden\" name=\"lname_old\" value=\"%s\" />\n",$lname_old);
				printf("<input type=\"hidden\" name=\"yob_old\" value=\"%d\" />\n",$yob_old);
				printf("<input type=\"hidden\" name=\"sex_old\" value=\"%s\" />\n",$sex_old);
				printf("<input type=\"hidden\" name=\"club_name_old\" value=\"%s\" />\n",$club_name_old);
				printf("<input type=\"hidden\" name=\"runner_id_old\" value=\"%d\" />\n",$runner_id_old);
				printf("<input type=\"hidden\" name=\"mmbr_id_old\" value=\"%d\" />\n",$mmbr_id_old);
				?>

				<div class="item">
					<div class="titles">First Name:</div>
					<div class="inner_wrap">
						<div class="inputs">
						<?php
						printf("<input type=\"text\" size=\"24\" maxlength=\"50\" name=\"fname\" value=\"%s\">\n",stripslashes($fname));
						?>
						</div>
						<?php
						printf("<div class=\"exs\">Edit this runner's first name [%s].\n</div>",$orig_fname);
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
						printf("<div class=\"exs\">Edit this runner's last name [%s].\n</div>",$orig_lname);
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
						printf("<div class=\"exs\">Select this runner's birth year [%d].\n</div>",$orig_yob);
						?>
					</div>
				</div>

				<div class="item">
					<div class="titles">Gender:</div>
					<div class="inner_wrap">
						<div class="inputs">
						<?php
						printf("<input type=\"radio\" name=\"sex\" value=\"F\"%s />Female\n",$sex == "F" ? " checked=\"checked\"" : "");
						printf("<input type=\"radio\" name=\"sex\" value=\"M\"%s />Male\n",$sex == "M" ? " checked=\"checked\"" : "");
						?>
						</div>
						<div class="exs">Select this runner's gender.</div>
					</div>
				</div>

				<div class="item">
					<div class="titles">Club:</div>
					<div class="inner_wrap">
						<div class="inputs">
						<?php
						printf("<input type=\"text\" size=\"10\" maxlength=\"10\" name=\"club_name\" value=\"%s\">\n",$club_name);
						?>
						</div>
						<div class="exs">Edit this runner's club</div>
					</div>
				</div>
				
				<?php
				/* Runner suggestions */
				if ($runner_id == 0) {
					printf("<td>");
					$sql  = sprintf("SELECT id,name,sex,yob FROM result_runner WHERE (UPPER(lname)=UPPER('%s') AND UPPER(fname) LIKE UPPER('%s%%')) OR (UPPER(fname)=UPPER('%s') AND UPPER(lname) LIKE UPPER('%s%%'))",addslashes($lname),substr($fname,0,1),addslashes($fname),substr($lname,0,1));
					$rsrun = $db->query($sql);
					if ($db->count() == 0) {
						$sql  = sprintf("SELECT id,name,sex,yob FROM result_runner WHERE UPPER(lname)=UPPER('%s')",addslashes($lname));
						$rsrun = $db->query($sql);
					}
					if ($db->count() > 0) {
				?>
						<div class="item"> 
							<div class="titles">Runner:</div>
							<div class="inner_wrap">
							<select name="runner_id">
								<option value="">Choose runner ...</option>
								<?php
								foreach ($rsrun as $rowrun) {
									$display = sprintf("%s | %s | %4d",$rowrun['name'],$rowrun['sex'] == "" ? "X" : $rowrun['sex'],$rowrun['yob'] == 0 ? 9999 : $rowrun['yob']);
									printf("<option value=\"%s\"%s>%s</option>\n",$rowrun['id'],$runerid[cnt] == $rowrun['id'] ? " selected=\"selected\"" : "",$display);
								}
								?>
							</select>
							</div>
							<div class="exs">Choose this runner from existing runners list. Runner information will be used (overriding journal values).</div>
						</div>
				<?php
					}
					printf("</td>\n");
				} else {
					$sql  = "SELECT name,sex,yob FROM result_runner WHERE id=%i";
					list($runname,$runsex,$runyob) = $db->queryFirstList($sql,$runner_id);
					$display = sprintf("%s | %s | %4d",$runname,$runsex == "" ? "X" : $runsex,$runyob == 0 ? 9999 : $runyob);
				?>
					<div class="item"> 
						<div class="titles">Runner:</div>
						<div class="inner_wrap">
						<?php
							printf("%s\n",$display);
						?>
						</div>
						<div class="exs">Runner information.</div>
					</div>
				<?php
				}
				
				/* Member suggestions */
				if ($mmbr_id == 0) {
					printf("<td>");
					//$sql = sprintf("SELECT id,CONCAT_WS(' ',fname,lname) as name,sex,yb as yob,mtype,exp FROM mmbr WHERE (UPPER(lname)=UPPER('%s') AND UPPER(fname) LIKE UPPER('%s%%')) OR (UPPER(fname)=UPPER('%s') AND UPPER(lname) LIKE UPPER('%s%%'))",$lname,substr($fname,0,1),$fname,substr($lname,0,1));
					//$sql = sprintf("SELECT id,CONCAT_WS(' ',fname,lname) as name,sex,yb as yob,mtype,exp FROM mmbr WHERE (UPPER(lname)=UPPER('%s')) OR (UPPER(fname)=UPPER('%s')) ORDER BY lname",$lname,$fname);
					//$rsmmbr = $db->DoSQL($sql);
					//$noofmmbr = $db->NumRows($rsmmbr);
					//if (($noofmmbr == 0) AND ($club_name == "DVOA")) {
					$noofmmbr = 0;
					
					$sql = sprintf("SELECT id,CONCAT_WS(' ',fname,lname) as name,sex,yb as yob,mtype,exp FROM mmbr WHERE (UPPER(lname) LIKE UPPER('%s%%')) AND sex='$sex' ORDER BY lname,fname,exp DESC",addslashes(substr($lname,0,3)));
					$rsmmbr = $db->query($sql);
					$noofmmbr = $db->count();
					//}
					if ($noofmmbr > 0) {
				?>
						<div class="item">
							<div class="titles">DVOA Member:</div>
							<div class="inner_wrap">
							<select name="mmbr_id">
								<option value="">Choose member...</option>
								<?php
								foreach ($rsmmbr as $rowmmbr) {
									$display = sprintf("%04d | %s | %s | %4d | %s | %d",$rowmmbr['id'],$rowmmbr['name'],$rowmmbr['sex'] == "" ? "X" : $rowmmbr['sex'],$rowmmbr['yob'] == 0 ? 9999 : $rowmmbr['yob'],$rowmmbr['mtype'],$rowmmbr['exp']);
									printf("<option value=\"%s\"%s>%s</option>\n",$rowmmbr['id'],$mmbrid['cnt'] == $rowmmbr['id'] ? " selected=\"selected\"" : "",$display);
								}
								?>
							</select>
							</div>
							<div class="exs">Choose this runner from membership list</div>
						</div>
						
						<div class="item">
							<div class="titles">Member Alias:</div>
							<div class="inner_wrap">
								<div class="inputs">
								<?php
								printf("<input type=\"radio\" name=\"alias\" value=\"1\"%s />Yes\n",$alias == 1 ? " checked=\"checked\"" : "");
								printf("<input type=\"radio\" name=\"alias\" value=\"0\"%s />No\n",$alias == 0 ? " checked=\"checked\"" : "");
								?>
								</div>
								<div class="exs">Is this runner a member using nick name or alias? If YES, a runner will be created with the name specified above. Otherwise, member info will be used.</div>
							</div>
						</div>
				<?php
					}
					printf("</td>\n");
				} else {
					$sql = "SELECT CONCAT_WS(' ',fname,lname) as name,sex,yb as yob,mtype,exp FROM mmbr WHERE id=%i";
					list($mmbrname,$mmbrsex,$mmbryob,$mmbrtype,$mmbrexp) = $db->queryFirstList($sql,$mmbr_id);
					$display = sprintf("%s | %s | %4d | %s | %d",$mmbrname,$mmbrsex == "" ? "X" : $mmbrsex,$mmbryob == 0 ? 9999 : $mmbryob,$mmbrtype,$mmbrexp);
				?>
					<div class="item"> 
						<div class="titles">Member:</div>
						<div class="inner_wrap">
						<?php
							printf("%s\n",$display);
						?>
						</div>
						<div class="exs">Member information.</div>
					</div>
				<?php
				}
				?>
				
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
		<?php //<div style="height:50px;"></div> ?>
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