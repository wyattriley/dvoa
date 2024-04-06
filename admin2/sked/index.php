<?php
session_start();
include_once("../../tools/dvoa_tools.inc.php");

//bring us back here after logging in
$_SESSION['redir_url'] = $_SERVER['PHP_SELF'];
//get the access bits
include_once("../../users/access_bits.inc.php");
//set this page's access code
$_SESSION['page_access_code'] = $sked_bit;
// now check the login
include_once("../../users/validate.php");
include_once("sked_tools.inc.php");
$_SESSION['return_page'] = "index.php";

include_once("../../users/login_tools.inc.php");
include_once("../../tools/db.dvoa.class.php");
$db = new MeekroDB("dbgen");

if (!isset($_SESSION['show']))
	$_SESSION['show'] = "CURR";
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>DVOA Schedule Admin</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="sked.css" rel="stylesheet" type="text/css">
<meta name="robots" content="noindex" />
<style type="text/css">
	<!--
	th{font-family:verdana,helvetica;font-size:12px;background:#f0f0f0;}
	-->
</style>

<script language="JavaScript" type="text/JavaScript">
<!--

function popDetail(id) 
{
	var URL;
	URL = "pop_detail.php?id=" + id;
	win = open(URL,"theWindow", "titlebar=0,width=500,height=480,scrollbars=yes");
	if (win) {
		win.focus();
	}
}
function confirmLink(theLink, theSqlQuery)
{
	var is_confirmed = confirm(theSqlQuery);
	return is_confirmed;
}

// -->
</script>
</head>

<body>
<div id="wrapper">
	<div id="header">
		<h1>DVOA Admin</h1>
		<h2>Schedule Administration</h2>
	</div>

	<div id="content">
		<div id="userbar">
			Welcome <strong><?php echo $_SESSION['uname'];?></strong>! [<a href="../../users/profile.php">My Profile</a>]&nbsp;&nbsp;&nbsp;[<a href="../../users/logout.php">Logout</a>]
		</div>

		<div class="topic_title"><h3>Schedule Administration Table View</h3></div>
		<ul>
			<li><a href="mod.php?id=0">Add a new schedule listing</a></li>
			<li>&nbsp;&middot;&nbsp;</li>
			<li><a href="cal.php">Go to calendar view</a></li>
			<li>&nbsp;&middot;&nbsp;</li>
			<?php
			if ($_SESSION['show'] == "CURR")
				printf("<li><a href=\"index.php?show=ALL\">Show all events</a></li>\n");
			else	
				printf("<li><a href=\"index.php?show=CURR\">Hide past events</a></li>\n");
			?>
		</ul>

		<table border="1" cellspacing="0" cellpadding="3" align="center">
			<tr bgcolor="#f0f0f0">
			<th>Date</th>
			<th>Map Name</th>
			<th>Courses</th>
			<th>Kit</th>
			<th>Director</th>
			<th>Course Setter</th>
			<th>Conf?</th>
			<th>DVOA?</th>
			</tr>

			<?php
			$today = date("Y-m-d");

			if ($_SESSION['show'] == "CURR") {
				$sql = "SELECT * FROM sked WHERE ev_date >= CURDATE() ORDER BY ev_date";
			} else if ($_SESSION['show'] == "ALL") {
				$sql = "SELECT * FROM sked WHERE ev_date >= '2000-01-01' ORDER BY ev_date";
			}
			$rs = $db->query($sql);

			$count=0;
			foreach ($rs as $row) {
				printf("<tr>");
				printf("<a name=\"%d\">",$row['id']);
				printf("<td align=\"center\">%s, %s</td>\n",$row['dayofwk'],FormatDate($row['ev_date']));
				if ($row['map_id'] != 99999) {
					printf("<td><a href=\"mod.php?id=%d&show=%s\">%s</a></td>\n",$row['id'],$_SESSION['show'],GetSkedMapShortName($db,$row['map_id']));
				} else {
					printf("<td><a href=\"mod.php?id=%d&show=%s\"><em>%s</em></a></td>\n",$row['id'],$_SESSION['show'],stripslashes($row['map']));
				}
				printf("<td>%s",GetCourses($db,$row['id']));
				if ($row['epunch'] == "Y")
					printf("&nbsp;<img src=\"bolt.gif\" width=\"12\" height=\"12\" alt=\"Event has ePunch\" title=\"Event has ePunch\" />\n");
				printf("</td>\n");
				printf("<td style=\"text-align:center;\">%d</td>\n",$row['kit']);

				//event director
				if ($row['map_id'] != 99999)
					printf("<td>%s %s</td>\n",GetMmbrItem($db,$row['ed_id'],"fname"),GetMmbrItem($db,$row['ed_id'],"lname"));
				else
					printf("<td><em>%s</em></td>\n",stripslashes($row['director']));

				//course setter
				if ($row['map_id'] != 99999)
					printf("<td>%s %s</td>\n",GetMmbrItem($db,$row['cs_id'],"fname"),GetMmbrItem($db,$row['cs_id'],"lname"));
				else
					printf("<td><em>%s</em></td>\n",stripslashes($row['cs']));

				if ($row['confirm'] == "Y")
					printf("<td style=\"text-align:center;\"><a href=\"index.php?id=%d&action=CONF\">Yes</td>\n",$row['id']);
				else
					printf("<td style=\"text-align:center;\"><a href=\"index.php?id=%d&action=CONF\">No</td>\n",$row['id']);

				if ($row['dvoa_event'] == "Y")
					printf("<td style=\"text-align:center;\"><a href=\"index.php?id=%d&action=DEVENT\">Yes</td>\n",$row['id']);
				else
					printf("<td style=\"text-align:center;\"><a href=\"index.php?id=%d&action=DEVENT\">No</td>\n",$row['id']);

				printf("</tr>\n");
			}
			?>
		</table>

	</div>	<!-- end container div -->

	<div id="footer">DVOA Schedule Admin - 
		<?php echo $_SESSION['mmbr_access_code'];?>
	</div>

</div>	<!-- end wrapper -->
</body>
</html>

<?php
$db->Close();
?>