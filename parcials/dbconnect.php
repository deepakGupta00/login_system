<?php

$server= "localhost";
$username="root";
$password="";
$database="company";


$conn=mysqli_connect('localhost', 'root','', 'company');

if(!$conn){

    die("error" .mysqli_connect_error());
}

?>