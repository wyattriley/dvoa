<?php
session_start();
include_once("../../tools/dvoa_tools.inc.php");

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

$sql = "SELECT name,ev_date FROM event_list WHERE sked_id=%i";
list($ev_name,$ev_date) = $db->queryFirstList($sql,$sked_id);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>RG Admin</title>
<link rel="stylesheet" type="text/css" href="rg.css" />
<meta name="robots" content="noindex,nofollow">
</head>

<body>
	<div id="wrapper">
		<div id="header">
		<?php
			printf("<h1>RouteGadget</h1>\n");
			printf("<h2>$ev_name</h2>\n");
		?>
		</div>
		<?php
		GetUserBar();
		?>

		<div id="content">
			<p align="center"><a href="index.php">Cancel</a></p>

			<form method="post" action="index.php">
				<?php
				printf("<input type=\"hidden\" name=\"action\" value=\"rgmod\">\n");
				printf("<input type=\"hidden\" name=\"sked_id\" value=\"$sked_id\">\n");
				printf("<input type=\"hidden\" name=\"ev_date\" value=\"$ev_date\">\n");				
				?>
				<div style="width:500px;margin:0 auto;padding-top:10px;">

					<div class="rbox" style="width:500px;">
					<h3>Add/Modify RouteGadget Links</h3>
					<p>If there is only one RG link, then the recommended value for TXT is "RouteGadget". For events having more than one RG link, then use "RG Sprints", "RG Night-O", etc.</p>
					<p>If you need more than two additional links, enter the first two, save it then come back and add the remaining links.</p>

					<?php
					$cnt = 1;
					$sql = "SELECT lnk_txt,url FROM result_lnk WHERE sked_id=%i AND lnk_type=2";
					$rs  = $db->query($sql,$sked_id);
					foreach ($rs as $row) {
						printf("<p><strong>RG Link %d:</strong><br />\n",$cnt++);
						printf("TXT: <input type=\"text\" name=\"lnk_txt[]\" value=\"%s\" maxlength=\"40\" size=\"24\" /><br />\n",$row['lnk_txt']);
						printf("URL: <input type=\"text\" name=\"url[]\" value=\"%s\" maxlength=\"200\" size=\"72\" />\n",$row['url']);
						printf("</p>\n");
					}

					for ($i = 0; $i < 2; $i++) {
						printf("<p><strong>RG Link %d:</strong><br />\n",$cnt++);
						printf("TXT: <input type=\"text\" name=\"lnk_txt[]\" value=\"%s\" maxlength=\"40\" size=\"24\" /><br />\n",($db->count() == 0) && ($i == 0) ? "RouteGadget" : "");
						printf("URL: <input type=\"text\" name=\"url[]\" value=\"\" maxlength=\"200\" size=\"72\" />\n");
						printf("</p>\n");
					}
					?>

					<div class="center_wrapper">
					<input type="submit" value="Submit" />
					</div>
					</div>
				</div>
			</form>
			<p>&nbsp;</p>
			<div id="footer">DVOA Member Admin Console</div>
		</div>
	</div>
</body>
</html>
<?php
$db->Close();
?>