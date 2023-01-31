<?php
declare(strict_types=1);

use App\Application\Actions\User\ListUsersAction;
use App\Application\Actions\User\ViewUserAction;
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



        // Using Medoo namespace.


// Connect the database.
        $database = new Medoo([
            'type' => 'pgsql',
            'host' => 'postgres',
            'database' => 'scacchieropoli',
            'username' => 'scacchieropoli',
            'password' => 'scacchieropoli'
        ]);

        $database->insert('account', [
            'user_name' => 'foo',
            'email' => 'foo@bar.com'
        ]);

        $data = $database->select('account', [
            'user_name',
            'email'
        ], [
            'user_id' => 50
        ]);


        $response->getBody()->write('Hello world!');
        return $response;
    });

    $app->group('/users', function (Group $group) {
        $group->get('', ListUsersAction::class);
        $group->get('/{id}', ViewUserAction::class);
    });
};
