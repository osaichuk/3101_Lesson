<?php

require_once 'functions.php';

$message = requestGet('message'); // $_GET['message']

if ($_POST) {
    $number = requestPost('number'); // $_POST['number']    
    
    if (isNumberPositive($number)) {
        $message = isPrime($number) ? 'Prime' : 'Not prime';
        
        redirect('/form?message=' . $message); //die
    }
    
    $message = 'Invalid';
}

require 'layout.phtml';
 
 
// ssh test 