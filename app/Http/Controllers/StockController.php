<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use App\Models\Product;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $stocks = Stock::paginate(5);
        // return view('stock.index', compact('stocks'));
        return view('stock.index', compact('stocks'));
    }
    public function create()
    {
        $product = Product::all();
        return view('stock.create', ['product' => $product]);
    }
    public function store(Request $request)
    {
        // dd($request);
        $stock = new Stock;

        $stock->product_id = $request->product_id;
        $stock->count = $request->count;

        $stock->specification = $request->specification;
        $stock->user_id = auth()->user()->id;
        $stock->description = $request->description;
        $stock->save();

        return redirect('stock')->with('status', 'product added successfully');
    }
    public function edit($id)
    {

        $product = Product::all();
        $stock = Stock::find($id);
        return view('stock.edit', ['product' => $product, 'stock' => $stock]);
    }
    public function update(Request $request, $id)
    {
        $stock = Stock::find($id);


        $stock->product_id = $request->Input('product_id');
        $stock->count = $request->Input('count');
        $stock->specification = $request->Input('specification');
        $stock->description = $request->Input('description');
        $stock->update();


        return redirect('stock')->with('status', 'stock updated successfully');
    }

    public function destroy($id)
    {
        $stock = Stock::find($id);


        $stock->delete();
        return redirect('stock')->with('status', 'product  deleted successfully');
    }
}
