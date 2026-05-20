<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\Database;

$db = Database::connect();

require __DIR__ . '/seeders/CategorySeeder.php';
require __DIR__ . '/seeders/PostSeeder.php';
require __DIR__ . '/seeders/CategoryPostSeeder.php';

echo "Seeding done!\n";