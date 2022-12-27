<?php

namespace App\Http\Controllers;

use App\Models\Req;
use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ReqController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $status = DB::table('statuses')->get();
        $reqs = Req::paginate(5);
        return view('req.index', compact('reqs', 'status'));
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
// dd($request);
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
    public function changeStatus(Request $request)
    {
        if ($request->ajax()) {
            $item = Req::find($request->item);

            if ($item) {
                $item->dept_status = $request->status;
                // $item->store_status = $request->status;
                $item->update();

                return response()->json(array("success" => true));
            }
        }
    }
    public function chanStatus(Request $request)
    {
        if ($request->ajax()) {
            $item = Req::find($request->item);

            if ($item) {
                // $item->dept_status = $request->status;
                $item->store_status = $request->status;
                $item->update();

                return response()->json(array("success" => true));
            }
        }
    }
}
