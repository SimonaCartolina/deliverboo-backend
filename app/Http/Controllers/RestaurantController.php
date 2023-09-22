<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use App\Models\Plate;


class RestaurantController extends Controller
{





    /**
     * Display a listing of the resource.
     */

    // public function menu()
    // {
    //     $platesList = Plate::all();
    //     return view('guest.menu', compact('platesList'));
    // }

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
        $restaurantsList = Restaurant::all();
        return view('admin.create', compact('restaurantsList'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $img_path = Storage::put('uploads/', $request['image']);
        $data['image'] = $img_path;
        $newRestaurant = new Restaurant();
        $newRestaurant->fill($data);
        $newRestaurant->save();
        return redirect()->route('admin.index')->with('created', $newRestaurant->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Restaurant $restaurant)
    {
        // $platesList = Plate::all();
        // return view('guest.menu', compact('platesList'));
        
        return view('admin.show', compact('restaurant'));
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

        $data = $request->all();
        $img_path = Storage::put('uploads/', $request['image']);
        $data['image'] = $img_path;

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
