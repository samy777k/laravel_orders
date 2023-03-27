<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MealController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DeshboardController;
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
    return view('welcome');
});

Route::get('dash' , [DeshboardController::class ,'counts']);




Route::get('index' , function(){

    return view('client.index');

});

Route::get('addCategory' , [CategoryController::class , 'create']);
Route::post('insertCategory' , [CategoryController::class , 'store']);

Route::get('showCategory' , [CategoryController::class , 'index']);

Route::post('deleteCtegory' , [CategoryController::class , 'destroy']);

Route::post('editeCategory' , [CategoryController::class , 'edite']);
Route::post('updateCategory' , [CategoryController::class , 'update']);


Route::get('addMeal' , [MealController::class , 'create']);
Route::post('insertMeal' , [MealController::class , 'store']);

Route::get('showMeal' , [MealController::class , 'index']);

Route::post('deleteMeal' , [MealController::class , 'destroy']);

Route::post('editeMeal' , [MealController::class , 'edite']);
Route::post('updateMeal' , [MealController::class , 'update']);

Route::get('showOrder' , [OrderController::class , 'index']);
Route::get('indexMeal' , [OrderController::class , 'client']);
Route::get('createOrder' , [OrderController::class , 'create']);
Route::post('clientOrder' , [OrderController::class , 'store']);
Route::post('deleteOrder' , [OrderController::class , 'destroy']);
Route::get('sortIndex' , [OrderController::class , 'sort']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


