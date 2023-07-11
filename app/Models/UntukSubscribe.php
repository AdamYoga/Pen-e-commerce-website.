<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UntukSubscribe extends Model
{
    use HasFactory;

    protected $table = 'untuk_subscribes';

    protected $fillable = [
        'email'
    ];
}
