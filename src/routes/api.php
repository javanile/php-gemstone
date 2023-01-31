<?php
declare(strict_types=1);

use App\Application\Actions\User\ListEntitiesAction;
use App\Application\Actions\User\ViewEntityAction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;
use Medoo\Medoo;

return function (App $app) {
    $app->options('/{routes:.*}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    });

    $app->get('/', function (Request $request, Response $response) {

        $response->getBody()->write('Hello world!');

        return $response;
    });

    $app->group('/users', function (Group $group) {
        $group->get('', ListEntitiesAction::class);
        $group->get('/{id}', ViewEntityAction::class);
    });
};
