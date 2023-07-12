<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KursusController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LinkMateriController;
use App\Models\Kursus;
use App\Models\LinkMateri;
use App\Models\Materi;

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

Route::get('/', function () {
    $kursus = Kursus::all();
    $materi = Materi::all();
    $link_materi = LinkMateri::all();
    return view('dashboard', compact('kursus', 'materi', 'link_materi'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/kursus', [KursusController::class, 'index'])->name('kursus.index');
    Route::get('/kursus/create', [KursusController::class, 'create'])->name('kursus.create');
    Route::post('/kursus', [KursusController::class, 'store'])->name('kursus.store');
    Route::get('/kursus/{id}', [KursusController::class, 'show'])->name('kursus.show');
    Route::get('/kursus/{id}/edit', [KursusController::class, 'edit'])->name('kursus.edit');
    Route::put('/kursus/{id}', [KursusController::class, 'update'])->name('kursus.update');
    Route::delete('/kursus/{id}', [KursusController::class, 'destroy'])->name('kursus.destroy');

    Route::get('/kursus/{id}/edit-materi-relationship', [KursusController::class, 'editMateriRelationship'])->name('kursus.edit-materi-relationship');
    Route::put('/kursus/{id}/materi', [KursusController::class, 'updateMateriRelationship'])->name('kursus.update-materi-relationship');
});

Route::middleware('auth')->group(function () {
    Route::get('/materi', [MateriController::class, 'index'])->name('materi.index');
    Route::get('/materi/create', [MateriController::class, 'create'])->name('materi.create');
    Route::post('/materi', [MateriController::class, 'store'])->name('materi.store');
    Route::get('/materi/{id}', [MateriController::class, 'show'])->name('materi.show');
    Route::get('/materi/{id}/edit', [MateriController::class, 'edit'])->name('materi.edit');
    Route::put('/materi/{id}', [MateriController::class, 'update'])->name('materi.update');
    Route::delete('/materi/{id}', [MateriController::class, 'destroy'])->name('materi.destroy');

    Route::get('/materi/{id}/edit-link-materi-relationship', [MateriController::class, 'editLinkMateriRelationship'])->name('materi.edit-link-materi-relationship');
    Route::put('/materi/{id}/link-materi', [MateriController::class, 'updateLinkMateriRelationship'])->name('materi.update-link-materi-relationship');
});

Route::middleware('auth')->group(function () {
    Route::get('/link-materi', [LinkMateriController::class, 'index'])->name('link-materi.index');
    Route::get('/link-materi/create', [LinkMateriController::class, 'create'])->name('link-materi.create');
    Route::post('/link-materi', [LinkMateriController::class, 'store'])->name('link-materi.store');
    Route::get('/link-materi/{id}', [LinkMateriController::class, 'show'])->name('link-materi.show');
    Route::get('/link-materi/{id}/edit', [LinkMateriController::class, 'edit'])->name('link-materi.edit');
    Route::put('/link-materi/{id}', [LinkMateriController::class, 'update'])->name('link-materi.update');
    Route::delete('/link-materi/{id}', [LinkMateriController::class, 'destroy'])->name('link-materi.destroy');
});


require __DIR__.'/auth.php';
