<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminServiceController;
use App\Http\Controllers\AdminArticleController;
use App\Http\Controllers\AdminCompanyProfileController;

/*
|--------------------------------------------------------------------------
| Frontend
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', [ServiceController::class, 'index']);
Route::get('/services/{id}', [ServiceController::class, 'show']);

Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/articles/{id}', [ArticleController::class, 'show']);

Route::get('/contact', function () {
    return view('contact');
});

/*
|--------------------------------------------------------------------------
| Authentication
|--------------------------------------------------------------------------
*/

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Admin Area
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/admin/dashboard', function () {

        $totalServices = \App\Models\Service::count();
        $totalArticles = \App\Models\Article::count();

        return view('admin.dashboard', compact(
            'totalServices',
            'totalArticles'
        ));

    })->name('admin.dashboard');

    Route::get(
    '/admin/company-profile',
    [AdminCompanyProfileController::class, 'index']
);

Route::post(
    '/admin/company-profile/update',
    [AdminCompanyProfileController::class, 'update']
);

    /*
    |--------------------------------------------------------------------------
    | Services CRUD
    |--------------------------------------------------------------------------
    */

    Route::get('/admin/services', [AdminServiceController::class, 'index']);
    Route::get('/admin/services/create', [AdminServiceController::class, 'create']);
    Route::post('/admin/services/store', [AdminServiceController::class, 'store']);
    Route::get('/admin/services/edit/{id}', [AdminServiceController::class, 'edit']);
    Route::put('/admin/services/update/{id}', [AdminServiceController::class, 'update']);
    Route::delete('/admin/services/delete/{id}', [AdminServiceController::class, 'destroy']);

    /*
    |--------------------------------------------------------------------------
    | Articles CRUD
    |--------------------------------------------------------------------------
    */

    Route::get('/admin/articles', [AdminArticleController::class, 'index']);
    Route::get('/admin/articles/pdf', [AdminArticleController::class, 'exportPdf']);
    Route::get('/admin/articles/create', [AdminArticleController::class, 'create']);
    Route::post('/admin/articles/store', [AdminArticleController::class, 'store']);
    Route::get('/admin/articles/edit/{id}', [AdminArticleController::class, 'edit']);
    Route::put('/admin/articles/update/{id}', [AdminArticleController::class, 'update']);
    Route::delete('/admin/articles/delete/{id}', [AdminArticleController::class, 'destroy']);

});