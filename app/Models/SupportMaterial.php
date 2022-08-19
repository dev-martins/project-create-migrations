<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupportMaterial extends Model
{
    use HasFactory;

    protected $table = 'support_materials';
    
    protected $fillable = [
        'material_id,
        material_type,
        material_title,
        material_thumb,
        url_signed'
    ];
}
