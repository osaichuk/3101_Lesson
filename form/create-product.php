<?php

require_once 'functions.php';

define('IMAGE_JPG', 'image/jpeg');
define('IMAGE_PNG', 'image/png');
define('EXT_PNG', '.png');
define('EXT_JPG', '.jpg');

function getFilename(array $file)
{
    $uniqid = uniqid();
    
    switch ($file['type']) {
        case IMAGE_JPG: 
            return $uniqid . EXT_JPG;
        case IMAGE_PNG: 
            return $uniqid . EXT_PNG;
        default: 
            return false;
    }
}

// todo: сформировать сообщение о том какое именно поле неправильно заплонено
function isValuesValid($title, $price, $file)
{
    if (empty($file) || !is_array($file)) {
        return false;
    }
    
    if (!isset($file['error'])) {
        return false;
    }
    
    $allowedFormats = [IMAGE_JPG, IMAGE_PNG];
    $textFieldsValid = !empty($title) && !empty($price);
    $imageTypeValid = in_array($file['type'], $allowedFormats);
    
    return !$file['error'] && $imageTypeValid && $textFieldsValid;
    // return ['result' => true / false, 'message' => 'sdf sdfsdf sd']
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
$file = requestFiles('image');

if ($_POST) {
    
    $validation = isValuesValid($title, $price, $file);
    if ($validation) {
        $product = createProduct($title, $price, $description);
        saveProduct($product);
        $filename = getFilename($file);
        $message = 'Saved';
        move_uploaded_file($_FILES['image']['tmp_name'], $filename);
        
        redirect('/form/create-product.php?message=' . $message); //die
    }
    
    $message = 'Form invalid';
}

require 'create-product-layout.phtml';

