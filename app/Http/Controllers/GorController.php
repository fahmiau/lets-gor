<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GorController extends Controller
{
    public function show($id_gor){
        $response = Http::get('https://api.letsgor.my.id/api/gor/'.$id_gor);
        $gor = json_decode($response, true);

        $response = Http::get('https://api.letsgor.my.id/api/jadwal/gor/'.$id_gor);
        $jadwal = json_decode($response, true);

        return view('user.gorDetail', ['gor' => $gor, 'jadwal' => $jadwal]);

    }
}
