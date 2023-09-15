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
    <link href="/css/style.css" rel="stylesheet">
    <link href="/img/trash-bin.png" rel="shortcut icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/pie2.css') }}">
    <style></style>
    <title>Pantau Sampah</title>


</head>
{{-- panggil file jquery --}}
<script type="text/javascript" src="{{('jquery/jquery.min.js')}}"></script>

{{-- ajax untuk realtime --}}


<body>

    <section class="home-section">

            <div class="container" style="text-align: center; margin-top: 80 px">
                <img src="{{ 'img/TRASH.jpg' }}" style="width: 400px"class="container"
                    style="text-align: center; margin-top: 10 px">
                <h4 class="pt-3" style="font-size: 28px; font-weight: bold; color: #00c3e5;">SUDAH SEMHAS BOS
                </h4>
                {{-- <h5 class="mb-2">REKAYASA SISTEM KOMPUTER</h5> --}}
                <hr>
            </div>

            {{-- kapasitas data 1 --}}
            <div class="col-span-12 grid grid-cols-12 gap-6 mt-8">
                <div class="col-span-12 sm:col-span-6 2xl:col-span-3 intro-y ">
                    <div class="box p-5 zoom-in"style="background-color: #1072b8;">
                        <div class="flex items-center">
                            <div class="w-2/4 flex-none">
                                <div class="text-lg font-medium truncate"style="color: white;">KAPASITAS</div>
                                <div class="text-slate-500 mt-1"style="color: white;">TEMPAT SAMPAH 1</div>
                            </div>
                            <div class="flex-none ml-auto relative">
                                <div id="progress"></div>
                            </div>

                        </div>
                    </div>
                </div>
                {{-- kapasitas data 2 --}}

                <div class="col-span-12 sm:col-span-6 2xl:col-span-3 intro-y ">
                    <div class="box p-5 zoom-in"style="background-color: #1072b8;">
                        <div class="flex items-center">
                            <div class="w-2/4 flex-none">
                                <div class="text-lg font-medium truncate"style="color: white;">KAPASITAS</div>
                                <div class="text-slate-500 mt-1"style="color: white;">TEMPAT SAMPAH 2</div>
                            </div>
                            <div class="flex-none ml-auto relative">

                                <div id="progress2"></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </section>
    <script type="text/javascript">
        $(document).ready(function() {
            setInterval(function() {
                $("#progress").load("{{ url('kapasitassampah') }}");
                $("#progress2").load("{{ url('kapasitassampah2') }}");

            }, 1000);
        });
    </script>



</body>

</html>
