<?php
ini_set('display_errors', '1');
error_reporting(E_ALL);

$current_page = $_REQUEST['page'] ?? 'main';

function show_content($page) {
    $available_pages = [
        'list', 
        'item', 
        'main'
    ];
    //check page address - display content if ok
    if(in_array($page, $available_pages)) {
        $content = include 'content/' . $page . '.php';
        include 'page/' . $page . '.php';
    //or display 404 page
    } else {
        include 'page/404.php';
    }
}

show_content($current_page);
