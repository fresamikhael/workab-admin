<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'name',
        'lat',
        'long',
        'barcode',
        'barcode_image',
    ];

    protected $table = 'shops';
}
