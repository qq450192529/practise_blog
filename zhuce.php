<?php
header("Content-type: text/html; charset=utf-8");
include('./tieba/conn.php');
$submit = $_POST['submit'];
$user = $_POST['user'];
$password=$_POST['password'];

$query ='select user from password where `user`=\''.$user.'\'';
$result = mysql_query($query);
//$result返回时一个资源类型，所以需要使用下面的函数将数据一一取出。
$row = mysql_fetch_array($result);

if(!empty($submit))
{

if(empty($user)||empty($password))
{
echo '<h1>用户名或密码不可为空</h1>';
echo '<h1>3秒后跳回注册页面，请重新注册！！</h1>';
echo "<meta http-equiv='refresh' content='3; url=zhuce.html'>";
}elseif($user==$row['user']){
	echo '用户名重复';
	echo '<h1>3秒后跳回注册页面，请重新注册！！</h1>';
	echo "<meta http-equiv='refresh' content='3; url=zhuce.html'>";
}else{
$mysql="insert into password(`user`,`password`,`time`) values('$user','$password',now())";
mysql_query($mysql);
echo '<h1>注册成功</h1>';
echo '<h1>3秒后跳转回主页，欢迎登陆</h1>';
echo "<meta http-equiv='refresh' content='3; url=index.html'>";
}
}
?>	