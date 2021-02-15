<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=[
        'customer_id','tool_id','date','time','fee','qty','delivery_fee','days','status'
    ];

}
