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
                <div></div>
            </div>

            <div class="container">

                <div class="row">
                    <!-- Bagian TEMPAT SAMPAH 1 -->
                    <div class="col-6 mx-auto d-flex justify-content-center">
                        <!-- Tambahkan kelas d-flex dan justify-content-center -->
                        <div class="card bg-white border-0" style="width: 25rem;">
                            {{-- <div class="w-2/4 flex-none">
                                <h3></h3>
                                <div class="text-lg font-medium truncate text-center" style="color: rgb(28, 162, 189);">
                                    KAPASITAS</div>
                                <div class="text-slate-500 mt-1 text-center" style="color: rgb(28, 162, 189);">TEMPAT
                                    SAMPAH 1</div>
                            </div> --}}
                            <div class="flex-none ml-auto relative">
                                <div id="chart-new" class="chart-container"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Bagian TEMPAT SAMPAH 2 -->
                    <div class="col-6 mx-auto d-flex justify-content-center">
                        <!-- Tambahkan kelas d-flex dan justify-content-center -->
                        <div class="card bg-white border-0" style="width: 25rem;">
                            {{-- <div class="w-2/4 flex-none">
                                <div class="text-lg font-medium truncate text-center" style="color: rgb(0, 123, 255);">
                                    KAPASITAS</div>
                                <div class="text-slate-500 mt-1 text-center" style="color: rgb(0, 136, 255);">TEMPAT
                                    SAMPAH 2</div>
                            </div> --}}
                            <div class="flex-none ml-auto relative">
                                <div id="chart-new" class="chart-container"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                </div>



            </div>
        </section>


    </main>


    <footer class="site-footer">
        <h3 class="text-center">Sudah Semhas Ni Boss</h3>

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
            SISA: 'rgba(0, 0, 0, 0.8)'
        };


        // Fungsi untuk menginisialisasi pie chart
        // Fungsi untuk menginisialisasi pie chart
        // Fungsi untuk menginisialisasi donut chart dengan angka kapasitas di tengah
        function initializeDonutChart(canvas, kapasitas, label, color) {
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
                cutout: '70%',
                plugins: {
                    datalabels: {
                        formatter: (value, ctx) => {
                            let sum = 0;
                            let dataArr = ctx.chart.data.datasets[0].data;
                            dataArr.map(data => {
                                sum += data;
                            });
                            let percentage = ((value / sum) * 100).toFixed(2) + '%';
                            return percentage;
                        },
                        color: '#fff',
                        labels: {
                            title: {
                                font: {
                                    size: '16'
                                }
                            }
                        }
                    },
                    // Plugin untuk menampilkan angka kapasitas di tengah chart
                    center: {
                        text: kapasitas + '%', // Menampilkan angka kapasitas
                        color: '#000', // Warna teks
                        fontStyle: 'Arial', // Gaya font
                        sidePadding: 15 // Padding dari tepi chart
                    }
                }
            };

            return new Chart(ctx, {
                type: 'doughnut',
                data: data,
                options: options
            });
        }




        // Inisialisasi donut chart untuk TEMPAT SAMPAH 1 dengan warna merah
        var canvas1 = document.getElementById('persentasesampah1');
        var myDonutChart1 = initializeDonutChart(canvas1, kapasitas1, 'Kapasitas 1', 'rgba(255, 0, 0, 0.8)');

        // Inisialisasi donut chart untuk TEMPAT SAMPAH 2 dengan warna hijau
        var canvas2 = document.getElementById('persentasesampah2');
        var myDonutChart2 = initializeDonutChart(canvas2, kapasitas2, 'Kapasitas 2', 'rgba(0, 255, 0, 0.8)');


        // Inisialisasi donut chart untuk TEMPAT SAMPAH 1 dengan warna merah
        var canvas1 = document.getElementById('persentasesampah1');
        var myDonutChart1 = initializeDonutChart(canvas1, kapasitas1, 'Kapasitas 1', 'rgba(255, 0, 0, 0.8)');

        // Inisialisasi donut chart untuk TEMPAT SAMPAH 2 dengan warna hijau
        var canvas2 = document.getElementById('persentasesampah2');
        var myDonutChart2 = initializeDonutChart(canvas2, kapasitas2, 'Kapasitas 2', 'rgba(0, 255, 0, 0.8)');

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

    <script src="//cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js"></script>
    <script>
        var kapasitas1 = {{ $kapasitas1 }};
        var kapasitas2 = {{ $kapasitas2 }};
        var dataset = [
            { name: 'Direct', count: kapasitas1 },
            { name: 'Facebook', count: kapasitas2 },

        ];

        var total=0;

        dataset.forEach(function(d){
            total+= d.count;
        });

        var pie=d3.layout.pie()
                .value(function(d){return d.count})
                .sort(null);

        var w=300,h=300;

        var outerRadiusArc=w/2;
        var innerRadiusArc=100;
        var shadowWidth=10;

        var outerRadiusArcShadow=innerRadiusArc+1;
        var innerRadiusArcShadow=innerRadiusArc-shadowWidth;

        var color = d3.scale.ordinal()
        .range(['#41B787', '#6352B9', '#B65480', '#D5735A', '#D7D9DA']);

        var svg=d3.select("#chart-new")
                .append("svg")
                .attr({
                    width:w,
                    height:h,
                    class:'shadow'
                }).append('g')
                .attr({
                    transform:'translate('+w/2+','+h/2+')'
                });


        var createChart=function(svg,outerRadius,innerRadius,fillFunction,className){

            var arc=d3.svg.arc()
                    .innerRadius(outerRadius)
                    .outerRadius(innerRadius);

            var path=svg.selectAll('.'+className)
                    .data(pie(dataset))
                    .enter()
                    .append('path')
                    .attr({
                        class:className,
                        d:arc,
                        fill:fillFunction
                    });

            path.transition()
                    .duration(1000)
                    .attrTween('d', function(d) {
                        var interpolate = d3.interpolate({startAngle: 0, endAngle: 0}, d);
                        return function(t) {
                            return arc(interpolate(t));
                        };
                    });
        };

        createChart(svg,outerRadiusArc,innerRadiusArc,function(d,i){
            return color(d.data.name);
        },'path1');

        createChart(svg,outerRadiusArcShadow,innerRadiusArcShadow,function(d,i){
            var c=d3.hsl(color(d.data.name));
            return d3.hsl((c.h+5), (c.s -.07), (c.l -.15));
        },'path2');

        var addText= function (text,y,size) {
            svg.append('text')
                    .text(text)
                    .attr({
                        'text-anchor':'middle',
                        y:y
                    })
                    .style({
                        fill:'#929DAF',
                        'font-size':size
                    });
        };

        var restOfTheData=function(){

            addText(function(){
                return numberWithCommas(total);
            },0,'30px');


            addText(function(){
                return "Page View";
            },25,'10px');

        };

        setTimeout(restOfTheData,1000);


        function numberWithCommas(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }
    </script>

</body>

</html>
