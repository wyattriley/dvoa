<?php
require ("../../tools/dvoa_tools.inc.php");
require ("../../tools/db.dvoa.class.php");
require ("sked_tools.inc.php");

$db = new MeekroDB();

$title = "DVOA Kit & EP Setup Schedule";
$bctitle = "Kit & EP Setup";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>DVOA - Kit and E-Punch Setup Schedule</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../../css/dvoa2008common.css" rel="stylesheet" type="text/css" />
<link href="../../css/dvoa2008sub.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="../../images/newflag.ico" />
<?php
	GetHTC();
?>
</head>

<body>
<div id="wrapper">
<?php
GetHeader("comm",$_SERVER['PHP_SELF']);
?>
	<div id="main">
		<div id="sidebar">
		<?php
		GetSideBar();
		?>
		</div> <!-- end sidebar div -->

		<div id="content">
		<h3><?php echo $title;?></h3>

		<table bgcolor="#ffffff" border="1" cellspacing="0" cellpadding="2" width="680" align="center">
		<tr bgcolor="#f0f0f0">
		<th><strong>Date</strong></th>
		<th><strong>Map</strong></th>
		<th><strong>EP</strong></th>
		<th><strong>Kit</strong></th>
		<th><strong>Event Director</strong></th>
		<th><strong>Course Setter</strong></th>
		<th><strong>EP Setup</strong></th>
		</tr>
		<?php

		//set $today equal to the beginning of the year
		$today = sprintf("%04d-01-01",date("Y"));
		$sql = "SELECT id,highlight,dayofwk,ev_date,map_id,kit,courses,epunch,ed_id,cs_id,ep_id,ep_id2,notes,notes_link,link_name FROM sked WHERE YEAR(ev_date) >= YEAR(CURDATE()) ORDER BY ev_date";
		$rs  = $db->query($sql);
		foreach ($rs as $row) {
			printf("<tr bgcolor=\"%s\">\n", $row['highlight'] == "Y" ? "#cfddd3" : "");
			printf("<td>%s %s</td>\n",$row['dayofwk'],FormatDate($row['ev_date']));
			printf("<td>%s</td>\n",$row['map_id'] > 0 ? GetMapShortName($db,$row['map_id']) : "&nbsp;");
			printf("<td align=\"center\">%s</td>\n",$row['epunch']);
			if (strlen($row['kit']) > 0)
				printf("<td align=\"center\">%s</td>\n",$row['kit']);
			else		
				printf("<td>&nbsp;</td>\n");

			$ed_name  = GetMmbrInfo($db,$row['ed_id'],"fullname");
			$ed_email = GetMmbrInfo($db,$row['ed_id'],"em_addr");
			$cs_name  = GetMmbrInfo($db,$row['cs_id'],"fullname");
			$cs_email = GetMmbrInfo($db,$row['cs_id'],"em_addr");
			$ep_name  = GetMmbrInfo($db,$row['ep_id'],"fullname");
			$ep_name2 = GetMmbrInfo($db,$row['ep_id2'],"fullname");

			if ($row['map_id'] != 99999) { //this is a regular dvoa event
				if (strlen($ed_email) > 0)
					printf("<td><a href=\"../../tools/mailtool.php?sendto_mmbr_id=%d\">%s</a></td>\n",$row['ed_id'],$ed_name);
				else
					printf("<td>%s</td>\n",$ed_name);
			} else {
				if (strlen($ed_name) > 0) { //foreign event, so don't link to mail tool page
					printf("<td>%s</td>\n",$ed_name);
				}
			}

			if ($row['map_id'] != 99999) { //this is a regular dvoa event
				if (strlen($cs_email) > 0)
					printf("<td><a href=\"../../tools/mailtool.php?sendto_mmbr_id=%d\">%s</a></td>\n",$row['ed_id'],$cs_name);
				else
					printf("<td>%s</td>\n",$cs_name);
			} else {
				if (strlen($cs_name) > 0) { //foreign event, so don't link to mail tool page
					printf("<td>%s</td>\n",$cs_name);
				}
			}

			printf("<td>\n");
			if ($row['ep_id'] > 0)
				printf("<a href=\"../../tools/mailtool.php?sendto_mmbr_id=%d\">%s</a>\n",$row['ep_id'],$ep_name);
			else
				printf("&nbsp;\n");

			if ($row['ep_id2'] > 0)
				printf("<br /><a href=\"../../tools/mailtool.php?sendto_mmbr_id=%d\">%s</a>\n",$row['ep_id'],$ep_name2);
			printf("</td>\n");
			printf("</tr>\n");
		}

		$db->Close();
		?>
		</table>

	</div> <!-- end of content -->

	<?php
	GetSubPageFooter();
	GetCredits();
	?>
</div> <!-- end of main -->
</div> <!-- end of wrapper -->
 
</body>
</html>