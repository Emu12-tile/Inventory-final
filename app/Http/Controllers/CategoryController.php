<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Symfony\Polyfill\Intl\Idn\Idn;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\storeCategoryRequest;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        // $categories = Category::latest()->paginate(5);

        // return view('category.index', compact('categories'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);
        $perPage = Request::input('perPage') ?: 5;
        return view('category.index', [
            'categories' => Category::query()->paginate(5),

        ]);
    }
    public function create()
    {
        return view('category.create');
    }
    public function store(storeCategoryRequest $request)
    {

        Category::create($request->all());
        return redirect('category')->with('status', 'category added successfully');
    }
    public function edit($id)
    {
        $category = category::find($id);
        return view('category.edit', compact('category'));
    }
    public function update()
    {
        // $category = Category::find($id);


        // $category->category_name = $request->Input('category_name');
        // $category->update();

        // return redirect('category')->with('status', 'category updated successfully');
    }
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index')->with('success', 'category has been deleted successfully');
    }
}
