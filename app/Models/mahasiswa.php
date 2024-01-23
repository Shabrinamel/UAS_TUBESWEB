<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;

    protected $fillable=['email','nama', 'nip', 'unit_kerja', 'bidang_minat', 'tgll', 'jk', 'mgl', 'mgb'];
    protected $table='mahasiswa';
    public $timestamps = false;

}

