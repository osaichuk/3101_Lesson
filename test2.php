<?php

function hello()
{
    return 123;
}

$a = ['hello', 1, 0, false, 'bye', 2.5, ''];

$function = function($value) {
    if ($value === 2.5) {
        return false;
    }
    
    return true;
};

$a = array_filter($a, $function);

// var_dump($a);
// $callback($value)


function if_else($condition, $f1, $f2)
{
    if ($condition) {
        $f1();
    } else {
        $f2();
    } 
}


if_else(-1 > 0, function() {
    echo 1;
    echo 2;
}, function() {
    echo 3;
    echo 4;
});










