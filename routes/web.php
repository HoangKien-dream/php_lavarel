<?php

use App\Http\Controllers\DataHandleController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get("/data-handle/{id}/path",[DataHandleController::class,'handlePathVariable']);
Route::get("/data-handle/query-string",[DataHandleController::class,'handleQueryString']);
Route::get("/data-handle/form",[DataHandleController::class,'handleForm']);
Route::post("/data-handle/form",[DataHandleController::class,'processForm']);
Route::get("demo/layout", function (){
   return view("admin/template/layout");
});
Route::get("demo/form", function (){
   return view("admin/template/form");
});
Route::get("demo/table", function (){
    return view("admin/template/table");
});
