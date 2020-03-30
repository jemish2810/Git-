<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
        protected $fillable = [
        
        'firstname',
        'lastname',
        'email',
        'phone_number',
        'gender',
        'image'
    ];


    

    /**
     * Make sure that last name is always capitalized when retrieved from the database
     *
     * @param $value
     * @return string
     */

    public function setFirstNameAttribute($value)
    {
        $this->attributes['firstname'] = ucfirst($value);
    }

    protected $appends = [
        'full_name'
    ];

    public function getFullNameAttribute()
    {
        return $this->attributes['firstname'] . ' ' . $this->attributes['lastname'];
    }

    public function getImageAttribute($value)
    {
        return ('image/') . $value;
    }
}

