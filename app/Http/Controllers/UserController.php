<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use App\Models\Kelas;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(){
        $kelasModdel = new Kelas();
        $kelas = $kelasModdel->getKelas();
        $data = [
            'title' => 'Create User',
            'kelas' => $kelas
        ];
        return view('create_user', $data);
    }
}
