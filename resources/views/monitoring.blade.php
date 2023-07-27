<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <link href="/css/dashboard.css" rel="stylesheet">
    <link href="/css/features.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/img/trash-bin.png" rel="shortcut icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/css/app.css') }}" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="/css/sidebarstyle.css" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="/css/sidebarstyle.css" />
    <link rel="stylesheet" href="{{ asset('css/pie.css') }}">
    <title>Pantau Sampah</title>
    <script src="https://kit.fontawesome.com/5c86256b06.js" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
</head>
{{-- panggil file jquery --}}
{{-- <script type="text/javascript" src="{{('jquery/jquery.min.js')}}"></script> --}}

{{-- ajax untuk realtime --}}
<script type="text/javascript">
    $(document).ready(function() {
        setInterval(function() {
            $("#kapasitas").load("{{ url('kapasitassampah') }}");
            $("#kapasitas2").load("{{ url('kapasitassampah2') }}");

        }, 1000);
    });
</script>

<body>

    <section class="home-section">
        <div class="container" style="text-align: center; margin-top: 80 px">

            <img src="{{ 'img/TRASH.jpg' }}" style="width: 400px"class="container"
                style="text-align: center; margin-top: 10 px">
            <h4 class="pt-3" style="font-size: 28px; font-weight: bold; color: #00c3e5;">MONITORING TEMPAT SAMPAH</h4>
            {{-- <h5 class="mb-2">REKAYASA SISTEM KOMPUTER</h5> --}}
            <hr>
        </div>

        {{-- kapasitas data 1 --}}
        <div class="col-span-12 grid grid-cols-12 gap-6 mt-8">
            <div class="col-span-12 sm:col-span-6 2xl:col-span-3 intro-y">
                <div class="box p-5 zoom-in"style="background-color: #1072b8;">
                    <div class="flex items-center">
                        <div class="w-2/4 flex-none">
                            <div class="text-lg font-medium truncate"style="color: white;">KAPASITAS</div>
                            <div class="text-slate-500 mt-1"style="color: white;">TEMPAT SAMPAH 1</div>
                        </div>
                        <div class="flex-none ml-auto relative">
                            <div id="progress" data-donut={{ $kapasitas1 }}></div>
                        </div>

                    </div>
                </div>
            </div>
            {{-- kapasitas data 2 --}}

            <div class="col-span-12 sm:col-span-6 2xl:col-span-3 intro-y">
                <div class="box p-5 zoom-in"style="background-color: #1072b8;">
                    <div class="flex items-center">
                        <div class="w-2/4 flex-none">
                            <div class="text-lg font-medium truncate"style="color: white;">KAPASITAS</div>
                            <div class="text-slate-500 mt-1"style="color: white;">TEMPAT SAMPAH 2</div>
                        </div>
                        <div class="flex-none ml-auto relative">
                            <div id="progress2" data-donut={{ $kapasitas2 }}></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- kapasitas  --}}
        {{-- <div class="col-span-12 grid grid-cols-12 gap-6 mt-8">
            <div class="col-span-12 sm:col-span-6 2xl:col-span-3 intro-y">
                <div class="box p-5 zoom-in">
                    <div class="flex items-center">
                        <div class="w-2/4 flex-none">
                            <div class="text-lg font-medium truncate">KAPASITAS</div>
                            <div class="text-slate-500 mt-1">TEMPAT SAMPAH 1</div>
                        </div>
                        <div class="flex-none ml-auto relative">
                            <canvas id="report-donut-chart-1"></canvas>
                            <div
                                class="font-medium absolute w-full h-full flex items-center justify-center top-0 left-0">
                                <span id="kapasitas"style="font-size: 30px;"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center"> --}}
            <div class="pt-2 text-center">
                <div class="d-flex row justify-content-center">
                    <a href="" class="text-decoration-none col-lg-3 col-md-4 col-sm-6 mb-3"
                        data-bs-toggle="modal" data-bs-target="#exampleModal-1">


                </div>
    </section>
    </div>
    </main>
    </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script>
        // Ambil tombol dengan ID "btn"
        const btn = document.getElementById("btn");

        // Ambil elemen teks dengan ID "pantauSampahText"
        const pantauSampahText = document.getElementById("pantauSampahText");

        // Tambahkan event listener untuk mendeteksi klik pada tombol
        btn.addEventListener("click", function() {
            // Toggle tampilan elemen teks saat tombol diklik
            if (pantauSampahText.style.display === "none") {
                pantauSampahText.style.display = "block";
            } else {
                pantauSampahText.style.display = "none";
            }
        });
    </script>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://d3js.org/d3.v3.min.js"></script>

    <script src="{{ asset('js/progress.js') }}"></script>
    <script src="{{ asset('js/monitor.js') }}"></script>
    <script src="{{ asset('js/pie.js') }}"></script>




</body>

</html>
