<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$db_name = 'bsmrstu_shop';
$connection = mysqli_connect($servername, $username, $password, $db_name);

if(!$connection){
    die();
}
?>