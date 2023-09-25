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
    public function index(Request $request)
    {
        // $restaurants = Restaurant::all();
        // return response()->json($restaurants);

        if ($request->has('search')) {
            $restaurants = Restaurant::where('name', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $restaurants = Restaurant::all();
        }

        return response()->json($restaurants);
    }
}