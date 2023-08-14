<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index', [
            'products'=>product::paginate(10)
        ]);
    }

    public function create()
    {
        $categories = Category::orderby('name')->get();
        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' =>'required|max:225',
            'price' => 'required|regex:/^\d{1,13}(\.\d{1,4})?$/|gt:0',
            'category_id' => 'required|integer',
        ]);

        product::create($data);

        return back()->with('message', 'product created.');
    }

    public function edit(Product $product)
    {
        $categories = Category::ordeBy('name')->get();
        return view('products.edit', compact('product','categpries'));
    }

    public function update(Product $product, Request $request)
    {
        $data = $request->validate([
            'name' =>'required|max:225',
            'price' => 'required|regex:/^\d{1,13}(\.\d{1,4})?$/|gt:0',
            'category_id' => 'required|integer',
        ]);

        $product->update($data);

        return back()->with('message', 'Product updated.');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return back()->with('message', 'Product deleted.');
    }
}
