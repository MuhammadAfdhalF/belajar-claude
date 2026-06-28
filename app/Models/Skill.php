<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        'name',
        'category',
        'level',
        'sort_order',
    ];

    protected $casts = [
        'sort_order' => 'integer',
    ];
}
