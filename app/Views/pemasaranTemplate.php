<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('bootstrap'); ?>/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= base_url('template'); ?>/css/style.css">
    <link rel="stylesheet" href="<?= base_url('adminLTE'); ?>/dist/css/adminlte.css">
    <link rel="stylesheet" href="<?= base_url('fontawesome'); ?>/css/fontawesome.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('adminLTE');?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="<?= base_url('adminLTE');?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('adminLTE');?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- jQuery -->
    <script src="<?= base_url('adminLTE');?>/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('adminLTE');?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="<?= base_url('adminLTE');?>/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('adminLTE');?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url('adminLTE');?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url('adminLTE');?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url('adminLTE');?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url('adminLTE');?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url('adminLTE');?>/plugins/jszip/jszip.min.js"></script>
    <script src="<?= base_url('adminLTE');?>/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?= base_url('adminLTE');?>/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?= base_url('adminLTE');?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url('adminLTE');?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url('adminLTE');?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- ChartJS -->
    <script src="<?= base_url('adminLTE');?>/plugins/chart.js/Chart.min.js"></script>

    <script src="<?= base_url('adminLTE');?>/dist/js/adminlte.min.js"></script>

    <script src="<?= base_url('autoNumeric');?>/src/AutoNumeric.js"></script>




</head>

<body>
    <div class="wrapper">

        <div class="main">
            <!-- Navbar -->
            <nav class="navbar navbar-expand px-2 border-bottom">
                <!-- <button class="btn" id="sidebar-toggle" type="button">
        <i class="fas fa-bars"></i>
    </button> -->
                <span class="ms-5 mb-0 h3">The <span class="JudulKost">Kost</span></span>



                <!-- Navbar Items -->
                <div class="navbar-collapse navbar">
                    <ul class="navbar-nav d-flex align-items-center">
                        <!-- Apply flex utilities -->
                        <!-- Comments Icon -->
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0 pesan">
                                <i class="fa-regular fa-bell"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">P</a>
                                <a href="#" class="dropdown-item">S</a>
                                <a href="#" class="dropdown-item">L</a>
                            </div>
                        </li>
                        <!-- Profile Image -->
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                <img src="<?= base_url('template'); ?>/image/profile.jpg"
                                    class="avatar img-fluid rounded" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#profil"><i class="fa-regular fa-user"></i>  Profile</a>
                    <a href="<= base_url('Login/Logout'); ?>" class="dropdown-item"><i class="fa-solid fa-right-from-bracket"></i>  Logout</a> -->
                                <?php if (session()->get('level') == "1") { ?>

                                <a class="dropdown-item" href="<?= base_url('Admin'); ?>">
                                    <i class="fas fa-tachometer-alt"></i> Dashboard
                                </a>
                                <?php } else {?>
                                <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#profil">
                                    <i class="fa-regular fa-user"></i> <?= session()->get('nama_user'); ?>
                                </a>
                                <a class="dropdown-item" href="<?= base_url('Login/Logout'); ?>">
                                    <i class="fas fa-sign-in-alt"></i> Logout
                                </a>

                                <?php }?>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>


            <div class="content-header">
                <div class="container-fluid">
                    <div class="row">
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

              <?php if (session()->getFlashdata('tambah')) :?> 
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                 <i class="icon fas fa-check"></i> 
                    <?= session()->getFlashdata('tambah');?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
               <?php endif;?> 
 <?php if (session()->getFlashdata('ubah')) :?> 
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                 <i class="icon fas fa-check"></i> 
                    <?= session()->getFlashdata('ubah');?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
               <?php endif;?> 
 <?php if (session()->getFlashdata('hapus')) :?> 
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                 <i class="icon fas fa-check"></i> 
                    <?= session()->getFlashdata('hapus');?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
               <?php endif;?> 

        
                        <?php 
                            if ($page){
                                echo view($page);
                            }
                        
                        ?>
                        
                    </div>
                </div>
            </div>

            <!-- <footer class=" text-dark border-top fixed-bottom">
        <span>Kost &copy;2024. All rights reserved.</span>
    </footer> -->

            <div class="modal fade" id="profil" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
                role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTitleId">
                                Profile
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">Body</div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="button" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <script src="<?= base_url('bootstrap'); ?>/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('fontawesome'); ?>/js/fontawesome.min.js"></script>
    <script src="<?= base_url('template'); ?>/js/script.js"></script>
</body>

</html>