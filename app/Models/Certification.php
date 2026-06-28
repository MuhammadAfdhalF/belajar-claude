<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    protected $fillable = [
        'title',
        'issuer',
        'issued_at',
        'credential_url',
        'summary',
        'sort_order',
    ];

    protected $casts = [
        'issued_at'  => 'date',
        'sort_order' => 'integer',
    ];
}
