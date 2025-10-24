<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchasedSkin extends Model
{
    use HasFactory;

    protected $fillable = [
        'skinId',
        'userId',
    ];

    public $timestamps = false;
}
