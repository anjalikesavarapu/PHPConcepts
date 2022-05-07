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
            //Constructors in php
            function __construct($aTitle, $aAuthor, $aPages) {
                $this->title=$aTitle;
                $this->author=$aAuthor;
                $this->pages = $aPages;
            }
            //Object functions
            function isBig() {
                if($this->pages > 300) {
                    return "true";
                }
                return "false";
            }
        }

        // creating book object
        $book1 = new Book("Harry Potter", "JK Rowling", 400);
        $book2 = new Book("Lord of the rings", "Tolkien", 700);
        echo $book1->isBig(); 
        echo $book2->isBig(); 

    ?>
</body>
</html>