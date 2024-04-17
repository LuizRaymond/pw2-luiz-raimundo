<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num1 = 0;
        $num2 = 1;
        for ($i = 0; $i < 8; $i++) {
            echo $num1; 
            echo "<br>";
            $seq = $num1 + $num2;
            $num1 = $num2;
            $seq = $num2;
            
        }
    ?>
</body>
</html>