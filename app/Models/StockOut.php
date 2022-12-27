<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockOut extends Model
{
    use HasFactory;
    protected $fillable = ['req_id',  'count'];





    public function req()
    {
        return $this->hasOne(Req::class, 'id', 'req_id');
    }
}
