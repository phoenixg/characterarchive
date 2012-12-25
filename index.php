<?php
// add slim
require 'vendor/autoload.php';

// add definitions
require 'definitions.php';

// add libs
require 'libs/log.php'; //LOG::info('test');

// initial app
$app = new \Slim\Slim(array(
	'debug' => true,
	'mode' => 'development',
	'templates.path' => './templates', // $app->config('templates.path')
));

// hello world
$app->get('/hello/:name', function ($name) {
    echo "Hello, $name";
});
$app->run();



