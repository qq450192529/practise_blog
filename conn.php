<?php 
/*新浪云连接*/
/*
$con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);if(!$con){ die('could not connect:'.mysql_error()); }mysql_select_db(SAE_MYSQL_DB,$con);
*/
/*本地连接*/

$sql=mysql_connect('localhost','root','');//连接数据库
mysql_select_db('tieba',$sql);  //选择tieba数据库，设置为活动的
mysql_query("set names 'utf8'");///设置编码格式为utf8
error_reporting : E_ALL & ~E_NOTICE;//并无卵用

/*coding连接*/
/*

*/
?>