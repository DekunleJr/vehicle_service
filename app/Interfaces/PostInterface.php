<?php

namespace App\Interfaces;

use App\Models\Post;

interface PostInterface
{
    public function createPost(array $data): Post;

    public function getPost(string $id): ?Post;

    public function getPosts(): array;

    public function deletePost(string $id);

    public function updatePost(string $id, array $data): Post;
}
