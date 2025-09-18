<?php

namespace App\Http\Controllers;

use Illuminate\View\Factory;
use Illuminate\View\View;

class WelcomeController extends Controller
{
    public function showIndex(): View | Factory {
        return view('welcome');
    }
}

