<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\moduloJSController;

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

Route::get('/', HomeController::class);
Route::controller(moduloJSController::class)->group(function(){
    Route::get('/js/','printName');
    //Route::get('/curso/create','create');
    //Route::get('/curso/{curso}','show');
});
Route:: controller(CursoController::class)->group(function(){
    Route::get('/curso/','index');
    Route::get('/curso/create','create');
    Route::get('/curso/{curso}','show');
});
/*Route::get('curso/{type}/{category?}', function ($type,$category=null) {
    if($category) {
        return "welcome to curs : $type of category: $category";
    }
    else{
        return "welcome to curs : $type";
    }
    
});*/