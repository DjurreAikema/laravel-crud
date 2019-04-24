<?php

namespace App\Http\Controllers;

use App\Category;
use Faker\Provider\File;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(10);
        $categories = Category::all();
        return view('product.index', compact('products', 'categories'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function create()
    {
        $categories = Category::all();
        return view('product.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'product_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        $imageName = time() . '.' . request()->product_image->getClientOriginalName();
        request()->product_image->move(public_path('media'), $imageName);

        $requestData = $request->all();
        $requestData['product_image'] = $imageName;

        Product::create($requestData);
        return redirect()->route('product.index')
            ->with('success', 'New product created');
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('product.detail', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        return view('product.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'category_id' => 'required'
        ]);

        $product = Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->save();

        return redirect()->route('product.index')
            ->with('success', 'Product has been updated');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        Storage::delete(public_path('media') . "\\" . $product->product_image);
        dd(public_path('media') . "\\" . $product->product_image);

        $product->delete();
        return redirect()->route('product.index')
            ->with('success', "{$product->name} has been deleted");
    }
}
