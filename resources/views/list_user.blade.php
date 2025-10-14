@extends('layouts.app')
@section('content')
    <h1>Daftar Pengguna</h1>
    <a href="{{ route('user.create') }}" class="btn btn-primary mb-3">Tambah Pengguna</a>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Kelas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->nama }}</td>
                    <td>{{ $user->nim }}</td>
                    <td>{{ $user->kelas->nama_kelas }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
