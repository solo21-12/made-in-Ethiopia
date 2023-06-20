<?php
session_start();

$state_variable_array = $_SESSION['state_variables'];
$_SESSION['state_variables'] = array();
