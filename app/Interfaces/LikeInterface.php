<?php

namespace App\Interfaces;
use App\Models\Like;
use Illuminate\Http\Request;

interface LikeInterface
{
    //
    public function like(string $postId, array $data): Like;
    public function unlike(string $postId, Request $request);

}
