<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\Http;
class NewsController extends Controller
{
    public function fetchNews()
    {
        $apiKey = env('NEWS_API_KEY');
        $response = Http::get("https://newsapi.org/v2/top-headlines?country=us&apiKey=ca0f820e6e2b4f8c81e6534faa880e9a");

        if ($response->successful()) {
            $articles = $response->json()['articles'];


            News::truncate();


            foreach ($articles as $article) {
                News::create([
                    'title' => $article['title'],
                    'description' => $article['description'],
                    'url' => $article['url'],
                    'author' => $article['author'],
                    'source' => $article['source']['name'],
                ]);
            }

            return redirect()->route('displayNews')->with('success', 'News fetched and stored successfully!');
        }

        return redirect()->route('displayNews')->with('error', 'Unable to fetch news.');
    }

    public function displayNews()
    {
        $news = News::all();
        return view('news.display', compact('news'));
    }
}
