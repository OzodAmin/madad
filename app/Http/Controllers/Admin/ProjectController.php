<?php

namespace App\Http\Controllers\Admin;

use App\Model\Project;
use App\Model\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use DataTables;
use DB;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:project-list', ['only' => ['index']]);
        $this->middleware('permission:project-create', ['only' => ['create','store']]);
        $this->middleware('permission:project-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:project-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $projects = Project::translatedIn('ru')->paginate(15);
        return view('admin.project.index',compact('projects'));
    }

    public function create(){return view('admin.project.create');}

    public function store(Request $request)
    {
        $this->validate($request, Project::$rules);
        $project = new Project();
        $project->fill($request->except(['_token','featured_image']));
        if ($request->hasFile('featured_image')) {
            $project->featured_image = $this->uploadPhoto( $request->file('featured_image') );
        }
        $project->save();
        return redirect()->route('project.index')->with('success','Project created successfully');
    }

    public function edit($id)
    {
        $project = Project::find($id);
        return view('admin.project.edit',compact('project'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, Project::$rules);
        $project = Project::findOrFail($id);
        if ($request->hasFile('featured_image')) {
            unlink( public_path('uploads/project/').$project->featured_image );
            $project->featured_image = $this->uploadPhoto( $request->file('featured_image') );
        }
        $project->fill($request->except(['_token', '_method','featured_image']));
        $project->save();
        return redirect()->route('project.index')->with('success','Project updated successfully');
    }

    public function show($id){}

    public function destroy($id)
    {
        $data = Project::findOrFail($id);
        unlink( public_path('uploads/project/').$data->featured_image );
        $data->delete();
    }

    protected function uploadPhoto(UploadedFile $file) {
        $base_name = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $image_name = Str::slug($base_name, '_').'_'.time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('uploads/project/'), $image_name);
        return $image_name;
    }
}
