<?php
$request = $_SERVER['REQUEST_URI'];
?>

<div class="content-main">
    <div class="socials-main mobile-main">
        <?php require_once "components/sociallinks.php" ?>
    </div>

    <div class="side-bar-mobile" id="drawal"> 
        <div class="inner">
            <ul class="nav-bar">
                <?php require_once "components/navlinks.php" ?>
            </ul>
        </div>
        <div class="overlay" id="overlay_toggle"></div>
    </div>

    <div class="safe-space nav-space">
        <ul class="nav-bar mobile-1024">
            <?php require "components/navlinks.php" ?>
        </ul>
        <div class="content-field home-1024 home-mobile-main">
            <?php
            switch ($request) {
                case '/' :
                    require_once "pages/HomeComponents/homeContent.php";
                    break;
                case '' :
                    require_once "pages/HomeComponents/homeContent.php";
                    break;
                case '/projects' :
                    require_once "pages/ProjectComponents/projectContent.php";
                    break;
                case '/login' :
                    require_once "pages/LoginComponents/loginContent.php";
                    break;
                case '/register' :
                    require_once "pages/RegisterComponents/registerContent.php";
                    break;
                case '/gallery' :
                    require_once "pages/GalleryComponents/galleryContent.php";
                    break;
                default:
                    require_once "pages/404Components/404Content.php";
                    break;
            }
            ?>
        </div>
    </div>
    <div class="socials-main-mobile desktop-main">
        <?php require "components/sociallinks.php" ?>
        <div class="drawal">
                >
        </div>
    </div>
    <div></div>
</div>