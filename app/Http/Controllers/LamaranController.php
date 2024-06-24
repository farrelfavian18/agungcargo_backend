<?php

namespace App\Http\Controllers;

use App\Models\Karir;
use App\Models\Lamaran;
use App\Mail\LamaranMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LamaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Karir $karir)
    {
        // return view('landingpage.lamaran', [
        //     'lamarans' => Lamaran::with('lowongan')->get(),
        // ]);
        //  $karirs = Karir::all();
        $karirs = Karir::where('id', $karir->id)->get();

        return view('landingpage.lamaran', compact('karirs'));
        // return view('landingpage.lamaran', [
        //     'karirs' => Karir::with('nama_jabatan')->get(),
        // ]);
        // return view('landingpage.lamaran', compact('lamarans'));
    }
    //  public function boot()
    // {
    //     Karir::composer('*', function ($view) {
    //         $view->with('nama_jabatan', Karir::all());
    //     });
    // }
    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        return view('landingpage.lamaran', [
            'karirs' => Karir::findOrFail($id),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'karir_id' => 'required',
                'nama' => 'required',
                'foto_karyawan' => 'required|mimes:jpg,jpeg,png',
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
                'pengalaman_kerja' => 'required',
                'cv' => 'required|mimes:pdf',
                'ijazah' => 'required|mimes:pdf'   
            ]);


            // $fotoKaryawanPath = $request->file('foto')->store('foto-pelamar', 'public');
            // $validatedData['foto_karyawan'] = '/storage/'.$fotoKaryawanPath;
            // $cvPath = $request->file('cv')->store('cv-pdf', 'public');
            // $validatedData['cv'] = '/storage/'.$cvPath;
            // $ijazahPath = $request->file('ijazah')->store('ijazah-pdf', 'public');
            // $validatedData['ijazah'] = '/storage/'.$ijazahPath;
            $fotoKaryawanName = time().$request->file('foto_karyawan')->getClientOriginalName();
            $fotoKaryawanPath = $request->file('foto_karyawan')->storeAs('images', $fotoKaryawanName,'public');
            $validatedData['foto_karyawan'] = '/storage/'.$fotoKaryawanPath;

            $cvName = time().$request->file('cv')->getClientOriginalName();
            $cvPath = $request->file('cv')->storeAs('cv', $cvName,'public');
            $validatedData['cv'] = '/storage/'.$cvPath;

            $ijazahName = time().$request->file('ijazah')->getClientOriginalName();
            $ijazahPath = $request->file('ijazah')->storeAs('ijazah', $ijazahName,'public');
            $validatedData['ijazah'] = '/storage/'.$ijazahPath;

            Lamaran::create($validatedData);

            //  Mail::send('landingpage.kirimemail', [], function ($message) use ($request) {
            //     $message->to($request->email)->subject('Lamaran Mail');});
            // Mail::to($application->email)->send(new ApplicationReceived($application));

            Mail::to($request->email)->send(new LamaranMail());

            return redirect()->route('lamaran.show')->with('success', 'Lamaran anda berhasil dikirim silahkan periksa E-Mail anda');
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Lamaran $lamaran)
    {
        return view('landingpage.lamaranberhasil');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lamaran $lamaran)
    {
        // $lamaran= Lamaran::with('karirs')->get();
        // return view('admin.lamaran.edit',compact('karirs'));
        $lamaran= Lamaran::with('karirs')->get();
        Lamaran::find($lamaran);
        return view('admin.lamaran.edit',compact('lamaran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Lamaran $lamaran)
    {
        // $karirs = Karir::where('id', $karir->id)->get();
    }
    //     public function update(Request $request, Lamaran $lamaran, Karir $karir)
    // {
    //     $karirs = Karir::where('id', $karir->id)->get();
    //     return view('admin.lamaran.index',compact('karirs'));
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lamaran $lamaran)
    {
        //
    }
}
