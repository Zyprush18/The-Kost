<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Kost | Contact Us</title>

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

                        <!-- <li class="nav-item text-center text-md-start text-bold panggilan">
                            <!-- Tambahkan class 'text-center text-md-start' untuk posisi tengah
                            <a class="nav-link active" aria-current="page" href="<= base_url('/'); ?>"><i class="fa-solid fa-house"></i>  Home</a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
    </nav>
   
<div class="container-fluid">
<div class="col-md-12 hhh">
            <a href="<?= base_url('/') ?>" class="text-dark text-decoration-none"><i class="fas fa-arrow-left text-dark mb-3"></i> Kembali</a>
        </div>

</div>

    <div class="tentang ms-5 me-5 topik">
        <div class="container-fluid">
            <h3 class="text-center mt-2 mb-5"><i class="fa-solid fa-headset"></i> Contact Us</h3>
            <div class="card">
                <div class="card-body row mt-4">
                    <div class="col-md-5 text-center d-flex align-items-center justify-content-center">
                        <div>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127365.52505758265!2d122.45464140030641!3d-3.984874333074904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d98ecde0b6b7183%3A0x1397347f9e562fc7!2sKendari%2C%20Kendari%20City%2C%20South%20East%20Sulawesi!5e0!3m2!1sen!2sid!4v1714899924628!5m2!1sen!2sid"
                                width="400" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <form>
                            <div class="form-group">
                                <label for="inputName">Name</label>
                                <input type="text" id="inputName" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">E-Mail</label>
                                <input type="email" id="inputEmail" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="inputSubject">Subject</label>
                                <input type="text" id="inputSubject" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="inputMessage">Message</label>
                                <textarea id="inputMessage" class="form-control" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Send message">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>



    
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