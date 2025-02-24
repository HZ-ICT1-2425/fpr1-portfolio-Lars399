@extends('components.layout.main')

@section('content')

    <div class="row triangle-background-reverse mt-4">
        <div class="col-sm-2"></div>

        <div class="col-sm-8">
            <h2>Blogposts</h2>

            @foreach ($blogposts as $blogpost)
                <a href="{{ url('/post/' . $blogpost->id) }}" class="btn btn-primary mb-2">
                    View Post #{{ $blogpost->id }}
                </a><br>
            @endforeach
        </div>

        <div class="col-sm-2"></div>
    </div>

@endsection
