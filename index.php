<?php

session_start();

$url = parse_url($_SERVER['REQUEST_URI'])['path'];

if ($url === '/share-licious/') {
    require 'controller/main.controller.php';
} else {
    echo '404 not found';
}