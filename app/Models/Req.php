<?php

namespace App\Models;

use App\Models\Stock;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Req extends Model
{
    use HasFactory;

    protected $fillable = ['stock_id', 'user_id', 'quantity'];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    // Owner::class,
    // Car::class,
    // 'mechanic_id', // Foreign key on the cars table...
    // 'car_id', // Foreign key on the owners table...
    // 'id', // Local key on the mechanics table...
    // 'id' // Local key on the cars table...

    public function stock()
    {
        // return $this->hasOneThrough(Product::class, Stock::class); //, 'product_id', 'id', 'stock_id', 'id');
        return $this->hasOne(Stock::class, 'stock_id');
    }
}
