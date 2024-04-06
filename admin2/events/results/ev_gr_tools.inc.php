<?php
function getMapName($db,$event_id,$year)
{
	if ($year == "01" || $year=="00")
		$sql = "SELECT name FROM event$year WHERE event_id=%s";
	else
		$sql = "SELECT short_name FROM event$year WHERE event_id=%s";

	$name = $db->queryFirstField($sql,$event_id);
	return $name;
}

function getWinPace($db,$course_id,$year)
{
	$sql = "SELECT dist FROM course$year WHERE course_id=%s";
	$dist = $db->queryFirstField($sql,$course_id);

	$sql = "SELECT secs FROM result$year WHERE course_id=%s AND in_rank=1 AND secs>0 ORDER BY secs LIMIT 1";
	$secs = $db->queryFirstField($sql,$course_id);

	return $dist > 0 ? $secs / $dist : 0;
}

function getAvgPace($db,$course_id,$year)
{
	$sql = "SELECT AVG(secs) AS avg_secs FROM result$year WHERE course_id=%s AND in_rank=1 AND secs>0";
	$avg_secs = $db->queryFirstField($sql,$course_id);
	
	$sql = "SELECT dist FROM course$year WHERE course_id=%s";
	$dist = $db->queryFirstField($sql,$course_id);

	return $dist > 0 ? $avg_secs / $dist : 0;
}

function getYourPace($db,$runner_id,$course_id,$secs,$year)
{
	$sql = "SELECT dist FROM course$year WHERE course_id=%s";
	$dist = $db->queryFirstField($sql,$course_id);

	$sql = "SELECT secs FROM result$year WHERE course_id=%s AND runner_id=%i";
	$secs = $db->queryFirstField($sql,$course_id,$runner_id);
	
	return $dist > 0 ? $secs / $dist : 0;
}
?>