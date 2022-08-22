<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WsUsersNotes extends Model
{
    use HasFactory;

    protected $table = 'ws_users_notes';

    protected $primaryKey = 'note_id';

    protected $fillable = [
        'user_id',
        'admin_id',
        'note_text',
        'note_datetime',
        'note_status',  
               
    ];
}
