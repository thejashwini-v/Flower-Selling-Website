<?php
$host="localhost";
$username="root";
$password="";
$dbane="flowers";

//checking connection
$conn=new mysqli($host,$username,$password,$dbane);

if($conn->connect_error){
    die("connection failed:".$conn->connect_error);

}
?>
