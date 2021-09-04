@extends('admin.layouts.app')

@section('content')

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12 main-chart">
                    <h1 style="font-weight: bold;">DATA PRODUK</h1>
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    <table>
                        <tr>
                            <td>
                                <button type="button" id="tombol-simpan" class="btn btn-success"
                                    style="font-size: 14px; margin-top: 10px;" data-toggle="modal"
                                    data-target="#modalkonfirm">
                                    <i class="fa fa-plus"></i> Tambah
                                    Data
                                </button>
                            </td>
                        </tr>
                    </table>

                    <!--pop up-->
                    <div class="modal fade" tabindex="-1" id="modalkonfirm" role="dialog" aria-labelledby="modalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document" style="width: 800px">
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: #eb9046;">
                                    <h5 class="modal-title"
                                        style="font-weight: bold; font-size: 20px; width: 700px; margin-left: 41px;">TAMBAH
                                        DATA PRODUK</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{ route('produk.store') }}" method="POST" style="width: 800px"
                                    class="posisi" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body" style="padding-left: 55px;">

                                        <fieldset class="h" />
                                        <table style="width: 980px;">
                                            <div class="mb-3" style="width: 700px;">
                                                <label for="exampleInputPassword1" class="form-label">Nama
                                                    Produk</label>
                                                <input required name="nama_produk" type="text" class="form-control"
                                                    id="exampleInputPassword1">
                                            </div>

                                            <div class="mb-3" style="width: 700px;">
                                                <label for="exampleInputPassword1" class="form-label">Deskripsi
                                                    Produk</label>
                                                <input required name="deskripsi" type="text" class="form-control"
                                                    id="exampleInputPassword1">
                                            </div>

                                            <div class="mb-3" style="width: 700px;">
                                                <label for="exampleInputPassword1" class="form-label">Harga</label>
                                                <input required name="harga" type="text" class="form-control"
                                                    id="exampleInputPassword1">
                                            </div>

                                            <div class="mb-3" style="width: 700px;">
                                                <label for="exampleInputPassword1" class="form-label">Satuan</label>
                                                <select required name="satuan" id="disabledSelect" class="form-select">
                                                    <option selected hidden disabled value="">Pilih..</option>
                                                    @foreach (config('const.produk_satuan') as $key => $item)
                                                        <option value="{{ $key }}">{{ $item }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="mb-3" style="width: 700px;">
                                                <label for="exampleInputPassword1" class="form-label">Jumlah</label>
                                                <input required name="jumlah" type="text" class="form-control"
                                                    id="exampleInputPassword1">
                                            </div>

                                            <div class="mb-3" style="width: 700px;">
                                                <label for="disabledSelect" class="form-label">Kategori Telur</label>
                                                <select required name="kategori" id="disabledSelect" class="form-select">
                                                    <option selected hidden disabled value="">Pilih..</option>
                                                    @foreach ($kategori as $key => $item)
                                                        <option value="{{ $item->id }}">{{ $item->nama_kategori }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="mb-3" style="width: 700px;">
                                                <label for="disabledSelect" class="form-label">Status</label>
                                                <select required name="status" id="disabledSelect" class="form-select">
                                                    <option selected hidden disabled value="">Pilih..</option>
                                                    @foreach (config('const.produk_status') as $key => $item)
                                                        <option value="{{ $key }}">{{ $item }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="mb-3" style="width: 700px;">
                                                <img id="imgPreview2" src="" class="avatar" alt="avatar"
                                                    style="width: 120px; height: 130px;">
                                                <p>Upload Foto Produk</p>
                                                <input onchange="showPreview2(this)" name="foto" type="file"
                                                    class="form-control">
                                            </div>

                                            </tr>
                                        </table>
                                        </fieldset>

                                    </div>
                                    <div class="modal-footer" style="padding-right: 350px;">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <br />

                    <table class="table table-bordered">
                        <thead>
                            <tr style="background:#DFF0D8;color:#333;height: 50px;">
                                <td style="font-size: 16px; font-weight: bold; color: #595959;">No.</td>
                                <td style="font-size: 16px; font-weight: bold; color: #595959;">Foto Produk</td>
                                <td style="font-size: 16px; font-weight: bold; color: #595959;">Nama Produk</td>
                                <td style="font-size: 16px; font-weight: bold; color: #595959;">Deskripsi Produk</td>
                                <td style="font-size: 16px; font-weight: bold; color: #595959;">Kategori</td>
                                <td style="font-size: 16px; font-weight: bold; color: #595959;">Harga</td>
                                <td style="font-size: 16px; font-weight: bold; color: #595959;">Satuan</td>
                                <td style="font-size: 16px; font-weight: bold; color: #595959;">Jumlah</td>
                                <td style="font-size: 16px; font-weight: bold; color: #595959;">Status</td>
                                <td style="font-size: 16px; font-weight: bold; color: #595959;">Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}.</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $item->foto) }}" alt=""
                                            style="width: 100px; height: 100px;">
                                    </td>
                                    <td>{{ $item->nama_produk }}</td>
                                    <td>{{ $item->deskripsi }}</td>
                                    <td>{{ $item->kategori->nama_kategori }}</td>
                                    <td>{{ $item->harga }}</td>
                                    <td>{{ $item->satuan }}</td>
                                    <td>{{ $item->jumlah }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>
                                        <a href="{{ route('produk.edit', $item->id) }}"><button class="btn btn-warning">Edit</button></a>

                                        <form method="POST" action="{{ route('produk.destroy', $item->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <a href="#"
                                                onclick="javascript:return confirm('Hapus Data Kategori ?');"><button
                                                    class="btn btn-danger">Hapus</button></a>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9" class="text-center">Tidak ada data</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="clearfix" style="padding-top:16%;"></div>
                </div>
            </div>
        </section>
    </section>
    <!--main content end-->

    <script>
        function showPreview2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#imgPreview2').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#imgPreview').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]); // convert to base64 string
            } else {
                $('#imgPreview').attr('src', "{{ asset('assets/img/profil.jpg') }}");
            }
        }
    </script>

@endsection
