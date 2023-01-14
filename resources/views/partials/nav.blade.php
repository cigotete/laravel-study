<nav>
    <ul>
        <li class="{{ setActive('home') }}"><a href="{{ route('home') }}">Home</a></li>
        <li class="{{ setActive('about') }}"><a href="{{ route('about') }}">About</a></li>
        <li class="{{ setActive('projects.*') }}"><a href="{{ route('projects.index') }}">Portfolio</a></li>
        <li class="{{ setActive('contact') }}"><a href="{{ route('contact') }}">Contact</a></li>
        @guest
            <li class="{{ setActive('login') }}"><a href="{{ route('login') }}">Login</a></li>
        @else
            <li class="{{ setActive('login') }}"><a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a></li>
        @endguest
    </ul>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
