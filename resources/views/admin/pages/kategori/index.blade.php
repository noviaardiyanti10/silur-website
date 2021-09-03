@extends('admin.layouts.app')

@section('content')

    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12 main-chart">
                    <h1 style="font-weight: bold;">KATEGORI PRODUK</h1>
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    <form action="{{ route('kategori.store') }}" method="POST">
                        @csrf
                        <table>
                            <tr>
                                <td style="width:15pc;"><input type="text" class="form-control" name="nama_kategori"
                                        required placeholder="Tambah Kategori Barang Baru"></td>
                                <td><a href=""></a><button type="submit" id="tombol-simpan" class="btn btn-success"><i
                                            class="fa fa-plus"></i> Tambah Kategori</button></td>
                            </tr>
                        </table>
                    </form>

                    <br />
                    <table class="table table-bordered" style="width: 600px; margin-left: 20px;">
                        <thead>
                            <tr style="background:#DFF0D8;color:#333;height: 50px;">
                                <td style="font-size: 16px; font-weight: bold; color: #595959;">No.</td>
                                <td style="font-size: 16px; font-weight: bold; color: #595959;">Nama Kategori Produk</td>
                                <td style="font-size: 16px; font-weight: bold; color: #595959;">Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}.</td>
                                    <td>{{ $item->nama_kategori }}</td>
                                    <td>
                                        <form method="POST" action="{{ route('kategori.destroy', $item->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button onclick="javascript:return confirm('Hapus Data Kategori ?');"
                                                class="btn btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="clearfix" style="padding-top:16%;"></div>
                </div>
            </div>
        </section>
    </section>
    <!--main content end-->

@endsection
