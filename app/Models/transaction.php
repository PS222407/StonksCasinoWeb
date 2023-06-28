<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'userid',
        'tokens',
        'sender',
        'tokensBefore',
        'tokensAfter',
      
    ];
    public $timestamps = false;
}
