<?php

include("./data/db.connection.php");

$queryString = $_SERVER['QUERY_STRING'];
parse_str($queryString, $params);

$sql_all = "SELECT * FROM product where category='" . $params['category'] . "' LIMIT 4";
$sql = "SELECT * FROM newProduct LIMIT 3";

$fetured = $con->query($sql_all);
$pro = $con->query($sql);