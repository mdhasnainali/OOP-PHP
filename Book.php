<?php

class Book{
    private $isbn;
    private $title;
    private $author;
    private $available;

    // Getter methods
    public function getIsbn() : string {
        return $this->isbn;
    }

    public function getTitle() : string {
        return $this->title;
    }

    public function getAuthor() : string {
        return $this->author;
    }

    public function getAvailable() : bool {
        return $this->available;
    }

    // Setter methods
    public function setIsbn(string $isbn) : void {
        $this->isbn = $isbn;
    }

    public function setTitle(string $title) : void {
        $this->title = $title;
    }

    public function setAuthor(string $author) : void {
        $this->author = $author;
    }

    public function setAvailable(bool $available) : void {
        $this->available = $available;
    }

    function getCopy() : bool{
        if($available > 0){
            $this->available = $this->available - 1;
            return true;
        }
        else return false;
    }

    function addCopy($num) : bool{
        $this->available = $this->available + $num;
    }

}

?>
