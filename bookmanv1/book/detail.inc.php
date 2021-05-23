<?php
include_once '../data-service/book-service.php';

function on_get() {
    book_load();
    global $books;

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        if(array_key_exists($id, $books))
        {
            @$book = $books[$id];
            return isset($book) ? $book : false;
        }
    }
    return false;
}