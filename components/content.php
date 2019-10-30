<?php
$request = $_SERVER['REQUEST_URI'];
?>

<div class="content-main">
    <div class="socials-main">
        <i data-feather="facebook"></i>
        <i data-feather="twitter"></i>
        <i data-feather="github"></i>
        <i data-feather="linkedin"></i>
    </div>
    <div class="safe-space">
        <ul class="nav-bar">
            <li><a href="/">home</a></li>
            <li><a href="/projects">projects</a></li>
            <li><a href="/store">store</a></li>
            <li><a href="/blog">blog</a></li>
            <li><a href="/about">about</a></li>
        </ul>
        <div class="content-field">
            <?php
            switch ($request) {
                case '/' :
                    require_once "pages/HomeComponents/homeContent.php";
                    break;
                case '' :
                    require_once "pages/HomeComponents/homeContent.php";
                    break;
                case '/about' :
                    require_once "pages/AboutComponents/aboutContent.php";
                    break;
                case '/projects' :
                    require_once "pages/ProjectComponents/projectContent.php";
                    break;
                case '/login' :
                    require_once "pages/LoginComponents/loginContent.php";
                    break;
                default:
                    require_once "pages/404Components/404Content.php";
                    break;
            }
            ?>
        </div>
    </div>
    <div></div>
</div>