<?php

namespace App\Interfaces;

use App\Models\Comment;

interface CommentInterface
{
    //
    public function createComment(array $data): Comment;

    public function getComment(string $id): ?Comment;
    public function getComments(): array;

    public function deleteComment(string $id);

    public function updateComment(string $id, array $data): Comment;
}
