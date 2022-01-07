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
            <div class="card-body">
              <ul class="conversation-list" data-simplebar style="max-height: 460px">

                <li class="clearfix">
                  <div class="chat-avatar">
                    <img src="<?= base_url();?>assets/images/student.png" class="rounded"
                      alt="<?= $get_id_kritik['nama']?>" />
                  </div>
                  <div class="conversation-text">
                    <div class="ctext-wrap">
                      <i><?= $get_id_kritik['nama']?></i>
                      <p>
                        <?= $get_id_kritik['kritik']?>
                      </p>

                      <i class="float-right"><?= $get_id_kritik['created_at']?></i>
                    </div>
                  </div>
                </li>

                <li class="clearfix odd">
                  <div class="chat-avatar">
                    <img src="<?= base_url();?>assets/images/student.png" class="rounded"
                      alt="<?= $get_id_kritik['nama_grup']?>" />
                  </div>
                  <div class="conversation-text">
                    <div class="ctext-wrap">
                      <i><?= $get_id_kritik['nama_grup']?></i>
                      <p>
                        <?= $get_id_kritik['jawaban']?>
                      </p>

                      <i class="float-left"><?= $get_id_kritik['tgl_kirim']?></i>
                    </div>
                  </div>
                </li>

              </ul>

              <div class="row">
                <div class="col">
                  <div class="mt-2 bg-light p-3 rounded">
                    <form class="needs-validation" novalidate="" name="chat-form" action="" method="post">
                      <input type="hidden" name="id_kritik" value="<?= $get_id_kritik['id_kritik']?>">
                      <input type="hidden" name="user_id" value="<?= $get_iduser['user_id']?>">
                      <div class="row">
                        <div class="col mb-2 mb-sm-0">
                          <input type="text" class="form-control border-0" name="jawaban" placeholder="Enter your text"
                            required="">
                          <div class="invalid-feedback">
                            Please enter your messsage
                          </div>
                        </div>
                        <div class="col-sm-auto">
                          <div class="btn-group">
                            <button type="submit" class="btn btn-success chat-send btn-block"><i
                                class='fe-send'></i></button>
                          </div>
                        </div> <!-- end col -->
                      </div> <!-- end row-->
                    </form>
                  </div>
                </div> <!-- end col-->
              </div>
              <!-- end row -->
            </div> <!-- end card-body -->
          </div> <!-- end card -->
        </div>
        <!-- end chat area-->

      </div> <!-- end row-->

    </div> <!-- container -->