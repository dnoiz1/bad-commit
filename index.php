<?php

require_once('config.php');

if(array_key_exists('page', $_GET)) {
    $page = $_GET['page'];
} else {
    $page = 'home.html';
}

$template = file_get_contents('templates/base.html');
$parts = explode('{{ content }}', $template);

echo $parts[0];
include('templates/' . $page);
echo $parts[1];