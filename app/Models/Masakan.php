<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Masakan extends Model
{
    use HasFactory;
    protected $table = 'masakan';
    protected $fillable = [
        'menu',
        'harga',
    ];

}