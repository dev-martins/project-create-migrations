<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    use HasFactory;

    protected $table = 'podcasts';

    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'image',
        'description_long',
        'description_short',
        'enabled',
    ];

}
