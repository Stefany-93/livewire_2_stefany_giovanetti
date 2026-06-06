<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

// use Illuminate\Http\Request;

class ArticleController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('auth')->except('show'),
        ];
    }

    public function create() {
        return view('article.create');
    }

    public function edit(Article $article) {
        return view('article.edit', compact('article'));
    }

    public function show(Article $article) {
        return view('article.show', compact('article'));
    }

}
