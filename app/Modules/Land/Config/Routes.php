<?php

if(!isset($routes))
{ 
    $routes = \Config\Services::routes(true);
}

$routes->group('land', [
    'namespace' => 'App\Modules\Land\Controllers'
], function($subroutes){
	$subroutes->add('home', 'Home::index');
});