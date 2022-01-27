<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CertificateDeletion extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $casts = [
        'dated_at' => 'datetime',
    ];

}