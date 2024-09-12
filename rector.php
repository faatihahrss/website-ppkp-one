<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;

return static function (RectorConfig $rectorConfig): void {
    // Specify the paths to your CodeIgniter project
    $rectorConfig->paths([
        __DIR__ . '/application',
    ]);

    // Apply PHP 8.2 rule set
    $rectorConfig->import(LevelSetList::UP_TO_PHP_82);

    // Auto-load the autoload.php
    $rectorConfig->autoloadPaths([
        __DIR__ . '/vendor/autoload.php',
    ]);
};