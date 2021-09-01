@extends('admin.layouts.app')

@section('content')
    <section id="main-content">
        <section class="wrapper">

            <div class="row">
                <div class="col-lg-12 main-chart">
                    <h1 style="font-weight: bold;">DATA PEDAGANG</h1>
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif

                    <br />

                    <table class="table table-bordered">
                        <thead>
                            <tr style="background:#DFF0D8;color:#333;height: 50px;">
                                <td style="font-size: 16px; font-weight: bold; color: #595959;">No.</td>
                                <td style="font-size: 16px; font-weight: bold; color: #595959;">Foto Toko</td>
                                <td style="font-size: 16px; font-weight: bold; color: #595959;">Nama Pedagang</td>
                                <td style="font-size: 16px; font-weight: bold; color: #595959;">Nama Usaha</td>
                                <td style="font-size: 16px; font-weight: bold; color: #595959;">Kabupaten</td>
                                <td style="font-size: 16px; font-weight: bold; color: #595959;">Kecamatan</td>
                                <td style="font-size: 16px; font-weight: bold; color: #595959;">Alamat</td>
                                <td style="font-size: 16px; font-weight: bold; color: #595959;">No. Telepon</td>
                                <td style="font-size: 16px; font-weight: bold; color: #595959;">Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data as $key => $value)
                            <tr>
                                <td>{{ $key+1 }}.</td>
                                <td>
                                    <img src="{{ $value->avatar == null ? asset('assets/img/profil.jpg') : url('storage/'.$value->avatar) }}" width="100px" height="100px">
                                </td>
                                <td>{{ $value->nama_lengkap }}</td>
                                <td>{{ $value->nama_usaha }}</td>
                                <td>{{ $value->kabupaten }}</td>
                                <td>{{ $value->kecamatan }}</td>
                                <td>{{ $value->alamat }}</td>
                                <td>{{ $value->no_telp }}</td>
                                <td>
                                    <form method="post" action="{{ url('user/destroy/'.$value->id) }}">
                                        {{ csrf_field() }}
                                        <button onclick="javascript:return confirm('Hapus Data Pedagang ?');" type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="9" style="text-align: center;">Tidak Ada Data</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="clearfix" style="padding-top:16%;"></div>
                </div>
            </div>
        </section>
    </section>

@endsection
