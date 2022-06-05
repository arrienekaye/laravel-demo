<h1>This is my header</h1>

<img src="{{ URL('images/b-and-w-girl.png') }}" alt="">
<ul>
    <li>
        <a href="/"
        class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
    </li>
    <li>
        <a href="about"
        class="{{ request()->is('about') ? 'active' : '' }}">About</a>
    </li>
    <li>
        <a href="portfolio">Portfolio</a>
    </li>
    <li>
        <a href="contact">Contact</a>
    </li>
</ul>
