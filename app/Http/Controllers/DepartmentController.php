<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Support\Facades\Request;

class DepartmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $departments = Department::paginate(5);
        return view('department.index', compact('departments'));
    }
    public function create()
    {


        // $user = DB::table('users')->get();
        return view('department.create');
    }
    public function store(Request $request)
    {
        // dd($request);
        $department = new Department;
        $department->name = $request->Input('name');
        $department->user_id = auth()->user()->id;
        $department->save();
        return redirect('department')->with('status', 'department added successfully');
    }
    public function edit($id)
    {

        $department = Department::find($id);
        return view('department.edit', ['department' => $department]);
    }
    public function update(Request $request, $id)
    {
        $department = Department::find($id);



        $department->name = $request->Input('name');
        $department->update();


        return redirect('department')->with('status', 'department updated successfully');
    }
    public function destroy($id)
    {
        $department = Department::find($id);


        $department->delete();
        return redirect('department')->with('status', 'product  deleted successfully');
    }
}
