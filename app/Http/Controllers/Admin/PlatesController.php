<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Plate;


class PlatesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $platesList = Plate::all();

        return view('guest.menu', compact('platesList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $platesList = Plate::all();

        return view('guest.create', compact('platesList'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();

        if ($request->hasFile('image')) {
            $img_path = Storage::put('uploads', $request['image']);
            $data['image'] = $img_path;
        }
        $newPlate = new Plate();
        $newPlate->fill($data);
        $newPlate->save();
        return redirect()->route('guest.menu')->with('created', $newPlate->id);
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
        return view('admin.edit', compact('plate', 'menuList'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {

        $data = $request->all();
        $img_path = Storage::put('uploads/', $request['image']);
        $data['image'] = $img_path;

        $plate = Plate::findOrFail($slug);
        $plate->update($data);
        return redirect()->route('guest.menu', $plate->slug)->with('update', $plate->slug);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
