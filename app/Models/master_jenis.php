<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class master_jenis extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'kode_jenis',
        'urai_jenis',
    ];
}
