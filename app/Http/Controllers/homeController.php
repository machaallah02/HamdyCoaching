<?php

namespace App\Http\Controllers;

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
        return view('home.blog');
    }
}
