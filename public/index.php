<?php

ini_set('display_errors', 1);
ini_set('display_startup_error', 1);
error_reporting(E_ALL); 

require_once '../vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;
use Aura\Router\RouterContainer;

password_hash('superSecurePassword', PASSWORD_DEFAULT);

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'cursophp',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

$request = Zend\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER,
    $_GET,
    $_POST,
    $_COOKIE,
    $_FILES
);

$routerContainer = new RouterContainer();

$map = $routerContainer->getMap();

$map->get('index', '/curso_php/', [
    'controller' => 'App\Controllers\IndexController',
    'action' => 'indexAction']);

$map->get('addJobs', '/curso_php/jobs/add', [
    'controller' => 'App\Controllers\JobsController',
    'action' => 'getAddJobAction']);

$map->post('saveJobs', '/curso_php/jobs/add', [
    'controller' => 'App\Controllers\JobsController',
    'action' => 'getAddJobAction']);

$map->get('addUsers', '/curso_php/signin', [
    'controller' => 'App\Controllers\UsersController',
    'action' => 'getAddUserAction']);

$map->post('saveUsers', '/curso_php/signin', [
    'controller' => 'App\Controllers\UsersController',
    'action' => 'getAddUserAction']);

$map->get('loginForm', '/curso_php/login', [
    'controller' => 'App\Controllers\AuthController',
    'action' => 'getLogin']);

$map->post('auth', '/curso_php/auth', [
    'controller' => 'App\Controllers\AuthController',
    'action' => 'postLogin']);

$matcher = $routerContainer->getMatcher();

$route = $matcher->match($request);

function printElement($job) {
    
    echo '<li class="work-position">';
    echo '<h5>' . $job->title . '</h5>';  
    echo '<p>' . $job->description. '</p>';
    echo '<p>' . $job->getDurationAsString() . '<p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
  }

if(!$route){
    echo 'No route';
} else{
    $handlerData = $route->handler; 
    $controllerName = $handlerData['controller'];
    $actionName = $handlerData['action'];

    $controller = new $controllerName;
    $response = $controller->$actionName($request);

    //foreach significa que vamos a recorrer un arreglo
    //Obtiene el encabezado que se han generado en las respuestas y los encabezados tienen un nombre que pueden contener mas de un valor, sin embargo cuando se tiene que imprimir se debe hacer uno por uno (nombre, valor)
    foreach($response->getHeaders() as $name => $values)
    {
        foreach($values as $value){
            //la funcion header es como se imprimen los encabezados, sprintf es una funcion nativa de PHP que permite imprimir cosas dentro de una cadena 
            header(sprintf('%s: %s', $name, $value), false);
        }
    }
    //La funcion http lo que hace es traer los codigos que nos da el servidor, codigos 200, 300, 400, 500 que nos dan informacion de como esta en ese momento
    http_response_code($response->getStatusCode());

    echo $response->getBody();
}