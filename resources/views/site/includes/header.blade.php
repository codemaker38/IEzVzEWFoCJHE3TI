<header>
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-white py-3">
        <a href="{{ route('home') }}" class="pl-md-3">
            <img src="{{ asset('images/logo.png') }}" alt="{{ config('app.name') }}">
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-nav">
            <ul class="navbar-nav ml-auto">
                @if (!empty($roles))
                    <li class="nav-item pr-3">
                        <a class="nav-link" href="#">Notifications</a>
                    </li>
                    <li class="nav-item pr-3">
                        <a class="nav-link" href="#">My Account</a>
                    </li>
                    <li class="nav-item pr-3">
                        <a class="nav-link" href="{{ route('logout') }}">Log Out</a>
                    </li>
                @else
                    <li class="nav-item pr-3">
                        <a class="nav-link" href="{{ route('login') }}">Log In</a>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
</header>