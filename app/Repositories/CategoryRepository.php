<?php

namespace App\Repositories;

class CategoryRepository extends BaseRepository
{
    public function getAllWithPosts(): array
    {
        $sql = "
            SELECT c.*
            FROM categories c
            INNER JOIN category_post cp ON cp.category_id = c.id
            INNER JOIN posts p ON p.id = cp.post_id
            GROUP BY c.id
        ";

        return $this->db->query($sql)->fetchAll();
    }

    public function findById(int $id): ?array
    {
        $stmt = $this->db->prepare("SELECT * FROM categories WHERE id = ?");
        $stmt->execute([$id]);

        return $stmt->fetch() ?: null;
    }
}