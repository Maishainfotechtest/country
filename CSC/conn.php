<?php 
$server = "localhost";
$username = "root";
$password = "";
$db= "youturn_genetics";

$conn = mysqli_connect($server,$username,$password,$db);
if ($conn) {
    ?> <script>alert("connnection succesfull..");</script><?php
   
}
else{
    echo "connection failed";
}
?>