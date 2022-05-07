<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Including HTML</title>
</head>
<body>
    <!-- Including html file in php file -->
    <?php include "header.html"?>
    <p>Hello everyone </p>
    <?php 
        $title = "My first post";
        $author = "Anjali";
        include "article-header.php";
    ?>
    <?php include "footer.html"?>
    <!-- Including another php file inside this php file -->
    
</body>
</html>