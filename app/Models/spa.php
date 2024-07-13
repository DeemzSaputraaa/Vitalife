<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class spa extends Model
{
    protected $table = 'spas';
    protected $fillable = [
        'nama',
        'harga',
        'alamat',
        'noHP',
        'waktuBuka',
        'gambar'
    ];

    protected $casts = [
        'waktuBuka' => 'array',
    ];

    use HasFactory;
}
