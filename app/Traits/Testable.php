<?php

namespace App\Traits;

trait Testable
{
    public function test()
    {
        echo $this->x;
    }
}
