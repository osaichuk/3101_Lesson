<?php
// 123
// recLoop(n) = 1+2+3+...+n 
// = (1+2+3+...+(n-1))+n  
// = recLoop(n-1)+n, n>=1

// todo: implement by loops and by recursion
// x^n
// 1+x+x^2+x^3+...+x^n

function recLoop($n)
{
    if ($n == 1) {
        return 1;
    }
    
    return recLoop($n - 1) + $n;
}
recLoop(3);

// n = 3, if->false, return recLoop(2) + 3
// n = 2, if->false, return recLoop(1) + 2
// n = 1, if->true, return 1




function sumLoop($n)
{
    $s = 0;
    
    for ($i = 1; $i <= $n; $i++) {
        $s = $s + $i; // $s += $i
    }
    
    return $s;
}

echo sumLoop(5);


function test()
{
    echo 'Hello ';
    test();
}

test();