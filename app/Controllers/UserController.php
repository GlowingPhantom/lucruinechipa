<?php
namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Models\User;

class UserController
{
    public function index(Request $request, Response $response, $args)
    {
        $users = User::all();
        ob_start();
        require '../views/users/index.view.php';
        $html = ob_get_clean();
        $response->getBody()->write($html);
        return $response;
    }

    public function create(Request $request, Response $response, $args)
    {
        ob_start();
        require '../views/users/create.view.php';
        $html = ob_get_clean();
        $response->getBody()->write($html);
        return $response;
    }

    public function store(Request $request, Response $response, $args)
    {
        $data = $request->getParsedBody();
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        User::create($data);
        return $response
            ->withHeader('Location', '/users')
            ->withStatus(302);
    }

    public function show(Request $request, Response $response, $args)
    {
        $user = User::find($args['id']);
        ob_start();
        require '../views/users/show.view.php';
        $html = ob_get_clean();
        $response->getBody()->write($html);
        return $response;
    }

    public function delete(Request $request, Response $response, $args)
    {
        $user = User::find($args['id']);
        $user->delete();
        return $response
            ->withHeader('Location', '/users')
            ->withStatus(302);
    }
}
