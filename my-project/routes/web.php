<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AttendeeController;
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
Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard.dashboard');

    Route::group(['prefix' => 'events'], function () {
        Route::get('', [EventController::class, 'index'])->name('events.index');
        Route::get('create', [EventController::class, 'create'])->name('events.create');
        Route::post('store', [EventController::class, 'store'])->name('events.store');
        Route::get('show/{eventId}', [EventController::class, 'show'])->name('events.show');
        Route::get('edit/{eventId}', [EventController::class, 'edit'])->name('events.edit');
        Route::put('edit/{eventId}', [EventController::class, 'update'])->name('events.update');
        Route::delete('destroy/{eventId}', [EventController::class,'destroy'])->name('events.destroy');
    });

    Route::group(['prefix'=> 'attendees'], function () {
        Route::get('show/{eventId}', [AttendeeController::class, 'show'])->name('attendees.show');
        Route::get('create/{eventId}', [AttendeeController::class, 'create'])->name('attendees.create');
        Route::post('store/{eventId}', [AttendeeController::class, 'store'])->name('attendees.store');
    });

    Route::group(['prefix' => 'profile'], function () {
        Route::get('', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
});

require __DIR__ . '/auth.php';
