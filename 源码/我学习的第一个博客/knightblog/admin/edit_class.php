
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>修改文章分类</title>
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<base target="main" />
</head>
<body>
<?php
require_once 'session.php';
require_once '../include.php';
$act=$_GET['act'];
$id=$_GET['id'];
//$row=getCateById($id);
$sql="select classid,classname,classtitle,classdesc from dw_class where classid=".$id.";";
$row=fetchOne($sql);
//$query=mysql_query($sql);
//$row=mysql_fetch_array($query);
?>
<ol class="breadcrumb">
  <li><a href="#">后台主页</a></li>
  <li><a href="class.php">栏目管理</a></li>
  <li class="active">修改文章分类</li>
</ol>
<form action="do.php?act=editclass&id=<?php echo $row['classid'];?>" method="post">
<table width="90%"  class="table">
  <tbody>
    <tr>
      <td width="15%"><span class="form-group">
        <label>分类名称：</label>
      </span></td>
      <td width="85%"><span class="form-group">
        <input type="text" class="form-control" name="classname" value='<?php echo $row['classname'];?>'>
      </span></td>
    </tr>
    <tr>
      <td><span class="form-group">
        <label>分类标题：</label>
      </span></td>
      <td><span class="form-group">
        <input type="text" class="form-control" name="classtitle" value='<?php echo $row['classtitle'];?>'>
      </span></td>
    </tr>
    <tr>
      <td><span class="form-group">
        <label>分类简介：</label>
      </span></td>
      <td><textarea name="classdesc" id="textarea" class="form-control"><?php echo $row['classdesc'];?>
      </textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><button type="submit" class="btn btn-danger">修改文章分类</button></td>
    </tr>
  </tbody>
</table>
</form>
</body>
</html>
