<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST vs GET</title>
</head>
<body>
    <!-- POST method won't add user data to URL parameters -->
    <form action="post.php" method="post">
        Password : <input type="password" name="pass" />
        <input type="submit" value="submit"><br>
    </form>

    <?php
        echo $_POST["pass"];
    ?>
</body>
</html>