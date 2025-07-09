<?php
$routes->get('practicas', 'Practicas::index');
$routes->post('practicas/guardar', 'Practicas::guardar');

$routes->post('practicas/eliminar/(:num)', 'Practicas::eliminar/$1');
