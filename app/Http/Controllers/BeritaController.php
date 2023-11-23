<?php

namespace App\Http\Controllers;


use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita = Berita::all();
        return view("berita.index")->with("berita", $berita);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("berita.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->all();
        $fileName = time().$request->file('foto_berita')->getClientOriginalName();
        $path = $request->file('foto_berita')->storeAs('images', $fileName,'public');
        $validated['foto_berita'] = '/storage/'.$path;
        Berita::create( $validated );
        return redirect()->route('beritas.index')->with('message', 'Berita Created');
        // $validated = $request->validate([
        //     "judul_berita"=> "required",
        //     "isi_berita"=> "required",
        //     "foto_berita"=> "required",
        // ]);
        // Berita::create($validated);
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berita $berita)
    {
        // dd($berita);
        $berita = Berita::find( $berita->id );
        // $berita = Berita::all();
        // $berita = Berita::findOrFail($berita);
        return view ('berita.edit')->with('berita', $berita);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Berita $berita)
    {
        $validated = $request->validate([
            'judul_berita' => 'required',
            'isi_berita' => 'required',
            'foto_berita' => 'required'
        ]);
        $fileName = time().$request->file('foto_berita')->getClientOriginalName();
        $path = $request->file('foto_berita')->storeAs('images', $fileName,'public');
        $validated['foto_berita'] = '/storage/'.$path;
        $berita->update( $validated);
        return to_route('beritas.index')->with('message','Berita updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $berita)
    {
        $berita->delete();

        return back()->with('message','Berita Deleted');
    }
}
