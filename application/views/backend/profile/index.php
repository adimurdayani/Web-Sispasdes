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
                <li class="breadcrumb-item active"><?= $judul;?></li>
              </ol>
            </div>
            <h4 class="page-title"><?= $judul;?></h4>
          </div>
        </div>
      </div>
      <!-- end page title -->

      <div class="row">
        <div class="col-lg-4 col-xl-4">
          <div class="card-box text-center">
            <img src="<?= base_url();?>assets/images/student.png" class="rounded-circle avatar-lg img-thumbnail"
              alt="profile-image">

            <h4 class="mb-0"><?= $users_ses['nama'];?></h4>
            <p class="text-muted"><?= $users_ses['email']?></p>
            <p class="text-muted"><?= $users_ses['nama_grup']?></p>

            <div class="text-left mt-3">
              <h4 class="font-13 text-uppercase">About Me :</h4>
              <p class="text-muted font-13 mb-3">
                Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the
                1500s, when an unknown printer took a galley of type.
              </p>

              <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span
                  class="ml-2 "><?= $users_ses['email']?></span>
              </p>

              <p class="text-muted mb-1 font-13"><strong>Username :</strong> <span
                  class="ml-2"><?= $users_ses['username']?></span></p>
            </div>

          </div> <!-- end card-box -->

        </div> <!-- end col-->

        <div class="col-lg-8 col-xl-8">
          <div class="card-box">
            <ul class="nav nav-pills navtab-bg nav-justified">
              </li>
              <li class="nav-item">
                <a href="#settings" data-toggle="tab" aria-expanded="false" class="nav-link active">
                  Settings
                </a>
              </li>
            </ul>
            <div class="tab-content">
              <?= $this->session->flashdata('message');?>

              <div class="tab-pane show active" id="settings">
                <form action="<?= base_url('backend/profile');?>" method="POST">
                  <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle mr-1"></i> Info Personal</h5>
                  <input type="hidden" name="user_id" id="user_id" value="<?= $users_ses['user_id']?>">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="firstname">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" id="firstname"
                          value="<?= $users_ses['nama']?>" placeholder="Enter first name">
                        <?= form_error('nama', '<small class="text-danger">','</small>')?>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="lastname">Username</label>
                        <input type="text" class="form-control" name="username" id="lastname"
                          value="<?= $users_ses['username']?>" placeholder="Enter last username">
                        <?= form_error('username', '<small class="text-danger">','</small>')?>
                      </div>
                    </div> <!-- end col -->
                  </div> <!-- end row -->

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="useremail">Email Address</label>
                        <input type="email" class="form-control" name="email" id="useremail" placeholder="Enter email"
                          value="<?= $users_ses['email']?>">
                        <?= form_error('email', '<small class="text-danger">','</small>')?>
                      </div>
                    </div>
                  </div> <!-- end row -->

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="userpassword">Password</label>
                        <input type="password" class="form-control" name="password" id="userpassword"
                          placeholder="Enter password">
                        <?= form_error('password', '<small class="text-danger">','</small>')?>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="userpassword">Konfirmasi Password</label>
                        <input type="password" class="form-control" name="konfir_pass" id="userpassword"
                          placeholder="Enter konfrimasi password">
                      </div>
                    </div>
                  </div>
                  <div class="text-right">
                    <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i
                        class="mdi mdi-content-save"></i> Save</button>
                  </div>
                </form>
              </div>
              <!-- end settings content-->

            </div> <!-- end tab-content -->
          </div> <!-- end card-box-->

        </div> <!-- end col -->
      </div>
      <!-- end row-->

    </div> <!-- container -->

  </div> <!-- content -->