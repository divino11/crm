<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'birthday',
        'name_company',
        'site_company',
        'token_company'
    ];
}
