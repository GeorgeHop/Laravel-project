<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class AdminArticlesController extends Controller
{
    // get all articles for list of articles
    public function getAllArticles(Article $article)
    {
        return view('admin.admin_list_of_articles', ['articles' => $article->latest()->get()]);
    }

    // Show view to edit existing resource
    public function edit(Article $article) {
        // compact('article) is the same like ['article' => $article]
        return view('admin.admin_edit', compact('article'));
    }

    // Persist the edited resource
    public function update(Article $article) {
        // call to update method and put all validated data
        $article->update($this->validateData());

        return redirect('/admin/articles');
    }

    protected function validateData()
    {
        return request()->validate([
            'title' => ['required', 'min:3', 'max:30'],
            'description' => ['required', 'min:10', 'max:100'],
            'excerpt' => 'required'
        ]);
    }
}
