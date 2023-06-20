<?php
include("./data/db.connection.php");
$queryString = $_SERVER['QUERY_STRING'];
parse_str($queryString, $params);

$sql = "SELECT * FROM product where id = '" . $params["id"] . "'";
$sql_all = "SELECT * FROM product where category='" . $params["category"] . "' LIMIT 3";
$fetured = $con->query($sql);
$all = $con->query($sql_all);

session_start();
if (!isset($_SESSION['state_variables'])) {
    $_SESSION['state_variables'] = array();
}

if (isset($_POST['add_value'])) {
    $input_value = $_POST['input_value'];
    $state_variable_array = $_SESSION['state_variables'];
    $state_variable_array[] = $input_value;
    $_SESSION['state_variables'] = $state_variable_array;
}

if(isset($_POST['add_value2'])){
    $input_value = $_POST['input_value'];
    $state_variable_array = $_SESSION['state_variables'];
    $state_variable_array[] = $input_value;
    $_SESSION['state_variables'] = $state_variable_array;
    header("Location:/cart.php");
}
