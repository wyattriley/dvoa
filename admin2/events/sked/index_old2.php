<?php
require ("../../tools/dvoa_tools.inc.php");
require ("../../tools/db.dvoa.class.php");
require ("sked_tools.inc.php");
$title = "DVOA Event Schedule";
$bctitle = "Event Schedule";
$db = new MeekroDB();

if (isset($_REQUEST['show']))
	$show = $_REQUEST['show'];
else
	$show = "new";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>DVOA - Club Information</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../../css/dvoa2008common.css" rel="stylesheet" type="text/css" />
<link href="../../css/dvoa2008sub.css" rel="stylesheet" type="text/css" />
<link href="sked.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="../images/newflag.ico" />
<link rel="alternate" type="application/rss+xml"  href="http://www.dvoa.org/rss/dvoa_feed.rss" title="DVOA News Feed">
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
	//GetSideBar();
	//printf("<p>&nbsp;</p>\n");

	printf("<br /><a target=\"_blank\" href=\"http://orienteeringusa.org/orienteers/on-foot/events/sanctioned-events-calendar\"><strong>OUSA National Event Schedule</strong></a><br /><br />\n");

	if ($show == "all") {
		printf("<a href=\"index.php?show=new\"><strong>Show upcoming events</strong></a><br />\n");
		printf("<a href=\"index.php?show=year\"><strong>Show all %d events</strong></a><br />\n",date("Y"));
	} else if ($show == "year") {
		printf("<a href=\"index.php?show=new\"><strong>Show upcoming events</strong></a><br />\n");
		printf("<a href=\"index.php?show=all\"><strong>Show all events since 2006</strong><br /></a>\n");
	} else {
		printf("<a href=\"index.php?show=year\"><strong>Show all %d events</strong></a><br />\n",date("Y"));
		printf("<a href=\"index.php?show=all\"><strong>Show all events since 2006</strong><br /></a>\n");
	}

	printf("<a href=\"sked_pdf.php\"><strong>PDF Schedule</strong></a><br />\n");
	printf("<a href=\"sked_print.php\"><strong>Printer Friendly Schedule</strong></a>\n");

	GetLegend();
	?>
	</div> <!-- end sidebar div -->

	<div id="content"> 
		<div id="sked_div">
		<h3><?php echo $title;?></h3>
            
        <!-- CD-19 notice -->
        <div style="border:1px solid red;padding:10px; background-color:#eee; box-shadow:2px 2px 2px #666; margin:12px 0;">
    <div>
      <div>
        <blockquote type="cite">
          <div dir="ltr"> 
            <p>A Message to our Membership and Orienteering Friends:</p>
            <ul>
            <li>DVOA will continue to host our in-person orienteering events - providing beginner level as well as challenging adventures through Orienteering in the great outdoors - as much as our volunteers and local parks allow with our pre-registration system.</li>
            <li>For a more isolated orienteering experience - our<a href="http://dvoa.org/learn/perm/index.php" shape="rect" rel="nofollow"><strong> Permanent Courses</strong></a> await you any time*. (*Check with the specific park for possible limits on their opening hours.)</li>
            <li>We also will continue to respect local COVID regulations  - see specific event information for anything uncommon or changed vs. the new-normal expectations.</li>
            <li><strong>Mask usage:</strong> Please continue to respect other Orienteers & Volunteers who have different COVID strategies than you do.  At our registration, check-in and download areas in particular, please be respectful and wear your mask if they are masked.</li>
            <li><strong>Starts:</strong> When you register for a specific start window, please aim to arrive in that timeframe.  It helps spread out starters, and ensures participants don't have to wait very long to get out on their course.</li>
            <li><strong>Online-pre-registration:</strong> watch for the deadlines a day or two before the event - see links within each event below.  Pre-registration ensures there will be a map available for you.</li>
            <li>If you miss the pre-registration, email the Event Director to check if they can accommodate you (additional fees may apply.) </li>
            <li>Should you have any questions regarding a specific event, please feel free to click on the event director to clarify any specific needs you have.
            </ul>
            <ol>
            <p>Stay healthy!<br />
              DVOA Board of Directors</p>
          </div>
              
        </blockquote>
      </div>
    </div>
        </div>
<p>We use online preregistration for all of our events. Links to register are listed below. Deadline to register is normally the Thursday before the event. </p><p>

Walk in day-of-event registration will be available on a limited basis and map/course selection will be limited. Cost for registering at the event is $10/map for the white course and $20/map for all other courses. </p>
            
            
            
            
		<!--<p><img src="/images/ad/Event-canceled.png"></p>-->	
		<?php
		if ($show == "new") {
			$today = date("Y-m-d");
			$sql = "SELECT id,highlight,dayofwk,ev_date,map_id,foreign_link,kit,epunch,ed_id,ed2_id,cs_id,cs2_id,notes,notes_link,link_name,confirm,getvols,getevreg,gps_id,map,director,cs,foreign_dirs,foreign_email,regurl FROM sked WHERE ev_date >= CURDATE() ORDER BY ev_date";
		} else if ($show == "year") {
			$start_date = sprintf("%d-01-01",date("Y"));
			$sql = "SELECT id,highlight,dayofwk,ev_date,map_id,foreign_link,kit,epunch,ed_id,ed2_id,cs_id,cs2_id,notes,notes_link,link_name,confirm,getvols,getevreg,gps_id,map,director,cs,foreign_dirs,foreign_email,regurl FROM sked WHERE YEAR(ev_date) >= YEAR(CURDATE()) ORDER BY ev_date";
		} else if ($show == "all") {
			$sql = "SELECT id,highlight,dayofwk,ev_date,map_id,foreign_link,kit,epunch,ed_id,ed2_id,cs_id,cs2_id,notes,notes_link,link_name,confirm,getvols,getevreg,gps_id,map,director,cs,foreign_dirs,foreign_email,regurl FROM sked ORDER BY ev_date";
		}
		$normalcolor    = "#ffffff";
		$highlightcolor = "cornsilk";

		$rs = $db->query($sql);
		foreach ($rs as $row) {
			if ($row['map_id'] != 99999) {
				$map_name = GetMapName($db,$row['map_id']);
				$ed_name  = GetMmbrInfo($db,$row['ed_id'],"fullname");
				$ed_email = GetMmbrInfo($db,$row['ed_id'],"em_addr");
				$ed_phone = OKToShow($db,$row['ed_id'],"show_phone") ? GetMmbrInfo($db,$row['ed_id'],"phonemain") : "";
				$ed2_name = GetMmbrInfo($db,$row['ed2_id'],"fullname");
				$ed2_email = GetMmbrInfo($db,$row['ed2_id'],"em_addr");
				$ed2_phone = OKToShow($db,$row['ed2_id'],"show_phone") ? GetMmbrInfo($db,$row['ed2_id'],"phonemain") : "";
				$cs_name  = GetMmbrInfo($db,$row['cs_id'],"fullname");
				$cs_email = GetMmbrInfo($db,$row['cs_id'],"em_addr");
				$cs2_name = GetMmbrInfo($db,$row['cs2_id'],"fullname");
				$cs2_email = GetMmbrInfo($db,$row['cs2_id'],"em_addr");
				$dirs     = GetDirs($db,$row['map_id']);
			} else {
				$map_name = stripslashes($row['map']);
				$ed_name  = stripslashes($row['director']);
				$ed_email = $row['foreign_email'];
				$ed_phone = "";
				$ed2_name = "";
				$ed2_email = "";
				$ed2_phone = "";
				$cs_name  = stripslashes($row['cs']);
				$cs_email = "";
				$cs2_name = "";
				$cs2_email = "";
				$dirs     = stripslashes($row['foreign_dirs']);
			}

			//make sure we have something in the ed_name and cs_name variables
			if ($ed_name == " ")
				$ed_name = "<em>TBA</em>";
			if ($cs_name == " ")
				$cs_name = "<em>TBA</em>";

			printf("<div class=\"ev_def\" style=\"background:%s;\">\n",$row['highlight'] == "N" ? $normalcolor : $highlightcolor);	//start this event listing
			printf("<div class=\"ev_hdr\">");		//event title line
			printf("%s %s&nbsp;&nbsp;&nbsp;\n",$row['dayofwk'],FormatDate($row['ev_date']));
			// not a foreign event so link to google map page
			if ($row['map_id'] != 99999)
				printf("<a href=\"../../info/maps/mapit.php?map_id=%d&amp;sked_id=%d\" style=\"text-decoration:none !important;\">%s &nbsp;<span style=\"color:white;padding:3px;background-color:red;text-decoration:none !important;\">Google Map</span></a>&nbsp;&nbsp;<br>\n",$row['map_id'],$row['id'],$map_name);
			else
				// foreign event, don't link to google map page because there will be nothing to show
				printf("%s&nbsp;&nbsp;\n",$map_name);
			printf("%s",GetCourses($db,$row['id'],$row['confirm']));

			if ($row['getvols'] == "Y") // any volunteers?
				printf("<a style=\"padding-left:40px;\" href=\"../vols/vol.php?sked_id=%d\">Volunteer to help at this event</a>\n",$row['id']);

			// 2013-04-16 VM >>
			if ($row['getevreg'] == "Y") // Pre-Registration required?
				printf("<a style=\"padding-left:40px;\" href=\"../reg/ev_reg.php?sked_id=%d\">Pre-Register for this event</a>\n",$row['id']);
			// 2013-04-16 VM <<

			printf("</div>\n");//done event header row
			printf("<div class=\"ep\">\n");
			printf("%s",$row['epunch'] == "Y" ? "<img src=\"bolt.gif\" title=\"Event has EPunching\" alt=\"Event has EPunching\">\n" : "&nbsp;");
			printf("</div>\n"); //end ep div
			printf("<div class=\"ev_data\">\n");	//start of schedule data div
			
			if ($row['map_id'] != 99999) { //this is a regular dvoa event
				if (strlen($ed_email) > 0)
					printf("<strong>Event Director:</strong> <a class=\"text\" href=\"../../tools/mailtool.php?sendto_mmbr_id=%d\" target=\"_blank\">%s</a>&nbsp;&nbsp;%s<br />\n",$row['ed_id'],$ed_name,$ed_phone);
				else
					printf("<strong>Event Director:</strong> %s&nbsp;&nbsp;%s<br />\n",$ed_name,$ed_phone);
				if (strlen($ed2_name) > 0) {
					if (strlen($ed2_email) > 0)
						printf("<strong>Co-Director:</strong> <a class=\"text\" href=\"../../tools/mailtool.php?sendto_mmbr_id=%d\" target=\"_blank\">%s</a>&nbsp;&nbsp;%s<br />\n",$row['ed2_id'],$ed2_name,$ed2_phone);
					else
						printf("<strong>Co-Director:</strong> %s&nbsp;&nbsp;%s<br />\n",$ed2_name,$ed2_phone);
				}
			} else {
				if (strlen($ed_email) == 0) { //no email address so just list director name
					printf("<strong>Event Director:</strong> %s<br />\n",$ed_name);
				} else {	//non-dvoa event, so just use mailto: link
					printf("<strong>Event Director:</strong> <a href=\"mailto:%s\">%s</a><br />\n",$ed_email,$ed_name);
				}
			}
			
			if (strlen($cs_email) > 0)
				printf("<strong>Course Setter:</strong> <a class=\"text\" href=\"../../tools/mailtool.php?sendto_mmbr_id=%s\">%s</a>\n",$row['cs_id'],$cs_name);
			else
				printf("<strong>Course Setter:</strong> %s\n",$cs_name);
			
			if (strlen($cs2_name) > 0) {	
				if (strlen($cs2_email) > 0)
					printf("<strong>Co-Setter:</strong> <a class=\"text\" href=\"../../tools/mailtool.php?sendto_mmbr_id=%s\">%s</a>\n",$row['cs2_id'],$cs2_name);
				else
					printf("<strong>Co-Setter:</strong> %s\n",$cs2_name);
			}
            
            if (strlen($row['regurl']) > 1) {
				printf("<br /><strong>Preregister:</strong>");
				if (strlen($row['regurl']) > 1) {
					printf(" <a target=\"_blank\" href=\"%s\" style=\"color:red;\"><strong>Register Here</strong></a>",$row['regurl']);
				}
			}
			
			if (strlen($row['notes']) > 1) {
				printf("<br /><strong>Notes:</strong> %s\n",StripSlashes($row['notes']));
				if (strlen($row['notes_link']) > 1) {
					printf(" <a target=\"_blank\" href=\"%s\">%s</a>",$row['notes_link'],$row['link_name']);
				}
			}

			if (strlen($dirs) > 0) {
				printf("<br /><strong>Directions:</strong> %s\n",$dirs);
			}
			
			// 2013-11-22 >>
			$sql = "SELECT body FROM news_evt WHERE sked_id=%i AND publish='Y'";
			$newstext = $db->queryFirstField($sql,$row['id']);
			if (strlen($newstext) > 0) {
				$newstext = StripSlashes($newstext);
				$newstext = FormatNews($newstext);
				printf("<div>");
				printf("<br />\n<strong>ED/CS Notes:</strong><br /> %s\n",$newstext);
				printf("</div>");
			}

			$sql = "SELECT c.crs_id,l.fgcolor,l.bgcolor,l.course,c.dist,c.elev,c.ctrl FROM news_crs c, news_crs_list l WHERE sked_id=%i AND l.id=c.crs_id ORDER BY crs_id";
			$newscrs  = $db->query($sql,$row['id']);
			if ($db->count() > 0) {
				printf("<div>");
				printf("<p><strong>Courses Information:</strong>\n");
				printf("<table cellpadding=\"2\" cellspacing=\"0\" border=\"1\">\n");
				printf("<tr bgcolor=\"#f0f0f0\">\n");
				printf("<th><strong>Course</strong></th>\n");
				printf("<th><strong>Distance</strong></th>\n");
				printf("<th><strong>Climb</strong></th>\n");
				printf("<th><strong>Ctrls</strong></th>\n");
				printf("</tr>\n");

				foreach ($newscrs as $crsinfo) {
					printf("<tr style=\"color:%s;background:%s;\">\n",$crsinfo['fgcolor'],$crsinfo['bgcolor']);
					printf("<td style=\"text-align:center;\">%s</td>\n",$crsinfo['course']);
					printf("<td style=\"text-align:center;\">%0.2fkm</td>\n",$crsinfo['dist']);
					printf("<td style=\"text-align:center;\">%0.1fm</td>\n",$crsinfo['elev']);
					printf("<td style=\"text-align:center;\">%d</td>\n",$crsinfo['ctrl']);
					printf("</tr>\n");
				}
				printf("</table>\n");
				printf("</p>\n");
				printf("</div>");
			}
			// 2013-11-22 <<
			
			printf("</div>\n");	//end of schedule data div
			printf("</div>\n"); //end of this event div
		}
		?>
		</div> <!-- end sked_div -->
	</div> <!-- end of content -->

	<?php
	GetSubPageFooter();
	GetCredits();
	$db->Close();
	?>

</div> <!-- end of main -->
</div> <!-- end of wrapper -->
</body>
</html>