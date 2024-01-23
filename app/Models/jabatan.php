<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jabatan extends Model
{
    use HasFactory;

    protected $fillable=['email','nama_jabatan','masa', 'tahun_awal', 'tahun_akhir', 'fakultas', 'prodi'];
    protected $table='jabatan';
}
