<?php

namespace App\Http\Controllers;

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Illuminate\Http\Request;
use App\Model\Comment;
use App\Model\News;
use App\Model\Category;

class HomeController extends Controller
{
    public function news()
    {
        $lastNews = News::whereTranslation('locale', LaravelLocalization::getCurrentLocale())->orderBy('created_at', 'desc')->paginate(4);
        $mostViewedNews = News::whereTranslation('locale', LaravelLocalization::getCurrentLocale())->orderBy('view', 'desc')->take(4)->get();
        return view('pages.news',compact('lastNews','mostViewedNews'));
    }

    public function singleNews($slug)
    {
        $news = News::whereTranslation('locale', LaravelLocalization::getCurrentLocale())->whereTranslation('slug', $slug)->first();
        $news->view ++;
        $news->save();
        $mostViewedNews = News::whereTranslation('locale', LaravelLocalization::getCurrentLocale())->orderBy('view', 'desc')->take(4)->get();
        return view('pages.newsShow',compact('news','mostViewedNews'));
    }

    public function sitemap()
    {
        $categories = Category::whereTranslation('locale', LaravelLocalization::getCurrentLocale())->get();
        return view('pages.sitemap',compact('categories'));
    }

    public function comment(Request $request)
    {
        $message = '';
        if (empty($request->name))
            $message .= trans('messages.commentNameEmpty');
        if (empty($request->message))
            $message .= trans('messages.commentMessageEmpty');
        if (empty($request->email) && empty($request->phone))
            $message .= trans('messages.commentContatctEmpty');

        if (empty($message)) {
            return response()->json(['status'=>'success','message'=>'<div class="alert-success alert alert-dismissible fade show" role="alert"><strong>'.trans('messages.success').'</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>']);
        }else
            return response()->json(['status'=>'failure','message'=>'<div class="alert-danger alert alert-dismissible fade show" role="alert"><strong>'.$message.'</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>']);
    }
}
