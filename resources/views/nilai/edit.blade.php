@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Nilai</h2>

    <form action="{{ route('nilai.update', $nilai->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama Siswa</label>
            <select name="siswa_id" class="form-control" required>
                <option value="">-- Pilih Siswa --</option>
                @foreach($siswas as $siswa)
                    <option value="{{ $siswa->id }}" {{ $siswa->id == $nilai->siswa_id ? 'selected' : '' }}>
                        {{ $siswa->nama }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Mata Pelajaran</label>
            <input type="text" name="mata_pelajaran" class="form-control" value="{{ $nilai->mata_pelajaran }}" required>
        </div>

        <div class="mb-3">
            <label>Nilai</label>
            <input type="number" name="nilai" class="form-control" min="0" max="100" value="{{ $nilai->nilai }}" required>
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('nilai.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
