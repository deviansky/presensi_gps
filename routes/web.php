<?php
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::post('/proseslogin', [AuthController::class, 'proseslogin']);


Route::get('/test-db', function () {
    try {
        DB::connection()->getPdo();
        return 'Database connection is successful';
    } catch (\Exception $e) {
        return 'Database connection failed: ' . $e->getMessage();
    }
});