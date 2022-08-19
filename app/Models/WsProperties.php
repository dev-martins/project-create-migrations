<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WsProperties extends Model
{
    use HasFactory;

    protected $table = 'ws_properties';

    protected $fillable = [
        'realty_id',
        'realty_cover',
        'realty_title',
        'realty_name',
        'realty_ref',
        'realty_price',
        'realty_desc',
        'realty_finality',
        'realty_type',
        'realty_builtarea',
        'realty_totalarea',
        'realty_bedrooms',
        'realty_apartments',
        'realty_bathrooms',
        'realty_parkings',
        'realty_particulars',
        'realty_transaction',
        'realty_state',
        'realty_city',
        'realty_district',
        'realty_date',
        'realty_observation',
        'realty_contact',
        'realty_status',
        'realty_views'
    ];
}
