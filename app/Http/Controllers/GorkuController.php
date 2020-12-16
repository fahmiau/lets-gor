<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GorkuController extends Controller
{
    public function index(){
        $id_gor = session('id_gor');
        $response = Http::withToken(session('token_api'))->get('https://api.letsgor.my.id/api/gor/'.$id_gor);
        $data = json_decode($response, true);

        return view('gorku.dashboard', ['gorku' => $data]);
    }

    public function bookingNew(){
        $id_gor = session('id_gor');
       
        $response = Http::withToken(session('token_api'))->get('https://api.letsgor.my.id/api/booking/gor/'.$id_gor);
        $data = json_decode($response, true);

        return view('gorku.booking', ['bookings' => $data]);
    }

    public function bookingHistory(){
        $id_gor = session('id_gor');
       
        $response = Http::withToken(session('token_api'))->get('https://api.letsgor.my.id/api/booking/gor/'.$id_gor);
        $data = json_decode($response, true);

        return view('gorku.booking_history', ['bookings' => $data]);
    }

    public function bookingDetail($id_transaksi){
        $id_gor = session('id_gor');

        $response = Http::withToken(session('token_api'))->get('https://api.letsgor.my.id/api/booking/gor/'.$id_gor.'/nomor/'.$id_transaksi);
        $data = json_decode($response, true);
        

        return view('gorku.booking_detail', ['book' => $data]);
        
    }

    public function approveTransaksi($id_transaksi){
        $id_gor = session('id_gor');

        $response = Http::withToken(session('token_api'))->post('https://api.letsgor.my.id/api/booking/gor/'.$id_gor.'/approval/'.$id_transaksi, [
            'approval' => 'Approved',
            'message' => 'Booking berhasil, silahkan datang sesuai jadwal ya!',
        ]);

        $data = json_decode($response, true);
        
        return redirect('/gorku/booking/terbaru')->with('message', $data);

    }

    public function declineTransaksi($id_transaksi){
        $id_gor = session('id_gor');

        $response = Http::withToken(session('token_api'))->post('https://api.letsgor.my.id/api/booking/gor/'.$id_gor.'/approval/'.$id_transaksi, [
            'approval' => 'Declined',
            'message' => 'Maaf, untuk jadwal dan tanggal tersebut telah penuh',
        ]);

        $data = json_decode($response, true);
        
        return redirect('/gorku/booking/terbaru')->with('message', $data);

    }

    public function jadwal(){
        $id_gor = session('id_gor');

        $response = Http::get('https://api.letsgor.my.id/api/jadwal/gor/'.$id_gor.'/Senin');
        $senin = json_decode($response, true);

        $response = Http::get('https://api.letsgor.my.id/api/jadwal/gor/'.$id_gor.'/Selasa');
        $selasa = json_decode($response, true);

        $response = Http::get('https://api.letsgor.my.id/api/jadwal/gor/'.$id_gor.'/Rabu');
        $rabu = json_decode($response, true);

        $response = Http::get('https://api.letsgor.my.id/api/jadwal/gor/'.$id_gor.'/Kamis');
        $kamis = json_decode($response, true);

        $response = Http::get('https://api.letsgor.my.id/api/jadwal/gor/'.$id_gor.'/Jumat');
        $jumat = json_decode($response, true);

        $response = Http::get('https://api.letsgor.my.id/api/jadwal/gor/'.$id_gor.'/Sabtu');
        $sabtu = json_decode($response, true);

        $response = Http::get('https://api.letsgor.my.id/api/jadwal/gor/'.$id_gor.'/Minggu');
        $minggu = json_decode($response, true);

        return view('gorku.jadwal', [
            'senin' => $senin,
            'selasa' => $selasa,
            'rabu' => $rabu,
            'kamis' => $kamis,
            'jumat' => $jumat,
            'sabtu' => $sabtu,
            'minggu' => $minggu,
         ]);
    }

    public function updateJadwal(Request $request){
        $id_gor = session('id_gor');

        $response = Http::withToken(session('token_api'))->put('https://api.letsgor.my.id/api/jadwal/gor/'.$id_gor.'/Senin', [
            'open_hour' => $request->open_senin,
            'close_hour' => $request->close_senin,
        ]);

        $response = Http::withToken(session('token_api'))->put('https://api.letsgor.my.id/api/jadwal/gor/'.$id_gor.'/Selasa', [
            'open_hour' => $request->open_selasa,
            'close_hour' => $request->close_selasa,
        ]);

        $response = Http::withToken(session('token_api'))->put('https://api.letsgor.my.id/api/jadwal/gor/'.$id_gor.'/Rabu', [
            'open_hour' => $request->open_rabu,
            'close_hour' => $request->close_rabu,
        ]);

        $response = Http::withToken(session('token_api'))->put('https://api.letsgor.my.id/api/jadwal/gor/'.$id_gor.'/Kamis', [
            'open_hour' => $request->open_kamis,
            'close_hour' => $request->close_kamis,
        ]);

        $response = Http::withToken(session('token_api'))->put('https://api.letsgor.my.id/api/jadwal/gor/'.$id_gor.'/Jumat', [
            'open_hour' => $request->open_jumat,
            'close_hour' => $request->close_jumat,
        ]);

        $response = Http::withToken(session('token_api'))->put('https://api.letsgor.my.id/api/jadwal/gor/'.$id_gor.'/Sabtu', [
            'open_hour' => $request->open_sabtu,
            'close_hour' => $request->close_sabtu,
        ]);

        $response = Http::withToken(session('token_api'))->put('https://api.letsgor.my.id/api/jadwal/gor/'.$id_gor.'/Minggu', [
            'open_hour' => $request->open_minggu,
            'close_hour' => $request->close_minggu,
        ]);

        $data = json_decode($response, true);

        return redirect('/gorku/jadwal')->with('message', $data);
        
    }
}
