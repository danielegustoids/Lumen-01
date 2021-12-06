<?php

namespace App\Http\Controllers;

class GeneralController extends Controller
{
    public function __invoke()
    {   
        return 'GeneralController';
    }

    public function method()
    {
        return 'GeneralController::method';
    }

}