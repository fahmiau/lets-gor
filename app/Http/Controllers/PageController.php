<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Arr;


class PageController extends Controller
{

    public function index(){
        $response = Http::get('https://api.letsgor.my.id/api/gor');
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

        $items = Arr::random($gors, 6);

        return view('user.home', ['gors' => $items]);
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
