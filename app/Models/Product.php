<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin \Eloquent
 * @package App
 */
class Product extends Model
{
    use HasFactory;

//    protected $fillable = ['name', 'quantity', 'price', 'category_id'];
    public function images() {
        return $this->hasMany(Image::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }

    public function orders() {
        return $this->belongsToMany(Order::class);
    }
}
