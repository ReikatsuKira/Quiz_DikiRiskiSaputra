@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Nilai</h2>

    <form action="{{ route('nilai.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Nama Siswa</label>
            <select name="siswa_id" class="form-control" required>
                <option value="">-- Pilih Siswa --</option>
                @foreach($siswas as $siswa)
                    <option value="{{ $siswa->id }}">{{ $siswa->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Mata Pelajaran</label>
            <input type="text" name="mata_pelajaran" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Nilai</label>
            <input type="number" name="nilai" class="form-control" min="0" max="100" required>
        </div>

        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('nilai.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
