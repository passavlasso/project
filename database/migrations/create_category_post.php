<?php

return [
    "up" => "
        CREATE TABLE IF NOT EXISTS category_post (
            category_id INT,
            post_id INT
        )
    ",
    "down" => "DROP TABLE category_post"
];