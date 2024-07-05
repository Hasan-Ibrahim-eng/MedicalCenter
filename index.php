<?php

//use app\controllers\UserController;

use app\controllers\AdminController;
use app\controllers\PatiantController;
use app\controllers\SpeciatieController;
use app\controllers\ReviewController;


require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/vendor/DB/MysqliDb.php';
require_once __DIR__ . '/app/controllers/PatiantController.php';
require_once __DIR__ . '/app/controllers/SpecialtieController.php';
require_once __DIR__ . '/app/controllers/AdminController.php';
require_once __DIR__ . '/app/controllers/ReviewController.php';



$config = require 'config/config.php';
$db = new MysqliDb(
    $config['db_host'],
    $config['db_user'],
    $config['db_pass'],
    $config['db_name']
);

$request = $_SERVER['REQUEST_URI'];
var_dump($request);

define('BASE_PATH', '/');

$Patiantcontroller = new PatiantController($db);
$SpecialtieContrller = new SpeciatieController($db);
$admincontroller = new AdminController($db);
$reviewcontroller = new ReviewController($db);

switch ($request) {
    case BASE_PATH . 'login':
        $admincontroller->login();
        break;
    case BASE_PATH . 'addreview':
        $reviewcontroller->addreview();
        break;
    case BASE_PATH . 'averagerate?id=' . $_GET['id']:
        $reviewcontroller->averagerate($_GET['id']);
        break;
        
}
//     case BASE_PATH . 'add':
//         $controller->addUser();
//         break;
//     case BASE_PATH . 'show':
//         $controller->showUsers();
//         break;
//     case BASE_PATH . 'delete?id=' . $_GET['id']:
//         // var_dump($_GET['id']);
//         $controller->deleteUser($_GET['id']);
//         break;
//     case BASE_PATH . 'update?id=' . $_GET['id']:
//         $controller->updateUser($_GET['id']);
//         break;
//     case BASE_PATH . 'edit?id=' . $_GET['id']:
//         // var_dump($_GET['id']);
//         $controller->editUser($_GET['id']);
//         break;
//     case BASE_PATH . 'search':
//         $controller->searchUsers($_POST['search_term']);
//         break;
//     case BASE_PATH . 'show_search':
//         $controller->showSearchedUsers($_GET['search_term']);
//         break;
//     default:
//     // var_dump($request);
//         break;
// } 
