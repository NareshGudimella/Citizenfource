<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/Govering_Council_Form', 'Council_registeration::Governing_Council');
$routes->post('/Govering_Council_Form', 'Council_registeration::Governing_Council');

$routes->get('/Executive_Council_Form', 'Council_registeration::Executive_council');
$routes->post('/Executive_Council_Form', 'Council_registeration::Executive_council');


$routes->get('/District_Council_Form', ' Council_registeration::District_council');
$routes->post('/District_Council_Form', ' Council_registeration::District_council');

$routes->get('/Directors_Form', 'Council_registeration::Directoryship');
$routes->post('/Directors_Form', 'Council_registeration::Directoryship');
$routes->get('/demo', 'Demo::index');