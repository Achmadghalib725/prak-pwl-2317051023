<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\Kelas;

class UserController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:255',
            'kelas_id' => 'required|exists:kelas,id',
        ]);

        try {
            UserModel::create([
                'nama'     => $request->nama,
                'nim'      => $request->nim,
                'kelas_id' => $request->kelas_id
            ]);
            return redirect()->to('/user')->with('success', 'User berhasil ditambahkan.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menambahkan user.');
        }
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

    public function edit($id)
    {
        $user = UserModel::findOrFail($id);
        $kelas = Kelas::all();
        return view('edit_user', ['title' => 'Edit User', 'user' => $user, 'kelas' => $kelas]);
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:255',
            'kelas_id' => 'required|exists:kelas,id',
        ]);

        try {
            // Cari dan update data
            $user = UserModel::findOrFail($id);
            $user->update([
                'nama' => $request->input('nama'),
                'nim' => $request->input('nim'),
                'kelas_id' => $request->input('kelas_id'),
            ]);

            // Redirect ke halaman daftar user
            return redirect()->to('/user')->with('success', 'User berhasil diupdate.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat mengupdate user.');
        }
    }

    public function destroy($id)
    {
        try {
            $user = UserModel::findOrFail($id);
            $user->delete();

            // Redirect ke halaman daftar user
            return redirect()->to('/user')->with('success', 'User berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus user.');
        }
    }
}
