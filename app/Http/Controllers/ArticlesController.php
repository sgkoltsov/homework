<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Blog::latest()->get();

        return view('welcome', compact('articles'));
    }

    public function about()
    {
        return view('about');
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'slug' => 'required | unique:App\Models\Blog,slug',
            'title' => 'required | min:5 | max:100',
            'short' => 'required | max:255',
            'body' => 'required',
        ]);

        Blog::create(request()->all());     

        return redirect('/');          
    }
    
    public function show(Blog $slug)
    {
        return view('articles.show', compact('slug'));
    }
}
