<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WsOrdersItem extends Model
{
    use HasFactory;

    protected $table = 'ws_orders_items';

    protected $fillable = [
        'order_id',
        'pdt_id',
        'stock_id',
        'item_id',
        'item_name',
        'item_price',
        'item_amount',
    ];
}
