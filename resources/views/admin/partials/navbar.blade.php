<ul class="navbar-nav mr-auto">
    <li class="nav-item"><a class="nav-link" href="/">Top</a></li>
    @auth
        <li @if (Request::is('admin/request*')) class="nav-item active" @else class="nav-item" @endif>
            <a class="nav-link" href="/admin/request">Request</a>
        </li>
        <li @if (Request::is('admin/tag*')) class="nav-item active" @else class="nav-item" @endif>
            <a class="nav-link" href="/admin/tag">Tag</a>
        </li>
        <li @if (Request::is('admin/upload*')) class="nav-item active" @else class="nav-item" @endif>
            <a class="nav-link" href="/admin/upload">Upload</a>
        </li>
    @endauth
</ul>

<ul class="navbar-nav ml-auto">
    @guest
        <li class="nav-item"><a class="nav-link" href="/login">登录</a></li>
    @else
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
               aria-expanded="false">
                {{ Auth::user()->name }}
                <span class="caret"></span>
            </a>
            <div class="dropdown-menu" role="menu">
                <a class="dropdown-item" href="/logout">退出</a>
            </div>
        </li>
    @endguest
</ul>
