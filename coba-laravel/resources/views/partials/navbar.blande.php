<nav class="navbar navbar-expand-lg navbar-dark bg-grey">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">WPU BLog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarNav">
             <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ ($tittle == "Home") ? 'active' : }} " href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Abou">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Blog">Blog</a>
                </li>
            </ul>
        </div>
     </div>
</nav> 