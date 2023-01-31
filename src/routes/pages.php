<?php
declare(strict_types=1);

use App\Actions\Page\IndexPageAction;
use App\Application\Actions\User\ViewEntityAction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;
use Medoo\Medoo;

return function (App $app) {
    $app->get('/', IndexPageAction::class);
};
