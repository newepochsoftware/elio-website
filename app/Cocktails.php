<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cocktails extends Model
{
    //
    protected $fillable = ['thumbnail', 'name', 'social', 'partner_info', 'bio'];

}