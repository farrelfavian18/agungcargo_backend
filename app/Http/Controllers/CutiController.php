<?php

namespace App\Http\Controllers;

use App\Models\Cuti;
use App\Models\Jeniscuti;
use App\Models\Karyawan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CutiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $cuti = Cuti::with('karyawans')->get('id_karyawans');
        // $cuti = Cuti::all();
        $cuti = Cuti::with('users')->get('users_id');
        $cuti = Cuti::all();
        return view('admin.cuti.index',compact('cuti'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $karyawan  = Karyawan::all();
        $jeniscuti = Jeniscuti::all();
        $user = Auth::user();

        $idkaryawancuti = Karyawan::where('users_id',$user->id)->first();
        
        return view('user.cuti.create',compact('karyawan','idkaryawancuti','jeniscuti'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $karyawan = Karyawan::find($request->id_karyawans);
        $validated = $request->validate([
            'users_id' => 'required',
            'id_jenis_cuti'=> 'required',
            'tanggal_mulai'=> 'required',
            'tanggal_selesai'=> 'required',
            'keterangan'=> 'required',
            'alasan_cuti' => 'required'

        ]);
        $validated = $request->all();
        Cuti::create($validated);
        return redirect()->route('cutiuser.index')->with('message', 'Cuti Karyawan telah diajukan silahkan menunggu Validasi dari HRD');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cuti $cuti)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cuti $cuti)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cuti $cuti)
    {
        $validatedData = $request->validate([
            'status' => 'required',
        ]);
    Cuti::where('id', $cuti->id)->update($validatedData);

    return to_route('cuti.index')->with('message','Data Cuti Telah Di Update');

    }

    public function cutiuser()
    {
        // $karyawans = Karyawan::where('users_id', Auth::user()->id)->first();
        $user = Auth::user();

        $cutis = Cuti::where('users_id',$user->id)->get();
        
        
        return view('user.cuti.index',compact('cutis'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cuti $cuti)
    {
         $cuti->delete();
        return redirect()->route('cuti.index')->with('message','Cuti Karyawan Telah Dihapus');
    }
}
