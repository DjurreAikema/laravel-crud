<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
        $categories = Category::all();
        return view('home',  compact('categories'));
    }

    public function treatment()
    {
        $categories = Category::all();
        return view('treatment.index', compact('categories'));
    }

    public function contact()
    {
        $categories = Category::all();
        return view('contact.index', compact('categories'));
    }
}
