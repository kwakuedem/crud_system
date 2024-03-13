<?php

namespace App\Http\Controllers\crud;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //function to get the product count
    public function index()
    {
        $productCount = Product::all()->count();
        return view('crud.dashboard.index', ['productCount' => $productCount]);
    }

    //get the create product form
    public function create()
    {
        return view('crud.dashboard.create');
    }

    //function to store product
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:products|max:100',
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required'
        ]);

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'quantity' => $request->quantity
        ]);
        return redirect()->route('product')->with('success', 'Product Created Successfully');
    }

    //fetch all products function
    public function products()
    {
        $products = ProductResource::collection(Product::orderBy('created_at', 'desc')->paginate(8));
        return view('crud.dashboard.products', compact('products'));
    }


    //get the edit form
    public function edit(Product $product)
    {
        return view('crud.dashboard.edit', ['product' => $product]);
    }


    //update product function
    public function update(Request $request, Product $product)
    {
        $validatedData = $this->validate($request, [
            'name' => 'required|max:100',
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required'
        ]);

        $product->update($validatedData);
        session()->flash('success', 'Product Update Successfully');
        return redirect()->route('show', ['product' => $product]);
    }


    //show a product function
    public function show(Product $product)
    {
        return view('crud.dashboard.show', ['product' => $product]);
    }

    //delete a product function
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product');
    }
}
