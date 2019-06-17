<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $fillable = [
        'service_name',
        'staff_id',
        'price',
    ];

    public function staffs()
    {
        return $this->belongsTo(Staff::class,'staff_id','id');
    }

    public function orders()
    {
        return $this->hasMany(Orders::class,'service_id','id');
    }
}
