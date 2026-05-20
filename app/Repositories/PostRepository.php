<?php

namespace App\Repositories;

class PostRepository extends BaseRepository
{
    public function getLatestByCategory(int $categoryId, int $limit = 3): array
    {
        $sql = "
            SELECT p.*
            FROM posts p
            INNER JOIN category_post cp ON cp.post_id = p.id
            WHERE cp.category_id = ?
            ORDER BY p.created_at DESC
            LIMIT $limit
        ";

        $stmt = $this->db->prepare($sql);
        $stmt->execute([$categoryId]);

        return $stmt->fetchAll();
    }

    public function findById(int $id): ?array
    {
        $stmt = $this->db->prepare("SELECT * FROM posts WHERE id = ?");
        $stmt->execute([$id]);

        return $stmt->fetch() ?: null;
    }

    public function incrementViews(int $id): void
    {
        $stmt = $this->db->prepare("
            UPDATE posts SET views = views + 1 WHERE id = ?
        ");

        $stmt->execute([$id]);
    }

    public function getRelated(int $postId, int $limit = 3): array
    {
        $sql = "
            SELECT p2.*
            FROM posts p1
            JOIN category_post cp1 ON cp1.post_id = p1.id
            JOIN category_post cp2 ON cp2.category_id = cp1.category_id
            JOIN posts p2 ON p2.id = cp2.post_id
            WHERE p1.id = ?
              AND p2.id != p1.id
            GROUP BY p2.id
            LIMIT $limit
        ";

        $stmt = $this->db->prepare($sql);
        $stmt->execute([$postId]);

        return $stmt->fetchAll();
    }
}