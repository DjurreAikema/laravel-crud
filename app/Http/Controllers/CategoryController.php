<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->paginate(10);
        return view('category.index', compact('categories'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Category::create($request->all());
        return redirect()->route('category.index')
            ->with('success', 'New category created');
    }

    public function show($id)
    {
        $category = Category::find($id);
        $other_categories = Category::where('name', '!=', $category->name)->get();
        $products = Product::where('category_id', $category->id)->latest()->paginate(10);

        return view('category.detail', compact('category', 'products', 'other_categories'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();

        return redirect()->route('category.index')
            ->with('success', 'Category has been updated');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('category.index')
            ->with('success', "{$category->name} has been deleted");
    }
}
