<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class</title>
</head>
<body>
    <!-- Class is a custom data type -->
    <?php
        class Book {
            var $title;
            var $author;
            var $pages;
            
        }
        // creating book object
        $book1 = new Book;
        $book1->title="Harry Potter";
        $book1->author="JK Rowling";
        $book1->pages = 400;
        
    ?>
</body>
</html>