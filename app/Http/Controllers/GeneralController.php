<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index(){
        $primary_article = Article::where('type', 'article')->where('status', 'active')->orderByDesc('id')->first();
        $articles = Article::where('type', 'article')->where('status', 'active')->where('id', '!=', $primary_article->id)->limit(5)->inRandomOrder()->get();
        return view('guest.index', compact('articles', 'primary_article'));
    }

    public function article_detail($slug){
        $article = Article::where('slug', $slug)->first();
        $others = Article::where('type', 'article')->where('id', '!=', $article->id)->where('status', 'active')->limit(4)->inRandomOrder()->get();
        return view('guest.articleDetail', compact('article', 'others'));
    }
}