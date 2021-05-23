<?php
include_once '../data-service/book-service.php';

function on_get() {
    if (isset($_GET['id'])) {
        book_load();
        global $books;
        $id = $_GET['id'];
        if (array_key_exists($id, $books)) {
            if (isset($_GET['confirm'])) {
                book_delete($id);
                header("Location: index.php");
                exit();
            } else {
                return ['id' => $id, 'data' => $books[$id]];
            }
        }
    }
    return false;
}