<?php 
$host = "localhost";
$user = "root";
$password = "";
$database = "login";


$connect = mysqli_connect($host,$user,$password,$database);

if($connect){
    // echo 'connect';
}
else{
    echo 'fail';
}