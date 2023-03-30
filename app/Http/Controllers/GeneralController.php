<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Client;
use App\Models\Offer;
use App\Models\Subscribe;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GeneralController extends Controller
{
    public function index(){
        $primary_article = Article::where('type', 'article')->where('status', 'active')->orderByDesc('id')->first();
        $articles = Article::where('type', 'article')->where('status', 'active')->where('id', '!=', $primary_article->id)->limit(5)->inRandomOrder()->get();
        $clients = Client::where('status', 'active')->orderBy('id')->get();
        $testimonials = Testimonial::where('status', 'active')->orderBy('id')->get();
        // Default by Riyanti
        // return view('guest.index', compact('articles', 'primary_article', 'clients', 'testimonials'));

        // Akong
        return view('guest.akong2', compact('articles', 'primary_article', 'clients', 'testimonials'));
    }

    public function article(){
        $primary = Article::where('type', 'article')->where('status', 'active')->first();
        $data = Article::where('type', 'article')->where('id', '!=', $primary->id)->where('status', 'active')->orderByDesc('id')->get();
        return view('guest.article', compact('primary', 'data'));
    }

    public function article_detail($slug){
        $article = Article::where('slug', $slug)->first();
        $others = Article::where('type', 'article')->where('id', '!=', $article->id)->where('status', 'active')->limit(4)->inRandomOrder()->get();
        return view('guest.articleDetail', compact('article', 'others'));
    }

    public function subscribe(Request $request){
        $subs = Subscribe::create([
            'email' => $request->email,
            'name' => $request->name,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        if ($subs) {
            return redirect()->back()
                    ->with('success', 'Berhasil Subscribe');
        }
    }

    public  function offer($id){
        $offer = Offer::findOrFail($id);
        return view('guest.offer', compact('offer'));
    }
}
