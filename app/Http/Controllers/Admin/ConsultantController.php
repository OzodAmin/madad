<?php
namespace App\Http\Controllers\Admin;

use App\Model\Consultant;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Http\Controllers\Controller;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ConsultantController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:consultant-list', ['only' => ['index']]);
        $this->middleware('permission:consultant-create', ['only' => ['create','store']]);
        $this->middleware('permission:consultant-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:consultant-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $consultants = Consultant::paginate(15);
        return view('admin.consultant.index',compact('consultants'));
    }

    public function create(){return view('admin.consultant.create');}

    public function store(Request $request)
    {
        $this->validate($request, Consultant::$rules);
        $consultant = new Consultant();
        $consultant->fill($request->except(['_token','featured_image']));
        if ($request->hasFile('featured_image')) {
            $consultant->featured_image = $this->uploadPhoto( $request->file('featured_image') );
        }
        $consultant->save();
        return redirect()->route('consultant.index')->with('success','Consultant created successfully');
    }

    public function edit($id)
    {
        $consultant = Consultant::find($id);
        return view('admin.consultant.edit',compact('consultant'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, Consultant::$rules);
        $consultant = Consultant::findOrFail($id);
        if ($request->hasFile('featured_image')) {
            unlink( public_path('uploads/consultant/').$consultant->featured_image );
            $consultant->featured_image = $this->uploadPhoto( $request->file('featured_image') );
        }
        $consultant->fill($request->except(['_token', '_method','featured_image']));
        $consultant->save();
        return redirect()->route('consultant.index')->with('success','Consultant updated successfully');
    }

    public function show($id){}

    public function destroy($id)
    {
        $data = Consultant::findOrFail($id);
        unlink( public_path('uploads/consultant/').$data->featured_image );
        $data->delete();
    }

    protected function uploadPhoto(UploadedFile $file) {
        $base_name = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $image_name = Str::slug($base_name, '_').'_'.time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('uploads/consultant/'), $image_name);
        return $image_name;
    }
}
