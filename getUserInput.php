<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get user Input</title>
</head>
<body>
    
    <form action="getUserInput.php" method="get">
        Name: <input type="text" name="username" />
        <br>
        Age: <input type="number" name="age">
        <br>
        <input type="submit" value="Submit" />

    </form>
    <br>

    <?php
        echo "Hello " . $_GET["username"];
        echo "Your age is  ". $_GET["age"];
    ?>
</body>
</html>