<?php
require_once __DIR__ . '/../app/controllers/WebController.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


$uri = str_replace("mydevpiratas.com/public", "", $uri);


$method = $_SERVER['REQUEST_METHOD'];

if($uri === '/' || $uri === '/index' || $uri === '/home') {

    (new WebController())->index(); 


}elseif($uri === '/login' && $method === "GET") {

    var_dump("Entrar na pag de login");

}elseif($uri === '/login' && $method === "POST") {

    var_dump("Enviar dados do login");
    

}elseif($uri === '/signup' && $method === "GET") {
    var_dump("Entrar na pag de signup");
}elseif($uri === '/signup' && $method === "POST") {
    var_dump("Enviar dados do signup");
}elseif($uri === '/users' && $method === "GET") {
    var_dump("Entrar na pag de users");
}else {
    echo "404 Not Found";
}