<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Data Produk</h2>
        <form action="{{route('dashboard.update',$data->id)}}" method="POST" >
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="nama_bunga">Nama Bunga</label>
                <input type="text" class="form-control" id="nama_bunga" name="nama_bunga" value="{{$data->nama}}" required>
            </div>
            <div class="form-group">
                <label for="deksripsi_bunga">Deskripsi Bunga</label>
                <input type="text" class="form-control" id="deksripsi_bunga" name="deksripsi_bunga" value="{{$data->deskripsi}}" required>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" value="{{$data->harga}}" required>
            </div>
            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="number" class="form-control" id="stok" name="stok" value="{{$data->stok}}" required>
            </div>
                
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
       <!-- Bootstrap JS and dependencies -->
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
       integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
       crossorigin="anonymous"></script>
</body>
