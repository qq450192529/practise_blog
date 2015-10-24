<?php
header("Content-type: text/html; charset=utf-8");
include('conn.php');
$id=$_GET['id'];
$id+0;//转换数据类型
$sql='delete from tieba where id='.$id;
if(mysql_query($sql))
{
    //echo '删除成功！<a href="index.php">返回</a>';
header("Location: index.php");
exit;
}
?>