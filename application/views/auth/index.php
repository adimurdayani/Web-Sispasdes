<div class="auth-fluid">
  <!--Auth fluid left content -->
  <div class="auth-fluid-form-box">
    <div class="align-items-center d-flex h-100">
      <div class="card-body">

        <!-- Logo -->
        <div class="auth-brand text-center text-lg-left">
          <div class="auth-logo">
            <a href="<?= base_url()?>" class="logo logo-dark text-center">
              <span class="logo-lg">
                <img src="<?= base_url()?>assets/images/logo-sispasdes-dark.png" alt="" height="50">
              </span>
            </a>

            <a href="<?= base_url()?>" class="logo logo-light text-center">
              <span class="logo-lg">
                <img src="<?= base_url()?>assets/images/logo-sispasdes.png" alt="" height="50">
              </span>
            </a>
          </div>
        </div>

        <!-- title-->
        <h4 class="mt-2">Log In</h4>
        <p class="text-muted mb-4">Enter your username and password to access admin panel.</p>

        <!-- form -->
        <form action="<?= base_url('login')?>" method="post">
          <div class="form-group">
            <label for="username">Username</label>
            <input class="form-control" type="text" name="username" id="username" value="<?= set_value('username')?>"
              required="" placeholder="Enter your username">
            <?= form_error('username', '<small class="text-danger">','</small>')?>
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <div class="input-group input-group-merge">
              <input type="password" id="password" class="form-control" name="password"
                placeholder="Enter your password">
              <div class="input-group-append" data-password="false">
                <div class="input-group-text">
                  <span class="password-eye"></span>
                </div>
              </div>
            </div>
            <?= form_error('password', '<small class="text-danger">','</small>')?>
          </div>

          <div class="form-group mb-0 text-center">
            <button class="btn btn-primary btn-block" type="submit">Log In </button>
          </div>
        </form>
        <!-- end form-->