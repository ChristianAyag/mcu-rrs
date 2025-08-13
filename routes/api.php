<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

// List all admins
Route::get('/superadmin/permission-control', [AdminController::class, 'index']);

// Store new admin
Route::post('/superadmin/store', [AdminController::class, 'store']);
?>