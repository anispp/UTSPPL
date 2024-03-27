<header class="navbar navbar-dark bg-dark sticky-top shadow">
    <a class="navbar-brand me-auto ms-3 fs-4" href="/">UTS Laravel</a>

    <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto me-3">
            <li class="nav-item">
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="nav-link btn btn-outline-light"><i class="bi bi-box-arrow-in-right me-1"></i> Logout</button>
                </form>
            </li>
        </ul>
    </div>
</header>
