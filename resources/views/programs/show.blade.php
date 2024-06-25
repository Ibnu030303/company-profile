<!DOCTYPE html>
<html>
<head>
    <title>Bright Bee Excellent {{ $program->name }}</title>
</head>
<body>
    <h1>{{ $program->name }}</h1>
    <p>{{ $program->published_date }}</p>
    <div>
        <img src="{{ Storage::url($program->image) }}" alt="Image of {{ $program->name }}">
    </div>
    <div>
        <p>{{ $program->description }}</p>
    </div>
    <div>
        <p>
            <strong>Price:</strong>
            {{ $program->fees && $program->fees->isNotEmpty() ? $program->fees->first()->fee : 'Not specified' }}
        </p>
    </div>
    <!-- Add additional images if available -->
    @if($program->additional_images)
        @foreach(json_decode($program->additional_images) as $image)
            <div>
                <img src="{{ Storage::url($image) }}" alt="Additional Image">
            </div>
        @endforeach
    @endif
</body>
</html>
