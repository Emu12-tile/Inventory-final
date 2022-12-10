<?php

namespace App\Http\Controllers;

use App\Models\Req;
use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReqController extends Controller
{
    public function index()
    {
        $reqs = Req::paginate(5);
        return view('req.index', compact('reqs'));
    }
    public function create()
    {
        return view('req.create');
    }
    public function createReq($prod_id)
    {
        // dd($prod_id);
        //TODO check $prod_id is number
        return view('req.create', ['id' => $prod_id]);
    }
    public function store(Request $request)
    {
        // stock product id
        // product name

        $req = new Req;

        $req->user_id = auth()->user()->id;
        $req->quantity = $request->quantity;
        $req->save();

        return redirect('req')->with('status', 'request added successfully');
    }
    public function storeRestore(Request $request, $prod_id)
    {
        // stock product id
        // product name
        // dd($prod_id);
        $prod = Stock::findOrFail($prod_id);
        // dd($prod);

        $req = new Req;


        $req->user_id = auth()->user()->id;
        $req->quantity = $request->quantity;
        $req->stock_id = $prod->id;

        $req->save();

        return redirect('req')->with('status', 'request added successfully');
    }
}
