<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php 

// test line

        
        // $a = 'Hello';
        // echo "global {$a} <br>";

        // function test($a)
        // {
        //     $a = 345345;
        //     echo "local {$a} <br>";
            
        //     return 'Bye';
        // }
        
        // echo test($a);
        // echo "<br> global {$a}";
 
 
        // function a()
        // {
        //     echo 'a';
            
        //     if (!function_exists('b')) {
        //         function  b()
        //         {
        //             echo 'b';
        //         }
        //     }
        // }
        
        // a();
        // a();
        // b();
        
        
        function isPrime($number)
        {
            if (!is_numeric($number)) {
                return false;
            }
            
            if ($number < 2) {
                return false;
            }
            
            if ($number <= 3) {
                return true;
            }
            
            for ($i = 2; $i < $number; $i++) {
                if ($number % $i == 0) {
                    return false;
                }
            }
            
            return true;
        }
        
        for ($i = 1; $i <= 100; $i++) {
            var_dump($i, isPrime($i));
        }
    ?>
</body>
</html>