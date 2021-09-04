@extends('admin.layouts.app')

@section('content')

    <section id="main-content">
        <section class="wrapper">

            <div class="row">
                <div class="col-lg-12 main-chart">
                    <div class="container">
                        <h1 style="font-weight: bold;">Edit Data Produk</h1>
                        <hr>
                        <div class="row">
                            <form action="{{ route('produk.update', $data->id) }}" method="POST"
                                enctype="multipart/form-data" class="form-horizontal" role="form">
                                @csrf
                                @method('PUT')
                                <!-- left column -->
                                <div class="col-md-3">
                                    <div class="text-center">
                                        <img id="imgPreview2" src="{{ url('storage/' . $data->foto) }}"
                                            class="avatar" alt="avatar" style="width: 120px; height: 130px;">
                                        <h6>Upload a different photo...</h6>
                                        <input onchange="showPreview2(this)" name="foto" type="file" class="form-control">
                                    </div>
                                </div>

                                <!-- edit form column -->
                                <div class="col-md-9 personal-info">



                                    <div class="form-group">
                                        <label class="col-lg-3 control-label" style="font-size: 18px;">Nama Produk:</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" type="text" name="nama_produk"
                                                value="{{ $data->nama_produk }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label" style="font-size: 18px;">Deskripsi
                                            Produk:</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" type="text" name="deskripsi"
                                                value="{{ $data->deskripsi }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label" style="font-size: 18px;">Harga:</label>
                                        <div class="col-md-8">
                                            <input class="form-control" type="text" name="harga"
                                                value="{{ $data->harga }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label" style="font-size: 18px;">Satuan:</label>
                                        <div class="col-md-8">
                                            <select required name="satuan" id="disabledSelect" class="form-select">
                                                @foreach (config('const.produk_satuan') as $key => $item)
                                                    <option value="{{ $key }}">{{ $item }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label" style="font-size: 18px;">Jumlah:</label>
                                        <div class="col-md-8">
                                            <input class="form-control" type="text" name="jumlah"
                                                value="{{ $data->jumlah }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label" style="font-size: 18px;">Kategori
                                            Telur:</label>
                                        <div class="col-md-8">
                                            <select required name="kategori" id="disabledSelect" class="form-select">
                                                @foreach ($kategori as $key => $item)
                                                    <option {{ $data->kategori_id == $item->id ? 'selected' : '' }}
                                                        value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label" style="font-size: 18px;">Status:</label>
                                        <div class="col-md-8">
                                            <select required name="status" id="disabledSelect" class="form-select">
                                                @foreach (config('const.produk_status') as $key => $item)
                                                    <option {{ $data->status == $item ? 'selected' : '' }}
                                                        value="{{ $key }}">{{ $item }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label"></label>
                                        <div class="col-md-8">
                                            <button type="submit" class="btn btn-success">Save Changes</button>
                                            <span></span>
                                            <a href="{{ route('produk.index') }}" class="btn btn-default">Batalkan</a>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

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
