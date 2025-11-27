<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\PostInterface;

class PostController extends Controller
{
    //
    public $postRepository;
    public function __construct(PostInterface $postRepository) {
        $this->postRepository = $postRepository;
    }
    public function createPost(Request $request) {
        $data = $request->all();
        return $this->postRepository->createPost($data);
    }

    public function getPost($id) {
        return $this->postRepository->getPost($id);
    }

    public function getPosts() {
        return $this->postRepository->getPosts();
    }

    public function deletePost($id) {
        return $this->postRepository->deletePost($id);
    }
    
    public function updatePost(Request $request, $id) {
        $data = $request->all();
        return $this->postRepository->updatePost($id, $data);
    }
}
