<?php

use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KarirController;
use App\Http\Controllers\MasterBannerController;
use App\Http\Controllers\ProfileController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// })->middleware(['auth', 'verified','role:admin|user'])->name('dashboard');

Route::get('/admindashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified','role:admin|user'])->name('dashboard');

Route::get('/dashboard', function () {
    $masterbanner = DB::table('master_banners')->get();
    return view('landingpage.index',[
        'masterbanner' => $masterbanner
    ]);
})->middleware(['auth', 'verified','role:admin|user'])->name('dashboard');

Route::get('/', function () {
    $masterbanner = DB::table('master_banners')->get();
    return view('landingpage.index',[
        'masterbanner' => $masterbanner
    ]);
});

Route::get('/karir', function () {
    $karirs = DB::table('karirs')->get();
    return view('landingpage.karir',[
        'karirs' =>$karirs
    ]);
});

Route::get('/kontak', function () {
    return view('landingpage.kontak');
});

Route::get('/cektarif', function () {
    return view('landingpage.cektarif');
});

// Route::get('/landingpage', function () {
//     $masterbanner = DB::table('master_banners')->get();
//     return view('landingpage',[
//         'masterbanner' => $masterbanner
//     ]);
// });


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

    // //Berita
    // Route::get('/berita',[BeritaController::class,''])->name('');
});

Route::middleware(['auth','role:admin|user'])->group(function () {
    // Route::get('/berita',[BeritaController::class,'index'])->name('berita.index');
    Route::resource('/beritas', BeritaController::class);
    // Route::post('berita/{berita}', [BeritaController::class, 'update'])->name('berita.update');
    Route::resource('/karirs',KarirController::class);
    Route::resource('/masterbanner',MasterBannerController::class);
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
