<?php

namespace App\Controllers;

use App\Core\View;
use App\Repositories\CategoryRepository;
use App\Repositories\PostRepository;

class HomeController
{
    public function index()
    {
        $categoryRepo = new CategoryRepository();
        $postRepo = new PostRepository();

        $categories = $categoryRepo->getAllWithPosts();

        $data = [];

        foreach ($categories as $category) {
            $data[] = [
                'category' => $category,
                'posts' => $postRepo->getLatestByCategory($category['id'], 3)
            ];
        }

        (new View())->render('home.tpl', [
            'data' => $data
        ]);
    }

}