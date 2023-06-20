<?php

$host = "localhost";
$user = "solo2112@localhost";
$password = "password";
$db = "madeInEthiopia";
$con = new mysqli($host, $user, $password, $db);

if ($con->connect_error) {
    die("connection failed: " . $con->connect_error);
}
