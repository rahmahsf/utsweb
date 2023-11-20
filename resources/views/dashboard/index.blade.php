<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h2>Admin Dashboard</h2>
                <div class="d-flex justify-content-between">
                    
                    <a href="{{route('dashboard.create')}}">
                        <button class="btn btn-success " data-toggle="modal" data-target="#addProductModal">Tambah Data Produk</button>
                    </a>

                    <a href="{{route('auth.logout')}}">
                        <button class="btn btn-danger">Logout</button>
                    </a>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Bunga</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $flowers)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$flowers->nama}}</td>
                            <td>{{$flowers->deskripsi}}</td>
                            <td>{{$flowers->harga}}</td>
                            <td>{{$flowers->stok}}</td>
                            <td><img src="{{asset('images/bunga/'.$flowers->gambar)}}" alt="Rose" width="50"></td>
                            <td>
                                <a href="{{route('dashboard.edit', $flowers->id)}}">
                                    <button class="btn btn-primary btn-sm" data-toggle="modal"
                                        data-target="#editProductModal">Edit</button>
                                </a>
                                <form action="{{route('dashboard.destroy',$flowers->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" data-toggle="modal"
                                    data-target="#deleteProductModal">Delete</button>
                                </form>

                                
                            </td>
                        </tr>
                        @endforeach
                        
                        <!-- Data lainnya ditambahkan di sini -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>
