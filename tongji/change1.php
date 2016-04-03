<?php
header("Content-type: text/html; charset=utf-8");
include('../conn.php');
$submit =$_POST['submit'];
$blue = $_POST['blue'];
$runam =$_POST['run-am'];
$runpm = $_POST['run-pm'];
$smoke=$_POST['smoke'];
$date = $_POST['date'];

$mysql='update tongji set blue='.$blue.',runam='.$runam.',runpm='.$runpm.',smoke='.$smoke.' where date='.'\''.$date.'\'';
//where前记得有一个空格，不然会不执行！！！！
mysql_query($mysql);
header("Location: index.php");
exit;

?>	
