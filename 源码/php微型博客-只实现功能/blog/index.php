<a href='add.php'>添加内容</a><hr><hr>
<form action="" method="get">
<input type="text" name="keys">
<input type="submit" name="subs" value="搜索">

</form>

<?php
include("conn.php");

if (!empty($_GET['keys'])){
    // $sql = "select * from news where $w order by id desc limit 1";
    $keys=$_GET['keys'];
    $w = "title like '%{$keys}%'";
    // echo $w;

}else{
    $w =1;

}

$sql = "select * from news where $w order by id desc limit 10";
// echo $sql;
// $sql = "select * from news where {$w} order by id desc limit 10";
$query = mysql_query($sql);

// 双重数组
$rs = mysql_fetch_array($query);
// print_r($rs2);

while ($rs = mysql_fetch_array($query)){

?>

<h2>标题: <a href = "view.php?id=<?php echo $rs['id'] ?>">
<?php echo $rs['title'] ?></a> |

<a href = "edit.php?id=<?php echo $rs['id'] ?>"> 编辑 </a>|
<a href = "del.php?del=<?php echo $rs['id'] ?>"> 删除</a> |</h2>
<li><?php echo $rs['dates'] ?></li>

<!-- iconv_substr 截取字符串函数 -->
<p><?php echo iconv_substr($rs['contents'],0,10,"gbk")?></p>   


<?php
// 大括号放到后面
}
?>