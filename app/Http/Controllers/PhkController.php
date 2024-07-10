<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Phk;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PhkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $phk = Phk::all();
        return view('admin.phk.index',compact('phk'));
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
    public function show(Phk $phk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Phk $phk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Phk $phk)
    {
        //
    }

    public function phkuser()
    {
        $karyawans = Karyawan::where('users_id', Auth::user()->id)->first();
        $user = Auth::user();

        $phk = Phk::where('id_karyawans',$karyawans->id)->get();
        
        
        return view('user.phk.index',compact('phk'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Phk $phk)
    {
        //
    }
}
