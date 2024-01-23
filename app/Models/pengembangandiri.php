<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengembangandiri extends Model
{
    use HasFactory;
    protected $fillable=['email','Kegiatan','tgl', 'durasi', 'ak_penilaian', 'ak_instansi', 'keterangan','filename'];
    protected $table='pengembangandiri';
}
