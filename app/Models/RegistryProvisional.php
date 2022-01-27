<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistryProvisional extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $casts = [
        'issue_date' => 'datetime',
    ];
}