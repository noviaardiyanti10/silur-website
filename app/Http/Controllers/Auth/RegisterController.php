<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;
    
    public function showRegistrationForm()
    {
        
        $data['kecamatan'] = Kecamatan::all();
        $data['kabupaten'] = Kabupaten::all();
        $data['role'] = Role::all();
        
        return view('auth.register', compact('data'));
    }

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role_id' => ['required'],
            'nama_lengkap' => ['required'],
            'no_telp'  => ['required'],
            'kabupaten' => ['required'],
            'kecamatan' => ['required'],
            'alamat' => ['required'],
            'username' => ['required','unique:users','min:4'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => $data['role_id'],
            'nama_lengkap' => $data['nama_lengkap'],
            'no_telp'  => $data['no_telp'],
            'kabupaten' => Kabupaten::find($data['kabupaten'])->nama_kabupaten,
            'kecamatan' => Kecamatan::find($data['kecamatan'])->nama_kecamatan,
            'alamat' => $data['alamat'],
            'username' => $data['username'],
            'nama_usaha' => $data['nama_usaha'] ?? null,
        ]);
    }
}
