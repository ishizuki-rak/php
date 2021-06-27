<?php
include("book.php");
class Book_shelf {
    private array $book_list;
    // public function getBookList() {
    //     return $this->bool_list;
    // }

    /**
     * [
     *     'title' => ?,
     *     'auther' => ?,
     *     'pages' => ?,
     *     'description' => ?,
     * ]
     */
    public function addBookList($array){
        $book = new Book();
        $book->setBook($array['title'], $array['auther'], $array['pages'], $array['description']);
        $book_list[] = $book;// array_push($book_list, $book);
    }

    // 現在の$book_listで出力する文字列を作成する
    public function createTable() {
        $head = [
            'title' => 'タイトル',
            'auther' => '著者',
            'pages' => 'ページ数',
            'description' => '定価',
        ];

        // "<tr><th>タイトル</th><th>著者</th><th>ページ数</th><th>定価</th></tr></br>";
        $table = "<table>
            <tr>
                <th>". $head['title']."</th>
                <th>". $head['auther']."</th>
                <th>". $head['pages']."</th>
                <th>". $head['description']."</th>
            </tr></br>";

        // rowを作成
        foreach($this->book_list as $book_ins) {
            $table .= $this->createTableRow($book_ins);
        }

        $table .= "</table>";

        echo $table;
    }

    private function createTableRow($book_one){
        $book_one->getBook();

        return "<tr>
            <td>". $book_one['title']      ."</td>
            <td>". $book_one['auther']     ."</td>
            <td>". $book_one['pages']      ."</td>
            <td>". $book_one['description']."</td>
        </th></br>";
    }
}
