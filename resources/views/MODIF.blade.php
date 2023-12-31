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
                <a class="navbar-brand d-flex align-items-center">

                    <span class="navbar-brand-text">
                        monitoring waste capacity
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
                        <h2 class="text-white">Welcome </h2>

                        <h1 class="cd-headline rotate-1 text-white mb-4 pb-2">
                            <span>WASTE BIN</span>
                            <span class="cd-words-wrapper">
                                <b class="is-visible">MONITORING</b>

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
                <div></div>
            </div>

            <div class="container ">

                <div class="row">
                    <!-- Bagian TEMPAT SAMPAH 1 -->
                    <div class="col-6 mx-auto d-flex justify-content-center">
                        <!-- Tambahkan kelas d-flex dan justify-content-center -->
                        <div class="card bg-white border-0" style="width: 20rem;">
                            <div class="w-2/4 flex-none">
                                <h3></h3>
                                <div class="text-lg font-medium truncate text-center" style="color: rgb(28, 162, 189);">
                                    KAPASITAS</div>
                                <div class="text-slate-500 mt-1 text-center" style="color: rgb(28, 162, 189);">TEMPAT
                                    SAMPAH 1</div>
                            </div>
                            <div class="flex-none ml-auto relative">
                                <div id="chart-1" class="chart-container"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Bagian TEMPAT SAMPAH 2 -->
                    <div class="col-6 mx-auto d-flex justify-content-center">
                        <!-- Tambahkan kelas d-flex dan justify-content-center -->
                        <div class="card bg-white border-0" style="width: 20rem;">
                            <div class="w-2/4 flex-none">
                                <div class="text-lg font-medium truncate text-center" style="color: rgb(0, 123, 255);">
                                    KAPASITAS</div>
                                <div class="text-center" style="color: rgb(0, 136, 255);">TEMPAT
                                    SAMPAH 2</div>
                            </div>
                            <div class="flex-none ml-auto relative">
                                <div id="chart-2" class="chart-container"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                </div>



            </div>
        </section>
        <section class="section-bg-image">
            <svg viewBox="0 0 1265 144" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <path fill="rgba(255, 255, 255, 1)" d="M 0 40 C 164 40 164 20 328 20 L 328 20 L 328 0 L 0 0 Z"
                    stroke-width="0"></path>
                <path fill="rgba(255, 255, 255, 1)" d="M 327 20 C 445.5 20 445.5 89 564 89 L 564 89 L 564 0 L 327 0 Z"
                    stroke-width="0"></path>
                <path fill="rgba(255, 255, 255, 1)" d="M 563 89 C 724.5 89 724.5 48 886 48 L 886 48 L 886 0 L 563 0 Z"
                    stroke-width="0"></path>
                <path fill="rgba(255, 255, 255, 1)"
                    d="M 885 48 C 1006.5 48 1006.5 67 1128 67 L 1128 67 L 1128 0 L 885 0 Z" stroke-width="0"></path>
                <path fill="rgba(255, 255, 255, 1)" d="M 1127 67 C 1196 67 1196 0 1265 0 L 1265 0 L 1265 0 L 1127 0 Z"
                    stroke-width="0"></path>
            </svg>

            <div class="container">
                <div class="section-overlay">


                </div>

                <div class="row">
                    <div class="col-md-6 align-self-end">
                        <div class="section-bg-image-block">

                            <h2 class="mb-lg-3">IMPLEMENTASI PEMODELAN EDGE COMPUTING PADA SISTEM PEMANTAUAN TEMPAT
                                SAMPAH</h2>

                            <p>Penelitian ini dilakukan di prodi rekayasa sistem komputer untuk memenuhi salah satu
                                persyaratan memperoleh gelar S.Kom</p>
                            {{-- <form action="#" method="get" class="custom-form mt-lg-4 mt-2" role="form">
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text bi-envelope" id="basic-addon1"></span>

                                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required="">

                                    <button type="submit" class="form-control">Subscribe</button>
                                </div>
                            </form> --}}
                        </div>
                    </div>
                    {{-- <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top" src="img/kosong.png" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text"> Kondisi Tempat Sampah 0%</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top" src="img/penuh.png" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Kondisi Tempat Sampah 100%</p>
                            </div>
                        </div>
                    </div> --}}
                </div>

            </div>


            <svg viewBox="0 0 1265 144" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <path fill="rgba(255, 255, 255, 1)" d="M 0 40 C 164 40 164 20 328 20 L 328 20 L 328 0 L 0 0 Z"
                    stroke-width="0"></path>
                <path fill="rgba(255, 255, 255, 1)" d="M 327 20 C 445.5 20 445.5 89 564 89 L 564 89 L 564 0 L 327 0 Z"
                    stroke-width="0"></path>
                <path fill="rgba(255, 255, 255, 1)" d="M 563 89 C 724.5 89 724.5 48 886 48 L 886 48 L 886 0 L 563 0 Z"
                    stroke-width="0"></path>
                <path fill="rgba(255, 255, 255, 1)"
                    d="M 885 48 C 1006.5 48 1006.5 67 1128 67 L 1128 67 L 1128 0 L 885 0 Z" stroke-width="0"></path>
                <path fill="rgba(255, 255, 255, 1)" d="M 1127 67 C 1196 67 1196 0 1265 0 L 1265 0 L 1265 0 L 1127 0 Z"
                    stroke-width="0"></path>
            </svg>
        </section>


        <section class="about-section section-padding" id="section_2">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center">
                        <h2 class="mb-lg-5 mb-4">TENTANG PENELITIAN</h2>
                    </div>

                    <div class="col-lg-5 col-12 me-auto mb-4 mb-lg-0">

                        <h2 style="text-transform:uppercase">MODEL ARSITEKTUR JARINGAN</h2>

                        {{-- <p><strong></strong>Sistem yang dibangun adalah sebuah sistem yang dapat memantau kapasitas
                            sampah pada tempat sampah dengan menerapkan model edge computing yaitu pemrosesan awal atau
                            pengumpulan data dilakukan di lokasi yang lebih dekat dengan sumber data. Sistem ini
                            memanfaatkan perangkat keras NodeMCU ESP32 dan sensor ultrasonik untuk mengukur kapasitas
                            tempat sampah dengan implementasi model edge computing yang berarti pengolahan data akan
                            dilakukan terlebih dahulu dari tempat sampah ke edge server sebelum data dikirim ke server
                            pusat. Sistem akan terhubung dengan server pusat melalui jaringan internet, memungkinkan
                            data kapasitas sampah untuk diakses dan dikelola dari jarak jauh dengan demikian, pengguna
                            dapat memantau kapasitas sampah pada setiap tempat sampah secara real-time. </p>

                        <p> Hasil analisis QoS pengujian jaringan, pengiriman data dari node ke edge server dan cloud
                            server diperoleh nilai rata-rata throughput 3344 Kbits/s dan nilai rata-rata delay 55,37 ms.
                            dari hasil tersebut menunjukkan sangat baik </p> --}}
                        <p style="text-align: justify;"><strong></strong>Pada penelitian ini telah berhasil dibangun
                            sistem pemantauan tempat sampah dengan menerapkan model edge computing yaitu pemrosesan awal
                            dilakukan dekat dengan sumber data dengan menggunakan edge server yang berada secara fisik
                            lebih dekat dengan tempat sampah. Edge server beroperasi secara lokal, memproses, dan
                            mengirimkan data dari berbagai tempat sampah. Penggunaan edge server pada sistem
                            meningkatkan efisiensi dalam memproses dan mengirimkan data dari berbagai tempat sampah.
                            Ketergantungan pada koneksi internet saat melakukan pemrosesan data dari perangkat IoT dapat
                            dikurangi karna edge server melakukan pemrosesan data secara lokal. Hasil
                            dari pengujian QoS dengan implementasi pemodelan edge computing pada sistem pemantauan
                            tempat sampah dengan jarak 8 meter dan 26 meter dari edge server memperoleh nilai
                            throughput rata-rata 1338 Kbps dengan kategori baik dan nilai delay rata-rata 115 ms dengan
                            kategori sangat baik. </p>
                        <p> </p>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-0">
                        <div class="member-block">
                            <div class="member-block-image-wrap" style="width: 600px; height: 600px;">
                                <img src="img/skripsifix.png" class="img-fluid" alt="Responsive image">



                                {{--
                                <ul class="social-icon">
                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link bi-twitter"></a>
                                    </li>

                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link bi-whatsapp"></a>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>



                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="member-block">
                            <div class="member-block-image-wrap">
                                <img src="images/members/successful-asian-lady-boss-red-blazer-holding-clipboard-with-documens-pen-working-looking-happy-white-background.jpg"
                                    class="member-block-image img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <img src="img/skripsifix.png" class="img-fluid" alt="Responsive image">
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="section-title">
                                <!-- <h2 style="text-transform:uppercase"></h2> -->
                                <!-- <p></p> -->
                                <h2 style="text-transform:uppercase">MENGAPA PERTAMINA</h2>
                                <p style="font-size: 17px; text-align: justify;">Pertamina adalah Perusahaan BUMN yang bergerak di bidang energi dan penyumbang deviden terbesar
                                  di Indonesia. Memiliki bisnis dari hulu sampai hilir yang terintegrasi, mulai dari Eksplorasi dan Produksi,
                                  Pengolahan, Distribusi dan Pemasaran, yang berdasarkan tata nilai AKHLAK sebagai core values.<br><br>
                                  Perwira adalah singkatan dari Pertamina Wira yang merupakan sebutan untuk pekerja Pertamina. Bagi
                                  perusahaan, Perwira adalah asset yang sangat berharga untuk mengakselerasi pencapaian visi menjadi
                                  perusahaan energi nasional kelas dunia dan menjadi global energy champion dengan nilai pasar US$ 100
                                  miliar di tahun 2024.
                                </p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="" id="section_5" style="background-color: rgb(61, 64, 91);margin-top: -150px; ">
            <svg viewBox="0 0 1265 144" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <path fill="rgba(255, 255, 255, 1)" d="M 0 40 C 164 40 164 20 328 20 L 328 20 L 328 0 L 0 0 Z"
                    stroke-width="0"></path>
                <path fill="rgba(255, 255, 255, 1)" d="M 327 20 C 445.5 20 445.5 89 564 89 L 564 89 L 564 0 L 327 0 Z"
                    stroke-width="0"></path>
                <path fill="rgba(255, 255, 255, 1)" d="M 563 89 C 724.5 89 724.5 48 886 48 L 886 48 L 886 0 L 563 0 Z"
                    stroke-width="0"></path>
                <path fill="rgba(255, 255, 255, 1)"
                    d="M 885 48 C 1006.5 48 1006.5 67 1128 67 L 1128 67 L 1128 0 L 885 0 Z" stroke-width="0"></path>
                <path fill="rgba(255, 255, 255, 1)" d="M 1127 67 C 1196 67 1196 0 1265 0 L 1265 0 L 1265 0 L 1127 0 Z"
                    stroke-width="0"></path>
            </svg>

            {{-- ini dokumentasi --}}
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12 text-center" style="margin-top: -100px;">
                        <h2 class="mb-lg-5 mb-4"
                            style="color: rgb(0, 98, 255); text-shadow: -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff, 1px 1px 0 #fff;">
                            DOKUMENTASI</h2>

                    </div>
                    <div class="row justify-content-center" style="margin-bottom: 100px;">
                        <div class="col-md-3">
                            <div class="card h-100">
                                <img class="rounded-circle" src="img/kosong.jpeg" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text text-center"> Kondisi Tempat Sampah 0%</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card h-100">
                                <img class="rounded-circle" src="img/penuh.jpeg" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text text-center">Kondisi Tempat Sampah 100%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    {{--
    <footer class="site-footer" style="margin-top: 50px;">
        <h3 class="text-center"></h3>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#81B29A" fill-opacity="1"
                d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
            </path>
        </svg>
    </footer> --}}

    <!-- JAVASCRIPT FILES -->
    <script src="{{ asset('template') }}/js/jquery.min.js"></script>
    <script src="{{ asset('template') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('template') }}/js/jquery.sticky.js"></script>
    <script src="{{ asset('template') }}/js/click-scroll.js"></script>
    <script src="{{ asset('template') }}/js/animated-headline.js"></script>
    <script src="{{ asset('template') }}/js/modernizr.js"></script>
    <script src="{{ asset('template') }}/js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    {{-- <script type="text/javascript">
        $(document).ready(function() {
            setInterval(function() {
                $("#progress").load("{{ url('kapasitassampah') }}");
                $("#progress2").load("{{ url('kapasitassampah2') }}");

            }, 1000);
        });
    </script> --}}
    <!-- Script untuk mengupdate chart secara berkala -->
    {{-- <script src="//code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <script src="//cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js"></script>
    <script>
        var kapasitas1 = {{ $kapasitas1 }};
        var kapasitas2 = {{ $kapasitas2 }};
        chart1(kapasitas1, '#chart-1');
        chart2(kapasitas2, '#chart-2');

        function chart1(kapasitas1, id) {

            kapasitas1 = Math.min(100, Math.max(0, kapasitas1));
            var dataset = [{
                    name: 'Direct',
                    count: kapasitas1
                },
                {
                    name: 'Facebook',
                    count: 100 - kapasitas1
                },

            ];

            var total = 0;

            dataset.forEach(function(d) {
                total += d.count;
            });

            var pie = d3.layout.pie()
                .value(function(d) {
                    return d.count
                })
                .sort(null);

            var w = 300,
                h = 300;

            var outerRadiusArc = w / 2;
            var innerRadiusArc = 100;
            var shadowWidth = 10;

            var outerRadiusArcShadow = innerRadiusArc + 1;
            var innerRadiusArcShadow = innerRadiusArc - shadowWidth;

            var color = d3.scale.ordinal()
                .range(['#41B787', '#6352B9', '#B65480', '#D5735A', '#D7D9DA']);

            var svg = d3.select(id)
                .append("svg")
                .attr({
                    width: w,
                    height: h,
                    class: 'shadow'
                }).append('g')
                .attr({
                    transform: 'translate(' + w / 2 + ',' + h / 2 + ')'
                });


            var createChart = function(svg, outerRadius, innerRadius, fillFunction, className) {

                var arc = d3.svg.arc()
                    .innerRadius(outerRadius)
                    .outerRadius(innerRadius);

                var path = svg.selectAll('.' + className)
                    .data(pie(dataset))
                    .enter()
                    .append('path')
                    .attr({
                        class: className,
                        d: arc,
                        fill: fillFunction
                    });

                path.transition()
                    .duration(1000)
                    .attrTween('d', function(d) {
                        var interpolate = d3.interpolate({
                            startAngle: 0,
                            endAngle: 0
                        }, d);
                        return function(t) {
                            return arc(interpolate(t));
                        };
                    });
            };

            createChart(svg, outerRadiusArc, innerRadiusArc, function(d, i) {
                return color(d.data.name);
            }, 'path1');

            createChart(svg, outerRadiusArcShadow, innerRadiusArcShadow, function(d, i) {
                var c = d3.hsl(color(d.data.name));
                return d3.hsl((c.h + 5), (c.s - .07), (c.l - .15));
            }, 'path2');

            var addText = function(text, y, size) {
                svg.append('text')
                    .text(text)
                    .attr({
                        'text-anchor': 'middle',
                        y: y
                    })
                    .style({
                        fill: '#929DAF',
                        'font-size': size
                    });
            };

            var restOfTheData = function() {

                addText(function() {
                    return kapasitas1 + '%';

                }, 0, '30px');


                addText(function() {
                    return "Total Kapasitas";
                }, 25, '10px');

            };

            setTimeout(restOfTheData, 1000);


            function numberWithCommas(x) {
                return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }
        }

        function chart2(kapasitas2, id) {
            kapasitas2 = Math.min(100, Math.max(0, kapasitas2));

            var dataset = [{
                    name: 'Direct',
                    count: kapasitas2
                },
                {
                    name: 'Facebook',
                    count: 100 - kapasitas2
                },

            ];

            var total = 0;

            dataset.forEach(function(d) {
                total += d.count;
            });

            var pie = d3.layout.pie()
                .value(function(d) {
                    return d.count
                })
                .sort(null);

            var w = 300,
                h = 300;

            var outerRadiusArc = w / 2;
            var innerRadiusArc = 100;
            var shadowWidth = 10;

            var outerRadiusArcShadow = innerRadiusArc + 1;
            var innerRadiusArcShadow = innerRadiusArc - shadowWidth;

            var color = d3.scale.ordinal()
                .range(['#41B787', '#6352B9', '#B65480', '#D5735A', '#D7D9DA']);

            var svg = d3.select(id)
                .append("svg")
                .attr({
                    width: w,
                    height: h,
                    class: 'shadow'
                }).append('g')
                .attr({
                    transform: 'translate(' + w / 2 + ',' + h / 2 + ')'
                });


            var createChart = function(svg, outerRadius, innerRadius, fillFunction, className) {

                var arc = d3.svg.arc()
                    .innerRadius(outerRadius)
                    .outerRadius(innerRadius);

                var path = svg.selectAll('.' + className)
                    .data(pie(dataset))
                    .enter()
                    .append('path')
                    .attr({
                        class: className,
                        d: arc,
                        fill: fillFunction
                    });

                path.transition()
                    .duration(1000)
                    .attrTween('d', function(d) {
                        var interpolate = d3.interpolate({
                            startAngle: 0,
                            endAngle: 0
                        }, d);
                        return function(t) {
                            return arc(interpolate(t));
                        };
                    });
            };

            createChart(svg, outerRadiusArc, innerRadiusArc, function(d, i) {
                return color(d.data.name);
            }, 'path1');

            createChart(svg, outerRadiusArcShadow, innerRadiusArcShadow, function(d, i) {
                var c = d3.hsl(color(d.data.name));
                return d3.hsl((c.h + 5), (c.s - .07), (c.l - .15));
            }, 'path2');

            var addText = function(text, y, size) {
                svg.append('text')
                    .text(text)
                    .attr({
                        'text-anchor': 'middle',
                        y: y
                    })
                    .style({
                        fill: '#929DAF',
                        'font-size': size
                    });
            };

            var restOfTheData = function() {

                addText(function() {
                    return kapasitas2 + '%';

                }, 0, '30px');


                addText(function() {
                    return "Total Kapasitas";
                }, 25, '10px');

            };

            setTimeout(restOfTheData, 1000);


            function numberWithCommas(x) {
                return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }
        }
    </script>
    {{-- ini realtime --}}
    <script>
        function updateCharts() {
            // Fetch updated data for chart-1 and chart-2
            $.ajax({
                url: '/new', // Replace with your API endpoint to get updated data
                method: 'GET',
                success: function(data) {
                    var kapasitas1 = data.kapasitas1;
                    var kapasitas2 = data.kapasitas2;

                    // Update chart-1
                    updateChart(kapasitas1, '#chart-1', '');

                    // Update chart-2
                    updateChart(kapasitas2, '#chart-2', '');
                }
            });
        }

        function updateChart(kapasitas, id, chartTitle) {
            var dataset = [{
                name: 'Direct',
                count: kapasitas
            }, {
                name: 'Facebook',
                count: 100 - kapasitas
            }];

            var total = 0;
            dataset.forEach(function(d) {
                total += d.count;
            });

            var pie = d3.layout.pie()
                .value(function(d) {
                    return d.count
                })
                .sort(null);

            var w = 300,
                h = 300;

            var outerRadiusArc = w / 2;
            var innerRadiusArc = 100;
            var shadowWidth = 10;

            var outerRadiusArcShadow = innerRadiusArc + 1;
            var innerRadiusArcShadow = innerRadiusArc - shadowWidth;

            var color = d3.scale.ordinal()
                .range(['#41B787', '#6352B9', '#B65480', '#D5735A', '#D7D9DA']);

            var svg = d3.select(id)
                .html('') // Clear existing chart
                .append("svg")
                .attr({
                    width: w,
                    height: h,
                    class: 'shadow'
                }).append('g')
                .attr({
                    transform: 'translate(' + w / 2 + ',' + h / 2 + ')'
                });

            var createChart = function(svg, outerRadius, innerRadius, fillFunction, className) {
                var arc = d3.svg.arc()
                    .innerRadius(outerRadius)
                    .outerRadius(innerRadius);

                var path = svg.selectAll('.' + className)
                    .data(pie(dataset))
                    .enter()
                    .append('path')
                    .attr({
                        class: className,
                        d: arc,
                        fill: fillFunction
                    });

                path.transition()
                    .duration(1000)
                    .attrTween('d', function(d) {
                        var interpolate = d3.interpolate({
                            startAngle: 0,
                            endAngle: 0
                        }, d);
                        return function(t) {
                            return arc(interpolate(t));
                        };
                    });
            };

            createChart(svg, outerRadiusArc, innerRadiusArc, function(d, i) {
                return color(d.data.name);
            }, 'path1');

            createChart(svg, outerRadiusArcShadow, innerRadiusArcShadow, function(d, i) {
                var c = d3.hsl(color(d.data.name));
                return d3.hsl((c.h + 5), (c.s - .07), (c.l - .15));
            }, 'path2');

            var addText = function(text, y, size) {
                svg.append('text')
                    .text(text)
                    .attr({
                        'text-anchor': 'middle',
                        y: y
                    })
                    .style({
                        fill: '#929DAF',
                        'font-size': size
                    });
            };

            var restOfTheData = function() {
                addText(function() {
                    return kapasitas + '%';
                }, 0, '30px');

                addText(function() {
                    return "Total Kapasitas" + chartTitle;
                }, 25, '10px');
            };

            setTimeout(restOfTheData, 1000);
        }

        // Update the charts every 5 seconds
        setInterval(updateCharts, 5000);
    </script>
    {{-- <script>
        $(document).ready(function() {
            // Function to fetch data from the server
            function fetchData() {
                $.ajax({
                    url: '/new', // The URL to the route you defined
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        // Update the HTML elements with the retrieved data
                        $('#kapasitas1').text(data[0].kapasitas1);
                        $('#kapasitas2').text(data[0].kapasitas2);
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching data:', error);
                    }
                });
            }

            // Fetch data initially on page load
            fetchData();

            // Set up a timer to fetch data every X milliseconds (e.g., every 5 seconds)
            setInterval(fetchData, 5000); // Adjust the interval as needed
        });
    </script> --}}

</body>

</html>
