<?php

namespace App\Http\Controllers\Admin;

use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DataTables;
use DB;

class PermissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:permission-list', ['only' => ['index']]);
        $this->middleware('permission:permission-create', ['only' => ['create','store']]);
        $this->middleware('permission:permission-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:permission-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $permissions = Permission::orderBy('title', 'asc')->paginate(15);
        return view('admin.permission.index',compact('permissions'));
    }

    public function create(){return view('admin.permission.create');}

    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required|unique:roles,name']);
        Permission::create(['name' => $request->input('name'),'title' => $request->input('title')]);
        return redirect()->route('permission.index')->with('success','Permission created successfully');
    }

    public function edit($id)
    {
        $permission = Permission::find($id);
        return view('admin.permission.edit',compact('permission'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, ['name' => 'required',]);
        $permission = Permission::find($id);
        $permission->name = $request->input('name');
        $permission->title = $request->input('title');
        $permission->save();
        return redirect()->route('permission.index')->with('success','Permission updated successfully');
    }

    public function show($id){}

    public function destroy($id)
    {
        $data = Permission::findOrFail($id);
        $data->delete();
    }
}
