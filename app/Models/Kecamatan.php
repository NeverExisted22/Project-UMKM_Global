<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;
    protected $table = 'kecamatan';
    public $timestamps = false;
    protected $primaryKey = 'id_var';
    protected $fillable = [
        'id_var',
        'kecamatan',
    ];

}
