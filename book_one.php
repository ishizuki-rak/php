<!-- HTMLとのやりとり -->
<?php
    include("book_shelf.php");
    include("book.php");
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>課題</title>
</head>
<body>

<?php
    $books = $_POST['book'];
    $book_ins = new Book();
    $book_shelf_ins = new BookShelf();

    foreach($books as $book) {
        // Bookクラスにデータを設定をお願い
        $book_ins->setBook($book['title'], $book['auther'], $book['pages'], $book['description']);
        // BookShelfクラスにリスト追加をお願い
        $book_shelf_ins->addBookList($book_ins);
    }

    // BookShelfクラスにメッセージ作成をお願い
    echo $book_shelf_ins->createTable();
?>
    
</body>
</html>
