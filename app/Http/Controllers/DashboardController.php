<?php

namespace App\Http\Controllers;

use App\Models\Karir;
use Illuminate\Http\Request;
use App\Models\Karyawan;
use App\Models\User;
use App\Models\Presensi;
use App\Models\Berita;

class DashboardController extends Controller
{
    public function index(){
        
        $karyawan = Karyawan::all();
        $karyawancount = Karyawan::count();
        $user = User::count();

        $karir = Karir::all();
        $karircount = Karir::count();

        $presensi = Presensi::all();
        $presensicount = Presensi::whereDate('created_at', today())->count();

        // $notpresensicount = Karyawan::whereDoesntHave('presensis', function ($query) {
        //     $query->whereDate('created_at', today());
        // })->count();
        $notpresensicount = $karyawancount - $presensicount;

        // $profilkaryawan = Karyawan::whereHas('users', function ($query) {
        //     $query->whereColumn('users.id' == 'karyawans.users_id');
        // })->get();

        $berita = Berita::all();




        return view('admin.dashboard',compact('karyawan','karyawancount','user','karir','karircount','presensi','presensicount','notpresensicount','berita'));
    }
}
