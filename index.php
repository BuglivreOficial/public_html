<?php

require_once("./vendor/autoload.php");

use Core\Router\Router;

/**
 * 
 */

use Core\Login;
use Core\Register;
use Core\ResetPassword;

/**
 * 
 */

use Core\Update;
use Core\Maintenance;

/*************************************************/

/**
 * User authentication routes
 */
Router::post('/register', 'Register@index');
Router::post('/login', 'Login@index');
Router::post('/reset-password', 'ResetPassword@index');

/**
 * 
 */

Router::get('/update', 'Update@index');
Router::get('/maintenance', 'Maintenance@index');

Router::start();