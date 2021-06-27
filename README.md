# php

### 検索文言01「引数 php 型」
 ```cs
 // 例
 function aaa(int $pages){
  echo $pages;
 }
 
 $this->aaa("Hello World");// Error : difference type...as string...
 $this->aaa(null);// 何も表示されない or Error
 $this->aaa();// Error : 1 pass argument....
 $this->aaa(84);// 84
 
 // もし
 // function aaa(int $pages = 55){}
 // $this->aaa(); // 55と表示される
```
```cs
 // 上記と同じ理屈でクラスも指定できる
 
 function bbb(Book $book){
    $book->setBook(?, ?, ?, ?);
 }
 $book_instance = new Book():
 $this->bbb($book_instance); // OK
 $this->bbb(678); // Error
 $this->bbb(null); // Error
 
 // 補足；できるけど絶対やらない↓
 // 型を制限しているのに初期値をいれると、nullが入った時にエラーになる
 // function bbb(Book $book = new Book()){
      $book->setBook();// nullデータ->setBook();　は無いのでエラー
 }
 // 中の処理を厳密にするために型指定する
 ```
 
 ### 検索文言02「...」
 ### 検索文言03「...」
 ### 検索文言04「...」
 ### 検索文言05「...」
