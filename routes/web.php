<?php


use App\Http\Controllers;
use App\Http\Middleware\HasRoleAdminMiddleware;
use Illuminate\Support\Facades\Route;




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    });
    Route::middleware(HasRoleAdminMiddleware::class)->group(function()
    {

    });
    
    Route::get('/profile', [Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [Controllers\ProfileController::class, 'destroy'])->name('profile.destroy');
   
    Route::resource('daftar-peserta', Controllers\DaftarPesertaCont::class);
    Route::resource('proses-penilaian', Controllers\ProsesPenilaianCont::class);
    Route::resource('hasil-penilaian', Controllers\HasilPenilaianCont::class);
    
});

require __DIR__.'/auth.php';