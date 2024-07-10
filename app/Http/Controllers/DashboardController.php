<?php

namespace App\Http\Controllers;

use App\Models\Karir;
use Illuminate\Http\Request;
use App\Models\Karyawan;
use App\Models\User;
use App\Models\Presensi;
use App\Models\Berita;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        
        $karyawan = Karyawan::all();
        $karyawancount = Karyawan::count();
        $user = User::count();

        $karir = Karir::all();
        $karircount = Karir::count();

        $presensi = Presensi::all();
        $presensicount = Presensi::whereDate('tgl_presensi', today())->count();

        // $notpresensicount = Karyawan::whereDoesntHave('presensis', function ($query) {
        //     $query->whereDate('created_at', today());
        // })->count();
        $notpresensicount = $karyawancount - $presensicount;

        $user = Auth::user();

        $profilkaryawan = Karyawan::where('users_id',$user->id)->get();
        $checkactive = Karyawan::where('users_id', $user->id)->first();
        if ($checkactive->status_karyawan == "Non-Aktif") {
            return view('landingpage.welcome');
        }

        $berita = Berita::all();
        // $checkactive = Karyawan::where('users_id',$user->id)->get();
        

        return view('admin.dashboard',compact('karyawan','karyawancount','user','karir','karircount','presensi','presensicount','notpresensicount','user','profilkaryawan','berita','checkactive'));
        
        
    }
}
