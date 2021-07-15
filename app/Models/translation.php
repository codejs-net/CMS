<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class translation extends Model
{
    use HasFactory;

    protected $table = 'translations';
    protected $fillable = [
        'section',
        'key',
        'string_en',
        'string_si',
        'string_ta',
    ];
}
