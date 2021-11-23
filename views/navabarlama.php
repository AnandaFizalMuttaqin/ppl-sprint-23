<nav class="<?= $navbar_class ?>">
  <div class="container">
    <a class="navbar-brand" href="index.php"
      ><img src="<?= BASE_URL ?>/Public/images/logo/logo.png" alt=""
    /></a>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-center" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= BASE_URL ?>/Public/Home"
            >Home</a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?= BASE_URL ?>/Public/Store">Store</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="article.php">Article</a>
        </li>
        <li class="nav-item">
          <a
            class="nav-link active"
            href="contact.php"
            tabindex="-1"
            aria-disabled="true"
            >Contact</a
          >
        </li>
        <li class="nav-item">
          <div class="form-check form-switch">
            <form action="" method="POST">
              <button onmouseenter="mouse_enter()" onmouseleave="mouse_leave()" type="submit" name="theme_togle" class="<?= $togle_btn ?> btn-theme"><?= $togle_lable ?></button>
            </form>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
<script>
function mouse_enter() {
  // let label= document.querySelector('nav .btn-theme').innerText;
  if( document.querySelector('nav .btn-theme').innerText == 'Light Mode'){
    document.querySelector('nav .btn-theme').innerText = "Dark Mode";
  }
  else if (document.querySelector('nav .btn-theme').innerText == "Dark Mode"){
    document.querySelector('nav .btn-theme').innerText = "Light Mode";
  }
}
function mouse_leave() {
  // let label= document.querySelector('nav .btn-theme').innerText;
  if( document.querySelector('nav .btn-theme').innerText == 'Light Mode'){
    document.querySelector('nav .btn-theme').innerText = "Dark Mode";
  }
  else if (document.querySelector('nav .btn-theme').innerText == "Dark Mode"){
    document.querySelector('nav .btn-theme').innerText = "Light Mode";
  }
}
</script>