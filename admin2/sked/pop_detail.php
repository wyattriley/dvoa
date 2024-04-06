<?php
require_once ("../../tools/dvoa_tools.inc.php");
require_once ("../../tools/db.dvoa.class.php");
require_once ("sked_tools.inc.php");
$id = $_REQUEST['id'];

?>

<!doctype html public "-//W3C//DTD HTML 4.0 Transitional//EN">

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>DVOA Schedule Admin</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="layout.css" rel="stylesheet" type="text/css">
<link href="sked_admin.css" rel="stylesheet" type="text/css">
<meta name="robots" content="noindex" />
<style>
html {font-family:verdana,helvetica, sans-serif;}
body {background:#fff;}
h1 {font-family:verdana,helvetica, sans-serif;font-size:16px;color:#333;}
td.text {font-size:12px;color:#333;}
a.text {font-size:12px;color: #333;}
a:hover {color:#c00;}
</style>
</head>

<body>

<?php

$db = new MeekroDB();
$sql = "SELECT map,highlight,dayofwk,ev_date,map,map_link,confirm,foreign_link,courses,sprinto,txt_crs,kit,director,email_link,phone,cs,epunch,notes,notes_link,link_name FROM sked WHERE id=%i";
list ($map,$highlight,$dayofwk,$ev_date,$map,$map_link,$confirm,$foreign_link,$courses,$sprinto,$txt_crs,$kit,$director,$email_link,$phone,$cs,$epunch,$notes,$notes_link,$link_name) = $db->queryFirstList($sql,$id);

printf("<table cellspacing=\"0\" cellpadding=\"3\" border=\"0\">");
printf("<tr>\n");
printf("<td><img src=\"logo152x90.png\" alt=\"DVOA logo\"></td>");
printf("<td width=\"200\" align=\"center\"><h1>$map</h1></td>");
printf("</tr>");

printf("<tr><td colspan=2>&nbsp;</td></tr>");
	
printf("<tr><td class=text align=right><b>Highlight:</b> </td><td class=text>$highlight</td></tr>");
printf("<tr><td class=text align=right><b>Day of Week:</b> </td><td class=text>$dayofwk</td></tr>");
printf("<tr><td class=text align=right><b>Event Date:</b> </td><td class=text>$ev_date</td></tr>");
printf("<tr><td class=text align=right><b>Map Name:</b> </td><td class=text>$map</td></tr>");
printf("<tr><td class=text align=right><b>Map Link:</b> </td><td class=text>$map_link</td></tr>");
printf("<tr><td class=text align=right><b>Confirmed:</b> </td><td class=text>$confirm</td></tr>");
printf("<tr><td class=text align=right><b>Foreign Link:</b> </td><td class=text>$foreign_link</td></tr>");
printf("<tr><td class=text align=right><b>Courses:</b> </td><td class=text>$courses</td></tr>");
printf("<tr><td class=text align=right><b>SprintO:</b> </td><td class=text>$sprinto</td></tr>");
printf("<tr><td class=text align=right><b>Special Crs:</b> </td><td class=text>$txt_crs</td></tr>");
printf("<tr><td class=text align=right><b>Kit ID:</b> </td><td class=text>$kit</td></tr>");
printf("<tr><td class=text align=right><b>Director:</b> </td><td class=text>%s</td></tr>",StripSlashes($director));
printf("<tr><td class=text align=right><b>Email Addr:</b> </td><td class=text>$email_link</td></tr>");
printf("<tr><td class=text align=right><b>Phone:</b> </td><td class=text>$phone</td></tr>");
printf("<tr><td class=text align=right><b>Course Setter:</b> </td><td class=text>%s</td></tr>",StripSlashes($cs));
printf("<tr><td class=text align=right><b>E-Punch:</b> </td><td class=text>$epunch</td></tr>");
printf("<tr><td class=text align=right><b>Notes:</b> </td><td class=text>$notes</td></tr>");
printf("<tr><td class=text align=right><b>Notes Link:</b> </td><td class=text>$notes_link</td></tr>");
printf("<tr><td class=text align=right><b>Link Name:</b> </td><td class=text>$link_name</td></tr>");

printf("<tr><td colspan=2>&nbsp;</td></tr>");
printf("<form>");
printf("<td colspan=2 align=center><input type=submit value=\"Close Window\" onClick=\"window.close()\"></td>");
printf("</form>");

printf("</table>");

$db->Close();
?>

</body>
</html>