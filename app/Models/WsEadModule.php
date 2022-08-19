<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WsEadModule extends Model
{
    use HasFactory;

    protected $table = 'ws_ead_modules';

    protected $fillable = [
        'course_id',
        'module_id',
        'module_title',
    ];
}
