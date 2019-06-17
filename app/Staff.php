<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'birthday',
        'services'
    ];

    public function services()
    {
        return $this->hasMany(Services::class,'staff_id','id');
    }

    public function orders()
    {
        return $this->hasMany(Orders::class,'staff_id','id');
    }

    public function getNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
