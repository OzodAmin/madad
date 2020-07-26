<?php

namespace App\Http\Controllers\Admin;

use App\Model\News;
use App\Model\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use DataTables;
use DB;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:news-list', ['only' => ['index']]);
        $this->middleware('permission:news-create', ['only' => ['create','store']]);
        $this->middleware('permission:news-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:news-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $news = News::translatedIn('ru')->paginate(15);
        return view('admin.news.index',compact('news'));
    }

    public function create(){
        $categories = Category::translatedIn('ru')->get();
        $categoriesArray = [];
        foreach($categories as $item) {$categoriesArray[$item->id] = $item->title;}
        return view('admin.news.create',compact('categoriesArray'));
    }

    public function store(Request $request)
    {
        $this->validate($request, News::$rules);
        $request->merge(['user_id' => auth()->id()]);
        $news = new News();
        $news->fill($request->except(['_token','featured_image']));
        if ($request->hasFile('featured_image')) {
            $news->featured_image = $this->uploadPhoto( $request->file('featured_image') );
        }
        $news->save();
        return redirect()->route('news.index')->with('success','News created successfully');
    }

    public function edit($id)
    {
        $news = News::find($id);
        $categories = Category::translatedIn('ru')->get();
        $categoriesArray = [];
        foreach($categories as $item) {$categoriesArray[$item->id] = $item->title;}
        return view('admin.news.edit',compact('news','categoriesArray'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, News::$rules);
        $news = News::findOrFail($id);
        if ($request->hasFile('featured_image')) {
            unlink( public_path('uploads/news/').$news->featured_image );
            $news->featured_image = $this->uploadPhoto( $request->file('featured_image') );
        }
        $news->fill($request->except(['_token', '_method','featured_image']));
        $news->save();
        return redirect()->route('news.index')->with('success','News updated successfully');
    }

    public function show($id){}

    public function destroy($id)
    {
        $data = News::findOrFail($id);
        unlink( public_path('uploads/news/').$data->featured_image );
        $data->delete();
    }

    protected function uploadPhoto(UploadedFile $file) {
        $base_name = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $image_name = Str::slug($base_name, '_').'_'.time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('uploads/news/'), $image_name);
        return $image_name;
    }
}
