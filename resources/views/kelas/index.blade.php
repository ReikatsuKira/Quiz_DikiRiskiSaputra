@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Data Kelas</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('dashboard') }}" class="btn btn-warning mb-3">Kembali</a>

    <a href="{{ route('kelas.create') }}" class="btn btn-primary mb-3">Tambah Kelas</a>

    <table class="table table-bordered">
        <thead class="table-light">
            <tr>
                <th>No</th>
                <th>Nama Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kelas as $index => $kela)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $kela->nama_kelas }}</td>
                    <td>
                        <a href="{{ route('kelas.edit', $kela->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('kelas.destroy', $kela->id) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus kelas ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
