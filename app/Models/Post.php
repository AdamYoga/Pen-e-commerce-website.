<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    
    protected $fillable = [
        // 'email' harus sama dengan database dan pengirim form (PengendaliCompanyProfile.php)
        'email',
        'kuantitas',
        'no_telepon'
    ];
}
