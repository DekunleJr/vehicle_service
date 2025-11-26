<?php

namespace App\Http\Controllers;

use App\Interfaces\MoveInterface;
use Illuminate\Http\Request;

class MoveController extends Controller
{
    //
    public $movement;
    public function __construct(MoveInterface $movement) {
        $this->movement = $movement;
    }

    public function forward() {
        return $this->movement->forward();
    }

    public function reverse() {
        return $this->movement->reverse();
    }

    public function accelerate() {
        return $this->movement->accelerate();
    }

    public function decelerate() {
        return $this->movement->decelerate();
    }
    public function brake() {
        return $this->movement->brake();
    }
    public function stairLeft() {
        return $this->movement->stairLeft();
    }
    public function stairRight() {
        return $this->movement->stairRight();
    }
}
