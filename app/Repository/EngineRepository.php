<?php
namespace App\Repository;

use App\Interfaces\EngineInterface;
use App\Models\UserAction;

class EngineRepository implements EngineInterface
{
    public function start()
    {
        // Implementation of starting the engine
        $message = "Driver started engine";
        //create log
        $newAction = new UserAction(); //here you are create an instance of the model UserAction
        $newAction->user_action = $message;
        $newAction->save();
        return response()->json(['message' => 'Engine started']);
    }

    public function stop()
    {
        // Implementation of stopping the engine
        $message = "Driver stopped the engine";
        //create log
        $newAction = new UserAction(); //here you are create an instance of the model UserAction
        $newAction->user_action = $message;
        $newAction->save();
        return response()->json(['message' => 'Engine stopped']);
    }
}
