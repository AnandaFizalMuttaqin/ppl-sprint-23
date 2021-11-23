<nav>
    <div div class="logo">
      <!-- <h4>Si Demand</h4> -->
      <img style="margin-left: 20px;"  src="<?= $header_path ?>/../Public/images/LOGO.png" alt="">
    </div>

    <div style="display: flex; justify-content:center">
      <button class="btn btn-light identiy">
        <h4 class="text-center"><?= $page->page_name ?></h4><p class="text-center"><?= $page->method ?></p>

        <form action="" method="POST">
          <button type="submit" name="logout" class="btn btn-danger">
            Logout
          </button>
        </form>
        
      </button>
    </div>
    
  </nav>
  <br><br>

<div class="side-bar">
  <!-- <h1 class="text-center text-light">E-Learning</h1> -->
  <div class="link">
    <a href="<?= $header_path ?>/Public/Products" class="btn side-bar-link">Toko</a>
    <a href="<?= $header_path ?>/Public/Order" class="btn side-bar-link">Order</a>
    <a href="<?= $header_path ?>/Public/Penjadwalan" class="btn side-bar-link">Penjadwalan</a>
    <a href="<?= $header_path ?>/Public/Modal" class="btn side-bar-link">Modal</a>
    <a href="<?= $header_path ?>/Public/Omset" class="btn side-bar-link">Omset</a>
    <a href="<?= $header_path ?>/Public/Pengeluaran" class="btn side-bar-link">Pengeluaran</a>
    <a href="<?= $header_path ?>/Public/LabaRugi" class="btn side-bar-link">Laba Rugi</a>
    <a href="<?= $header_path ?>/Public/Peramalan" class="btn side-bar-link">Peramalan</a>
    <a href="<?= $header_path ?>/Public/Informasi" class="btn side-bar-link">Informasi</a>
    <a href="<?= $header_path ?>/Public/AboutUs" class="btn side-bar-link">AboutUs</a>
  </div>
</div>
<div class="side-bar-toggle">
  <h1 class="text-light">></h1>
</div>