<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UsulanController;

Route::get('/', function () {
    return view('modern-welcome');
});

Route::get('/pegawai/dashboardpegawai', function () {
    return view('/pegawai/dashboardpegawai');
    })->name('/pegawai/dashboardpegawai');

Route::get('/pegawai/timelinepegawai', function () {
    return view('/pegawai/timelinepegawai');
    })->name('/pegawai/timelinepegawai');

Route::get('/pegawai/inputusulanpegawai', function () {
    return view('/pegawai/inputusulanpegawai');
    })->name('/pegawai/inputusulanpegawai');

Route::get('/usulan', [UsulanController::class, 'create'])->name('usulan.create');
Route::post('/usulan/store-data', [UsulanController::class, 'storeData'])->name('usulan.storeData');
Route::post('/usulan/store-dokumen', [UsulanController::class, 'storeDokumen'])->name('usulan.storeDokumen');

Route::get('/pegawai/riwayatusulanpegawai', function () {
    return view('/pegawai/riwayatusulanpegawai');
    })->name('/pegawai/riwayatusulanpegawai');

Route::get('/userprofile', function () {
    return view('/userprofile');
    })->name('/userprofile');

Route::get('/operator/dashboardoperator', function () {
    return view('/operator/dashboardoperator');
    })->name('/operator/dashboardoperator');

Route::get('/operator/timelineoperator', function () {
    return view('/operator/timelineoperator');
    })->name('/operator/timelineoperator');

Route::get('/operator/inboxusulanoperator', function () {
    return view('/operator/inboxusulanoperator');
    })->name('/operator/inboxusulanoperator');

Route::get('/operator/daftarpegawaioperator', function () {
    return view('/operator/daftarpegawaioperator');
    })->name('/operator/daftarpegawaioperator');

Route::get('/admin/dashboardadmin', function () {
    return view('/admin/dashboardadmin');
    })->name('/admin/dashboardadmin');

Route::get('/admin/manajemenpenggunaadmin', function () {
    return view('/admin/manajemenpenggunaadmin');
    })->name('/admin/manajemenpenggunaadmin');

Route::get('/admin/rolenhakaksesadmin', function () {
    return view('/admin/rolenhakaksesadmin');
    })->name('/admin/rolenhakaksesadmin');

Route::get('/admin/timelineadmin', function () {
    return view('/admin/timelineadmin');
    })->name('/admin/timelineadmin');

Route::get('/admin/inboxusulanadmin', function () {
    return view('/admin/inboxusulanadmin');
    })->name('/admin/inboxusulanadmin');

Route::get('/admin/keloladokumenadmin', function () {
    return view('/admin/keloladokumenadmin');
    })->name('/admin/keloladokumenadmin');

Route::get('/admin/logaktivitasadmin', function () {
    return view('/admin/logaktivitasadmin');
    })->name('/admin/logaktivitasadmin');

Route::get('/admin/laporaneksporadmin', function () {
    return view('/admin/laporaneksporadmin');
    })->name('/admin/laporaneksporadmin');

Route::get('/admin/notifikasiadmin', function () {
    return view('/admin/notifikasiadmin');
    })->name('/admin/notifikasiadmin');

Route::get('/admin/pengaturanadmin', function () {
    return view('/admin/pengaturanadmin');
})->name('/admin/pengaturanadmin');

Route::get('/admin/pengaturanadmin', function () {
    return view('/admin/pengaturanadmin');
})->name('/admin/pengaturanadmin');

Route::get('/opsek/dashboardopsek', function () {
    return view('/opsek/dashboardopsek');
})->name('/opsek/dashboardopsek');

Route::get('/opsek/manajemenpegawaiopsek', function () {
    return view('/opsek/manajemenpegawaiopsek');
})->name('/opsek/manajemenpegawaiopsek');

Route::get('/opsek/timelineopsek', function () {
    return view('/opsek/timelineopsek');
})->name('/opsek/timelineopsek');

Route::get('/opsek/usulankenaikanopsek', function () {
    return view('/opsek/usulankenaikanopsek');
})->name('/opsek/usulankenaikanopsek');

Route::get('/opsek/laporanopsek', function () {
    return view('/opsek/laporanopsek');
})->name('/opsek/laporanopsek');

/*Route::get('/dashboard', function () {
    // Get the user role from session (set during login)
    $user = Auth::user();
    $userRole = session('user_role', $user ? $user->role : 'pegawai');
    
    // Pass the role to the dashboard view
    return view('pages.dashboard.index', ['userRole' => $userRole]);
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
*/