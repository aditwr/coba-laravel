<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">
    <a class="navbar-brand" href="/">Funny</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link {{ ($title_page == 'Home')? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link {{ ($title_page == 'About')? 'active' : '' }}" href="/about">About</a>
        </li>
        <li class="nav-item">
        <a class="nav-link {{ ($title_page == 'Posts')? 'active' : '' }}" href="/posts">Blog</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ ($title_page == 'Categories')? 'active' : '' }}" href="/categories">Categories</a>
            </li>
    </ul>
    </div>
</div>
</nav>