<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matakuliah;

class MataKuliahController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'List Mata Kuliah',
            'mks' => Matakuliah::all(),
        ];
        return view('list_mk', $data);
    }

    public function create()
    {
        return view('create_mk', ['title' => 'Create Mata Kuliah']);
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_mk' => 'required|string|max:255',
            'sks' => 'required|integer',
        ]);

        // Simpan data ke database
        Matakuliah::create([
            'nama_mk' => $request->input('nama_mk'), // Perbaikan di sini
            'sks' => $request->input('sks'),       // Perbaikan di sini
        ]);

        // Redirect ke halaman daftar mata kuliah
        return redirect()->to('/matakuliah')->with('success', 'Mata Kuliah berhasil ditambahkan.');
    }
}