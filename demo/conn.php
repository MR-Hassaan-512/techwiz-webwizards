<?php
$server="localhost";
$username="root";
$password="";
$database="streamvibe";
$conn= mysqli_connect($server,$username,$password,$database);
if(!$conn){
    die ("Error".mysqli_connecterror());
}
?>