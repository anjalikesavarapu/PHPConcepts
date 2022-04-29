<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numbers</title>
</head>
<body>
    <?php
        echo "Working with numbers" . "<br>";

        echo 100 . "<br>";
        echo 89.89 . "<br>";
        echo 12 + 90 . "<br>";
        echo 10 % 3 . "<br>";

        $num = 10;
        echo $num . "<br>";
        $num++;
        echo $num . "<br>";

        //Math functions
        echo abs(-100) . "<br>";
        echo pow(2, 4) . "<br>";
        echo sqrt(36) . "<br>";
        echo max(45, 89) . "<br>";
        echo round(3.4) . "<br>";
        echo ceil(3.3) . "<br>";
        echo floor(3.3) . "<br>"

    ?>
</body>
</html>