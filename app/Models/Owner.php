<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Restaurant;


class Owner extends Model
{
    use HasFactory;
    protected $table = 'owners';
    protected $fillable = ['name', 'surname', 'email', 'password', 'id_restaurant'];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
