<?php
$server="localhost";
$username="root";
$password="";
$database="streamvibe";
$GLOBALS["conn"]= mysqli_connect($server,$username,$password,$database);
if(!$GLOBALS["conn"]){
    die ("Error".mysqli_connecterror());
}
?>