<?php

use CodeIgniter\Router\RouteCollection;

//las reglas de enrutamiento las lee de arriba hacía abajo, y enruta
//la solicitud a la primera regla coincidente.

$routes->get('/', 'Home::index');
$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);

