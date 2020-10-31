<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    // get articles for about page articles
    public function getAboutArticles(Article $article)
    {
        //take with parameter 3 will be take only 3 articles for about page
        return view('about',
            ['articles' => $article->take(3)->latest()->get()]
        );
    }

    // get all articles for list of articles
    public function getAllArticles(Article $article)
    {
        return view('articles.list_of_articles', ['articles' => $article->latest()->get()]);
    }

    // Show a singe article source
    public function show(Article $article)
    {
        return view('articles.show', ['article' => $article]);
    }

    // Shows a view to create a new resource
    public function create() {
         return view('articles.create');
    }

    // Persist the new resource
    public function store() {
        // validate fields
        // min its a minimal characters for input
        // max its a maximum characters
        // put new data in the article
        // save new article in db
        Article::create($this->validateData());
        // redirect to /articles
       return redirect('/articles');
    }

    // Delete the resource
    public function destroy() {

    }
}
