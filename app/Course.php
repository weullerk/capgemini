<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $with = array('consultant', 'address');

    public function consultant()
    {
        return $this->hasOne('App\Consultant', 'id', 'consultant_id');
    }

    public function address()
    {
        return $this->hasOne('App\Address', 'id', 'address_id');
    }
}
