<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <?php
        //while loops
        $index = 1;
        while($index < 5) {
            echo "Hello <br>";
            $index++;
        }

        // do-while 
        $j = 6;
        do {
            echo "Hi <br>";
            $j++;
        }while($j <= 5);

        //for loops
        for($i = 1; $i <= 5;$i++) {
            echo "$i <br>";
        }
    ?>
</body>
</html>