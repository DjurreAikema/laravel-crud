<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
        $products = Product::latest()->paginate(10);
        $categories = Category::all();
        return view('admin.index', compact('products', 'categories'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }


    public function categoryShow($id)
    {
        $category = Category::find($id);
        $other_categories = Category::where('name', '!=', $category->name)->get();
        $products = Product::where('category_id', $category->id)->latest()->paginate(10);

        return view('admin.category_detail', compact('category', 'products', 'other_categories'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }
}
