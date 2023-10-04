<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'address',
        'gender',
        'nationality',
        'dateOfBirth'
    ];
}
