<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    use HasFactory;
    public function setFirstnameAttribute($value)
    {
        $this->attributes['firstname']=ucwords($value);
    }
    public function getDobAttribute($value)
    {
        return date("d-m-y",strtotime($value));
    }
}
