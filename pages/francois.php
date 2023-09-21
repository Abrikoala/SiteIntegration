<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Teko">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Hello World - François</title>
</head>

<body>
    <?php
    include("component/header.php");
  ?>

    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-4 m-5 d-flex justify-content-center"><img src="/assets/images/francois.png" width="300px"
                    height="300px" style="object-fit: cover;"></div>
            <div class="col-4 m-5 text-white text-center ">
                <p>
                <h1 class="text-white  display-4">François Rivoal</h1>
                <p class="text-info fs-2 border-bottom ">Joueur de l'équipe HELLO WORLD</p>
                </p>
            </div>

        </div>
        <div class="row justify-content-center">
            <div class="col-4 mx-5 text-white justify-content-center d-flex">
                <h2 class="text-center">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore
                    et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                    dolore eu
                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum.
                </h2>
            </div>
            <div class="col-4 mx-5 text-white justify-content-center d-flex">
                <img width="300px" height="300px" style="object-fit: cover;" src="/assets/images/francois/valo.png">
            </div>
        </div>


    </div>

</body>
<script>
document.getElementById("navbarNav").style = "background-color: var(--back)"
</script>