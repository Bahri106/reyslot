<?php
  if (isset($_GET['link_menu_games'])) {
    $link_menu_games_aktif = $_GET['link_menu_games'];
    $menu_games = mysqli_query($koneksi, "SELECT * FROM menu_games WHERE link_menu_games = '$link_menu_games_aktif'");
    $data_menu_games = mysqli_fetch_array($menu_games);
    $id_menu_games = $data_menu_games['id_menu_games'];
    $judul_menu_games = $data_menu_games['judul_menu_games'];
  } else {
    echo '
      <script>
        window.location.replace("'.$alamat_website.'games/slots");
      </script>
    ';
  }
?>

<?php
  if (isset($_SESSION['id_akun'])) {
?>
<div class="d-flex justify-content-between align-items-center fs-6 p-2 pt-0">
  <span class="d-flex align-items-center">
    <i class="ri-money-dollar-circle-fill fs-4 me-2"></i><?php echo number_format($total_saldo).'.00';?>
  </span>
  <i class="ri-refresh-fill text-utama fs-4"></i>
</div>
<?php
  }
?>
<div class="row g-0">
  <div class="col-12">
    <div class="d-flex">
      <i class="ri-arrow-left-s-line fs-4 fw-bold d-flex align-items-center top-0 px-2" id="scroll-kiri"></i>
      <div class="d-flex flex-grow-1 overflow-auto m-0" id="scroll-kategori">
        <a href="<?php echo $alamat_website.'games/kategori/slots'; ?>" class="d-block text-nowrap text-white text-decoration-none text-center text-uppercase p-3 ms-auto">
          <img src="admin/assets/images/svg/hot-games.svg" alt="Hot Games" class="d-block my-2 mx-auto" width="25" height="25">
          Hot Games
        </a>
        <a href="<?php echo $alamat_website.'games/kategori/slots'; ?>" class="d-block text-nowrap text-white text-decoration-none text-center text-uppercase p-3">
          <?php
            if ($link_menu_games_aktif == "slots") {
              echo '<img src="admin/assets/images/svg/slots-active.svg" alt="Slots" class="d-block my-2 mx-auto" width="25" height="25">';
            } else {
              echo '<img src="admin/assets/images/svg/slots.svg" alt="Slots" class="d-block my-2 mx-auto" width="25" height="25">';
            }
          ?>
          Slots
        </a>
        <a href="<?php echo $alamat_website.'games/kategori/live_casino'; ?>" class="d-block text-nowrap text-white text-decoration-none text-center text-uppercase p-3">
          <?php
            if ($link_menu_games_aktif == "live_casino") {
              echo '<img src="admin/assets/images/svg/casino-active.svg" alt="Casino" class="d-block my-2 mx-auto" width="25" height="25">';
            } else {
              echo '<img src="admin/assets/images/svg/casino.svg" alt="Casino" class="d-block my-2 mx-auto" width="25" height="25">';
            }
          ?>
          Live Casino
        </a>
        <a href="<?php echo $alamat_website.'games/kategori/sports'; ?>" class="d-block text-nowrap text-white text-decoration-none text-center text-uppercase p-3">
          <?php
            if ($link_menu_games_aktif == "sports") {
              echo '<img src="admin/assets/images/svg/sports-active.svg" alt="Sports" class="d-block my-2 mx-auto" width="25" height="25">';
            } else {
              echo '<img src="admin/assets/images/svg/sports.svg" alt="Sports" class="d-block my-2 mx-auto" width="25" height="25">';
            }
          ?>
          Sports
        </a>
        <a href="<?php echo $alamat_website.'games/kategori/arcade'; ?>" class="d-block text-nowrap text-white text-decoration-none text-center text-uppercase p-3">
          <?php
            if ($link_menu_games_aktif == "arcade") {
              echo '<img src="admin/assets/images/svg/arcade-active.svg" alt="Arcade" class="d-block my-2 mx-auto" width="25" height="25">';
            } else {
              echo '<img src="admin/assets/images/svg/arcade.svg" alt="Arcade" class="d-block my-2 mx-auto" width="25" height="25">';
            }
          ?>
          Arcade
        </a>
        <a href="<?php echo $alamat_website.'games/kategori/poker'; ?>" class="d-block text-nowrap text-white text-decoration-none text-center text-uppercase p-3">
          <?php
            if ($link_menu_games_aktif == "poker") {
              echo '<img src="admin/assets/images/svg/poker-active.svg" alt="Poker" class="d-block my-2 mx-auto" width="25" height="25">';
            } else {
              echo '<img src="admin/assets/images/svg/poker.svg" alt="Poker" class="d-block my-2 mx-auto" width="25" height="25">';
            }
          ?>
          Poker
        </a>
        <a href="<?php echo $alamat_website.'games/kategori/togel'; ?>" class="d-block text-nowrap text-white text-decoration-none text-center text-uppercase p-3 me-auto">
          <?php
            if ($link_menu_games_aktif == "togel") {
              echo '<img src="admin/assets/images/svg/others-active.svg" alt="Togel" class="d-block my-2 mx-auto" width="25" height="25">';
            } else {
              echo '<img src="admin/assets/images/svg/others.svg" alt="Togel" class="d-block my-2 mx-auto" width="25" height="25">';
            }
          ?>
          Togel
        </a>
      </div>
      <i class="ri-arrow-right-s-line fs-4 fw-bold d-flex align-items-center top-0 px-2" id="scroll-kanan"></i>
    </div>
  </div>
</div>

<div class="row g-0">
  <?php
    if (isset($_GET['link_menu_games'])) {
      if (isset($_GET['link_sub_menu_games'])) {
        $link_sub_menu_games_aktif = $_GET['link_sub_menu_games'];
        if (isset($_GET['link_games'])) {
          $link_games_aktif = $_GET['link_games'];
          $games = mysqli_query($koneksi, "SELECT * FROM games WHERE link_games = '$link_games_aktif'");
          $data_games = mysqli_fetch_array($games);
          $id_games = $data_games['id_games'];
          $id_sub_menu_games_games = $data_games['id_sub_menu_games_games'];
          $gambar_games = $data_games['gambar_games'];
          $nama_games = $data_games['nama_games'];
          $link_games = $data_games['link_games'];
          $link_asli_games = $data_games['link_asli_games'];
          $link_demo_games = $data_games['link_demo_games'];
  ?>
  <div class="col-12 p-1">
    <iframe src="<?php echo $link_demo_games; ?>" style="border:none;" name="20olympgate" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="550px" width="100%" allowfullscreen=""></iframe>
  </div>
  <?php
        } else {
          $sub_menu_games = mysqli_query($koneksi, "SELECT * FROM sub_menu_games WHERE link_sub_menu_games = '$link_sub_menu_games_aktif'");
          $data_sub_menu_games = mysqli_fetch_array($sub_menu_games);
          $id_sub_menu_games = $data_sub_menu_games['id_sub_menu_games'];
          $gambar_sub_menu_games = $data_sub_menu_games['gambar_sub_menu_games'];
          $judul_sub_menu_games = $data_sub_menu_games['judul_sub_menu_games'];
          
          $games = mysqli_query($koneksi, "SELECT * FROM games WHERE id_sub_menu_games_games = '$id_sub_menu_games'");
          while ($data_games = mysqli_fetch_array($games)) {
            $id_games = $data_games['id_games'];
            $gambar_games = $data_games['gambar_games'];
            $nama_games = $data_games['nama_games'];
            $link_games = $data_games['link_games'];
            $link_asli_games = $data_games['link_asli_games'];
            $link_demo_games = $data_games['link_demo_games'];
  ?>
  <div class="col-4 p-1">
    <?php
      if ($total_saldo == 0) {
        echo '<a href="'.$alamat_website.'deposit">';
      } else {
        echo '<a href="#'.$link_games.'" data-bs-toggle="modal">';
      }
    ?>
      <img src="admin/assets/images/games/<?php echo $gambar_games; ?>" alt="<?php echo $nama_games; ?>" class="d-block w-100 mb-2">
      <span class="d-block text-center" style="font-size: 14px;"><?php echo $nama_games; ?></span>
    </a>
  </div>

  <div class="modal fade" id="<?php echo $link_games; ?>" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content" style="background-color: #0C0C0C!important;">
        <div class="modal-header align-items-start border-0">
          <i class="ri-close-line fs-6 fw-bold ms-auto" data-bs-dismiss="modal" style="cursor: pointer;"></i>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-6">
              <img src="admin/assets/images/games/<?php echo $gambar_games; ?>" alt="<?php echo $nama_games; ?>" class="d-block w-100 mb-2">
              <span class="d-block text-center" style="font-size: 14px;"><?php echo $nama_games; ?></span>
            </div>
            <div class="col-6">
              <a href="<?php echo $alamat_website.'games/kategori/slots/'.$link_sub_menu_games_aktif.'/'.$link_games; ?>" target="_blank" class="btn btn-secondary d-flex justify-content-center align-items-center rounded-pill w-100 mb-3" style="font-size: 20px;">
                <i class="ri-play-circle-line me-2"></i>
                COBA
              </a>
              <a href="<?php echo $link_asli_games; ?>" class="btn btn-danger d-flex justify-content-center align-items-center rounded-pill w-100 mb-3" style="font-size: 20px;">
                <i class="ri-play-circle-line me-2"></i>
                MAIN
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
          }
        }
      } else {
        $sub_menu_games = mysqli_query($koneksi, "SELECT * FROM sub_menu_games WHERE id_menu_games_sub_menu_games = '$id_menu_games'");
        while ($data_sub_menu_games = mysqli_fetch_array($sub_menu_games)) {
          $id_sub_menu_games = $data_sub_menu_games['id_sub_menu_games'];
          $gambar_sub_menu_games = $data_sub_menu_games['gambar_sub_menu_games'];
          $judul_sub_menu_games = $data_sub_menu_games['judul_sub_menu_games'];
          $link_sub_menu_games = $data_sub_menu_games['link_sub_menu_games'];
          
          if ($link_menu_games_aktif == "slots") {
            if ($link_sub_menu_games == "pragmatic_play") {
  ?>
  <div class="col-4 p-1">
    <?php
      if ($total_saldo == 0) {
        echo '<a href="'.$alamat_website.'deposit">';
      } else {
        echo '<a href="'.$alamat_website.'games/kategori/'.$link_menu_games_aktif.'/'.$link_sub_menu_games.'">';
      }
    ?>
      <img src="admin/assets/images/<?php echo $link_menu_games_aktif; ?>/<?php echo $gambar_sub_menu_games; ?>" alt="<?php echo $judul_sub_menu_games; ?>" class="d-block w-100 mb-2">
      <span class="d-block text-center" style="font-size: 14px;"><?php echo $judul_sub_menu_games; ?></span>
    </a>
  </div>
  <?php
            } else {
  ?>
  <div class="col-4 p-1">
    <?php
      if ($total_saldo == 0) {
        echo '<a href="'.$alamat_website.'deposit">';
      } else {
        echo '<a href="#'.$link_sub_menu_games.'" data-bs-toggle="modal">';
      }
    ?>
      <img src="admin/assets/images/<?php echo $link_menu_games_aktif; ?>/<?php echo $gambar_sub_menu_games; ?>" alt="<?php echo $judul_sub_menu_games; ?>" class="d-block w-100 mb-2">
      <span class="d-block text-center" style="font-size: 14px;"><?php echo $judul_sub_menu_games; ?></span>
    </a>
  </div>

  <div class="modal fade" id="<?php echo $link_sub_menu_games; ?>" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content" style="background-color: #0C0C0C!important;">
        <div class="modal-header align-items-start border-0">
          <i class="ri-close-line fs-6 fw-bold ms-auto" data-bs-dismiss="modal" style="cursor: pointer;"></i>
        </div>
        <div class="modal-body">
          <span class="d-block text-center" style="font-size: 20px;">Mohon maaf games sedang maintenance.</span>
        </div>
        <div class="modal-footer justify-content-center border-secondary" style="border-top: 1px solid #2B2B2B!important;">
          <button type="button" class="btn fw-normal text-white" data-bs-dismiss="modal" style="min-width: 100px; background: #9A0F04; font-size: 14px!important;">OK</button>
        </div>
      </div>
    </div>
  </div>
  <?php
            }
          } else {
  ?>
  <div class="col-4 p-1">
    <?php
      if ($total_saldo == 0) {
        echo '<a href="'.$alamat_website.'deposit">';
      } else {
        echo '<a href="#'.$link_sub_menu_games.'" data-bs-toggle="modal">';
      }
    ?>
      <img src="admin/assets/images/<?php echo $link_menu_games_aktif; ?>/<?php echo $gambar_sub_menu_games; ?>" alt="<?php echo $judul_sub_menu_games; ?>" class="d-block w-100 mb-2">
      <span class="d-block text-center" style="font-size: 14px;"><?php echo $judul_sub_menu_games; ?></span>
    </a>
  </div>

  <div class="modal fade" id="<?php echo $link_sub_menu_games; ?>" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content" style="background-color: #0C0C0C!important;">
        <div class="modal-header align-items-start border-0">
          <i class="ri-close-line fs-6 fw-bold ms-auto" data-bs-dismiss="modal" style="cursor: pointer;"></i>
        </div>
        <div class="modal-body">
          <span class="d-block text-center" style="font-size: 20px;">Mohon maaf games sedang maintenance.</span>
        </div>
        <div class="modal-footer justify-content-center border-secondary" style="border-top: 1px solid #2B2B2B!important;">
          <button type="button" class="btn fw-normal text-white" data-bs-dismiss="modal" style="min-width: 100px; background: #9A0F04; font-size: 14px!important;">OK</button>
        </div>
      </div>
    </div>
  </div>
  <?php
          }
        }
  ?>
</div>
<?php
      }
    }
?>