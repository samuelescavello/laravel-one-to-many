<nav id="sidebar" class="bg-dark navbar-dark">
    <a href="/" class="nav-link text-white">
        <h2 class="p-2"><i class="fa-solid fa-square-rss"> portfolio </i></h2>
    </a>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link text-white"{{Route::currentRouteName() === 'admin.dashboard' ? ' active' : ''}} href="{{Route('admin.dashboard')}}"><i class="fa-solid fa-gauge-high"></i> dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white"{{Route::currentRouteName() === 'admin.projects.index' ? ' active' : ''}} href="{{Route('admin.projects.index')}}"><i class="fa-solid fa-newspaper"></i> projects</a>
        </li>
        
    </ul>
</nav>