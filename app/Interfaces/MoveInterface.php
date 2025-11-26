<?php
namespace App\Interfaces;
interface MoveInterface
{
    public function forward();

    public function reverse();

    public function accelerate();

    public function decelerate();

    public function brake();

    public function stairLeft();

    public function stairRight();
}
