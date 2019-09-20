<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;

class Service extends Model
{
    //
    protected $primaryKey = 'service_id';

    public function orders(){

        return $this->hasMany(Order::class,'service_id');
    
    }

}
