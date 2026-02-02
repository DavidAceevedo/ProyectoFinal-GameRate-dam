<?php

$_SERVER['APP_ENV'] = 'dev';
$_SERVER['APP_DEBUG'] = '1';
$_SERVER['DATABASE_URL'] = 'mysql://admin:admin@127.0.0.1:3306/gamerate_db';

use App\Kernel;
use Symfony\Component\ErrorHandler\Debug;
use Symfony\Component\HttpFoundation\Request;

require dirname(__DIR__).'/vendor/autoload.php';

if ($_SERVER['APP_ENV'] === 'dev') {
    Debug::enable();
}

$kernel = new Kernel($_SERVER['APP_ENV'], (bool) $_SERVER['APP_DEBUG']);
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
