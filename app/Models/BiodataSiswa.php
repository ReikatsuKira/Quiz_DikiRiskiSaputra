<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BiodataSiswa extends Model
{
    protected $fillable = ['user_id', 'nama', 'alamat', 'no_hp', 'nisn'];

public function user()
{
    return $this->belongsTo(User::class);
}

}