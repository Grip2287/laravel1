<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apll extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'date_time',
        'id_usl',
        'adress',
    ];
}
