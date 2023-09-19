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
        return view('guest.index', compact('restaurantsList', 'platesList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $platesList = Plate::all();

        return view('guest.menu', compact('platesList'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
