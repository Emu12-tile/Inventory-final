<?php

namespace App\Http\Controllers;

use App\Models\Req;
use Illuminate\Http\Request;

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
    public function store(Request $request)
    {
        $req = new Req;

        $req->user_id = auth()->user()->id;
        $req->quantity = $request->quantity;
    }
}
