<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Restaurant;
use App\Models\Guest;
use App\Models\Payment;
use App\Models\Plate;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function guest()
    {
        return $this->hasOne(Guest::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    public function plates()
    {
        return $this->belongsToMany('App\Models\Plate');
    }
}
