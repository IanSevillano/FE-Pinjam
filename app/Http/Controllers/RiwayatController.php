<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    public function index(){
        $data = array(
            'title'                => 'Riwayat Peminjaman',
            'menuRiwayatPeminjaman' => 'active',
        );
        return view('user/riwayat/index',$data);   
    }
}
