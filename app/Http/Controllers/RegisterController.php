<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function register(Request $request){
        $response = Http::post('http://localhost:8080/api/register', [
            'name' => $request->name,
            'email' => $request->email,
            'noHP' => $request->noHP,
            'password' => $request->password,
            'c_password' => $request->c_password,
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
            ]);

        return redirect('/');
        }

        return redirect('/register')->with(['errors' => $data['error']]);
    }
}
