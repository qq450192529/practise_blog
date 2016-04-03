<?php
header("Content-type: text/html; charset=utf-8");
include('conn.php');
$submit =$_POST['submit'];
$blue = $_POST['blue'];
$runam =$_POST['runam'];
$runpm = $_POST['runpm'];
$smoke=$_POST['smoke'];

$mysql = "INSERT INTO `tongji` (`date`, `blue`, `runam`, `runpm`, `smoke`) VALUES (now(), '$blue', '$runam', '$runpm', '$smoke')";
mysql_query($mysql);
header("Location: index.php");
exit;

?>	

