<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function toForm()
    {
        return view('form');
    }

    public function selamatDatang(Request $request){
        // return view('welcomes');
        // dd($request->all());
        $namaDepan = $request["firstName"];
        $namaBelakang= $request["lastName"];
        $nama = "$namaDepan $namaBelakang"; 
        //value yang direturn adalah string => compact('nama')
        return view('welcome', compact('nama'));
    }
}
