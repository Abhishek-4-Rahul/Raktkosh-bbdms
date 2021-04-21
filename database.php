<?php
    $url='localhost';
    $username='root';
    $password='';
    $db="bbdms";
    $conn=mysqli_connect($url,$username,$password,$db);
    if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }
?>