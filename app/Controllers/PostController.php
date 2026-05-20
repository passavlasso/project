<?php

namespace App\Controllers;

use App\Core\View;
use App\Repositories\PostRepository;

class PostController
{
    public function show($id)
    {
        $postRepo = new PostRepository();

        $post = $postRepo->findById($id);

        if (!$post) {
            http_response_code(404);
            echo "Post not found";
            return;
        }

        $postRepo->incrementViews($id);

        $related = $postRepo->getRelated($id, 3);

        (new View())->render('post.tpl', [
            'post' => $post,
            'related' => $related
        ]);
    }
}