<?php
namespace App\Repository;

use App\Interfaces\LikeInterface;
use App\Models\UserAction;
use App\Models\Like;
use Illuminate\Http\Request;

class LikeRepository implements LikeInterface
{
    public function like(string $postId, array $data): Like
    {
        // $data should contain: ['user_id' => ...]
        $userId = $data['user_id'];

        // Check if the user already liked this post
        $existingLike = Like::where('user_id', $userId)
                            ->where('post_id', $postId)
                            ->first();

        if ($existingLike) {
            throw new \Exception("You have already liked this post");
        }

        // Log user action
        $message = "User {$userId} liked post with ID: {$postId}";
        $newAction = new UserAction();
        $newAction->user_action = $message;
        $newAction->save();

        // Create new like
        return Like::create([
            'user_id' => $userId,
            'post_id' => $postId,
        ]);
    }

    public function unlike(string $postId, Request $request)
    {
        // Validate that user_id exists in the request
        $request->validate([
            'user_id' => 'required|integer'
        ]);

        $userId = $request->user_id;

        // Find the like entry that matches this post + user
        $like = Like::where('post_id', $postId)
                    ->where('user_id', $userId)
                    ->first();

        if (!$like) {
            return response()->json([
                'message' => "User {$userId} has not liked post {$postId}."
            ], 404);
        }

        // Log action
        $message = "User {$userId} unliked post with ID: {$postId}";
        $newAction = new UserAction();
        $newAction->user_action = $message;
        $newAction->save();

        // Delete the like
        $like->delete();

        return response()->json([
            "message" => "Post unliked successfully."
        ]);
    }

}