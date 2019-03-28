<?php
include("conn.php");

 // 查看表单是否有值
if(!empty($_GET['id'])){   
    $id = $_GET['id'];
    $sql = "select * from news where `id`= '$id' ";
    $query=mysql_query($sql);
    $rs = mysql_fetch_array($query);

    // 点击量增加
    $sqlup = "update news set hits = hits+ 1  where `id`= '$id' ";
    mysql_query($sqlup);
    // print_r($sqlup);


}


?>

<h1><?php echo $rs['title']?></h1>
<h2><?php echo $rs['dates']?></h2>
<h3>点击量 <?php echo $rs['hits']?></h3>
<hr>
<p>

</p>