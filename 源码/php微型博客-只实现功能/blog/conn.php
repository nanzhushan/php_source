<?php
// @ 屏蔽错误
@mysql_connect("192.168.30.143:3306","knight","knight") or die("mysql connect fail!");
mysql_select_db("boke1") or die("db connect fail!");
mysql_query("set names 'utf8'");


?>