<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php 
        
        // $i = 0;
        
        // do {
        //     $a = rand(1, 100);
        //     echo "{$a} <br>";
        //     echo ++$i;
        //     echo '<br> ----- <br>';
        // } while ($i < 10);
        
        
        // for ($i = 0; $i < 1000; $i++) {
        //     $a = rand(1, 5);
            
        //     if ($a == 3) {
        //         exit('B');
        //     }
            
        //     echo "{$a} <br>";
        //     echo $i;
        //     echo '<br> ----- <br>';
        // }
        
        
        
        // boolean, int, float, string, null - scalar
        // array
        
        // implode explode
        
        // $a = [35, false, 123, [-1.2, true, 'yay']]; 
        // $length = count($a);
        // for ($i = 0; $i < $length; $i++) {
        //     echo var_dump($a[$i]);
        //     if (is_array($a[$i])) {
        //         for ($j = 0; $j < count($a[$i]); $j++) {
        //             var_dump($a[$i][$j]);
        //         }
        //     }
        // }
        
        
        $student = [
            'name' => 'Andy',
            'age' => 25,
            'city' => 'SF'
        ];

        var_dump($student);

        foreach ($student as &$value) {
            $value = rand(1,20);
            // echo "{$value} ";
        }
        // unset($value);
        
        $value = 'Hello';
        
        var_dump($student);
        
        
        
        
        
        // $a = & $b;
        
        // $b = 1;
        
        // var_dump($a, $b);
        
        // $a = 350;
        
        // var_dump($a, $b);
        
        // $b = 100;
        
        // var_dump($a, $b);
        
        
        
        
        
        
      
    ?>
</body>
</html>