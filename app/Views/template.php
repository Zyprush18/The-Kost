
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    
    <!-- DataTables -->
 <link rel="stylesheet" href="<?= base_url('adminLTE');?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url('adminLTE');?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url('adminLTE');?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">


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


    
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar" class="js-sidebar">
            <!-- Content For Sidebar -->
            <div class="h-100">
                <div class="sidebar-logo text-center">
                    <a href="<?= base_url('/'); ?>">The <span class="JudulKost">Kost</span></a>
                </div>
                <div class="sidebar-header">
                    <span>Menu</span>
                </div>
                <ul class="sidebar-nav" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="sidebar-item">
                        <a href="<?= base_url('Admin'); ?>" class="sidebar-link <?= $menu == 'dashboard' ? 'activeted' : ''?>">
                        <i class="fas fa-tachometer-alt pe-2"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="<?= base_url('Pemasaran'); ?>" class="sidebar-link <?= $menu == 'member' ? 'activeted' : ''?>">
                        <i class="fas fa-bullhorn pe-2"></i>
                            Pemasaran
                        </a>
                    </li>
                    <li class="sidebar-item <?= $menu == 'data' ? 'menu-open' : ''?>">
                        <a href="" class="sidebar-link <?= $menu == 'data' ? 'activeted' : ''?>" data-bs-target="#pages" data-bs-toggle="collapse"
                            aria-expanded="false">
                            <i class="fa-solid fa-file-lines pe-2"></i>
                               Data
                        </a>
                        <ul id="pages" class="sidebar-dropdown list-unstyled collapse <?= $menu == 'data' ? 'show' : '' ?>" data-bs-parent="#sidebar">
                   
                            <li class="sidebar-item">
                                <a href="<?= base_url('Kost'); ?>" class="sidebar-links  <?= $submenu == 'kost' ? 'submenu-active' : '' ?>"><i class="far fa-circle me-1 ms-3"></i> Kost</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="<?= base_url('User'); ?>" class="sidebar-links <?= $submenu == 'user' ? 'submenu-active' : '' ?>"><i class="far fa-circle me-1 ms-3"></i> User</a>
                            </li>
                        </ul>
                    </li>
                    
                      <!-- <li class="sidebar-item">
                        <a href="<?= base_url('Setting'); ?>" class="sidebar-link <?= $menu == 'setting' ? 'activeted' : ''?>">
                        <i class="fa-solid fa-gear pe-2"></i>
                            Setting
                        </a>
                    </li> -->

                </ul>
            </div>
        </aside>

        <div class="main">
            <!-- Navbar -->
<nav class="navbar navbar-expand px-2 border-bottom">
    <button class="btn" id="sidebar-toggle" type="button">
        <i class="fas fa-bars"></i>
    </button>



    <!-- Navbar Items -->
    <div class="navbar-collapse navbar">
        <ul class="navbar-nav d-flex align-items-center"> <!-- Apply flex utilities -->
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
                    <img src="<?= base_url('template'); ?>/image/profile.jpg" class="avatar img-fluid rounded" alt="">
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#profil"><i class="fa-regular fa-user"></i>  Profile</a>
                    <a href="<?= base_url('Login/Logout'); ?>" class="dropdown-item"><i class="fa-solid fa-right-from-bracket"></i>  Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>


            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-9">
                            <h3 class="m-0"><?= $judul; ?></h3>
                        </div>
                        <div class="col-sm-3 ">
                            <ol class="breadcrumb float-sm-right ms-5">
                                <li class="breadcrumb-item "><?= $menu; ?></li>
                                <li class="breadcrumb-item active"><?= $submenu; ?></li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
              
                        <?php 
                            if ($page){
                                echo view($page);
                            }
                        
                        ?>
                        
                    </div>
                </div>
            </div>
            
            <!-- <footer class=" text-dark border-top">
        <span>Kost &copy;2024. All rights reserved.</span>
    </footer> -->
    
<div class="modal fade" id="profil" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
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
                <button type="button" class="btn btn-secondary"data-bs-dismiss="modal">
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
