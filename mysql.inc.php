<?php
$dbServer="localhost";
$dbUser="root";
$dbPass="";
$dbName="ouch";

$conn=@mysqli_connect($dbServer, $dbUser, $dbPass, $dbName);

if(mysqli_connect_errno($conn))
 die("无法连接数据库服务器");

mysqli_set_charset($conn, "utf8");
?>