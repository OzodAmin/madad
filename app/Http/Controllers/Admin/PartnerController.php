<?php

namespace App\Http\Controllers\Admin;

use App\Model\Partner;
use App\Model\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use DataTables;
use DB;

class PartnerController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:partner-list', ['only' => ['index']]);
        $this->middleware('permission:partner-create', ['only' => ['create','store']]);
        $this->middleware('permission:partner-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:partner-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $partners = Partner::translatedIn('ru')->paginate(15);
        return view('admin.partner.index',compact('partners'));
    }

    public function create(){return view('admin.partner.create');}

    public function store(Request $request)
    {
        $this->validate($request, Partner::$rules);
        $partner = new Partner();
        $partner->fill($request->except(['_token','featured_image']));
        if ($request->hasFile('featured_image')) {
            $partner->featured_image = $this->uploadPhoto( $request->file('featured_image') );
        }
        $partner->save();
        return redirect()->route('partner.index')->with('success','Partner created successfully');
    }

    public function edit($id)
    {
        $partner = Partner::find($id);
        return view('admin.partner.edit',compact('partner'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, Partner::$rules);
        $partner = Partner::findOrFail($id);
        if ($request->hasFile('featured_image')) {
            unlink( public_path('uploads/partner/').$partner->featured_image );
            $partner->featured_image = $this->uploadPhoto( $request->file('featured_image') );
        }
        $partner->fill($request->except(['_token', '_method','featured_image']));
        $partner->save();
        return redirect()->route('partner.index')->with('success','Partner updated successfully');
    }

    public function show($id){}

    public function destroy($id)
    {
        $data = Partner::findOrFail($id);
        unlink( public_path('uploads/partner/').$data->featured_image );
        $data->delete();
    }

    protected function uploadPhoto(UploadedFile $file) {
        $base_name = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $image_name = Str::slug($base_name, '_').'_'.time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('uploads/partner/'), $image_name);
        return $image_name;
    }
}
