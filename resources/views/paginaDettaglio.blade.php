@extends('layouts.default')

@section('page_title', 'PaginaDettaglio')

@section('content')
<section id="section-3"></section>
<section id="section-4">
    <div class="margin-auto width-80x display-flex flex-wrap">

        <h4 class="text-color-white">{{$comic["title"]}}</h4>
        <p class="text-color-white">{{$comic["description"]}}</p>

    </div>
</section>
