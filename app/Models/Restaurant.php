<?php

namespace App\Models;

use App\Models\Plate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\User;
use App\Models\Order;

class Restaurant extends Model
{
    use HasFactory;
    protected $table = 'restaurants';
    protected $fillable = ['name', 'image', 'address', 'opening_time', 'P_IVA', 'category'];

    public function Plate()
    {
        return $this->hasMany(Plate::class);
    }

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    
}
