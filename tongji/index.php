<html>
<head>
    <!— 新 Bootstrap 核心 CSS 文件 —>
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!— 可选的Bootstrap主题文件（一般不用引入） —>
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"> 
    <title>我的博客</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>  
	
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="http://beibeijie.sinaapp.com/tieba/index.php">正能量</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="http://beibeijie.sinaapp.com/tieba/index.php">博客 <span class="sr-only">(current)</span></a></li>
        <li><a href="http://beibeijie.sinaapp.com/tongji/index.php">统计</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> 教程<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">PHP</a></li>
            <li><a href="#">MYSQL</a></li>
            <li><a href="#">HTML</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">bootcss</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">coding.net</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="输入要查询的内容">
        </div>
        <button type="submit" class="btn btn-default">搜索</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">留言</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">更多 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">关于我</a></li>
            <li><a href="#">公众平台</a></li>
            <li><a href="#">攻城狮</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">联系我</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
    
    
<?php
include('conn.php');
$sql1 = "select sum(blue) as blue from tongji";
$req1 = mysql_query($sql1);
$row1 = mysql_fetch_array($req1);

$sql2 = "select sum(runam) as runam from tongji";
$req2 = mysql_query($sql2);
$row2 = mysql_fetch_array($req2);

$sql3 = "select sum(runpm) as runpm from tongji";
$req3 = mysql_query($sql3);
$row3 = mysql_fetch_array($req3);

$sql4 = "select sum(smoke) as smoke from tongji";
$req4 = mysql_query($sql4);
$row4 = mysql_fetch_array($req4);
//用来做统计数据时变量的相加，放在前面
?> 


<?php
$perNumber=10; //每页显示的记录数
$page=$_GET['page']; //获得当前的页面值
$count=mysql_query("select count(*) from tongji"); //获得记录总数
$rs=mysql_fetch_array($count); 
$totalNumber=$rs[0];
$totalPage=ceil($totalNumber/$perNumber); //计算出总页数
if (!isset($page)) {
 $page=1;
} //如果没有值,则赋值1
$startCount=($page-1)*$perNumber; //分页开始,根据此方法计算出开始的记录
$result=mysql_query("select * from tongji ORDER BY DATE DESC limit $startCount,$perNumber"); 
//根据前面的计算出开始的记录和记录数
//select * from tongji ORDER BY DATE DESC limit $startCount,$perNumber 实现指定条数倒序排列
//select * from tongji limit $startCount,$perNumber  正序排列
//注意，条数，必须是从小到大！
    
    
?>


<table class="table table-hover" style="border=0;margin:0px;">
    <tr>
		<td style="size=10px;color:red;font-size : 30px">date</td>
		<td style="size=10px;color:red;font-size : 30px;text-align:center">blue</td>
		<td style="size=10px;color:red;font-size : 30px;text-align:center">run-am</td>
		<td style="size=10px;color:red;font-size : 30px;text-align:center">run-pm</td>
		<td style="size=10px;color:red;font-size : 30px;text-align:center">smoke</td>
    	<td style="size=10px;color:red;font-size : 30px;text-align:center">校对</td>
  	</tr>	  
 
    <tr style="color:blue;font-size : 20px">
		<td>统计结果</td>
		<td style="text-align:center"><?=$row1['blue']?></td>
		<td style="text-align:center"><?=$row2['runam']?></td>
		<td style="text-align:center"><?=$row3['runpm']?></td>
		<td style="text-align:center"><?=$row4['smoke']?></td>
    	<td style="text-align:center">继续努力</td>
	</tr>	


<?php
while ($row=mysql_fetch_array($result)) {
?>
 <tr>
 	<td><?=$row[0]?></td> 
  	<td style="text-align:center"><?=$row[1]?></td>
  	<td style="text-align:center"><?=$row[2]?></td>
 	<td style="text-align:center"><?=$row[3]?></td>
 	<td style="text-align:center"><?=$row[4]?></td>
 	<td style="text-align:center"><a href="change.php?date=<?=$row['date']?>"  type="submit" class="btn btn-default">修改</a></td>
  </tr>
<?php
}
echo "</table>";
///至此显示完数据库中的内容
?>


<?php
if ($page != -1) { //页数不等于1
?>

<nav style="margin:0 auto;width:100%;">
	<ul class="pagination">
<?php
if ($page<>1) { //如果page大于总页数,显示上一页链接
?>
	<li>
	<a href="index.php?page=<?php echo $page - 1;?>" aria-label="Previous">
    	<span aria-hidden="true">&laquo;</span>
    </a>
	</li>
<?php
}
}
for ($i=1;$i<=$totalPage;$i++) {  //循环显示出页面
?>

	<li><a href="index.php?page=<?php echo $i;?>"><?php echo $i ;?></a></li>
<?php
}
if ($page<$totalPage) { //如果page小于总页数,显示下一页链接
?>
	<li>
		<a href="index.php?page=<?php echo $page + 1;?>" aria-label="Next">
			<span aria-hidden="true">&raquo;</span>
		</a>
	</li>

<?php
} 
?>

</ul>
</nav>




<form class="form-inline" action="fabiao.php" method="post" style="align=center">
&nbsp;&nbsp;&nbsp;

  <div class="form-group">
    <label for="exampleInputName2">blue</label>
    <input type="text" class="form-control" id="exampleInputName2"  name="blue">
  </div>
  <div class="form-group">
    <label for="exampleInputName2">run-am</label>
    <input type="text" class="form-control" id="exampleInputName2"  name="runam">
  </div>
  <div class="form-group">
    <label for="exampleInputName2">run-pm</label>
    <input type="text" class="form-control" id="exampleInputName2"  name="runpm">
  </div>
  <div class="form-group">
    <label for="exampleInputName2">smoke</label>
      <input type="text" class="form-control" id="exampleInputName2"  name="smoke">

  </div>
  <input type="submit" class="btn btn-default" name="submit" value="打卡提交">
  <input type="reset"class="btn btn-default" value="重新填写" >
</form>



</body>
<!— jQuery文件。务必在bootstrap.min.js 之前引入 —>
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<!— 最新的 Bootstrap 核心 JavaScript 文件 —>
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</html>
