<?php
declare(strict_types=1);

use App\Entities\Record\RecordRepository;
use App\Persistence\SpreadsheetRepository;
use DI\ContainerBuilder;

return function (ContainerBuilder $containerBuilder) {
    // Here we map our UserRepository interface to its in memory implementation
    $containerBuilder->addDefinitions([
        RecordRepository::class => \DI\autowire(SpreadsheetRepository::class),
    ]);
};
