<?php

use App\Core\Database;

$db = Database::connect();

/**
 * category_id → post_id
 */
$db->exec("
    INSERT INTO category_post (category_id, post_id) VALUES
    (1, 1),
    (2, 1),

    (2, 2),
    (3, 2),

    (1, 3),
    (3, 3),

    (4, 4),
    (1, 4),

    (2, 5),
    (3, 5),

    (1, 6)
");