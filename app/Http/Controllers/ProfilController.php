<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\ProfilRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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

        if($request->avatar) {
            $file_name = null;
            $destination = 'public/user/profil/';
            if ($request->hasFile('avatar'))
            {
                if (!file_exists(storage_path($destination))) {
                    Storage::makeDirectory($destination);
                }

                $file = $request->file('avatar');
                $extention = $file->getClientOriginalExtension();
                $file_name = md5($file->getClientOriginalName())."_unique_".uniqid().".".$extention;
                $file->storeAs($destination, $file_name);
                $file_path = 'user/profil/'.$file_name;
                $file_name = $file->getClientOriginalName();
            }

            $data['avatar'] = $file_path;
        }
        
        User::find(Auth::user()->id)->update($data);

        return redirect()->back()->with('success', 'Profil berhasil diperbarui');
    }
}
