<?php


use App\Http\Controllers;
// use App\Http\Middleware\HasRoleAdminMiddleware;
use App\Http\Middleware\RoleAdminMiddleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Route::get('/', function () {
    //     return view('layouts.template');
    // });
    Route::get('/', function () {
        $user = Auth::user();
        $role = ($user->roles()->first())->name;
    
        // Jika pengguna belum login, arahkan ke halaman login
        if (!$user) {
            return redirect('/login');
        }
        // Cek role pengguna dan arahkan ke dashboard yang sesuai
        if ($role === 'admin') {
            $user = DB::table('users')
            ->join('user_role', 'users.id', '=', 'user_role.user_id')
            ->where('user_role.role_id', '3')
            ->count();
            return view('admin.dashboard', compact('user'));
        } elseif ($role === 'user') {
            return view('user.dashboard');
        }
    
        // Jika role tidak dikenal, arahkan ke halaman home atau error
        return redirect('404');

        
    })->name('home');
    
    Route::middleware(['role:superadmin'])->group(function () {
    
    });
    
    Route::middleware(['role:admin'])->group(function () {
        
    // Route::get('/', [Controllers\UserController::class, 'index'])->name('user.index');
    Route::get('/admin-dashboard', function () {
        $user = DB::table('users')
        ->join('user_role', 'users.id', '=', 'user_role.user_id')
        ->where('user_role.role_id', '3')
        ->count();
        return view('admin.dashboard', compact('user'));
    })->name('dashboard.admin');
    
   
    

    Route::get('/profile', [Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [Controllers\ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::resource('daftar-peserta', Controllers\DaftarPesertaCont::class);
    Route::get('proses-penilaian',  [Controllers\ProsesPenilaianCont::class,'index'])->name('proses-penilaian.index'); 
    Route::get('proses-penilaian/{id}',  [Controllers\ProsesPenilaianCont::class,'show'])->name('proses-penilaian.show'); 
    // Route::resource('proses-penilaian', Controllers\ProsesPenilaianCont::class);
    Route::resource('hasil-penilaian-admin', Controllers\HasilPenilaianCont::class);
    
});



Route::middleware(['role:user'])->group(function () {
    // Route::get('/', [Controllers\UserController::class, 'index'])->name('user.index');
    Route::get('/user-dashboard', function () {
            return view('user.dashboard');
        });
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
        
        Route::get('/hasil-penilaian',function () {
            return view('hasil.index');
        })->name('hasil-penilaian.index');
        
        
    });
 

    
});

require __DIR__.'/auth.php';