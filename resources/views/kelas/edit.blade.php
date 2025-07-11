@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Kelas</h2>

    <form action="{{ route('kelas.update', $kela->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama Kelas</label>
            <input type="text" name="nama_kelas" class="form-control" value="{{ $kela->nama_kelas }}" required>
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('kelas.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
