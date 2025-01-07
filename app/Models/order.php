<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'productType',
        'productId',
        'quantity',
        'totalPrice',
        'firstName',
        'lastName',
        'email',
        'shippingMethod',
        'paymentMethod',
        'status'
    ];

    public function tree()
    {
        return $this->belongsTo(Tree::class, 'productId')
                    ->where('productType', 'pohon');
    }
}