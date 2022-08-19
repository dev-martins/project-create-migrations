<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WsProductsCategories extends Model
{
    use HasFactory;

    protected $table = 'ws_products_categories';

    protected $fillable = [
        'cat_id',
        'cat_parent',
        'cat_title',
        'cat_name',
        'cat_sizes',
        'cat_created'
    ];
}
