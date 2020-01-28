<?php
header("Content-Type: text/html; charset=cp1251");
require_once('blank1.html');
require 'connect.php';
mysql_query('SET NAMES cp1251');
$sql_select = "SELECT * FROM rlink";
$result = mysql_query($sql_select);
$row = mysql_fetch_array($result);
printf("<br><br>");
do
{
$p2 = $row['name'];
$p1 = $row['link'];
printf("<a href=\"" . $p1 . " target=\"_blank\">" . $p2 . "</a><br><br>");
//require_once('blank0.html');
}
while ($row = mysql_fetch_array($result));
mysql_close();
require_once('blank2.html');
?>
