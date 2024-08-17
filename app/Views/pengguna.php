<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Kost</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('bootstrap'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('bootstrap'); ?>/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= base_url('template'); ?>/css/pengguna.css">
    <link rel="stylesheet" href="<?= base_url('adminLTE'); ?>/dist/css/adminlte.css">
    <link rel="stylesheet" href="<?= base_url('fontawesome'); ?>/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- jQuery -->
    <script src="<?= base_url('adminLTE');?>/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('adminLTE');?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="<?= base_url('adminLTE');?>/plugins/chart.js/Chart.min.js"></script>

    <script src="<?= base_url('adminLTE');?>/dist/js/adminlte.min.js"></script>

</head>

<body>
    <nav class="navbar navbar-expand-md bg-white fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand fs-2 text-bold ms-3" href="/">The <span class="JudulKost">Kost</span></a>
            <button class="navbar-toggler shadow-none bolder-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header  border-bottom">
                    <h3 class="offcanvas-title" id="offcanvasNavbarLabel">The Kost</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body d-flex flex-column p-2">
                    <ul class="navbar-nav ms-auto pe-3 fs-7">
                       

                        <li class="nav-item mx-2 search text-bold text-center d-flex vertical-align-middle">   
                            <a class="nav-link" href="" id="searchButton"><i class="fas fa-search tombol-cari"></i></a>
                            <div id="searchForm" style="display: none;">
                                <input type="text" class="form-control" placeholder="Search...">
                            </div>
                        </li>

                        <li class="nav-item text-center text-md-start text-bold panggilan">
                          
                            <a class="nav-link active" aria-current="page" href="<?= base_url('Home/Contact'); ?>"><i
                                    class="fa-solid fa-headset "></i> Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>



    <div class="container-fluid contents">
        <div class="ms-5 me-5">
            <div class="container-fluid d-flex align-items-center">
                <div class="content">
                    <div class="text">
                        <h2>Selamat Datang di Website The <span class="JudulKost">Kost</span></h2>
                        <p>Kami Menyediakan Beberapa Kos-Kosan Yang Berada di Sulawesi Tenggara.</p>
                        <a href="#daftarkos" class="btn btn-outline-success">Cari Kos Sekarang</a>
                    </div>
                </div>
                <img src="<?= base_url('img'); ?>/Bisnis-Kos-kosan.png" alt="" class="imgjudul">
            </div>
        </div>



        <section class="topik" id="daftarkos">
            <div class="judultopik">
                <h4>Daftar Kos</h4>
                <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus et, quas ipsa nihil </span>
            </div>

            <div class="kos ms-auto ">

                <div class="container-fluid">
                    <div class="row">
                        <?php foreach ($kost as $k):?>
                        <div class="col-md-3">

                            <a href="<?= base_url('DetailKost/index/'); ?><?= $k['slug']; ?>" class="card  shadow-none border-0 text-decoration-none text-dark"
                                style="width: 18rem;">
                                <img src="/img/<?= $k['foto'];?>" class="card-img-top rounded" alt="...">
                                <div class="card-body">
                                    <h3><?= $k['nama_kost']; ?></h3>
                                    <span class="inpo">
                                        <i class="fas fa-map-marker-alt"></i> <?= $k['alamat_kost'];?><br>
                                        <i class="fas fa-bed"></i>
                                        <?=  $k['kamar_tersedia']; ?>/<?=  $k['jumlah_kamar'];?><br>
                                        <?php if ($k['tipe_kost'] == 'laki-laki'): ?>
                                        <i class="fa-solid fa-mars"></i> Laki-Laki
                                        <?php elseif ($k['tipe_kost'] == 'perempuan'): ?>
                                        <i class="fa-solid fa-venus"></i> Perempuan
                                        <?php elseif ($k['tipe_kost'] == 'campuran'): ?>
                                        <i class="fa-solid fa-users"></i> Campuran
                                        <?php endif; ?>




                                    </span>
                                    <h5 class="mt-2">Rp. <?= number_format( $k['harga_sewa'], 0);?>/Bln</h5>
                                </div>
                            </a>
                        </div>
                        <?php endforeach; ?>

                    </div>
                </div>



            </div>
        </section>

      <section class="about mt-3">
     
   
        <div class="judultopik">
                <h4>The <span class="JudulKost mp">Kost</span> - Website Kost Terbaik Di Kota Kendari</h4>
                <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus et, quas ipsa nihil </span>

                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum repellat, quod minus asperiores laudantium a non recusandae amet animi cumque ut illum rerum omnis ipsa sint labore! Unde, voluptates deserunt!
                Voluptatibus id accusantium nulla sapiente obcaecati deserunt inventore beatae dicta facilis expedita mollitia illum quam, commodi quidem! Modi ducimus, placeat autem ullam quam dignissimos, eveniet pariatur voluptatum velit numquam dolorum.
                Iste facilis quas beatae explicabo! Voluptatem asperiores maiores, consequatur molestias magni, ipsam accusamus commodi suscipit laborum velit ex eaque libero aperiam magnam, tenetur modi accusantium tempore quam cumque architecto odit.
                Vel dolorum perferendis architecto unde consectetur officiis minus, autem dolores amet, nesciunt quod! Perferendis voluptatum iste doloribus doloremque praesentium, minus sit ipsam. Aliquid quasi impedit neque eaque fugit, tempore distinctio!
                Obcaecati reprehenderit, assumenda at dolore porro neque quasi vel, nisi perspiciatis voluptatibus expedita dolor ratione, ab exercitationem nulla? Ipsa vero ad alias nobis esse vel! Optio unde quisquam quia sed!</p>
            </div>
        

      </section>


    </div>

    <footer class="footer  py-3 bg-light mt-5">
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4">
                <h5>The <span class="JudulKost">Kost</span></h5>
                <p>Dapatkan "info kost murah di kota kendari" hanya di The Kost</p>
            </div>
            <div class="col-md-4">
                <h5>The Kost</h5>
                <ul class="list-unstyled">
                    <li><a href="<?= base_url('/'); ?>">Home</a></li>
                    <li><a href="#About">About Us</a></li>
                    <li><a href="<?= base_url('Contact'); ?>">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Kontak</h5>
                <ul class="list-unstyled">
                    <li><i class="fas fa-map-marker-alt"></i> jln.sini, Kota Kendari, Sulawesi Tenggara</li>
                    <li><i class="fas fa-phone"></i> 0834738473432</li>
                    <li><i class="fas fa-envelope"></i> thekost@gmail.com</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="text-center p-3" >
        &copy; <?= date('Y'); ?> The Kost. All rights reserved.
    </div>
</footer>






    <script src="<?= base_url('bootstrap'); ?>/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('fontawesome'); ?>/js/fontawesome.min.js"></script>
    <script src="<?= base_url('template'); ?>/js/script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
    // Dapatkan elemen tombol search dan input pencarian
    var searchButton = document.getElementById("searchButton");
    var searchForm = document.getElementById("searchForm");

    // Tambahkan event listener untuk klik pada tombol search
    searchButton.addEventListener("click", function(event) {
        event.preventDefault(); // Mencegah aksi default dari link

        // Toggle tampilan input pencarian
        if (searchForm.style.display === "none") {
            searchForm.style.display = "block";
        } else {
            searchForm.style.display = "none";
        }
    });

   
    </script>
</body>

</html>