<?php
session_start();

require_once __DIR__ . '/../src/database/db.php';
$request = $_SERVER['REQUEST_URI'];
switch ($request) {
    case '/':
        require __DIR__ . '/../src/vue/pages/main.php';
        break;
    case '/?register':
        require __DIR__ . '/../src/vue/pages/register.php';
        break;
    case '/?Main':
        require __DIR__ . '/../src/vue/pages/main.php';
        break;
    case '/?Home':
        require __DIR__ . '/../src/vue/pages/home.php';
        break;
    case '/?Search':
        require __DIR__ . '/../src/vue/pages/search.php';
        break;
    case '/?Create':
        require __DIR__ . '/../src/vue/pages/addPost.php';
        break;
    case '/?UpdatePost':
        require __DIR__ . '/../src/vue/pages/updatePost.php';
        break;
    case '/?UpdateCom':
        require __DIR__ . '/../src/vue/pages/updateCom.php';
        break;
    case '/?Logout':
        require __DIR__ . '/../www/actions/logout.php';
        break;
    case '/?Profil':
        require __DIR__ . '/../src/vue/pages/profil.php';
        break;
    case '/?Comment':
        require __DIR__ . '/../src/pages/comment.php';
        break;
    case '/?Settings':
        require __DIR__ . '/../src/pages/settings.php';
        break;
    case '/actions/login.php':
        require __DIR__ . '/actions/login.php';
        break;
    case '/actions/signup.php':
        require __DIR__ . '/actions/signup.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/../src/vue/pages/404.php';
        break;
}
require_once __DIR__ . '/../src/vue/template.php';
