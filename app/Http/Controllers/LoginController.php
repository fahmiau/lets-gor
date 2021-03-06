<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request){
        
        $response = Http::post('https://api.letsgor.my.id/api/login', [
            'email' => $request->email,
            'password' => $request->password,
        ]);

        $data = json_decode($response, true);
        if(isset($data['success'])){
            //create session
            session()->regenerate();
            session([
                'id' => $data['user']['id'],
                'name' => $data['user']['name'],
                'email' => $data['user']['email'],
                'noHP' => $data['user']['noHP'],
                'token_api' => $data['success']['token'],
                'id_gor' => $data['gor']['id'],
            ]);

        return redirect('/');
        }

        return redirect('/login')->with('error', 'Email atau Password salah');
    }

    public function logout(){
        session()->flush();

        return redirect('/');
    }
}
