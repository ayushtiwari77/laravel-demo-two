<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome-no-db');
});

Route::get('/test', function () {
    return response()->json([
        'status' => 'success',
        'message' => 'Laravel is running successfully without a database on the cloud!',
        'timestamp' => now()->toIso8601String(),
    ]);
});
