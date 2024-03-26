<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modal extends Model
{
    use HasFactory;
    protected $table = 'modal';
    public $timestamps = false;
    protected $fillable = [
        'status_modal',
    ];
}
