@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail Biodata Siswa</h2>

    <div class="card">
        <div class="card-body">
            <p><strong>Nama User:</strong> {{ $biodataSiswa->user->name }}</p>
            <p><strong>Nama:</strong> {{ $biodataSiswa->nama }}</p>
            <p><strong>NISN:</strong> {{ $biodataSiswa->nisn }}</p>
            <p><strong>Alamat:</strong> {{ $biodataSiswa->alamat }}</p>
            <p><strong>No HP:</strong> {{ $biodataSiswa->no_hp }}</p>
            <p><strong>Dibuat Pada:</strong> {{ $biodataSiswa->created_at->format('d-m-Y H:i') }}</p>
        </div>
    </div>

    <a href="{{ route('biodata.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection
