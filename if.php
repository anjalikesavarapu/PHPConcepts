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
            echo "You are a tall male";
        }
        else if ($isMale || $isTall) {
            echo "You are either male or tall";
        }
        else {
            echo "You are neither male nor tall";
        }
    ?>
</body>
</html>