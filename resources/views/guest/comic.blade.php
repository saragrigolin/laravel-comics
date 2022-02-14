@extends('guest.layout.base')

@section('documentTitle')
  {{$nomePagina}}
@endsection

{{-- @section('css')
  <link rel="stylesheet" href="{{ asset('css/comic.css') }}">
@endsection --}}

@section('content')
{{-- @dd($comic) --}}
    <main>
        <div class="blue-bar"></div>
        <div class="container w-60">
            <div class="comic-title">
                <img src="{{ $comic['thumb'] }}" alt="{{$comic['title'] }}">
            </div>
            <h3>{{$comic['title']}}</h3>
            <img src="{{ $comic['thumb'] }}" alt="{{$comic['title'] }}">
        </div>
    </main>
@endsection