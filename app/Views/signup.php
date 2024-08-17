<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('bootstrap'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('bootstrap'); ?>/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('fontawesome'); ?>/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?= base_url('fontawesome'); ?>/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('template') ?>/css/login-up.css">
    <title><?= $title; ?></title>
</head>
<body>
        <!-- <div class="tempat">
        <i class="fa-regular fa-user i"></i>
       </div> -->


     <div class="container d-flex justify-content-center align-items-center min-vh-100">
       <div class="row border rounded-5 p-3 bg-white shadow box-area">
        <div class="col-md-12 right-box">
            <div class="row align-items-center">
                    <div class="header-text mb-4">
                    <h2 class="text-center">The <span class="JudulKost">Kost</span></h2>
                        <h4 class="text-center mt-2 ">Register</h4>
                    </div>

                    
            <?php 
              $errors = session()->getFlashdata('errors');
              if (!empty($errors)) { ?>
                <div class="alert alert-danger alert-dismissible">
                  
                  <ul>
                    <?php foreach ($errors as $key => $error) { ?>
                      <li><?= esc($error);?></li>
                    <?php } ?>
                  </ul>
                </div>
              <?php }  ?>

              <?php 
        if (session()->getFlashdata('gagal')) {
          echo '<div class="alert alert-warning alert-dismissible">';
           echo session()->getFlashdata('gagal');
          echo "</div>";
        }

        ?>

              <?php 
        if (session()->getFlashdata('daftar')) {
          echo '<div class="alert alert-warning alert-dismissible">
           <i class="icon fas fa-check"></i> ';
           echo session()->getFlashdata('daftar');
          echo "</div>";
        }

        ?>

                <?= form_open('Signup/daftar') ?>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Masukkan Nama Anda" name="nama_user">
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control form-control-lg bg-light fs-6" placeholder="Masukkan Email Anda" name="email">
                    </div>
                    <div class="input-group mb-1">
                        <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Masukkan Password" name="password">
                    </div>
                    <div class="input-group mb-3 d-flex justify-content-between">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="formCheck">
                            <label for="formCheck" class="form-check-label text-secondary"><small>Remember Me</small></label>
                        </div>
                        <!-- <div class="forgot">
                            <small><a href="#">Forgot Password?</a></small>
                        </div> -->
                    </div>
                    <div class="input-group mb-4">
                        <button class="btn btn-lg btn-primary w-100 fs-6">Confirm</button>
                    </div>
                    <?= form_close() ?>

                    <div class="row">
                        <small>I have account ! <a href="<?= base_url('Login') ?>">Login</a></small>
                    </div>
            </div>
        </div> 
      </div>
    </div>

    <script src="<?= base_url('fontawesome'); ?>/js/all.min.js"></script>

</body>
</html>