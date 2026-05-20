<?php

namespace App\Controllers;

use App\Core\View;
use App\Repositories\CategoryRepository;
use App\Repositories\PostRepository;

class CategoryController
{
    public function show($id)
    {
        $categoryRepo = new CategoryRepository();
        $postRepo = new PostRepository();

        $category = $categoryRepo->findById($id);

        if (!$category) {
            http_response_code(404);
            echo "Category not found";
            return;
        }

        $sort = $_GET['sort'] ?? 'date';
        $page = (int) ($_GET['page'] ?? 1);
        $limit = 5;
        $offset = ($page - 1) * $limit;

        $posts = $postRepo->getByCategory(
            $id,
            $sort,
            $limit,
            $offset
        );

        $total = $postRepo->countByCategory($id);

        $pages = ceil($total / $limit);

        (new View())->render('category.tpl', [
            'category' => $category,
            'posts' => $posts,
            'page' => $page,
            'pages' => $pages,
            'sort' => $sort
        ]);
    }
}