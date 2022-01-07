<div class="auth-fluid">
  <!--Auth fluid left content -->
  <div class="auth-fluid-form-box">
    <div class="align-items-center d-flex h-100">
      <div class="card-body">

        <!-- Logo -->
        <div class="auth-brand text-center text-lg-left">
          <div class="auth-logo">
            <a href="index.html" class="logo logo-dark text-center">
              <span class="logo-lg">
                <img src="../assets/images/logo-dark.png" alt="" height="22">
              </span>
            </a>

            <a href="index.html" class="logo logo-light text-center">
              <span class="logo-lg">
                <img src="../assets/images/logo-light.png" alt="" height="22">
              </span>
            </a>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-12">
            <div class="error-text-box">
              <svg viewBox="0 0 600 200">
                <!-- Symbol-->
                <symbol id="s-text">
                  <text text-anchor="middle" x="50%" y="50%" dy=".35em">404!</text>
                </symbol>
                <!-- Duplicate symbols-->
                <use class="text" xlink:href="#s-text"></use>
                <use class="text" xlink:href="#s-text"></use>
                <use class="text" xlink:href="#s-text"></use>
                <use class="text" xlink:href="#s-text"></use>
                <use class="text" xlink:href="#s-text"></use>
              </svg>
            </div>
            <div class="text-center">
              <h3 class="mt-0 mb-2">Whoops! Page not found </h3>
              <p class="text-muted mb-3">It's looking like you may have taken a wrong turn. Don't worry...
                it happens to the best of us. You might want to check your internet connection.
                Here's a little tip that might help you get back on track.</p>

              <a href="<?= base_url()?>" class="btn btn-success waves-effect waves-light">Back</a>
            </div>
            <!-- end row -->

          </div> <!-- end col -->
        </div>
        <!-- end row -->