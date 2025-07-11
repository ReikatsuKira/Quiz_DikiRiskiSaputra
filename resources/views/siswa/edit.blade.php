@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Siswa</h2>

    <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $siswa->nama }}" required>
        </div>

        <div class="mb-3">
            <label>NIS</label>
            <input type="text" name="nis" class="form-control" value="{{ $siswa->nis }}" required>
        </div>

        <div class="mb-3">
            <label>Kelas</label>
            <select name="kelas_id" class="form-control" required>
                <option value="">-- Pilih Kelas --</option>
                @foreach($kelas as $k)
                    <option value="{{ $k->id }}" {{ $k->id == $siswa->kelas_id ? 'selected' : '' }}>
                        {{ $k->nama_kelas }}
                    </option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
