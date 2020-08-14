<?php

namespace App\Http\Controllers;

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Illuminate\Http\Request;
use App\Model\Comment;
use App\Model\Consultant;
use App\Model\News;
use App\Model\Gallery;
use App\Model\Partner;
use App\Model\Project;
use App\Model\Category;
use App\Model\Faq;
use App;

class HomeController extends Controller
{
    public function index()
    {
        $lastNews = News::whereTranslation('locale', LaravelLocalization::getCurrentLocale())->orderBy('created_at', 'desc')->take(2)->get();
        $lastfourNews = News::whereTranslation('locale', LaravelLocalization::getCurrentLocale())->orderBy('created_at', 'desc')->offset(2)->limit(4)->get();
        $galleries = Gallery::whereTranslation('locale', LaravelLocalization::getCurrentLocale())->orderBy('event_date', 'desc')->take(5)->get();
        $partners = Partner::whereTranslation('locale', LaravelLocalization::getCurrentLocale())->get();
        $consultants = Consultant::orderBy('id', 'desc')->take(4)->get();
        $projects = Project::whereTranslation('locale', LaravelLocalization::getCurrentLocale())->orderBy('id', 'desc')->take(4)->get();
        // dd($projects);
        return view('pages.index',compact('lastNews','lastfourNews','galleries','partners','consultants', 'projects'));
    }

    public function consultants()
    {
        $consultants = Consultant::orderBy('id', 'desc')->get();
        return view('pages.consultants',compact('consultants'));
    }

    public function projects()
    {
        $projects = Project::whereTranslation('locale', LaravelLocalization::getCurrentLocale())->orderBy('id', 'desc')->get();
        return view('pages.project',compact('projects'));
    }

    public function news()
    {
        $lastNews = News::whereTranslation('locale', LaravelLocalization::getCurrentLocale())->orderBy('created_at', 'desc')->paginate(4);
        $mostViewedNews = News::whereTranslation('locale', LaravelLocalization::getCurrentLocale())->orderBy('view', 'desc')->take(4)->get();
        return view('pages.news',compact('lastNews','mostViewedNews'));
    }

    public function gallery()
    {
        $galleries = Gallery::whereTranslation('locale', LaravelLocalization::getCurrentLocale())->orderBy('event_date', 'desc')->get();
        return view('pages.gallery',compact('galleries'));
    }

    public function galleryImages($gallery)
    {
        $gallery = Gallery::whereTranslation('slug', $gallery)->first();
        return view('pages.galleryImages',compact('gallery'));
    }

    public function partner()
    {
        $partners = Partner::whereTranslation('locale', LaravelLocalization::getCurrentLocale())->get();
        return view('pages.partner',compact('partners'));
    }


    public function singleNews($slug)
    {
        $news = News::whereTranslation('locale', LaravelLocalization::getCurrentLocale())->whereTranslation('slug', $slug)->first();
        $news->view ++;
        $news->save();
        $mostViewedNews = News::whereTranslation('locale', LaravelLocalization::getCurrentLocale())->orderBy('view', 'desc')->take(4)->get();
        $comments = Comment::where('status', '1')->where('news_id', $news->id)->orderBy('created_at', 'desc')->get();
        return view('pages.newsShow',compact('news','mostViewedNews','comments'));
    }

    public function sitemap()
    {
        $categories = Category::whereTranslation('locale', LaravelLocalization::getCurrentLocale())->get();
        return view('pages.sitemap',compact('categories'));
    }

    public function faq()
    {
        $faqs = Faq::whereTranslation('locale', LaravelLocalization::getCurrentLocale())->get();
        return view('pages.faq',compact('faqs'));
    }

    public function comment(Request $request)
    {
        App::setLocale($request->lang);
        $message = '';
        if (empty($request->name))
            $message .= __('messages.commentNameEmpty');
        if (empty($request->email) && empty($request->phone))
            $message .= __('messages.commentContatctEmpty');
        if (empty($request->message))
            $message .= __('messages.commentMessageEmpty');

        if (empty($message)) {
            Comment::create(['name' => $request->input('name'), 'email' => $request->input('email'), 'phone' => $request->input('phone'), 'content' => $request->input('message'), 'news_id' => $request->input('news')]);
            return response()->json(['status'=>'success','message'=>'<div class="alert-success alert alert-dismissible fade show" role="alert"><strong>'.__('messages.success').'</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>']);
        }else
            return response()->json(['status'=>'failure','message'=>'<div class="alert-danger alert alert-dismissible fade show" role="alert"><strong>'.$message.'</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>']);
    }
}
