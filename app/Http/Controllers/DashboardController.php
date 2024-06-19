<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;
use App\Models\User;

class DashboardController extends Controller
{
    public function index(){
        
        $karyawan = Karyawan::all();
        $karyawan = Karyawan::count();
        $user = User::count();


        return view('admin.dashboard',compact('karyawan','user'));
    }
}
