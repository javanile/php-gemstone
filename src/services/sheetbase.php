<?php
declare(strict_types=1);

use App\Settings\SettingsInterface;
use App\Persistence\SheetbaseInterface;
use Javanile\Sheetbase\Database;
use DI\ContainerBuilder;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Monolog\Processor\UidProcessor;
use Psr\Container\ContainerInterface;

use Psr\Log\LoggerInterface;

return function (ContainerBuilder $containerBuilder) {
    $containerBuilder->addDefinitions([
        SheetbaseInterface::class => function (ContainerInterface $c) {
            $settings = $c->get(SettingsInterface::class);

            $sheetbaseSettings = $settings->get('sheetbase');
            $sheetbase = new Database($sheetbaseSettings);

            return $sheetbase;
        },
    ]);
};
