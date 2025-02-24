@extends('components.layout.main')

@section('content')

    <div class="row triangle-background-reverse mt-4">
        <div class="col-sm-2"></div>

        <div class="col-sm-8">

            @foreach ($blogposts as $blogpost)
                <div class="backgroundcolorblog">
                    <section class="section1">
                        <article class="article">
                            <header>
                                <h1 class="textcolorblog">{{ $blogpost->title }}</h1>
                                <p class="textcolorblog">{{ $blogpost->introtext }}</p>
                            </header>
                            <p class="textcolorblog">{{ $blogpost->smalltext }}</p>
                            <a href="{{ url('/posts/' . $blogpost->id) }}" class="btn btn-primary mb-2">
                                View Post #{{ $blogpost->id }}
                            </a>
                        </article>
                    </section>
                </div>
            @endforeach
        </div>

        <div class="col-sm-2"></div>
    </div>

@endsection
