<?php

namespace App\Http\Controllers\Images;

use App\Http\Controllers\Controller;

class RandController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __invoke(int $min = 100, int $max = 150)
    {   
        $min = \rand($min, $max-1);
        return "https://picsum.photos/{$min}/{$max}";
    }

    

    //
}