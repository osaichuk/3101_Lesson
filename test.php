<?php

session_start();

echo session_save_path();


//        sess_qlmmvqd42202nm583m1n0ituu2
// PHPSESSID = qlmmvqd42202nm583m1n0ituu2

$_SESSION['session_test'] = [1,2, 3];

var_dump($_SESSION);

// $expire = time() + 24 * 60 * 60;

// setcookie('test', 123, time() - 1);
// unset($_COOKIE['test']);
// var_dump($_COOKIE);


// // echo 123;