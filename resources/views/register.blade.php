@extends('welcome')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <div class="container-fluid">
        <form action="" method="GET">
            @csrf
            @method('PUT')

            <h4>Register</h4>
            <label for="nama_lengkap">Nama Lengkap</label>
            <div class="form-group">
                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" placeholder="Masukkan nama">
            </div>

            <label for="nama_usaha">Nama Usaha</label>
            <div class="form-group">
                <input type="text" name="nama_usaha" id="nama_usaha" placeholder="Masukkan nama usaha" class="form-control">
            </div>

            <label for="nomor_telp">Telepom</label>
            <div class="form-group">
                <input type="text" name="nomor_tlp" id="nomor_telp" placeholder="Masukkan nomor telepon" class="form-control">
            </div>

            <label for="email">Email</label>
            <div class="form-group">
                <input type="text" name="email" id="email" placeholder="Masukkan email" class="form-control">
            </div>

            <label for="kabupaten">Kabupaten</label>
            <div class="form-group">
                <input type="text" name="kabupaten" id="kabupaten" class="form-control">
            </div>

            <label for="kecamatan">Kecamatan</label>
            <div class="form-group">
                <input type="text" name="kecamatan" id="kecamatan" class="form-control">
            </div>

            <label for="alamat">Alamat</label>
            <div class="form-group">
                <input type="text" name="alamat" id="alamat" class="form-control">
            </div>

            <label for="username">Username</label>
            <div class="form-group">
                <input type="text" name="username" id="username" class="form-control">
            </div>

            <label for="password">Password</label>
            <div class="form-group">
                <input type="Password" name="password" id="password" class="form-control">
            </div>
        </form>

    </div>
    
</body>
</html>

@endsection