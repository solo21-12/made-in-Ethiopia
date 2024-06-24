<?php

// Read data from JSON file
$jsonString = file_get_contents('./data/product.json');
$products = json_decode($jsonString, true);

// Parse query string parameters
$queryString = $_SERVER['QUERY_STRING'];
parse_str($queryString, $params);

// Filter products based on category parameter
$filteredProducts = array_filter($products, function ($product) use ($params) {
    return isset($product['category']) && $product['category'] === $params['category'];
});

// Limit the number of featured products
$featured = $filteredProducts;
