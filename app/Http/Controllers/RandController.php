<?php

namespace App\Http\Controllers;

class RandController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __invoke(int $min = 1, int $max = 100)
    {
        return \rand($min, $max);
    }

    

    //
}