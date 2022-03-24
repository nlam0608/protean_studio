<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\CreateProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product.list', compact('products'));
    }

    public function create()
    {
        $products = Product::all();
        return view('product.add', compact('products'));
    }

    public function store(CreateProductRequest $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->category = $request->category;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $product->image = $path;
        }
        $product->status = $request->status;
        $product->save();
        return redirect()->route('index.product');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('product.update', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->category = $request->category;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $product->image = $path;

        }
        $product->status = $request->status;
        $product->save();
        return redirect()->route('index.product');
    }

    public function destroy(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('index.product');
    }

    
}
