<?php

namespace App\Http\Controllers;

use App\Interfaces\EngineInterface;
use Illuminate\Http\Request;

class EngineController extends Controller
{
    //
    public $engine;
    public function __construct(EngineInterface $engine) {
        $this->engine = $engine;
    }

    public function startEngine() {
        return $this->engine->start();
    }

    public function stopEngine() {
        return $this->engine->stop();
    }
}
