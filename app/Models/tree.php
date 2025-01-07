<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tree extends Model
{
    protected $table = 'pohon'; // Nama tabel di database
    protected $fillable = ['title', 'desc', 'gambar', 'stock', 'harga'];

    public function orders()
    {
        return $this->hasMany(Order::class, 'productId')
                    ->where('productType', 'pohon');
    }
}
