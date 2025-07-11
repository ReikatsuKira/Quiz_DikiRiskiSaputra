<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = ['nama', 'nis', 'kelas_id'];

public function kelas()
{
    return $this->belongsTo(Kelas::class);
}

public function nilais()
{
    return $this->hasMany(Nilai::class);
}

}
