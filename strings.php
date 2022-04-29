<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Srings</title>
</head>
<body>
    <?php
        echo "Working with Strings <br>";
        $phrase = "PHP means Hypertext processor";
        // String Functions

        // Lower case
        echo strtolower($phrase). "<br>";
        // Upper case
        echo strtoupper($phrase). "<br>";
        // Length of String
        echo strlen($phrase). "<br>";
        // Indexing 
        echo $phrase[12] . "<br>";
        // String replacing
        echo str_replace("means", "=", $phrase) . "<br>";
        // Substring
        echo substr($phrase, 11, 5). "<br>";

    ?>

</body>
</html>