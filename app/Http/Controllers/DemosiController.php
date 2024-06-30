<?php

namespace App\Http\Controllers;

use App\Models\Demosi;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DemosiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $demosi = Demosi::with('karyawans')->get('id_karyawans');
        $demosi = Demosi::all();
        return view('admin.demosi.index',compact('demosi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $karyawan  = Karyawan::all();
        
        return view('admin.demosi.create',compact('karyawan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $karyawan = Karyawan::find($request->id_karyawans);
        $validated = $request->validate([
            'jabatan' => 'required',
        ]);
        $karyawan->update($validated);
        $valid = $request->all();
        $suratDemosiName = time().$request->file('surat_demosi')->getClientOriginalName();
            $surat_demosiPath = $request->file('surat_demosi')->storeAs('surat_demosi', $suratDemosiName,'public');
            $valid['surat_demosi'] = '/storage/'.$surat_demosiPath;
        Demosi::create($valid);
        return redirect()->route('demosi.index')->with('message', 'Demosi Karyawan telah dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show(Demosi $demosi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Demosi $demosi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Demosi $demosi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Demosi $demosi)
    {
        //
    }
     public function demosiuser()
    {
        $karyawans = Karyawan::where('users_id', Auth::user()->id)->first();
        $user = Auth::user();

        $demosis = Demosi::where('id_karyawans',$karyawans->id)->get();
        
        
        return view('user.demosi.index',compact('demosis'));
    }
}
