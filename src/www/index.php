<?php
use ApiEasy\ApiEasy;
use ApiEasy\Http\Message\Request;
use ApiEasy\Http\Message\Response;

require_once __DIR__ . '/../../vendor/autoload.php';

try {
    $api = new ApiEasy();

    $api->withCallbackNs('\\App\\Controllers');

    $api->get('/demo/user/{id}', ['DemoController', 'getUser']);

    $api->post('/demo/user', ['DemoController', 'createUser']);

    $api->put('/demo/user/{id}', ['DemoController', 'updateUser']);

    $api->delete('/demo/user/{id}', ['DemoController', 'deleteUser']);

    $api->options('/demo', function(Request $request, Response $response) {
        $response->withHeader('Allow', 'GET,POST,PUT,DELETE,OPTIONS');
    });

    $api->get('/', function(Request $request, Response $response) {
        $response->withJson(['title' => 'Welcome! This is a demo.']);
    });

    $api->run();
} catch (\Exception $e) {
    echo 'Some error may have occurred. Please check the request URI.';
}
