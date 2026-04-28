<?php

require_once '../app/core/Router.php';

use App\Core\Router;

$router = new Router();

// Register Routes
$router->add('POST', '/login', 'AuthController', 'login');
$router->add('GET', '/volunteers', 'VolunteerController', 'index');
$router->add('GET', '/volunteers/create', 'VolunteerController', 'create');
$router->add('GET', '/volunteers/{id}', 'VolunteerController', 'show');
$router->add('GET', '/activities', 'ActivityController', 'index');
$router->add('GET', '/activities/create', 'ActivityController', 'create');
$router->add('GET', '/activities/{id}', 'ActivityController', 'show');
$router->add('GET', '/signup', 'AuthController', 'signup');
$router->add('GET', '/activities/manage', 'activityController', 'manage');

$router->run();

?>