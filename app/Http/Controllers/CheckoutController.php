<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(Request $request){
        return view('booking.index');
    }

    public function confirmation(){
        return view('booking.confirmation');
    }
}
