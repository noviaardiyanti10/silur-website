@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nama_lengkap" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                            <div class="col-md-6">
                                <input id="nama_lengkap" type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" value="{{ old('nama_lengkap') }}" required autocomplete="nama_lengkap" autofocus>

                                @error('nama_lengkap')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role_id" class="col-md-4 col-form-label text-md-right">{{ __('Penggunaan') }}</label>

                            <div class="col-md-6">
                                <select name="role_id" id="role_id" class="form-control" onchange="change_role(this.value)">
                                    <option value="" disabled selected>Pilih</option>
                                    @foreach ($data['role'] as $item)
                                        @if($item->id != 1)
                                            <option value="{{ $item->id }}" @if(old('role_id') == $item->id) selected @endif>{{ $item->peran }}</option>
                                        @endif
                                    @endforeach
                                </select>

                                @error('role_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row" id="nama_usaha_form" style="display: none">
                            <label for="nama_usaha" class="col-md-4 col-form-label text-md-right">{{__('Nama Usaha')   }}</label>
                            <div class="col-md-6">
                                <input id="nama_usaha" type="text" class="form-control @error('nama_usaha') is-invalid @enderror" name="nama_usaha" value="{{ old('nama_usaha') }}" autocomplete="nama_usaha" autofocus>

                                @error('nama_usaha')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="no_telp" class="col-md-4 col-form-label text-md-right">{{__('Telepon')   }}</label>
                            <div class="col-md-6">
                                <input id="no_telp" type="text" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp" value="{{ old('no_telp') }}" required autocomplete="no_telp" autofocus>

                                @error('no_telp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="kabupaten" class="col-md-4 col-form-label text-md-right">{{__('Kabupaten')   }}</label>
                            <div class="col-md-6">
                                <select name="kabupaten" id="kabupaten" class="form-control" onchange="change_kabupaten(this.value)">
                                    <option value="" disabled selected>Pilih Kabupaten</option>
                                    @foreach ($data['kabupaten'] as $item)
                                        <option value="{{ $item->id }}" @if(old('kabupaten') == $item->id) selected @endif>{{ $item->nama_kabupaten }}</option>
                                    @endforeach
                                </select>

                                @error('kabupaten')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="kecamatan" class="col-md-4 col-form-label text-md-right">{{__('Kecamatan')   }}</label>
                            <div class="col-md-6">
                                <select name="kecamatan" id="kecamatan" class="form-control">
                                    <option value="" disabled selected>Pilih Kecamatan</option>
                                    @foreach ($data['kecamatan'] as $item)
                                        <option style="display: none" data-id="{{ $item->kabupaten_id }}" value="{{ $item->id }}" @if(old('kecamatan') == $item->id) selected @endif>{{ $item->nama_kecamatan }}</option>
                                    @endforeach
                                </select>

                                @error('kecamatan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                    <div class="form-group row">
                        <label for="alamat" class="col-md-4 col-form-label text-md-right">{{__('Alamat')   }}</label>
                        <div class="col-md-6">
                            <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat" autofocus>

                            @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" required autocomplete="new-username">

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

<script>
    function change_role(value){
        if(value == 2){
            $('#nama_usaha_form').fadeOut();
        }
        else if(value == 3){
            $('#nama_usaha_form').fadeIn();
        }
    }

    function change_kabupaten(value) {
        // unselect select
        $('#kecamatan').prop('selectedIndex', 0);

        $('#kecamatan option').each(function(){
            if(value == $(this).data('id')){
                // show option if value same with id
                $(this).show();
            }
            else{
                // hide option if value different with id
                $(this).hide();
            }
        });

    }
</script>