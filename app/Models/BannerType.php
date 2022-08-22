<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerType extends Model
{
    use HasFactory;

    protected $table = 'banners_type';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
    ];
}
