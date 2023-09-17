<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sudah Semhas Ni Boossssss</title>

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

    <style>
        .card-footer {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 10vh;
            /* Optional: Mengisi tinggi layar */
        }
    </style>

    <style>
        /* Mengatur ukuran dan penempatan tabel */
        .table-custom {
            max-width: 70%;
            /* Sesuaikan lebar maksimal yang diinginkan */
            margin: auto;
        }

        /* Mengatur ukuran kolom */
        .table-custom th,
        .table-custom td {
            text-align: center;
            /* Penempatan teks di tengah kolom */
            padding: 0.5rem;
            /* Padding untuk sel */
            font-size: 20px;
            /* Ukuran font */
        }

        table {
            margin-top: 150px;
            /* Sesuaikan dengan tinggi navbar Anda */
        }

        table tbody tr {
            height: 10px;
            /* Sesuaikan tinggi yang diinginkan */
        }


        /* Mengaktifkan kembali scroll hanya untuk tabel */
        section table {
            overflow-y: auto;
            max-height: 400px;
            /* Sesuaikan dengan tinggi yang Anda inginkan */
        }
    </style>
    {{-- <style>
        /* Existing styles */

        /* Add custom styles for pagination */
        .pagination {
            margin: 20px 0;
            display: flex;
            justify-content: center;
            align-items: center;
            list-style: none;
        }

        .pagination li {
            margin: 0 4px;
        }

        .pagination a {
            color: #007BFF;
            padding: 8px 16px;
            text-decoration: none;
            border: 1px solid #007BFF;
            border-radius: 5px;
        }

        .pagination a:hover {
            background-color: #007BFF;
            color: #fff;
        }

        .pagination .active a {
            background-color: #007BFF;
            color: #fff;
        }

        .pagination .disabled a {
            pointer-events: none;
            opacity: 0.5;
        }
    </style> --}}
</head>

<body>

    <main>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: rgb(61, 64, 91);">

            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="index.html">
                    <img src="images/logo.png" class="navbar-brand-image img-fluid" alt="Tiya Golf Club">
                    <span class="navbar-brand-text">
                        Siti
                    </span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-auto">

                        <li class="nav-item">
                            <a class="nav-link click-scroll " href="realtime">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_2"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll active text-warning" href="data">Data</a>

                        </li>
                    </ul>
                </div>

            </div>

        </nav>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#3D405B" fill-opacity="1"
                d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z">
            </path>
        </svg>
        <section>
            <div class="container" style="margin-top:0px; ">
                <h2 class="text-center">Tabel Data bla bla</h2>
                <table class="table table-success table-striped table-custom">
                    <thead>
                        <tr>
                            <th style="width: 10px;">Waktu</th>
                            <th style="width: 50px;">Tempat Sampah</th>
                            <th style="width: 50px;">Kapasitas %</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($datas as $dat)
                            <tr>
                                <td>{!! $dat->created_at !!}</td>
                                <td>{{ $dat->id_sensor }}</td>
                                <td id="kapasitas1">{!! $dat->kapasitas !!}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center">
                                    <div class="alert alert-danger">
                                        Data belum Tersedia.
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
            @if ($datas->hasPages())
                <div class="card-footer text-center">
                    {{ $datas->links() }}
                </div>
            @endif
        </section>

    </main>

    <footer class="site-footer">
        <h3 class="text-center">aasdkaas</h3>

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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function updateKapasitas() {
            // Fetch updated data for kapasitas1
            $.ajax({
                url: '/new', // Ganti dengan URL endpoint untuk mendapatkan kapasitas terbaru
                method: 'GET',
                success: function (data) {
                    // Perbarui nilai kapasitas1 pada elemen dengan ID "kapasitas1"
                    $('#kapasitas1').text(data.kapasitas1 + '');
                }
            });
        }

        // Panggil updateKapasitas setiap 5 detik
        setInterval(updateKapasitas, 5000);
    </script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


</body>

</html>
