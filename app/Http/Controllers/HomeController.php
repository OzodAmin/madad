<?php

namespace App\Http\Controllers;

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Illuminate\Http\Request;
use App\Model\Comment;
use App\Model\News;
use App\Model\Category;
use App;

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
        $comments = Comment::where('status', '1')->where('news_id', $news->id)->orderBy('created_at', 'desc')->get();
        return view('pages.newsShow',compact('news','mostViewedNews','comments'));
    }

    public function sitemap()
    {
        $categories = Category::whereTranslation('locale', LaravelLocalization::getCurrentLocale())->get();
        return view('pages.sitemap',compact('categories'));
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
