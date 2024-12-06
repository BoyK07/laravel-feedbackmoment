<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AttendeeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
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
        Route::get('show/{eventId}', [EventController::class, 'show'])->name('events.show');
        Route::get('calendar', [EventController::class, 'calendar'])->name('events.calendar');
        Route::middleware('role:admin')->group(function () {
            Route::get('create', [EventController::class, 'create'])->name('events.create');
            Route::post('store', [EventController::class, 'store'])->name('events.store');
            Route::get('edit/{eventId}', [EventController::class, 'edit'])->name('events.edit');
            Route::put('edit/{eventId}', [EventController::class, 'update'])->name('events.update');
            Route::delete('destroy/{eventId}', [EventController::class,'destroy'])->name('events.destroy');
        });
    });

    Route::group(['prefix'=> 'attendees'], function () {
        Route::get('event/{eventId}', [AttendeeController::class, 'index'])->name('attendees.index');
        Route::get('create/{eventId}', [AttendeeController::class, 'create'])->name('attendees.create');
        Route::post('store/{eventId}', [AttendeeController::class, 'store'])->name('attendees.store');
        Route::get('edit/{eventId}/{attendeeId}', [AttendeeController::class, 'edit'])->name('attendees.edit');
        Route::put('update/{eventId}/{attendeeId}', [AttendeeController::class, 'update'])->name('attendees.update');
        Route::delete('delete/{eventId}/{attendeeId}', [AttendeeController::class, 'destroy'])->name('attendees.destroy');
    });

    Route::group(['prefix'=> 'users'], function () {
        Route::get('', [UserController::class, 'index'])->name('users.index');
        Route::get('create', [UserController::class,'create'])->name('users.create');
        Route::post('store', [UserController::class,'store'])->name('users.store');
        Route::get('edit/{userId}', [UserController::class,'edit'])->name('users.edit');
        Route::put('update/{userId}', [UserController::class,'update'])->name('users.update');
        Route::delete('destroy/{userId}', [UserController::class,'destroy'])->name('users.destroy');
    });

    Route::group(['prefix'=> 'roles'], function () {
        Route::get('', [RoleController::class, 'index'])->name('roles.index');
        Route::get('create', [RoleController::class, 'create'])->name('roles.create');
        Route::post('store', [RoleController::class, 'store'])->name('roles.store');
        Route::get('edit/{roleId}', [RoleController::class, 'edit'])->name('roles.edit');
        Route::put('update/{roleId}', [RoleController::class, 'update'])->name('roles.update');
        Route::delete('destroy/{roleId}', [RoleController::class, 'destroy'])->name('roles.destroy');
    });

    Route::group(['prefix' => 'profile'], function () {
        Route::get('', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
});

require __DIR__ . '/auth.php';
