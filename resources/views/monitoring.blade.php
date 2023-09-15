<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>pantau sampah</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap"
        rel="stylesheet">

    <link href="{{ asset('template') }}/css/bootstrap.min.css" rel="stylesheet">

    <link href="{{ asset('template') }}/css/bootstrap-icons.css" rel="stylesheet">

    <link href="{{ asset('template/css/templatemo-tiya-golf-club.css') }}" rel="stylesheet">

    <!--

TemplateMo 587 Tiya Golf Club

https://templatemo.com/tm-587-tiya-golf-club

-->
</head>

<body>

    <main>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="index.html">
                    <img src="images/logo.png" class="navbar-brand-image img-fluid" alt="">
                    <span class="navbar-brand-text">
                        Siti
                    </span>
                </a>

                {{-- <div class="d-lg-none ms-auto me-3">
                        <a class="btn custom-btn custom-border-btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Member Login</a>
                    </div> --}}

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link click-scroll text-warning" href="#section_1">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_2"></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="data">Data</a>

                    </ul>


                </div>
            </div>
        </nav>

        {{-- <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Member Login</h5>

                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>



                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#3D405B" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
            </div> --}}


        <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">

            <div class="section-overlay"></div>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#3D405B" fill-opacity="1"
                    d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z">
                </path>
            </svg>

            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                        <h2 class="text-white">Welcome to Smart Trash</h2>

                        <h1 class="cd-headline rotate-1 text-white mb-4 pb-2">
                            <span>SMART</span>
                            <span class="cd-words-wrapper">
                                <b class="is-visible">TRASH</b>

                            </span>
                        </h1>

                        <div class="custom-btn-group">
                            <a href="#section_2" class="btn custom-btn smoothscroll me-10">VIEW DATA REALTIME</a>
                        </div>
                    </div>

                    {{-- <div class="col-lg-6 col-12 d-flex justify-content-end">
                            <img src="/img/Icon-Sampah.png" alt="" srcset="">
                        </div> --}}
                    <div class="col-lg-6 col-12 d-flex justify-content-end">
                        <img src="/img/Icon-Sampah.png" class="img-fluid" alt="Responsive image"
                            style="max-width: 200; height: auto;">
                    </div>

                </div>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#ffffff" fill-opacity="1"
                    d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
                </path>
            </svg>
        </section>


        <section class="about-section section-padding" id="section_2">
            <div class="container">
                <div class="row">

                    <!-- Bagian TEMPAT SAMPAH 1 -->
                    <div class="col-6 mx-auto d-flex justify-content-center">
                        <!-- Tambahkan kelas d-flex dan justify-content-center -->
                        <div class="card bg-white border-0" style="width: 25rem;">
                            <div class="w-2/4 flex-none">
                                <div class="text-lg font-medium truncate text-center" style="color: rgb(28, 162, 189);">
                                    KAPASITAS</div>
                                <div class="text-slate-500 mt-1 text-center" style="color: rgb(28, 162, 189);">TEMPAT SAMPAH 1</div>
                            </div>
                            <div class="flex-none ml-auto relative">
                                <canvas id="persentasesampah1" width="400" height="400"></canvas>
                            </div>
                        </div>
                    </div>

                    <!-- Bagian TEMPAT SAMPAH 2 -->
                    <div class="col-6 mx-auto d-flex justify-content-center">
                        <!-- Tambahkan kelas d-flex dan justify-content-center -->
                        <div class="card bg-white border-0" style="width: 25rem;">
                            <div class="w-2/4 flex-none">
                                <div class="text-lg font-medium truncate text-center" style="color: rgb(0, 123, 255);">
                                    KAPASITAS</div>
                                <div class="text-slate-500 mt-1 text-center" style="color: rgb(0, 136, 255);">TEMPAT
                                    SAMPAH 2</div>
                            </div>
                            <div class="flex-none ml-auto relative">
                                <canvas id="persentasesampah2" width="400" height="400"></canvas>
                            </div>
                        </div>
                    </div>



                </div>
            </div>


        </section>

    </main>

    <footer class="site-footer">
        {{-- <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 me-auto mb-5 mb-lg-0">
                        <a class="navbar-brand d-flex align-items-center" href="index.html">
                            <img src="images/logo.png" class="navbar-brand-image img-fluid" alt="">
                            <span class="navbar-brand-text">
                                Sudah Semhas Ni Boss
                            </span>
                        </a>
                    </div>

                    <div class="col-lg-3 col-12">
                        <h5 class="site-footer-title mb-4">Join Us</h5>

                        <p class="d-flex border-bottom pb-3 mb-3 me-lg-3">
                            <span>Mon-Fri</span>
                            6:00 AM - 6:00 PM
                        </p>

                        <p class="d-flex me-lg-3">
                            <span>Sat-Sun</span>
                            6:30 AM - 8:30 PM
                        </p>
                        <br>
                        <p class="copyright-text">Copyright © 2048 Tiya Golf Club</p>
                    </div>

                        <div class="col-lg-2 col-12 ms-auto">
                            <ul class="social-icon mt-lg-5 mt-3 mb-4">
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-instagram"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-twitter"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-whatsapp"></a>
                                </li>
                            </ul>
                            <p class="copyright-text">Design: <a rel="nofollow" href="https://templatemo.com" target="_blank">TemplateMo</a></p>

                        </div>

                </div>
            </div> --}}

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#81B29A" fill-opacity="1"
                d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
            </path>
        </svg>
    </footer>


    <!-- JAVASCRIPT FILES -->
    <script src="{{ asset('template') }}/js/jquery.min.js"></script>
    <script src="{{ asset('template') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('template') }}/js/jquery.sticky.js"></script>
    <script src="{{ asset('template') }}/js/click-scroll.js"></script>
    <script src="{{ asset('template') }}/js/animated-headline.js"></script>
    <script src="{{ asset('template') }}/js/modernizr.js"></script>
    <script src="{{ asset('template') }}/js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            setInterval(function() {
                $("#progress").load("{{ url('kapasitassampah') }}");
                $("#progress2").load("{{ url('kapasitassampah2') }}");

            }, 1000);
        });
    </script>

    <script type="text/javascript">
        // Data persentase kapasitas dari controller
        var kapasitas1 = {{ $kapasitas1 }};
        var kapasitas2 = {{ $kapasitas2 }};

        // Mendefinisikan warna untuk masing-masing bagian
        const COLORS = {
            KAPASITAS1: 'rgba(255, 0, 0, 0.8)', // Mengubah warna Kapasitas 1 menjadi merah
            KAPASITAS2: 'rgba(0, 255, 0, 0.8)', // Mengubah warna Kapasitas 2 menjadi hijau
            SISA: 'rgba(200, 200, 200, 0.2)'
        };


        // Fungsi untuk menginisialisasi pie chart
        // Fungsi untuk menginisialisasi pie chart
        function initializePieChart(canvas, kapasitas, label, color) {
            var ctx = canvas.getContext('2d');
            var sisa = Math.max(0, 100 - kapasitas);

            var data = {
                labels: [label, 'Sisa'],
                datasets: [{
                    data: [kapasitas, sisa],
                    backgroundColor: [color, COLORS.SISA],
                }]
            };

            var options = {
                responsive: true,
                maintainAspectRatio: false,
            };

            return new Chart(ctx, {
                type: 'pie',
                data: data,
                options: options
            });
        }

        // Inisialisasi pie chart untuk TEMPAT SAMPAH 1 dengan warna merah
        var canvas1 = document.getElementById('persentasesampah1');
        var myPieChart1 = initializePieChart(canvas1, kapasitas1, 'Kapasitas 1',
        'rgba(255, 0, 0, 0.8)'); // Mengubah warna menjadi merah

        // Inisialisasi pie chart untuk TEMPAT SAMPAH 2 dengan warna hijau
        var canvas2 = document.getElementById('persentasesampah2');
        var myPieChart2 = initializePieChart(canvas2, kapasitas2, 'Kapasitas 2',
        'rgba(0, 255, 0, 0.8)'); // Mengubah warna menjadi hijau

        // Inisialisasi pie chart untuk TEMPAT SAMPAH 1
        var canvas1 = document.getElementById('persentasesampah1');
        var myPieChart1 = initializePieChart(canvas1, kapasitas1, 'Kapasitas 1');

        // Inisialisasi pie chart untuk TEMPAT SAMPAH 2
        var canvas2 = document.getElementById('persentasesampah2');
        var myPieChart2 = initializePieChart(canvas2, kapasitas2, 'Kapasitas 2');
    </script>

</body>

</html>
