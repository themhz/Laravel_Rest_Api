<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


//You put this single line, it will actually work as if you entered seperated Route resources
Route::resource('products', ProductController::class);

//Route::get('/products', [ProductController::class,'index']);
//Route::get('/products/{id}', [ProductController::class,'show']);
//Route::post('/products', [ProductController::class,'store']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
