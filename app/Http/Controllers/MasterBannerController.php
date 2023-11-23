<?php

namespace App\Http\Controllers;

use App\Models\MasterBanner;
use Illuminate\Http\Request;

class MasterBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $masterBanner = MasterBanner::all();
        // return view("masterbanner.index",compact("masterBanner"));
        $masterbanner = MasterBanner::all();
        return view("masterbanner.index",compact("masterbanner"));
    }

    public function landingpage()
    {
        $masterbanner = MasterBanner::all();
        return view("landingpage",compact("masterbanner"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("masterbanner.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->all();
        $fileName = time().$request->file('gambar_banner')->getClientOriginalName();
        $path = $request->file('gambar_banner')->storeAs('images', $fileName,'public');
        $validated['gambar_banner'] = '/storage/'.$path;
        MasterBanner::create($validated);
        return redirect()->route('masterbanner.index')->with('message', 'MasterBanner Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(MasterBanner $masterBanner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MasterBanner $masterbanner)
    {
        // $masterBanner = MasterBanner::find($masterBanner->id);
        // return view('masterbanner.edit')->with('masterBanner',$masterBanner);
        $masterbanner = MasterBanner::find($masterbanner->id);
        return view('masterbanner.edit')->with('masterbanner',$masterbanner);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MasterBanner $masterbanner)
    {
        $validated = $request->validate([
            'nama_banner' =>'required',
            // 'gambar_banner' =>'required'
        ]);
        // $fileName = time().$request->file('gambar_banner')->getClientOriginalName();
        // $path = $request->file('gambar_banner')->storeAs('images', $fileName,'public');
        // $validated['gambar_banner'] = '/storage/'.$path;
        // // $masterBanner->update($validated);
        $masterbanner->update($validated);
        return to_route('masterbanner.index')->with('message','Banner updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MasterBanner $masterbanner)
    {
        $masterbanner->delete();
        return back()->with("message","Master Banner deleted");
    }
}
