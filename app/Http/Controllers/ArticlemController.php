<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Controllers\Controller;

class ArticlemController extends Controller
{
    public function vue(){

        return view('home.blog', ['articles' => Article::orderBy('created_at', 'desc')->paginate(2),]);
    }
}
