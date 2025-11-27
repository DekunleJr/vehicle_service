<?php
namespace App\Repository;

use App\Interfaces\CommentInterface;
use App\Models\UserAction;
use App\Models\Comment;

class CommentRepository implements CommentInterface
{
    public function createComment(array $data): Comment
    {
        // Implementation of creating a comment
        $message = "Comment created with content: " . $data['content'];
        //create log
        $newAction = new UserAction();
        $newAction->user_action = $message;
        $newAction->save();

        // Assuming Comment is a model and has a create method
        return Comment::create($data);
    }

    public function getComment(string $id): ?Comment
    {
        // Implementation of retrieving a comment
        $message = "Comment retrieved with ID: " . $id;
        //create log
        $newAction = new UserAction();
        $newAction->user_action = $message;
        $newAction->save();

        return Comment::find($id);
    }

    public function getComments(): array
    {
        // Implementation of retrieving all comments
        $message = "All comments retrieved";
        //create log
        $newAction = new UserAction();
        $newAction->user_action = $message;
        $newAction->save();

        return Comment::all()->toArray();
    }

    public function deleteComment(string $id)
    {
        // Implementation of deleting a comment
        $message = "Comment deleted with ID: " . $id;
        //create log
        $newAction = new UserAction();
        $newAction->user_action = $message;
        $newAction->save();

        return Comment::destroy($id);
    }

    public function updateComment(string $id, array $data): Comment
    {
        // Implementation of updating a comment
        $comment = Comment::find($id);
        if ($comment) {
            $comment->update($data);

            $message = "Comment updated with ID: " . $id;
            //create log
            $newAction = new UserAction();
            $newAction->user_action = $message;
            $newAction->save();
        }

        return $comment;
    }
}