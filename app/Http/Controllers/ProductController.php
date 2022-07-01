<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $products= Product::all();
        return view('products.products-list',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create_products');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            "name" => "required",
            "description" => "required",
            "file" => "required",
        ]);

        $file = $request->file('file');

        $file->move(public_path('image'), $file->getClientOriginalName());

        $users = Product::create([
            'name' => $request->name,
            'image' => $file->getClientOriginalName(),
            'description' => $request->description,
        ]);

        if ($users) {
            return redirect('products')->with('success', 'Products Created');
        }
        return redirect('products')->with('error', 'Products failed.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        if ($product->delete()) {
            return redirect('products')->with('success', 'Products Created');
        }
        return redirect('products')->with('error', 'Products failed.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
      return  view('products.edit_product',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            "name" => "required",
            "description" => "required",
            "file" => "required",
        ]);

        $file = $request->file('file');

        $file->move(public_path('image'), $file->getClientOriginalName());

        $users = Product::create([
            'name' => $request->name,
            'image' => $file->getClientOriginalName(),
            'description' => $request->description,
        ]);

        if ($users) {
            return redirect('products')->with('success', 'Products Created');
        }
        return redirect('products')->with('error', 'Products failed.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
    }
}
