<?php
session_start();
include("./data/db.connection.php");
$arr = array();
$state_variable_array = $_SESSION['state_variables'];


$sql = "SELECT * FROM newProduct LIMIT 3";
$pro = $con->query($sql);

if (!isset($_SESSION['state_variables'])) {
    $_SESSION['state_variables'] = array();
}
foreach ($state_variable_array as $value) {
    $sqls = "SELECT * FROM product WHERE id = '$value'";
    $result = mysqli_query($con, $sqls);
    while ($row = mysqli_fetch_assoc($result)) {
        $arr[] = $row;
    }
}

$unique_array = array_map("unserialize", array_unique(array_map("serialize", $arr)));

if (isset($_POST['submit_button'])) {
    $index = $_POST['index'];
    unset($unique_array[$index]);
    $unique_array = array_values($unique_array);
    unset($_SESSION['state_variables']);
    foreach ($unique_array as $i) {
        $_SESSION['state_variables'][] = $i["id"];
    }
}
