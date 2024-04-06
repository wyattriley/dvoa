<?php
include ("../../tools/db.dvoa.class.php");
include ("../../tools/dvoa_tools.inc.php");
include ("rank_tools.inc.php");

$year = intval($_REQUEST['year']);
$sex  = $_REQUEST['sex'];	
$age  = intval($_REQUEST['age']);

$sortDir = ($year >= 2000 && $year <= 2004) ? "ASC" : "DESC";
$year2 = ($year >= 2000) ? substr($year,2,2) : $year;

if ($_SERVER['HTTP_HOST'] != "localhost")
	$root = "http://www.dvoa.org";
else
	$root = "http://localhost/dvoa";
	
if ($year >= 2013) {
	$db = new MeekroDB();
	$sql = "SELECT a.short_label FROM agecls a WHERE a.sex = %s AND %i BETWEEN a.min_age AND a.max_age AND a.dflt = 'Y'";
	$class = $db->queryFirstField($sql,$sex,$age);
} else {
	$db = new MeekroDB("dbrank");
	$class = sprintf("%s%d",$sex,$age);
}
	
$title=sprintf("%d Class Rank for %s",$year,$class);
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
	<h1>Results & Rankings Summary</h1>
	<?php
	printf("<h3>$title</h3>\n");
	?>
	</div>

	<div id="content">
		<?php
		if (!array_key_exists('HTTP_REFERER', $_SERVER)) {
			$_SERVER['HTTP_REFERER'] = " rank";  # fake an entry if this page is being indexed to avoid errors
		}
		if (strpos($_SERVER['HTTP_REFERER'],"rank") == true)
			printf("<p align=\"center\"><a href=\"$root/rank/index.php\">Back to Rankings Page</a></p>\n");
		if (strpos($_SERVER['HTTP_REFERER'],"results") == true)
			printf("<p align=\"center\"><a href=\"$root/events/results/index.php\">Back to Results Page</a></p>\n");

		printf("<table border=\"1\" cellspacing=\"0\" cellpadding=\"2\" align=\"center\">\n");
		printf("<tr bgcolor=\"#ded7c6\">");
		printf("<td align=center><b>Rank</b></td>");
		printf("<td><b>Name</b></td>");
		printf("<td align=center><b>Score</b></td>");
		printf("</tr>\n");

		if ($year >= 2013) {
			$col_name = "rank_score";
			$sql  = "SELECT r.id as runner_id,r.name,k.$col_name,k.sort_order AS in_rank";
			$sql .= " FROM result_runner r,runner_rank k,agecls a";
			$sql .= " WHERE r.id = k.runner_id";
			$sql .= " AND r.club_id != 0";
			$sql .= " AND r.sex = %s";
			$sql .= " AND k.crs_id = 0";
			$sql .= " AND k.rank_year = %i";
			$sql .= " AND k.agecl_id = a.id";
			$sql .= " AND %i BETWEEN a.min_age AND a.max_age";
			$sql .= " ORDER BY k.sort_order DESC,k.$col_name $sortDir";
			$rs = $db->query($sql,$sex,$year,$age);
		} else {
			$col_name = "score";
			$sql  = "SELECT runner_id,CONCAT_WS(' ',fname,lname) as name,$col_name,1 AS in_rank";
			$sql .= " FROM runner$year2";
			$sql .= " WHERE $col_name > 0";
			$sql .= " AND sex = '$sex'";
			$sql .= " AND age = $age";
			$sql .= " AND club IN ('DVOA','SVO','POC')";
			$sql .= " ORDER BY $col_name $sortDir";
			$rs = $db->query($sql);
		}
		$show_caption = false;
		$count = 1;
		
		foreach ($rs as $row) {
			printf("<tr>\n");
			if ($row['in_rank'] == 1)
				printf("<td align=center>%d</td>\n",$count++);
			else
				printf("<td align=center>&nbsp;</td>\n");
			printf("<td><a href=rslt_sum.php?runner_id=%d&year=%d>%s</a>",$row['runner_id'],$year,stripslashes($row['name']));
			if ($row['in_rank'] == 0) {
				printf("<span style=\"color:#c00;font-weight:bold;\">*</span>\n");
				$show_caption = true;
			}
			printf("</td>\n");
			printf("<td align=right>%.2f</td>\n",$row[$col_name]);
			printf("</tr>\n");		
		}
		printf("</table>\n");
		printf("<br>\n");

		if ($show_caption)
			printf("<p align=\"center\"><span style=\"color:#c00;font-weight:bold;\">*</span> A minimum of four (4) events overall is required to be included in the Rankings</p>\n");

		$db->Close();
		?>
	</div>
</div>

</body>
</html>