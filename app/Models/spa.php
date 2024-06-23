<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class spa extends Model
{
    protected $table = 'spa';
    protected $fillable = [
        'nama',
        'harga',
        'alamat',
        'noHP',
    ];
    use HasFactory;
}
