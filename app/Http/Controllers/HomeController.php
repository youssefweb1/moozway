<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('index');
    }
    public function faqs()
    {
        return view('faqs');
    }
    public function terms()
    {
        return view('terms');
    }
    public function project()
    {
        return view('project');
    }
    public function blogs()
    {
        return view('blog');
    }
}
