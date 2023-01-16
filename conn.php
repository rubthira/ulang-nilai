<?php
$host="localhost";
$user="root";
$password="";
$database="datapelajar";
$con= mysqli_connect($host, $user, $password, $database);
if(mysqli_connect_error()){
    echo "DATABASE FAIL CONNETED";
    exit();
}
?>