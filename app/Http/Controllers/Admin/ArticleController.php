<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Models\Article;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{

    // public function vue(){

    //     return view('admin.vue', ['articles' => Article::orderBy('created_at', 'desc')->paginate(2),]);
    // }

    public function index()
{
    $articles = Article::orderBy('created_at', 'desc')->paginate(25);
    return view('admin.article.index', compact('articles'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $articles = Article::orderBy('created_at', 'desc')->paginate(25);

        return view('admin.article.form', compact('articles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {
        $image = $request->file('image')->store('public/images');
        $dataValid = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'auteur' => $request->input('auteur'),
            'image' => $image,

        ];
        $article = Article::create($dataValid);

        return redirect()->route('admin.article.index')->with('success', "L'article a bien été créé.");
    }

    public function edit(Article $article)
    {
        return view('admin.article.form', [
            'article' => $article
        ]);
    }
    public function update(ArticleRequest $request, Article $article)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('public/images');
        } else {
            $data['image'] = $article->image;
        }

        $article->update($data);

        return redirect()->route('admin.article.index')->with('success', "L'article a bien été modifié.");
    }

    public function destroy(Article $article)
    {
        $imagePath = public_path('public/images/') . $article->image;

        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        $article->delete();

        return redirect()->route('admin.article.index')->with('success', "L'article a bien été supprimé");
    }
}
