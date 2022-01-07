<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<div class="content-page">
  <div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

      <!-- start page title -->
      <div class="row">
        <div class="col-12">
          <div class="page-title-box">
            <div class="page-title-right">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item active"><?= $judul;?></li>
              </ol>
            </div>
            <h4 class="page-title"><?= $judul;?></h4>
          </div>
        </div>
      </div>
      <!-- end page title -->


      <div class="row">
        <div class="col-md-6 col-xl-3">
          <div class="card-box">
            <i class="fa fa-info-circle text-muted float-right" data-toggle="tooltip" data-placement="bottom" title=""
              data-original-title="More Info"></i>
            <h4 class="mt-0 font-16">Penyewa</h4>
            <h2 class="text-primary my-3 text-center"><span data-plugin="counterup"
                id="totalpenye"><?= $total_penyewa?></span></h2>
            <p class="text-muted mb-0">Total Penyewa: <?= $get_register;?> <span class="float-right"><i
                  class="fa fa-caret-up text-success mr-1"></i>10.25%</span></p>
          </div>
        </div>

        <div class="col-md-6 col-xl-3">
          <div class="card-box">
            <i class="fa fa-info-circle text-muted float-right" data-toggle="tooltip" data-placement="bottom" title=""
              data-original-title="More Info"></i>
            <h4 class="mt-0 font-16">Penduduk</h4>
            <h2 class="text-primary my-3 text-center"><span data-plugin="counterup"><?= $get_penduduk;?></span></h2>
            <p class="text-muted mb-0">Total Dusun: <?= $get_dusun;?> <span class="float-right"><i
                  class="fa fa-caret-down text-danger mr-1"></i>7.85%</span></p>
          </div>
        </div>

        <div class="col-md-6 col-xl-3">
          <div class="card-box">
            <i class="fa fa-info-circle text-muted float-right" data-toggle="tooltip" data-placement="bottom" title=""
              data-original-title="More Info"></i>
            <h4 class="mt-0 font-16">Dusun</h4>
            <h2 class="text-primary my-3 text-center"><span data-plugin="counterup"><?= $get_dusun;?></span></h2>
            <p class="text-muted mb-0">Total RT: <?= $get_rt;?> <span class="float-right"><i
                  class="fa fa-caret-up text-success mr-1"></i>3.64%</span></p>
          </div>
        </div>

        <div class="col-md-6 col-xl-3">
          <div class="card-box">
            <i class="fa fa-info-circle text-muted float-right" data-toggle="tooltip" data-placement="bottom" title=""
              data-original-title="More Info"></i>
            <h4 class="mt-0 font-16">Total Users</h4>
            <h2 class="text-primary my-3 text-center"><span data-plugin="counterup"><?= $get_register;?></span></h2>
            <p class="text-muted mb-0">Total register: <?= $get_register;?> <span class="float-right"><i
                  class="fa fa-caret-up text-success mr-1"></i>17.48%</span></p>
          </div>
        </div>
      </div>
      <!-- end row -->

      <div class="row">
        <div class="col-xl">
          <div class="card">
            <div class="card-body">
              <h4 class="header-title mb-3">Kritik & Saran</h4>

              <div class="inbox-widget" data-simplebar style="max-height: 407px;">
                <?php foreach($get_kritik as $data):?>
                <div class="inbox-item">
                  <div class="inbox-item-img"><img src="<?= base_url()?>assets/images/student.png"
                      class="rounded-circle" alt=""></div>
                  <p class="inbox-item-author"><?= $data['nama']?></p>
                  <p class="inbox-item-text"><?= word_limiter($data['kritik'], 20)?></p>
                  <p class="inbox-item-date">
                    <a href="<?= base_url('backend/kritiksaran/detail/') . $data['id_kritik']?>"
                      class="btn btn-sm btn-link text-info font-13"> Reply </a>
                  </p>
                </div>
                <?php endforeach;?>
              </div> <!-- end inbox-widget -->
            </div>
          </div> <!-- end card -->
        </div> <!-- end col -->
      </div>
      <!-- end row -->

    </div> <!-- container -->

  </div> <!-- content -->