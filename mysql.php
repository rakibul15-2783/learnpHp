<?php
$host="localhost";
$user="root";
$pass="";
$db="mysql1";
$con=mysqli_connect($host,$user,$pass,$db);
if($con){
    echo "";
}
else{
    echo "DB is not connected";
}
?>