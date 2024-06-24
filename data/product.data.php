<?php

// Read data from JSON file
$jsonString = file_get_contents('./data/product.json');
$data = json_decode($jsonString, true);

// Ensure the data structure is as expected
if (!isset($data['product'])) {
    // Handle error: JSON structure doesn't match expected format
    die('Invalid JSON format: missing "product" array');
}

// Filter products based on category parameter
$queryString = $_SERVER['QUERY_STRING'];
parse_str($queryString, $params);

$products = $data['product'];

// Filter products based on category parameter
$filteredProducts = array_filter($products, function ($product) use ($params) {
    return isset($product['category']) && $product['category'] === $params['category'];
});

// Limit the number of featured products
$featured = $filteredProducts;
