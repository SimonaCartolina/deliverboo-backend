<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\admin\PlatesController;
use App\Http\Controllers\RestaurantController;
use App\Models\Restaurant;
use App\Models\Plate;

class ApiController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::all();
        return response()->json($restaurants);
    }
}
