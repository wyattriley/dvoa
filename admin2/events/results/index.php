<?php
require ("../../tools/dvoa_tools.inc.php");
require ("../../tools/db.dvoa.class.php");
$dbgen = new MeekroDB();

// require("rank_tools.inc.php");
$title = "Results Page";
$bctitle = "Results";

$curr_year = date("Y");
$today = date("Y-m-d");

if (isset($_REQUEST['year'])) {
	$year = intval($_REQUEST['year']);
	if ($year < 100) {
		$year2 = substr($curr_year,2,2);
		if ($year > $year2) {
			$year = 1900 + $year;
		} else {
			$year = 2000 + $year;
		}
	}
	if ($year > $curr_year) {
		$year = $curr_year;
	}
} else {
	$year = $curr_year;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>DVOA - Results</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../../css/dvoa2008common.css" rel="stylesheet" type="text/css" />
<link href="../../css/dvoa2008sub.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="../images/newflag.ico" />

<link rel="alternate" type="application/rss+xml"  href="http://www.dvoa.org/rss/dvoa_feed.rss" title="DVOA News Feed">

<style type="text/css">
<!--
#left_col {
	width:340px;
	float:left;
}
#right_col {
	width:340px;
	float:right;
}
-->
</style>
<?php
	GetHTC();
?>
	
</head>
<body>
<div id="wrapper">
<?php
GetHeader("results",$_SERVER['PHP_SELF']);
?>
<div id="main">
	<div id="sidebar">
		<?php
		GetSideBar();
		?>
	</div> <!-- end sidebar div -->

	<div id="content">
		<h3><?php echo $title;?></h3>

		<?php
		/*
		if (isset($_COOKIE['dvoadbuserid']))
			$dvoadbuserid = $_COOKIE['dvoadbuserid'];
		else
			$dvoadbuserid = 0;

		mysql_select_db("dvoa_db_rank");

		if ($dvoadbuserid > 0) {
			GetIndividual($db,$dvoadbuserid,$year);	
		} else {
			printf("<p align=\"center\"><a href=\"reglist.php?year=%d\">Get your latest personalized results</a></p>\n",$year);
		}
		*/
		// printf("<p align=\"center\">Get your latest personalized results - N/A </p>\n");
		?>

		<br style="clear:both;">

		<div id="left_col">
			<?php
			printf("<h4>%d Results</h4>\n",$year);
			printf("<ul>\n");
			
			$sql = "SELECT sked_id,name,shortname,ev_date,director,codirector,designer,codesigner";
			$sql.= " FROM event_list";
			$sql.= " WHERE YEAR(ev_date)=%i";
			if ($year == $curr_year)
				$sql.= " AND ev_date<=CURDATE()";
			$sql.= " ORDER BY ev_date DESC";
			
			$data = $dbgen->query($sql,$year);
			$counter = $dbgen->count();
			if ($counter > 0) {
				foreach ($data as $row) {
					$sql = "SELECT COUNT(*) FROM result_ledger WHERE sked_id=%i";
					$rslt_count = $dbgen->queryFirstField($sql,$row['sked_id']);
					if ($rslt_count > 0) {
						$sql = "SELECT COUNT(*) FROM course_list WHERE sked_id=%i";
						$rslt_count = $dbgen->queryFirstField($sql,$row['sked_id']);
						if ($rslt_count > 0) {
							printf("<li>");
							printf("<strong><a href=\"ev_show2.php?sked_id=%d\">%s</a></strong> %s",$row['sked_id'],StripSlashes($row['shortname']),FormatDate($row['ev_date']));
							$sql = "SELECT COUNT(*) FROM course_list WHERE sked_id=%i AND rank_incl=1";
							$rslt_count = $dbgen->queryFirstField($sql,$row['sked_id']);
							if ($rslt_count >= 3) 
								printf("<span style=\"color:#c00;font-weight:bold;\">* </span>");
							printf("</li>");
						}
					} else {
						$sql  = "SELECT lnk_txt,url,lnk_type FROM result_lnk WHERE sked_id=%i";
						$rslt = $dbgen->query($sql,$row['sked_id']);
						$counter = $dbgen->count();
						if ($counter > 0) {
							printf("<li>");
							printf("%s %s",StripSlashes($row['shortname']),FormatDate($row['ev_date']));
							foreach ($rslt as $subrow) {
								if ($subrow['lnk_type'] == "2") {
									printf("<br />&nbsp;&nbsp;<a href=\"%s\">%s</a>\n",$subrow['url'],$subrow['lnk_txt']);
									$splitalyzerurl = str_replace("act=map","act=splitalyzer",$subrow['url']);
									printf("&nbsp;&nbsp;<a href=\"$splitalyzerurl\">Splitalyzer</a>\n");
								} else {
									printf("<br />&nbsp;&nbsp;<a href=\"%s\">%s</a>",$subrow['url'],StripSlashes($subrow['lnk_txt']));
								}
							}
							printf("</li>");
						}
					}
				}
			}
			$dbgen->Close();
			?>
			</ul>

			<p><span style="color:#c00;font-weight:bold;">*</span> Indicates event is counted in rankings.</p>

		</div> <!-- end of left col -->

		<div id="right_col">
			<h4>Chart your course</h4>
			<ul>
				<li><a href="https://www.dvoa.org/gadget/rg2/">RouteGadget</a></li>
				<li><a href="http://www.dvoa.org/gadget/index.php">Ye Old RouteGadget</a></li>
			</ul>

			<h4>Previous Year's Results</h4>
			<ul>
				<?php
					$yyyy = $curr_year;
					do {
						if ($year != $yyyy) {
							if ($yyyy >= 2013) {
								printf("<li><a href=\"index.php?year=%d\">%d Results</a></li>",$yyyy,$yyyy);
							} else {
								// Temporary off line //
								printf("<li><a href=\"html/index.php?year=%d\">%d Results</a></li>",$yyyy,$yyyy);
								//printf("<li>%d Results</li>",$yyyy);
							}
						}
						$yyyy = $yyyy - 1;
					} while ($yyyy > 2000);
				?>
				<li><a href="html/rslt99/index.php">1999 Results</a></li>
				<li><a href="html/rslt98/index.php">1998 Results</a></li>
				<li><a href="html/rslt97/index.php">1997 Results</a></li>
				<li><a href="html/rslt96/index.php">1996 Results</a></li>

			</ul>

		</div> <!-- end of right col -->

	</div> <!-- end of content -->

	<?php
	GetSubPageFooter();
	GetCredits();
	?>

</div> <!-- end of main -->
</div> <!-- end of wrapper -->
 
</body>
</html>

