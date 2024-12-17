
<html lang="en"><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login CMS</title>
  <link rel="shortcut icon" type="image/png" href="<?= base_url('assets/Modernize') ?>/assets/images/logos/favicon.png">
  <link rel="stylesheet" href="<?= base_url('assets/Modernize') ?>/assets/css/styles.min.css">
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
              <div class="ngilang">
                <?= $this->session->flashdata('alert') ?>
              </div>
                <h1 style="position:relative;left:6.4rem;"><strong>LOGIN</strong></h1>
                <p class="text-center">Login terlebih dahulu</p>
                <form action="<?= base_url('auth/login') ?>" method="post">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" id="username"  placeholder="Masukkan Username" required>
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label" >Password</label>
                    <input type="password" class="form-control" name="password" id="password"  placeholder="Masukkan Password" required>
                  </div>
                  </div>
                  <button href="<?= base_url('auth/login') ?>" class="btn btn-primary w-50 py-8 fs-4 mb-4 rounded-2" style="position:relative;left:6rem;">Login</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="<?= base_url('assets/Modernize') ?>/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="<?= base_url('assets/Modernize') ?>/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>


</body></html>