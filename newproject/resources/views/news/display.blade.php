@extends('frontend.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latest News Articles</title>
    <style>
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }
        .news-article {
            background: white;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }
        .news-article h2 {
            color: #007BFF;
            margin: 0 0 10px 0;
        }
        .news-article p {
            line-height: 1.6;
        }
        .news-article .meta {
            font-size: 0.9em;
            color: #555;
        }
        .success-message, .error-message {
            text-align: center;
            margin-bottom: 20px;
            font-size: 1.2em;
        }
        .success-message {
            color: green;
        }
        .error-message {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Latest News Headlines</h1>

    @if(session('success'))
        <p class="success-message">{{ session('success') }}</p>
    @endif

    @if(session('error'))
        <p class="error-message">{{ session('error') }}</p>
    @endif

    @if($news->count() > 0)
        @foreach($news as $article)
            <div class="news-article">
                <h2>{{ $article->title }}</h2>
                <p>{{ $article->description }}</p>
                <p><a href="{{ $article->url }}" target="_blank" style="color:blue" >Read more</a></p>
                <p class="meta"><strong>Author:</strong> {{ $article->author }} | <strong>Source:</strong> {{ $article->source }}</p>
            </div>
        @endforeach
    @else
        <p>No news articles available.</p>
    @endif
</body>
</html>
@endsection
