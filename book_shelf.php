<?php
// 本棚（Bookクラスをまとめたり使うクラス）

include("book.php");
class BookShelf {
    private array $book_list;

    /**
     * Bookクラスインスタンスをリストにする
     * @param Book $book
     */
    public function addBookList(Book $book){
        $this->book_list[] = $book;// array_push($book_list, $book);
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

    private function createTableRow($book){
        $array = $book->getBook();

        return "<tr>
            <td>". $array['title']      ."</td>
            <td>". $array['auther']     ."</td>
            <td>". $array['pages']      ."</td>
            <td>". $array['description']."</td>
        </th></br>";
    }
}
