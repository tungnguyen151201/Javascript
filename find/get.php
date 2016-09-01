<?php
require_once('mysql.php');
$mabai = addslashes(mysql_real_escape_string($_GET['mabai']));
$sql = mysql_query("select * from link where mabai='$mabai'");
if (mysql_num_rows($sql)>0)
{
	$search = mysql_fetch_array($sql);
	$link = $search['link'];
	$samplecode = $search['samplecode'];
	echo $link;
}
else 
{
	echo '0';
}
?>