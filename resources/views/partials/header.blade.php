<header>

    <div class="bar">
        <div class="container d-flex justify-content-end text-uppercase text-white gap-4">
            <div>dc power<span>&trade;</span>visa<span>&reg;</span></div>
            <div>additional dc sites <span>&blacktriangledown;</span></div>
        </div>
    </div>

    <div class="header_wrapper container d-flex justify-content-between align-items-center w-75">

        <a href="##">

            <img width="75" src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="">

        </a>

        <div class="h-100">

            <nav class="navbar navbar-expand navbar-light h-100 p-0">

                <ul class="nav navbar-nav h-100">

                    <li class="nav-item h-100 d-flex align-items-center {{ Route::currentRouteName() === 'home' ? 'active_li' : '' }}">

                        <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'active' : '' }}" href="{{route('home')}}">characters</a>

                    </li>

                    <li class="nav-item h-100 d-flex align-items-center{{ Route::currentRouteName() === 'comics' ? 'active_li' : '' }}">

                        <a class="nav-link{{ Route::currentRouteName() === 'comics' ? 'active' : '' }}" href="{{route('comics')}}">comics</a>

                    </li>

                    <li class="nav-item h-100 d-flex align-items-center{{ Route::currentRouteName() === 'movies' ? 'active_li' : '' }}">

                        <a class="nav-link{{ Route::currentRouteName() === 'movies' ? 'active' : '' }}" href="#">movies</a>

                    </li>

                    <li class="nav-item h-100 d-flex align-items-center{{ Route::currentRouteName() === 'tv' ? 'active_li' : '' }}">

                        <a class="nav-link{{ Route::currentRouteName() === 'tv' ? 'active' : '' }}"  href="#">tv</a>

                    </li>

                    <li class="nav-item h-100 d-flex align-items-center{{ Route::currentRouteName() === 'games' ? 'active_li' : '' }}">

                        <a class="nav-link{{ Route::currentRouteName() === 'games' ? 'active' : '' }}"  href="#">games</a>

                    </li>

                    <li class="nav-item h-100 d-flex align-items-center{{ Route::currentRouteName() === 'collectibles' ? 'active_li' : '' }}">

                        <a class="nav-link{{ Route::currentRouteName() === 'collectibles' ? 'active' : '' }}"  href="#">collectibles</a>

                    </li>

                    <li class="nav-item h-100 d-flex align-items-center{{ Route::currentRouteName() === 'videos' ? 'active_li' : '' }}">

                        <a class="nav-link{{ Route::currentRouteName() === 'videos' ? 'active' : '' }}"  href="#">videos</a>

                    </li>

                    <li class="nav-item h-100 d-flex align-items-center{{ Route::currentRouteName() === 'fans' ? 'active_li' : '' }}">

                        <a class="nav-link{{ Route::currentRouteName() === 'fans' ? 'active' : '' }}"  href="#">fans</a>

                    </li>

                    <li class="nav-item h-100 d-flex align-items-center{{ Route::currentRouteName() === 'news' ? 'active_li' : '' }}">

                        <a class="nav-link{{ Route::currentRouteName() === 'news' ? 'active' : '' }}"  href="#">news</a>

                    </li>

                    <li class="nav-item h-100 d-flex align-items-center{{ Route::currentRouteName() === 'shop' ? 'active_li' : '' }}">

                        <a class="nav-link{{ Route::currentRouteName() === 'shop' ? 'active' : '' }}"  href="#">shop</a><span class="active">&blacktriangledown;</span>

                    </li>
                </ul>

            </nav>

        </div>

        <form action="#">
            <div class="search_wrapper d-flex gap-1">
                <input type="search" name="search" id="search" class="border-0 text-end" placeholder="Search">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </span>
            </div>
        </form>

    </div>

</header>