<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class navigation extends Model
{
    use HasFactory;
    protected $table = 'navigations';
    protected $fillable = [
        'section',
        'item',
        'level',
        'parent_id',
        'key',
        'link',
    ];
}
