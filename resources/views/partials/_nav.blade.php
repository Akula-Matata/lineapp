<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">LineApp</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item {{ Request::is('/') ? "active" : ""}}">
                <a class="nav-link" href="/">На главную</a>
            </li>
            <li class="nav-item {{ Request::is('blog') ? "active" : ""}}">
                <a class="nav-link" href="/blog">Блог</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            
            @if(Auth::check())
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="{{ route('posts.index') }}">Посты</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}">Выйти</a>
                </div>
            </li>
            
            @else

            <a href="{{ route('login') }}" class="btn btn-primary">Войти</a>

            @endif

        </ul>
    </div>
</nav>