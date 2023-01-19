<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Utils;
use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $data = Article::where('type', 'article')->where('status', '!=', 'deleted')->orderByDesc('id')->get();
        return view('admin.articles.index', compact('data'));
    }

    public function create(){
        return view('admin.articles.create');
    }

    public function submit(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        if($request->hasFile('image')){
            $img = Utils::save_image_file($request->image, 'banner');
        } else {
            $img = null;
        }

        $slug = Utils::slugify($request->title, '-');

        $article = Utils::create_article(
            $request->title,
            $request->description,
            $request->status,
            $img,
            $slug,
            'article'
        );

        if($article) {
            return redirect()->route('articles')
                    ->with('success', 'Artikel Berhasil Ditambah');
        }
    }

    public function edit($id){
        $article = Article::findOrFail($id);
        return view('admin.articles.edit', compact('article'));
    }

    public function update(Request $request){
        $article = Article::findOrFail($request->id);

        if($request->hasFile('image')){
            $img = Utils::save_image_file($request->image, 'article');
        } else {
            $img = $article->image;
        }

        $slug = Utils::slugify($request->title, '-');

        $article->title = $request->title;
        $article->description = $request->description;
        $article->status = $request->status;
        $article->image = $img;
        $article->slug = $slug;
        $article->short_desc = Utils::limit_text($request->description, 150);
        $article->updated_at = Utils::now();

        if($article->save()) {
            if($article->type == 'primary'){
                return redirect()->route('primaryArticle')
                        ->with('success', 'Artikel Utama Berhasil Diubah');
            }
            return redirect()->route('articles')
                    ->with('success', 'Artikel Berhasil Diubah');
        }
    }

    public function primary_article(){
        $data = Article::where('type', 'primary')->where('status', '!=', 'deleted')->get();
        return view('admin.articles.primary', compact('data'));
    }

    public function primary_create(){
        return view('admin.articles.primaryCreate');
    }

    public function primary_submit(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        if($request->hasFile('image')){
            $img = Utils::save_image_file($request->image, 'banner');
        } else {
            $img = null;
        }

        $slug = Utils::slugify($request->title, '-');

        $article = Utils::create_article(
            $request->title,
            $request->description,
            $request->status,
            $img,
            $slug,
            'primary'
        );

        if($article) {
            return redirect()->route('primaryArticle')
                    ->with('success', 'Artikel Utama Berhasil Ditambah');
        }
    }
}
