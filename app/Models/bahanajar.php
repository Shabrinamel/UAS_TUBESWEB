<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bahanajar extends Model
{
    use HasFactory;

    protected $fillable=['email','Kegiatan','tgl', 'ak_penilaian', 'ak_instansi', 'keterangan','filename'];
    protected $table='bahanajar';
}
