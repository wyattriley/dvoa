<?php
session_start();

include_once("../../tools/dvoa_tools.inc.php");
include_once ("../../tools/db.dvoa.class.php");
$db = new MeekroDB("dbgen"); //read-write access

$title  = "DVOA Results Journal";

if (isset($_REQUEST['sked_id'])) {
	$sked_id = intval($_REQUEST['sked_id']);
} else {
	$sked_id = 0;
}	

if (isset($_REQUEST['list'])) {
	$list = $_REQUEST['list']; //all,err,ind,group,male,female
} else {
	$list = "";
}
if (isset($mmbr_bit)) {
	$_SESSION['page_access_code'] = $mmbr_bit;
}

$rslt_jnl_count = 0;
if ($sked_id != 0) {
	if(isset($_POST['submit'])) {
		$sked_id = intval($_POST['sked_id']);
		$sql = sprintf("CALL rslt_jnl_post(%d)",$sked_id);
		$db->query($sql);
		
		header("location:index.php");
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $title ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="Robots" content="NOINDEX" />
<link href="results.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">
	<div id="header">
		<h1>DVOA Admin</h1>
		<h2>DVOA Results Journal</h2>
	</div>

	<?php
	GetUserBar();
	?>

	<div id="content">
		<div class="topic_title"><h3><?php echo $title ?></h3></div>
		<div class="frm_wrap">
			<?php
			printf("<p align=\"center\"><a href=\"index.php\">Return</a>\n\n");
			

			$current_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
			$list_pattern = '/list=[a-z]*/';
			
			$all_link = preg_replace($list_pattern, "list=all", $current_link);
			$err_link = preg_replace($list_pattern, "list=err", $current_link);
			$ind_link = preg_replace($list_pattern, "list=ind", $current_link);
			$group_link = preg_replace($list_pattern, "list=group", $current_link);
			$male_link = preg_replace($list_pattern, "list=male", $current_link);
			$female_link = preg_replace($list_pattern, "list=female", $current_link);
			
			printf(" -- <a href=\"$all_link\">All</a>\n\n");
			printf(" - <a href=\"$err_link\">Errors</a>\n\n");
			printf(" - <a href=\"$ind_link\">Individuals</a>\n\n");
			printf(" - <a href=\"$group_link\">Groups</a>\n\n");
			printf(" - <a href=\"$male_link\">Males</a>\n\n");
			printf(" - <a href=\"$female_link\">Females</a>\n\n");
			
			printf("</p>\n\n");

			?>
			
			<div style="text-align:center;margin-left:10px;">
			<?php
				$sql = "SELECT s.ev_date,m.map,m.shortname FROM sked s,maplist m WHERE s.map_id=m.id AND s.id=%i";
				list($ev_date,$map,$shortname) = $db->queryFirstList($sql,$sked_id);
				
				printf("<p><strong>[%d] %s (%s)</strong></p>\n\n",$sked_id,$shortname,FormatDate($ev_date));
			?>
			</div>
		
			<div style="text-align:left;margin-left:10px;">
			<?php
				if ($sked_id != 0) {
					$cnt = 0;
					$sql  = "SELECT j.entry_no,j.fname,j.lname,j.age,j.sex,j.club_name,j.runner_id,j.mmbr_id,j.ind,j.agecl_label,j.cs_name,j.etime,s.label";
					$sql .= " FROM result_jnl j,result_status s";
					$sql .= " WHERE j.sked_id = %i";
					if ($list == "err")
						$sql .= " AND ((j.runner_id = 0 AND j.ind = 1) OR (j.runner_id != 0 AND (j.age = 0 OR j.age > 999)))";
					if ($list == "ind")
						$sql .= " AND j.ind = 1";
					if ($list == "group")
						$sql .= " AND j.ind = 0";
					if ($list == "male")
						$sql .= " AND j.sex = 'M'";
					if ($list == "female")
						$sql .= " AND j.sex = 'F'";
					$sql .= " AND j.status = s.id";
					$sql .= " ORDER BY j.lname,j.fname";
					$rs  = $db->query($sql,$sked_id);
					
					$rslt_jnl_count = $db->count();
					
					$sql2 = "SELECT COUNT(*) AS valid_course_finishers FROM result_jnl j,crs c";
					$sql2 .= " WHERE j.sked_id = %i AND UPPER(c.course) = UPPER(SUBSTR(j.cs_name,1,LENGTH(c.course)))";
					$rs2 = $db->query($sql2,$sked_id);
					
					$valid_course_finishers = $rs2[0]['valid_course_finishers'];
					
					printf("<p><strong>%d valid results found</strong></p>\n\n", $rslt_jnl_count);
					
					if ($valid_course_finishers != $rslt_jnl_count && $list == "") {
						printf("<p><strong>Warning - only %d found on valid courses</strong></p>\n\n", $valid_course_finishers);
					}
					printf("<p><a href=\"rslt_jnl_delete.php?sked_id=%d\">Delete This Journal</a> - Allows Re-upload</p>\n\n", $sked_id);
					
					if ($rslt_jnl_count > 0) {
						printf("<table cellpadding=\"3\" cellspacing=\"0\" align=\"center\">");
						printf("<tr>"); // style=\"background:#102a03;\">");
						printf("<td>#</td>");
						printf("<td><strong>Entry</strong></td>");
						printf("<td><strong>Runner</strong></td>");
						printf("<td><strong>Member</strong></td>");
						printf("<td><strong>Competitor</strong></td>");
						printf("<td><strong>Sex</strong></td>");
						printf("<td><strong>Age</strong></td>");
						printf("<td><strong>Club</strong></td>");
						printf("<td><strong>Class</strong></td>");
						printf("<td><strong>Course</strong></td>");
						printf("<td><strong>Time</strong></td>");
						printf("<td><strong>Status</strong></td>");
						printf("<td><strong>Validate</strong></td>");
						printf("<td><strong>Delete</strong></td>");
						printf("</tr>");
						
						$cnt = 1;
						foreach ($rs as $row) {
							$err = FALSE;
							if ((($row['runner_id'] == 0) && ($row['ind'] == 1)) ||
								(($row['runner_id'] != 0) && (($row['age'] == 0) || ($row['age'] > 999))))
								$err = TRUE;
								
							if ($err == FALSE)
								printf("<tr bgcolor=\"%s\">\n",$cnt % 2 ? "#f0f0f0" : "#ffffff");	
							else
								printf("<tr %s>\n", $err == TRUE ? " style=\"background:#933;\"" : ""); //" style=\"background:#102a03;\"");
							
							printf("<td style=\"text-align:right;\">%d</td>\n",$cnt++);
							printf("<td style=\"text-align:right;\">%d</td>\n",$row['entry_no']);
							if ($row['runner_id'] == 0)
								printf("<td style=\"text-align:right;\"></td>\n");
							else
								printf("<td style=\"text-align:right;\">%d</td>\n",$row['runner_id']);
							if ($row['mmbr_id'] == 0)
								printf("<td style=\"text-align:right;\"></td>\n");
							else
								printf("<td style=\"text-align:right;\">%d</td>\n",$row['mmbr_id']);
							printf("<td>%s %s</td>\n",stripslashes($row['fname']),stripslashes($row['lname']));
							printf("<td style=\"text-align:center;\">%s</td>\n",$row['sex']);
							if (($row['age'] == 0) || ($row['age'] > 999))
								printf("<td style=\"text-align:center;\"></td>\n");
							else
								printf("<td style=\"text-align:center;\">%2d</td>\n",$row['age']);
							printf("<td style=\"text-align:center;\">%s</td>\n",$row['club_name']);
							printf("<td style=\"text-align:left;\">%s</td>\n",$row['agecl_label']);
							printf("<td style=\"text-align:left;\">%s</td>\n",$row['cs_name']);
							printf("<td style=\"text-align:right;\">%s</td>\n",$row['etime']);
							printf("<td style=\"text-align:center;\">%s</td>\n",$row['label']);
							
							// Validate entry //
							if ($err == TRUE) {
								/* Member suggestions */
								printf("<td style=\"text-align:center;\">");
								$mmbrcnt = $runnercnt = 0;
								$sql = sprintf("SELECT COUNT(*) FROM mmbr WHERE (UPPER(lname)=UPPER('%s') AND UPPER(fname) LIKE UPPER('%s%%')) OR (UPPER(fname)=UPPER('%s') AND UPPER(lname) LIKE UPPER('%s%%'))",addslashes($row['lname']),substr($row['fname'],0,1),addslashes($row['fname']),substr($row['lname'],0,1));
								$mmbrcnt = $db->queryFirstField($sql);
								$sql = sprintf("SELECT COUNT(*) FROM result_runner WHERE (UPPER(lname)=UPPER('%s') AND UPPER(fname) LIKE UPPER('%s%%')) OR (UPPER(fname)=UPPER('%s') AND UPPER(lname) LIKE UPPER('%s%%'))",addslashes($row['lname']),substr($row['fname'],0,1),addslashes($row['fname']),substr($row['lname'],0,1));
								$runnercnt = $db->queryFirstField($sql);
								printf("<a href=\"rslt_jnl_edit.php?sked_id=%d&list=%s&entry_no=%d\">Edit (%d/%d)</a>",$sked_id,$list,$row['entry_no'],$mmbrcnt,$runnercnt);
								printf("</td>\n");
							} else {
								printf("<td style=\"text-align:center;\"><a href=\"rslt_jnl_edit.php?sked_id=%d&list=%s&entry_no=%d\">OK</a></td>\n",$sked_id,$list,$row['entry_no']);
							}

							printf("<td style=\"text-align:center;\">X</td>\n");
							printf("</tr>");
						} // while

						printf("</table>\n");
					}
				}
			?>
			</div>
		
			<div style="height:20px;"></div>
			<?php
			if ($rslt_jnl_count > 0) {
			?>
			<div align="center">
				<form method="post" action="" style="padding-bottom:16px;">
					<?php
					printf("<input type=\"hidden\" name=\"sked_id\" value=\"%d\" />\n",$sked_id);
					?>
					<input class="submit_button" type="submit" name="submit" value="Post Results" />
				</form>
			</div>
			<?php
			} else {
			?>
			<div style="text-align:center;margin-left:10px;">
			<?php
				printf("<p><strong>Results already posted or not yet loaded into journal</strong></p>\n\n");
			?>
			</div>
			<?php
			}
			?>
		</div>
	</div>
	<div id="footer">DVOA Results and Rankings Admin - <?php 
		if (isset($_SESSION['mmbr_access_code'])) {
			echo $_SESSION['mmbr_access_code'];
		} else {
			echo "no mmbr_access_code set";
		}
		?></div>
</div>
</body>
</html>

<?php
}

$db->Close();
session_destroy();
?>

