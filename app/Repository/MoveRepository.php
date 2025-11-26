<?php
namespace App\Repository;

use App\Interfaces\MoveInterface;
use App\Models\UserAction;

class MoveRepository implements MoveInterface
{
    public function forward()
    {
        // Implementation of moving forward
        $message = "Vehicle moving forward";
        //create log
        $newAction = new UserAction(); //here you are create an instance of the model UserAction
        $newAction->user_action = $message;
        $newAction->save();
        return response()->json(['message' => 'Moving forward']);
    }

    public function reverse()
    {
        // Implementation of reversing
        $message = "Vehicle reversing";
        //create log
        $newAction = new UserAction(); //here you are create an instance of the model UserAction
        $newAction->user_action = $message;
        $newAction->save();
        return response()->json(['message' => 'Reversing']);
    }

    public function accelerate()
    {
        // Implementation of accelerating
        $message = "Vehicle accelerating";
        //create log
        $newAction = new UserAction(); //here you are create an instance of the model UserAction
        $newAction->user_action = $message;
        $newAction->save();
        return response()->json(['message' => 'Accelerating']);
    }

    public function decelerate()
    {
        // Implementation of decelerating
        $message = "Vehicle decelerating";
        //create log
        $newAction = new UserAction(); //here you are create an instance of the model UserAction
        $newAction->user_action = $message;
        $newAction->save();
        return response()->json(['message' => 'Decelerating']);
    }

    public function brake()
    {
        // Implementation of the brake system
        $message = "Vehicle braking";
        //create log
        $newAction = new UserAction(); //here you are create an instance of the model UserAction
        $newAction->user_action = $message;
        $newAction->save();
        return response()->json(['message' => 'Braking']);
    }

    public function stairLeft()
    {
        // Implementation of stairing left
        $message = "Vehicle stairing left";
        //create log
        $newAction = new UserAction(); //here you are create an instance of the model UserAction
        $newAction->user_action = $message;
        $newAction->save();
        return response()->json(['message' => 'Stairing left']);
    }

    public function stairRight()
    {
        // Implementation of stairing right
        $message = "Vehicle stairing right";
        //create log
        $newAction = new UserAction(); //here you are create an instance of the model UserAction
        $newAction->user_action = $message;
        $newAction->save();
        return response()->json(['message' => 'Stairing right']);
    }
}