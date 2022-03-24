<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CreateCategoryRequest;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('category.list', compact('categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('category.add', compact('categories'));
    }

    public function store(CreateCategoryRequest $request)
    {
        $categorie = new Category();
        $categorie->name = $request->name;
        $categorie->status = $request->status;
        $categorie->save();
        return redirect()->route('index.category');
    }

    public function edit($id)
    {
        $categorie = Category::findOrFail($id);
        return view('category.update', compact('categorie'));
    }

    public function update(Request $request, $id)
    {
        $categorie = Category::findOrFail($id);
        $categorie->name = $request->name;
        $categorie->status = $request->status;
        $categorie->save();
        return redirect()->route('index.category');
    }

    public function destroy($id)
    {
        $categories = Category::findOrFail($id);
        $categories->delete();
        return redirect()->route('index.category');
    }
}
