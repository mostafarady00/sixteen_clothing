<?php

use App\Http\Controllers\ProductController;
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



Route::controller(ProductController::class)->group(function(){
    Route::get('/',"indexUser")->name("Home");
});

Route::get('/Aboute',function(){
    return view("Aboute");
})->name("About");

Route::get('/product',function(){
    return view("Product");
})->name("product");

Route::get('/contact_us',function(){
    return view("contact");
})->name("contact");


Route::controller(ProductController::class)->group(function(){
    Route::get("/Products","index")->name("index.product")->middleware("auth");
    Route::get("/products-create","create")->name("product.create")->middleware("auth");
    Route::post("/created","created")->name("product.created")->middleware("auth");
    Route::get("/Delete-{id}","Delete")->name("product.Delete")->middleware("auth");
});





// sfdjgvoifdsoihfdhjoifdjpofdjdfopj[gdfjpogjdf]
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
