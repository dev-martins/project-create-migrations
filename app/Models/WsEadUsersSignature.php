<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WsEadUsersSignature extends Model
{
    use HasFactory;

    protected $table = 'ws_ead_users_signatures';

    protected $fillable = [
        'user_id',
        'signature_start',
        'signature_end',
        'signature_id'
    ];
}
