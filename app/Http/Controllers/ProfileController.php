<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($nama = "Ghalib", $npm = "2317051023", $kelas = "C"){
        $data = [
            'nama' => $nama,
            'npm' => $npm,
            'kelas' => $kelas,
        ];    
        return view('profile', $data);
    }
}
