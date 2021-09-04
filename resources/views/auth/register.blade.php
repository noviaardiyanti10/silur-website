<!doctype html>
<html lang="en">

<head>
    <title>Silur!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="img" style="background-image: url({{ asset('assets/img/bg-1.jpg') }});">
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Register Silur</h3>
                                </div>
                                <div class="w-100">
                                    <p class="social-media d-flex justify-content-end">
                                        <a href="#"
                                            class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fa fa-facebook"></span></a>
                                        <a href="#"
                                            class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fa fa-twitter"></span></a>
                                    </p>
                                </div>
                            </div>
                            <form method="POST" action="{{ route('register') }}" class="signin-form">
                                @csrf
                                <div class="form-group mb-3">
                                    <label class="label" for="nama_lengkap">Nama Lengkap</label>
                                    <input id="nama_lengkap" type="text"
                                        class="form-control @error('nama_lengkap') is-invalid @enderror"
                                        name="nama_lengkap" value="{{ old('nama_lengkap') }}" required
                                        autocomplete="nama_lengkap" autofocus>

                                    @error('nama_lengkap')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="role_id">Pengunaan</label>
                                    <select name="role_id" id="role_id" class="form-control"
                                        onchange="change_role(this.value)">
                                        <option value="" disabled selected>Pilih</option>
                                        @foreach ($data['role'] as $item)
                                            @if ($item->id != 1)
                                                <option value="{{ $item->id }}" @if (old('role_id') == $item->id) selected @endif>
                                                    {{ $item->peran }}</option>
                                            @endif
                                        @endforeach
                                    </select>

                                    @error('role_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3" id="nama_usaha_form" style="display: none">
                                    <label class="label" for="nama_usaha">Nama Usaha</label>
                                    <input id="nama_usaha" type="text"
                                        class="form-control @error('nama_usaha') is-invalid @enderror" name="nama_usaha"
                                        value="{{ old('nama_usaha') }}" autocomplete="nama_usaha" autofocus>

                                    @error('nama_usaha')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="no_telp">Nomor Telepon</label>
                                    <input id="no_telp" type="text"
                                        class="form-control @error('no_telp') is-invalid @enderror" name="no_telp"
                                        value="{{ old('no_telp') }}" required autocomplete="no_telp" autofocus>

                                    @error('no_telp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="kabupaten">Kabupaten</label>
                                    <select name="kabupaten" id="kabupaten" class="form-control"
                                        onchange="change_kabupaten(this.value)">
                                        <option value="" disabled selected>Pilih Kabupaten</option>
                                        @foreach ($data['kabupaten'] as $item)
                                            <option value="{{ $item->id }}" @if (old('kabupaten') == $item->id) selected @endif>
                                                {{ $item->nama_kabupaten }}</option>
                                        @endforeach
                                    </select>

                                    @error('kabupaten')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="kecamatan">Kecamatan</label>
                                    <select name="kecamatan" id="kecamatan" class="form-control">
                                        <option value="" disabled selected>Pilih Kecamatan</option>
                                        @foreach ($data['kecamatan'] as $item)
                                            <option style="display: none" data-id="{{ $item->kabupaten_id }}"
                                                value="{{ $item->id }}" @if (old('kecamatan') == $item->id) selected @endif>
                                                {{ $item->nama_kecamatan }}</option>
                                        @endforeach
                                    </select>

                                    @error('kecamatan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="alamat">Alamat</label>
                                    <input id="alamat" type="text"
                                        class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                                        value="{{ old('alamat') }}" required autocomplete="alamat" autofocus>

                                    @error('alamat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="email">Email</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="username">Username</label>
                                    <input id="username" type="text"
                                        class="form-control @error('username') is-invalid @enderror" name="username"
                                        required autocomplete="new-username">

                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password-confirm">Konfirmasi Password</label>
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                                <div class="form-group">
                                    <button type="submit"
                                        class="form-control btn btn-primary rounded submit px-3">Register</button>
                                </div>
                            </form>
                            <p class="text-center">Sudah memiliki akun? <a href="{{ url('/login') }}">Login</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
<script src="{{ asset('js/app.js') }}" defer></script>
<script>
    function change_role(value) {
        if (value == 2) {
            $('#nama_usaha_form').fadeOut();
        } else if (value == 3) {
            $('#nama_usaha_form').fadeIn();
        }
    }

    function change_kabupaten(value) {
        // unselect select
        $('#kecamatan').prop('selectedIndex', 0);

        $('#kecamatan option').each(function() {
            if (value == $(this).data('id')) {
                // show option if value same with id
                $(this).show();
            } else {
                // hide option if value different with id
                $(this).hide();
            }
        });

    }
</script>
