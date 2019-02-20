<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        if ($news->count() > 0) {
            return view('news', ['news' => $news]);
        }
    }

    public function show($id)
    {
        $news = News::findOrFail($id);
        return view('detail', ['item' => $news]);
    }
}
