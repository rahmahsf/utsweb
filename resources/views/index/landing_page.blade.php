<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME | Landing Page Toko Bunga</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <style>
        body {
            padding-top: 56px;
            /* Adjust based on the height of your fixed navbar */
        }

        .navbar {
            background-color: #ffffff;
        }

        .navbar-brand,
        .navbar-nav .nav-link {
            color: #fff;
        }

        .navbar-hidden {
            transform: translateY(-100%);
        }

        .navbar-visible {
            transform: translateY(0);
            transition: transform 0.3s ease-in-out;
        }
        .jumbotron {
            background-color: #343a40;
            color: #ffffff;
            padding: 100px 0;
            text-align: center;
            background-image: url({{asset('images/flower.jpg')}});
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 500px;
        }

        .btn-primary {
            background-color: #28a745;
            border-color: #28a745;
        }
    </style>
</head>

<body>
    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-visible">
        <div class="container">
            <!-- Logo di kiri -->
            <a class="navbar-brand text-dark" href="{{route('index')}}">Bukan Toko Bunga Biasa</a>

            <!-- Bagian menu di kanan -->
            <ul class="navbar-nav">
                
                <!-- Tambahkan item menu lainnya di sini jika diperlukan -->
            </ul>

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{route('katalog')}}">Katalog Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{route('login')}}">Login</a>
                </li>
                
                <!-- Tambahkan item menu lainnya di sini jika diperlukan -->

            </ul>
            
        </div>
    </nav>

    <div class="jumbotron">
        <h1 class="display-4">Selamat Datang di Toko Bunga Kami</h1>
        <p class="lead">Temukan bunga indah untuk segala kesempatan</p>
        <a href="{{route('katalog')}}" class="btn btn-primary btn-lg">Belanja Sekarang</a>
    </div>

    <!-- Features Section -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-4">
                <h2>Produk Berkualitas</h2>
                <p>Kami menawarkan berbagai macam bunga berkualitas tinggi.</p>
            </div>
            <div class="col-lg-4">
                <h2>Pengiriman Cepat</h2>
                <p>Pesanan Anda akan dikirim dengan cepat dan aman.</p>
            </div>
            <div class="col-lg-4">
                <h2>Pelayanan Terbaik</h2>
                <p>Kami siap memberikan pelayanan terbaik untuk kepuasan pelanggan.</p>
            </div>
        </div>
    </div>

    {{-- Footer --}}
    <div class="text-center bg-dark p-2">
        <a href="#home" class="active text-center text-white">@2023 Bukan Toko Bunga Biasa. All right reserved</a>
    </div>
</body>

</html>