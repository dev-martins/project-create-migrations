<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WsProductsCoupons extends Model
{
    use HasFactory;

    protected $fillable = [
        'cp_id',
        'cp_title',
        'cp_coupon',
        'cp_discount',
        'cp_start',
        'cp_end'      
    ];
}
