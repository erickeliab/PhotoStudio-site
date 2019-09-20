<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Service;

class Order extends Model
{
    //

    protected $primaryKey = 'order_id';

    public function services(){

    return $this->belongsTo(Service::class,'service_id');
    
    }
}

