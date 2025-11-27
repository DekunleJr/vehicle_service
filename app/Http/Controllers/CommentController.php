<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public $commentRepository;
    public function __construct(\App\Interfaces\CommentInterface $commentRepository) {
        $this->commentRepository = $commentRepository;
    }
    public function createComment(Request $request) {
        $data = $request->all();
        return $this->commentRepository->createComment($data);
    }

    public function getComment($id) {
        return $this->commentRepository->getComment($id);
    }

    public function getComments() {
        return $this->commentRepository->getComments();
    }

    public function deleteComment($id) {
        return $this->commentRepository->deleteComment($id);
    }

    public function updateComment(Request $request, $id) {
        $data = $request->all();
        return $this->commentRepository->updateComment($id, $data);
    }
}