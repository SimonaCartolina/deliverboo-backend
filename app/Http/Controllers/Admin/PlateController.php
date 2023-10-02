<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plate;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

use App\Http\Controllers\Auth;
use App\Models\User;



class PlateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $restaurant = auth()->user()->restaurant;
        $plates = $restaurant->plates;
        return view('admin.menu.menu', compact('plates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.menu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'image' => ['required', 'image'],
            'description' => ['required', 'max:255'],
            'price' => ['required'],

        ]);

        if ($request->hasFile('image')) {
            $img_path =  Storage::put('uploads/', $request['image']);
            $data['image'] = $img_path;
        }

        $restaurant = Auth()->user()->restaurant;

        $restaurant->createPlate($data)->save();

        return redirect()->route('admin.menu.menu')->with('created', 'Piatto creato con successo');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $plate = Plate::find($id);
        return view('admin.menu.edit', compact('plate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {


        $data = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'image' => ['required', 'image'],
            'description' => ['required', 'max:255'],
            'price' => ['required'],

        ]);

        if ($request->hasFile('image')) {
            $img_path =  Storage::put('uploads/', $request['image']);
            $data['image'] = $img_path;
        }

        $plate = Plate::findOrFail($slug);
        $plate->update($data);

        return redirect()->route('admin.menu.menu')->with('update', $plate->slug);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
