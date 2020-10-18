<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function renderHome()
    {
        return view('pages.home');
    }
}
