@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Biodata Siswa</h2>

    <form action="{{ route('biodata.update', $biodataSiswa->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama User</label>
            <select name="user_id" class="form-control" required>
                <option value="">-- Pilih User --</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}" {{ $user->id == $biodataSiswa->user_id ? 'selected' : '' }}>
                        {{ $user->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $biodataSiswa->nama }}" required>
        </div>

        <div class="mb-3">
            <label>NISN</label>
            <input type="text" name="nisn" class="form-control" value="{{ $biodataSiswa->nisn }}" required>
        </div>

        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" required>{{ $biodataSiswa->alamat }}</textarea>
        </div>

        <div class="mb-3">
            <label>No HP</label>
            <input type="text" name="no_hp" class="form-control" value="{{ $biodataSiswa->no_hp }}" required>
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('biodata.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
