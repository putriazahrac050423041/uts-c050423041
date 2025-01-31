<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Menentukan atribut yang dapat diisi secara massal
    protected $fillable = ['name', 'description']; // Tambahkan atribut yang ingin diizinkan
}
