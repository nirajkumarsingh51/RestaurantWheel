<?php

$host="sql109.infinityfree.com";
$user="if0_37484826";
$pass="dY6nsyy3ap";
$db="if0_37484826_login";
$conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    echo "Failed to connect DB".$conn->connect_error;
}
?>