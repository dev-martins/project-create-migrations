<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
{
    use HasFactory;

    protected $table = 'benefits';

    protected $primaryKey = 'benefits_id';
    
    protected $fillable = [
        'main_title',
        'description',
        'image',
    ];
}
