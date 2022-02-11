@extends('guest.layout.base')

@section('documentTitle')
    {{$nomePagina}}
@endsection

@section('content')
    <main>
        <div class="jumbotron background">
        </div>
        <div class="container">
            <div class="title">
                <span>current series</span>
            </div>
            <div class="thumbs">
                @foreach($comics as $comic)
                <div class="thumb">
                    <div class="img-container">
                        <img src="{{ $comic['thumb']}}" alt="">
                    </div>
                    <span class="subtitle">{{ $comic['title'] }}</span>
                </div>
                @endforeach
            </div>
            <div class="bottom-container">
                <div class="load-more">
                    <span>load more</span>
                </div>
            </div>
        </div>
    </main>
@endsection