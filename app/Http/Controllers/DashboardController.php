<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\BiodataSiswa;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\Nilai;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'total_user' => User::count(),
            'total_biodata' => BiodataSiswa::count(),
            'total_kelas' => Kelas::count(),
            'total_siswa' => Siswa::count(),
            'total_nilai' => Nilai::count(),
        ]);
    }
}
