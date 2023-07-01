<?php

namespace App\Models\stock;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $table = 'stocks';

    public function userStocks()
    {
        return $this->hasMany(UserStock::class);
    }
}
