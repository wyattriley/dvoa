<?php
include_once ("../../tools/db.dvoa.class.php");
include_once ("ev_show_tools.inc.php");
include_once ("../../tools/dvoa_tools.inc.php");

$dbgen = new MeekroDB();

$sked_id = intval($_REQUEST['sked_id']);

$sql = "SELECT name,shortname,ev_date,director,codirector,designer,codesigner";
$sql.= " FROM event_list WHERE sked_id=%i";

list($name,$short_name,$event_date,$director,$codirector,$design,$codesign) = $dbgen->queryFirstList($sql,$sked_id);
?>
<html>
<head>
<title>
	<?php
	printf("%s - %s\n",$name,FormatEvShowDate($event_date));
	?>
</title>
</head>
<body bgcolor=white>
<pre>
	<?php
	printf("\n%s\n%s\n",$name,FormatEvShowDate($event_date));
	if (strlen($director) > 0)
		printf("Event Director: %s\n",StripSlashes($director));
	else
		printf("Event Director:\n");
	if (strlen($codirector) > 4)
		printf("Co-Director: %s\n",StripSlashes($codirector));
	if (strlen($design) > 0)
		printf("Course Design: %s\n",StripSlashes($design));
	else
		printf("Course Design:\n");
	if (strlen($codesign) > 4)
		printf("Co-Design: %s\n",StripSlashes($codesign));
	printf("\n");

	$sql = "SELECT * FROM course_list WHERE sked_id=%i";
	$rs  = $dbgen->query($sql,$sked_id);

	$rslt_count = $dbgen->count();
	if ($rslt_count > 0) {
		foreach ($rs as $row) {
			printf("\n");
			printf("%s / %0.2fkm / %0.1fm / %d ctrls\n",$row["label"],$row["dist"],$row["climb"],$row["ctrl"]);

			// Get course details from VIEW 'course_details'
			$subquery  = "SELECT runner_id,name,sex,agecl_id,agecl_label,club_name,etime,time_secs,time_behind,status,status_label,pass,nc,ind,rank_score";
			$subquery .= " FROM course_details WHERE rslt_crs_id=%i";
			$subresult = $dbgen->query($subquery,$row["rslt_crs_id"]);
			
			$count = 1;
			$place = 1;
			foreach ($subresult as $subrow) {
				$count++;
				if (($subrow["pass"] == 1) && ($subrow["nc"] == 0))
					printf("%3s ",$place++);
				else
					printf(" -- ");
				printf("%-40s",$subrow["name"]);

				if ($subrow["sex"] == "M" || $subrow["sex"] == "F") {
					printf("%-6s",$subrow["agecl_label"]);
				} else if ($subrow["sex"] == "G") {
					printf("%-6s",$subrow["agecl_label"]);
				} else {
					printf(" ---- ");
				}

				printf("%-12s",CheckMembership($dbgen,$subrow["runner_id"],$subrow["club_name"]));
				
				if ($subrow["pass"] == 1) {
					printf("%8s",$subrow["etime"]);
					printf("%8s",GetPace($subrow["time_secs"],$row["dist"]));
					printf("%8s",FormatSecsInMins($subrow["time_behind"]));
					# printf("%8s",TimeBehind($subrow["time_secs"],$best_time));
				} else {
					printf("%8s",$subrow["status_label"]);
					printf("     ---");
					printf("     ---");
				}

				if ($subrow["nc"] == 1) {
					printf(" NC");
					printf("&nbsp");
				} else {
					printf("&nbsp;");
					printf("&nbsp;");
				}
				printf("\n");
			}
		}
	}
	$dbgen->Close();
	?>
</pre>


<!-- start Google Analytics -->
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-4481501-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>
<!-- end Google Analytics -->


</body>
</html>

<?php
function CheckMembership($dbg,$runner_id,$club) {
	if (($club != "DVOA") || ($runner_id == 0))
		return $club;
	
	$sql = "SELECT r.id,r.name,YEAR(m.exp)-YEAR(CURDATE()) as expired FROM result_runner r, mmbr m WHERE r.mmbr_id=m.id AND r.id=%i";
	list($rid,$rname,$expired) = $dbg->queryFirstList($sql,$runner_id);
	if ($rname == NULL) {
		return "<!-- NAM -->";
	}
	//if they are a member are they paid up?
	return $expired >= 0 ? "DVOA" : "<!-- NP -->";
}
?>

