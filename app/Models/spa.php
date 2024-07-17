<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class spa extends Model
{
    protected $table = 'spas';
    protected $primaryKey = 'id_spa';
    protected $fillable = [
        'nama',
        'harga',
        'alamat',
        'noHP',
        'waktuBuka',
        'image'
    ];

    protected $casts = [
        'waktuBuka' => 'array',
    ];

    use HasFactory;
}
