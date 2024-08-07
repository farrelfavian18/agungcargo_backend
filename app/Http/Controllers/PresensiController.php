<?php

namespace App\Http\Controllers;

use App\Models\Presensi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\Karyawan;

class PresensiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $karyawan= Karyawan::with('users')->get('users_id');
        $presensi = Presensi::all();
        $jadwal_jam_masuk = "08:00:00";
        $jadwal_jam_keluar = "16:00:00";
        return view("admin.presensi.index",compact("presensi","jadwal_jam_masuk","jadwal_jam_keluar"));
    }
    public function masuk()
    {
        $today = date('Y-m-d');
        $id = Auth::user()->id;
        $cek = DB::table('presensis')->where('tgl_presensi',$today)->where('users_id',$id)->get();
        return view("user.presensi.masuk",compact('cek'));
        // $presensi = Presensi::all();
        // return view("user.presensi.masuk",compact("presensi"));
    }
    public function keluar()
    {
        $presensi = Presensi::all();
        return view("user.presensi.keluar",compact("presensi"));
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $id = Auth::user()->id;
        $tgl_presensi = date('Y-m-d');
        $jam_presensi = date('H:i:s');
        $image = $request->image;
        // echo $image;
        // die;
        $folderPath = "public/uploads/presensi/";
        $formatName = $id . "_" . str_replace('-','',$tgl_presensi)."_".time()."_".mt_rand(1000,9999);
        $image_parts = explode(";base64,", $image);
        $image_base64 = base64_decode($image_parts[1]);
        $fileName = $formatName . '.png';
        $file = $folderPath . $fileName;
        $cek = DB::table('presensis')->where('tgl_presensi',$tgl_presensi)->where('users_id',$id)->count();
        if($cek > 0){
            $data_pulang = [
                'jam_keluar_presensi' => $jam_presensi,
                'foto_keluar' => $fileName
            ];
            $update = DB::table('presensis')->where('tgl_presensi',$tgl_presensi)->where('users_id',$id)->update($data_pulang);
            if($update){
                echo "success|Terimakasih Telah Melakukan Presensi Pulang, Hati-Hati di Jalan|out";
                Storage::put($file, $image_base64);
            }else{
                echo "error|Presensi Gagal silahkan coba lagi!|out";
            }
        }else{
            $data = [
                'users_id' => $id,
                'status' => 'Hadir',
                'tgl_presensi' => $tgl_presensi,
                'jam_presensi' => $jam_presensi,
                'foto_presensi' => $fileName
            ];
            $simpan = DB::table('presensis')->insert($data);
            if($simpan){
                echo "success|Presensi sukses, Selamat menjalankan tugas|in";
                Storage::put($file, $image_base64);
            }else{
                echo "error|Presensi Gagal silahkan coba lagi!|in";
            }
        }

            $cekpresensi = Presensi::where([
                ['users_id', '=', auth()->user()->id],
                ['tgl_presensi', '=', $tgl_presensi]
            ]);
            if($cekpresensi->exists()){
                echo "error|Kamu telah melakukan Presensi hari ini|out";
            }else{
                
            }
    //     if($cek > 0){
    //         $data_pulang = [
    //             'jam_keluar_presensi' => $jam_presensi,
    //             'foto_keluar' => $fileName
    //         ];
    //         $update = DB::table('presensis')->where('tgl_presensi',$tgl_presensi)->where('users_id',$id)->update($data_pulang);
    //         if($update){
    //             echo "success|Terimakasih Telah Melakukan Presensi Pulang, Hati-Hati di Jalan|out";
    //             Storage::put($file, $image_base64);
    //     }else{
    //         echo "error|Presensi Gagal silahkan coba lagi!|out";
    //     }
    // }else{
    //      $data = [
    //         'users_id' => $id,
    //         'status' => 'Hadir',
    //         'tgl_presensi' => $tgl_presensi,
    //         'jam_presensi' => $jam_presensi,
    //         'foto_presensi' => $fileName
    //     ];
    //     $simpan = DB::table('presensis')->insert($data);
    //     if($simpan){
    //         echo "success|Presensi sukses, Selamat menjalankan tugas|in";
    //         Storage::put($file, $image_base64);
    //     }else{
    //         echo "error|Presensi Gagal silahkan coba lagi!|in";
    //     }
    // }
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Presensi $presensi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Presensi $presensi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Presensi $presensi)
    {
        //
    }

    public function filter(Request $request)
    {
        $start_date=$request->start_date;
        $end_date=$request->end_date;

        $presensifilter = Presensi::whereDate('tgl_presensi','>=',$start_date)->whereDate('tgl_presensi','<=',$end_date)->get();
        return view('admin.presensi.index',compact('presensifilter'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Presensi $presensi)
    {
        //
    }
}
