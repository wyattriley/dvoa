<?php
session_start();
include_once("../../tools/dvoa_tools.inc.php");
include_once("../../tools/db.dvoa.class.php");
$db = new MeekroDB("dbgen");

$_SESSION['sked_id'] = $_REQUEST['id'];
$_SESSION['dayofwk'] = isset($_REQUEST['dayofwk']) ? $_REQUEST['dayofwk'] : "";
$_SESSION['ev_date'] = isset($_REQUEST['ev_date']) ? $_REQUEST['ev_date'] : "";

//bring us back here after logging in
$_SESSION['redir_url'] = $_SERVER['PHP_SELF'];
//get the access bits
include_once("../../users/access_bits.inc.php");
//set this page's access code
$_SESSION['page_access_code'] = $sked_bit;
// now check the login
include_once("../../users/validate.php");

$sked_id = $_SESSION['sked_id'];
$dayofwk = $_SESSION['dayofwk'];
$ev_date = $_SESSION['ev_date'];

include ("sked_tools.inc.php");

if ($sked_id == 0) {	//add event
	$map_id        = 0;
	$title         = "Add Event";
	$htmlTitle     = "";
	$highlight     = "N";
	$dvoa_event    = "Y";
	$map           = "";
	$map_link      = "";
	$confirm       = "N";
	$foreign_link  = "";
	$kit           = "*";
	$director      = "";
	$ed_id         = 0;
	$ed2_id        = 0;
	$em_addr       = "";
	$phone         = "";
	$cs            = "";
	$cs_id         = 0;
	$cs2_id        = 0;
	$con_id        = 0;
	$epunch        = "Y";
	$notes         = "";
	$hc_notes      = "";
	$notes_link    = "";
	$link_name     = "";
	$map           = "";
	$director      = "";
	$cs            = "";
	$foreign_dirs  = "";
	$foreign_email = "";
    $regurl        = "";
} else {	//modify event
	$title = "Modify Event";
	$sql = "SELECT highlight,dayofwk,ev_date,dvoa_event,map_id,foreign_link,kit,ed_id,ed2_id,cs_id,cs2_id,con_id,epunch,notes,hc_notes,notes_link,link_name,confirm,map,director,cs,foreign_dirs,foreign_email,regurl FROM sked WHERE id=%i";
	list ($highlight,$dayofwk,$ev_date,$dvoa_event,$map_id,$foreign_link,$kit,$ed_id,$ed2_id,$cs_id,$cs2_id,$con_id,$epunch,$notes,$hc_notes,$notes_link,$link_name,$confirm,$map,$director,$cs,$foreign_dirs,$foreign_email,$regurl) = $db->queryFirstList($sql,$sked_id);
}
if ($highlight == "")
	$highlight = "N";
if ($confirm == "")
	$confirm = "N";
if ($epunch == "")
	$epunch = "N";

if ($ev_date == null)
	$ev_date = "";

if ($dayofwk == null)
	$dayofwk = "";

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>DVOA Schedule Admin</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="sked.css" rel="stylesheet" type="text/css">

<script language="javascript" src="cal2.js"></script>
<script language="javascript" src="cal_conf2.js"></script>
<script language="javascript" src="sked.js"></script>

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

		<?php
		if ($map_id > 0)
			printf("<div class=\"topic_title\"><h3>Schedule Details for %s</h3></div>\n",GetSkedMapShortName($db,$map_id));
		else
			printf("<div class=\"topic_title\"><h3>Create New ScheduleEvent</h3></div>\n");
		?>

		<div class="frm_wrap">
			<div style="width:100%">
				<div style="width:50%;float:left;text-align:center;">
				<?php
				if ($sked_id > 0) {
					printf("<form action=\"process.php\" method=\"post\" onsubmit=\"return confirmLink(this, 'OK to delete this event?');\">\n");
					printf("<input type=\"hidden\" name=\"sked_id\" value=\"$sked_id\">\n");
					printf("<input type=\"hidden\" name=\"action\" value=\"DROP\">\n");
					printf("<p class=\"centerp\"><input type=\"submit\" value=\"Delete This Event\"></p>\n");
					printf("</form>\n");
				}
				?>
				</div>
				<div style="width:50%;float:right;text-align:center;">
				<?php
				printf("<p class=\"centerp\"><a href=\"%s\">Cancel</a><br>&nbsp;</p>\n",$_SESSION['return_page']);
				?>
				</div>
			</div>

		<?php
		if ($sked_id == 0) {
			printf("<form name=\"event_details\" action=\"process.php\" method=\"post\">");
			printf("<input type=\"hidden\" name=\"sked_id\" value=\"0\">");
			printf("<input type=\"hidden\" name=\"action\" value=\"ADD\">");
		} else {
			printf("<form name=\"event_details\" action=\"process.php\" method=\"post\">");
			printf("<input type=\"hidden\" name=\"sked_id\" value=\"$sked_id\">");
			printf("<input type=\"hidden\" name=\"action\" value=\"MOD\">");
		}
		?>

			<div class="item">
				<div class="titles">Event Date:</div>
				<div class="inner_wrap">
					<div class="inputs">
					<input name="ev_date" type="text" id="start2" size="18" maxlength="16" value="<?php printf("$dayofwk $ev_date");?>"><a style="text-decoration:none;" href="javascript:showCal('EventDate')">&nbsp;<img src="cal.gif" border="0"></a>
					</div>
					<div class="exs">Select the Day and Date of the Event</div>
				</div>
			</div>

			<div class="item">
				<div class="titles">DVOA Event?</div>
				<div class="inner_wrap">
					<div class="inputs">
					<?php
					printf("<input type=\"checkbox\" name=\"dvoa_event\" value=\"Y\"%s />\n",$dvoa_event=="Y" ? " checked=\"checked\"" : "");
					?>
					</div>
					<div class="exs">Indicates whether to show on printed schedule</div>
				</div>
			</div>

			<div class="item">
				<div class="titles">Map/Park:</div>
				<div class="inner_wrap">
					<div class="inputs">
					<select name="map_id" id="map_id" onchange="ShowHide()">
						<option value="0">Please select...</option>
						<?php
						$sql = "SELECT id,shortname FROM maplist ORDER BY shortname";
						$rs  = $db->query($sql);
						foreach ($rs as $row) {
							printf("<option value=\"%d\"%s>%s</option>\n",$row['id'],$row['id'] == $map_id ? " selected=\"selected\"" : "",$row['shortname']);
						}
						printf("<option value=\"99998\"%s>No Park Selected Yet</option>",$map_id == 99998 ? " selected=\"selected\"" : "");
						printf("<option value=\"99999\"%s>Non-DVOA Map</option>",$map_id == 99999 ? " selected=\"selected\"" : "");
						?>
					</select>
					</div>
					<div class="exs">Select the map or park for this event. For non-DVOA events select "Non-DVOA Map" (at the end of the list). You will then be able to enter the event director, course setter, directions, etc.</div>
				</div>
			</div>

		<?php
		printf("<div id=\"nondvoamap\" style=\"display:%s;background:#644f48;\">\n",$map_id == 99999 ? "block" : "none");
		?>

			<div class="item">
				<div class="titles">Map/Park Name:</div>
				<div class="inner_wrap">
					<div class="inputs">
						<input type="text" name="map" value="<?php printf("$map");?>">
					</div>
					<div class="exs">Only use this field for non-DVOA maps and events!!! If there is a link to the event information page, put that link in the Foreign Link field below.</div>
				</div>
			</div>

			<div class="item">
				<div class="titles">Director:</div>
				<div class="inner_wrap">
					<div class="inputs">
						<input type="text" name="director" value="<?php printf("$director");?>">
					</div>
					<div class="exs">Only use this field for non-DVOA maps and events!!! This may be the actual director's name or the host club - whatever is appropriate.</div>
				</div>
			</div>

			<div class="item">
				<div class="titles">Director Email:</div>
				<div class="inner_wrap">
					<div class="inputs">
						<input type="text" name="foreign_email" value="<?php printf("$foreign_email");?>">
					</div>
					<div class="exs">Only use this field for non-DVOA maps and events!!! If provided the director's name will be displayed as a link to this email address.</div>
				</div>
			</div>

			<div class="item">
				<div class="titles">Course Setter:</div>
				<div class="inner_wrap">
					<div class="inputs">
						<input type="text" name="crs_setter" value="<?php printf("$cs");?>">
					</div>
					<div class="exs">Only use this field for non-DVOA maps and events!!! This may be the actual course setter's name or the host club - whatever is appropriate.</div>
				</div>
			</div>

			<div class="item">
				<div class="titles">Foreign Link:</div>
				<div class="inner_wrap">
					<div class="inputs">
						<input type=text name=foreign_link value="<?php printf("$foreign_link");?>" onBlur="trimStr(document.event_details.foreign_link);">
					</div>
					<div class="exs">This field is used for links to non-DVOA maps</div>
				</div>
			</div>

			<div class="item">
				<div class="wrap2col">
					<div class="left2col">Directions:</div>
					<div class="right2col">
					<textarea name="foreign_dirs" cols="48" rows="3"><?php printf("%s",StripSlashes($foreign_dirs));?></textarea>
						<br />This field is used for directions to non-DVOA events.
					</div>
				</div>
			</div>
		</div><!-- end of nondvoamap div -->

		<?php
		printf("<div id=\"dvoamap\" style=\"display:%s;\">\n",$map_id == 99999 ? "none" : "block");
		?>

			<div class="item">
				<div class="titles">Event Directors:</div>
				<div class="inner_wrap">
				<div class="inputs">
					<select name="ed_id">
						<option value="0">Please select...</option>
						<?php
						$sql = "SELECT id,fname,lname FROM mmbr ORDER BY lname,fname";
						$rs  = $db->query($sql);
						foreach ($rs as $row) {
							printf("<option value=\"%d\"%s>%s, %s</option>\n",$row['id'],$row['id'] == $ed_id ? " selected=\"selected\"" : "",stripslashes($row['lname']),stripslashes($row['fname']));
						}
						?>
					</select>
				</div>
				<div class="exs">
					<select name="ed2_id">
						<option value="0">Please select...</option>
						<?php
						$sql = "SELECT id,fname,lname FROM mmbr ORDER BY lname,fname";
						$rs  = $db->query($sql);
						foreach ($rs as $row) {
							printf("<option value=\"%d\"%s>%s, %s</option>\n",$row['id'],$row['id'] == $ed2_id ? " selected=\"selected\"" : "",stripslashes($row['lname']),stripslashes($row['fname']));
						}
						?>
					</select>(Co-director)
				</div>
				</div>
			</div>

			<div class="item">
				<div class="titles">Course Setters:</div>
				<div class="inner_wrap">
				<div class="inputs">
					<select name="cs_id">
						<option value="0">Please select...</option>
						<?php
						$sql = "SELECT id,fname,lname FROM mmbr ORDER BY lname,fname";
						$rs  = $db->query($sql);
						foreach ($rs as $row) {
							printf("<option value=\"%d\"%s>%s, %s</option>\n",$row['id'],$row['id'] == $cs_id ? " selected=\"selected\"" : "",stripslashes($row['lname']),stripslashes($row['fname']));
						}
						?>
					</select>
				</div>
				<div class="exs">
					<select name="cs2_id">
						<option value="0">Please select...</option>
						<?php
						$sql = "SELECT id,fname,lname FROM mmbr ORDER BY lname,fname";
						$rs  = $db->query($sql);
						foreach ($rs as $row) {
							printf("<option value=\"%d\"%s>%s, %s</option>\n",$row['id'],$row['id'] == $cs2_id ? " selected=\"selected\"" : "",stripslashes($row['lname']),stripslashes($row['fname']));
						}
						?>
					</select>(Co-setter)
				</div>
				</div>
			</div>

			<div class="item">
				<div class="titles">Course Consultant:</div>
				<div class="inner_wrap">
				<div class="inputs">
					<select name="con_id">
						<option value="0">Please select...</option>
						<?php
						$sql = "SELECT id,fname,lname FROM mmbr ORDER BY lname,fname";
						$rs  = $db->query($sql);
						foreach ($rs as $row) {
							printf("<option value=\"%d\"%s>%s, %s</option>\n",$row['id'],$row['id'] == $con_id ? " selected=\"selected\"" : "",stripslashes($row['lname']),stripslashes($row['fname']));
						}
						?>
					</select>
				</div>
				<div class="exs">Select the course consultant (if any) for this event</div>
				</div>
			</div>
		</div><!-- end dvoa event -->

			<div class="item">
				<div class="titles">Courses:</div>
				<div class="inner_wrap">
				<div class="inputs">
				<?php
					$sql = "SELECT crs_id,course FROM crs";
					$rs  = $db->query($sql);
					foreach ($rs as $row) {
						printf("<input type=\"checkbox\" name=\"crs_id[]\" value=\"%d\"%s>%s<br />\n",$row['crs_id'],CourseExist($db,$sked_id,$row['crs_id']) ? " checked=\"checked\"" : "",$row['course']);
					}
				?>
				</div>
				<div class="exs">Check the courses offered</div>
				</div>
			</div>

			<div class="item">
				<div class="titles">Kit:</div>
				<div class="inner_wrap">
				<div class="inputs">
					<select name=kit>
					<option <?php if ($kit == "1") printf("selected");?> value="1">1</option>
					<option <?php if ($kit == "2") printf("selected");?> value="2">2</option>
					<option <?php if ($kit == "3") printf("selected");?> value="3">3</option>
					<option <?php if ($kit == "4") printf("selected");?> value="4">4</option>
					<option <?php if ($kit == "5") printf("selected");?> value="5">5</option>
					<option <?php if ($kit == "6") printf("selected");?> value="6">6</option>
					<option <?php if ($kit == "*") printf("selected");?> value="*">*</option>
					</select>
				</div>
				<div class="exs">Which kit will be used</div>
				</div>
			</div>

			<div class="item">
				<div class="titles">E-Punching:</div>
				<div class="inner_wrap">
				<div class="inputs">
					<?php
					printf("<input type=\"radio\" value=\"Y\" name=\"epunch\"%s>Yes&nbsp;&nbsp;\n", $epunch == "Y" ? " checked=\"checked\"" : "");
					printf("<input type=\"radio\" value=\"N\" name=\"epunch\"%s>No\n", $epunch == "N" ? " checked=\"checked\"" : "");
					?>
				</div>
				<div class="exs">Will E-Punching be used?</div>
				</div>
			</div>

			<div class="item">
				<div class="titles">Highlight this event?</div>
				<div class="inner_wrap">
				<div class="inputs">
					<input type=radio value="Y" <?php if ($highlight=="Y") printf("checked");?> name=highlight>Yes&nbsp;&nbsp;
					<input type=radio value="N" <?php if ($highlight=="N") printf("checked");?> name=highlight>No
				</div>
				<div class="exs">Normally Used to Highlight A-Meets</div>
				</div>
			</div>

			<div class="item">
				<div class="titles">Confirmed:</div>
				<div class="inner_wrap">
				<div class="inputs">
					<input type=radio value="Y" <?php if ($confirm == "Y") printf("checked");?> name=confirm>Yes&nbsp;&nbsp;
					<input type=radio value="N" <?php if ($confirm == "N") printf("checked");?> name=confirm>No
				</div>
				<div class="exs">Is this event confirmed?</div>
				</div>
			</div>

            <div class="item">
				<div class="wrap2col">
				<div class="left2col">URL to Registration:</div>
				<div class="right2col">
					<input type=text name=regurl size=60 value="<?php printf("$regurl");?>" onBlur="trimStr(document.event_details.regurl);">
					<br />Enter the complete URL to the event registration page.
				</div>
				</div>
			</div>   
    
			<div class="item">
				<div class="wrap2col">
				<div class="left2col">Notes:</div>
				<div class="right2col">
					<textarea name="notes" cols="48" rows="3"><?php printf("%s",StripSlashes($notes));?></textarea>
					<br />Any specific directions, notes, etc
				</div>
				</div>
			</div>


			<div class="item">
				<div class="titles">Notes Link:</div>
				<div class="inner_wrap">
					<div class="inputs">
						<input type=text name=notes_link value="<?php printf("$notes_link");?>" onBlur="trimStr(document.event_details.notes_link);">
					</div>
					<div class="exs">Used for links to related pages - enter the complete URL</div>
				</div>
			</div>

			<div class="item">
				<div class="titles">Link Name:</div>
				<div class="inner_wrap">
					<div class="inputs">
						<input type=text name=link_name value="<?php printf("$link_name");?>" onBlur="trimStr(document.event_details.link_name);">
					</div>
					<div class="exs">Enter the phrase that will be shown in the link</div>
				</div>
			</div>

			<div class="item">
				<div class="wrap2col">
					<div class="left2col">Hard Copy Notes:</div>
					<div class="right2col">
					<input type="input" name="hc_notes" size="60" maxlength="80" value="<?php printf("%s",StripSlashes($hc_notes));?>" />
						<br />Notes for hard copy schedule (80 chars max)
					</div>
				</div>
			</div>


			<div class="item">
				<div class="titles">&nbsp;</div>
				<div class="inner_wrap">
					<div class="inputs">
					</div>
					<div class="exs"><input type="submit" value="Submit"></div>
				</div>
			</div>


		</form>


		<?php
		printf("<p align=\"center\"><a href=\"%s\">Cancel</a><br>&nbsp;</p>\n",$_SESSION['return_page']);
		?>
		</div> <!-- end frm_wrap -->
	</div>	<!-- end container div -->

	<div id="footer">DVOA Event Director - 
		<?php echo $_SESSION['mmbr_access_code'];?>
	</div>

</div>	<!-- end wrapper -->
</body>
</html>

<?php
$db->Close();
?>