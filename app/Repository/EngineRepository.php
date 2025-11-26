<?php
namespace App\Repository;

use App\Interfaces\EngineInterface;

class EngineRepository implements EngineInterface
{
    public function start()
    {
        // Implementation of starting the engine
        return response()->json(['message' => 'Engine started']);
    }

    public function stop()
    {
        // Implementation of stopping the engine
        return response()->json(['message' => 'Engine stopped']);
    }
}
