<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExplorePrime extends Model
{
    use HasFactory;

    protected $table = 'explore_prime';

    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'description',
        'button_label',
        'thumbnail',
        'order',
        'enabled',
        'href',
    ];
}
