<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\LikeInterface;

class LikeController extends Controller
{
    //
    public $likeRepository;
    public function __construct(LikeInterface $likeRepository) {
        $this->likeRepository = $likeRepository;
    }
    public function like(int $postId, Request $request) {
        $data = $request->all();
        try {
            return $this->likeRepository->like($postId, $data);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 409);
        }
    }
    public function unlike(string $postId, Request $request) {
        return $this->likeRepository->unlike($postId, $request);
    }
}