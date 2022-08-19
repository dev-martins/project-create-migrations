<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WsUsers extends Model
{
    use HasFactory;

    protected $table = 'ws_users';

    protected $fillable = [
        'agregador_id',
        'user_id',
        'user_thumb',
        'user_name',
        'user_lastname',
        'user_document',
        'user_document_check',
        'user_genre',
        'user_datebirth',
        'user_telephone',
        'user_cell',
        'user_email',
        'user_password',
        'user_channel',
        'user_registration',
        'user_lastupdate',
        'user_lastaccess',
        'user_login',
        'user_login_cookie',
        'user_level',
        'user_facebook',
        'user_twitter',
        'user_youtube',
        'user_google',
        'user_document_name',
        'user_blocking_reason',
        'user_agreement',
        'user_videointro'          
    ];
}
