<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class spesialis extends Model
{
    protected $table = 'spesialis';
    protected $fillable = [
        'nama',
        'spesialisasi',
        'tempatTugas',
        'harga',
        'alamat',
        'noHP',
    ];
    use HasFactory;
}
