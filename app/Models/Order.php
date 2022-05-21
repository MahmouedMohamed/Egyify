<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function items()
    {
        return $this->belongsToMany(Item::class, 'orders_items', 'order_id', 'item_id')->withPivot('quantity', 'quantity_type');
    }
}
