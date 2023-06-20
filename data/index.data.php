<?php
include("./data/db.connection.php");
$sql_all = "SELECT * FROM newProduct ORDER BY id DESC LIMIT 3;";
$fetured = $con->query($sql_all);
