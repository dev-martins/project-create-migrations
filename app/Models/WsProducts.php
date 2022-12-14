<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WsProducts extends Model
{
    use HasFactory;

    protected $table = 'ws_products';

    protected $fillable = [
        'pdt_id',
        'pdt_code',
        'pdt_parent',
        'pdt_title',
        'pdt_subtitle',
        'pdt_name',
        'pdt_hotlink',
        'pdt_cover',
        'pdt_content',
        'pdt_price',
        'pdt_inventory',
        'pdt_delivered',
        'pdt_brand',
        'pdt_category',
        'pdt_subcategory',
        'pdt_offer_price',
        'pdt_offer_start',
        'pdt_offer_end',
        'pdt_dimension_heigth',
        'pdt_dimension_width',
        'pdt_dimension_depth',
        'pdt_dimension_weight',
        'pdt_created',
        'pdt_views',
        'pdt_lastview',
        'pdt_status'
    ];
}
