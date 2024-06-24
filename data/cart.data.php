<?php
session_start();

// Read JSON file
$jsonData = file_get_contents('./data/product.json');
$data = json_decode($jsonData, true);

if (!isset($data['product'])) {
    // Handle error: JSON structure doesn't match expected format
    die('Invalid JSON format: missing "product" array');
}

$arr =  $data['product'];

// Initialize state variables from session or empty array if not set
$state_variable_array = isset($_SESSION['state_variables']) ? $_SESSION['state_variables'] : array();
// Process data as per your logic
if (!empty($state_variable_array)) {
    // Filter array based on session variables
    $filteredArr = array_filter($arr, function ($item) use ($state_variable_array) {
        return in_array($item['id'], $state_variable_array);
    });

    // Remove duplicates from filtered array
    $unique_array = array_map("unserialize", array_unique(array_map("serialize", $filteredArr)));
} else {
    $unique_array = [];
}

// Handle form submission
if (isset($_POST['submit_button'])) {
    // Ensure index is set and valid
    if (isset($_POST['index']) && array_key_exists($_POST['index'], $unique_array)) {
        $index = $_POST['index'];
        unset($unique_array[$index]);
        $unique_array = array_values($unique_array); // Re-index array

        // Clear session variable and re-populate with remaining IDs
        unset($_SESSION['state_variables']);
        foreach ($unique_array as $i) {
            $_SESSION['state_variables'][] = $i["id"];
        }
    }
}
