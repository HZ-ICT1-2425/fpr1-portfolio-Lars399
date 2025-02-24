@extends('components.layout.main')

@section('content')

    <div class="row triangle-background mt-4">
        <div class="col-sm-2"></div>

        <div class="col-sm-8">

            @foreach ($faqposts as $faqpost)
                <div class="backgroundcolorblog faqsection1">
                    <h1 class="textcolorfaqh1">{{ $faqpost->title }}</h1><br>
                    <p class="textcolorfaq">{{ $faqpost->text }}</p>
                </div>
            @endforeach
        </div>

        <div class="col-sm-2"></div>
    </div>

@endsection
