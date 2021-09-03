<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    public function index()
    {
        $data = Produk::createdBy()->get();
        $kategori = Kategori::createdBy()->get();
        
        foreach ($data as $key => $value) {
            $value->status = config('const.produk_status')[$value->status];
            $value->satuan = config('const.produk_satuan')[$value->satuan];
        }

        return view('admin.pages.produk.index', compact('data','kategori'));
    }

    public function store(Request $request)
    {
        $data = [
            'nama_produk' => $request->nama_produk,
            'kategori_id' => $request->kategori,
            'harga' => $request->harga,
            'satuan' => $request->satuan,
            'jumlah' => $request->jumlah,
            'deskripsi' => $request->deskripsi,
            'pengusaha_id' => auth()->user()->id,
            'status' => $request->status,
        ];

        if($request->foto) {
            $file_name = null;
            
            $destination = 'public/produk/foto/';                           
            if ($request->hasFile('foto'))
            {
                if (!file_exists(storage_path($destination))) {
                    Storage::makeDirectory($destination);
                }

                $file = $request->file('foto');
                $extention = $file->getClientOriginalExtension();
                $file_name = md5($file->getClientOriginalName())."_unique_".uniqid().".".$extention;
                $file->storeAs($destination, $file_name);
                $file_path = 'produk/foto/'.$file_name;
                $file_name = $file->getClientOriginalName();
            }

            $data['foto'] = $file_path;
        }

        Produk::create($data);

        return redirect()->route('produk.index')->with('success', 'Data berhasil ditambahkan');
    }
}
