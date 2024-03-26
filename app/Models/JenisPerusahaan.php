<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisPerusahaan extends Model
{
    use HasFactory;

    protected $table = 'jenis_perusahaan';
    public $timestamps = false;
    protected $fillable = [
        'jenis_perusahaan'
    ];
}
