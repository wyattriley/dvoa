<?php
//include ("../../tools/db_tools.inc.php");
include ("../../tools/db.dvoa.class.php");
include ("ev_show_tools.inc.php");

$db = new MeekroDB("dbrank");

$event_id = $_REQUEST['event_id'];
$year     = $_REQUEST['year'];

$year = substr($event_id,7,2);

$sql = "SELECT name, event_date, director, design FROM event$year WHERE event_id=%s";

$rs = $db->queryFirstRow($sql,$event_id);
$row = $rs;
?>

<html>
<head>
<title>
<?php
printf("%s - %s",$row['name'],FormatEvShowDate($row['event_date']));
?>
</title>
</head>
<body bgcolor=white>
<pre>
<?php
printf("%s\n%s\n",$row['name'],FormatEvShowDate($row['event_date']));
printf("Event Director: %s\n",$row['director']);
printf("Course Design: %s\n",$row['design']);
printf("\n");

$sql = "SELECT course_id, color, dist, elev, ctrls FROM course$year WHERE event_id=%s ORDER BY color";
$rs = $db->query($sql,$event_id);

foreach ($rs as $row) {
	$subquery = "SELECT result$year.runner_id, time, secs, this_score, name, number, sex, age, club FROM result$year, runner$year WHERE course_id=%s and result$year.runner_id = runner$year.runner_id AND ((time <> 'DNF') AND (time <> 'NC') AND (time <> 'OT') AND (time <> 'MP') AND (time <> 'DSQ')) ORDER BY secs";
	$subresult = $db->query($subquery,$row['course_id']);
	
	switch ($row['color']) {
		case 10: $label="WHITE";$crs_id=10;break;
		case 11: $label="WHITE-X";$crs_id=11;break;
		case 12: $label="WHITE-Y";$crs_id=12;break;

		case 20: $label="YELLOW";$crs_id=20;break;
		case 21: $label="YELLOW-X";$crs_id=21;break;
		case 22: $label="YELLOW-Y";$crs_id=22;break;

		case 30: $label="ORANGE";$crs_id=30;break;
		case 31: $label="ORANGE-X";$crs_id=31;break;
		case 32: $label="ORANGE-Y";$crs_id=32;break;

		case 40: $label="BROWN";$crs_id=40;break;
		case 41: $label="BROWN-X";$crs_id=41;break;
		case 42: $label="BROWN-Y";$crs_id=42;break;

		case 50: $label="GREEN";$crs_id=50;break;
		case 51: $label="GREEN-X";$crs_id=51;break;
		case 52: $label="GREEN-Y";$crs_id=52;break;

		case 60: $label="RED";$crs_id=60;break;
		case 61: $label="RED-X";$crs_id=61;break;
		case 62: $label="RED-Y";$crs_id=62;break;

		case 70: $label="BLUE";$crs_id=70;break;
		case 71: $label="BLUE-X";$crs_id=71;break;
		case 72: $label="BLUE-Y";$crs_id=72;break;
	}
	printf("\n");
	printf("%s / %0.2fkm / %0.1fm / %d ctrls\n",$label,$row['dist'],$row['elev'],$row['ctrls']);

	$count=1;
	foreach($subresult as $subrow) {
		if ($count==1)
			$best_time=$subrow['secs'];
		printf("%3s ",$count++);
		
		printf("%-25s",$subrow['name']);

		if ($subrow['number'] == 1)
			$tmpCls = sprintf("%s%d",$subrow['sex'],$subrow['age']);
		else
			$tmpCls = sprintf("G%d",$subrow['number']);

		printf("%-6s",$tmpCls);

		printf("%-8s",$subrow['club']);

		printf("%8s",$subrow['time']);

		printf("%8s",GetPace($subrow['secs'],$row['dist']));
		printf("%8s",TimeBehind($subrow['secs'],$best_time));
		printf("&nbsp;&nbsp;&nbsp;&nbsp;");
		printf("%0.2f",$subrow['this_score']);
		printf("\n");
	}

	$subquery = "SELECT runner$year.runner_id, name, time, secs, this_score, number, sex, age, club FROM result$year, runner$year WHERE course_id=%s and result$year.runner_id = runner$year.runner_id AND ((time = 'DNF') OR (time='NC') OR (time='OT') OR (time='MP') OR (time='DSQ'))";
	$subresult = $db->query($subquery,$row['course_id']);
	foreach($subresult as $subrow) {
		printf("%3s ",$count++);
		
		printf("%-25s",$subrow['name']);
		if ($subrow['number'] == 1)
			$tmpCls = sprintf("%s%d",$subrow['sex'],$subrow['age']);
		else
			$tmpCls = sprintf("G%d",$subrow['number']);


		printf("%-6s",$tmpCls);

		printf("%-8s",$subrow['club']);

		printf("%8s",$subrow['time']);
		printf("     ---");
		printf("     ---");
		printf("    ");
		printf("%0.2f",$subrow['this_score']);
		printf("\n");
	}
	printf("\n");
}
printf("</pre>\n");

$db->Close();
?>

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