<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KBLI extends Model
{
    use HasFactory;
    protected $table = 'kbli';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'judul',
        'pembina'
    ];
}
