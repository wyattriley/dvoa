<?php
include ("../../tools/db.dvoa.class.php");
include ("../../tools/dvoa_tools.inc.php");
include ("rank_tools.inc.php");

$crs_id = 10; # White as default
$year = 2023; # default
if (isset($_REQUEST['crs_id']))
	$crs_id = intval($_REQUEST['crs_id']);
if (isset($_REQUEST['year']))
	$year   = intval($_REQUEST['year']); 

$sortDir = ($year >= 2000 && $year <= 2004) ? "ASC" : "DESC";
$year2 = ($year >= 2000) ? substr($year,2,2) : $year;

if ($_SERVER['HTTP_HOST'] != "localhost")
	$root = "http://www.dvoa.org";
else
	$root = "http://localhost/dvoa";

if ($year >= 2013) {
	$db = new MeekroDB();
	$col_name = "rank_score";
	
	$sql = "SELECT course FROM crs WHERE crs_id = %i";
	$crs_name = $db->queryFirstField($sql,$crs_id);
} else {
	$db = new MeekroDB("dbrank");

	switch ($crs_id) {
		case 10: case 11: case 12:
			$col_name="white_score"; $crs_name="White";break;
		case 20: case 21: case 22: 
			$col_name="yellow_score"; $crs_name="Yellow";break;
		case 30: case 31: case 32: 
			$col_name="orange_score"; $crs_name="Orange";break;
		case 40: case 41: case 42: 
			$col_name="brown_score"; $crs_name="Brown";break;
		case 50: case 51: case 52: 
			$col_name="green_score"; $crs_name="Green";break;
		case 60: case 61: case 62: 
			$col_name="red_score"; $crs_name="Red";break;
		case 70: case 71: case 72: 
			$col_name="blue_score"; $crs_name="Blue";break;
		case 80: 
			$col_name="sprint_score"; $crs_name="Sprint";break;
		default:
			$crs_name="Unknown";
	}
}

$title=sprintf("%d %s Course Summary",$year,$crs_name);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php printf("$title");?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="ev_show.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="../../images/newflag.ico" />
</head>

<body>
<div id="wrap">
	
	<div id="header">
	<h1>Course Summary</h1>
	<?php
	printf("<h3>$title</h3>\n");
	?>
	</div>

	<div id="content">
	<?php
		if (isset($_SERVER['HTTP_REFERER']) && strpos($_SERVER['HTTP_REFERER'],"rank") == true)
			printf("<p align=\"center\"><a href=\"$root/rank/index.php\">Back to Rankings Page</a></p>\n");
		else
		#if (strpos($_SERVER['HTTP_REFERER'],"results") == true)
			printf("<p align=\"center\"><a href=\"$root/events/results/index.php\">Back to Results Page</a></p>\n");

		printf("<table border=\"1\" cellspacing=\"0\" cellpadding=\"2\" align=\"center\">\n");
		printf("<tr bgcolor=\"#f0f0f0\">");
		printf("<td align=center><b>Rank</b></td>");
		printf("<td><b>Name</b></td>");
		printf("<td><b>Class</b></td>");
		printf("<td align=center><b>Score</b></td>");
		printf("</tr>\n");
		
		if (isset($col_name))
		{
			if ($year >= 2013) {
				$sql  = "SELECT r.id as runner_id,r.name,r.sex,a.min_age as age,k.$col_name as rank_score,k.sort_order AS in_rank";
				$sql .= " FROM result_runner r,runner_rank k,agecls a";
				$sql .= " WHERE r.id = k.runner_id";
				$sql .= " AND k.crs_id = %i";
				$sql .= " AND k.rank_year = %i";
				$sql .= " AND k.agecl_id = a.id";
				$sql .= " ORDER BY k.sort_order DESC,k.$col_name $sortDir";
				$rs = $db->query($sql,$crs_id,$year);
			} else {
				$sql  = "SELECT runner_id,CONCAT_WS(' ',fname,lname) as name,sex,age,$col_name as rank_score,1 AS in_rank";
				$sql .= " FROM runner$year2";
				$sql .= " WHERE $col_name > 0";
				$sql .= " AND club IN ('DVOA','SVO','POC')";
				$sql .= " ORDER BY $col_name $sortDir";
				$rs = $db->query($sql);
			}
			$show_caption = false;
			$count = 1;
			
			foreach ($rs as $row) {
				printf("<tr>");
				if ($row['in_rank'])
					printf("<td align=center>%d</td>\n",$count++);
				else
					printf("<td align=center>&nbsp;</td>\n");
				printf("<td><a href=rslt_sum.php?runner_id=%d&year=%d>%s</a>",$row['runner_id'],$year,stripslashes($row['name']));
				if ($row['in_rank'] == 0) {
					printf("<span style=\"color:#c00;font-weight:bold;\">*</span>\n");
					$show_caption = true;
				}
				printf("</td>\n");
				printf("<td><a href=rslt_cls.php?sex=%s&age=%d&year=%d>%s%d</a></td>\n",$row['sex'],$row['age'],$year,$row['sex'],$row['age']);
				printf("<td align=right>%.2f</td>\n",$row['rank_score']); //$row['$col_name']);
				printf("</tr>\n");		
			}
			printf("</table>\n");
			printf("<br>\n");
			if ($show_caption)
				printf("<p align=\"center\"><span style=\"color:#c00;font-weight:bold;\">*</span> A minimum of four (4) events per course is required to be included in the Rankings</p>\n");
		} # end if (isset($col_name)) 
		$db->Close();
	?>

	</div>
</div>
</body>
</html>