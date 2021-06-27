<?php 
class Book {
    private $title;
    private $auther;
    private $pages;
    private $description;

    public function getBook(){
        return [
            'title' => $this->title,
            'auther' => $this->auther,
            'pages' => $this->pages,
            'description' => $this->description,
        ];
    }

    public function setBook($title, $auther, $pages, $description){
        $this->title = $title;
        $this->auther = $auther;
        $this->pages = $pages;
        $this->description = $description;
    }
}
