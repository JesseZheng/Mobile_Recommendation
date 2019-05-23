<?php
// error_reporting(E_ALL ^ E_DEPRECATED);
$conn=mysqli_connect("172.96.243.159","root","zmw7887","dss");
// 检查连接 
if (!$conn) 
{ 
    die("connection error: " . mysqli_connect_error()); 
}
mysqli_query($conn, "set names 'utf8'");
?>