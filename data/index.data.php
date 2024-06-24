<?php

// Read data from JSON file
$jsonString = file_get_contents('./data/product.json');
$data = json_decode($jsonString, true);

// Ensure the data structure is as expected
if (!isset($data['newProduct'])) {
    // Handle error: JSON structure doesn't match expected format
    die('Invalid JSON format: missing "newProduct" array');
}

// Get the products array from JSON data
$products = $data['newProduct'];

// Slice the array to get the first 3 elements (similar to LIMIT 3 in SQL)
$fetured = array_slice($products, 0, 3);

// Now $fetured contains an array of the first 3 elements from the JSON data
// You can iterate through $fetured or use it as needed in your application
