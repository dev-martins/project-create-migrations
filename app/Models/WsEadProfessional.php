<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WsEadProfessional extends Model
{
    use HasFactory;

    protected $table = 'ws_ead_professionals';

    protected $fillable = [
        'order',
        'pro_name',
        'pro_lastname',
        'pro_photo',
        'pro_thumb',
        'is_author',
        'pro_specialist_thumb',
        'pro_prof',
        'pro_city',
        'pro_state',
        'pro_phone',
        'pro_email',
        'pro_status',
        'pro_form',
        'pro_created'
    ];
}
