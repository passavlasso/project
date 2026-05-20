<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\Database;

$db = Database::connect();

$migrations = glob(__DIR__ . '/migrations/*.php');

foreach ($migrations as $file) {
    $migration = require $file;

    echo "Running: $file\n";

    $db->exec($migration['up']);
}

echo "Migrations done!\n";