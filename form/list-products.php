<?php

// load Products
// foreach + layout
function loadProducts()
{
    if (!file_exists('products.txt')) {
        return [];
    }
    $products = file_get_contents('products.txt');

    return unserialize($products);
}
$products = loadProducts();

require_once 'list-product-layout.phtml';