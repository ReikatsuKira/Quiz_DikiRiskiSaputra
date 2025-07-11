@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Biodata Siswa</h2>

    <form action="{{ route('biodata.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Nama User</label>
            <select name="user_id" class="form-control" required>
                <option value="">-- Pilih User --</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>NISN</label>
            <input type="text" name="nisn" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label>No HP</label>
            <input type="text" name="no_hp" class="form-control" required>
        </div>

        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('biodata.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
