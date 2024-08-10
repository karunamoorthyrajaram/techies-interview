<?php
$con = new mysqli('localhost', 'root', '', 'techies-app', 8111);
if($con->connect_error){
    die("Failed to connect DB:".$con->connect_error);
}
?>