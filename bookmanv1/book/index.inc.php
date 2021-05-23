<?php
include_once '../data-service/book-service.php';

function on_get() {
    book_load();
    global $books;

    return $books;
}
