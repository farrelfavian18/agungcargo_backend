<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use App\Models\User;
class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $karyawan= Karyawan::with('users')->get('users_id');
        $karyawan = Karyawan::all();
        return view("admin.karyawans.index",compact("karyawan"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::all();
        return view("admin.karyawans.create", compact("user"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'nama' => 'required',
                'users_id' => 'required',
                'foto_karyawan' => 'required|mimes:jpg,jpeg,png',
                'jabatan' => 'required',
                'email' => 'required',
                'alamat' => 'required',
                'no_telpon' => 'required',
                'jenis_kelamin' => 'required',
                'agama' => 'required',
                'tgl_lahir' => 'required',
                'tmpt_lahir' => 'required',
                'status_hubungan' => 'required',
                'no_ktp' => 'required',
                'pendidikan' => 'required',
                'no_rekening' => 'required',
                'status_karyawan' => 'required',  
            ]);

            $fotoKaryawanName = time().$request->file('foto_karyawan')->getClientOriginalName();
            $fotoKaryawanPath = $request->file('foto_karyawan')->storeAs('images', $fotoKaryawanName,'public');
            $validatedData['foto_karyawan'] = '/storage/'.$fotoKaryawanPath;

            Karyawan::create($validatedData);

            //  Mail::send('landingpage.kirimemail', [], function ($message) use ($request) {
            //     $message->to($request->email)->subject('Lamaran Mail');});
            // Mail::to($application->email)->send(new ApplicationReceived($application));

            return redirect()->route('karyawan.index')->with('success', 'Data Karyawan berhasil di tambahkan');
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Karyawan $karyawan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Karyawan $karyawan)
    {
        // $karyawan= Karyawan::find( $karyawan->id );
        // $berita = Berita::all();
        // $berita = Berita::findOrFail($berita);
        // dd($karyawan);
        // $karyawan = Karyawan::find( $karyawan->id );

        return view('admin.karyawans.edit', [
            'karyawan' => $karyawan,
            'user' => User::all(),
        ]);
        // return view('admin.karyawans.edit')->with('karyawan', $karyawan);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Karyawan $karyawan)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'foto_karyawan' => 'required',
            'email' => 'required',
            'alamat' => 'required'
            
        ]);
        // dd($validated);
        $fileName = time().$request->file('foto_karyawan')->getClientOriginalName();
        $path = $request->file('foto_karyawan')->storeAs('images', $fileName,'public');
        $validated['foto_karyawan'] = '/storage/'.$path;
        Karyawan::where('id', $karyawan->id)->update($validated);
        // Karyawan::where('id', $karyawan->id)->$karyawan->update( $validated);
        

        return to_route('datakaryawan.index')->with('message','Data Karyawan Telah Di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Karyawan $karyawan)
    {
        $karyawan->delete();
        return redirect()->route('datakaryawan.index')->with('message', 'Data Karyawan Berhasil di Hapus');
    }
}
