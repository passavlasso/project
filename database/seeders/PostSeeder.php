<?php

use App\Core\Database;

$db = Database::connect();

/**
 * Вставляємо пости
 */
$db->exec("
    INSERT INTO posts (title, description, content, image, views, created_at) VALUES
    ('PHP Basics', 'Intro to PHP', 'Full PHP content here...', '/assets/images/posts/php1.jpg', 120, NOW()),
    ('OOP in PHP', 'Object oriented programming', 'OOP content...', '/assets/images/posts/php2.png', 250, NOW()),
    ('MySQL Tips', 'Database tips', 'MySQL content...', '/assets/images/posts/sql1.jpg', 90, NOW()),
    ('Docker for Devs', 'Docker basics', 'Docker content...', '/assets/images/posts/docker1.png', 300, NOW()),
    ('Laravel vs Vanilla PHP', 'Comparison', 'Comparison content...', '/assets/images/posts/laravel1.png', 500, NOW()),
    ('REST API Basics', 'API intro', 'API content...', '/assets/images/posts/api1.png', 180, NOW())
");