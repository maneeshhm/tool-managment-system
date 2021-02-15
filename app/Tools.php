<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tools extends Model
{
    protected $table = 'tools';
    protected $fillable = ['tool_name', 'tool_category', 'tool_price', 'tool_quantity', 'image'];
}
