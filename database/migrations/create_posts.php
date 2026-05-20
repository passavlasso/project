<?php

return [
    "up" => "
        CREATE TABLE IF NOT EXISTS posts (
            id INT AUTO_INCREMENT PRIMARY KEY,
            title VARCHAR(255),
            description TEXT,
            content LONGTEXT,
            image VARCHAR(255),
            views INT DEFAULT 0,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )
    ",
    "down" => "DROP TABLE posts"
];