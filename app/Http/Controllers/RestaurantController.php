<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Storage;
use App\Models\Plate;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Auth;
use App\Models\User;

class RestaurantController extends Controller
{





    /**
     * Display a listing of the resource.
     */



    public function index()
    {
        $restaurantsList = Restaurant::all();
        $platesList = Plate::all();
        return view('admin.index', compact('restaurantsList', 'platesList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'image' => ['required', 'image'],
            'address' => ['required', 'string', 'max:100'],
            'opening_time' => ['required'],
            'P_IVA' => ['required', 'min:9', 'max:9'],
        ]);

        if ($request->hasFile('image')) {
            $img_path =  Storage::put('uploads/', $request['image']);
            $data['image'] = $img_path;
        }

        $newRestaurant = new Restaurant();
        $newRestaurant->fill($data);
        $newRestaurant->save();
        return redirect()->route('admin.home')->with('created', $newRestaurant->id);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $platesList = Plate::all();

        return view('admin.menu.menu', compact('platesList'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $restaurantsList = Restaurant::all();
        $restaurant = Restaurant::findOrFail($id);
        return view('admin.edit', compact('restaurant', 'restaurantsList'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $data = $request->validate([
            'name' => ['string', 'max:100'],
            'image' => ['image'],
            'address' => ['string', 'max:100'],
            'opening_time' => ['required'],
            'P_IVA' => ['min:9', 'max:9'],
        ]);

        if ($request->hasFile('image')) {
            $img_path =  Storage::put('uploads/', $request['image']);
            $data['image'] = $img_path;
        }
        $restaurant = Restaurant::findOrFail($id);
        $restaurant->update($data);

        return redirect()->route('admin.index', $restaurant->id)->with('update', $restaurant->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

