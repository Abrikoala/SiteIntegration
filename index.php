<?php
      include("pages/component/navbar.php");
      include("pages/component/header_main.php");
?>

<body>
    <div class="container">

        <div id="equip" class="row m-5 bloc">

            <div class="col">
                <h2 class="text-info">Notre équipe</h2>
                <h1 class="text-white display-4">Origines de l'équipe</h1>
                <p class="fs-2 text-white mb-4">Dans le monde en constante évolution des sports électroniques, une
                    équipe se distingue par son engagement, son talent et sa passion inébranlable pour la compétition.
                    Cette équipe, c'est "HelloWorld Esports".</p>
                <p class="fs-2 text-white">Fondée en 2019 par un groupe de <a id="joueurs-link" onclick="$([document.documentElement, document.body]).animate({
                            scrollTop: $('#joueurs').offset().top
                        }, 500, 'swing');">joueurs</a>
                    passionnés, HelloWorld s'est rapidement imposée comme une force à compter dans le paysage des sports
                    électroniques. Ce nom, "HelloWorld", qui évoque les premiers pas dans le monde de la programmation,
                    reflète parfaitement l'ambition de l'équipe : repousser les limites, explorer de nouvelles
                    frontières et faire découvrir un univers de jeu toujours plus vaste.
            </div>
        </div>

        <div id="joueurs" class="row m-5 bloc">
            <div class="col">
                <div class="row">
                    <h2 class="text-info">Joueurs</h2>
                    <h1 class="text-white display-4 ">Joueurs de l'équipe HELLO WORLD </h1>
                </div>
                <div class="row">
                    <div class="col-4 border-2 rounded rounded-4 mt-5">
                        <div class="mx-2 m-auto rounded rounded-3 d-flex flex-column align-items-center">
                            <div class="img-container">
                                <a href="pages/gino.php">
                                    <img class="w-100 rounded rounded-top-4" src="assets/images/gino.png" alt="">
                                </a>
                            </div>
                            <h2 class="text-white text-center ms-2 mt-2">Gino Valton</h2>
                        </div>
                    </div>

                    <div class="col-4 border-2 rounded rounded-4 mt-5">
                        <div class="mx-2 m-auto rounded rounded-3 d-flex flex-column align-items-center">
                            <div class="img-container">
                                <a href="pages/adrien.php">
                                    <img class="w-100 rounded rounded-top-4" src="assets/images/adrien.png" alt="">
                                </a>
                            </div>
                            <h2 class="text-white text-center ms-2 mt-2">Adrien TRANCHANT</h2>
                        </div>
                    </div>

                    <div class="col-4 border-2 rounded rounded-4 mt-5">
                        <div class="mx-2 m-auto rounded rounded-3 d-flex flex-column align-items-center">
                            <div class="img-container">
                                <a href="pages/francois.php">
                                    <img class="w-100 rounded rounded-top-4" src="assets/images/francois.png" alt="">
                                </a>
                            </div>
                            <h2 class="text-white text-center ms-2 mt-2">François Rivoal</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-4 border-2 rounded rounded-4 mt-2 ms-auto">
                        <div class="mx-2  rounded rounded-3 d-flex flex-column align-items-center">
                            <div class="img-container">
                                <a href="pages/mathys.php">
                                    <img class="w-100 rounded rounded-top-4" src="assets/images/placeholder.jpg" alt="">
                                </a>
                            </div>
                            <h2 class="text-white text-center ms-2 mt-2">Mathys Schmitte</h2>
                        </div>
                    </div>

                    <div class="col-4 border-2 rounded rounded-4 mt-2 me-auto">
                        <div class="mx-2 rounded rounded-3 d-flex flex-column align-items-center">
                            <div class="img-container">
                                <a href="pages/pierremarie.php">
                                    <img class="w-100 rounded rounded-top-4" src="assets/images/placeholder.jpg" alt="">
                                </a>
                            </div>
                            <h2 class="text-white text-center ms-2 mt-2">Pierre-Marie Talbi</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="galerie" class="row m-5 bloc">

            <div class="col">
                <div id="carouselExampleInterval" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <h2 class="text-info">Médias</h2>
                    <h1 class="text-white display-4 ">Retrouvez-nous sur les réseaux</h1>
                    <div class="carousel-inner">
                        <div class="carousel-item active " data-bs-interval="5000">
                            <img src="/assets/images/1.jpg" class="d-block w-100">
                        </div>
                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="/assets/images/2.webp" class="d-block w-100">
                        </div>
                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="/assets/images/3.jpg" class="d-block w-100">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="d-flex justify-content-center mt-4" style="column-gap: 50px;" id="rezo">
                    <a>
                        <img width="70px" height="70px" src="/assets/images/logo.svg"></a>
                    <a><img width="70px" height="70px" src="/assets/images/Instagram_Glyph_Gradient.svg"></a>
                </div>
            </div>
        </div>

    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>