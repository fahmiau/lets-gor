<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GorkuController extends Controller
{
    public function index(){
        return view('gorku.dashboard');
    }

    public function booking(){
        $id_gor = session('id_gor');
       
        $response = Http::withToken(session('token_api'))->get('localhost:8080/api/booking/gor/'.$id_gor);
        $data = json_decode($response, true);

        return view('gorku.booking', ['bookings' => $data]);
    }

    public function bookingDetail($id_transaksi){
        $id_gor = session('id_gor');

        $response = Http::withToken(session('token_api'))->get('localhost:8080/api/booking/gor/'.$id_gor.'/nomor/'.$id_transaksi);
        $data = json_decode($response, true);

        return view('gorku.booking_detail', ['book' => $data]);
        
    }

    public function approveTransaksi($id_transaksi){
        $id_gor = session('id_gor');

        $response = Http::withToken(session('token_api'))->post('localhost:8080/api/booking/gor/'.$id_gor.'/approval/'.$id_transaksi, [
            'approval' => 'Approved',
            'message' => 'Booking berhasil, silahkan datang sesuai jadwal ya!',
        ]);

        $data = json_decode($response, true);
        
        return redirect('/gorku/booking')->with('message', $data);

    }

    public function declineTransaksi($id_transaksi){
        $id_gor = session('id_gor');

        $response = Http::withToken(session('token_api'))->post('localhost:8080/api/booking/gor/'.$id_gor.'/approval/'.$id_transaksi, [
            'approval' => 'Declined',
            'message' => 'Maaf, untuk jadwal dan tanggal tersebut telah penuh',
        ]);

        $data = json_decode($response, true);
        
        return redirect('/gorku/booking')->with('message', $data);

    }
}
