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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php printf("%s - %s",$name,FormatEvShowDate($event_date));?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="ev_show.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="../../images/newflag.ico" />
<?php
GetHTC();
?>
</head>

<body>

<div id="wrap">
	<div id="header">
		<?php
		if (strlen($name) > 0) 
			printf("<h1>DVOA Results<br>%s<br>%s</h1>\n",$name,FormatEvShowDate($event_date));
		else
			printf("<h1>DVOA Results<br>&nbsp;<br>&nbsp;</h1>\n");
		?>
		<div id="hdr_lnks">
			<a href="../../index.php">DVOA Home</a>&nbsp;&middot;&nbsp;
			<a href="index.php">Results Home</a>
		</div>
	</div>

	<div id="infopane">
		<div id="leftcol">
			<?php
			if (strlen($director) > 0)
				printf("<div class=\"lab\">Event Director:</div><div class=\"data\">%s</div>\n",StripSlashes($director));
			else
				printf("<div class=\"lab\">Event Director:</div><div class=\"data\">&nbsp;</div>\n");
			if (strlen($codirector) > 4)
				printf("<div class=\"lab\">Co-Director:</div><div class=\"data\">%s</div>\n",StripSlashes($codirector));
			if (strlen($design) > 0)
				printf("<div class=\"lab\">Course Design:</div><div class=\"data\">%s</div>\n",StripSlashes($design));
			else
				printf("<div class=\"lab\">Course Design:</div><div class=\"data\">&nbsp;</div>\n");
			if (strlen($codesign) > 4)
				printf("<div class=\"lab\">Co-Design:</div><div class=\"data\">%s</div>\n",StripSlashes($codesign));
			//if (strlen($notes) > 4)
			//	printf("<div class=\"lab\">Notes:</div><div class=\"data\">%s</div>\n",StripSlashes($notes));
			?>
		</div> <!-- end of leftcol -->	
		<div id="rightcol">
			<?php
			// RouteGadget //
			$sql = "SELECT lnk_txt,url FROM result_lnk WHERE sked_id=%i AND lnk_type=2";
			$rs  = $dbgen->query($sql,$sked_id);
			if ($dbgen->count() > 0) {
				foreach ($rs as $row) {
					printf("<div class=\"lnks\"><a href=\"%s\">%s</a>\n",$row["url"],$row["lnk_txt"]);
					$splitalyzerurl = str_replace("act=map","act=splitalyzer",$row["url"]);
					printf("&nbsp;<a href=\"$splitalyzerurl\">Splitalyzer</a>\n");
					printf("</div>\n");
				}
			}
			// Splits //
			$sql = "SELECT lnk_txt,url FROM result_lnk WHERE sked_id=%i AND lnk_type=1";
			$rs  = $dbgen->query($sql,$sked_id);
			if ($dbgen->count() > 0) {
				foreach ($rs as $row) {
					printf("<div class=\"lnks\"><a href=\"%s\">%s</a></div>\n",$row["url"],StripSlashes($row["lnk_txt"]));
				}
			}
			// AttackPoint //
			$sql = "SELECT lnk_txt,url FROM result_lnk WHERE sked_id=%i AND lnk_type=3";
			$rs  = $dbgen->query($sql,$sked_id);
			if ($dbgen->count() > 0) {
				foreach ($rs as $row) {
					printf("<div class=\"lnks\"><a href=\"%s\">%s</a></div>\n",$row["url"],StripSlashes($row["lnk_txt"]));
				}
			}
			// Other results //
			$sql = "SELECT lnk_txt,url FROM result_lnk WHERE sked_id=%i AND lnk_type=4";
			$rs  = $dbgen->query($sql,$sked_id);
			if ($dbgen->count() > 0) {
				foreach ($rs as $row) {
					printf("<div class=\"lnks\"><a href=\"%s\">%s</a></div>\n",$row["url"],StripSlashes($row["lnk_txt"]));
				}
			}
			?>
		</div> <!-- end of rightcol -->	
		<br style="clear:both;" />
	</div> <!-- end of infopane -->

	<div id="content">
		<?php
		// sked_id,ev_date,ev_year,rslt_crs_id,crs_id,label,dist,climb,ctrl,sum_label,bgcolor,color,win_time_secs
		$sql = "SELECT * FROM course_list WHERE sked_id=%i";
		$rs  = $dbgen->query($sql,$sked_id);

		$bgcolor = "#ffffff";
		$color   = "#000000";
		
		$rslt_count = $dbgen->count();
		if ($rslt_count > 0) {
			foreach ($rs as $row) {
				//does this course have a special name?
				//if ($row->specialname != "") {
				//	$label     = stripslashes($row->specialname);
				//	$sum_label = stripslashes($row->specialname);
				//}
				// Get course stats from VIEW 'course_totals'
				
				$bgcolor = $row['bgcolor'];
				$label = $row['label'];
				$sum_label = $row['sum_label'];
				$color = $row['color'];
				$best_time = $row['win_time_secs'];
				$year = $row['ev_year'];
				
				printf("<h3>%s</h3>",$label);
				printf("<table border=\"0\" cellspacing=\"0\" cellpadding=\"4\" style=\"border:0;\"><tr><td valign=\"top\" style=\"border:0;\">\n");
				printf("<table border=\"0\" cellspacing=\"0\" cellpadding=\"3\">\n");

				// print the course data	
				printf("<tr bgcolor=\"$bgcolor\">\n");
				printf("<th align=\"center\"><span style=\"color:$color;\">Pl</span></th>\n");
				printf("<th align=\"left\"><span style=\"color:$color;\">Name</span></th>\n");
				printf("<th align=\"left\"><span style=\"color:$color;\">Class</span></th>\n");
				printf("<th align=\"left\"><span style=\"color:$color;\">Club</span></th>\n");
				printf("<th align=\"right\"><span style=\"color:$color;\">Time</span></th>\n");
				printf("<th align=\"right\"><span style=\"color:$color;\">Pace</span></th>\n");
				printf("<th align=\"right\"><span style=\"color:$color;\">Behind</span></th>\n");
				printf("<th align=\"right\"><span style=\"color:$color;\">*Score</span></th>\n");
				printf("<th align=\"right\"><span style=\"color:$color;\">**Diff</span></th>\n");
				printf("</tr>\n");
				
				// Get course details from VIEW 'course_details'
				$subquery  = "SELECT runner_id,name,sex,agecl_id,agecl_label,club_name,etime,time_secs,time_behind,status,status_label,pass,nc,ind,rank_score";
				$subquery .= " FROM course_details WHERE rslt_crs_id=%i";
				$subresult = $dbgen->query($subquery,$row['rslt_crs_id']);
				
				$count = 1;
				$place = 1;
				foreach ($subresult as $subrow) {
					printf("<tr bgcolor=\"%s\">\n",$count %2 ? "#f0f0f0" : "#ffffff");
					$count++;
					if (($subrow['pass'] == 1) && ($subrow['nc'] == 0))
						printf("<td align=\"right\">%d</td>\n",$place++);
					else
						printf("<td align=\"right\">&nbsp;</td>\n");
						
					if ($subrow['sex'] == "M" || $subrow['sex'] == "F")
						printf("<td align=\"left\"><a href=\"rslt_sum.php?runner_id=%d&year=%d\">%s</a></td>\n",$subrow['runner_id'],$year,$subrow['name']);
					else
						printf("<td align=\"left\">%s</td>\n",$subrow['name']);

					if ($subrow['sex'] == "M" || $subrow['sex'] == "F") {
						$sql = "SELECT min_age as age FROM agecls a WHERE a.id = %i";
						$age = $dbgen->queryFirstField($sql,$subrow['agecl_id']);
						printf("<td align=\"left\"><a href=\"rslt_cls.php?sex=%s&age=%d&year=%d\">%s</a></td>\n",$subrow['sex'],$age,$year,$subrow['agecl_label']);
						//printf("<td align=\"left\">%s</td>\n",$subrow['agecl_label']);
					} else if ($subrow['sex'] == "G") {
						printf("<td align=\"left\">%s</td>\n",$subrow['agecl_label']);
					} else {
						printf("<td align=\"left\">&nbsp;</td>\n");
					}
					
					if ($subrow['sex'] == "M" || $subrow['sex'] == "F")
						printf("<td align=\"left\">%s</td>\n",CheckMembership($dbgen,$subrow['runner_id'],$subrow['club_name']));
					else
						printf("<td align=\"left\">%s</td>\n",$subrow['club_name']);
					
					if ($subrow['pass'] == 1) {
						printf("<td align=\"right\">%s</td>\n",$subrow['etime']);
						printf("<td align=\"right\">%s</td>\n",GetPace($subrow['time_secs'],$row['dist']));
						printf("<td align=\"right\">%s</td>\n",TimeBehind($subrow['time_secs'],$best_time));
					} else {
						printf("<td align=\"right\">%s</td>\n",$subrow['status_label']);
						printf("<td align=\"right\">---</td>\n");
						printf("<td align=\"right\">---</td>\n");
					}

					if ($subrow['nc'] == 1) {
						printf("<td align=\"center\">NC</td>\n");
						printf("<td align=\"center\">&nbsp;</td>\n");
					} else {
						if ($subrow['rank_score'] > 0) {
							printf("<td align=\"right\">%0.2f</td>\n",$subrow['rank_score']);
#							$rank_score_end = GetRunnerRankingScore($dbgen,$subrow['runner_id'],$rank_count);
							$rank_score_end = GetRunnerRankingScore($dbgen,$subrow['runner_id']);
							if ($rank_score_end != 0) {
								$diff = $subrow['rank_score'] - $rank_score_end;
								if ($diff > 0)	
									printf("<td align=\"right\">+%0.1f</td>\n",$diff);
								else
									printf("<td align=\"right\">%0.1f</td>\n",$diff);
							} else {
								printf("<td align=\"center\">&nbsp;</td>\n");
							}
						} else {
							printf("<td align=\"center\">&nbsp;</td>\n");
							printf("<td align=\"center\">&nbsp;</td>\n");
						}
					}
					printf("</tr>\n");
				}

				printf("</table>\n");
				printf("</td><td style=\"border:0;\">&nbsp;&nbsp;&nbsp;&nbsp;</td><td valign=\"top\" style=\"border:0;\">\n");
				
				$totquery  = "SELECT maps_cnt,runners_cnt,runners_time,runners_dist,runners_climb,runners_ctrls,finish_cnt,finish_dist,finish_climb,finish_ctrls,finish_time";
				$totquery .= " FROM course_totals WHERE rslt_crs_id=%i";
				list($maps_cnt,$runners_cnt,$runners_time,$runners_dist,$runners_climb,$runners_ctrls,$finish_cnt,$finish_dist,$finish_climb,$finish_ctrls,$finish_time) = $dbgen->queryFirstList($totquery,$row['rslt_crs_id']);

				printf("<table border=\"1\" cellpadding=\"3\" cellspacing=\"0\" style=\"border:0;\">\n");
				printf("<tr bgcolor=\"$bgcolor\">\n");

				printf("<td colspan=\"2\" align=\"center\" class=\"smtitle\"><strong><span style=\"color:$color;\">%s Summary</span></strong></td>\n",$sum_label);

				printf("<tr><td align=\"right\">Length</td>\n");
				printf("<td align=\"right\">%0.2fkm</td>\n",$row['dist']);
				printf("</tr>\n");

				printf("<tr><td align=\"right\">Climb</td>\n");
				printf("<td align=\"right\">%0.1fm</td>\n",$row['climb']);
				printf("</tr>\n");

				printf("<tr><td align=\"right\">Num Controls</td>\n");
				printf("<td align=\"right\">%d</td>\n",$row['ctrl']);
				printf("</tr>\n");

				printf("<tr><td align=\"right\">Average Time</td>\n");
				if ($finish_cnt > 0)
					printf("<td align=\"right\">%s</td>\n",FormatSecsInMins($finish_time / $finish_cnt));
				else
					printf("<td>0:00</td>\n");
				printf("</tr>\n");
				
				printf("<tr><td align=\"right\">Average Pace</td>\n");
				printf("<td align=\"right\">%s</td>\n",GetPace($finish_time,$finish_dist));
				printf("</tr>\n");

				printf("<tr><td align=\"right\">Num Maps</td>\n");
				printf("<td align=\"right\">%d</td>\n",$maps_cnt);
				printf("</tr>\n");
				
				printf("<tr><td align=\"right\">Num Orienteers</td>\n");
				printf("<td align=\"right\">%d</td>\n",$runners_cnt);
				printf("</tr>\n");

				printf("<tr><td align=\"right\">Total Time</td>\n");
				printf("<td align=\"right\">%s</td>\n",FormatSecs($runners_time));
				printf("</tr>\n");

				printf("<tr><td align=\"right\">Total Distance</td>\n");
				printf("<td align=\"right\">%.2fkm</td>\n",$runners_dist);
				printf("</tr>\n");

				printf("<tr><td align=\"right\">Total Climb</td>\n");
				printf("<td align=\"right\">%.1fm<br></td>\n",$runners_climb);
				printf("</tr>\n");

				printf("<tr><td align=\"right\">Total Controls</td>\n");
				printf("<td align=\"right\">%d</td>\n",$runners_ctrls);
				printf("</tr>\n");

				//printf("<tr><td align=\"right\">CGV</td>\n");
				//printf("<td align=\"right\">%.2f</td>\n",GetCGV($db,$year,$event_id,$crs_id));
				//printf("</tr>\n");

				printf("<tr><td align=\"center\" colspan=\"2\"><a href=\"rslt_crs.php?crs_id=%d&year=%d\">%s Rankings</a></td></td>\n",$row['crs_id'],$year,$sum_label);

				printf("</table>\n");
				printf("</td></tr></table>\n");
				printf("<p>&nbsp;</p>\n");
			}
			?>
		
			<table cellpadding="0" cellspacing="0" border="0" style="border:0;">
			<tr>
				<td width="200" valign="top" style="border:0;">
				<?php
				$totquery  = "SELECT SUM(maps_cnt),SUM(runners_cnt),SUM(runners_time),SUM(runners_dist),SUM(runners_climb),SUM(runners_ctrls),SUM(finish_cnt),SUM(finish_dist),SUM(finish_climb),SUM(finish_ctrls),SUM(finish_time)";
				$totquery .= " FROM course_totals WHERE sked_id=%i";
				list($maps_cnt,$runners_cnt,$runners_time,$runners_dist,$runners_climb,$runners_ctrls,$finish_cnt,$finish_dist,$finish_climb,$finish_ctrls,$finish_time) = $dbgen->queryFirstList($totquery,$sked_id);

				printf("<table border=1 cellspacing=0 cellpadding=3>\n");
				printf("<tr bgcolor=\"#f0f0f0\"><td align=\"center\" colspan=2><b>Event Totals</b></td></tr>\n");

				printf("<tr><td align=\"right\">Maps:</td><td align=\"right\">%d</td></tr>\n",$maps_cnt);
				printf("<tr><td align=\"right\">Orienteers:</td><td align=\"right\">%d</td></tr>\n",$runners_cnt);
				printf("<tr><td align=\"right\">Time:</td><td align=\"right\">%s</td></tr>\n",FormatSecs($runners_time));
				printf("<tr><td align=\"right\">Distance:</td><td align=\"right\">%.2f km</td></tr>\n",$runners_dist);
				printf("<tr><td align=\"right\">Climb:</td><td align=\"right\">%.1f m</td></tr>\n",$runners_climb);
				printf("<tr><td align=\"right\">Ctrls:</td><td align=\"right\">%d</td></tr>\n",$runners_ctrls);
				printf("</table>\n");
				?>
				</td>
				<td width="400" valign="top" style="border:0;">
					<table border="1" cellspacing="0" cellpadding="3" align="left">
					<tr bgcolor="#f0f0f0">
						<td align="center" colspan="2"><strong>Legend</strong></td>
					</tr>

					<tr>
						<td>DNF</td>
						<td>Did Not Finish</td>
					</tr>

					<tr>
						<td>MP</td>
						<td>MisPunch</td>
					</tr>

					<tr>
						<td>OT</td>
						<td>OverTime</td>
					</tr>

					<tr>
						<td>NC</td>
						<td>Not Competing (also used for a 2nd course at same event)</td>
					</tr>

					<tr>
						<td>CGV</td>
						<td>Course Gnarliness Value - a measurement indicating the difficulty of a course</td>
					</tr>

					<tr>
						<td>Pl</td>
						<td>Place, 1st, 2nd, 3rd, etc.</td>
					</tr>

					<tr>
						<td>Behind</td>
						<td>How far behind the winner, in MM:SS</td>
					</tr>

					</table>
				</td>
			</tr>
			</table>

		<?php
		} // $rslt_count > 0
		
		$dbgen->Close();

		$stop_time = microtime_float();
		?>
		<p>
		<ul>
		<?php
		printf("<li><a href=\"ev_show2_txt.php?sked_id=%s\">View these results in plain text</a></li>\n",$sked_id);
		printf("<li><a href=\"index.php\">Goto Results Home Page</a></li>\n");
		printf("<li><a href=\"../../index.php\">Goto DVOA Home Page</a></li>\n");
		?>
		</ul>

		<?php
		if (strlen($name) > 0) {
		?>
			<p style="padding:2px 20px 20px 10px;"><span style="color:#c00;font-weight:bold;">*</span>
			While the "Score" value is an indication of how well you performed in this event, please understand it is partly determined by how well you performed in all other events. Not only that, it is also partly determined by how well all others performed. The "Score" value will change as the season progresses. Even if you miss an event, it is quite likely this score will change. It is not useful to compare Scores on one course to the Scores on a different course. For a full explanation of the rankings formula please see <a href="http://www.dvoa.org/rank/calcrank05.php">the rankings formula</a> page.</p>

			<p style="padding:2px 20px 20px 10px;"><span style="color:#c00;font-weight:bold;">**</span>
			The "Diff" column displays the difference between this event and your ranking score. A positive number indicates your result was better than your year-to-date ranking score while a negative number indicates a result that was not as good as your ranking score.</p>
		<?php
		}
		?>
	</div> <!-- end of content -->
</div> <!-- end of wrap -->

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
function microtime_float() {
  list($usec, $sec) = explode(" ", microtime());
  return ((float)$usec + (float)$sec);
}

/*
 * CheckMembership
 *  check if this is a valid membership
 *  if not a member return false
 *  if a member, then check for valid payment
 *    if paid up to date return true
 *    if not paid return false
 */
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

#function GetRunnerRankingScore($dbg,$runner_id,$rank_count) {
function GetRunnerRankingScore($dbg,$runner_id) {
	if ($runner_id == 0)
		return 0;
	
#	$sql = "SELECT r.rank_score_end,r.rank_count FROM result_runner r WHERE r.id=%i";
	$sql = "SELECT r.rank_score_end FROM result_runner r WHERE r.id=%i";
#	list($rank_score_end,$rank_count) = $dbg->queryFirstList($sql,$runner_id);
	list($rank_score_end) = $dbg->queryFirstList($sql,$runner_id);
	if ($rank_score_end == NULL)
		return 0;
	return $rank_score_end;
}
?>