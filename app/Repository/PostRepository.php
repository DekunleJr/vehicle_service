<?php
namespace App\Repository;

use App\Interfaces\PostInterface;
use App\Models\UserAction;
use App\Models\Post;

class PostRepository implements PostInterface
{
    public function createPost(array $data): Post
    {
        // Implementation of creating a post
        $message = "Post created with title: " . $data['title'];
        //create log
        $newAction = new UserAction();
        $newAction->user_action = $message;
        $newAction->save();

        // Assuming Post is a model and has a create method
        return Post::create($data);
    }

    public function getPost(string $id): ?Post
    {
        // Implementation of retrieving a post
        $message = "Post retrieved with ID: " . $id;
        //create log
        $newAction = new UserAction();
        $newAction->user_action = $message;
        $newAction->save();

        return Post::with('comments')->find($id);
    }

    public function getPosts(): array
    {
        // Implementation of retrieving all posts
        $message = "All posts retrieved";
        //create log
        $newAction = new UserAction();
        $newAction->user_action = $message;
        $newAction->save();

        return Post::all()->toArray();
    }

    public function deletePost(string $id)
    {
        // Implementation of deleting a post
        $message = "Post deleted with ID: " . $id;
        //create log
        $newAction = new UserAction();
        $newAction->user_action = $message;
        $newAction->save();

        return Post::destroy($id);
    }

    public function updatePost(string $id, array $data): Post
    {
        // Implementation of updating a post
        $post = Post::find($id);
        if ($post) {
            $post->update($data);

            $message = "Post updated with ID: " . $id;
            //create log
            $newAction = new UserAction();
            $newAction->user_action = $message;
            $newAction->save();
        }

        return $post::with('comments')->find($id);
    }
}