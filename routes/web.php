<?php


use App\Http\Controllers;
use App\Http\Middleware\HasRoleAdminMiddleware;
use Illuminate\Support\Facades\Route;




// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Route::get('/', function () {
    //     return view('layouts.template');
    // });

    Route::middleware('role:superadmin')->group(function () {
    
    });
    
    Route::middleware('role:admin')->group(function () {

        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    
        Route::get('/profile', [Controllers\ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [Controllers\ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [Controllers\ProfileController::class, 'destroy'])->name('profile.destroy');
    
        Route::resource('daftar-peserta', Controllers\DaftarPesertaCont::class);
        Route::resource('proses-penilaian', Controllers\ProsesPenilaianCont::class);
        Route::resource('hasil-penilaian', Controllers\HasilPenilaianCont::class);
        
    });

   
 
    Route::middleware('role:user')->group(function () {
        Route::get('/', [Controllers\UserController::class, 'index'])->name('user.index');
        Route::get('/dashboard', function () {
            return view('user.dashboard');
        })->name('dashboard');
        
        Route::get('/profile-user', [Controllers\ProfileController::class, 'index'])->name('profile-user.index');
        Route::get('/profile-edit', [Controllers\ProfileController::class, 'edit'])->name('profile-edit.edit');
        Route::put('/profile-update', [Controllers\ProfileController::class, 'update'])->name('profile-edit.update');
        // Route::delete('/profile', [Controllers\ProfileController::class, 'destroy'])->name('profile.destroy');
        
        Route::get('/input-data', [Controllers\InputNilaiCont::class, 'index'])->name('input-data.index');
        Route::put('/input-data', [Controllers\InputNilaiCont::class, 'update'])->name('input-data.update');
        Route::delete('/input-data/{filename}', [Controllers\InputNilaiCont::class, 'destroy'])->name('input-data.destroy');
        
        
        
    });
 

    
});

require __DIR__.'/auth.php';