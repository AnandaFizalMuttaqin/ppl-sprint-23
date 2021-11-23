<nav>
    <div class="logo">
      <!-- <h4>Si Demand</h4> -->
      <img style="margin-left: 20px;"  src="<?= BASE_URL ?>/Public/images/LOGO.png" alt="">
    </div>

    <button class="btn btn-light identiy">
      <h4 class="text-center"><?= $page->page_name ?></h4><p class="text-center"><?= $page->method ?></p>
    </button>
  </nav>
  <br><br>

<div class="side-bar">
  <!-- <h1 class="text-center text-light">E-Learning</h1> -->
  
  <div class="link">
    <a href="<?= BASE_URL ?>/Public/Toko" class="btn side-bar-link">Toko</a>
  </div>
  <div class="link">
  <div class="link">
    <a href="<?= BASE_URL ?>/Public/Penjadwalan" class="btn side-bar-link">Penjadwalan</a>
  </div>
    <a href="<?= BASE_URL ?>/Public/Pemesanan" class="btn side-bar-link">Pemesanan</a>
  </div>
  <div class="link">
    <a href="<?= BASE_URL ?>/Public/StatusTransaksi" class="btn side-bar-link">Status Transaksi</a>
  </div>
  <div class="link">
    <a href="<?= BASE_URL ?>/Public/Informasi" class="btn side-bar-link">Informasi</a>
  </div>
  <div class="link">
    <a href="<?= BASE_URL ?>/Public/AboutUs" class="btn side-bar-link">About Us</a>
  </div>


</div>
<div class="side-bar-toggle">
  <h1 class="text-light">></h1>
</div>