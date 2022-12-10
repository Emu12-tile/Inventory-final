<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Support\Facades\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        //    $perPage = Request::input('perPage') ?: 5;
        //         return view('deparment.index', [
        //             'staffs' => staff::query()->paginate(5),

        //         ]);
        // return view('department.index');
    }
}
