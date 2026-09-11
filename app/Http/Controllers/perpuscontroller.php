<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class perpuscontroller extends Controller
{
    public function index() {
        return view('tampilanperpus', ['cabang'=> '']);
    }

    public function getcabang($cabang){
        return view('perpuscabang', ['cabang'=> $cabang]);
    }

    public function postcabang(Request $request) {
        $cabang=$request->cabang; 
        return redirect('/selamat/' . $cabang);
    }
}
