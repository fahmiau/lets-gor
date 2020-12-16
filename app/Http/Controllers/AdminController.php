<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }

    public function addPage(){
        return view('admin.add_gor');
    }

    public function add(Request $request){
        
        $response = Http::withToken(session('token_api'))->post('https://api.letsgor.my.id/api/gor', [
            'id_pemilik' => $request->id_pemilik,
            'id_kategori' => $request->id_kategori,
            'nama' => $request->nama,
            'desc' => $request->desc,
            'telp' => $request->telp,
            'imgUrl' => NULL,
            'kota' => $request->kota,
            'alamat_lengkap' => $request->alamat_lengkap,
            'harga_per_jam' => $request->harga_per_jam,
        ]);

        $data = json_decode($response, true);
        
        
        return redirect('/admin/gor/add')->with('message', $data);
    }
}
