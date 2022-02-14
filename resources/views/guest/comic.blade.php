@extends('guest.layout.base')

@section('documentTitle')
  {{$nomePagina}}
@endsection

@section('content')
{{-- @dd($comic) --}}
    <main class="comic">
        <div class="blue-bar"></div>
        <div class="container w-55">
            <div class="comic-title">
                <img src="{{ $comic['thumb'] }}" alt="{{$comic['title'] }}">
                <div class="blue-title book">comic book</div>
                <div class="blue-title gallery">view gallery</div>
            </div>
            <div class="comic-book-container">
                <div class="desc-container">
                    <h3 class="book-title">{{$comic['title']}}</h3>
                    <div class="available-container">
                        <div class="left">
                            <div class="price">
                                <span class="span-price">U.S. Price: </span><span>{{$comic['price']}}</span>
                            </div>
                            <div class="available">
                                <span class="span-available">available</span>
                            </div>
                        </div>
                        <div class="right check-availability">
                            <div class="available-text">
                                <span>Check Availability</span>
                                <i class="fa-solid fa-sort-down"></i>
                            </div>
                        </div>
                    </div>
                    <div class="text-desc">
                        <p>{{$comic['description']}}</p>
                    </div>
                </div>
                <div class="adv-container">
                    <span>advertisement</span>
                    <img src="{{asset('img/adv.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </main>
@endsection