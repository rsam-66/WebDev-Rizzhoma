<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pohon extends Model
{
    use HasFactory;

    protected $table = 'pohon'; // Menyatakan tabel yang digunakan

    // Menambahkan atribut yang bisa diisi
    protected $fillable = ['title', 'desc', 'gambar', 'stock', 'harga', 'createdAt', 'updatedAt'];
}
