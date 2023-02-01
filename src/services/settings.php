<?php
declare(strict_types=1);

use App\Settings\Settings;
use App\Settings\SettingsInterface;
use DI\ContainerBuilder;
use Monolog\Logger;

return function (ContainerBuilder $containerBuilder) {

    // Global Settings Object
    $containerBuilder->addDefinitions([
        SettingsInterface::class => function () {
            return new Settings([
                'displayErrorDetails' => true, // Should be set to false in production
                'logError'            => false,
                'logErrorDetails'     => false,
                'logger' => [
                    'name' => 'php-gemstone',
                    'path' => isset($_ENV['DOCKER']) ? 'php://stdout' : __DIR__ . '/../var/logs/gemstone.log',
                    'level' => Logger::DEBUG,
                ],
                'sheetbase' => [
                    'database' => '1-SQHS23HPxNoEXSss7nAMShZMz5wwM8VAd8o16X6WRs'
                ]
            ]);
        }
    ]);
};
