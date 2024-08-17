<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>The Kost | <?= $detail->nama_kost; ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('bootstrap'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('bootstrap'); ?>/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= base_url('template'); ?>/css/pengguna.css">
    <link rel="stylesheet" href="<?= base_url('adminLTE'); ?>/dist/css/adminlte.css">
    <link rel="stylesheet" href="<?= base_url('fontawesome'); ?>/css/fontawesome.min.css">
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
                        <!-- Menggunakan 'ms-auto' untuk membuat konten di sebelah kanan -->

                        <li class="nav-item mx-2 search text-bold text-center d-flex">
                            <!-- Tambahkan class 'text-center' -->
                            <a class="nav-link" href="" id="searchButton"><i class="fas fa-search tombol-cari"></i></a>
                            <div id="searchForm" style="display: none;">
                                <input type="text" class="form-control" placeholder="Search...">
                            </div>
                        </li>

                        <li class="nav-item text-center text-md-start text-bold panggilan">
                            <!-- Tambahkan class 'text-center text-md-start' untuk posisi tengah -->
                            <a class="nav-link active" aria-current="page" href="<?= base_url('Home/Contact'); ?>"><i
                                    class="fa-solid fa-headset "></i> Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>


    <div class="container-fluid">
        <div class="col-md-12 hhh">
            <a href="<?= base_url('/') ?>" class="text-dark text-decoration-none"><i
                    class="fas fa-arrow-left text-dark mb-3"></i> Kembali</a>
        </div>

        <div class="col-md-12">
            <img src="/img/<?= $detail->foto; ?>" alt="" class="foto_kost">
        </div>

        <div class="col-md-12">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="kk1 text-bold mt-3"><?= $detail->nama_kost; ?></h1>
                    <div class="kk">

                        <button class="btn btn-outline-secondary btn-sm" disabled>
                            <?php if ($detail->tipe_kost == 'laki-laki'): ?>
                            <i class="fa-solid fa-mars"></i> Laki-Laki
                            <?php elseif ($detail->tipe_kost == 'perempuan'): ?>
                            <i class="fa-solid fa-venus"></i> Perempuan
                            <?php elseif ($detail->tipe_kost == 'campuran'): ?>
                            <i class="fa-solid fa-users"></i> Campuran
                            <?php endif; ?>
                        </button>

                        <i class="fas fa-map-marker-alt ms-3"></i> <?= $detail->alamat_kost;?>
                    </div>
                    <hr>

                </div>
                <div class="col-md-5 mt-4">
                    <div class="card" style="width: auto;  height: 200px;">
                        <div class="card-body">

                            <h2>
                                Rp. <?= number_format( $detail->harga_sewa, 0);?>/Bln</h2><br>
                            <div class="col-md-12">
                                <a href="<?= $detail->lokasi; ?>" class="btn btn-outline-secondary mb-2"
                                    style="width: 440px;"><i class="fa-solid fa-location-crosshairs"></i> Lihat
                                    Lokasi</a>
                                <button class="btn btn-outline-success" style="width: 440px;"
                                    onclick="window.location.href='https://wa.me/62<?= $detail->nomor_telepon; ?>?text=Halo,%20saya%20ingin%20menyewa%20kamar%20kost%20anda';">
                                    <i class="fa-brands fa-whatsapp"></i> Ajukan Sewa
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="col-md-12">
            <h4 class="mb-3">Jumlah Kamar Kost</h4>
            <div class="row">
                <div class="col-md-12 ms-3 mb-5">
                    <h5><i class="fas fa-bed"></i> <?= $detail->kamar_tersedia; ?>/<?= $detail->jumlah_kamar; ?></h5>
                </div>
            </div>
            <div class="row">
                <h4 class="mb-3">Deskripsi Kost</h4>
                <div class="col-md-7 ms-3">
                    <p class="text-justify"><?= $detail->deskripsi; ?></p>
                </div>
            </div>
        </div>

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
        <div class="text-center p-3">
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