@extends('components.layout.main')

@section('content')
    <div class="container">
        <h1>Blogpost</h1>
        <div class="card p-4">
            {!! $text !!}
        </div>
        <a href="{{ url('/') }}" class="btn btn-primary mt-3">Terug naar home</a>
    </div>
@endsection
