<?php

namespace App\Http\Controllers;

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Illuminate\Http\Request;
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
}
