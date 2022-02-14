<header class="container-90 text-center">
    <div class="container text-center">
        <a href="{{route('home')}}"><img src="{{asset('img/dc-logo.png')}}" alt=""></a>
        <ul>
            <li><a class="{{ 'characters' === Route::currentRouteName() ? 'active' : '' }}" href="{{route('characters')}}">characters</a></li>
            <li><a class="{{ ('home' === Route::currentRouteName() || 'comic' === Route::currentRouteName()) ? 'active' : '' }}" href="{{route('home')}}">comics</a></li>
            <li><a class="{{ 'movies' === Route::currentRouteName() ? 'active' : '' }}" href="{{route('movies')}}">movies</a></li>
            <li><a class="{{ 'tv' === Route::currentRouteName() ? 'active' : '' }}" href="{{route('tv')}}">tv</a></li>
            <li><a class="{{ 'games' === Route::currentRouteName() ? 'active' : '' }}" href="{{route('games')}}">games</a></li>
            <li><a class="{{ 'collectibles' === Route::currentRouteName() ? 'active' : '' }}" href="{{route('collectibles')}}" class="blue">collectibles</a></li>
            <li><a class="{{ 'videos' === Route::currentRouteName() ? 'active' : '' }}" href="{{route('videos')}}">videos</a></li>
            <li><a class="{{ 'fans' === Route::currentRouteName() ? 'active' : '' }}" href="{{route('fans')}}">fans</a></li>
            <li><a class="{{ 'news' === Route::currentRouteName() ? 'active' : '' }}" href="{{route('news')}}">news</a></li>
            <li><a class="{{ 'shop' === Route::currentRouteName() ? 'active' : '' }}" href="{{route('shop')}}">shop<i class="fa-solid fa-sort-down"></i></a></li>
        </ul>
    </div>
    <div class="jumbotron background">
    </div>
</header>