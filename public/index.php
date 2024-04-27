
<?php 

require_once 'D:\WEB\php_01\public\vendor\autoload.php';
require_once "D:\WEB\php_01\public\controllers\MainController.php";
require_once "D:\WEB\php_01\public\controllers\PopularController.php";
require_once "D:\WEB\php_01\public\controllers\PopularImageController.php";
require_once "D:\WEB\php_01\public\controllers\PopularInfoController.php";
require_once "D:\WEB\php_01\public\controllers\Controller404.php";
require_once "D:\WEB\php_01\public\controllers\MusthaveController.php";
require_once "D:\WEB\php_01\public\controllers\MusthaveImageController.php";
require_once "D:\WEB\php_01\public\controllers\MusthaveInfoController.php";
$loader = new \Twig\Loader\FilesystemLoader('../views');
$twig = new \Twig\Environment($loader);
    
$url = $_SERVER["REQUEST_URI"];
$title = "";
$template="";
$url_title="";

$context= [];


$controller = new Controller404($twig);

    if ($url == "/") {
        $controller = new MainController($twig);
       
    }
    elseif (preg_match("#^/popular/image#", $url)){
        $controller = new PopularImageController($twig);

    } elseif (preg_match("#^/popular/info#", $url)) {
        $controller = new PopularInfoController($twig);
    }
    elseif (preg_match("#^/popular#", $url)) {
        
        $controller = new PopularController($twig);
     
    }        
        
     
    elseif (preg_match("#^/musthave/image#", $url)){
     $controller = new MusthaveImageController($twig);   

    }
    elseif (preg_match("#^/musthave/info#", $url)) {
    $controller = new MusthaveInfoController($twig);   

    }
    elseif (preg_match("#^/musthave#", $url)) {
        $controller = new MusthaveController($twig);
    
         }
    
if ($controller) {
    $controller->get($context);
}