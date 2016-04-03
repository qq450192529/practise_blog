<?php 
header("Content-type: text/html; charset=utf-8");
include('./conn.php');
$user =$_POST['user'];
$password = $_POST['password'];
 
$query ='select password from password where `user`=\''.$user.'\'';
$result = mysql_query($query);
//$result返回时一个资源类型，所以需要使用下面的函数将数据一一取出。
$row = mysql_fetch_array($result);

if($password==$row['password']) {	
	header("Location: tieba/index.php");
	exit;
} else {  
echo '<h1>用户名或密码错误</h1>';
echo '<h1>3秒后跳回登陆页面，请重新登陆！！</h1>';
echo "<meta http-equiv='refresh' content='3; url=index.html'>";
}

?>

