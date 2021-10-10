<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visiting extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'shop_id',
        'lat',
        'long',
    ];

    protected $table = 'visitings';
}
