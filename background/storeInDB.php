<?php
    header("Content-type:text/html; charset=utf-8");
    require('conn.php');
    $name1=$_POST["name1"];
    $name2=$_POST["name2"];
    $sql= "select * from information where name1='$name1' and name2='$name2'";
    $result = mysql_query( $sql) or die("error");
    if (mysql_num_rows($result)>0){
        $row = mysql_fetch_assoc($result);
        $score = $row['score'];
    }
    else{
        $arr=range(1,100);
        $insert = "insert into information(name1,name2,score) values ('$name1','$name2',$score)";
        mysql_query($insert) or die("error");
    }
?>