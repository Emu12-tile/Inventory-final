<?php

namespace App\Http\Controllers;

use App\Models\StockOut;
use Illuminate\Http\Request;

class StockOutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $stockOut = StockOut::paginate(5);
        return view('stockOut.index', compact('stockOut'));
    }
    public function create()
    {
        return view('stockOut.create');
    }
    public function createStockOut($stock_id)
    {
        // dd($stock_id);
        //TODO check $prod_id is number
        return view('stockOut.create', ['id' => $stock_id]);
    }
    public function store(Request $request)
    {
        // stock product id
        // product name
        dd($request);
        $stock_out = new StockOut;

        // $stock_out->user_id = auth()->user()->id;
        $stock_out->count = $request->count;
        $stock_out->save();

        return redirect('stock-out')->with('status', 'request added successfully');
    }
    public function storeRestore(Request $request, $stock_id)
    {
        // stock product id
        // product name
        // dd($stock_id);
        $prod = StockOut::findOrFail($stock_id);
        dd($prod);

        $stock_out = new StockOut();


        // $stock_out->user_id = auth()->user()->id;
        $stock_out->count = $request->count;
        $stock_out->req_id = $prod->id;

        $stock_out->save();

        return redirect('stock-out')->with('status', 'request added successfully');
    }
}
