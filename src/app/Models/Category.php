<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function categoryItems() {
        return $this->hasMany('App\Models\CategoryItem');
    }
    // public function categoryItems() {
        // return $this->belongsToMany('App\Models\CategoryItem');
    // }
}
