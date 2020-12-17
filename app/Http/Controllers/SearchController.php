<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SearchController extends Controller
{
    public function kategori($id_kategori){

        $nama_kategori = $this->nama_kategori($id_kategori);

        $response = Http::get('https://api.letsgor.my.id/api/gor/kategori/'.$id_kategori);
        $gors = json_decode($response, true);

        //melihat hari
        $hariIniInggris = date('l');
        $hariIni = $this->hariIndo($hariIniInggris);

        foreach($gors as $key => $gor){
            $response = Http::get("https://api.letsgor.my.id/api/jadwal/gor/".$gor['id']."/".$hariIni);
            $jadwal = json_decode($response, true);

            $gors[$key]['open_hour'] = $jadwal['open_hour'];
            $gors[$key]['close_hour'] = $jadwal['close_hour'];
            
        }

        return view('user.hasilSearchKategori', ['nama_kategori' => $nama_kategori, 'gors' => $gors]);
    }

    public function kota($kota){

        $response = Http::get('https://api.letsgor.my.id/api/lokasi/?kota='.$kota);
        $gors = json_decode($response, true);
        dd($gors);
    
        //melihat hari
        $hariIniInggris = date('l');
        $hariIni = $this->hariIndo($hariIniInggris);

        foreach($gors as $key => $gor){
            $response = Http::get("https://api.letsgor.my.id/api/jadwal/gor/".$gor['id']."/".$hariIni);
            $jadwal = json_decode($response, true);
            
            $gors[$key]['open_hour'] = $jadwal['open_hour'];
            $gors[$key]['close_hour'] = $jadwal['close_hour'];
            
        }

        return view('user.hasilSearchKota', ['nama_kota' => $kota, 'gors' => $gors]);
    }

    function nama_kategori($id_kategori){
        switch ($id_kategori) {
            case '1':
              return 'Basket';
            case '2':
              return 'Futsal';
            case '3':
              return 'Mini Soccer';
            case '4':
              return 'Sepakbola';
            case '5':
              return 'Bulu Tangkis';
            case '6':
              return 'Voli';
            default:
              return abort(404);
        }
    }

    function hariIndo($hari){
        switch ($hari) {
            case 'Sunday':
              return 'Minggu';
            case 'Monday':
              return 'Senin';
            case 'Tuesday':
              return 'Selasa';
            case 'Wednesday':
              return 'Rabu';
            case 'Thursday':
              return 'Kamis';
            case 'Friday':
              return 'Jumat';
            case 'Saturday':
              return 'Sabtu';
            default:
              return 'hari tidak valid';
        }
    }
}
