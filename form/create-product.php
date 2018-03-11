<?php

require_once 'functions.php';

function isValuesValid($title, $price)
{
    return !empty($title) && !empty($price);
}

function createProduct($title, $price, $description = null)
{
    return [
        'title' => $title,
        'price' => $price,
        'description' => $description,
    ];
    // return compact('title', 'price', 'description');
}

function loadProducts()
{
    if (!file_exists('products.txt')) {
        return [];
    }
    $products = file_get_contents('products.txt');
    
    return unserialize($products);
}

function saveProduct(array $product)
{
    $products = loadProducts();
    $products[] = $product;
    $products = serialize($products);
    file_put_contents('products.txt', $products);
}

$message = requestGet('message'); // $_GET['message']
$title = requestPost('title');
$price = requestPost('price');
$description = requestPost('description');

if ($_POST) {
    
    if (isValuesValid($title, $price)) {
        $product = createProduct($title, $price, $description);
        saveProduct($product);
        $message = 'Saved';
        
        redirect('/3101/Backend/lesson/form/create-product.php?message=' . $message); //die
    }
    
    $message = 'Form invalid';
}

require 'create-product-layout.phtml';

