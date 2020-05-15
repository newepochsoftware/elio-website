<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chefs extends Model
{
    //
    protected $fillable = ['thumbnail', 'name', 'social', 'partner_info', 'bio'];
}
