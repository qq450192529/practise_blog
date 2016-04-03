<?php
header("Content-type: text/html; charset=utf-8");
include('../conn.php');
$submit =$_POST['submit'];
$title = $_POST['title'];
$neirong=$_POST['neirong'];
if(!empty($submit))
{

if(empty($title)||empty($neirong))
{
echo '<h1>不能发送空信息！</h1>';
echo '<h1>3秒后跳转回主页，重新来一发！！</h1>';
echo "<meta http-equiv='refresh' content='3; url=index.php'>";
}	

else
{
$mysql="insert into tieba(`title`,`neirong`,`shijian`) values('$title','$neirong',now())";
mysql_query($mysql);
header("Location: index.php");
exit;
}
}
?>	