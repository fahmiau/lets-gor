<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class CheckoutController extends Controller
{
    public function index(Request $request){
        $id_gor = $request->id_gor;

        $response = Http::get('https://api.letsgor.my.id/api/gor/'.$id_gor);
        $gor = json_decode($response, true);

        $response = Http::get('https://api.letsgor.my.id/api/jadwal/gor/'.$id_gor);
        $jadwal = json_decode($response, true);

        return view('booking.index', ['id_gor' => $id_gor, 'gor' => $gor, 'jadwal' => $jadwal]);
    }

    public function confirmation(Request $request){

        $id_gor = $request->id_gor;

        $startTime = Carbon::parse(date('H:i', strtotime($request->start_hour)));
        $endTime = Carbon::parse(date('H:i', strtotime($request->finish_hour)));
        $totalDuration =  $startTime->floatDiffInHours($endTime);

        $total = $request->harga_per_jam*$totalDuration;

        $data = $request->all();
        

        return view('booking.confirmation', ['data' => $data, 'total' => $total, 'id_gor' => $id_gor]);
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

    public function payment(Request $request){

        $id_gor = $request->id_gor;
        $hariBahasaInggris = date('l', strtotime($request->tanggal));
        $hari = $this->hariIndo($hariBahasaInggris);


        $response = Http::withToken(session('token_api'))->post('https://api.letsgor.my.id/api/booking/gor/'.$id_gor, [
            'user_id' => session('id'),
            'tanggal' => $request->tanggal,
            'start_hour' => $request->start_hour,
            'finish_hour' => $request->finish_hour,
            'total' => $request->total,
            'hari' => $hari,
        ]);

        return redirect('/payment/success');
    }

    public function successPage(){
        return view('booking.paymentConfirm');
    }
}
