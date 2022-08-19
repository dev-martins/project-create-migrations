<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PolicyTopic extends Model
{
    use HasFactory;

    protected $table = 'policy_topics';

    protected $fillable = [
        'text',
        'policie_id',
        'order'
    ];
}
