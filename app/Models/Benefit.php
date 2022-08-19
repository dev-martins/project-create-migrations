<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
{
    use HasFactory;

    protected $table = 'benefits';
    
    protected $fillable = [
        'benefits_id',
        'main_title',
        'description',
        'image'
    ];
}
