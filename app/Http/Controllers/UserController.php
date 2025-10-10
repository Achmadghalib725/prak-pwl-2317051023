<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\Kelas;

class UserController extends Controller
{
    public function store(Request $request)
    {
        UserModel::create([
            'nama'     => $request->nama,
            'nim'      => $request->nim,
            'kelas_id' => $request->kelas_id
        ]);
        return redirect()->to('/user');
    }

    public function create()
    {
        $kelas = Kelas::all();
        $data = [
            'title' => 'Create User',
            'kelas' => $kelas
        ];
        return view('create_user', $data);
    }

    public function index()
    {
        $data = [
            'title' => 'List User',
            'users' => UserModel::all()
        ];
        return view('list_user', $data);
    }
}
