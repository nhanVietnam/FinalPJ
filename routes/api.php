<?php

use App\Http\Controllers\API\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// user
Route::get("/user", [UserController::class, "get"])->name("api.user.get");
Route::post("/user", [UserController::class, "post"])->name("api.user.post");
Route::put("/user/{id}", [UserController::class, "put"])->name("api.user.put");
Route::delete("/user/{id}", [UserController::class, "delete"])->name("api.user.delete");