<?php
include("conn.php");

// 判断表单是否提交
if (!empty($_POST['sub'])){
    $title = $_POST['title'];
    $con = $_POST['con'];
    // echo "aaa";
    // title是提交过来的值,null对应id,d单引号是php的 双引号是sql的
    $sql = "insert into news (`id`,`title`,`dates`,`contents`) values (null,'$title',now(),'$con')";
    // echo $sql;
    mysql_query($sql);

}


?>
<form action="add.php" method="post" >
    标题 <input type="text" name="title"><br>
    内容 <textarea name="con" id="" cols="50" rows="5"></textarea><br>
<input type="submit" name='sub' value='发表' >

</form>