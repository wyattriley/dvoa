<?php
function HasRG($db,$event_id,$yy)
{
	$sql = "SELECT COUNT(*) FROM rg$yy WHERE event_id=%s";
	$rs  = $db->queryFirstField($sql,$event_id);
	if ($rs > 0)
		return sprintf(" Yes (%d)",$rs);
	else
		return "No";
}
?>