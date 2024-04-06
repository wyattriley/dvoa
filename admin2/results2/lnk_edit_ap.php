<?php
session_start();
include_once("../../tools/dvoa_tools.inc.php");

if (isset($_REQUEST['sked_id']))
	$sked_id = intval($_REQUEST['sked_id']);
else
	$sked_id = 0;

$_SESSION['sked_id'] = intval($_REQUEST['sked_id']);
//bring us back here after logging in
$_SESSION['redir_url'] = $_SERVER['PHP_SELF'];
//get the access bits
include_once("../../users/access_bits.inc.php");
//set this page's access code
$_SESSION['page_access_code'] = $rg_bit;
// now check the login
include_once("../../users/validate.php");

$sked_id = $_SESSION['sked_id'];

include_once("../../tools/db.dvoa.class.php");

$db = new MeekroDB("dbgen"); //Read-write access

if (isset($_POST['action'])) {
	$action = $_POST['action'];

	$sked_id = intval($_POST['sked_id']);
	$lnk_txt = $_POST['lnk_txt'];
	$url     = $_POST['url'];
	$ev_date = $_POST['ev_date'];

	$db->delete('result_lnk',"sked_id=%i AND lnk_type=3",$sked_id);

	for ($i = 0; $i < sizeof($lnk_txt); $i++) {
		if ((strlen($lnk_txt[$i]) > 0) && (strlen($url[$i]) > 0)) {
			$db->insert(
				'result_lnk',
				array(
					'sked_id' => $sked_id,
					'ev_date' => $ev_date,
					'lnk_txt' => $lnk_txt[$i],
					'url' => $url[$i],
					'lnk_type' => 3));
		}
	}
	header("location:index.php");
}

$sql = "SELECT name,ev_date FROM event_list WHERE sked_id=%i";
list($ev_name,$ev_date) = $db->queryFirstList($sql,$sked_id);

$title = sprintf("[%d] DVOA %s (%s) Add/Modify AttackPoint Link",$sked_id,$ev_name,FormatDate($ev_date));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>AP Admin</title>
<link rel="stylesheet" type="text/css" href="results.css" />
<meta name="robots" content="noindex,nofollow">
</head>

<body>
<div id="wrapper">
	<div id="header">
		<h1>DVOA Administration</h1>
		<h2>AttackPoint - Link Validation</h2>
	</div>
	<?php
	GetUserBar();
	?>
	
	<div id="content">
		<div class="topic_title"><h3><?php echo $title ?></h3></div>
		
		<div class="frm_wrap">
			<?php
			printf("<p align=\"center\"><a href=\"index.php\">Return</a></p>\n\n");
			?>
			<div style="height:20px;"></div>
				
			<form method="post" action="">
				<?php
				printf("<input type=\"hidden\" name=\"action\" value=\"rgmod\">\n");
				printf("<input type=\"hidden\" name=\"sked_id\" value=\"$sked_id\">\n");
				printf("<input type=\"hidden\" name=\"ev_date\" value=\"$ev_date\">\n");				
				?>
				<div class="item">
					<div class="titles">&nbsp;</div>
					<div class="inner_wrap">
						<p>If there is only one RG link, then the recommended value for TXT is "AttackPoint". For events having more than one AP link, then use "AP Sprints", "AP Night-O", etc.</p>
						<p>If you need more than two additional links, enter the first two, save it then come back and add the remaining links.</p>
					</div>
				</div>

				<?php
				$cnt = 1;
				$sql = "SELECT lnk_txt,url FROM result_lnk WHERE sked_id=%i AND lnk_type=3";
				$rs  = $db->query($sql,$sked_id);
				foreach ($rs as $row) {
				?>
					<div class="item">
						<div class="titles"><?php printf("<p><strong>AP Link %d:</strong></p><br />\n",$cnt++);?></div>
						<div class="inner_wrap">
							<div class="inputs">
							<?php
							printf("TXT: <input type=\"text\" name=\"lnk_txt[]\" value=\"%s\" maxlength=\"40\" size=\"24\" /><br />\n",$row['lnk_txt']);
							?>
							</div>
							<div class="exs">&nbsp;</div>
						</div>
						<div class="inner_wrap">
							<div class="inputs">
							<?php
							printf("URL: <input type=\"text\" name=\"url[]\" value=\"%s\" maxlength=\"200\" size=\"72\" />\n",$row['url']);
							?>
							</div>
							<div class="exs">&nbsp;</div>
						</div>
					</div>
				<?php
				}
				
				for ($i = 0; $i < 2; $i++) {
				?>
					<div class="item">
						<div class="titles"><?php printf("<p><strong>AP Link %d:</strong></p><br />\n",$cnt++);?></div>
						<div class="inner_wrap">
							<div class="inputs">
							<?php
							printf("TXT: <input type=\"text\" name=\"lnk_txt[]\" value=\"%s\" maxlength=\"40\" size=\"24\" /><br />\n",($db->count() == 0) && ($i == 0) ? "AttackPoint" : "");
							?>
							</div>
							<div class="exs">&nbsp;</div>
						</div>
						<div class="inner_wrap">
							<div class="inputs">
							<?php
							printf("URL: <input type=\"text\" name=\"url[]\" value=\"\" maxlength=\"200\" size=\"72\" />\n");
							?>
							</div>
							<div class="exs">&nbsp;</div>
						</div>
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
	</div>
	<div id="footer">DVOA Results and Rankings Admin - <?php echo $_SESSION['mmbr_access_code'];?></div>
</div>				
</body>
</html>
<?php
$db->Close();
?>
