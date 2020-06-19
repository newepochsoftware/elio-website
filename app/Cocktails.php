<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cocktails extends Model
{
    //
    protected $fillable = ['cocktail_category', 'desc', 'price', 'sort_id'];

}
