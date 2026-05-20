<?php

namespace App\Controllers;

use App\Core\Database;

class HomeController
{
    public function index()
    {
        $db = Database::connect();
        $result = $db->query("SELECT 1 as test")->fetch();

        var_dump($result);
    }

}