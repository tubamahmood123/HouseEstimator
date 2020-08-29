<?php

namespace App;
use App\Chat;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
     protected $fillable = [
        'user_id', 'friend_id','chat'];
}
