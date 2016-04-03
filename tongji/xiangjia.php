<?php
header("Content-type: text/html; charset=utf-8");
include('../conn.php');
$sql="SELECT sum(blue) FROM `tongji`";
mysql_query($sql);///执行sql语句，将查询到的数据放到$sqll中
$row=mysql_fetch_assoc($sqll);//$row说 给我一行数据，  array说 给你一行数据
echo $row['blue'];


$sql = "select sum(blue) as blue from tongji";
$req = mysql_query($sql);
$row = mysql_fetch_array($req);
echo $row['blue'];

?>	