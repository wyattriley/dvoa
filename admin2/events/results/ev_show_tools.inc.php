<?php

function GetPace($secs,$dist)
{
	if ($dist > 0) {
		$secs_per_k = $secs / $dist;
		$pace = FormatSecsInMins($secs_per_k);
	} else
		$pace = 0;
	return $pace;
}

//function FormatSecs($secs)
//{
//	if ($secs >= 3600) {
//		$hr = floor($secs / 3600);
//		$mn = floor(($secs - ($hr * 3600)) / 60);
//		$sc = $secs - ($hr * 3600) - ($mn * 60);
//		$str = sprintf("%d:%02d:%02d",$hr, $mn, $sc);
//		return ($str);
//	} else {
//		$hr = 0;
//		$mn = floor(($secs - ($hr * 3600)) / 60);
//		$sc = $secs - ($hr * 3600) - ($mn * 60);
//		$str = sprintf("%d:%02d",$mn, $sc);
//		return ($str);
//	}
//}

function FormatSecsInMins($secs)
{
	if ($secs >= 3600) {
		$hr = floor($secs / 3600);
		$mn = floor(($secs - ($hr * 3600)) / 60);
		$sc = $secs - ($hr * 3600) - ($mn * 60);
		$str = sprintf("%02d:%02d",($hr*60)+$mn, $sc);
		return ($str);
	} else {
		$hr = 0;
		$mn = floor(($secs - ($hr * 3600)) / 60);
		$sc = $secs - ($hr * 3600) - ($mn * 60);
		$str = sprintf("%d:%02d",$mn, $sc);
		return ($str);
	}
}

function TimeBehind($this_time,$best_time)
{
	$diff_time = $this_time - $best_time;
	return FormatSecsInMins($diff_time);
}

function FormatEvShowDate ($d)
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

function html_header ($title)
{
	print("<html><head>\n");
	print("<!-- This page dynamically created by PHP API - all data from an MySQL database. -->\n");
	if ($title)
		printf("<title>%s</title>\n",$title);
	else
		printf("<title>Untitled</title>\n");

	print("<style>\n");
	print("h1 {\n");
	print("\tfont-family : Arial;\n");
	print("\tfont-size : 16pt;\n");
	print("\tfont-weight: bold;\n");
	print("\tcolor : #000080\n");
	print("}\n");
	print("h2 {\n");
	print("\tfont-family : Arial;\n");
	print("\tfont-size : 12pt;\n");
	print("\tfont-weight: bold;\n");
	print("\tcolor : #808080\n");
	print("}\n");
	print("td.data {\n");
	print("\tfont-family : Verdana;\n");
	print("\tfont-size : 10pt;\n");
	print("\tcolor : #000080\n");
	print("}\n");
	print("table {\n");
	print("\tfont-family : Verdana;\n");
	print("\tfont-size : 10pt;\n");
	print("\tcolor : #000080\n");
	print("}\n");
	print("td {\n");
	print("\tfont-family : Verdana;\n");
	print("\tfont-size : 10pt;\n");
	print("\tcolor : #000080;\n");
	print("}\n");

	print("</style>\n");

	print("</head>\n");
}

# puts in html footer info
function html_footer ()
{
	print("</body>\n</html>\n");	
}	

//function time2secs($tm)
//{
//	$hr=0;
//	$min=0;
//	$sec=0;
//	
//	if (strlen($tm) == 5) {
//		$min = substr($tm,0,2);
//		$sec = substr($tm,3,2);
//	} else if (strlen($tm) == 6) {
//		$min = substr($tm,0,3);
//		$sec = substr($tm,4,2);
//	} else if (strlen($tm) == 7) {
//		$hr  = substr($tm,0,1);
//		$min = substr($tm,2,2);
//		$sec = substr($tm,5,2);
//	} else if (strlen($tm) == 8) {
//		$hr  = substr($tm,0,2);
//		$min = substr($tm,3,2);
//		$sec = substr($tm,5,2);
//	}
//	return ($hr*60*60) + ($min*60) + $sec;
//}

function calc_pace($tm,$dist)
{
	$total_secs = time2secs($tm);
	$secs_per_k = $total_secs / $dist;
	$pace = FormatSecsInMins($secs_per_k);
	return $pace;
}

function ChopIt($str,$len)
{
	if (strlen($str) <= $len)
		return $str;
}


function GetCGV($db,$year,$event_id,$crs_id)
{
	$sql = "SELECT top3avg FROM course$year WHERE event_id='$event_id' AND color='$crs_id'";
	list ($cgv) = $db->GetRow($sql);
	return $cgv;
}



?>