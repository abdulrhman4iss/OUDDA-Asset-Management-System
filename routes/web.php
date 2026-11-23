
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/assets', function () {
    return view('assets.index');
});

Route::get('/assets/create', function () {
    return view('assets.create');
});

Route::get('/assets/edit', function () {
    return view('assets.edit');
});

Route::get('/assets/show', function () {
    return view('assets.show');
});

Route::get('/locations', function () {
    return view('locations.index');
});

Route::get('/locations/create', function () {
    return view('locations.create');
});

Route::get('/borrowings', function () {
    return view('borrowings.index');
});

Route::get('/borrowings/create', function () {
    return view('borrowings.create');
});

Route::get('/maintenance', function () {
    return view('maintenance.index');
});

Route::get('/maintenance/create', function () {
    return view('maintenance.create');
});

Route::get('/users', function () {
    return view('users.index');
});

Route::get('/reports', function () {
    return view('reports.index');
});
