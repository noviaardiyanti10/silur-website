@extends('admin.layouts.app')

@section('content')
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12 main-chart">
                    <div class="container">
                        <h1 style="font-weight: bold;">Edit Profil</h1>
                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        <hr>
                        <div class="row">
                            <form class="form-horizontal" role="form" method="POST" action="{{ route('profil.store') }}" enctype="multipart/form-data">
                                @csrf
                                <!-- left column -->
                                <div class="col-md-3">
                                    <div class="text-center">
                                        <img id="imgPreview2"
                                            src="{{ $user->avatar == null ? asset('assets/img/profil.jpg') : url('storage/'.$user->avatar)  }}"
                                            class="avatar" alt="avatar" style="width: 120px; height: 130px;">
                                        <h6>Upload a different photo...</h6>
                                        <input onchange="showPreview2(this)" name="avatar" type="file"
                                            class="form-control">
                                    </div>
                                </div>

                                <!-- edit form column -->
                                <div class="col-md-9 personal-info">


                                    <div class="form-group">
                                        <label class="col-lg-3 control-label" style="font-size: 18px;">Nama Lengkap:</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" name="nama_lengkap" type="text"
                                                value="{{ $user->nama_lengkap }}">
                                            @error('nama_lengkap')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label" style="font-size: 18px;">No. Telepon:</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" name="no_telp" type="number"
                                                value="{{ $user->no_telp }}">
                                            @error('no_telp')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label" style="font-size: 18px;">Email:</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" name="email" type="email"
                                                value="{{ $user->email }}">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label" style="font-size: 18px;">Username:</label>
                                        <div class="col-md-8">
                                            <input class="form-control" name="username" type="text"
                                                value="{{ $user->username }}">
                                            @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label" style="font-size: 18px;">Password:</label>
                                        <div class="col-md-8">
                                            <input class="form-control" name="password" type="password" value="">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label" style="font-size: 18px;">Konfirmasi
                                            Password:</label>
                                        <div class="col-md-8">
                                            <input class="form-control" name="password_confirmation" type="password"
                                                value="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label"></label>
                                        <div class="col-md-8">
                                            <button type="submit" class="btn btn-success">Save Changes</button>
                                            <span></span>
                                            <a href="admin.html"> <input type="reset" class="btn btn-default"
                                                    value="Cancel"></a>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="clearfix" style="padding-top:16%;"></div>
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
