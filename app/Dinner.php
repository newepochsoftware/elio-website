<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dinner extends Model
{
    //
    protected $fillable = ['category', 'name', 'desc', 'price'];

}
