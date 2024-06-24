<?php
session_start();

// Read data from JSON file
$jsonString = file_get_contents('./data/product.json');
$data = json_decode($jsonString, true);

// Ensure the data structure is as expected
if (!isset($data['product'])) {
    // Handle error: JSON structure doesn't match expected format
    die('Invalid JSON format: missing "product" array');
}

// Parse query string parameters
$queryString = $_SERVER['QUERY_STRING'];
parse_str($queryString, $params);

// Initialize variables
$id = isset($params["id"]) ? $params["id"] : null;
$category = isset($params["category"]) ? $params["category"] : null;

// Retrieve product by ID
$featuredProduct = null;
if ($id !== null) {
    foreach ($data['product'] as $product) {
        if ($product['id'] == $id) {
            $featuredProduct = $product;
            break;
        }
    }
}
// var_dump($featuredProduct);
// Retrieve product by category
$relatedProducts = [];
if ($category !== null) {
    foreach ($data['product'] as $product) {
        if ($product['category'] == $category) {
            $relatedProducts[] = $product;
        }
    }
    // Limit to 3 product as in your original SQL query
    $relatedProducts = array_slice($relatedProducts, 0, 3);
}

// Handle form submissions
if (isset($_POST['add_value'])) {
    $input_value = $_POST['input_value'];
    $_SESSION['state_variables'][] = $input_value;
}

if (isset($_POST['add_value2'])) {
    $input_value = $_POST['input_value'];
    $_SESSION['state_variables'][] = $input_value;
    header("Location: /cart.php");
    exit;
}
?>