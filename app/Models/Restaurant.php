<?php

namespace App\Models;

use App\Models\Plate as ModelsPlate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    protected $table = 'restaurants';
    protected $fillable = ['name', 'image', 'address', 'opening_time', 'P_IVA'];

    public function plate(){
        return $this->hasMany(Plate::class);
    }
}
