<?php

use App\Core\Database;

$db = Database::connect();

$db->exec("
    INSERT INTO categories (name, description) VALUES
    ('Tech', 'Tech news'),
    ('PHP', 'PHP articles'),
    ('Laravel', 'Laravel tips'),
    ('DevOps', 'DevOps stuff')
");