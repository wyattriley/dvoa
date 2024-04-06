<?php
session_start();
$_SESSION['err_code'] = 0;

if (!isset($_POST['sked_id']))
	header("location:rslt_upload.php");
else
	$sked_id = intval($_POST['sked_id']);
	
//check for submit errors
if ($sked_id == 0)
	$_SESSION['err_code'] |= 0x01;

if (($_FILES['rsltfile']['tmp_name'] == "") &&
	($_FILES['spltfile']['tmp_name'] == "") &&
	($_FILES['miscfile']['tmp_name'] == ""))
{
	$_SESSION['err_code'] |= 0x02;
} else {
	if ($_FILES['rsltfile']['tmp_name'] != "")
		$_SESSION['err_code'] |= IsValidFileType($_FILES['rsltfile']['tmp_name'],$_FILES['rsltfile']['name'],"results");
	if ($_FILES['spltfile']['tmp_name'] != "")
		$_SESSION['err_code'] |= IsValidFileType($_FILES['spltfile']['tmp_name'],$_FILES['spltfile']['name'],"splits");
	if ($_FILES['miscfile']['tmp_name'] != "")
		$_SESSION['err_code'] |= IsValidFileType($_FILES['miscfile']['tmp_name'],$_FILES['miscfile']['name'],"misc");
}

if ($_SESSION['err_code']) {
	//$_SESSION['sked_id'] = $sked_id;
	$_SESSION['rsltfilename'] = $_FILES['rsltfile']['name'];
	$_SESSION['spltfilename'] = $_FILES['spltfile']['name'];
	$_SESSION['miscfilename'] = $_FILES['miscfile']['name'];
	header("location:rslt_upload.php?sked_id=$sked_id");
}

if (isset($_POST['lnk_rslt_txt']))
	$lnk_rslt_txt = $_POST['lnk_rslt_txt'];
else
	$lnk_rslt_txt = "Results";
if (isset($_POST['lnk_splt_txt']))
	$lnk_splt_txt = $_POST['lnk_splt_txt'];
else
	$lnk_splt_txt = "Splits";
if (isset($_POST['lnk_misc_txt']))
	$lnk_misc_txt = $_POST['lnk_misc_txt'];
else
	$lnk_misc_txt = "Misc.";
	
//if we made it this far, then consider the input data valid...

include_once("../../tools/dvoa_tools.inc.php");
include_once ("../../tools/db.dvoa.class.php");

$db = new MeekroDB("dbgen"); //Read-write access

$yr = sprintf("%02d",date("Y") - 2000);

//first get the map name and event date
//$sql = "SELECT ev_date,maplist.map,shortname FROM sked s,maplist WHERE sked.map_id=maplist.id AND sked.id=%i";
$sql = "SELECT ev_date,name,shortname FROM event_list WHERE sked_id=%i";
list($ev_date,$map,$shortname) = $db->queryFirstList($sql,$sked_id);

if ($_SERVER['HTTP_HOST'] != "localhost") {
	$root_path = "/home/xxbdr2dmrxmg/public_html";
	$root_url = "http://www.dvoa.org";
} else {
	$root_path = "C:/Users/Vadim/My Projects/Websites/dvoa";
	$root_url = "http://localhost/dvoa";
}
$sub_path = "events/results/html/rslt$yr";

if (!file_exists($root_path."/".$sub_path)) {
	if (!mkdir($root_path."/".$sub_path,0705))
		die('Failed to create folders... $sub_path');
}

// VM 2015-04-20 >>
$shortname = preg_replace("/[^A-Za-z0-9]/","",$shortname);
// VM 2015-04-20 <<

for ($idx = 1; $idx <= 3; $idx++) {
	switch ($idx) {
		case 1: {
			$lnk_type = 0;
			$short_name = $lnk_rslt_txt;
			$filetmpname = $_FILES['rsltfile']['tmp_name'];
			$filename = sprintf("%s-%s-results.%s",$shortname,$ev_date,filename_extension($_FILES['rsltfile']['name']));
			break;
		}
		case 2: {
			$lnk_type = 1;
			$short_name = $lnk_splt_txt;
			$filetmpname = $_FILES['spltfile']['tmp_name'];
			$filename = sprintf("%s-%s-splits.%s",$shortname,$ev_date,filename_extension($_FILES['spltfile']['name']));
			break;
		}
		case 3: {
			$lnk_type = 4;
			$short_name = $lnk_misc_txt;
			$filetmpname = $_FILES['miscfile']['tmp_name'];
			$filename = sprintf("%s-%s-misc.%s",$shortname,$ev_date,filename_extension($_FILES['miscfile']['name']));
			break;
		}
	}
	//$short_name = mysql_real_escape_string($short_name);
	
	if (strlen($filetmpname) > 0) {
		$filename = str_replace(" ","",$filename);
		$filename = strtolower($filename);
		$filepath = $root_path."/".$sub_path."/".$filename;
		$url = $root_url."/".$sub_path."/".$filename;

		if (!copy($filetmpname,$filepath)) {
			printf("Failed to copy temporary file to [$sub_path/$filename]!<br />\n");
		} else {
			$db->delete('result_lnk',"sked_id=%i AND lnk_type=%i",$sked_id,$lnk_type);
			$db->insert(
				'result_lnk',
				array(
					'sked_id' => $sked_id,
					'ev_date' => $ev_date,
					'lnk_txt' => $short_name,
					'url' => $url,
					'html' => "Y",
					'lnk_type' => $lnk_type));
		
			switch ($idx) {
				case 1: $_SESSION['rslt_url'] = $url; break;
				case 2: $_SESSION['splt_url'] = $url; break;
				case 3: $_SESSION['misc_url'] = $url; break;
			}
			$_SESSION['shortname'] = $shortname;
		}
	}
}
$db->Close();

header("location:index.php");
?>

<?php
function IsValidFileType($tmpname,$filename,$type) {
	$err_code = 0;
	
	$file_ext = filename_extension($filename);
	switch ($file_ext) {
		case "txt":
		case "html":
		case "pdf":
			break;
		default: {
			// Unsupported file //
			$err_code |= 0x10;
			break;
		}
	}
	return $err_code;
}

function FirstSixChars($filename) {
	if (($fp = fopen("$filename","r")) === FALSE) {
		printf("Failed to open file for writing!");
	} else {
		$str = fgets($fp);
		fclose($fp);
		return substr($str,0,6);
	}
}

function filename_extension($filename) {
    $pos = strrpos($filename,'.');
    if ($pos === false) {
        return "";
    } else {
        return substr($filename,$pos+1);
    }
}
?>