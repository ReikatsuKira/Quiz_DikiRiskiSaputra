@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Data Biodata Siswa</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    
    <a href="{{ route('dashboard') }}" class="btn btn-warning mb-3">Kembali</a>

    <a href="{{ route('biodata.create') }}" class="btn btn-primary mb-3">Tambah Biodata</a>

    <table class="table table-bordered">
        <thead class="table-light">
            <tr>
                <th>Nama User</th>
                <th>NISN</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($biodatas as $data)
                <tr>
                    <td>{{ $data->user->name }}</td>
                    <td>{{ $data->nisn }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->alamat }}</td>
                    <td>{{ $data->no_hp }}</td>
                    <td>
                        <a href="{{ route('biodata.show', $data->id) }}" class="btn btn-primary btn-sm">Detail</a>
                        <a href="{{ route('biodata.edit', $data->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('biodata.destroy', $data->id) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
