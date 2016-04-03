<html>
<head>
    <!— 新 Bootstrap 核心 CSS 文件 —>
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!— 可选的Bootstrap主题文件（一般不用引入） —>
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"> 
    <title>我的贴吧</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body  >  
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
      <a class="navbar-brand" href="../tieba/index.php">正能量</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
          <li class="active"><a href="../tieba/index.php">贴吧 <span class="sr-only">(current)</span></a></li>
          <li><a href="../tongji/index.php" >统计</a></li>
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
include('../conn.php');
$submit =$_POST['submit'];
$title = $_POST['title'];
$neirong=$_POST['neirong'];
$id=$_GET['id'];
$id+0;//转换数据类型
$sql='select * from tieba where id='.$id;
$sqll=mysql_fetch_array(mysql_query($sql));
?>	


    
    <form action="change1.php" method="post" >
    <input type="hidden"name="id" size="51" value="<?=$sqll['id']?>">
<div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1" >标题：</span>
  <input type="text" class="form-control"  aria-describedby="sizing-addon1"  name="title"   value="<?=$sqll['title']?>">
</div>

    <p>
<div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1" name="neirong" >内容：</span>
    <textarea type="text" class="form-control"  aria-describedby="sizing-addon1"  name="neirong" style="height:200px;" ><?=$sqll['neirong']?></textarea>

</div>
    
    <p>
    
    <input type="submit"class="btn btn-default"  name="submit" value="提交" />

    <input type="reset"class="btn btn-default" value="重写" />

</form>
</body>
</html>