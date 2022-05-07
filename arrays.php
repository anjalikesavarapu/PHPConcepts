<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
        $friends = array("Kevin","Karen","Oscar", 45, TRUE);
        $friends[1] = "Steve";
        $friends[10] = "Marcus";
        echo $friends[10];
        echo count($friends);
    ?>
</body>
</html>