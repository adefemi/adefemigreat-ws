<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/pages/home.php';
        break;
    case '' :
        require __DIR__ . '/pages/home.php';
        break;
    case '/about' :
        require __DIR__ . '/pages/about.php';
        break;
    case '/projects' :
        require __DIR__ . '/pages/projects.php';
        break;
    case '/login' :
        require __DIR__ . '/pages/login.php';
        break;
    default:
        require __DIR__ . '/pages/404.php';
        break;
}