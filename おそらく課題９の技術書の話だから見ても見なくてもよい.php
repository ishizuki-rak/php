<?php
// technic_book.php????????

include("book.php");

class TechnicBook extends Book{
    private string $language;

    public function setTechBook($t, $a, $p, $d){
        $this->setBook($t, $a, $p, $d);

        echo $this->title;// これはできない　ここで呼び出せるのはBookクラスでpublic, protectedだった変数のみ
    }
}
