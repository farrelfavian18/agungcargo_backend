<?php

use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KarirController;
use App\Http\Controllers\LamaranController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\MasterBannerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PromosiController;
use App\Http\Controllers\DemosiController;
use App\Http\Controllers\MutasiController;
use App\Http\Controllers\PhkController;
use App\Http\Controllers\CutiController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// })->middleware(['auth', 'verified','role:admin|user'])->name('dashboard');

// yg di bwh ini web di edit
// Route::get('/admindashboard', function () {
//     return view('admin.dashboard');
// })->middleware(['auth', 'verified','role:admin|user'])->name('dashboard');

// Route::get('/admindashboard', function () {
//     return view('admin.dashboard');
// })->middleware(['auth', 'verified','role:admin|user'])->name('admindashboard');

//DASHBOARD LANDINGPAGE
// Route::get('/dashboard', function () {
//     $masterbanner = DB::table('master_banners')->get();
//     return view('landingpage.index',[
//         'masterbanner' => $masterbanner
//     ]);
// })->middleware(['auth', 'verified','role:admin|user'])->name('dashboard');

Route::get('/dashboard', function () {
    $masterbanner = DB::table('master_banners')->get();
    return view('landingpage.index',[
        'masterbanner' => $masterbanner
    ]);
})->name('dashboard');

//LANDINGPAGE DEFAULT
Route::get('/', function () {
    $masterbanner = DB::table('master_banners')->get();
    return view('landingpage.index',[
        'masterbanner' => $masterbanner
    ]);
});

Route::get('/inactive', function () {
    return view('landingpage.welcome');
})->name('inactive');


// Route::get('/', function () {
//        return view('admin.dashboard');
// })->middleware(['auth', 'verified','role:admin|user'])->name('dashboard');

//LANDINGPAGE KARIR
Route::get('/karir', function () {
    $karirs = DB::table('karirs')->get();
    return view('landingpage.karir',[
        'karirs' =>$karirs
    ]);
})->name('landingpage.karir');

//LANDINGPAGE LAMARAN
Route::get('/lamaran/lamaran-terkirim', function () {
    return view('landingpage.lamaranberhasil');
})->name('lamaran.show');;
Route::get('/lamaran/{karir}',[LamaranController::class,'index'])->name('lamaran.index');
Route::post('/lamaran/kirim-lamaran', [LamaranController::class, 'store'])->name('lamaran.store');
// Route::get('/lamaran/lamaran-terkirim', [LamaranController::class, 'show'])->name('lamaran.show');

//LANDINGPAGE KONTAK
Route::get('/kontak', function () {
    return view('landingpage.kontak');
});

//LANDINGPAGE CEKTARIF
Route::get('/cektarif', function () {
    return view('landingpage.cektarif');
});

// Route::get('/landingpage', function () {
//     $masterbanner = DB::table('master_banners')->get();
//     return view('landingpage',[
//         'masterbanner' => $masterbanner
//     ]);
// });

//role admin prefix admin (ADMIN ONYL)
Route::middleware(['auth','role:admin'])->name('admin')->prefix('admin')->group(function(){
    Route::get('/',[IndexController::class,'index'])->name('index');
    Route::resource('/roles', RoleController::class);
    Route::post('roles/{role}/permissions',[RoleController::class,'givePermission'])->name('roles.permissions');
    Route::delete('roles/{role}/permissions/{permission}',[RoleController::class,'revokePermission'])->name('roles.permissions.revoke');
    Route::resource('/permissions', PermissionController::class);
    Route::post('/permissions/{permission}/roles',[PermissionController::class,'assignRole'])->name('permission.roles');
    Route::delete('/permissions/{permission}/roles{role}',[PermissionController::class,'removeRole'])->name('permissions.roles.remove');
    Route::get('/users',[UserController::class,'index'])->name('user.index');
    Route::get('/users/{user}',[UserController::class,'show'])->name('users.show');
    Route::delete('/users/{user}',[UserController::class,'destroy'])->name('users.destroy');
    Route::post('/users/{user}/roles',[UserController::class,'assignRole'])->name('users.roles');
    Route::delete('/users/{user}/roles{role}',[UserController::class,'removeRole'])->name('users.roles.remove');
    Route::post('/users/{user}/permissions',[UserController::class,'givePermission'])->name('users.permissions');
    Route::delete('/users/{user}/permission{permission}',[UserController::class,'revokePermission'])->name('users.permissions.revoke');
    
    // Route::get('/data-lamaran',[LamaranController::class,'edit'])->name('lamaran.edit');
    Route::get('/data-lamaran',[LamaranController::class,'edit'])->name('lamaran.edit');
    // Route::get('/admindashboard',[DashboardController::class,'index'])->name('admindashboard');

    // //Berita
    // Route::get('/berita',[BeritaController::class,''])->name('');
});

//role admin only
Route::middleware(['auth','role:admin'])->group(function(){
    // Route::get('/admindashboard',[DashboardController::class,'index'])->name('admindashboard');
    Route::resource('/karyawan',KaryawanController::class);
    Route::resource('/beritas', BeritaController::class);
    Route::resource('/karirs',KarirController::class);
    Route::resource('/masterbanner',MasterBannerController::class);
    Route::resource('/presensi',PresensiController::class);
    Route::patch('/lamaran/{lamaran}/update',[LamaranController::class,'update'])->name('lamaran.update');
    Route::delete('/lamaran/{lamaran}/delete', [LamaranController::class, 'destroy'])->name('lamaran.destroy');
    // //Berita
    // Route::get('/berita',[BeritaController::class,''])->name('');
});

//role user(karyawan) dan admin
Route::middleware(['auth','role:admin|user'])->group(function () {
    
    // Route::get('/berita',[BeritaController::class,'index'])->name('berita.index');
    // Route::resource('/beritas', BeritaController::class);
    // Route::post('berita/{berita}', [BeritaController::class, 'update'])->name('berita.update');
    // Route::resource('/karirs',KarirController::class);
    // Route::resource('/masterbanner',MasterBannerController::class);
    // Route::resource('/karyawan',KaryawanController::class)->only(['index','update','edit','destroy']);
    // Route::resource('/karyawan',KaryawanController::class);
    Route::get('/admin/admindashboard',[DashboardController::class,'index'])->name('admindashboard');
    Route::post('/presensi-karyawan/store',[PresensiController::class,'store']);
    Route::get('/presensi-karyawan',[PresensiController::class,'masuk'])->name('presensi.masuk');
    Route::get('/filter',[PresensiController::class,'filter']);
    Route::resource('/promosi',PromosiController::class);
    Route::resource('/cuti',CutiController::class);
    Route::resource('/demosi',DemosiController::class);
    Route::resource('/mutasi',MutasiController::class);
    Route::resource('/phk',PhkController::class);
    // Route::patch('/datakaryawan/{datakaryawan}',[KaryawanController::class,'update'])->name('datakaryawan.update');
});

// VIEW UNTUK PROMOSI,DEMOSI,MUTASI,DAN PHK KARYAWAN USER/PROMOSI, DEMOSI DLL
Route::middleware(['auth','role:admin|user'])->prefix('user')->group(function(){
    Route::get('/promosi',[PromosiController::class,'promosiuser'])->name('promosiuser.index');
    Route::get('/demosi',[DemosiController::class,'demosiuser'])->name('demosiuser.index');
    Route::get('/mutasi',[MutasiController::class,'mutasiuser'])->name('mutasiuser.index');
    Route::get('/cuti',[CutiController::class,'cutiuser'])->name('cutiuser.index');
    Route::get('/phk',[PhkController::class,'phkuser'])->name('phkuser.index');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('/admin',function(){
//     return view('admin.adminpanel');
// })->middleware(['auth','role:admin'])->name('admin.adminpanel');

// Route::get('penulis',function(){
//     return '<h1>Hai Penulis<h1>';
// })->middleware(['auth','verified','role:penulis|admin']);

require __DIR__.'/auth.php';
