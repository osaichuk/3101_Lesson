<?php

function test($a, $b = 2, $c = 3, $d = 4)
{
    return $a + $b; // $b = 10
}

function test(array $a)
{
    
}

echo test(12, 4, 7, 7);


