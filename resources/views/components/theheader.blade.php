<header class="fixed-top p-2 bg-dark">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand fw-medium" href="/">BWS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
                <ul class="navbar-nav gap-2">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/customers">Clientes</a>
                    </li>
                    </li>
                    <li>
                        <form action="/customers" class="d-flex" role="search" method="GET">
                            <input class="form-control me-2" type="search" name="search" placeholder="Search"
                                aria-label="Search" value="{{ request('search') }}" />
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
