<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <title>
        eperpus | daftar buku
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="css/nucleo-icons.css" rel="stylesheet" />
    <link href="css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="css/material-kit.css?v=3.0.4" rel="stylesheet" />
</head>

<body class="blog-author bg-gray-200">

    <!-- End Navbar -->
    <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3  navbar-transparent ">
        <div class="container">
            <a class="navbar-brand  text-white " href="https://demos.creative-tim.com/material-kit/presentation"
                rel="tooltip" title="Eperpus" data-placement="bottom" target="_blank">
                E-Perpus
            </a>

            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/tampil">Daftar Buku</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pinjaman">My Buku</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login">Log Out</a>
                </li>

            </ul>
        </div>

    </nav>
    <!-- -------- START HEADER 4 w/ search book a ticket form ------- -->
    <header>
        <div class="page-header min-height-200" style="background-image: url('img/city-profile.jpg');" loading="lazy">
            <span class="mask bg-gradient-dark opacity-8"></span>
        </div>
    </header>
    <!-- -------- END HEADER 4 w/ search book a ticket form ------- -->
    <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6 mb-4">
        <!-- START Testimonials w/ user image & text & info -->

        <!-- END Testimonials w/ user image & text & info -->
        <!-- START Blogs w/ 4 cards w/ image & text & link -->
        <section class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="mb-5">MyBook</h3>
                    </div>
                </div>
                {{-- isi Buku --}}
                <div class="row">
                    @foreach ($pinjam as $pinjams)
                        <div class="col-lg-3 col-sm-6">
                            <div class="card card-plain">
                                <div class="card-header p-0 position-relative">
                                    <a class="d-block blur-shadow-image">
                                        <img src="img/buku/{{ $pinjams->gambar_buku }}.jpg" alt="img-blur-shadow"
                                            class="img-fluid shadow border-radius-lg" loading="lazy">
                                    </a>
                                </div>
                                <div class="card-body px-0">
                                    <h5>
                                        <a href="javascript:;"
                                            class="text-dark font-weight-bold">{{ $pinjams->nama_buku }}</a>
                                    </h5>
                                    <p>

                                        pengarang : {{ $pinjams->pengarang_buku }}
                                        <br>
                                        Penerbit : {{ $pinjams->penerbit_buku }}
                                        <br>
                                        ISBN : {{ $pinjams->isbn }}

                                    </p>
                                    <a href="/pinjaman/{{ $pinjams->id }}/{{ $pinjams->nama_buku }}/{{ $pinjams->gambar_buku }}/{{ $pinjams->penerbit_buku }}/{{ $pinjams->pengarang_buku }}/{{ $pinjams->isbn }}/baca"
                                        class="text-info text-sm icon-move-right">Baca
                                        <i class="fas fa-arrow-right text-xs ms-1"></i>
                                    </a>
                                    <a href="/pinjaman/{{ $pinjams->id }}"
                                        class="text-info text-sm icon-move-right">Hapus
                                        <i class="fas fa-arrow-right text-xs ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{-- selesai --}}
            </div>
    </div>
    </section>
    <!-- END Blogs w/ 4 cards w/ image & text & link -->
    </div>

    <!-- -------- START FOOTER 5 w/ DARK BACKGROUND ------- -->
    <footer class="footer py-5">
        <div class="container z-index-1 position-relative">
            <div class="row">
                <div class="col-lg-4 me-auto mb-lg-0 mb-4 text-lg-start text-center">
                    <h6 class="text-dark font-weight-bolder text-uppercase mb-lg-4 mb-3">Eperpus</h6>

                    <p class="text-sm text-dark opacity-8 mb-0">
                        Copyright ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script> Eperpus
                    </p>
                </div>
                <div class="col-lg-6 ms-auto text-lg-end text-center">
                    <p class="mb-5 text-lg text-dark font-weight-bold">
                        monggo baca buku biar pintar 👋🏻😎😎
                    </p>
                    <a href="javascript:;" target="_blank" class="text-dark me-xl-4 me-4 opacity-5">
                        <span class="fab fa-dribbble"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="text-dark me-xl-4 me-4 opacity-5">
                        <span class="fab fa-twitter"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="text-dark me-xl-4 me-4 opacity-5">
                        <span class="fab fa-pinterest"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="text-dark opacity-5">
                        <span class="fab fa-github"></span>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <!-- -------- END FOOTER 5 w/ DARK BACKGROUND ------- -->
    <!--   Core JS Files   -->
    <script src="js/core/popper.min.js" type="text/javascript"></script>
    <script src="js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/plugins/perfect-scrollbar.min.js"></script>
    <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
    <script src="js/plugins/parallax.min.js"></script>
    <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
    <script src="js/material-kit.min.js?v=3.0.4" type="text/javascript"></script>
</body>

</html>
