<?php
include("conn.php");

if (!empty($_GET['del'])) {
    $d = $_GET['del'];
    $sql = "delete from `news` where `id` = '$d'";
    mysql_query($sql);
    echo "删除成功";

}



?>