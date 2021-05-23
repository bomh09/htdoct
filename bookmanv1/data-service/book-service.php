<?php
include_once ('../core/functions.php');

$file = path('data/data.json');

$books = [
    1 => [
        'title' => '',
        'authors' => '',
        'publisher' => '',
        'year' => 2020,
        'summary' => ''
    ]
];

function book_save() {
    global $books, $file;
    $json = json_encode($books);
    file_put_contents($file, $json);
}

function book_load() {
    global $books, $file;
    $json = file_get_contents($file);
    $books = json_decode($json, true);
}

function book_delete($id) {
    global $books;
    if(array_key_exists($id, $books)){
        unset($books[$id]);
        book_save();
    }
}