<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable = [
        'client_id',
        'staff_id',
        'service_id',
        'quantity',
    ];

    public function staffs()
    {
        return $this->belongsTo(Staff::class,'staff_id','id');
    }

    public function clients()
    {
        return $this->belongsTo(Clients::class,'client_id','id');
    }

    public function services()
    {
        return $this->belongsTo(Services::class,'service_id','id');
    }
}
