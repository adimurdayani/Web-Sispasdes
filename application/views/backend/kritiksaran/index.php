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
                <li class="breadcrumb-item"><a href="<?= base_url()?>">Dashboard</a></li>
                <li class="breadcrumb-item active"><?= $judul?></li>
              </ol>
            </div>
            <h4 class="page-title"><?= $judul?></h4>
          </div>
        </div>
      </div>
      <!-- end page title -->

      <div class="row">
        <!-- start chat users-->
        <div class="col-xl-3 col-lg-4">
          <div class="card">
            <div class="card-body">

              <div class="media mb-3">
                <img src="<?= base_url();?>assets/images/student.png" class="mr-2 rounded-circle" height="42"
                  alt="Brandon Smith">
                <div class="media-body">
                  <h5 class="mt-0 mb-0 font-15">
                    <a href="contacts-profile.html" class="text-reset"><?= $users_ses['nama']?></a>
                  </h5>
                  <?php if($users_ses['user_active'] == 1):?>
                  <p class="mt-1 mb-0 text-muted font-14">
                    <small class="mdi mdi-circle text-success"></small> Online
                  </p>
                  <?php endif;?>
                </div>
                <div>
                  <a href="<?= base_url('backend/profile')?>" class="text-reset font-20">
                    <i class="mdi mdi-cog-outline"></i>
                  </a>
                </div>
              </div>

              <!-- start search box -->
              <form class="search-bar mb-3">
                <div class="position-relative">
                  <input type="text" class="form-control form-control-light" placeholder="People, groups & messages...">
                  <span class="mdi mdi-magnify"></span>
                </div>
              </form>
              <!-- end search box -->

              <h6 class="font-13 text-muted text-uppercase mb-2">Contacts</h6>

              <!-- users -->
              <div class="row">
                <div class="col">
                  <div data-simplebar style="max-height: 375px">

                    <?php foreach($get_kritik as $datakritik):?>
                    <a href="<?= base_url('backend/kritiksaran/detail/') . $datakritik['user_id']?>"
                      class="text-body">
                      <div class="media p-2">
                        <img src="<?= base_url();?>assets/images/student.png" class="mr-2 rounded-circle" height="42"
                          alt="Brandon Smith" />
                        <div class="media-body">
                          <h5 class="mt-0 mb-0 font-14">
                            <span
                              class="float-right text-muted font-weight-normal font-12"><?= $datakritik['created_at']?></span>
                            <?= $datakritik['nama']?>
                          </h5>
                          <p class="mt-1 mb-0 text-muted font-14">
                            <a href="#" data-target="#hapus-modal<?= $datakritik['id_kritik']?>"
                              data-toggle="modal"><span class="w-25 float-right text-right"><span
                                  class="badge badge-soft-danger">Delete</span></span></a>
                            <span class="w-75"><?= word_limiter($datakritik['kritik'], 10)?></span>
                          </p>
                        </div>
                      </div>
                    </a>
                    <?php endforeach;?>

                  </div> <!-- end slimscroll-->
                </div> <!-- End col -->
              </div>
              <!-- end users -->
            </div> <!-- end card-body-->
          </div> <!-- end card-->
        </div>
        <!-- end chat users-->

        <!-- chat area -->
        <div class="col-xl-9 col-lg-8">

          <div class="card">
            <div class="card-body py-2 px-3 border-bottom border-light">
              <div class="media py-1">
                <img src="<?= base_url();?>assets/images/student.png" class="mr-2 rounded-circle" height="36"
                  alt="Brandon Smith">
                <div class="media-body">
                  <h5 class="mt-0 mb-0 font-15">
                    <a href="contacts-profile.html" class="text-reset"><?= $users_ses['nama']?></a>
                  </h5>
                  <?php if($users_ses['user_active'] == 1):?>
                  <p class="mt-1 mb-0 text-muted font-12">
                    <small class="mdi mdi-circle text-success"></small> Online
                  </p>
                  <?php endif;?>
                </div>

              </div>
            </div>
          </div> <!-- end card -->
        </div>
        <!-- end chat area-->

      </div> <!-- end row-->

    </div> <!-- container -->

    <!-- hapus modal content -->
    <?php foreach($get_kritik as $hapus):?>
    <div id="hapus-modal<?= $hapus['id_kritik']?>" class="modal fade" tabindex="-1" role="dialog"
      aria-labelledby="standard-modalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="standard-modalLabel">Hapus Data</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body">
            <p>Apakah anda yakin ingin menghapus data tersebut?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal">Tutup</button>
            <a href="<?= base_url('backend/kritiksaran/hapus/') . $hapus['id_kritik']?>" class="btn btn-danger"><i
                class="fe-save"></i> Hapus</a>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <?php endforeach;?>