<?php
// helper functions for the result summary page
function GetPlaceNum($db,$course_id,$runner_id,$year)
{
	if ($year >= 2013) {
		//$sql = "SELECT runner_id FROM result_ledger l WHERE l.cs_id = %i AND rank_incl = 1 ORDER BY time_secs";
		$sql = "SELECT runner_id FROM result_ledger l WHERE l.cs_id = %i AND l.status = 0 ORDER BY time_secs";
	} else {
		$year = substr($year,2,2);
		$sql = "SELECT runner_id FROM result$year WHERE course_id = %s AND secs > 0 ORDER BY secs";
	}
	
	$place = 0;
	$rs = $db->query($sql,$course_id);
	$total = $db->count();
	if ($total > 0) {
		$count = 0;
		foreach ($rs as $row) {
			$count++;
			if ($row['runner_id'] == $runner_id) {
				$place = $count;
				break;
			}
		}
	}
	if ($place != 0)
		return "$place/$total";
	else
		return "-/$total";
}


function GetRankHist($db,$cat,$runner_id,$ss_date)
{
	$yr = date("Y") - 2000;

	// first get this runner's age and sex
	$sql = "SELECT sex,age FROM ss$yr WHERE runner_id=%i";
	list($sex,$age) = array_values($db->queryFirstRow($sql,$runner_id));
	
	//now get everyone ranked on this date in order
	if($cat == "overall") {
		$sql = "SELECT runner_id,score FROM ss$yr WHERE ss_date=%t ORDER BY score DESC";
		$rs = $db->query($sql,$ss_date);
	} else {
		$sql = "SELECT runner_id,score FROM ss$yr WHERE ss_date=%t AND sex=%s ORDER BY score DESC";
		$rs = $db->query($sql,$ss_date,$sex);
	}
	$num_ranked = $db->count();
	$indx = 1;
	// now find where this person ranks
	if ($num_ranked > 0) {
		foreach ($rs as $row) {
			if ($row['runner_id'] == $runner_id) {
				$place = $indx;
				break;
			}
			$indx++;
		}
	}
	//now make a sensible string...
	$str = sprintf("%d/%d",$place,$num_ranked);
	return $str;
}

function GetCrsRankHist($db,$crs_sc,$runner_id,$ss_date)
{
	$yr = date("Y") - 2000;
	//get everyone ranked on this date in order on this course
	$sql = "SELECT runner_id,$crs_sc FROM ss$yr WHERE ss_date=%t AND $crs_sc>0 ORDER BY $crs_sc DESC";
	$rs  = $db->query($sql,$ss_date);
	$num_ranked = $db->count();
	if ($num_ranked == 0)
		return "-";
	$indx = 1;
	$place = 9999;
	// now find where this person ranks
	foreach ($rs as $row) {
		if ($row['runner_id'] == $runner_id) {
			$place = $indx;
			break;
		}
		$indx++;
	}
	if ($place == 9999)
		return "-";
	else {
		//make a sensible string...
		$str = sprintf("%d/%d",$place,$num_ranked);
		return $str;
	}
}
?>