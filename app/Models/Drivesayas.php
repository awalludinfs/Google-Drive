<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drivesayas extends Model
{
    protected $fillable = [
        'gambar',
        'judul',
        'isi',
        'email'
    ];
    
    protected $table ='Drivesayas';
}
