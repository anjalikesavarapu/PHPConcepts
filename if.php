<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If condition</title>
</head>
<body>
    <?php
        $isMale = false;
        $isTall = false;
        if ($isMale && $isTall) {
            echo "You are a tall male <br>";
        }
        else if ($isMale || $isTall) {
            echo "You are either male or tall <br>";
        }
        else {
            echo "You are neither male nor tall <br>";
        }

        //Functions and if statement
        function getMax($num1, $num2, $num3) {
            if($num1 >= $num2 && $num1 >= $num3) {
                return $num1;
            }
            else if($num2 >= $num3) {
                return $num2;
            }
            else {
                return $num3;
            }
        }
        $greater = getMax(89, 150, 17);
        echo $greater;
    ?>
</body>
</html>