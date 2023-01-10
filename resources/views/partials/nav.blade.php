<nav>
    <ul>
        <li class="{{ setActive('home') }}"><a href="{{ route('home') }}">Home</a></li>
        <li class="{{ setActive('about') }}"><a href="{{ route('about') }}">About</a></li>
        <li class="{{ setActive('projects.*') }}"><a href="{{ route('projects.index') }}">Portfolio</a></li>
        <li class="{{ setActive('contact') }}"><a href="{{ route('contact') }}">Contact</a></li>
        <li class="{{ setActive('test') }}"><a href="{{ route('test') }}">Test</a></li>
    </ul>
</nav>
