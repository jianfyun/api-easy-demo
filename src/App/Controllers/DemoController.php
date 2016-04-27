<?php
namespace App\Controllers;

use ApiEasy\Controller\ControllerInterface;
use ApiEasy\Http\Message\Request;
use ApiEasy\Http\Message\Response;

class DemoController implements ControllerInterface
{
    public function preDispatch(Request $request, Response $response)
    {
        //Do some common work before the processing.
    }

    public function postDispatch(Request $request, Response $response)
    {
        //Do some common work after the processing.
    }

    public function getUser(Request $request, Response $response)
    {
        $id = $request->getAttribute('id');
        $response->withJson(['id' => $id, 'age' => 24, 'weight' => 80, 'height' => 180]);
    }

    public function createUser(Request $request, Response $response)
    {
        $name = $request->getParsedBody()['name'];
        $response->withJson(['id' => 'user id, example: 1234', 'name' => $name]);
    }

    public function updateUser(Request $request, Response $response)
    {
        $id = $request->getAttribute('id');
        $name = $request->getParsedBody()['name'];
        $response->withJson(['id' => $id, 'name' => $name, 'updated' => 1]);
    }

    public function deleteUser(Request $request, Response $response)
    {
        $id = $request->getAttribute('id');
        $response->withJson(['id' => $id, 'deleted' => 1]);
    }
}
