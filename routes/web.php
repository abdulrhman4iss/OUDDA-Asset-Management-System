
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssetController;

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

// Assets
Route::get('/assets', [AssetController::class, 'index']);
Route::get('/assets/create', [AssetController::class, 'create']);
Route::post('/assets', [AssetController::class, 'store']);
Route::get('/assets/{asset}/edit', [AssetController::class, 'edit']);
Route::put('/assets/{asset}', [AssetController::class, 'update']);
Route::delete('/assets/{asset}', [AssetController::class, 'destroy']);

Route::get('/assets/show', function () {
    return view('assets.show');
});

// Locations
Route::get('/locations', function () {
    return view('locations.index');
});

Route::get('/locations/create', function () {
    return view('locations.create');
});

// Borrowings
Route::get('/borrowings', function () {
    return view('borrowings.index');
});

Route::get('/borrowings/create', function () {
    return view('borrowings.create');
});

// Maintenance
Route::get('/maintenance', function () {
    return view('maintenance.index');
});

Route::get('/maintenance/create', function () {
    return view('maintenance.create');
});

// Users
Route::get('/users', function () {
    return view('users.index');
});

// Reports
Route::get('/reports', function () {
    return view('reports.index');
});
