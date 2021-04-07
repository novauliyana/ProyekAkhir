<body>

  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 login-half-bg d-flex flex-row">
          </div>

          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <div class="brand-logo">
                <img src="<?= base_url('assets/templates/') ?>images/logo-sma-01.png" alt="logo">
              </div>
              <h4>Masuk</h4>
              <h6 class="font-weight-light">Selamat datang di LMS SMA Prestasi Prima.</h6>
              <form class="pt-3" method="post" action="<?= base_url('auth') ?>">
                <?= $this->session->flashdata('message'); ?>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control form-control-lg border-left-0" id="email" name="email" placeholder="Email" value="<?= set_value('email') ?>">
                  </div>
                  <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">

                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="password" class="form-control form-control-lg border-left-0" id="password" name="password" placeholder="Password">
                  </div>
                  <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <a href="<?= base_url('auth/forgetpassword') ?>" class="auth-link text-black">Lupa kata sandi?</a>
                </div>
                <div class="my-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">LOGIN</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>