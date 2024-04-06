<?php
session_start();
$_SESSION['err_code'] = 0;

if (!isset($_POST['sked_id']))
	header("location:index.php");
else
	$sked_id = intval($_POST['sked_id']);

//check for submit errors
if ($sked_id == 0)
	$_SESSION['err_code'] |= 0x01;

if ($_FILES['csvfile']['tmp_name'] == "")
	$_SESSION['err_code'] |= 0x02;
else
	$_SESSION['err_code'] |= IsValidFileType($_FILES['csvfile']['name'],"results");

if ($_SESSION['err_code']) {
	$_SESSION['sked_id'] = $sked_id;
	$_SESSION['csvfilename'] = $_FILES['csvfile']['name'];
	header("location:index.php");
}

//if we made it this far, then consider the input data valid...

include_once("../../tools/dvoa_tools.inc.php");
include_once ("../../tools/db.dvoa.class.php");

$db = new MeekroDB("dbgen"); //Read-write access

$yr = sprintf("%02d",date("Y") - 2000);

//first get the map name and event date

//$sql = "SELECT ev_date,maplist.map,shortname FROM sked,maplist WHERE sked.map_id=maplist.id AND sked.id=%i";
$sql = "SELECT ev_date,name,shortname FROM event_list WHERE sked_id=%i";
list($ev_date,$map,$shortname) = $db->queryFirstList($sql,$sked_id);

if ($_FILES['csvfile']['size'] > 0) {
	$MyFile = $_FILES['csvfile']['tmp_name'];
	$MyFileName = $_FILES['csvfile']['name'];
	
	$len = 2096;
	$delimiter = ';';
	$enclosure = "\"";
	
	/* When there was just OE2010 format...
	$chip_no_col = 3;
	$lname_col = 5;
	$fname_col = 6;
	$yob_col = 7;
	$sex_col = 8;
	$nc_col = 10;
	$stime_col = 11;
	$ftime_col = 12;
	$etime_col = 13;
	$status_col = 14;
	$club_id_col = 18;
	$club_name_col = 20;
	$cl_id_col = 24;
	$cl_sname_col = 25;
	$cl_name_col = 26;
	$num_grp_col = 32;
	$notes_col = 35;
	$ousa_col = 36;
	$rented_col = 48;
	$cs_id_col = 52;
	$cs_name_col = 53;
	$cs_length_col = 54;
	$cs_climb_col = 55;
	$cs_controls_col = 56;
	$position_col = 57;
	*/
	
	if (($handle = fopen($MyFile,"r")) != FALSE) {
		$sql = sprintf("CALL rslt_jnl_crs_delete(%d)",$sked_id);
		$db->query($sql);
		/*
		$insert_query_prefix  = sprintf("INSERT INTO result_jnl (");
		$insert_query_prefix .= sprintf("sked_id,ev_date,cl_id,cl_name,cl_sname,cs_id,cs_name,cs_length,cs_climb,cs_controls,");
		$insert_query_prefix .= sprintf("sex,fname,lname,yob,club_id,club_name,stime,ftime,etime,time_secs,");
		$insert_query_prefix .= sprintf("ind,nc,num_grp,position,status,maps_num,runners_num,chip_no,rented,notes,");
		$insert_query_prefix .= sprintf("upload_date,upload_source,orig_fname,orig_lname,orig_yob,orig_club_name) VALUES ");
		*/
		$header = fgetcsv($handle, $len, $delimiter, $enclosure);
		
		
		// if the old format
		if (trim($header[0]) != "OE0012_V12") {
//		if (FALSE) {
			$chip_no_col = 3;
			$lname_col = 5;
			$fname_col = 6;
			$yob_col = 7;
			$sex_col = 8;
			$nc_col = 10;
			$stime_col = 11;
			$ftime_col = 12;
			$etime_col = 13;
			$status_col = 14;
			$club_id_col = 18;
			$club_name_col = 20;
			$cl_id_col = 24;
			$cl_sname_col = 25;
			$cl_name_col = 26;
			$num_grp_col = 32;
			$notes_col = 35;
			$ousa_col = 36;
			$rented_col = 48;
			$cs_id_col = 52;
			$cs_name_col = 53;
			$cs_length_col = 54;
			$cs_climb_col = 55;
			$cs_controls_col = 56;
			$position_col = 57;
		} else { 
			// OE0012_V12 format
			$chip_no_col = 4;
			$lname_col = 7; 
			$fname_col = 8;
			$yob_col = 10;
			$sex_col = 11;
			$nc_col = 13;
			$stime_col = 14;
			$ftime_col = 15;
			$etime_col = 16;
			$status_col = 17;
			$club_id_col = 21;
			$club_name_col = 23;
			$cl_id_col = 27;
			$cl_sname_col = 28;
			$cl_name_col = 29;
			$num_grp_col = 35;
			$notes_col = 38;
			$ousa_col = 39;
			$rented_col = 51;
			$cs_id_col = 56;
			$cs_name_col = 57;
			$cs_length_col = 58;
			$cs_climb_col = 59;
			$cs_controls_col = 60;
			$position_col = 60;
		}
		
		//while (($data = fgets($handle, $len)) !== FALSE) {
		//	$array = explode(';', $data);
		//	foreach ($array as $value) {
		//		...
		//	}
		//
		while (($data = fgetcsv($handle, $len, $delimiter, $enclosure)) != FALSE) {
			$number_of_fields = count($data);

			$param = array();
			$param['sked_id'] = $sked_id;
			$param['ev_date'] = $ev_date;
			$param['cl_id'] = intval($data[$cl_id_col]); //cl_id
			$param['cl_name'] = trim($data[$cl_name_col]); //cl_name
			$param['cl_sname'] = trim($data[$cl_sname_col]); //cl_sname
			$param['cs_id'] = intval($data[$cs_id_col]); //cs_id
			$param['cs_name'] = trim($data[$cs_name_col]); //cs_name
			$param['cs_length'] = floatval($data[$cs_length_col]); //cs_length
			$param['cs_climb'] = floatval($data[$cs_climb_col]); //cs_climb
			$param['cs_controls'] = intval($data[$cs_controls_col]); //cs_controls
			$param['num_grp'] = intval($data[$num_grp_col]); //num_grp

			if ($param['num_grp'] == 0) {
				$param['sex'] = trim($data[$sex_col]);
				$param['yob'] = intval($data[$yob_col]);
				$param['ind'] = 1;
				$param['runners_num'] = 1;
			} else {
				$param['sex'] = "G";
				$param['yob'] = 0;
				$param['ind'] = 0;
				$param['runners_num'] = $param['num_grp'];
			}
			$param['fname'] = trim($data[$fname_col]); //fname
			$param['lname'] = trim($data[$lname_col]); //lname
			
			$param['club_id'] = intval($data[$club_id_col]); //club_id
			$param['club_name'] = trim($data[$club_name_col]); //club_name
			$param['stime'] = trim($data[$stime_col]); //stime
			$param['ftime'] = trim($data[$ftime_col]); //ftime
			$param['etime'] = trim($data[$etime_col]); //etime
			if ($param['etime'] == "")
				$param['etime'] = "0:00:00";
			//$param['time_secs'] = $db->sqleval("TIME_TO_SEC($param['etime'])");
			// 2017-11-24 VM >>
			//list($hr,$min,$sec) = explode(":",$param['etime']);
			//$param['time_secs'] = $hr*3600 + $min*60 + $sec;
			$param['time_secs'] = TimeToSec($param['etime']);
			// 2017-11-24 VM <<

			$param['nc'] = $data[$nc_col] == "X" ? 1 : 0;
			$param['position'] = intval($data[$position_col]); //position
			$param['status'] = intval($data[$status_col]); //status
			$param['maps_num'] = 1;
			
			$param['chip_no'] = intval($data[$chip_no_col]); //chip_no
			$param['rented'] = $data[$rented_col] == "X" ? 1 : 0;
			$param['ousa'] = stripos(trim($data[$ousa_col]),"y") !== FALSE ? 1 : 0;
			$param['notes'] = trim($data[$notes_col]); //notes
			$param['upload_date'] = $db->sqleval("NOW()");
			$param['upload_source'] = $MyFileName;
			$param['orig_fname'] = $param['fname'];
			$param['orig_lname'] = $param['lname'];
			$param['orig_yob'] = $param['yob'];
			$param['orig_club_name'] = $param['club_name'];
			
			$db->insert('result_jnl',$param);

			/*
			$cl_id       = intval($data[$cl_id_col]); //cl_id
			$cl_name     = trim($data[$cl_name_col]); //cl_name
			$cl_sname    = trim($data[$cl_sname_col]); //cl_sname
			$cs_id       = intval($data[$cs_id_col]); //cs_id
			$cs_name     = trim($data[$cs_name_col]); //cs_name
			$cs_length   = floatval($data[$cs_length_col]); //cs_length
			$cs_climb    = floatval($data[$cs_climb_col]); //cs_climb
			$cs_controls = intval($data[$cs_controls_col]); //cs_controls
			$num_grp     = intval($data[$num_grp_col]); //num_grp
			if ($num_grp == 0) {
				$sex     = trim($data[$sex_col]);
				$yob     = intval($data[$yob_col]);
				$ind     = 1;
				$runners_num = 1;
			} else {
				$sex     = 'G';
				$yob     = 0;
				$ind     = 0;
				$runners_num = $num_grp;
			}
			$fname       = trim($data[$fname_col]); //fname
			$lname       = trim($data[$lname_col]); //lname
			$club_id     = intval($data[$club_id_col]); //club_id
			$club_name   = trim($data[$club_name_col]); //club_name
			$stime       = trim($data[$stime_col]); //stime
			$ftime       = trim($data[$ftime_col]); //ftime
			$etime       = trim($data[$etime_col]); //etime
			if ($etime == '')
				$etime = '0:00:00';
			$time_secs   = 0; //time_secs
			if ($data[$nc_col] == 'X') { 
				$nc      =  1;
			} else {
				$nc      =  0;
			}
			$position    = intval($data[$position_col]); //position
			$status      = intval($data[$status_col]); //status
			$maps_num    = 1; //maps_num
			$chip_no     = intval($data[$chip_no_col]); //chip_no
			if ($data[$rented_col] == 'X') {
				$rented  = 1;
			} else {
				$rented  = 0;
			}
			$notes       = trim($data[$notes_col]); //notes
			
			$query  = sprintf("%s (",$insert_query_prefix);
			$query .= sprintf("%d,'%s',%d,'%s','%s',%d,'%s',%f,%f,%d,",$sked_id,$ev_date,$cl_id,$cl_name,$cl_sname,$cs_id,$cs_name,$cs_length,$cs_climb,$cs_controls);
			$query .= sprintf("'%s','%s','%s',%d,%d,'%s',",$sex,$fname,$lname,$yob,$club_id,$club_name);
			$query .= sprintf("'%s','%s','%s',TIME_TO_SEC('%s'),",$stime,$ftime,$etime,$etime);
			$query .= sprintf("%d,%d,%d,%d,%d,%d,%d,%s,%d,'%s',",$ind,$nc,$num_grp,$position,$status,$maps_num,$runners_num,$chip_no,$rented,$notes);
			$query .= sprintf("CURRENT_TIMESTAMP,'%s','%s','%s',%d,'%s');",$MyFileName,$fname,$lname,$yob,$club_name);

			$db->query($query);
			*/
		}
		fclose($handle);
	}
	/* -------------------------------------------------------------------------
	$sql = "CALL rslt_jnl_crs_delete($sked_id)";
	$db->Execute($sql);
	
	$loadsql  = "LOAD DATA LOCAL INFILE '$MyFile' IGNORE INTO TABLE result_jnl";
	$loadsql .= " FIELDS TERMINATED BY ';' ENCLOSED BY '\"'";
	$loadsql .= " LINES TERMINATED BY '\\r\\n'";
	$loadsql .= " IGNORE 1 LINES";
	$loadsql .= " (@dummy,@dummy,@dummy,chip_no,@dummy,@lname,@fname,@yob,@sex,@dummy,";
	$loadsql .= "@nc,stime,ftime,etime,status,@dummy,@dummy,@dummy,club_id,@dummy,";
	$loadsql .= "@club_name,@dummy,@dummy,@dummy,cl_id,cl_sname,cl_name,@dummy,@dummy,@dummy,";
	$loadsql .= "@dummy,@dummy,@numgrp,@dummy,@dummy,notes,@dummy,@dummy,@dummy,@dummy,";
	$loadsql .= "@dummy,@dummy,@dummy,@dummy,@dummy,@dummy,@dummy,@dummy,@rented,@dummy,";
	$loadsql .= "@dummy,@dummy,cs_id,cs_name,cs_length,cs_climb,cs_controls,position)";
	$loadsql .= " SET sked_id = $sked_id,";
	$loadsql .= " ev_date = '$ev_date',";
	$loadsql .= " fname = TRIM(@fname),";
	$loadsql .= " lname = TRIM(@lname),";
	$loadsql .= " club_name = TRIM(@club_name),";
	$loadsql .= " maps_num = 1,";
	$loadsql .= " runners_num = IF(@numgrp = 0,1,@numgrp),";
	$loadsql .= " num_grp = @numgrp,";
	$loadsql .= " yob = IF(num_grp = 0,@yob,0),";
	$loadsql .= " ind = IF(@numgrp = 0,1,0),";
	$loadsql .= " nc = IF(@nc = 'X',1,0),";
	$loadsql .= " sex = IF(@numgrp = 0,@sex,'G'),";
	$loadsql .= " rented = IF(@rented = 'X',1,0),";
	$loadsql .= " time_secs = TIME_TO_SEC(etime),";
	$loadsql .= " upload_date = CURRENT_TIMESTAMP,";
	$loadsql .= " upload_source = '$MyFileName',";
	$loadsql .= " orig_fname = fname,";
	$loadsql .= " orig_lname = lname,";
	$loadsql .= " orig_yob = yob,";
	$loadsql .= " orig_club_name = club_name;";

	//$db->Execute($sql);
	mysql_query($loadsql) or die(mysql_error());
	$loadresult = mysql_info();
	--------------------------------------------------------------------------------------- */

	$_SESSION['loadresult'] = $loadresult;
	$_SESSION['shortname'] = $shortname;

	$sql = sprintf("CALL rslt_jnl_assist_edit(%d)",$sked_id);
	$db->query($sql);
}

header("location:rslt_jnl_list.php?sked_id=$sked_id&list=all");

$db->Close();
?>

<?php
function IsValidFileType($filename,$type)
{
	$err_code = 0;
	$file_ext = filename_extension($filename);
	switch ($type) {
		case "results":
			if ($file_ext != "csv")
				$err_code |= 0x10;
			break;
		case "splits":
			if ($file_ext != "html")
				$err_code |= 0x40;
			break;
	}
	return $err_code;
}

function quote_all_array($values) { 
    foreach ($values as $key=>$value) 
        if (is_array($value)) 
            $values[$key] = quote_all_array($value); 
        else 
            $values[$key] = quote_all($value); 
    return $values; 
} 

function quote_all($value) { 
    if (is_null($value)) 
        return "NULL"; 

    $value = "'" . mysql_real_escape_string($value) . "'"; 
    return $value; 
}

function filename_extension($filename) {
    $pos = strrpos($filename,'.');
    if($pos === false) {
        return "";
    } else {
        return substr($filename,$pos+1);
    }
}

// 2017-11-24 VM >>
function TimeToSec($time) {
    $sec = 0;
    foreach (array_reverse(explode(':', $time)) as $k => $v) $sec += pow(60, $k) * $v;
    return $sec;
}
// 2017-11-24 VM <<
?>