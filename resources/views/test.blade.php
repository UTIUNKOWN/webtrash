
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
    {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="/css/sidebarstyle.css" />
    <title>Pantau Sampah</title>
    <script src="js/progress.js"></script>
    <script src="js/monitor.js"></script>
    <script src="https://kit.fontawesome.com/5c86256b06.js" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <main class="s-sm-auto px-md-4">
                <div class="container-fluid">
                        <div class="sidebar h-100">
        <div class="logo-details">
            <div class="logo_name">PANTAU SAMPAH</div>
            <i class="bx bx-menu" id="btn"></i>
        </div>
        <ul class="nav-list">
        </ul>
    </div>
     {{-- panggil file jquery --}}
    <script type="text/javascript" src="{{('jquery/jquery.min.js')}}"></script>

    {{-- ajax untuk realtime --}}
    <script type="text/javascript">
    $(document).ready( function () {
        setInterval( function() {
            $("#kapasitas").load("{{url('kapasitassampah')}}");
            $("#kapasitas2").load("{{url('kapasitassampah2')}}");
            $("#waktuSekarang1").text(currentTime.format('Y-m-d H:i:s'));
             $("#waktuSekarang2").text(currentTime.format('Y-m-d H:i:s'));
        }, 1000);
    });
    </script>
    <section class="home-section">
        <h4 class="pt-3">PEMANTAUAN TEMPAT SAMPAH PINTAR</h4>
        <h5 class="mb-2">REKAYASA SISTEM KOMPUTER</h5>
        <hr>
                <div class="row justify-content-center">
            <div class="pt-2 text-center">
                <div class="d-flex row justify-content-center">
                                                                        <a href="" class="text-decoration-none col-lg-3 col-md-4 col-sm-6 mb-3"
                                data-bs-toggle="modal" data-bs-target="#exampleModal-1">
                                <div class="card">

                                    <h4 class="card-title mt-2">TPS 1</h4>
                                    <div class="trash mx-auto">

                                        <span id="kapasitas"></span>
                                        <div class="col-span-12 grid grid-cols-12 gap-6 mt-8">
                                            <div class="col-span-12 sm:col-span-6 2xl:col-span-3 intro-y">
                                                <div class="box p-5 zoom-in">
                                                    <div class="flex items-center">
                                                        <div class="w-2/4 flex-none">
                                                            <div class="text-lg font-medium truncate">Target Sales</div>



                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                </div>
                            </div>
        <div class="" id="featured-3">
            <div class="row py-4 row-cols-1 row-cols-lg-4 justify-content-around fs-6">
                <div class="feature col mb-3 pt-3 rounded text-light" style="background-color: #634d5f">
                    <div class="feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor"
                            class="bi bi-trash2" viewBox="0 0 16 16">
                            <path
                                d="M14 3a.702.702 0 0 1-.037.225l-1.684 10.104A2 2 0 0 1 10.305 15H5.694a2 2 0 0 1-1.973-1.671L2.037 3.225A.703.703 0 0 1 2 3c0-1.105 2.686-2 6-2s6 .895 6 2zM3.215 4.207l1.493 8.957a1 1 0 0 0 .986.836h4.612a1 1 0 0 0 .986-.836l1.493-8.957C11.69 4.689 9.954 5 8 5c-1.954 0-3.69-.311-4.785-.793z" />
                        </svg>
                    </div>
                    <h1 class="float-end mx-2 my-2">2</h1>
                    <h4>Total Tempat Sampah</h4>
                    <p>Jumlah total tempat sampah di prodi Rekayasa Sistem Komputer yang dapat dipantau.</p>
                </div>
                <div class="feature col mb-3 pt-3 rounded text-light" style="background-color: #62829f">
                    <div class="feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor"
                            class="bi bi-trash2-fill" viewBox="0 0 16 16">
                            <path
                                d="M2.037 3.225A.703.703 0 0 1 2 3c0-1.105 2.686-2 6-2s6 .895 6 2a.702.702 0 0 1-.037.225l-1.684 10.104A2 2 0 0 1 10.305 15H5.694a2 2 0 0 1-1.973-1.671L2.037 3.225zm9.89-.69C10.966 2.214 9.578 2 8 2c-1.58 0-2.968.215-3.926.534-.477.16-.795.327-.975.466.18.14.498.307.975.466C5.032 3.786 6.42 4 8 4s2.967-.215 3.926-.534c.477-.16.795-.327.975-.466-.18-.14-.498-.307-.975-.466z" />
                        </svg>
                    </div>
                    <h1 class="float-end mx-2 my-2">1</h1>
                    <h4>Tempat Sampah Penuh</h4>
                    <p>Jumlah tempat sampah terdeteksi penuh dan harus segera dikosongkan</p>
                </div>


        <script type="text/javascript">
            function autoRefreshPage() {
                window.location = window.location.href;
            }
            setInterval('autoRefreshPage()', 600000);
        </script>

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



    <script src="/js/sidebarscript.js"></script>


    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(["_setAccount", "UA-36251023-1"]);
        _gaq.push(["_setDomainName", "jqueryscript.net"]);
        _gaq.push(["_trackPageview"]);

        (function() {
            var ga = document.createElement("script");
            ga.type = "text/javascript";
            ga.async = true;
            ga.src =
                ("https:" == document.location.protocol ?
                    "https://ssl" :
                    "http://www") + ".google-analytics.com/ga.js";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>
    <script>
        try {
            fetch(
                    new Request(
                        "https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", {
                            method: "HEAD",
                            mode: "no-cors"
                        }
                    )
                )
                .then(function(response) {
                    return true;
                })
                .catch(function(e) {
                    var carbonScript = document.createElement("script");
                    carbonScript.src =
                        "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
                    carbonScript.id = "_carbonads_js";
                    document.getElementById("carbon-block").appendChild(carbonScript);
                });
        } catch (error) {
            console.log(error);
        }
    </script>


      <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
