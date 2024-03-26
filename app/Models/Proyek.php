<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyek extends Model
{
    use HasFactory;
    protected $table = 'proyek';
    public $timestamps = false;
    protected $fillable = [
        'longitude',
        'latitude',
        'alamat',
        'perusahaan_id',
        'modal_id',
        'resiko_id',
        'skala_usaha_id',
        'kecamatan_id',
        'desa_id',
        'kbli'
    ];
}
