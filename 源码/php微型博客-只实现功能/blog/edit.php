<?php
include("conn.php");

 // 查看表单是否有值
if(!empty($_GET['id'])){   
    $id = $_GET['id'];
    $sql = "select * from news where `id`= '$id' ";
    $query=mysql_query($sql);
    $rs = mysql_fetch_array($query);
    // print_r($rs);


}

if (!empty($_POST['sub'])){
    $title = $_POST['title'];
    $con = $_POST['con'];
    $hid = $_POST['hid'];
    // 更新表单内容 加where 删除哪个表单的
    $sql = "update  news set title = '$title',contents = '$con' where id = '$hid' limit 1 ";
    // print_r($sql);
    // echo $sql;
    mysql_query($sql);
    echo "<script>alert('update success!');location.href='index.php'</script>";

}


?>


<form action="edit.php" method="post" >
<input type="hidden" name="hid" value = "<?php echo $rs['id']?>">
    标题 <input type="text" name="title" value="<?php echo $rs['title']?>"><br>
    内容 <textarea name="con" cols="50" rows="5"><?php echo $rs['contents']?></textarea><br>
<input type="submit" name='sub' value='发表' >

</form>