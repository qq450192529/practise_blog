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
      <a class="navbar-brand" href="index.php">正能量</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">博客 <span class="sr-only">(current)</span></a></li>
        <li><a href="#">coding.net</a></li>
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
</nav>  

<?php
include('conn.php');
$submit =$_POST['submit'];
$blue = $_POST['blue'];
$runam =$_POST['run-am'];
$runpm = $_POST['run-pm'];
$smoke=$_POST['smoke'];
$date=$_GET['date'];
$date+0;//转换数据类型
$sql='select * from tongji where date=\''.$date.'\'';
$sqll=mysql_fetch_array(mysql_query($sql));
?>	





<form class="form-inline" action="change1.php" method="post">
  <div class="form-group">
    <button class="btn btn-default" type="submit"><?=$sqll['date']?></button>
    <input type="hidden"name="date" size="51" value="<?=$sqll['date']?>">
    <label for="exampleInputName2">blue</label>
    <input type="text" class="form-control" id="exampleInputName2" value="<?=$sqll['blue']?>" name="blue">
  </div>
  <div class="form-group">
    <label for="exampleInputName2">run-am</label>
    <input type="text" class="form-control" id="exampleInputName2" value="<?=$sqll['runam']?>" name="run-am">
  </div>
  <div class="form-group">
    <label for="exampleInputName2">run-pm</label>
    <input type="text" class="form-control" id="exampleInputName2" value="<?=$sqll['runpm']?>" name="run-pm">
  </div>
  <div class="form-group">
    <label for="exampleInputName2">smoke</label>
    <input type="text" class="form-control" id="exampleInputName2" value="<?=$sqll['smoke']?>" name="smoke">
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
