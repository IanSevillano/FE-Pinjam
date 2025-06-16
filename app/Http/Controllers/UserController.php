<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function index() {

        $response = Http::get('http://localhost:8080/users');
        $users = $response->json();

        $data = array(
            'title'         => 'Kelola User',
            'menuAdminUser' => 'active',
        );
        return view('admin/user/index',$data,[
            'users' => $users['data_users']
        ]);
    }

    public function autocomplete(Request $request)
{
    $q = $request->get('q');

    // Panggil API backend CI untuk cari user yang cocok
    $response = Http::get('http://localhost:8080/username/search', [
    'search' => $q
    ]);
    
        if ($response->successful()) {
        $users = $response->json();
        $results = [];
        foreach ($users['data_users'] as $user) {
            $results[] = [
                'id' => $user['id_user'],
                'text' => $user['name'],
            ];
            }
            return response()->json($results);
        }
        return response()->json([]);

}

}
