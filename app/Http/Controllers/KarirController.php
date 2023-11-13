<?php

namespace App\Http\Controllers;

use App\Models\Karir;
use Illuminate\Http\Request;

class KarirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $karir = Karir::all();
        return view("karir.index",compact("karir"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("karir.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->all();
        Karir::create($validated);
        return redirect()->route('karirs.index')->with('message', 'Karir Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Karir $karir)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Karir $karir)
    {
        $karir = Karir::find($karir->id);
        return view ('karirs.edit')->with('berita', $karir);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Karir $karir)
    {
        $validated = $request->validate([
            'nama_jabatan' => 'required',
            'lokasi' => 'required',
            'deskripsi_lowongan' => 'required',
            'kategori_pekerjaan' => 'required',
            'status_loker' => 'required'
        ]);
         $karir->update( $validated);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Karir $karir)
    {
         $karir->delete();

        return back()->with('message','Karir Deleted');
    }
}
