<?php

namespace App\Http\Controllers;

use App\Models\Jeniscuti;
use Illuminate\Http\Request;

class JeniscutiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jeniscuti = Jeniscuti::all();
        return view('admin.jeniscuti.index',compact('jeniscuti'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jeniscuti = Jeniscuti::all();
        return view('admin.jeniscuti.create',compact('jeniscuti'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
                'jenis_cuti' => 'required',
                'jatah_cuti' => 'required',
            ]);
            Jeniscuti::create($validatedData);
            return redirect()->route('jeniscuti.index')->with('success', 'Jenis Cuti berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jeniscuti $jeniscuti)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jeniscuti $jeniscuti)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jeniscuti $jeniscuti)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jeniscuti $jeniscuti)
    {
        $jeniscuti->delete();
        return redirect()->route('jeniscuti.index')->with('message', 'Jenis Cuti telah dihapus');
    }
}
