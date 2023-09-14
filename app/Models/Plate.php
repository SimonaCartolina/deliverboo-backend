<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plate extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'plates';
    protected $fillable = ['name', 'image', 'description', 'price', 'slug', 'visible', 'id_restaurant',];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function restaurant(){
        return $this->belongsTo(Restaurant::class);
    }
}
