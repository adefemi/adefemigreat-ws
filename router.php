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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/feather-icons"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace()
</script>