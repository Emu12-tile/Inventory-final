<?php

namespace App\Models;

use App\Models\Stock;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Req extends Model
{
    use HasFactory;

    protected $fillable = ['stock_id', 'user_id', 'quantity','store_status','head_status'];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function stock()
    {
        return $this->hasOne(Stock::class, 'id', 'stock_id');
    }
}
