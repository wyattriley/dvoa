<?php
include_once("../../tools/db.dvoa.class.php");
$db = new MeekroDB("dbgen");

$sql = "SELECT id,map_link,map FROM sked";
$rs  = $db->query($sql);
foreach ($rs as $row) {
	$sql = "SELECT id FROM maplist WHERE link_name=%s";
	$map_id = $db->queryFirstField($sql,$row['map_link']);
	UpdateMapID($db,$row['id'],$map_id);
}
$db->Close();
?>

<?php
function UpdateMapID($db,$sked_id,$map_id)
{
	$db->update('sked',array('map_id' => $map_id),"id=%i",$sked_id);
}
?>