<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/pages/home.php';
        break;
    case '' :
        require __DIR__ . '/pages/home.php';
        break;
    case '/projects' :
        require __DIR__ . '/pages/projects.php';
        break;        
    case '/login' :
        require __DIR__ . '/pages/login.php';
        break;
    case '/register' :
        require __DIR__ . '/pages/register.php';
        break;
    case '/gallery' :
        require __DIR__ . '/pages/gallery.php';
        break;
    default:
        if(preg_match_all('/projects\?[a-z]+=[0-9]*/', $request)){
            require __DIR__ . '/pages/projects.php';
            break;
        }
        else{
            require __DIR__ . '/pages/404.php';
            break;
        }
}

?>
<script src="assets/scripts/logics.js"></script>