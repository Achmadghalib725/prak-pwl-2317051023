@extends('layouts.app')
@section('content')
    <h1>{{ $title }}</h1>
    <form action="{{ route('matakuliah.store') }}" method="POST" style="max-width: 400px; margin: 0 auto;">
        @csrf
        <div style="margin-bottom: 15px;">
            <label for="nama_mk" style="display: block; margin-bottom: 5px; font-weight: bold;">Nama Mata Kuliah:</label>
            <input type="text" id="nama_mk" name="nama_mk" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="sks" style="display: block; margin-bottom: 5px; font-weight: bold;">SKS:</label>
            <input type="number" id="sks" name="sks" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <button type="submit" style="background-color: #007bff; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">Simpan</button>
    </form>
@endsection
