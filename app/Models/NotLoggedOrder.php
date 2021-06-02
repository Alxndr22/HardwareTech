<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotLoggedOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'price',
        'delivery',
        'payment',
        'name',
        'surname',
        'phone',
        'email'
    ];

    public function products() {
        return $this->belongsToMany(Product::class);
    }
}
