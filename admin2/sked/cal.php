<?php
session_start();
include_once("../../tools/dvoa_tools.inc.php");

//bring us back here after logging in
$_SESSION['redir_url'] = $_SERVER['PHP_SELF'];
//get the access bits
include_once("../../users/access_bits.inc.php");
//set this page's access code
$_SESSION['page_access_code'] = $sked_bit;
// now check the login
include_once("../../users/validate.php");
$_SESSION['return_page'] = "cal.php";

include_once("../../tools/db.dvoa.class.php");
$db = new MeekroDB("dbgen");

if (isset($_REQUEST['action'])) {
	$action = $_REQUEST['action'];
} else {
	$action = "";
}

include ("sked_tools.inc.php");

$cur_year = date("Y");

if (!isset($_SESSION['yearno']))
	$_SESSION['yearno'] = $cur_year;
	
if (isset($_REQUEST['yearno']))
	$_SESSION['yearno'] = $_REQUEST['yearno'];

$yearminus = $_SESSION['yearno'] - 1;
if ($yearminus < ($cur_year - 3))
	$yearminus = ($cur_year - 3);

$yearplus = $_SESSION['yearno'] + 1;
if ($yearplus > ($cur_year + 3))
	$yearplus = ($cur_year + 3);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>DVOA Schedule Admin</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="sked.css" rel="stylesheet" type="text/css">
<meta name="robots" content="noindex" />

<script language="JavaScript" type="text/JavaScript">
<!--

function popDetail(id) 
{
	var URL;
	URL = "pop_detail.php?id=" + id;
	win = open(URL,"theWindow", "titlebar=0,width=300,height=460,scrollbars=yes");
	if (win) {
		win.focus();
	}
}

function showDetails(indx,msg)
{
	indx--;
	document.sked.elements[indx].value = msg;
}

function clearDetails(indx,year)
{
	indx--;
	switch (indx) {
		case 0 : msg = "January " + year; break;
		case 1 : msg = "February " + year; break;
		case 2 : msg = "March " + year; break;
		case 3 : msg = "April " + year; break;
		case 4 : msg = "May " + year; break;
		case 5 : msg = "June " + year; break;
		case 6 : msg = "July " + year; break;
		case 7 : msg = "August " + year; break;
		case 8 : msg = "September " + year; break;
		case 9 : msg = "October " + year; break;
		case 10: msg = "November " + year; break;
		case 11: msg = "December " + year; break;
	}
	document.sked.elements[indx].value = msg;
}
// -->
</script>
</head>

<body>
<div id="wrapper">
	<div id="header">
		<h1>DVOA Admin</h1>
		<h2>Schedule Administration</h2>
	</div>

	<div id="content">
		<div id="userbar">
			Welcome <strong><?php echo $_SESSION['uname'];?></strong>! [<a href="../../users/profile.php">My Profile</a>]&nbsp;&nbsp;&nbsp;[<a href="../../users/logout.php">Logout</a>]
		</div>

		<div class="topic_title"><h3>Schedule Administration Calendar View</h3></div>

		<fieldset>
		<ul>
			<?php
			if ($_SESSION['yearno'] == 2000)
				printf("<li>&nbsp;</li>\n");
			else
				printf("<li><a class=\"text\" href=\"cal.php?yearno=$yearminus\">Go to $yearminus</a></li>\n");

				printf("<li>&nbsp;&middot;&nbsp;\n");
				printf("<li><a class=\"text\" href=\"index.php\">Go to table view</a></li>\n");
				printf("<li>&nbsp;&middot;&nbsp;\n");

			// if ($_SESSION['yearno'] == 2012)
			if ($_SESSION['yearno'] == ($cur_year + 3))
				printf("<li>&nbsp;</li>\n");
			else
				printf("<li><a class=\"text\" href=\"cal.php?yearno=$yearplus\">Go to $yearplus</a></li>\n");
			printf("</ul>");
			?>

			<table cellpadding="10" cellspacing="0" border="0" align="center">
				<?php
				
				$firstDay[0]=6;	//sat
				$firstDay[1]=1;	//mon
				$firstDay[2]=2;	//tue
				$firstDay[3]=3;	//wed
				$firstDay[4]=4;	//thu
				$firstDay[5]=6;	//sat
				$firstDay[6]=0;	//sun
				$firstDay[7]=1;	//mon
				$firstDay[8]=2;	//tue
				$firstDay[9]=4;	//thu
				$firstDay[10]=5; //fri
				$firstDay[11]=6; //sat
				$firstDay[12]=0; //sun
				$firstDay[13]=2; //tue
				$firstDay[14]=3; //wed
				$firstDay[15]=4; //thu
				$firstDay[16]=5; //fri
				$firstDay[17]=0; //sun
				$firstDay[18]=1; //mon
				$firstDay[19]=2; //tue

				$firstDayOfMonth = $firstDay[$_SESSION['yearno'] - 2000];	// replace this with the current year

				for ($monthno=1;$monthno<13;$monthno++) {
					if (($monthno%3) == 1) {		// new row?
						printf("<tr><td align=\"center\" valign=\"top\">\n");
					} else
						printf("<td align=\"center\" valign=\"top\">\n");

					printf("<table cellpadding=\"2\" cellspacing=\"0\" border=\"1\">\n");
					printf("<tr bgcolor=\"#3d3632\"><td colspan=\"7\" align=\"center\"><input class=\"cal\" size=\"32\" type=\"text\" name=\"detail[]\" value=\"%s %d\"></td></tr>\n",getMonthName($monthno),$_SESSION['yearno']);

					$dayno    = 1;
					$maxcells = 35;	// 5 weeks in the month
					$mxdys    = maxDays($monthno,$_SESSION['yearno']);
					if (($firstDayOfMonth + $mxdys) > 35)
						$maxcells = 42;	// or do we need 6 weeks?
					for ($cellno = 0; $cellno < $maxcells; $cellno++) {
						if (($cellno%7) == 0)
							printf("<tr bgcolor=\"#543f38\">\n"); //e4e5ec
						if (($cellno < $firstDayOfMonth) || ($dayno > $mxdys)) {
							printf("<td width=\"22\" height=\"22\" valign=\"center\" align=\"center\">*</td>\n");
						} else {
							$dayofwk = getDayName($cellno%7);
							$ev_date = getMySQLDate($_SESSION['yearno'],$monthno,$dayno);

							switch(getEventCount($db,$ev_date)) {
							case 0:
								printf("<td width=\"22\" height=\"22\" valign=\"middle\" align=\"center\"><a href=mod.php?id=0&dayofwk=$dayofwk&ev_date=$ev_date&yearno=%d>$dayno</a></td>\n",$_SESSION['yearno']);
								break;
							case 1:
								$sked_id = getEventID($db,$ev_date);
								printf("<td width=\"22\" height=\"22\" valign=\"center\" align=\"center\">\n");
								printf("<a href=mod.php?id=$sked_id&dayofwk=$dayofwk&ev_date=$ev_date&yearno=%d><img src=\"flag.jpg\" border=\"0\" height=\"16\" width=\"16\" alt=\"%s\" title=\"%s\" onmouseover=\"showDetails($monthno,'%s');\" onmouseout=\"clearDetails($monthno,%d);\"></a>\n",$_SESSION['yearno'],getDetails($db,$sked_id),getAllDetails($db,$sked_id),getDetails($db,$sked_id),$_SESSION['yearno'],$_SESSION['yearno']);
								printf("</td>\n");
								break;
							case 2: case 3: case 4:
								printf("<td width=\"22\" height=\"22\" valign=\"middle\" align=\"center\">");
								$sql = "SELECT * FROM sked WHERE ev_date=%?";
								$rs  = $db->query($sql,$ev_date);
								foreach ($rs as $row) {
									printf("<a href=mod.php?id=%d&dayofwk=%s&ev_date=%s&yearno=%d><img src=\"flag8x8.jpg\" border=\"0\" height=\"8\" width=\"8\" alt=\"%s\" title=\"%s\" onmouseover=\"showDetails($monthno,'%s');\" onmouseout=\"clearDetails($monthno,%d);\"></a>\n",$row['id'],$row['dayofwk'],$row['ev_date'],$_SESSION['yearno'],getDetails($db,$row['id']),getAllDetails($db,$row['id']),getDetails($db,$row['id']),$_SESSION['yearno']);
								}
								printf("</td>");
								break;
							case 5:
							case 6: break;
							}

							$dayno++;
							
							if (++$firstDayOfMonth > 6)
								$firstDayOfMonth = 0;
						}
						if (($cellno%7) == 6)
							printf("</tr>\n");

					}	
					printf("</table>\n");		

					printf("</td>\n");

					if (($monthno%3) == 3) {		// end of row?
						printf("</tr>\n");
					}
				}		
				?>
				</td></tr>
			</table>

		</fieldset>
	</div>	<!-- end container div -->

	<div id="footer">DVOA Event Director - 
		<?php echo $_SESSION['mmbr_access_code'];?>
	</div>

</div>	<!-- end wrapper -->
</body>
</html>

<?php
$db->Close();
?>