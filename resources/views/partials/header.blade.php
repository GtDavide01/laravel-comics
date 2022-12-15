<header class="d-flex align-items-center justify-content-around">
    <div class="logo">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
    </div>
    <div class="link">
        <ul class="d-flex">
            <li><a href="{{ route('home') }}">HOME</a></li>
            <li><a href="{{ route('comics') }}">COMICS</a></li>
            <li><a href="{{ route('news') }}">NEWS</a></li>
        </ul>
    </div>
    <!-- Search form -->
    <div class="search">
        <input type="search" placeholder="search">
    </div>
</header>
