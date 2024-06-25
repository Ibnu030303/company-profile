<!DOCTYPE html>
<html>
<head>
    <title>{{ $article->title }}</title>
</head>
<body>
    <h1>{{ $article->title }}</h1>
    <p>{{ $article->published_date }}</p>
    <div>
        <img src="{{ Storage::url($article->image) }}" alt="Image of {{ $article->title }}">
    </div>
    <div>
        <p>{{ $article->content }}</p>
    </div>
    <!-- Add additional images if available -->
    @if($article->additional_images)
        @foreach(json_decode($article->additional_images) as $image)
            <div>
                <img src="{{ Storage::url($image) }}" alt="Additional Image">
            </div>
        @endforeach
    @endif
</body>
</html>

