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
            'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'category_id' => 'required',
            'product_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'summary' => 'required',
            'description' => 'required',
        ]);

        $imageName = time() . '.' . request()->product_image->getClientOriginalName();
        // TODO Clean this up
        $requestData = $request->all();
        $requestData['product_image'] = $imageName;

        if (Product::create($requestData)) {
            request()->product_image->move(public_path('media'), $imageName);
        };

        return redirect()->route('admin.index')
            ->with('success', 'Nieuw product is aangemaakt');
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
        $product = Product::find($id);

        if (!$request->product_image){
            request()->product_image = $product->product_image;
        }

        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'product_image' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'summary' => 'required',
            'description' => 'required'
        ]);

        $product->name = $request->name;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->product_image = $request->product_image;
        $product->summary = $request->summary;
        $product->description = $request->description;
        $product->save();

        return redirect()->route('admin.index')
            ->with('success', "Wijzigingen aan {$product->name} zijn opgeslagen");
    }

    public function destroy($id)
    {
        $product = Product::find($id);

        if(file_exists("media\\" . $product->product_image)){
            @unlink("media\\" . $product->product_image);
        }

        $product->delete();
        return redirect()->route('admin.index')
            ->with('success', "{$product->name} is verwijdert");
    }
}
