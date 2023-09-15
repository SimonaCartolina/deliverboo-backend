<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Restaurant;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
