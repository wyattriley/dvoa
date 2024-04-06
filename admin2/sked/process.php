<?php
session_start();
include ("../../tools/db.dvoa.class.php");
$db = new MeekroDB("dbgen");

include ("sked_tools.inc.php");
include ("../../users/login_tools.inc.php");

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : "";
if ($action == "")
	header("location:index.php");

if ($action == "ADD" || $action == "MOD") {
	$highlight    = $_POST['highlight'];
	$dvoa_event   = isset($_POST['dvoa_event']) ? "Y" : "N";

	$ev_date      = $_POST['ev_date'];
	$map_id       = $_POST['map_id'];
	$confirm      = $_POST['confirm'];
	$crs_id       = $_POST['crs_id'];
	$kit          = $_POST['kit'];
	$ed_id        = $_POST['ed_id'];
	$ed2_id       = $_POST['ed2_id'];
	$cs_id        = $_POST['cs_id'];
	$cs2_id       = $_POST['cs2_id'];
	$con_id       = $_POST['cs2_id'];
	$epunch       = $_POST['epunch'];
	$notes        = addslashes($_POST['notes']);
	$hc_notes     = addslashes($_POST['hc_notes']);
	$notes_link   = $_POST['notes_link'];
	$link_name    = $_POST['link_name'];
	$sked_id      = $_POST['sked_id'];
    $regurl       = $_POST['regurl'];
    
	if ($map_id == 99999) {
		$foreign_link = $_POST['foreign_link'];
		$map           = $_POST['map']; //mysql_real_escape_string($_POST['map']);
		$director      = $_POST['director']; //mysql_real_escape_string($_POST['director']);
		$cs            = $_POST['crs_setter']; //mysql_real_escape_string($_POST['crs_setter']);
		$foreign_dirs  = $_POST['foreign_dirs']; //mysql_real_escape_string($_POST['foreign_dirs']);
		$foreign_email = $_POST['foreign_email']; //mysql_real_escape_string($_POST['foreign_email']);
		$ed_id         = 99999;
		$ed2_id        = 99999;
		$cs_id         = 99999;
		$cs2_id        = 99999;
	} else {
		$foreign_link  = "";
		$map           = "";
		$director      = "";
		$cs            = "";
		$foreign_dirs  = "";
		$foreign_email = "";
	}
		
	$ed_name      = sprintf("%s %s",GetMmbrItem($db,$ed_id,"fname"),GetMmbrItem($db,$ed_id,"lname"));
	$cs_name      = sprintf("%s %s",GetMmbrItem($db,$cs_id,"fname"),GetMmbrItem($db,$cs_id,"lname"));

	$msg      = "Highlight     : $highlight\n";
	$msg     .= "Date          : $ev_date\n";
	$msg     .= "MapID         : $map_id\n";
	$msg     .= "Confirm       : $confirm\n";
	$msg     .= "Foreign Link  : $foreign_link\n";
	$msg     .= "Crs ID        : $crs_id\n";
	$msg     .= "Kit           : $kit\n";
	$msg     .= "Director      : $ed_name\n";
	$msg     .= "Course Setter : $cs_name\n";
	$msg     .= "EPunch        : $epunch\n";
	$msg     .= "Notes         : $notes\n";
	$msg     .= "Notes Link    : $notes_link\n";
	$msg     .= "Link Text     : $link_name\n";
    $msg     .= "Registration URL : $regurl\n";
}

$_SESSION['show'] = isset($_REQUEST['show']) ? $_REQUEST['show'] : "CURR";

if ($action == "CONF") {
	$sked_id = $_REQUEST['sked_id'];
	toggleConfirm($db,$sked_id);
}

if ($action == "DEVENT") {
	toggleEvent($db,$_REQUEST['sked_id']);
}

$toWebmaster = "webmaster@dvoa.org";
$add    = "From: noreply@dvoa.org";

if (($action == "ADD") || ($action == "MOD")) {
	$dayofwk = substr($ev_date,0,3);
	$ev_date = substr($ev_date,4,strlen($ev_date));
		
	if ($action == "MOD") {
		UpdateEvent($db,$sked_id,$highlight,$dayofwk,$ev_date,$dvoa_event,$map_id,$foreign_link,$kit,$ed_id,$ed2_id,$ed_name,$cs_id,$cs2_id,$con_id,$epunch,$notes,$hc_notes,$notes_link,$link_name,$confirm,$map,$director,$cs,$foreign_dirs,$foreign_email,$regurl);
		DeleteCourses($db,$sked_id);
		for ($i=0;$i<sizeof($crs_id);$i++)
			SaveCourses($db,$sked_id,$crs_id[$i]);
	} else if ($action == "ADD") {
		$sked_id = SaveEvent($db,$highlight,$dayofwk,$ev_date,$dvoa_event,$map_id,$foreign_link,$kit,$ed_id,$ed2_id,$cs_id,$cs2_id,$con_id,$epunch,$notes,$hc_notes,$notes_link,$link_name,$confirm,$map,$director,$cs,$foreign_dirs,$foreign_email,$regurl);
		for ($i=0;$i<sizeof($crs_id);$i++)
			SaveCourses($db,$sked_id,$crs_id[$i]);
	}
} else if ($action == "DROP") {
	$sked_id = $_REQUEST['sked_id'];
	DeleteEvent($db,$sked_id);
	$sub = "[DVOA sked] Schedule Deletion $sked_id";
	$msg.= "An event was deleted\n";
	if ($_SERVER['HTTP_HOST'] != "localhost") {
		mail($toWebmaster,$sub,$msg,$add);	
	}
}

if ($action == "ADD" || $action =="MOD") {
	if ($_SERVER['HTTP_HOST'] != "localhost") {
		$msg   = "Schedule Activity\n";
		$msg   .= "-----------------\n\n";
		if ($action == "ADD") {
			$sub = "[DVOA sked] Schedule Addition $sked_id";
			$msg .= "Event added\n";
		} else {
			$msg .= "Event modified\n";
			$sub = "[DVOA sked] Schedule Change $sked_id";
		}
		$msg   .= "Date   : $ev_date\n";
		$msg   .= "Map    : $map\n";
		if ($map_id == 99999) {
			$msg   .= "Dir    : $director\n";
			$msg   .= "CS     : $cs\n";
		} else {
			$msg   .= "Dir    : $ed_name\n";
			$msg   .= "CS     : $cs_name\n";
		}
		$msg   .= "EP     : $epunch\n";
		$msg   .= "Notes  : $notes\n";
		mail($toWebmaster,$sub,$msg,$add);	
	}
}

$db->Close();

$url = sprintf("%s",$_SESSION['return_page']);
header("location:$url");
?>
