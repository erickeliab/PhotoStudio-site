<?php

namespace App;
use App\User;
use App\Order;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function orders()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }
}
