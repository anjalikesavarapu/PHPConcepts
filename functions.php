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
        function sayGreeting($name, $age) {
            echo "Hi $name  your age is $age <br>";
        }
        sayGreeting("Anjali" ,14);
        sayGreeting("Kale", 78);
        sayGreeting("Steve", 75);
    ?>

</body>
</html>