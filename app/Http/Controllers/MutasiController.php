<?php

namespace App\Http\Controllers;

use App\Models\Mutasi;
use Illuminate\Http\Request;
use App\Models\Karyawan;
use Illuminate\Support\Facades\Auth;

class MutasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mutasi = Mutasi::with('karyawans')->get('id_karyawans');
        $mutasi = Mutasi::all();
        return view('admin.mutasi.index',compact('mutasi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $karyawan  = Karyawan::all();
        // $karyawan = Karyawan::find($request->id_karyawans);
        // $validated = $request->validate([
        //     'jabatan' => 'required',
        // ]);
        //  $karyawan->update( $validated);
        
        return view('admin.mutasi.create',compact('karyawan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $karyawan = Karyawan::find($request->id_karyawans);
        $validated = $request->validate([
            'status_karyawan' => 'required',
        ]);
        $karyawan->update($validated);
        $valid = $request->all();
        $suratMutasiName = time().$request->file('surat_mutasi')->getClientOriginalName();
            $surat_mutasiPath = $request->file('surat_mutasi')->storeAs('surat_mutasi', $suratMutasiName,'public');
            $valid['surat_mutasi'] = '/storage/'.$surat_mutasiPath;
        Mutasi::create($valid);
        return redirect()->route('mutasi.index')->with('message', 'Mutasi Karyawan telah dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mutasi $mutasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mutasi $mutasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mutasi $mutasi)
    {
        //
    }
    public function mutasiuser()
    {
        $karyawans = Karyawan::where('users_id', Auth::user()->id)->first();
        $user = Auth::user();

        $mutasis = Mutasi::where('id_karyawans',$karyawans->id)->get();
        
        
        return view('user.mutasi.index',compact('mutasis'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mutasi $mutasi)
    {
        //
    }
}
