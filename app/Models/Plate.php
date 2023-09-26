<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Restaurant;
use App\Models\Order;

class Plate extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'plates';
    protected $fillable = ['name', 'image', 'description', 'price', 'slug', 'visible'];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function orders()
    {
        return $this->belongsToMany('App\Models\Order')->withPivot('quantity', 'created_at', 'updated at')->withTimestamps();
    }
}
