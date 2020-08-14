<?php

namespace App\Http\Controllers\Admin;

use App\Model\GalleryImages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

class GalleryImagesController extends Controller
{
    public function __construct(){$this->middleware('auth');}

    public function index(Request $request)
    {
        $gallery = $request->gallery;
        if ($gallery) {
            $images = GalleryImages::where('gallery_id', $gallery)->get();
            return view('admin.galleryImages.index',compact('images', 'gallery'));
        }else{
            return redirect()->route('gallery.index');
        }
        
    }

    public function create(Request $request){
        $gallery_id = $request->gallery;
        return view('admin.galleryImages.create',compact('gallery_id'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'filename' => 'required',
            'filename.*' => 'image|mimes:jpeg,png,jpg,gif'
        ]);
        if($request->hasfile('filename')){
            foreach($request->file('filename') as $key => $image){
                $galleryImage = new GalleryImages();
                $galleryImage->gallery_id = $request->gallery;
                $galleryImage->title_ru = $request->title_ru[$key];
                $galleryImage->title_uz = $request->title_uz[$key];
                $galleryImage->featured_image = $this->uploadPhoto($image); 
                $galleryImage->save();
            }
            return redirect()->route('gallery-images.index',['gallery'=>$request->gallery])->with('success','Images uploaded successfully');
        }
        return back()->with('error', 'Your images has not been upload');
    }

    public function edit($id)
    {}

    public function update(Request $request, $id)
    {}

    public function show($id){}

    public function destroy($id)
    {
        $data = GalleryImages::findOrFail($id);
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
