<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\ProfilRequest;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('admin.pages.profile', compact('user'));
    }

    public function store(ProfilRequest $request)
    {
        $request->validated();

        $data = [
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'username' => $request->username,
            'no_telp' => $request->no_telp
        ];

        if($request->password) {
            $data['password'] = bcrypt($request->password);
        }
        
        User::find(Auth::user()->id)->update($data);

        return redirect()->back()->with('success', 'Profil berhasil diperbarui');
    }
}
