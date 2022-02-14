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
        <div class="comic-info-container">
            <div class="container info w-55">
                <div class="left-info">
                    <div class="info-title">
                        <span>Talent</span>
                    </div>
                    <div class="subinfo">
                        <div class="info-subtitle">
                            <span>Art by:</span>
                        </div>
                        <div class="info-desc">
                            @foreach($comic['artists'] as $artist)
                                @if ($loop->last)
                                <span><a href="#">{{ $artist }}</a></span>
                                @else 
                                <span><a href="#">{{ $artist}}</a>,</span>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="subinfo">
                        <div class="info-subtitle">
                            <span>Written by:</span>
                        </div>
                        <div class="info-desc">
                            @foreach($comic['writers'] as $writer)
                                @if ($loop->last)
                                <span><a href="#">{{ $writer }}</a></span>
                                @else 
                                <span><a href="#">{{ $writer}}</a>,</span>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="right-info">
                    <div class="info-title">
                        <span>Specs</span>
                    </div>
                    <div class="subinfo">
                        <div class="info-subtitle">
                            <span>Series:</span>
                        </div>
                        <div class="info-desc">
                            <span class="upper"><a href="#">action comics</a></span>
                        </div>
                    </div>
                    <div class="subinfo">
                        <div class="info-subtitle">
                            <span>U.S. Price:</span>
                        </div>
                        <div class="info-desc">
                            <span class="upper">{{ $comic['price'] }}</span>
                        </div>
                    </div>
                    <div class="subinfo">
                        <div class="info-subtitle">
                            <span>On Sale Date:</span>
                        </div>
                        <div class="info-desc">
                            <span>{{ date_format(date_create($comic['sale_date']),'M d Y') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection