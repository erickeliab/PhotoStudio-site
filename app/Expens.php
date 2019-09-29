<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Expens extends Model
{
  
        public function users()
        {
            return $this->belongsTo(User::class, 'user_id');
        }
        
}
