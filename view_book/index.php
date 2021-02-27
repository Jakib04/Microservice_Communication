
<html>
    <head>
        <title>Library</title>
    </head>

    <body>
        <h1>Book List</h1>
        <ul>
            <?php

            $json = file_get_contents('http://book-service/');
            $obj = json_decode($json);

            $books = $obj->books;

            foreach ($books as $book) {
                echo "<li>$book</li>";
            }

            ?>
        </ul>
    </body>
</html>