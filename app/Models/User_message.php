<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_message extends Model
{
    use HasFactory;

    public function Messages()
    {
        return $this->hasMany('App\Models\Message', 'id', 'message_id')  ;
    }
}
