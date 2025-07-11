@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Data Nilai</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('dashboard') }}" class="btn btn-warning mb-3">Kembali</a>

    <a href="{{ route('nilai.create') }}" class="btn btn-primary mb-3">Tambah Nilai</a>

    <table class="table table-bordered">
        <thead class="table-light">
            <tr>
                <th>No</th>
                <th>Nama Siswa</th>
                <th>Mata Pelajaran</th>
                <th>Nilai</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($nilais as $index => $nilai)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $nilai->siswa->nama }}</td>
                    <td>{{ $nilai->mata_pelajaran }}</td>
                    <td>{{ $nilai->nilai }}</td>
                    <td>
                        <a href="{{ route('nilai.edit', $nilai->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('nilai.destroy', $nilai->id) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
