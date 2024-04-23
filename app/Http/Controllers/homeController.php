<?php

namespace App\Http\Controllers;

use App\Models\Article;

class homeController extends Controller
{
    //
    public function home()
    {
        return view('home.home');
    }
    public function about()
    {
        return view('home.about');
    }
    public function contact()
    {
        return view('home.contact');
    }
    public function dashboard()
    {
        return view('home.dashboard');
    }
    public function coaching()
    {
        return view('home.coaching');
    }
    public function coaching1()
    {
        return view('home.coaching1');
    }
    public function coaching2()
    {
        return view('home.coaching2');
    }
    public function blog()
    {
        $articles= Article::orderBy('created_at', 'desc')->paginate(10);
        return view('home.blog', compact('articles'));
    }

    public function temoin()
    {
        return view('home.temoignage');
    }
}
