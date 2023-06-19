<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="/">PPDB Online SMKN 4 PYK</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Home' ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Pendaftaran' ? 'active' : '' }}"
                        href="/pendaftaran">Pendaftaran</a>
                </li>

            </ul>

            <ul class="navbar-nav ms-auto">
                @auth
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Welcome: {{ auth()->user()->username }}
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i>
                                    | My Dashboard </a></li>
                            <li>
                                <hr class="dropdown-devider">
                            </li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left"></i> |
                                        Log Out</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @else
                    <li class="nav-item">
                        <a href="/login" class="nav-link" type="button"><i class="bi bi-box-arrow-in-right"></i>
                            Login</a>
                    </li>

                @endauth
            </ul>

        </div>
    </div>
</nav>
