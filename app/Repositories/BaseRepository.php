<?php

namespace App\Repositories;

use App\Core\Database;
use PDO;

class BaseRepository
{
    protected PDO $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }
}