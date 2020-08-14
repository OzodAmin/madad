<?php

namespace App\Http\Controllers\Admin;

use App\Model\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:gallery-list', ['only' => ['index']]);
        $this->middleware('permission:gallery-create', ['only' => ['create','store']]);
        $this->middleware('permission:gallery-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:gallery-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $galleries = Gallery::translatedIn('ru')->paginate(15);
        return view('admin.gallery.index',compact('galleries'));
    }

    public function create(){return view('admin.gallery.create');}

    public function store(Request $request)
    {
        $this->validate($request, Gallery::$rules);
        $gallery = new Gallery();
        $gallery->fill($request->except(['_token','featured_image']));
        if ($request->hasFile('featured_image')) {
            $gallery->featured_image = $this->uploadPhoto( $request->file('featured_image') );
        }
        $gallery->save();
        return redirect()->route('gallery.index')->with('success','Gallery created successfully');
    }

    public function edit($id)
    {
        $gallery = Gallery::find($id);
        return view('admin.gallery.edit',compact('gallery'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, Gallery::$rules);
        $gallery = Gallery::findOrFail($id);
        if ($request->hasFile('featured_image')) {
            unlink( public_path('uploads/gallery/').$gallery->featured_image );
            $gallery->featured_image = $this->uploadPhoto( $request->file('featured_image') );
        }
        $gallery->fill($request->except(['_token', '_method','featured_image']));
        $gallery->save();
        return redirect()->route('gallery.index')->with('success','Gallery updated successfully');
    }

    public function show($id){}

    public function destroy($id)
    {
        $data = Gallery::findOrFail($id);
        unlink( public_path('uploads/gallery/').$data->featured_image );
        $data->delete();
    }

    protected function uploadPhoto(UploadedFile $file) {
        $base_name = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $image_name = Str::slug($base_name, '_').'_'.time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('uploads/gallery/'), $image_name);
        return $image_name;
    }
}
