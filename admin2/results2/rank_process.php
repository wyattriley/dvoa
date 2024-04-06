<?php
session_start();
$_SESSION['err_code'] = 0;

if (isset($_POST['ev_year']))
	$ev_year = intval($_POST['ev_year']);
else	
	//header("location:index.php");
	$ev_year = date("Y");

include_once("../../tools/dvoa_tools.inc.php");
include_once ("../../tools/db.dvoa.class.php");

$db = new MeekroDB("dbgen"); //Read-write access

$curr_year = date("Y");

set_time_limit(20 * 60); // 20 min.

$sql = "CALL dorank_multi()";
$db->query($sql);

header("location:index.php");

$db->Close();
?>