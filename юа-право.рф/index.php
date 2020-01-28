<?php
header("Content-Type: text/html; charset=cp1251");
require 'connect.php';
$sql_select = "SELECT * FROM sud_stat";
$result = mysql_query($sql_select);
$row = mysql_fetch_array($result);
$p1 = $row['gd'];
$p2 = $row['ad'];
$p3 = $row['ard'];
$p4 = $row['bd'];
$p5 = $row['pd'];
$row = mysql_fetch_array($result);
$c1 = $row['gd'];
$c2 = $row['ad'];
$c3 = $row['ard'];
$c4 = $row['bd'];
$c5 = $row['pd'];
require_once('inde.html');
mysql_close();
?>