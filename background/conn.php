<?php
	header("Content-type:text/html; charset=utf-8");
        $conn=mysql_connect("127.0.0.1","root","apple");
        mysql_query("set names 'UTF_8'");
        mysql_select_db("HelpTheSingleDog",$conn);
?> 
