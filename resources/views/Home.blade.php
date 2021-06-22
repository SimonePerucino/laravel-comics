@extends('layouts.default')

@section('page_title', 'Home')


@section('content')
<section id="section-3"></section>
<section id="section-4">
    <div class="margin-auto width-80x display-flex flex-wrap">

        @php
        $routeName = Request::route()->getName();
        @endphp

        @foreach ($comicsList as $id => $comic)
        <a href="{{route("paginaDettaglio", $id) }}">
            <div class="card">
                <img src="{{$comic["thumb"]}}" alt="">
                <h4 class="text-color-white">{{$comic["title"]}}</h4>
            </div>
        </a>

        @endforeach
    </div>
</section>

@endsection
