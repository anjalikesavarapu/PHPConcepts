<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative arrays</title>
</head>
<body>

    <!-- Associative arrays - stores key/value pairs
        Make sure to have unique keys
    -->
    <form action="associativeArrays.php" method="post">
        <input type="text" name="student">
        <input type="submit">
    </form>
    <?php
        $grades = array("Jim" => "A", "Kim" => "B+", "Tim" => "D");
        echo $grades[$_POST["student"]];
    ?>
</body>
</html>