<?php

namespace App\Http\Controllers;

use App\Post;
use App\portfolio;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome')
            ->with('posts', Post::all())
            ->with('portfolios', portfolio::all());
    }
}
