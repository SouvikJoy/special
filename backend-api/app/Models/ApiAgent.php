<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiAgent extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'key',
        'secret',
        'target',
        'hosts',
        'active'
    ];

    protected $casts = [
        'active' => 'boolean',
        'hosts'  => 'array'
    ];
}
