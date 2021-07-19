<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\navigation;

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

    public function parent() {

        return $this->hasOne('App\Models\navigation', 'id', 'parent_id');

    }

    public function children() {

        return $this->hasMany('App\Models\navigation', 'parent_id', 'id');

    }  

    public static function tree() {

        return static::with(implode('.', array_fill(0, 4, 'children')))->where('parent_id', '=', 0)->get();

    }
}
