@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Dashboard</h2>

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card bg-light">
                <div class="card-body">
                    <h5>Total User</h5>
                    <h3>{{ $total_user }}</h3><br>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-light">
                <div class="card-body">
                    <h5>Total Biodata Siswa</h5>
                    <h3>{{ $total_biodata }}</h3>
                    <a href="{{ route('biodata.index') }}" class="btn btn-sm btn-primary mt-2">Lihat Biodata</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-light">
                <div class="card-body">
                    <h5>Total Kelas</h5>
                    <h3>{{ $total_kelas }}</h3>
                    <a href="{{ route('kelas.index') }}" class="btn btn-sm btn-primary mt-2">Lihat Kelas</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card bg-light">
                <div class="card-body">
                    <h5>Total Siswa</h5>
                    <h3>{{ $total_siswa }}</h3>
                    <a href="{{ route('siswa.index') }}" class="btn btn-sm btn-primary mt-2">Lihat Siswa</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card bg-light">
                <div class="card-body">
                    <h5>Total Nilai</h5>
                    <h3>{{ $total_nilai }}</h3>
                    <a href="{{ route('nilai.index') }}" class="btn btn-sm btn-primary mt-2">Lihat Nilai</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
