<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index($category)
    {
        $articles = Article::where('category', $category)->get();
        return view('layouts.category')->with('articles', $articles)->with('category', $category);
    }

    public function show($id)
    {
        $articles = Article::where('id', $id)->first();
        return view('layouts.articleDetail')->with('article', $articles);
    }

    public function showAllArticleByWriterID($writer_id)
    {
        $articles = Article::where('writer_id', $writer_id)->get();
        return view('layouts.writerDetail')->with('articles', $articles);
    }
}
