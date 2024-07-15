<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class yoga extends Model
{
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
