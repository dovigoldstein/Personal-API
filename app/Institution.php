<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    protected $dates = ['from_date', 'to_date']; 
}
