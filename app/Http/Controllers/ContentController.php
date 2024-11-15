<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ContentController extends Controller
{
  public function home()
  {
    $books = Http::get('https://api3.islamhouse.com/v3/paV29H2gm56kvLPy/main/books/id/id/1/4/json')->json();
    $articles = Http::get('https://api3.islamhouse.com/v3/paV29H2gm56kvLPy/main/articles/id/id/1/4/json')->json();
    $news = Http::get('https://api3.islamhouse.com/v3/paV29H2gm56kvLPy/main/news/ar/ar/1/4/json')->json();
    $posters = Http::get('https://api3.islamhouse.com/v3/paV29H2gm56kvLPy/main/poster/id/id/1/4/json')->json();
    return view('home', compact('books', 'articles', 'news', 'posters'));
  }

  public function quran()
  {
    $qurans = Http::get('https://equran.id/api/v2/surat');
    return view('quran', compact('qurans'));
  }

  public function show($id)
  {
    $item = Http::get('https://api3.islamhouse.com/v3/paV29H2gm56kvLPy/main/get-item/' . $id . '/id/json')->json();
    return view('show', compact('item'));
  }
}
