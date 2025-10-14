@extends('layouts.app')
@section('content')
    <h1>{{ $title }}</h1>
    <form action="{{ route('user.store') }}" method="POST" style="max-width: 400px; margin: 0 auto;">
        @csrf
        <div style="margin-bottom: 15px;">
            <label for="nama" style="display: block; margin-bottom: 5px; font-weight: bold;">Nama:</label>
            <input type="text" id="nama" name="nama" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="nim" style="display: block; margin-bottom: 5px; font-weight: bold;">NIM:</label>
            <input type="text" id="nim" name="nim" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="kelas_id" style="display: block; margin-bottom: 5px; font-weight: bold;">Kelas:</label>
            <select id="kelas_id" name="kelas_id" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
                <option value="">Pilih Kelas</option>
                @foreach ($kelas as $k)
                    <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" style="background-color: #007bff; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">Simpan</button>
    </form>
@endsection
