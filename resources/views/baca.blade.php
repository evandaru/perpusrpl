<!--
=========================================================
* Material Kit 2 - v3.0.4
=========================================================

* Product Page:  https://www.creative-tim.com/product/material-kit
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/img/favicon.png">
    <title>
        Material Kit 2 by Creative Tim
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="/css/nucleo-icons.css" rel="stylesheet" />
    <link href="/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="/css/material-kit.css?v=3.0.4" rel="stylesheet" />
</head>

<body class="contact-us">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3  navbar-dark ">
        <div class="container">
            <a class="navbar-brand  text-white " href="https://demos.creative-tim.com/material-kit/presentation"
                rel="tooltip" title="Eperpus" data-placement="bottom" target="_blank">
                E-Perpus
            </a>

            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/pinjaman">Kembali</a>
                </li>

            </ul>
        </div>

    </nav>
    <!-- End Navbar -->
    </div>
    </div>
    </div>
    <!-- -------- START HEADER 8 w/ card over right bg image ------- -->
    <section>
        <div class="page-header min-vh-100">
            <div class="container">
                <div class="row">
                    <div
                        class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
                        <div class="position-relative h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center"
                            style="background-image: url('/img/buku/{{ $data['gambar_buku'] }}.jpg'); background-size: cover;"
                            loading="lazy">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
                        <div class="card d-flex blur justify-content-center shadow-lg my-sm-0 my-sm-6 mt-8 mb-5">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg p-3">
                                    <h3 class="text-white text-primary mb-0">{{ $data['nama_buku'] }}</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="pb-3">
                                    pengarang : {{ $data['pengarang_buku'] }}
                                    <br>
                                    Penerbit : {{ $data['penerbit_buku'] }}
                                    <br>
                                    ISBN : {{ $data['isbn'] }}

                                </p>
                                <a href="/pura-baca" class="text-info text-sm icon-move-right">lanjut baca
                                    <i class="fas fa-arrow-right text-xs ms-1"></i>
                                </a>


                                <div class="row">

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- -------- END HEADER 8 w/ card over right bg image ------- -->

    <!--   Core JS Files   -->
    <script src="/js/core/popper.min.js" type="text/javascript"></script>
    <script src="/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="/js/plugins/perfect-scrollbar.min.js"></script>
    <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
    <script src="/js/plugins/parallax.min.js"></script>
    <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
    <script src="/js/material-kit.min.js?v=3.0.4" type="text/javascript"></script>
</body>

</html>

{{-- @foreach ($data as $datas)
    {{ $datas->nama_buku }}
@endforeach --}}

{{ $data['id'] }}
{{ $data['nama_buku'] }}
