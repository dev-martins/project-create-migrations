<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WsProductsStock extends Model
{
    use HasFactory;

    protected $table = 'ws_products_stock';

    protected $fillable = [
        'stock_id',
        'pdt_id',
        'stock_code',
        'stock_inventory',
        'stock_sold'
    ];    
}
