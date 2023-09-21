<nav class="navbar navbar-expand-sm sticky-top p-0 m-0">
    <div class="container-fluid p-0 m-0">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white fs-3 px-4" onclick="$([document.documentElement, document.body]).animate({
        scrollTop: $('#equip').offset().top
    }, 500, 'swing');"><span>Notre
                            équipe</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white fs-3 px-4" onclick="$([document.documentElement, document.body]).animate({
        scrollTop: $('#joueurs').offset().top
    }, 500, 'swing');">Joueurs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white fs-3 px-4" onclick="$([document.documentElement, document.body]).animate({
        scrollTop: $('#galerie').offset().top
    }, 500, 'swing');">Médias</a>
                </li>
            </ul>
        </div>
    </div>
</nav>