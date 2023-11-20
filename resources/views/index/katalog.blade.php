<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./css/style.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-visible">
        <div class="container">
            <!-- Logo di kiri -->
            <a class="navbar-brand text-dark" href="{{route('index')}}">Magic Shop</a>

            <!-- Bagian menu di kanan -->
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{route('katalog')}}">Katalog Produk</a>
                </li>
                <!-- Tambahkan item menu lainnya di sini jika diperlukan -->
            </ul>
        </div>
    </nav>
    <div class="container py-5">
        <h1 class="text-center">Bunga Kami</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 py-5">
            @foreach ($data as $flowers)
            <div class="col">
                <div class="card">
                    <img src="{{ asset('images/bunga/' . $flowers->gambar) }}" class="card-img-top h-100" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$flowers->nama}}</h5>
                        <p class="card-text">{{$flowers->deskripsi}}</p>
                    </div>
                    <div class="mb-5 px-3">
                        <h3>Harga : {{$flowers->harga}}</h3>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>
