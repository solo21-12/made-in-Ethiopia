<?php
include("./data/db.connection.php");
$queryString = $_SERVER['QUERY_STRING'];
parse_str($queryString, $params);
parse_str($_SERVER['QUERY_STRING'], $params);
$sql_all = "SELECT * FROM product where category='" . $params["category"] . "'";
$fetured = $con->query($sql_all);
