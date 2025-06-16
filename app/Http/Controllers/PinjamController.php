<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PinjamController extends Controller
{
    public function index(){

        $response = Http::get('http://localhost:8080/bookings');
        $bookings = $response->json();

            $data = array(
                'title'                => 'Kelola Peminjaman',
                'menuKelolaPeminjaman' => 'active',
            );
            return view('admin/pinjam/index',$data,[
            'bookings' => $bookings['data_users']
        ]);   
    }
    
}
