<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Home', [
        'frameworks' => ['Laravel', 'Inertia', 'Tailwind CSS', 'Vue']
    ]);
});

Route::get('/users', function () {
    sleep(2);

    return Inertia::render('Users', [
        'time' => now()->format('h:i:s A'),
    ]);
});

Route::get('/settings', function () {
    return Inertia::render('Settings');
});

Route::post('/test', function () {
    dd(request('foo'));
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
