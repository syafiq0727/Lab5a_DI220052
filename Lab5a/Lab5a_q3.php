<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
        function calculateArea($length, $width) {
            return $length * $width;
        }

        $length = 2; 
        $width = 4;  
        $area = calculateArea($length, $width);
    ?>

    <p>The area of a rectangle with width <?php echo $width; ?> and length <?php echo $length; ?> is: <strong><?php echo $area; ?></strong></p>
</body>
</html>
