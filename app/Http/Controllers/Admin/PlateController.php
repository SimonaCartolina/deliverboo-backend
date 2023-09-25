<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plate;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;



class PlateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $platesList = Plate::all();

        return view('admin.menu.menu', compact('platesList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $platesList = Plate::all();

        return view('admin.menu.create', compact('platesList'));
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


        $newPlate = new Plate();
        $newPlate->fill($data);
        $newPlate->save();
        return redirect()->route('admin.menu.menu')->with('created', $newPlate->id);
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
    public function edit(string $slug)
    {
        $menuList = Plate::all();
        $plate = Plate::findOrFail($slug);
        return view('admin.menu.edit', compact('plate', 'menuList'));
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
