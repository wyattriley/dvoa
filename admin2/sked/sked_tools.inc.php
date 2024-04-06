<?php
function GetShortMon($mm)
{
	switch ($mm) {
	case 1: $mon="Jan";break;
	case 2: $mon="Feb";break;
	case 3: $mon="Mar";break;
	case 4: $mon="Apr";break;
	case 5: $mon="May";break;
	case 6: $mon="Jun";break;
	case 7: $mon="Jul";break;
	case 8: $mon="Aug";break;
	case 9: $mon="Sep";break;
	case 10: $mon="Oct";break;
	case 11: $mon="Nov";break;
	case 12: $mon="Dec";break;
	}
	return $mon;
}

function GetLongMon($mm)
{
	switch ($mm) {
	case 1: $mon="January";break;
	case 2: $mon="February";break;
	case 3: $mon="March";break;
	case 4: $mon="April";break;
	case 5: $mon="May";break;
	case 6: $mon="June";break;
	case 7: $mon="July";break;
	case 8: $mon="August";break;
	case 9: $mon="September";break;
	case 10: $mon="October";break;
	case 11: $mon="November";break;
	case 12: $mon="December";break;
	}
	return $mon;
}
function GetNumDays($mm)
{
	switch ($mm) {
	case 1: $num=31;break;
	case 2: $num=29;break;
	case 3: $num=31;break;
	case 4: $num=30;break;
	case 5: $num=31;break;
	case 6: $num=30;break;
	case 7: $num=31;break;
	case 8: $num=31;break;
	case 9: $num=30;break;
	case 10: $num=31;break;
	case 11: $num=30;break;
	case 12: $num=31;break;
	}
	return $num;
}

function DateToDB($mm,$dd,$yy)
{
	switch ($mm) {
	case "Jan" : $mn=1;break;
	case "Feb" : $mn=2;break;
	case "Mar" : $mn=3;break;
	case "Apr" : $mn=4;break;
	case "May" : $mn=5;break;
	case "Jun" : $mn=6;break;
	case "Jul" : $mn=7;break;
	case "Aug" : $mn=8;break;
	case "Sep" : $mn=9;break;
	case "Oct" : $mn=10;break;
	case "Nov" : $mn=11;break;
	case "Dec" : $mn=12;break;
	}

	$tmp_date = sprintf("%04d-%02d-%02d",$yy,$mn,$dd);
	return $tmp_date;
}

function FormatKitDate ($d)
{
	$yy = substr($d,0,4);
	$mm = substr($d,5,2);
	$dd = substr($d,8,2);
	switch($mm) {
	case 1: $mon="Jan";break;
	case 2: $mon="Feb";break;
	case 3: $mon="Mar";break;
	case 4: $mon="Apr";break;
	case 5: $mon="May";break;
	case 6: $mon="Jun";break;
	case 7: $mon="Jul";break;
	case 8: $mon="Aug";break;
	case 9: $mon="Sep";break;
	case 10: $mon="Oct";break;
	case 11: $mon="Nov";break;
	case 12: $mon="Dec";break;
	}
	$retStr = sprintf("%s %s, %s",$mon,$dd,$yy);	
	return $retStr;
}

function GetDayOfWk()
{
	$now = getdate();
	switch ($now["wday"]) {
		case 1 : return "Mon"; 
		case 2 : return "Tue";
		case 3 : return "Wed";
		case 4 : return "Thu";
		case 5 : return "Fri";
		case 6 : return "Sat";
		case 7 : return "Sun";
	}
}

function getMonthName($mm)
{
	switch($mm) {
		case 1: $mon="Jan"; break;
		case 2: $mon="Feb"; break;
		case 3: $mon="Mar"; break;
		case 4: $mon="Apr"; break;
		case 5: $mon="May"; break;
		case 6: $mon="Jun"; break;
		case 7: $mon="Jul"; break;
		case 8: $mon="Aug"; break;
		case 9: $mon="Sep"; break;
		case 10: $mon="Oct"; break;
		case 11: $mon="Nov"; break;
		case 12: $mon="Dec"; break;
	}
	return $mon;
}

function getCurYear()
{
	$now = getdate();
	return 2006;		
	return $now["year"];
}

function maxDays($monthno,$yearno)
{
	switch ($monthno) {
		case 1: $ret_val = 31;break;
		case 2: 
			if ($yearno == 2000)
				$ret_val = 29;
			else if ($yearno == 2004)
			$ret_val = 29;
			else if ($yearno == 2008)
				$ret_val = 29;
			else if ($yearno == 2012)
				$ret_val = 29;
			else if ($yearno == 2016)
				$ret_val = 29;
			else
				$ret_val = 28;
			break;
		case 3: $ret_val = 31;break;
		case 4: $ret_val = 30;break;
		case 5: $ret_val = 31;break;
		case 6: $ret_val = 30;break;
		case 7: $ret_val = 31;break;
		case 8: $ret_val = 31;break;
		case 9: $ret_val = 30;break;
		case 10: $ret_val = 31;break;
		case 11: $ret_val = 30;break;
		case 12: $ret_val = 31;break;
	}
	return $ret_val;
}

function getDayName($weekday)
{
		switch($weekday) {
			case 0 : $ww = "Sun"; break;
			case 1 : $ww = "Mon"; break;
			case 2 : $ww = "Tue"; break;
			case 3 : $ww = "Wed"; break;
			case 4 : $ww = "Thu"; break;
			case 5 : $ww = "Fri"; break;
			case 6 : $ww = "Sat"; break;
		}
		return $ww;
}

function getMySQLDate($yearno,$monthno,$dayno)
{
	$ev_date = sprintf("%04d-%02d-%02d",$yearno,$monthno,$dayno);
	return $ev_date;
}

function getEventCount($db,$ev_date)
{
	$sql = "SELECT COUNT(*) FROM sked WHERE ev_date=%?";
	$rs  = $db->queryFirstField($sql,$ev_date);
	return $rs;
}

function getEventID($db,$ev_date)
{
	$sql = "SELECT id FROM sked WHERE ev_date=%?";
	$id = $db->queryFirstField($sql,$ev_date);
	return $id;
}

function getDetails($db,$sked_id)
{
	//$sql = "SELECT map_id FROM sked WHERE id=$sked_id";
	//list ($map_id) = $db->GetRow($sql);
	//$sql = "SELECT shortname FROM maplist WHERE id='$map_id'";
	//list($shortname) = $db->GetRow($sql);
	$sql = "SELECT m.shortname FROM sked s, maplist m WHERE s.map_id = m.id AND s.id = %i";
	$shortname = $db->queryFirstField($sql,$sked_id);
	$map = stripslashes($shortname);
	return $map;
}	

function getAllDetails($db,$id)
{
	$sql = "SELECT dayofwk,ev_date,map_id,ed_id,cs_id,courses FROM sked WHERE id=%i";
	list ($dayofwk,$ev_date,$map_id,$ed_id,$cs_id,$courses) = $db->queryFirstList($sql,$id);

	$sql = "SELECT fname,lname FROM mmbr WHERE id=%i";
	list($fname,$lname) = $db->queryFirstList($sql,$ed_id);
	$ed = sprintf("%s %s",stripslashes($fname),stripslashes($lname));

	$sql = "SELECT fname,lname FROM mmbr WHERE id=%i";
	list($fname,$lname) = $db->queryFirstList($sql,$cs_id);
	$cs = sprintf("%s %s",stripslashes($fname),stripslashes($lname));

	$sql = "SELECT shortname FROM maplist WHERE id=%i";
	$shortname = $db->queryFirstField($sql,$map_id);
	$str = sprintf("$shortname, $dayofwk, $ev_date, ED: $ed, CS: $cs, $courses");
		return $str;
}

function SaveEvent($db,$highlight,$dayofwk,$ev_date,$dvoa_event,$map_id,$foreign_link,$kit,$ed_id,$ed2_id,$cs_id,$cs2_id,$con_id,$epunch,$notes,$hc_notes,$notes_link,$link_name,$confirm,$map,$director,$cs,$foreign_dirs,$foreign_email,$regurl)
{
	$db->insert(
		'sked',
		array(
			'id' => 0,
			'highlight' => $highlight,
			'dayofwk' => $dayofwk,
			'ev_date' => $ev_date,
			'dvoa_event' => $dvoa_event,
			'map_id' => $map_id,
			'foreign_link' => $foreign_link,
			'map' => $map,
			'director' => $director,
			'cs' => $cs,
			'foreign_dirs' => $foreign_dirs,
			'foreign_email' => $foreign_email,
			'kit' => $kit,
			'ed_id' => $ed_id,
			'ed2_id' => $ed2_id,
			'cs_id' => $cs_id,
			'cs2_id' => $cs2_id,
			'con_id' => $con_id,
			'epunch' => $epunch,
			'notes' => $notes,
			'hc_notes' => $hc_notes,
			'notes_link' => $notes_link,
			'link_name' => $link_name,
			'confirm' => $confirm,
            'regurl' => $regurl));
	return $db->InsertId();
}

function UpdateEvent($db,$sked_id,$highlight,$dayofwk,$ev_date,$dvoa_event,$map_id,$foreign_link,$kit,$ed_id,$ed2_id,$ed_name,$cs_id,$cs2_id,$con_id,$epunch,$notes,$hc_notes,$notes_link,$link_name,$confirm,$map,$director,$cs,$foreign_dirs,$foreign_email,$regurl)
{
	$db->update(
		'sked',
		array(
			'highlight' => $highlight,
			'dayofwk' => $dayofwk,
			'ev_date' => $ev_date,
			'dvoa_event' => $dvoa_event,
			'map_id' => $map_id,
			'foreign_link' => $foreign_link,
			'map' => $map,
			'director' => $director,
			'cs' => $cs,
			'foreign_dirs' => $foreign_dirs,
			'foreign_email' => $foreign_email,
			'kit' => $kit,
			'ed_id' => $ed_id,
			'ed2_id' => $ed2_id,
			'cs_id' => $cs_id,
			'cs2_id' => $cs2_id,
			'con_id' => $con_id,
			'epunch' => $epunch,
			'notes' => $notes,
			'hc_notes' => $hc_notes,
			'notes_link' => $notes_link,
			'link_name' => $link_name,
			'confirm' => $confirm,
            'regurl' => $regurl),
		"id=%i",$sked_id);
}

function DeleteEvent($db,$id)
{
	$db->delete('sked',"id=%i",$id);
}

function DeleteCourses($db,$sked_id)
{
	$db->delete('sked_crs_xref',"sked_id=%i",$sked_id);
}

function SaveCourses($db,$sked_id,$crs_id)
{
	$db->insert('sked_crs_xref',array('sked_id' => $sked_id,'crs_id' => $crs_id));
}

function CourseExist($db,$sked_id,$crs_id)
{
	if ($sked_id == 0)
		return false;
	$sql = "SELECT COUNT(*) FROM sked_crs_xref WHERE sked_id=%i AND crs_id=%i";
	$rs = $db->queryFirstField($sql,$sked_id,$crs_id);
	return $rs > 0 ? true : false;
}


function toggleConfirm($db,$id)
{
	$sql = "SELECT confirm FROM sked WHERE id=%i";
	$confirm = $db->queryFirstField($sql,$id);
	if ($confirm == "Y")
		$confirm = "N";
	else if ($confirm == "N")
		$confirm = "Y";
	$db->update('sked',array('confirm' => $confirm),"id=%i",$id);
}

function toggleEvent($db,$id)
{
	$sql = "SELECT dvoa_event FROM sked WHERE id=%i";
	$dvoa_event = $db->queryFirstField($sql,$id);
	if ($dvoa_event == "Y")
		$dvoa_event = "N";
	else if ($dvoa_event == "N")
		$dvoa_event = "Y";
	$db->update('sked',array('dvoa_event' => $dvoa_event),"id=%i",$id);
}

function GetCourses($db,$sked_id)
{
	$sql = "SELECT crs_id FROM sked_crs_xref WHERE sked_id=%i ORDER BY crs_id";
	$rs = $db->query($sql,$sked_id);
	$str = "";
	foreach ($rs as $row) {
		$str .= sprintf("%s",GetCrsInfo($db,$row['crs_id']));
	}
	return $str;
}

function GetCrsInfo($db,$crs_id)
{
	$sql = "SELECT abbr FROM crs WHERE crs_id=%i";
	$abbr = $db->queryFirstField($sql,$crs_id);
	return $abbr;
}

function GetSkedMapShortName($db,$map_id)
{
	if ($map_id == 99999)
		return "<span style=\"color:#888;\"><em>No map assigned</em></span>";
	$sql = "SELECT shortname FROM maplist WHERE id=%i";
	$map = $db->queryFirstField($sql,$map_id);
	if (strlen($map) == 0)
		$map = "<em>No Map Selected</em>";
	return $map;
}

function GetMmbrName($db,$ed_id)
{
	$sql = "SELECT fname,lname FROM mmbr WHERE id=%i";
	list($fname,$lname) = $db->queryFirstList($sql,$ed_id);
	return sprintf("%s %s",stripslashes($fname),stripslashes($lname));
}
?>