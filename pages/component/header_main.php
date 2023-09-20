<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Teko">
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Hello World</title>
</head>
<script src="assets/js/index.js"></script>

<header class="d-flex justify-content-center align-items-center">
  <img id="header-bg" src="assets/images/header-bg.jpg">
  <div class="d-flex justify-content-center align-items-center text-white flex-column w-100">
    <div id="title" class="d-flex">
      <span class="text-center" id="logo"></span>
      <span id="blink">.</span>
    </div>

    <div style="display: flex; z-index: 100" id="subtitle">
      Équipe de talent depuis :
      <span id="timer"></span>
    </div>

    <div class="d-flex" style="margin-top: 1rem;">
      <button class="btn" id="discoverbtn" href="">DÉCOUVRIR L'ÉQUIPE</button>
    </div>
  </div>
</header>

<script>
  timer()
  setTimeout(typeWriter, 1000)
  setTimeout(fadeIn, 3000, "subtitle")
  setTimeout(fadeIn, 4000, "discoverbtn")
</script>

