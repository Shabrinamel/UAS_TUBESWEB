<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seminar extends Model
{
    use HasFactory;
    protected $fillable=['email','nama_seminar','tgl', 'angka_kredit', 'satuan_hasil', 'jumlah_ak', 'keterangan','filename'];
    protected $table='seminar';
}
