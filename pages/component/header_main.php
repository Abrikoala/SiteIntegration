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