<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('form');
    }

    public function welcome(Request $request){
        $namaDepan = $request["firstName"];
        $namaBelakang = $request["lastName"];
        $nama = "$namaDepan $namaBelakang";

        //value yang direturn adalah string => compact('nama')
        return view('welcome', compact('nama'));
    }
}
