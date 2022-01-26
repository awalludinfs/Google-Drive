<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admins extends Model
{
    protected $fillable = [
        'nama',
        'email',
        'password'
    ];
    protected $hidden = [
        'password',
        'remember_token'
    ];

    protected $table='admins';
}
