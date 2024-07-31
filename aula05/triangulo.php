<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>TRIANGULO FODA</title>
</head>
<body>
    <?php
        function area_triangulo ($base, $altura) {
            $area = ($base * $altura)/2;
            return $area;
        }
        echo area_triangulo(13, 17);
    ?>
</body>
</html>