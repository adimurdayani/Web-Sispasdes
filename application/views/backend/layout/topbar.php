<!-- Topbar Start -->
<div class="navbar-custom">
  <div class="container-fluid">
    <ul class="list-unstyled topnav-menu float-right mb-0">

      <li class="dropdown d-none d-lg-inline-block">
        <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="fullscreen" href="#">
          <i class="fe-maximize noti-icon"></i>
        </a>
      </li>

      <li class="dropdown notification-list topbar-dropdown">
        <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
          <i class="fe-bell noti-icon"></i>
          <span class="badge badge-danger rounded-circle noti-icon-badge" id="total-penyewa"><?= $total_penyewa; ?></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-lg">

          <!-- item-->
          <div class="dropdown-item noti-title">
            <h5 class="m-0">
              <span class="float-right">
                <a href="" class="text-dark">
                  <small>Clear All</small>
                </a>
              </span>Notification
            </h5>
          </div>

          <div class="noti-scroll" data-simplebar>

            <!-- item-->
            <a href="<?= base_url('backend/penyewa') ?>" class="dropdown-item notify-item">
              <div class="notify-icon bg-warning">
                <i class="mdi mdi-account-plus"></i>
              </div>
              <p class="notify-details" id="nama">Tidak ada data!</p>
              <p class="text-muted mb-0 user-msg">
                <small class="pesan"></small>
              </p>
              <p class="text-muted mb-0 user-msg">
                <small id="tanggal"></small>
              </p>
            </a>

          </div>

          <!-- All-->
          <a href="<?= base_url('backend/penyewa') ?>" class="dropdown-item text-center text-primary notify-item notify-all">
            View all
            <i class="fe-arrow-right"></i>
          </a>

        </div>
      </li>

      <li class="dropdown notification-list topbar-dropdown">
        <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
          <i class="fe-message-square noti-icon"></i>
          <span class="badge badge-danger rounded-circle noti-icon-badge" id="total-kritik"><?= $total_kritik; ?></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-lg">

          <!-- item-->
          <div class="dropdown-item noti-title">
            <h5 class="m-0">
              <span class="float-right">
                <a href="" class="text-dark">
                  <small>Clear All</small>
                </a>
              </span>Notification
            </h5>
          </div>

          <div class="noti-scroll" data-simplebar>

            <!-- item-->
            <a href="<?= base_url('backend/kritiksaran') ?>" class="dropdown-item notify-item">
              <div class="notify-icon bg-warning">
                <i class="mdi mdi-account-plus"></i>
              </div>
              <p class="notify-details" id="kritik-name">Tidak ada data!</p>
              <p class="text-muted mb-0 user-msg">
                <small class="pesan-kritik"></small>
              </p>
              <p class="text-muted mb-0 user-msg">
                <small id="tanggal-kritik"></small>
              </p>
            </a>

          </div>

          <!-- All-->
          <a href="<?= base_url('backend/penyewa') ?>" class="dropdown-item text-center text-primary notify-item notify-all">
            View all
            <i class="fe-arrow-right"></i>
          </a>

        </div>
      </li>

      <li class="dropdown notification-list topbar-dropdown">
        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
          <img src="<?= base_url() ?>assets/images/student.png" alt="user-image" class="rounded-circle">
          <span class="pro-user-name ml-1">
            <?= $users_ses['nama'] ?> <i class="mdi mdi-chevron-down"></i>
          </span>
        </a>
        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
          <!-- item-->
          <div class="dropdown-header noti-title">
            <h6 class="text-overflow m-0">Welcome !</h6>
          </div>

          <!-- item-->
          <a href="<?= base_url('backend/profile') ?>" class="dropdown-item notify-item">
            <i class="fe-user"></i>
            <span>My Account</span>
          </a>

          <div class="dropdown-divider"></div>

          <!-- item-->
          <a href="#" class="dropdown-item notify-item" data-target="#logout-modal" data-toggle="modal">
            <i class="fe-log-out"></i>
            <span>Logout</span>
          </a>

        </div>
      </li>

    </ul>

    <!-- LOGO -->
    <div class="logo-box">
      <a href="<?= base_url() ?>" class="logo logo-dark text-center">
        <span class="logo-sm">
          <img src="<?= base_url() ?>assets/images/logo.png" alt="" height="40">
          <!-- <span class="logo-lg-text-light">UBold</span> -->
        </span>
        <span class="logo-lg">
          <img src="<?= base_url() ?>assets/images/logo-sispasdes-dark.png" alt="" height="40">
          <!-- <span class="logo-lg-text-light">U</span> -->
        </span>
      </a>

      <a href="<?= base_url() ?>" class="logo logo-light text-center">
        <span class="logo-sm">
          <img src="<?= base_url() ?>assets/images/logo.png" alt="" height="40">
        </span>
        <span class="logo-lg">
          <img src="<?= base_url() ?>assets/images/logo-sispasdes.png" alt="" height="40">
        </span>
      </a>
    </div>

    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
      <li>
        <button class="button-menu-mobile waves-effect waves-light">
          <i class="fe-menu"></i>
        </button>
      </li>

      <li>
        <!-- Mobile menu toggle (Horizontal Layout)-->
        <a class="navbar-toggle nav-link" data-toggle="collapse" data-target="#topnav-menu-content">
          <div class="lines">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </a>
        <!-- End mobile menu toggle-->
      </li>
    </ul>
    <div class="clearfix"></div>
  </div>
</div>
<!-- end Topbar -->
<!-- logout modal content -->
<div id="logout-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="standard-modalLabel">Logout Aplikasi</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      </div>
      <div class="modal-body">
        <p>Apakah anda yakin ingin keluar dari aplikasi?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Tutup</button>
        <a href="<?= base_url('login/logout') ?>" class="btn btn-danger">Logout</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->