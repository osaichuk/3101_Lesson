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
        
        
        for ($i = 0; $i < 1000; $i++) {
            $a = rand(1, 5);
            
            if ($a == 3) {
                exit('B');
            }
            
            echo "{$a} <br>";
            echo $i;
            echo '<br> ----- <br>';
        }
        
        
        
        
        
    ?>
</body>
</html>