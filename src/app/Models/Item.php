<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'condition_id',
        'name',
        'price',
        'description',
        'image_url'
    ];

    public function categoryItems() {
        return $this->hasMany('App\Models\CategoryItem');
    }

    public function condition() {
        return $this->belongsTo('App\Models\Condition');
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
