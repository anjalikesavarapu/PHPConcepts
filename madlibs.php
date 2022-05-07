<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madlibs</title>
</head>
<body>
    
    <form action="madlibs.php" method="get">
        Color <input type="text" name="color" />
        <br>
        <br>
        Pronoun <input type="text" name="pronoun">
        <br>
        <br>
        Celebrity <input type="text" name="celebrity">
        <br>
        <br>
        <input type="submit" value="Submit" />

    </form>
    <br>

    <?php
        $color = $_GET["color"];
        $pronoun = $_GET["pronoun"];
        $celebrity = $_GET["celebrity"];
        echo "Roses are $color <br>";
        echo "$pronoun are blue <br>";
        echo "I love $celebrity <br>";
    ?>
</body>
</html>