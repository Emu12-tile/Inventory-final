<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(3);
        return view('product.index', compact('products'));
        // $perPage = Request::input('perPage') ?: 5;
        // return view('product.index', [
        //     'products' => Product::query()->paginate(5),

        // ]);
    }
    public function create()
    {
        $category = Category::all();
        return view('product.create', ['category' => $category]);
    }
    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'product_name'     => 'required',

            'category_id' => 'required',
            'description' => 'required'
        ]);

        Product::create($request->all());


        return redirect('product')->with('status', 'product added successfully');
    }
    public function edit($id)
    {
        $category = Category::all();
        $product = Product::find($id);
        return view('product.edit', ['product' => $product, 'category' => $category]);
    }
    public function update(Request $request, $id)
    {
        $product = Product::find($id);


        $product->product_name = $request->Input('product_name');
        $product->category_id = $request->Input('category_id');
        $product->description = $request->Input('description');
        $product->update();


        return redirect('product')->with('status', 'product updated successfully');
    }
    public function destroy($id)
    {
        $product = Product::find($id);


        $product->delete();
        return redirect('product')->with('status', 'product  deleted successfully');
    }
}
