<?php

namespace App\Http\Controllers;

use App\Models\Promosi;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PromosiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $promosi = Promosi::with('karyawans')->get('id_karyawans');
        $promosi = Promosi::all();
        return view('admin.promosi.index',compact('promosi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request, Karyawan $karyawan)
    {
        $karyawan  = Karyawan::all();
        // $karyawan = Karyawan::find($request->id_karyawans);
        // $validated = $request->validate([
        //     'jabatan' => 'required',
        // ]);
        //  $karyawan->update( $validated);
        
        return view('admin.promosi.create',compact('karyawan'));
        
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
        $suratPromosiName = time().$request->file('surat_promosi')->getClientOriginalName();
            $surat_promosiPath = $request->file('surat_promosi')->storeAs('surat_promosi', $suratPromosiName,'public');
            $valid['surat_promosi'] = '/storage/'.$surat_promosiPath;
        Promosi::create($valid);
        return redirect()->route('promosi.index')->with('message', 'Promosi Karyawan telah dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show(Promosi $promosi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Promosi $promosi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Promosi $promosi)
    {
        //
    }
    
    public function promosiuser()
    {
        $karyawans = Karyawan::where('users_id', Auth::user()->id)->first();
        $user = Auth::user();
        // $karyawans = $user->karyawans;
        $promosis = Promosi::where('id_karyawans',$karyawans->id)->get();
        // $promosis = Promosi::query();

        // $promosis = $promosis->get();
        
        // return view('user.promosi.index', [
        //     'promosis' => Promosi::with('karyawans')->where('id_karyawans', Auth::user()->id)->get(),
        //     'karyawans' => Karyawan::all(),
        // ]);


        // Ambil id dari karyawans yang berelasi dengan user

        // Ambil promosi yang berelasi dengan karyawan-karyawan tersebut
        
        // $promosikaryawan = Promosi::all();
        // $promosikaryawan = Promosi::where('id_karyawans',$user->id)->get();
        
        return view('user.promosi.index',compact('promosis'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Promosi $promosi)
    {
        //
    }
}
