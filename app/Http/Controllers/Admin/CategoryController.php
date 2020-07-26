<?php

namespace App\Http\Controllers\Admin;

use App\Model\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\UploadedFile;
use DataTables;
use DB;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:category-list', ['only' => ['index']]);
        $this->middleware('permission:category-create', ['only' => ['create','store']]);
        $this->middleware('permission:category-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:category-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $categories = Category::translatedIn('ru')->paginate(15);
        return view('admin.category.index',compact('categories'));
    }

    public function create(){return view('admin.category.create');}

    public function store(Request $request)
    {
        $this->validate($request, Category::$rules);
        $category = new Category();
        $category->fill($request->except(['_token']));
        $category->save();
        return redirect()->route('category.index')->with('success','Category created successfully');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit',compact('category'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, Category::$rules);
        $category = Category::findOrFail($id);
        $category->update($request->except(['_token', '_method'])); 
        return redirect()->route('category.index')->with('success','Category updated successfully');
    }

    public function show($id){}

    public function destroy($id)
    {
        $data = Category::findOrFail($id);
        $data->delete();
    }
}
